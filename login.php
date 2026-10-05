<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<style>
    .customer-login .container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh; /* Adjust depending on header/footer height */
 
}

.customer-login .row {
    width: 100%;
    max-width: 500px; /* Limit the form width */
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    border-radius: 10px;
}

p{
    margin: 30px;
}

</style>
<body class="page-inner">
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
    <main class="site-main site-login">
        <div class="container">
            <ol class="breadcrumb-page">
                <li><a href="index-2.php">Home </a></li>
                <li class="active"><a href="#">Order</a></li>
            </ol>
        </div>
        <div class="customer-login">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 p-4">
                        <h5 class="title-login">Order Page</h5>
                        <!-- <p class="p-title-login">Wellcome to your Order Page.</p> -->
                        <form class="login" method="POST" action="Admin/assets/order.php">
                            <p class="form-row form-row-wide">
                                <label>Name<span class="required"></span></label>
                                <input type="text" value="" name="user_name"
                                       placeholder="Type your name" class="input-text" required>
                            </p>
                            <p class="form-row form-row-wide">
                                <label>Phone Number<span class="required"></span></label>
                                <input type="text" value="" name="phone_number"
                                       placeholder="Type your phone number" class="input-text" required>
                            </p>
                            <p class="form-row form-row-wide">
                                <label>Address<span class="required"></span></label>
                                <input type="text" name="user_address" placeholder="Type your Address" class="input-text" required>
                            </p>
                            <p class="form-row form-row-wide">
                                <label>Product<span class="required"></span></label>
                                <input type="text" name="order_product" placeholder="Type your Product" class="input-text" required>
                            </p>
                            <ul class="inline-block">
                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Remember me</label>
                                </li>
                            </ul>
                            <a href="#" class="forgot-password">Forgotten password?</a>
                            <p class="form-row">
                                <input type="submit" value="Login" name="Login" class="button-submit">
                            </p>
                        </form>
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

<!-- Mirrored from dreamingtheme.kiendaotac.com/html/dagon/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 10:09:46 GMT -->
</html>