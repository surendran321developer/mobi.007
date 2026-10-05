<?php

include_once 'Admin/db.php';

/* =========================================================
   GET PRODUCT DETAILS FROM URL
========================================================= */

$productId = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$productName = trim($_GET['product'] ?? '');
$productPrice = trim($_GET['price'] ?? '');
$productImage = trim($_GET['image'] ?? '');
$productDescription = trim($_GET['description'] ?? '');


/* =========================================================
   DEFAULT PRODUCT DATA
========================================================= */

$product = [
    'id' => $productId,
    'name' => $productName,
    'price' => $productPrice,
    'image' => 'assets/images/card.jpeg',
    'description' => $productDescription,
];


/* =========================================================
   IMAGE FROM URL
========================================================= */

if ($productImage !== '') {

    $safeImage = str_replace('\\', '/', $productImage);

    if (
        strpos($safeImage, 'assets/') === 0 ||
        strpos($safeImage, 'Admin/uploads/products/') === 0
    ) {

        if (file_exists($safeImage)) {
            $product['image'] = $safeImage;
        }
    }
}


/* =========================================================
   DATABASE PRODUCT BY ID
========================================================= */

if ($productId > 0) {

    $stmt = $conn->prepare("
        SELECT
            id,
            product_name,
            price,
            image_path
        FROM products
        WHERE id = ?
        AND status = 1
        LIMIT 1
    ");

    if ($stmt) {

        $stmt->bind_param("i", $productId);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {

            $product['id'] = (int) $row['id'];

            /*
             * URL product name/price already exists.
             * But if DB has product, use DB values.
             */
            $product['name'] = $row['product_name'];
            $product['price'] = $row['price'];

            /*
             * IMPORTANT:
             * URL description is NOT removed.
             * If URL has description, keep it.
             */

            $images = json_decode(
                $row['image_path'] ?? '[]',
                true
            );

            $firstImage = '';

            if (is_array($images)) {
                $firstImage = $images[0] ?? '';
            }

            if ($firstImage !== '') {

                $candidate =
                    'Admin/uploads/products/' .
                    basename($firstImage);

                if (file_exists($candidate)) {

                    /*
                     * Only use DB image if URL image
                     * was not supplied.
                     */
                    if ($productImage === '') {
                        $product['image'] = $candidate;
                    }
                }
            }
        }

        $stmt->close();
    }
}


/* =========================================================
   DATABASE PRODUCT BY NAME
========================================================= */

elseif ($productName !== '') {

    $stmt = $conn->prepare("
        SELECT
            id,
            product_name,
            price,
            image_path
        FROM products
        WHERE product_name = ?
        AND status = 1
        LIMIT 1
    ");

    if ($stmt) {

        $stmt->bind_param("s", $productName);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {

            $product['id'] = (int) $row['id'];

            $product['name'] = $row['product_name'];
            $product['price'] = $row['price'];

            $images = json_decode(
                $row['image_path'] ?? '[]',
                true
            );

            $firstImage = '';

            if (is_array($images)) {
                $firstImage = $images[0] ?? '';
            }

            if ($firstImage !== '') {

                $candidate =
                    'Admin/uploads/products/' .
                    basename($firstImage);

                if (file_exists($candidate)) {

                    /*
                     * Keep URL image if supplied.
                     */
                    if ($productImage === '') {
                        $product['image'] = $candidate;
                    }
                }
            }
        }

        $stmt->close();
    }
}


/* =========================================================
   CLOSE DATABASE
========================================================= */

$conn->close();


/* =========================================================
   ESCAPE FUNCTION
========================================================= */

function e($value)
{
    return htmlspecialchars(
        (string) $value,
        ENT_QUOTES,
        'UTF-8'
    );
}

?>

<!DOCTYPE html>

<html lang="en">

<?php include 'head.php'; ?>


<style>

/* =========================================================
   ORDER PAGE
========================================================= */

.order-page-wrap {
    padding: 25px 15px 50px;
}


/* =========================================================
   CART + FORM LAYOUT
========================================================= */

.order-layout {

    display: grid;

    grid-template-columns:
        minmax(0, 560px)
        minmax(0, 420px);

    gap: 25px;

    align-items: start;

    max-width: 1100px;

    margin: 0 auto;
}


/* =========================================================
   BOX
========================================================= */

.order-product-box,
.order-form-box {

    background: rgba(255,255,255,0.96);

    border: 1px solid rgba(76,210,220,0.22);

    border-radius: 18px;

    padding: 22px;

    box-shadow:
        0 12px 35px rgba(0,0,0,0.08);

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
}


.order-product-box:hover,
.order-form-box:hover {

    transform: translateY(-3px);

    box-shadow:
        0 18px 45px rgba(0,0,0,0.12);
}


/* =========================================================
   TITLE
========================================================= */

.cart-title {

    display: flex;

    align-items: center;

    justify-content: space-between;

    margin-bottom: 20px;

    gap: 10px;
}


.cart-title h3 {

    margin: 0;

    font-size: 22px;

    font-weight: 800;

    color: #111;
}


.cart-count {

     background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;

    color: #fff;

    border-radius: 50px;

    padding: 7px 13px;

    font-size: 12px;

    font-weight: 800;

    box-shadow:
        0 5px 15px rgba(59,203,216,0.25);
}


/* =========================================================
   CART ITEM
========================================================= */

.cart-item {

    position: relative;

    display: grid;

    grid-template-columns: 105px 1fr auto;

    gap: 15px;

    align-items: center;

    padding: 14px;

    margin-bottom: 14px;

    border-radius: 16px;

    background:
        linear-gradient(
            135deg,
            rgba(255,255,255,0.98),
            rgba(225,249,251,0.72)
        );

    border: 1px solid rgba(50,200,210,0.16);

    overflow: hidden;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease,
        border-color 0.35s ease;
}


.cart-item::before {

    content: "";

    position: absolute;

    left: -80px;

    top: 0;

    width: 60px;

    height: 100%;

    background: rgba(255,255,255,0.55);

    transform: skewX(-20deg);

    transition: left 0.6s ease;
}


.cart-item:hover::before {

    left: 110%;
}


.cart-item:hover {

    transform: translateY(-4px) scale(1.01);

    box-shadow:
        0 12px 30px rgba(44,190,205,0.17);

    border-color: rgba(44,190,205,0.35);
}


/* =========================================================
   CART IMAGE
========================================================= */

.cart-image {

    width: 105px;

    height: 105px;

    border-radius: 13px;

    object-fit: contain;

    background: #fff;

    border: 1px solid #eee;

    padding: 5px;

    transition:
        transform 0.4s ease;
}


.cart-item:hover .cart-image {

    transform:
        scale(1.08)
        rotate(-2deg);
}


/* =========================================================
   CART DETAILS
========================================================= */

.cart-details h4 {

    margin: 0 0 8px;

    color: #111;

    font-size: 16px;

    font-weight: 800;

    line-height: 1.35;
}


.cart-price {

    color: #111;

    font-size: 16px;

    font-weight: 800;

    margin-bottom: 10px;
}


.cart-description {

    color: #667;

    font-size: 12px;

    line-height: 1.5;

    max-height: 38px;

    overflow: hidden;

    margin-bottom: 10px;
}


/* =========================================================
   QUANTITY
========================================================= */

.quantity-box {

    display: flex;

    align-items: center;

    width: max-content;

    border-radius: 50px;

    background: #fff;

    border: 1px solid #d9eef0;

    overflow: hidden;
}


.quantity-box button {

    width: 31px;

    height: 31px;

    border: 0;

    background: #111;

    color: #fff;

    font-size: 17px;

    cursor: pointer;

    transition:
        background 0.25s ease,
        transform 0.25s ease;
}


.quantity-box button:hover {

      background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;

    transform: scale(1.08);
}


.quantity-value {

    min-width: 35px;

    text-align: center;

    font-size: 13px;

    font-weight: 800;

    color: #111;
}


/* =========================================================
   ITEM TOTAL
========================================================= */

.item-total {

    color: #111;

    font-size: 14px;

    font-weight: 800;

    white-space: nowrap;

    margin-top: 8px;

    text-align: right;
}


/* =========================================================
   REMOVE BUTTON
========================================================= */

.remove-cart {

    border: 0;

    background: transparent;

    color: #dc3545;

    font-size: 12px;

    font-weight: 700;

    cursor: pointer;

    margin-top: 8px;

    transition:
        color 0.25s ease,
        transform 0.25s ease;
}


.remove-cart:hover {

    color: #a50010;

    transform: translateX(2px);
}


/* =========================================================
   EMPTY CART
========================================================= */

.empty-cart {

    display: none;

    text-align: center;

    padding: 45px 20px;

    border-radius: 15px;

    background:
        linear-gradient(
            135deg,
            #fff,
            #effcfd
        );

    border: 1px dashed #9bdfe5;
}


.empty-cart-icon {

    font-size: 42px;

    margin-bottom: 10px;
}


.empty-cart h4 {

    margin: 0 0 7px;

    color: #111;

    font-weight: 800;
}


.empty-cart p {

    color: #777;

    font-size: 13px;

    margin: 0;
}


/* =========================================================
   TOTAL BOX
========================================================= */

.cart-total-box {

    margin-top: 18px;

    padding: 17px;

    border-radius: 15px;
  background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;
    color: #fff;

    box-shadow:
        0 12px 25px rgba(0,0,0,0.16);
}


.total-row {

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 15px;

    margin-bottom: 8px;

    font-size: 14px;
}


.total-row:last-child {

    margin-bottom: 0;

    padding-top: 10px;

    border-top: 1px solid rgba(255,255,255,0.15);

    font-size: 20px;

    font-weight: 800;
}


#grandTotal {

    color: #fff;
}


/* =========================================================
   FORM TITLE
========================================================= */

.order-form-box h5 {

    color: #111;

    font-size: 21px;

    font-weight: 800;

    margin: 0 0 20px;
}


/* =========================================================
   FORM
========================================================= */

.form-row {

    margin-bottom: 14px;
}


.form-row label {

    color: #333;

    display: block;

    font-size: 13px;

    font-weight: 700;

    margin-bottom: 6px;
}


.input-text {

    border: 1px solid #dcdcdc;

    border-radius: 9px;

    box-sizing: border-box;

    font-size: 14px;

    outline: none;

    padding: 11px 13px;

    width: 100%;

    background: #fff;

    transition:
        border-color 0.3s ease,
        box-shadow 0.3s ease,
        transform 0.3s ease;
}


.input-text:focus {

    border-color: #41cad5;

    box-shadow:
        0 0 0 3px rgba(65,202,213,0.12);

    transform: translateY(-1px);
}


textarea.input-text {

    min-height: 92px;

    resize: vertical;
}


/* =========================================================
   PAYMENT PANEL
========================================================= */

.panel {

    display: none;

    margin-bottom: 16px;

    padding: 15px;

    border-radius: 13px;

    background:
        linear-gradient(
            135deg,
            #f4ffff,
            #e8fafb
        );

    border: 1px solid #bdebed;

    color: #111;

    font-size: 14px;

    animation:
        panelIn 0.35s ease;
}


.panel.visible {

    display: block;
}


@keyframes panelIn {

    from {

        opacity: 0;

        transform:
            translateY(-8px);

    }

    to {

        opacity: 1;

        transform:
            translateY(0);
    }
}


#qrImage {

    display: block;

    max-width: 220px;

    width: 100%;

    height: auto;

    margin: 0 auto 12px;

    border-radius: 10px;

    background: #fff;

    padding: 5px;
}


/* =========================================================
   ERROR
========================================================= */

.error {

    color: #c0392b;

    font-size: 13px;

    margin-top: 6px;

    display: none;

    background: #fff0f0;

    padding: 10px;

    border-radius: 8px;

    border: 1px solid #ffd2d2;
}


/* =========================================================
   ORDER BUTTON
========================================================= */

.button-submit {

    position: relative;

    overflow: hidden;

     background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;

    border: 0;

    border-radius: 10px;

    color: #fff;

    cursor: pointer;

    font-size: 15px;

    font-weight: 800;

    padding: 14px;

    width: 100%;

    margin-top: 10px;

    box-shadow:
        0 10px 22px rgba(47,190,202,0.25);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
}


.button-submit::before {

    content: "";

    position: absolute;

    top: 0;

    left: -120%;

    width: 80%;

    height: 100%;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,0.35),
            transparent
        );

    transform: skewX(-20deg);

    transition: left 0.6s ease;
}


.button-submit:hover::before {

    left: 130%;
}


.button-submit:hover {

    transform: translateY(-2px);

    box-shadow:
        0 15px 30px rgba(47,190,202,0.32);
}


.button-submit:disabled {

    opacity: 0.65;

    cursor: not-allowed;

    transform: none;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 900px) {

    .order-layout {

        grid-template-columns: 1fr;

    }

}


@media (max-width: 600px) {

    .order-page-wrap {

        padding: 15px 10px 35px;
    }


    .order-product-box,
    .order-form-box {

        padding: 15px;

        border-radius: 14px;
    }


    .cart-item {

        grid-template-columns:
            75px 1fr;

        gap: 11px;

        padding: 11px;
    }


    .cart-image {

        width: 75px;

        height: 75px;
    }


    .cart-item > div:last-child {

        grid-column: 2;
    }


    .cart-details h4 {

        font-size: 14px;
    }


    .item-total {

        text-align: left;
    }

}

</style>


<body class="page-inner">

<div class="wrapper">


    <!-- =====================================================
         NAVBAR
    ====================================================== -->

    <?php include 'nav_2.php'; ?>


    <!-- =====================================================
         MAIN
    ====================================================== -->

    <main class="site-main site-login">


        <!-- =================================================
             BREADCRUMB
        ================================================== -->

        <div class="container">

            <ol class="breadcrumb-page">

                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>

                <li class="active">
                    <a href="#">
                        Order
                    </a>
                </li>

            </ol>

        </div>


        <!-- =================================================
             ORDER PAGE
        ================================================== -->

        <div class="order-page-wrap">


            <div class="order-layout">


                <!-- =================================================
                     CART PRODUCTS
                ================================================== -->

                <div class="order-product-box">


                    <div class="cart-title">

                        <h3>
                            Your Cart
                        </h3>

                        <span
                            class="cart-count"
                            id="cartCount"
                        >
                            0 Items
                        </span>

                    </div>


                    <!-- CART ITEMS -->

                    <div id="cartItems"></div>


                    <!-- EMPTY CART -->

                    <div
                        class="empty-cart"
                        id="emptyCart"
                    >

                        <div class="empty-cart-icon">
                            🛒
                        </div>

                        <h4>
                            Your cart is empty
                        </h4>

                        <p>
                            Add products from the home page.
                        </p>

                    </div>


                    <!-- TOTAL -->

                    <div
                        class="cart-total-box"
                        id="cartTotalBox"
                    >

                        <div class="total-row">

                            <span>
                                Total Items
                            </span>

                            <strong id="totalItems">
                                0
                            </strong>

                        </div>


                        <div class="total-row">

                            <span>
                                Sub Total
                            </span>

                            <strong id="subTotal">
                                Rs. 0.00
                            </strong>

                        </div>


                        <div class="total-row">

                            <span>
                                Grand Total
                            </span>

                            <strong id="grandTotal">
                                Rs. 0.00
                            </strong>

                        </div>

                    </div>


                </div>


                <!-- =================================================
                     ORDER FORM
                ================================================== -->

                <div class="order-form-box">


                    <h5>
                        Place Your Order
                    </h5>


                    <form
                        id="orderForm"
                        method="POST"
                        action="Admin/save-order.php"
                    >


                        <!-- CART JSON -->

                        <input
                            type="hidden"
                            name="cart_json"
                            id="cart_json"
                        >


                        <!-- TOTAL -->

                        <input
                            type="hidden"
                            name="cart_total"
                            id="cart_total"
                        >


                        <!-- CUSTOMER NAME -->

                        <div class="form-row">

                            <label for="customer_name">
                                Name
                            </label>

                            <input
                                id="customer_name"
                                type="text"
                                name="customer_name"
                                class="input-text"
                                required
                            >

                        </div>


                        <!-- PHONE NUMBER -->

                        <div class="form-row">

                            <label for="phone_number">
                                Phone Number
                            </label>

                            <input
                                id="phone_number"
                                type="tel"
                                name="phone_number"
                                class="input-text"
                                pattern="[0-9+\-\s]{7,20}"
                                required
                            >

                        </div>


                        <!-- PRODUCT SUMMARY -->

                        <div class="form-row">

                            <label for="product_name">
                                Products
                            </label>

                            <input
                                id="product_name"
                                type="text"
                                name="product_name"
                                class="input-text"
                                readonly
                                required
                            >

                        </div>


                        <!-- DELIVERY ADDRESS -->

                        <div class="form-row">

                            <label for="customer_address">
                                Delivery Address
                            </label>

                            <textarea
                                id="customer_address"
                                name="customer_address"
                                class="input-text"
                                required
                            ></textarea>

                        </div>


                        <!-- PAYMENT -->

                        <div class="form-row">

                            <label for="payment_method">
                                Payment Method
                            </label>

                            <select
                                id="payment_method"
                                name="payment_method"
                                class="input-text"
                                required
                            >

                                <option value="">
                                    Select Payment Method
                                </option>

                                <option value="cod">
                                    Cash on Delivery
                                </option>

                                <option value="online">
                                    Online Payment
                                </option>

                            </select>

                        </div>


                        <!-- ONLINE PAYMENT -->

                        <div
                            id="onlinePanel"
                            class="panel"
                        >

                            <img
                                id="qrImage"
                                src="assets/images/home-product/payment_QR.jpeg"
                                width="200"
                                alt="UPI QR Code"
                            >

                            <p style="color:black;">

                                UPI ID:

                                <strong id="upiIdLabel"></strong>

                            </p>

                            <p class="caption">
                                Scan to pay with any UPI app
                            </p>

                            <p style="color:red;">
                                Share your payment screenshot
                            </p>

                        </div>


                        <!-- COD -->

                        <div
                            id="codPanel"
                            class="panel"
                        >

                            Pay with cash when your order arrives.

                        </div>


                        <!-- ORDER ID -->

                        <div class="form-row">

                            <label for="order_id">
                                Your Order ID (for reference)
                            </label>

                            <input
                                type="text"
                                name="order_id"
                                class="input-text"
                                id="order_id"
                                readonly
                                required
                            >

                        </div>


                        <!-- ERROR -->

                        <div
                            class="error"
                            id="errorMsg"
                        >
                            Please fill in all fields before placing the order.
                        </div>


                        <!-- BUTTON -->

                        <button
                            type="button"
                            id="orderButton"
                            class="button-submit"
                        >

                            Order Now

                        </button>


                    </form>


                </div>


            </div>


        </div>


    </main>


    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <?php include 'footer.php'; ?>


</div>


<!-- =========================================================
     JAVASCRIPT LIBRARIES
========================================================= -->

<script src="assets/js/jquery-2.1.4.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.sticky.js"></script>

<script src="assets/js/function.js"></script>


<script>

/* =========================================================
   ELEMENTS
========================================================= */

const cartItemsBox =
    document.getElementById("cartItems");

const cartCount =
    document.getElementById("cartCount");

const emptyCart =
    document.getElementById("emptyCart");

const cartTotalBox =
    document.getElementById("cartTotalBox");

const totalItems =
    document.getElementById("totalItems");

const subTotal =
    document.getElementById("subTotal");

const grandTotal =
    document.getElementById("grandTotal");

const cartJsonInput =
    document.getElementById("cart_json");

const cartTotalInput =
    document.getElementById("cart_total");

const productNameInput =
    document.getElementById("product_name");

const orderButton =
    document.getElementById("orderButton");

const errorMsg =
    document.getElementById("errorMsg");

const paymentMethod =
    document.getElementById("payment_method");

const onlinePanel =
    document.getElementById("onlinePanel");

const codPanel =
    document.getElementById("codPanel");


/* =========================================================
   CART STORAGE KEY
========================================================= */

const CART_KEY = "mobiWorldCart";


/* =========================================================
   GET CART
========================================================= */

function getCart() {

    try {

        const cart =
            JSON.parse(
                localStorage.getItem(CART_KEY)
            );

        if (Array.isArray(cart)) {

            return cart;

        }

    } catch (error) {

        console.error(
            "Cart Read Error:",
            error
        );

    }

    return [];

}


/* =========================================================
   SAVE CART
========================================================= */

function saveCart(cart) {

    localStorage.setItem(
        CART_KEY,
        JSON.stringify(cart)
    );

}


/* =========================================================
   MONEY
========================================================= */

function money(value) {

    return "Rs. " +
        Number(value || 0)
        .toLocaleString(
            "en-IN",
            {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }
        );

}


/* =========================================================
   ESCAPE HTML
========================================================= */

function escapeHtml(value) {

    return String(value || "")
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");

}


/* =========================================================
   ADD URL PRODUCT TO CART
   IMPORTANT FIX
========================================================= */

function addUrlProductToCart() {

    const params =
        new URLSearchParams(
            window.location.search
        );


    const urlProduct =
        params.get("product") || "";

    const urlPrice =
        params.get("price") || "";

    const urlImage =
        params.get("image") || "";

    const urlDescription =
        params.get("description") || "";

    const urlId =
        params.get("id") || "0";


    /*
     * If no product information in URL,
     * don't do anything.
     */

    if (
        !urlProduct &&
        !urlPrice &&
        !urlImage
    ) {

        return;

    }


    let cart = getCart();


    /*
     * Find existing same product.
     */

    const existingIndex =
        cart.findIndex(
            item =>
                String(item.name || "")
                    .trim()
                    .toLowerCase()
                ===
                String(urlProduct)
                    .trim()
                    .toLowerCase()
        );


    /*
     * Product already exists
     */

    if (existingIndex !== -1) {

        /*
         * IMPORTANT:
         * Update missing product information.
         */

        if (urlImage) {

            cart[existingIndex].image =
                urlImage;

        }

        if (urlPrice) {

            cart[existingIndex].price =
                Number(urlPrice);

        }

        if (urlDescription) {

            cart[existingIndex].description =
                urlDescription;

        }

        if (!cart[existingIndex].quantity) {

            cart[existingIndex].quantity = 1;

        }

    }

    /*
     * Product doesn't exist.
     */

    else {

        cart.push({

            id: Number(urlId || 0),

            name: urlProduct,

            price: Number(urlPrice || 0),

            image:
                urlImage ||
                "assets/images/card.jpeg",

            description:
                urlDescription || "",

            quantity: 1

        });

    }


    saveCart(cart);

}


/* =========================================================
   DISPLAY CART
========================================================= */

function displayCart() {

    const cart = getCart();

    cartItemsBox.innerHTML = "";


    /* =====================================================
       EMPTY CART
    ====================================================== */

    if (cart.length === 0) {

        emptyCart.style.display =
            "block";

        cartTotalBox.style.display =
            "none";

        cartCount.innerText =
            "0 Items";

        totalItems.innerText =
            "0";

        subTotal.innerText =
            "Rs. 0.00";

        grandTotal.innerText =
            "Rs. 0.00";

        productNameInput.value =
            "";

        cartJsonInput.value =
            "[]";

        cartTotalInput.value =
            "0";

        return;

    }


    emptyCart.style.display =
        "none";

    cartTotalBox.style.display =
        "block";


    let totalQuantity = 0;

    let totalPrice = 0;

    let productNames = [];


    /* =====================================================
       CART LOOP
    ====================================================== */

    cart.forEach(
        (item, index) => {

            /*
             * Make sure every product
             * has correct values.
             */

            const quantity =
                Math.max(
                    1,
                    Number(
                        item.quantity || 1
                    )
                );


            const price =
                Number(
                    item.price || 0
                );


            const itemTotal =
                price * quantity;


            totalQuantity +=
                quantity;


            totalPrice +=
                itemTotal;


            productNames.push(
                String(
                    item.name || "Product"
                ) +
                " x " +
                quantity
            );


            /*
             * PRODUCT IMAGE
             */

            const image =
                item.image &&
                String(item.image).trim()
                    !== ""
                ?
                item.image
                :
                "assets/images/card.jpeg";


            /*
             * PRODUCT DESCRIPTION
             */

            const description =
                item.description
                ?
                item.description
                :
                "";


            /*
             * PRODUCT NAME
             */

            const itemName =
                item.name ||
                "Product";


            /* =================================================
               CART ITEM HTML
            ================================================== */

            const itemHtml = `

                <div
                    class="cart-item"
                    data-index="${index}"
                >

                    <img
                        class="cart-image"
                        src="${escapeHtml(image)}"
                        alt="${escapeHtml(itemName)}"
                        onerror="this.onerror=null;this.src='assets/images/card.jpeg';"
                    >


                    <div class="cart-details">

                        <h4>
                            ${escapeHtml(itemName)}
                        </h4>


                        <div class="cart-price">
                            ${money(price)}
                        </div>


                        ${
                            description
                            ?
                            `
                            <div class="cart-description">
                                ${escapeHtml(description)}
                            </div>
                            `
                            :
                            ""
                        }


                        <div class="quantity-box">

                            <button
                                type="button"
                                class="qty-minus"
                                data-index="${index}"
                            >
                                −
                            </button>


                            <span class="quantity-value">
                                ${quantity}
                            </span>


                            <button
                                type="button"
                                class="qty-plus"
                                data-index="${index}"
                            >
                                +
                            </button>

                        </div>


                        <button
                            type="button"
                            class="remove-cart"
                            data-index="${index}"
                        >
                            ✕ Remove
                        </button>

                    </div>


                    <div>

                        <div class="item-total">
                            ${money(itemTotal)}
                        </div>

                    </div>

                </div>

            `;


            cartItemsBox.insertAdjacentHTML(
                "beforeend",
                itemHtml
            );

        }
    );


    /* =====================================================
       TOTAL
    ====================================================== */

    cartCount.innerText =
        totalQuantity +
        (
            totalQuantity === 1
            ?
            " Item"
            :
            " Items"
        );


    totalItems.innerText =
        totalQuantity;


    subTotal.innerText =
        money(totalPrice);


    grandTotal.innerText =
        money(totalPrice);


    cartJsonInput.value =
        JSON.stringify(cart);


    cartTotalInput.value =
        totalPrice.toFixed(2);


    productNameInput.value =
        productNames.join(", ");

}


/* =========================================================
   QUANTITY PLUS
========================================================= */

document.addEventListener(
    "click",
    function(event) {

        if (
            event.target.classList.contains(
                "qty-plus"
            )
        ) {

            const index =
                Number(
                    event.target.dataset.index
                );


            const cart =
                getCart();


            if (cart[index]) {

                cart[index].quantity =
                    Number(
                        cart[index].quantity || 1
                    ) + 1;


                saveCart(cart);

                displayCart();

            }

        }

    }
);


/* =========================================================
   QUANTITY MINUS
========================================================= */

document.addEventListener(
    "click",
    function(event) {

        if (
            event.target.classList.contains(
                "qty-minus"
            )
        ) {

            const index =
                Number(
                    event.target.dataset.index
                );


            const cart =
                getCart();


            if (cart[index]) {

                const currentQuantity =
                    Number(
                        cart[index].quantity || 1
                    );


                if (
                    currentQuantity > 1
                ) {

                    cart[index].quantity =
                        currentQuantity - 1;

                }


                saveCart(cart);

                displayCart();

            }

        }

    }
);


/* =========================================================
   REMOVE ITEM
========================================================= */

document.addEventListener(
    "click",
    function(event) {

        if (
            event.target.classList.contains(
                "remove-cart"
            )
        ) {

            const index =
                Number(
                    event.target.dataset.index
                );


            const cart =
                getCart();


            cart.splice(
                index,
                1
            );


            saveCart(cart);

            displayCart();

        }

    }
);


/* =========================================================
   PAYMENT PANELS
========================================================= */

function updatePaymentPanels() {

    onlinePanel.classList.toggle(
        "visible",
        paymentMethod.value === "online"
    );


    codPanel.classList.toggle(
        "visible",
        paymentMethod.value === "cod"
    );


    if (paymentMethod.value) {

        clearError();

    }

}


paymentMethod.addEventListener(
    "change",
    updatePaymentPanels
);


/* =========================================================
   UPI
========================================================= */

const UPI_ID =
    "yogirija712-1@okaxis";


const PAYEE_NAME =
    "mobi world";


const qrData =
    `upi://pay?pa=${UPI_ID}&pn=${encodeURIComponent(PAYEE_NAME)}`;


const qrUrl =
    `https://api.qrserver.com/v1/create-qr-code/?size=220x220&data=${encodeURIComponent(qrData)}`;


document.getElementById(
    "qrImage"
).src = qrUrl;


document.getElementById(
    "upiIdLabel"
).textContent = UPI_ID;


/* =========================================================
   CLEAR ERROR
========================================================= */

function clearError() {

    errorMsg.style.display =
        "none";

}


/* =========================================================
   ORDER ID
========================================================= */

function generateOrderId() {

    const timePart =
        Date.now().toString();


    const randomPart =
        Math.floor(
            100000 +
            Math.random() * 900000
        ).toString();


    const orderId =
        "ORD" +
        timePart +
        randomPart;


    document.getElementById(
        "order_id"
    ).value =
        orderId;

}


/* =========================================================
   SEND ORDER
========================================================= */

function sendOrder() {

    const cart =
        getCart();


    /* =====================================================
       CART VALIDATION
    ====================================================== */

    if (cart.length === 0) {

        errorMsg.innerText =
            "Please add at least one product to cart.";

        errorMsg.style.display =
            "block";

        return;

    }


    const name =
        document.getElementById(
            "customer_name"
        ).value.trim();


    const mobile =
        document.getElementById(
            "phone_number"
        ).value.trim();


    const product =
        document.getElementById(
            "product_name"
        ).value.trim();


    const address =
        document.getElementById(
            "customer_address"
        ).value.trim();


    const orderId =
        document.getElementById(
            "order_id"
        ).value.trim();


    const payment =
        paymentMethod.value;


    /* =====================================================
       VALIDATION
    ====================================================== */

    if (
        !name ||
        !mobile ||
        !product ||
        !address ||
        !payment ||
        !orderId
    ) {

        errorMsg.innerText =
            "Please fill in all fields before placing the order.";

        errorMsg.style.display =
            "block";

        return;

    }


    clearError();


    /* =====================================================
       PAYMENT TEXT
    ====================================================== */

    const paymentText =
        payment === "cod"
        ?
        "Cash on Delivery"
        :
        "Online Payment";


    /* =====================================================
       TOTAL
    ====================================================== */

    let total =
        0;


    cart.forEach(
        item => {

            total +=
                Number(
                    item.price || 0
                ) *
                Number(
                    item.quantity || 1
                );

        }
    );


    /* =====================================================
       PRODUCT MESSAGE
    ====================================================== */

    let productMessage =
        "";


    cart.forEach(
        (item, index) => {

            const itemTotal =
                Number(
                    item.price || 0
                ) *
                Number(
                    item.quantity || 1
                );


            productMessage +=
                `${index + 1}. ${item.name} x ${item.quantity} = ${money(itemTotal)}\n`;

        }
    );


    /* =====================================================
       WHATSAPP MESSAGE
    ====================================================== */

    const message =

        `New Order:\n\n` +

        `Name: ${name}\n` +

        `Mobile: ${mobile}\n\n` +

        `Products:\n` +

        productMessage +

        `\nGrand Total: ${money(total)}\n` +

        `Delivery Address: ${address}\n` +

        `Order ID: ${orderId}\n` +

        `Payment Method: ${paymentText}`;


    const whatsappUrl =
        `https://wa.me/919361692260?text=${encodeURIComponent(message)}`;


    /* =====================================================
       FORM
    ====================================================== */

    const form =
        document.getElementById(
            "orderForm"
        );


    const formData =
        new FormData(form);


    formData.set(
        "cart_json",
        JSON.stringify(cart)
    );


    formData.set(
        "cart_total",
        total.toFixed(2)
    );


    /* =====================================================
       BUTTON LOADING
    ====================================================== */

    orderButton.disabled =
        true;


    orderButton.innerText =
        "Saving Order...";


    /* =====================================================
       DATABASE
    ====================================================== */

    fetch(
        "Admin/save-order.php",
        {
            method: "POST",
            body: formData
        }
    )

    .then(
        response =>
            response.text()
    )

    .then(
        result => {

            result =
                result.trim();


            if (
                result === "SUCCESS"
            ) {

                orderButton.disabled =
                    false;


                orderButton.innerText =
                    "Order Now";


                /*
                 * CLEAR CART AFTER SUCCESS
                 */

                localStorage.removeItem(
                    CART_KEY
                );


                /*
                 * OPEN WHATSAPP
                 */

                window.location.href =
                    whatsappUrl;

            }

            else {

                orderButton.disabled =
                    false;


                orderButton.innerText =
                    "Order Now";


                console.error(
                    "Database Error:",
                    result
                );


                alert(
                    "Order could not be saved. Please try again."
                );

            }

        }
    )

    .catch(
        error => {

            console.error(
                "Order Error:",
                error
            );


            orderButton.disabled =
                false;


            orderButton.innerText =
                "Order Now";


            alert(
                "Something went wrong while saving the order."
            );

        }
    );

}


/* =========================================================
   CLEAR ERROR WHILE TYPING
========================================================= */

const fields = [

    document.getElementById(
        "customer_name"
    ),

    document.getElementById(
        "phone_number"
    ),

    document.getElementById(
        "customer_address"
    ),

    paymentMethod

];


fields.forEach(
    field => {

        field.addEventListener(
            "input",
            clearError
        );

    }
);


/* =========================================================
   ORDER BUTTON
========================================================= */

orderButton.addEventListener(
    "click",
    sendOrder
);


/* =========================================================
   PAGE LOAD
========================================================= */

window.addEventListener(
    "load",
    function() {

        /*
         * FIRST:
         * Read product from URL and put it into cart.
         */

        addUrlProductToCart();


        /*
         * THEN:
         * Display cart products.
         */

        displayCart();


        /*
         * Generate order ID.
         */

        generateOrderId();

    }
);


/* =========================================================
   AUTO REFRESH CART
========================================================= */

window.addEventListener(
    "storage",
    function(event) {

        if (
            event.key === CART_KEY
        ) {

            displayCart();

        }

    }
);

</script>


</body>

</html>