<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamingtheme.kiendaotac.com/html/dagon/detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 10:09:41 GMT -->
<?php include 'head.php'; ?>

<body class="page-product detail-product">
    <div class="wrapper">
        <form id="block-search-mobile" method="get" class="block-search-mobile">
            <div class="form-content">
                <div class="control">
                    <a href="#" class="close-block-serach"><span class="icon flaticon-close"></span></a>
                    <input type="text" name="search" placeholder="Search" class="input-subscribe">
                    <button type="submit" class="btn search">
                        <span><i class="flaticon-magnifying-glass" aria-hidden="true"></i></span>
                    </button>
                </div>
            </div>
        </form>
        <div id="block-quick-view-popup" class="block-quick-view-popup">
            <div class="quick-view-content">
                <a href="#" class="popup-btn-close"><span class="flaticon-close"></span></a>
                <div class="product-items">
                    <div class="product-image">
                        <a href="#"><img src="assets/images/popup-pro.jpg" alt="p1"></a>
                    </div>
                    <div class="product-info">
                        <div class="product-name"><a href="#">Photo Camera</a></div>
                        <span class="star-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span class="review">5 Review(s)</span>
                        </span>
                        <a href="wishlist.php" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Add to
                            Wishlist</a>
                        <div class="product-infomation">
                            Description Our new HPB12 / A12 battery is rated at 2000mAh and designed to power up Black
                            and
                            Decker FireStorm line of 12V tools allowing...
                        </div>
                    </div>
                    <div class="product-info-price">
                        <span class="price">
                            <ins>$229.00</ins>
                            <del>$259.00</del>
                        </span>
                        <div class="quantity">
                            <h6 class="quantity-title">Quantity:</h6>
                            <div class="buttons-added">
                                <input type="text" value="1" title="Qty" class="input-text qty text" size="1">
                                <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                            </div>
                        </div>
                        <a href="#" class="btn-add-to-cart">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADER -->
        <?php include 'nav_2.php'; ?><!-- end HEADER -->
        <!-- MAIN -->
        <main class="site-main">

            <?php
            include_once 'Admin/db.php';

            // Get the product ID from the URL
            $product_id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

            if ($product_id > 0) {
                // Fetch product details from the database
                $sql = "SELECT * FROM products WHERE id = ? AND status = 1";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $product_id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();

                    // Handle image
                    $images = json_decode($row['image_path'] ?? '[]', true);
                    $first_image = $images[0] ?? '';
                    $product_image = 'assets/images/product/default-product.png'; // default image
            
                    if (!empty($first_image)) {
                        $first_image_path = 'Admin/uploads/products/' . basename($first_image);
                        if (file_exists($first_image_path)) {
                            $product_image = $first_image_path;
                        }
                    }

                    // Status, price, and sanitization
                    $product_quantity = max(0, (int) $row['quantity']);
                    $availability = ($product_quantity > 0) ? 'In Stock' : 'Out of Stock';
                    $formatted_price = '₹' . number_format($row['price'], 2);
                    $old_price = '₹' . number_format($row['price'] * 1.2, 2);
                    $product_name = htmlspecialchars($row['product_name']);
                    $product_description = nl2br(htmlspecialchars($row['description']));
                } else {
                    echo "Product not found.";
                    exit;
                }
            } else {
                echo "Invalid product ID.";
                exit;
            }
            ?>
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="index-2.php">Home </a></li>
                    <li class="active"><a href="#">Detail</a></li>
                </ol>
            </div>
            <div class="container mt-5">
                <div class="product-content-single" style="border: 2px solid gray;padding:50px;margin:20px;">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="product-media text-center">
                                <div class="image-preview-container">
                                    <img id="img_zoom" src="<?php echo $product_image; ?>"
                                        alt="<?php echo $product_name; ?>" style="width: 400px; height: 400px;">
                                </div>
                                <!-- <div class="product-preview mt-3">
                                    <img src="<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>">
                                </div> -->
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="product-info-main" >
                                <h2><?php echo $product_name; ?></h2>

                                <p class="text-muted"><?php echo $product_description; ?></p>

                                <div class="mb-3">
                                    <span class="text-primary h4"><?php echo $formatted_price; ?></span>
                                    <del class="text-muted ml-2"><?php echo $old_price; ?></del>
                                </div>

                                <p>
                                    <span
                                        class="badge badge-<?php echo ($availability === 'In Stock') ? 'success' : 'danger'; ?>">
                                        <?php echo $availability; ?>
                                    </span>
                                </p>

                                <div class="quantity mb-3">
                                    <label for="qty">Quantity:</label>
                                    <input type="number" id="qty" name="qty" value="1" min="1"
                                        max="<?php echo $product_quantity; ?>" class="form-control" style="width: 100px;"
                                        <?php echo ($product_quantity === 0) ? 'disabled' : ''; ?>>
                                </div>
<br>
<br>
                                <a href="order.php?id=<?php echo $product_id; ?>" class="btn btn-danger btn-block" style="width: 400px;height:40px">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart
                                </a>

                                <!-- <div class="mt-3">
                                    <a href="compare.php?id=<?php echo $product_id; ?>"
                                        class="btn btn-outline-secondary btn-sm">Compare</a>
                                    <a href="wishlist.php?id=<?php echo $product_id; ?>"
                                        class="btn btn-outline-danger btn-sm">Wishlist</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="container">
                <div class="tab-details-product">
                    <ul class="box-tab nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                        <li><a data-toggle="tab" href="#tab-2">Addtional Infomation</a></li>
                        <li><a data-toggle="tab" href="#tab-3">Reviews</a></li>
                    </ul>
                    <div class="tab-container">
                        <div id="tab-1" class="tab-panel active">
                            <div class="box-content">
                                <p>Lorem ipsum dolor sit amet, an munere tibique consequat mel, congue albucius no qui,
                                    at
                                    everti meliore erroribus sea. Vero graeco cotidieque ea duo, in eirmod insolens
                                    interpretaris nam. Pro at nostrud percipit definitiones, eu tale porro cum. Sea ne
                                    accusata voluptatibus. Ne cum falli dolor voluptua, duo ei sonet choro facilisis,
                                    labores officiis torquatos cum ei.</p>
                                <p>Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut, legere
                                    expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his, ius graecis
                                    accommodare te. No eam tota nostrum cotidieque. Est cu nibh clita. Sed an nominavi,
                                    et
                                    duo corrumpit constituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum
                                    euismod
                                    his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus
                                    voluptaria
                                    ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei
                                    nec
                                    ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet
                                    saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                                <p>Eos cu utroque inermis invenire, eu pri alterum antiopam. Nisl erroribus definitiones
                                    nec
                                    an, ne mutat scripserit est. Eros veri ad pri. An soleat maluisset per. Has eu idque
                                    similique, et blandit scriptorem necessitatibus mea. Vis quaeque ocurreret ea.cu bus
                                    scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neentur
                                    disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et
                                    hinc
                                    exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani.</p>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-panel">
                            <div class="box-content">
                                <p>ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nulla ullamcorper,
                                    interdum dolor vel, dictum justo. Vivamus finibus lorem id auctor
                                    placerat. Ut fermentum nulla lectus, in laoreet metus ultrices ac. Integer eleifend
                                    urna
                                    ultricies enim facilisis, vel fermentum eros porta.
                                </p>
                                <span>Weights & Dimensions</span>
                                <div class="parameter">
                                    <p>Overall: 40" H x 35.5" L x 35.5" W</p>
                                    <p>Bar height:40"</p>
                                    <p>Overall Product Weight: 88 lbs</p>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-panel">
                            <div class="box-content">
                                <form method="post" action="#" class="new-review-form">
                                    <a href="#" class="form-title">Write a review</a>
                                    <div class="form-content">
                                        <p class="form-row form-row-wide">
                                            <label>Name</label>
                                            <input type="text" value="" name="text" placeholder="Enter your name"
                                                class="input-text">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label>Email</label>
                                            <input type="text" name="text" placeholder="admin@example.com"
                                                class="input-text">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label>Review Title<span class="required">*</span></label>
                                            <input type="email" name="email" placeholder="Give your review a title"
                                                class="input-text">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label>Body of Review (1500)</label>
                                            <textarea title="message" aria-invalid="false" class="textarea-control"
                                                rows="5" cols="40" name="message"></textarea>
                                        </p>
                                        <p class="form-row">
                                            <input type="submit" value="Submit Review" name="Submit"
                                                class="button-submit">
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="block-recent-view single">
                <div class="container">
                    <div class="title-of-section">You may be also interested</div>
                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true"
                        data-autoplay="false" data-dots="false" data-loop="true" data-margin="30"
                        data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":4},"1200":{"items":4}}'>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="assets/images/home1/r1.jpg" alt="r1"></a>
                                    </div>
                                    <span class="onsale">-50%</span>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">Modern Watches</a></div>
                                    <span class="price">

                                        <ins>$229.00</ins>

                                        <del>$259.00</del>

                                    </span>
                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="flaticon-shopping-cart"
                                                aria-hidden="true"></i></a>
                                        <a href="compare.php" class="compare"><i class="fa fa-exchange"></i></a>
                                        <a href="wishlist.php" class="wishlist"><i class="fa fa-heart-o"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="assets/images/home1/r2.jpg" alt="r2"></a>
                                    </div>
                                    <span class="onnew">new</span>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">Cellphone Factory</a></div>
                                    <span class="price price-dark">

                                        <ins>$229.00</ins>

                                    </span>
                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="flaticon-shopping-cart"
                                                aria-hidden="true"></i></a>
                                        <a href="compare.php" class="compare"><i class="fa fa-exchange"></i></a>
                                        <a href="wishlist.php" class="wishlist"><i class="fa fa-heart-o"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="assets/images/home1/r3.jpg" alt="r3"></a>
                                    </div>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">Smartphone 4 GB</a></div>
                                    <span class="price price-dark">

                                        <ins>$229.00</ins>

                                    </span>
                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="flaticon-shopping-cart"
                                                aria-hidden="true"></i></a>
                                        <a href="compare.php" class="compare"><i class="fa fa-exchange"></i></a>
                                        <a href="wishlist.php" class="wishlist"><i class="fa fa-heart-o"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="assets/images/home1/r4.jpg" alt="r4"></a>
                                    </div>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">Extra Bass On</a></div>
                                    <span class="price price-dark">

                                        <ins>$229.00</ins>

                                    </span>
                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="flaticon-shopping-cart"
                                                aria-hidden="true"></i></a>
                                        <a href="compare.php" class="compare"><i class="fa fa-exchange"></i></a>
                                        <a href="wishlist.php" class="wishlist"><i class="fa fa-heart-o"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="assets/images/home1/r5.jpg" alt="r5"></a>
                                    </div>
                                    <span class="onsale">-50%</span>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">Smartwatch</a></div>
                                    <span class="price">

                                        <ins>$229.00</ins>

                                        <del>$259.00</del>

                                    </span>
                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="flaticon-shopping-cart"
                                                aria-hidden="true"></i></a>
                                        <a href="compare.php" class="compare"><i class="fa fa-exchange"></i></a>
                                        <a href="wishlist.php" class="wishlist"><i class="fa fa-heart-o"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="assets/images/home1/r6.jpg" alt="r6"></a>
                                    </div>
                                    <a href="#" class="quick-view">Quick View</a>
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">Modern Watches</a></div>
                                    <span class="price price-dark">

                                        <ins>$229.00</ins>

                                    </span>
                                    <span class="star-rating">

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <i class="fa fa-star" aria-hidden="true"></i>

                                        <span class="review">5 Review(s)</span>

                                    </span>
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="flaticon-shopping-cart"
                                                aria-hidden="true"></i></a>
                                        <a href="compare.php" class="compare"><i class="fa fa-exchange"></i></a>
                                        <a href="wishlist.php" class="wishlist"><i class="fa fa-heart-o"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </main><!-- end MAIN -->
        <!-- FOOTER -->
        <?php include 'footer.php'; ?>
        <!-- end FOOTER -->
    </div>
    <a href="#" id="scrollup" title="Scroll to Top">Scroll</a>
    <!-- jQuery -->
    <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.actual.min.js"></script>
    <script type="text/javascript" src="assets/js/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="assets/js/jquery.elevateZoom.min.js"></script>
    <script src="assets/js/fancybox/source/jquery.fancybox.pack.js"></script>
    <script src="assets/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script src="assets/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
    <script type="text/javascript" src="assets/js/function.js"></script>
    <script type="text/javascript" src="assets/js/Modernizr.js"></script>
    <script type="text/javascript" src="assets/js/jquery.plugin.js"></script>
    <script type="text/javascript" src="assets/js/jquery.countdown.js"></script>
</body>

<!-- Mirrored from dreamingtheme.kiendaotac.com/html/dagon/detail.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 10:09:44 GMT -->

</html>