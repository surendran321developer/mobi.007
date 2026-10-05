<?php

include_once 'Admin/db.php';

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);

    if ($name == "" || $email == "" || $phone == "" || $message == "") {

        $error = "Please fill all required fields.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error = "Please enter a valid email address.";

    } else {

        $sql = "INSERT INTO contact_messages
                (name, email, phone, message)
                VALUES (?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {

            mysqli_stmt_bind_param(
                $stmt,
                "ssss",
                $name,
                $email,
                $phone,
                $message
            );

            if (mysqli_stmt_execute($stmt)) {

                $success = "Your message has been submitted successfully.";

            } else {

                $error = "Something went wrong. Please try again.";
            }

            mysqli_stmt_close($stmt);

        } else {

            $error = "Database query failed.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>

/* =========================================================
   CONTACT PAGE - ANIMATION + TRANSITION OVERRIDE
   Alignment / Bootstrap columns are NOT changed
========================================================= */

/* Main contact sections - soft entrance */
.contact-us .contact-map {
    animation: contactFadeDown 0.8s ease both;
}

.contact-us .form-contact {
    animation: contactSlideUp 0.8s ease 0.15s both;
}

.contact-us .contact-detail {
    animation: contactSlideRight 0.8s ease 0.25s both;
}


/* =========================================================
   GOOGLE MAP
========================================================= */

.contact-us .google-map {
    overflow: hidden;
}

.contact-us .google-map iframe {
    transition:
        transform 0.6s ease,
        box-shadow 0.6s ease;
}

.contact-us .google-map:hover iframe {
    transform: scale(1.01);
}


/* =========================================================
   SECTION TITLES
========================================================= */

.contact-us .title-contact {
    position: relative;
    transition:
        color 0.3s ease,
        transform 0.3s ease;
}

.contact-us .title-contact::after {
    content: "";
    display: block;
    width: 45px;
    height: 3px;

    margin-top: 8px;

    background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;

    border-radius: 10px;

    transition:
        width 0.4s ease;
}

.contact-us .title-contact:hover::after {
    width: 85px;
}

.contact-us .title-contact:hover {
    transform: translateX(3px);
}


/* =========================================================
   FORM ROW
========================================================= */

.contact-us .form-row {
    transition:
        transform 0.3s ease;
}

.contact-us .form-row:hover {
    transform: translateX(2px);
}


/* =========================================================
   LABEL
========================================================= */

.contact-us .form-contact label {
    transition:
        color 0.3s ease,
        transform 0.3s ease;
}

.contact-us .form-row:focus-within label {
    color: #16ecf3;
    transform: translateX(3px);
}


/* =========================================================
   INPUT + TEXTAREA
========================================================= */

.contact-us .form-contact .input-text,
.contact-us .form-contact .textarea-control {

    transition:
        border-color 0.3s ease,
        box-shadow 0.3s ease,
        transform 0.3s ease;

}


/* Input focus */

.contact-us .form-contact .input-text:focus,
.contact-us .form-contact .textarea-control:focus {

    border-color: #16ecf3 !important;

    box-shadow:
        0 0 0 2px rgba(22, 140, 243, 0.10),
        0 5px 15px rgba(0, 0, 0, 0.06) !important;

    transform: translateY(-2px);

    outline: none;
}


/* =========================================================
   SUBMIT BUTTON
   BLACK + BLUE
========================================================= */

.contact-us .button-submit {
  background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;

    background-size: 200% 100% !important;
    background-position: left center !important;

    color: #ffffff !important;

    border: none !important;

    transition:
        background-position 0.5s ease,
        transform 0.3s ease,
        box-shadow 0.3s ease !important;

    position: relative;
    overflow: hidden;

}


/* Button hover */

.contact-us .button-submit:hover {

    background-position: right center !important;

    color: #ffffff !important;

    transform: translateY(-3px);

    box-shadow:
        0 8px 20px rgba(22, 140, 243, 0.25) !important;

}


/* Button click */

.contact-us .button-submit:active {
    transform: translateY(-1px) scale(0.98);
}


/* =========================================================
   CONTACT DETAILS
========================================================= */

.contact-us .contacts-info {

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;

}


/* Small slide effect */

.contact-us .contacts-info:hover {

    transform: translateX(5px);

}


/* =========================================================
   CONTACT ICON
========================================================= */

.contact-us .contact-icon {

    transition:
        transform 0.35s ease,
        color 0.35s ease;

}


.contact-us .contacts-info:hover .contact-icon {

    transform:
        translateX(3px)
        scale(1.08);

    color: #16ecf3;

}


/* =========================================================
   CONTACT INFO TITLE
========================================================= */

.contact-us .title-info {

    transition:
        color 0.3s ease,
        transform 0.3s ease;

}


.contact-us .contacts-info:hover .title-info {

    color: #16ecf3;

    transform: translateX(3px);

}


/* =========================================================
   CONTACT TEXT
========================================================= */

.contact-us .info-detail {

    transition:
        color 0.3s ease;

}

.contact-us .contacts-info:hover .info-detail {

    color: #333;

}


/* =========================================================
   REQUIRED STAR
========================================================= */

.contact-us .required {

    transition:
        color 0.3s ease;

}

.contact-us .form-row:focus-within .required {

    color: #16ecf3;

}


/* =========================================================
   SOFT SLIDE ANIMATIONS
========================================================= */

@keyframes contactFadeDown {

    from {
        opacity: 0;
        transform: translateY(-15px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }

}


@keyframes contactSlideUp {

    from {
        opacity: 0;
        transform: translateY(25px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }

}


@keyframes contactSlideRight {

    from {
        opacity: 0;
        transform: translateX(25px);
    }

    to {
        opacity: 1;
        transform: translateX(0);
    }

}


/* =========================================================
   MOBILE
   Alignment stays same
========================================================= */

@media (max-width: 767px) {

    .contact-us .contact-map,
    .contact-us .form-contact,
    .contact-us .contact-detail {

        animation-duration: 0.6s;

    }

    .contact-us .contacts-info:hover {
        transform: translateX(2px);
    }

    .contact-us .form-row:hover {
        transform: none;
    }

}


/* =========================================================
   REMOVE UNWANTED ORANGE BUTTON COLOR
========================================================= */

.contact-us input[type="submit"].button-submit,
.contact-us .button-submit {

    background-color: #111111 !important;

}


/* Keep button color fixed even visited/focus states */

.contact-us .button-submit:focus,
.contact-us .button-submit:visited {

    color: #ffffff !important;

}


/* =========================================================
   PREVENT THE ANIMATION FROM AFFECTING PAGE ALIGNMENT
========================================================= */

.contact-us .row {
    position: relative;
}

.contact-us .form-contact,
.contact-us .contact-detail {
    position: relative;
}
/* =========================================================
   MOBI WORLD - CONTACT DETAIL ICON COLOR
   MAIN COLOR : #20d5d8
   ========================================================= */

.contact-detail .contacts-info .contact-icon {
    width: 45px;
    height: 45px;

    display: flex;
    align-items: center;
    justify-content: center;

     background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;
    border: 1px solid #20d5d8 !important;

    color: #ffffff !important;

    border-radius: 50%;

    transition: all 0.3s ease;
}


/* Email / Phone / Location icons */

.contact-detail .contacts-info .contact-icon i {
    color: #ffffff !important;
    font-size: 18px;

    transition: all 0.3s ease;
}


/* Hover animation */

.contact-detail .contacts-info:hover .contact-icon {
     background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;
    border-color: #20d5d8 !important;

    transform: translateY(-4px) scale(1.08);

    box-shadow: 0 8px 20px rgba(32, 213, 216, 0.35);
}


/* Icon hover */

.contact-detail .contacts-info:hover .contact-icon i {
    color: #ffffff !important;
    transform: scale(1.15);
}


/* Email / Phone / Location title */

.contact-detail .contacts-info .title-info {
    color: #20d5d8 !important;
}


/* Contact details text */

.contact-detail .contacts-info .info-detail {
    color: #555555;
}


/* Small screen */

@media (max-width: 767px) {

    .contact-detail .contacts-info .contact-icon {
        width: 42px;
        height: 42px;
    }

    .contact-detail .contacts-info .contact-icon i {
        font-size: 17px;
    }

}
/* =========================================
   FORCE ICON COLOR - MOBI WORLD
   Override Existing Orange Color
========================================= */

.contact-detail .contacts-info .contact-icon,
.contact-detail .contacts-info .contact-icon i,
.contact-detail .contacts-info .contact-icon i::before,
.contact-detail .contacts-info .contact-icon i::after {
    background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;
    color: #ffffff !important;
    border-color: #20d5d8 !important;
}

/* Icon circle */
.contact-detail .contacts-info .contact-icon {
    width: 45px !important;
    height: 45px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    border-radius: 50% !important;
    background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;
    color: #ffffff !important;
}

/* Icon itself */
.contact-detail .contacts-info .contact-icon i {
    color: #ffffff !important;
    background: transparent !important;
    font-size: 18px !important;
}

/* Flaticon override */
.contact-detail .contacts-info .contact-icon .flaticon-email::before,
.contact-detail .contacts-info .contact-icon .flaticon-telephone::before,
.contact-detail .contacts-info .contact-icon .flaticon-placeholder::before {
    color: #ffffff !important;
}

/* Hover */
.contact-detail .contacts-info:hover .contact-icon {
      background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;
    border-color: #20d5d8 !important;
    color: #ffffff !important;
    transform: translateY(-4px) scale(1.08);
    box-shadow: 0 8px 20px rgba(32, 213, 216, 0.35);
}

.contact-detail .contacts-info:hover .contact-icon i,
.contact-detail .contacts-info:hover .contact-icon i::before {
    color: #ffffff !important;
}
.success-message {
    padding: 12px 18px;
    margin-bottom: 20px;
      background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;
    color: #ffffff;
    border-radius: 6px;
}

.error-message {
    padding: 12px 18px;
    margin-bottom: 20px;
    background: #ff4d4d;
    color: #ffffff;
    border-radius: 6px;
}
</style>
    
</head>
<!-- Mirrored from dreamingtheme.kiendaotac.com/html/dagon/contact-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 10:09:46 GMT -->
<?php include 'head.php'; ?>

<body class="page-inner contact-page">
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
    <main class="site-main contact-us">
        <div class="container">
            <ol class="breadcrumb-page">
                <li><a href="index.php">Home </a></li>
                <li class="active"><a href="#">Contact Us</a></li>
            </ol>
        </div>
        <div class="container">
            <div class="row">
                <div class="contact-map full-width">
                    <div class="google-map">
                        <!-- <div class="dagon-google-maps" id="dagon-google-maps" data-hue="" data-lightness="1" data-map-style="2"
                             data-saturation="-99" data-longitude="-73.985130" data-latitude="40.758896" data-pin-icon=""
                             data-zoom="14" data-map-type="ROADMAP"></div> -->
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.378187399743!2d78.6986361!3d10.8299469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf50001b737ef%3A0xee8c158c924bdf77!2sMobi%20World!5e0!3m2!1sen!2sin!4v1745834839004!5m2!1sen!2sin" width="1600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- <span class="fa fa-map-marker"></span> -->
                    </div>
                </div>
                <?php if ($success != "") { ?>

    <div class="success-message">
        <?php echo $success; ?>
    </div>

<?php } ?>

<?php if ($error != "") { ?>

    <div class="error-message">
        <?php echo $error; ?>
    </div>

<?php } ?>
                <form class="form-contact" action="" method="post">
                    <div class="col-md-5">
                        <div class="contact-info">
                            <h5 class="title-contact">Leave a Message</h5>
                            <p class="form-row form-row-wide">
                                <label>Name<span class="required">*</span></label>
                                <input type="text"
                                        value=""
                                        name="name"
                                        placeholder="First name"
                                        class="input-text"
                                        required>
                            </p>
                            <p class="form-row form-row-wide">
                                <label>Email<span class="required">*</span></label>
                                <input type="email" value="" name="email" placeholder="Email" class="input-text" required>
                            </p>
                            <p class="form-row form-row-wide">
                                <label>Number Phone<span class="required">*</span></label>
                                <input type="text" value="" name="phone" placeholder="Phone number" class="input-text" required>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="form-row form-row-wide form-text">
                            <label>Comment<span class="required"></span></label>
                            <textarea title="message"
                                      aria-invalid="false"
                                      class="textarea-control"
                                       rows="5"
                                       cols="40"
                                        name="message"
                                        required></textarea>
                        </p>
                        <p class="form-row">
                            <input type="submit"
                                     value="Submit"
                                     name="Submit"
                                     class="button-submit">
                        </p>
                    </div>
                </form>
                <div class="col-md-3 contact-detail">
                    <h5 class="title-contact">Contact Detail</h5>
                    <div class="contacts-info ">
                        <div class="contact-icon"><i class="flaticon-email" aria-hidden="true"></i></div>
                        <h4 class="title-info">Email</h4>
                        <div class="info-detail"> mobiiworld2001@gmail.com</div>
                    </div>
                    <div class="contacts-info ">
                        <div class="contact-icon"><i class="flaticon-telephone" aria-hidden="true"></i></div>
                        <h4 class="title-info">Phone</h4>
                        <div class="info-detail">+91 93616 92260</div>
                    </div>
                    <div class="contacts-info ">
                        <div class="contact-icon"><i class="flaticon-placeholder" aria-hidden="true"></i></div>
                        <h4 class="title-info">Office Location</h4>
                        <div class="info-detail">35a,Sangaran pillai road,Chattiram bus stand,Periyaswamy tower,Trichy-620002</div>
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

<!-- Mirrored from dreamingtheme.kiendaotac.com/html/dagon/contact-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Apr 2025 10:09:46 GMT -->
</html>