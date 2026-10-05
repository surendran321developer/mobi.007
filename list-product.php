<?php

include_once 'Admin/db.php';

/* =========================================================
   ESCAPE FUNCTION
========================================================= */
function e($value)
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

?>
<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<style>

/* =========================================================
   PRODUCT PAGE
========================================================= */

.product-page-area {
    padding-bottom: 50px;
}


/* =========================================================
   PRODUCT GRID
========================================================= */

.product-grid {

    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 22px;

    margin: 20px 0 50px;
}


/* =========================================================
   PRODUCT CARD
========================================================= */

.pc {

    position: relative;

    background: #ffffff;

    border-radius: 15px;

    overflow: hidden;

    display: flex;

    flex-direction: column;

    min-height: 440px;

    border: 1px solid rgba(59, 203, 216, 0.16);

    box-shadow:
        0 4px 18px rgba(0, 0, 0, 0.07);

    transition:
        transform 0.4s ease,
        box-shadow 0.4s ease,
        border-color 0.4s ease;

    animation: cardFadeIn 0.7s ease both;
}


/* =========================================================
   CARD ANIMATION
========================================================= */

@keyframes cardFadeIn {

    from {

        opacity: 0;

        transform: translateY(25px);

    }

    to {

        opacity: 1;

        transform: translateY(0);

    }

}


/* =========================================================
   CARD HOVER
========================================================= */

.pc:hover {

    transform: translateY(-8px);

    border-color: rgba(59, 203, 216, 0.55);

    box-shadow:
        0 18px 40px rgba(0, 0, 0, 0.13),
        0 0 0 1px rgba(59, 203, 216, 0.08);

}


/* =========================================================
   TOP GLOW
========================================================= */

.pc::before {

    content: "";

    position: absolute;

    top: 0;

    left: -100%;

    width: 70%;

    height: 3px;

      background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;

    transition: left 0.7s ease;

    z-index: 5;

}


.pc:hover::before {

    left: 130%;

}


/* =========================================================
   IMAGE AREA
========================================================= */

.pc .pc-img {

    position: relative;

    height: 220px;

    background:
        linear-gradient(
            135deg,
            #fafafa,
            #f1fdfe
        );

    display: flex;

    align-items: center;

    justify-content: center;

    overflow: hidden;

}


/* =========================================================
   IMAGE LIGHT EFFECT
========================================================= */

.pc .pc-img::after {

    content: "";

    position: absolute;

    top: 0;

    left: -120%;

    width: 70%;

    height: 100%;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,0.7),
            transparent
        );

    transform: skewX(-20deg);

    transition: left 0.8s ease;

}


.pc:hover .pc-img::after {

    left: 130%;

}


/* =========================================================
   PRODUCT IMAGE
========================================================= */

.pc .pc-img img {

    width: 100%;

    height: 100%;

    object-fit: contain;

    padding: 13px;

    position: relative;

    z-index: 2;

    transition:
        transform 0.5s ease,
        filter 0.5s ease;

}


.pc:hover .pc-img img {

    transform:
        scale(1.09)
        rotate(-1deg);

    filter:
        drop-shadow(0 12px 14px rgba(0,0,0,0.14));

}


/* =========================================================
   BADGE
========================================================= */

.pc .pc-badge {

    position: absolute;

    top: 12px;

    left: 12px;

    z-index: 10;

      background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;

    color: #fff;

    font-size: 11px;

    padding: 5px 10px;

    border-radius: 50px;

    font-weight: 800;

    letter-spacing: 0.3px;

    box-shadow:
        0 5px 14px rgba(0,0,0,0.15);

    animation: badgeFloat 2.5s ease-in-out infinite;

}


@keyframes badgeFloat {

    0%,
    100% {

        transform: translateY(0);

    }

    50% {

        transform: translateY(-3px);

    }

}


/* =========================================================
   CARD BODY
========================================================= */

.pc .pc-body {

    padding: 15px;

    display: flex;

    flex-direction: column;

    flex: 1;

}


/* =========================================================
   PRODUCT NAME
========================================================= */

.pc .pc-name {

    font-size: 14px;

    font-weight: 800;

    color: #111;

    line-height: 1.5;

    min-height: 42px;

    margin-bottom: 8px;

}


/* =========================================================
   PRODUCT DESCRIPTION
========================================================= */

.pc .pc-description {

    color: #707070;

    font-size: 12px;

    line-height: 1.5;

    min-height: 36px;

    margin-bottom: 10px;

}


/* =========================================================
   PRICE
========================================================= */

.pc .pc-price {

    display: flex;

    align-items: center;

    flex-wrap: wrap;

    gap: 5px;

    margin-bottom: 3px;

}


.pc .pc-price .new {

    color: #111;

    font-weight: 900;

    font-size: 17px;

}


.pc .pc-price .old {

    text-decoration: line-through;

    color: #aaa;

    font-size: 12px;

}


/* =========================================================
   STOCK
========================================================= */

.pc .pc-stock {

    color: #20a45b;

    font-size: 12px;

    font-weight: 700;

    margin: 5px 0 12px;

}


.pc .pc-stock::before {

    content: "";

    display: inline-block;

    width: 7px;

    height: 7px;

    border-radius: 50%;

    background: #20a45b;

    margin-right: 6px;

    animation: stockPulse 1.5s infinite;

}


@keyframes stockPulse {

    0% {

        box-shadow:
            0 0 0 0 rgba(32,164,91,0.5);

    }

    70% {

        box-shadow:
            0 0 0 6px rgba(32,164,91,0);

    }

    100% {

        box-shadow:
            0 0 0 0 rgba(32,164,91,0);

    }

}


/* =========================================================
   ORDER BUTTON
========================================================= */

.pc .pc-btn {

    position: relative;

    overflow: hidden;

    display: block;

    width: 100%;

    box-sizing: border-box;

    text-align: center;

    text-decoration: none;

     background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;

    color: #ffffff;

    padding: 11px 14px;

    border-radius: 9px;

    font-size: 13px;

    font-weight: 800;

    letter-spacing: 0.2px;

    margin-top: auto;

    box-shadow:
        0 7px 18px rgba(57,203,215,0.22);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease,
        background 0.3s ease;

}


/* =========================================================
   BUTTON SHINE
========================================================= */

.pc .pc-btn::before {

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
            rgba(255,255,255,0.45),
            transparent
        );

    transform: skewX(-20deg);

    transition: left 0.6s ease;

}


.pc .pc-btn:hover::before {

    left: 130%;

}


/* =========================================================
   BUTTON HOVER
========================================================= */

.pc .pc-btn:hover {

    color: #ffffff;

    text-decoration: none;

    transform: translateY(-3px);
  background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;

    box-shadow:
        0 12px 25px rgba(57,203,215,0.35);

}


/* =========================================================
   BUTTON CLICK
========================================================= */

.pc .pc-btn:active {

    transform: scale(0.97);

}


/* =========================================================
   HEADING
========================================================= */

.page-heading {

    position: relative;

    font-size: 24px;

    font-weight: 800;

    color: #111;

    margin: 20px 0 4px;

    padding-bottom: 12px;

    border-bottom: 2px solid #eee;

}


.page-heading::after {

    content: "";

    position: absolute;

    left: 0;

    bottom: -2px;

    width: 80px;

    height: 3px;

    border-radius: 10px;

     background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;

    animation:
        headingLine 2s ease-in-out infinite alternate;

}


@keyframes headingLine {

    from {

        width: 60px;

    }

    to {

        width: 130px;

    }

}


/* =========================================================
   BREADCRUMB
========================================================= */

.breadcrumb-page {

    padding: 10px 0;

    font-size: 13px;

    list-style: none;

    display: flex;

    gap: 7px;

    margin: 0;

}


.breadcrumb-page li + li::before {

    content: '/';

    color: #aaa;

    margin-right: 7px;

}


.breadcrumb-page a {

    color: #555;

    text-decoration: none;

    transition: color 0.3s ease;

}


.breadcrumb-page a:hover {

    color: #18bfce;

}


/* =========================================================
   RESPONSIVE TABLET
========================================================= */

@media (max-width: 900px) {

    .product-grid {

        grid-template-columns: repeat(2, 1fr);

        gap: 18px;

    }

}


/* =========================================================
   RESPONSIVE MOBILE
========================================================= */

@media (max-width: 600px) {

    .product-grid {

        grid-template-columns: 1fr 1fr;

        gap: 12px;

    }

    .pc {

        min-height: 390px;

        border-radius: 12px;

    }

    .pc .pc-img {

        height: 170px;

    }

    .pc .pc-body {

        padding: 11px;

    }

    .pc .pc-name {

        font-size: 12px;

    }

    .pc .pc-description {

        font-size: 11px;

    }

    .pc .pc-price .new {

        font-size: 14px;

    }

    .pc .pc-btn {

        font-size: 12px;

        padding: 9px 7px;

    }

}


/* =========================================================
   VERY SMALL MOBILE
========================================================= */

@media (max-width: 400px) {

    .product-grid {

        grid-template-columns: 1fr;

    }

    .pc .pc-img {

        height: 210px;

    }

}

</style>


<body class="page-product">

<div class="wrapper">


    <!-- =====================================================
         NAVBAR
    ====================================================== -->

    <?php include 'nav_2.php'; ?>


    <!-- =====================================================
         MAIN PRODUCT AREA
    ====================================================== -->

    <div class="container product-page-area">


        <!-- =================================================
             BREADCRUMB
        ================================================== -->

        <ul class="breadcrumb-page">

            <li>
                <a href="index.php">
                    Home
                </a>
            </li>

            <li>
                Products
            </li>

        </ul>


        <!-- =================================================
             PAGE HEADING
        ================================================== -->

        <h2 class="page-heading">
            Our Products
        </h2>


        <?php

        /* =====================================================
           12 FEATURED PRODUCTS
        ===================================================== */

        $featured = [

            [
                'img' =>
                    'assets/images/home-product/pro1.webp',

                'name' =>
                    'Airpods pro 3rd generation + 5000 mah magsafe combo offer',

                'price' =>
                    2499,

                'old' =>
                    '',

                'badge' =>
                    'Combo',

                'description' =>
                    'AirPods Pro 3rd Generation with 5000mAh MagSafe powerbank combo offer.'
            ],



            [
                'img' =>
                    'assets/images/home-product/airpodspro.jpg',

                'name' =>
                    'AirPods Pro 3rd Gen - Made in Vietnam',

                'price' =>
                    2499,

                'old' =>
                    '',

                'badge' =>
                    'New',

                'description' =>
                    'AirPods Pro 3rd Gen with premium sound, comfortable design and wireless connectivity.'
            ],


            [
                'img' =>
                    'assets/images/home-product/adapter.webp',

                'name' =>
                    'Iphone 20W Original Adapter',

                'price' =>
                    1500,

                'old' =>
                    3500,

                'badge' =>
                    'Offer',

                'description' =>
                    '20W fast charging adapter designed for iPhone and compatible Apple devices.'
            ],


            [
                'img' =>
                    'assets/images/home-product/deal5.webp',

                'name' =>
                    'Marshall Kilburn II 36W Portable Bluetooth Speaker - Black & Brass',

                'price' =>
                    2599,

                'old' =>
                      3500,

                'badge' =>
                    'Hot',

                'description' =>
                    'Portable Bluetooth speaker with powerful sound, premium design and long-lasting battery.'
            ],


            [
                'img' =>
                    'assets/images/home-product/airpods1.jpg',

                'name' =>
                    'Airpods Max ANC',

                'price' =>
                    2000,

                'old' =>
                    2999,

                'badge' =>
                    '-50%',

                'description' =>
                    'Premium over-ear headphones with ANC, immersive audio and comfortable listening experience.'
            ],


            [
                'img' =>
                    'assets/images/product/i_smart_thumbnail2c9d6.jpg',

                'name' =>
                    'iModa Ultra Smart Watch – AMOLED IP67 ChatGPT',

                'price' =>
                    2499,

                'old' =>
                    4999,

                'badge' =>
                    'New',

                'description' =>
                    'AMOLED smart watch with IP67 protection, smart features, fitness tracking and ChatGPT support.'
            ],


            [
                'img' =>
                    'assets/images/4.jpg',

                'name' =>
                    'MagSafe Wireless 5000mAh PowerBank',

                'price' =>
                    599,

                'old' =>
                    1299,

                'badge' =>
                    'New',

                'description' =>
                    'Compact 5000mAh MagSafe wireless powerbank for convenient mobile charging on the go.'
            ],


            [
                'img' =>
                    'assets/images/product/1.jpg',

                'name' =>
                    'HK10 Ultra 3 MAX Smart Watch',

                'price' =>
                    2799,

                'old' =>
                    3999,

                'badge' =>
                    '-30%',

                'description' =>
                    'Stylish Ultra 3 MAX smartwatch with modern display, smart functions and fitness features.'
            ],


            [
                'img' =>
                    'assets/images/home-product/watchcombo.jpg',

                'name' =>
                    'Apple Combo – S10 Smartwatch & AirPods Pro ANC',

                'price' =>
                    2999,

                'old' =>
                    3999,

                'badge' =>
                    '-25%',

                'description' =>
                    'Smartwatch and AirPods Pro ANC combo designed for everyday entertainment and smart lifestyle.'
            ],


            [
                'img' =>
                    'assets/images/home-product/charger.webp',

                'name' =>
                    'Original 20W iPhone Charger + Type C to Type C cable',

                'price' =>
                    2500,

                'old' =>
                    4999,

                'badge' =>
                    '-25%',

                'description' =>
                    '20W fast charger with Type-C to Type-C cable for efficient and reliable charging.'
            ],


            [
                'img' =>
                    'assets/images/home-product/apple_products.jpg',

                'name' =>
                    'Apple Ecosystem Essentials',

                'price' =>
                    4999,

                'old' =>
                    8999,

                'badge' =>
                    '-25%',

                'description' =>
                    'Essential Apple accessories and products bundled together for a complete smart ecosystem.'
            ],

            [
    'img' =>
        'assets/images/home-product/s40_projector.jpg',

    'name' =>
        'S40 Projector',

    'price' =>
        3500,

    'old' =>
        4500,

    'badge' =>
        '-22%',

    'description' =>
        'S40 Projector with a premium viewing experience, compact design and high-quality display for home entertainment.'
],

        ];


        /* =====================================================
           DATABASE PRODUCTS
        ===================================================== */

        $db_products = [];


        if (isset($conn) && !$conn->connect_error) {

            $res = $conn->query(
                "SELECT *
                 FROM products
                 WHERE status = 1
                 ORDER BY created_at DESC
                 LIMIT 20"
            );


            if ($res && $res->num_rows > 0) {

                while ($r = $res->fetch_assoc()) {

                    $imgs =
                        json_decode(
                            $r['image_path'] ?? '[]',
                            true
                        );


                    $img =
                        'assets/images/product/default-product.png';


                    if (
                        is_array($imgs) &&
                        !empty($imgs[0])
                    ) {

                        $p =
                            'Admin/uploads/products/' .
                            basename($imgs[0]);


                        if (file_exists($p)) {

                            $img = $p;

                        }

                    }


                    $db_products[] = [

                        'img' =>
                            $img,

                        'name' =>
                            $r['product_name'],

                        'price' =>
                            (float)$r['price'],

                        'old' =>
                            (float)$r['price'] * 1.20,

                        'badge' =>
                            '-20%',

                        'description' =>
                            'Quality product from Mobi World with reliable performance and great value.'

                    ];

                }

            }

        }


        if (isset($conn)) {

            $conn->close();

        }


        /* =====================================================
           MERGE PRODUCTS
        ===================================================== */

        $all =
            array_merge(
                $featured,
                $db_products
            );

        ?>


        <!-- =================================================
             PRODUCT GRID
        ================================================== -->

        <div class="product-grid">


            <?php foreach ($all as $index => $p): ?>


                <?php

                $priceNumber =
                    (float)$p['price'];

                $priceDisplay =
                    '₹' .
                    number_format(
                        $priceNumber,
                        0
                    );


                $oldDisplay = '';

                if (
                    isset($p['old']) &&
                    $p['old'] !== '' &&
                    (float)$p['old'] > 0
                ) {

                    $oldDisplay =
                        '₹' .
                        number_format(
                            (float)$p['old'],
                            0
                        );

                }


                /*
                 * IMPORTANT:
                 * These values are sent to order.php.
                 */

                $orderUrl =
                    'order.php?' .
                    'product=' .
                    urlencode($p['name']) .
                    '&price=' .
                    urlencode($priceNumber) .
                    '&image=' .
                    urlencode($p['img']) .
                    '&description=' .
                    urlencode($p['description']);

                ?>


                <!-- =================================================
                     PRODUCT CARD
                ================================================== -->

                <div
                    class="pc"
                    style="animation-delay: <?php echo ($index * 0.06); ?>s;"
                >


                    <!-- BADGE -->

                    <span class="pc-badge">

                        <?php echo e($p['badge']); ?>

                    </span>


                    <!-- IMAGE -->

                    <div class="pc-img">

                        <img
                            src="<?php echo e($p['img']); ?>"
                            alt="<?php echo e($p['name']); ?>"
                            onerror="this.onerror=null;this.src='assets/images/product/default-product.png';"
                        >

                    </div>


                    <!-- BODY -->

                    <div class="pc-body">


                        <!-- PRODUCT NAME -->

                        <div class="pc-name">

                            <?php echo e($p['name']); ?>

                        </div>


                        <!-- DESCRIPTION -->

                        <div class="pc-description">

                            <?php echo e($p['description']); ?>

                        </div>


                        <!-- PRICE -->

                        <div class="pc-price">

                            <span class="new">

                                <?php echo e($priceDisplay); ?>

                            </span>


                            <?php if ($oldDisplay !== ''): ?>

                                <span class="old">

                                    <?php echo e($oldDisplay); ?>

                                </span>

                            <?php endif; ?>

                        </div>


                        <!-- STOCK -->

                        <div class="pc-stock">

                            In Stock

                        </div>


                        <!-- ORDER BUTTON -->

                        <a
                            href="<?php echo e($orderUrl); ?>"
                            class="pc-btn"
                        >

                            Order Now

                        </a>


                    </div>


                </div>


            <?php endforeach; ?>


        </div>


    </div>


    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <?php include 'footer.php'; ?>


</div>


<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script src="assets/js/jquery-2.1.4.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.sticky.js"></script>

<script src="assets/js/chosen.jquery.min.js"></script>

<script src="assets/js/function.js"></script>


<script>

/* =========================================================
   PRODUCT CARD HOVER
========================================================= */

document.querySelectorAll(".pc").forEach(function(card) {

    card.addEventListener("mouseenter", function() {

        card.style.zIndex = "20";

    });


    card.addEventListener("mouseleave", function() {

        card.style.zIndex = "1";

    });

});


/* =========================================================
   BUTTON CLICK EFFECT
========================================================= */

document.querySelectorAll(".pc-btn").forEach(function(button) {

    button.addEventListener("click", function() {

        button.style.transform = "scale(0.96)";

        setTimeout(function() {

            button.style.transform = "";

        }, 180);

    });

});

</script>


</body>

</html>