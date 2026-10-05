<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            /* =========================================================
   READ MORE BUTTON - BLACK + BLUE THEME
   Existing orange theme is completely overridden
========================================================= */

.blog-grid .post-item .read-more,
.blog-grid .post-item a.read-more,
.post-item .read-more {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
  background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;
    background-color: #111111 !important;

    color: #ffffff !important;

    border: 2px solid #16d9f3 !important;
    border-radius: 7px !important;

    padding: 10px 20px !important;

    font-size: 13px !important;
    font-weight: 700 !important;

    text-decoration: none !important;

    cursor: pointer !important;

    position: relative !important;
    overflow: hidden !important;

    transition:
        background-color 0.3s ease !important,
        color 0.3s ease !important,
        border-color 0.3s ease !important,
        transform 0.3s ease !important,
        box-shadow 0.3s ease !important;

    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important;
}


/* BLUE HOVER */

.blog-grid .post-item .read-more:hover,
.blog-grid .post-item a.read-more:hover,
.post-item .read-more:hover {
      background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;
    background-color: #16d6f3 !important;

    color: #ffffff !important;

    border-color: #16ecf3 !important;

    transform: translateY(-3px) !important;

    box-shadow:
        0 8px 22px rgba(22, 140, 243, 0.35) !important;
}


/* CLICK / ACTIVE */

.blog-grid .post-item .read-more:active,
.blog-grid .post-item a.read-more:active,
.post-item .read-more:active {
    background: #111111 !important;
    background-color: #111111 !important;

    color: #ffffff !important;

    transform: translateY(-1px) !important;

    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2) !important;
}


/* VISITED LINK - ORANGE VARAAMA IRUKKA */

.blog-grid .post-item .read-more:visited,
.blog-grid .post-item a.read-more:visited,
.post-item .read-more:visited {
    background: #16ecf3 !important;
     background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;

    color: #ffffff !important;

    border-color: #16ecf3 !important;
}


/* FOCUS */

.blog-grid .post-item .read-more:focus,
.blog-grid .post-item a.read-more:focus,
.post-item .read-more:focus {
    background: #16ecf3 !important;
    background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;

    color: #ffffff !important;

    border-color:  #16ecf3!important;

    outline: none !important;
}


/* =========================================================
   SMALL BLUE SHINE ANIMATION
========================================================= */

.blog-grid .post-item .read-more::before {
    content: "" !important;

    position: absolute !important;

    top: 0 !important;
    left: -100% !important;

    width: 70% !important;
    height: 100% !important;

    background: linear-gradient(
        90deg,
        transparent,
        rgba(255,255,255,0.25),
        transparent
    ) !important;

    transform: skewX(-20deg) !important;

    transition: left 0.6s ease !important;

    pointer-events: none !important;
}


.blog-grid .post-item .read-more:hover::before {
    left: 130% !important;
}
        </style>
    </head>

<!-- Mirrored from dreamingtheme.kiendaotac.com/html/dagon/blog-grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 10:09:44 GMT -->
<?php include 'head.php'; ?>

<body class="page-blog">
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
                    <a href="wishlist.php" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Add to Wishlist</a>
                    <div class="product-infomation">
                        Description Our new HPB12 / A12 battery is rated at 2000mAh and designed to power up Black and
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
    <?php include 'nav_2.php'; ?>
    
    
    <!-- end HEADER -->
    <!-- MAIN -->
    <main class="site-main blog-grid">
        <div class="container">
            <ol class="breadcrumb-page">
                <li><a href="index.php">Home </a></li>
                <li class="active"><a href="#">Our blog</a></li>
            </ol>
        </div>
        <div class="container">
            <div class="row">
                <div class="float-none float-right">
                    <div class="main-content">
                        <div class="post-grid post-items">
                            <div class="post-grid-item col-md-6">
                                <div class="post-item">
                                    <div class="post-thumb">
                                        <a href="#"><img src="assets/images/blog/Airpods-deal_Mirror_MAIN.avif" style="width:460px;height:300px;" h alt="post-image"></a>
                                        <span class="date">22<span>Dec</span></span>
                                    </div>
                                    <div class="post-item-info">
                                        <h3 class="post-name"><a href="#">Classic AirPods for Seamless Connectivity and Sound Quality</a>
                                        </h3>
                                        <div class="post-metas">
                                            <span class="author">Post by: <span>Admin</span></span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>6 Comments</span>
                                        </div>
                                        <div class="post-content">
                                            <p>The AirPods (2nd Generation) are the entry-level model offering reliable wireless sound and simple connectivity. Powered by the Apple H1 chip, they provide fast pairing with Apple devices and support Hey Siri for hands-free controls. Their design is lightweight and comfortable for all-day use.</p>
                                            <a href="#" class="read-more">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-grid-item col-md-6">
                                <div class="post-item">
                                    <div class="post-thumb">
                                        <a href="#"><img src="assets/images/blog/audio1.jpg" style="width: 430px;height:310px;"; alt="post-image-5"></a>
                                        <span class="date">22<span>Dec</span></span>
                                    </div>
                                    <div class="post-item-info">
                                        <h3 class="post-name"><a href="#">Premium Audio Experience with Active Noise Cancellation</a>
                                        </h3>
                                        <div class="post-metas">
                                            <span class="author">Post by: <span>Admin</span></span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>2 Comments</span>
                                        </div>
                                        <div class="post-content">
                                            <p>The AirPods Pro (2nd Generation) take performance to the next level with active noise cancellation (ANC) and adaptive transparency mode, blocking out unwanted sound while allowing for natural listening when needed. Powered by the new H2 chip, they deliver an immersive sound experience with deeper bass and enhanced clarity.</p>
                                            <a href="#" class="read-more">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-grid-item col-md-6">
                                <div class="post-item">
                                    <div class="post-thumb">
                                        <a href="#"><img src="assets/images/blog/smartwatch.jpg"
                                                        alt="post-image-2" style="width:450px;height:300px;"></a>
                                        <span class="date">22<span>Dec</span></span>
                                    </div>
                                    <div class="post-item-info">
                                        <h3 class="post-name"><a href="#">Smartwatches for Health and Connectivity on Your Wrist</a></h3>
                                        <div class="post-metas">
                                            <span class="author">Post by: <span>Admin</span></span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>5 Comments</span>
                                        </div>
                                        <div class="post-content">
                                            <p>Smartwatches like the Apple Watch, Samsung Galaxy Watch, and Fitbit are packed with features, including fitness tracking, heart rate monitoring, and sleep analysis. These devices sync with your smartphone to notify you of calls, texts, and app alerts without having to take your phone out.</p>
                                            <a href="#" class="read-more">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-grid-item col-md-6">
                                <div class="post-item">
                                    <div class="post-thumb">
                                        <a href="#"><img src="assets/images/blog/post-image-6.png" style="width:460px;height:300px;"
                                                        alt="post-image-6"></a>
                                        <span class="date">22<span>Dec</span></span>
                                    </div>
                                    <div class="post-item-info">
                                        <h3 class="post-name"><a href="#">Smart Speakers for Hands-Free Control</a></h3>
                                        <div class="post-metas">
                                            <span class="author">Post by: <span>Admin</span></span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>9 Comments</span>
                                        </div>
                                        <div class="post-content">
                                            <p>Smart speakers like the Amazon Echo, Google Nest, and Apple HomePod provide voice-controlled assistants (Alexa, Google Assistant, Siri) to help with a variety of tasks. You can ask them to play music, control smart home devices, set reminders, and even answer general knowledge questions.

</p>
                                            <a href="#" class="read-more">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-grid-item col-md-6">
                                <div class="post-item">
                                    <div class="post-thumb">
                                        <a href="#"><img src="assets/images/blog/iphone17.webp"
                                                        style="width:460px;height:300px;" alt="post-image-4" ></a>
                                        <span class="date">22<span>Dec</span></span>
                                    </div>
                                    <div class="post-item-info">
                                        <h3 class="post-name"><a href="#"> The All-Rounder iPhone with Premium Features </a></h3>
                                        <div class="post-metas">
                                            <span class="author">Post by: <span>Admin</span></span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>2 Comments</span>
                                        </div>
                                        <div class="post-content">
                                            <p>The iPhone 17 combines powerful performance with a sleek design. Powered by the A19 chip, it delivers fast and efficient performance for everyday use. The 6.3-inch Super Retina XDR display and 48MP camera system provide stunning visuals and high-quality photos. With long battery life and advanced AI features, it's a great choice for modern smartphone users.</p>
                                            <a href="#" class="read-more">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-grid-item col-md-6">
                                <div class="post-item">
                                    <div class="post-thumb">
                                        <a href="#"><img src="assets/images/blog/ATOM_MOCKUP.webp" style="width:450px;height:300px;"
                                                        alt="post-image-3"></a>
                                        <span class="date">22<span>Dec</span></span>
                                    </div>
                                    <div class="post-item-info">
                                    <h3 class="post-name"><a href="#">Premium Audio Experience with Active Noise Cancellation</a>
                                        </h3>
                                        <div class="post-metas">
                                            <span class="author">Post by: <span>Admin</span></span>
                                            <span class="comment"><i class="fa fa-comment" aria-hidden="true"></i>2 Comments</span>
                                        </div>
                                        <div class="post-content">
                                            <p>The AirPods Pro (2nd Generation) take performance to the next level with active noise cancellation (ANC) and adaptive transparency mode, blocking out unwanted sound while allowing for natural listening when needed. Powered by the new H2 chip, they deliver an immersive sound experience with deeper bass and enhanced clarity.</p>
                                            <a href="#" class="read-more">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-grid pagination">
                            <ul class="nav-links">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="back-next"><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

<!-- Mirrored from dreamingtheme.kiendaotac.com/html/dagon/blog-grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 10:09:45 GMT -->
</html>