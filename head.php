<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Anbarasan-METS">
    <title>Mobi World</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/icon.jpeg" />
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chosen.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/new.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
        /* =========================================================
   MOBI WORLD / HEADER MENU - COLOR & ANIMATION OVERRIDE
   ========================================================= */

/* Main menu background */
.header-menu-bar .header-menu-nav {
    background: #20d5d8 !important;
    border: none !important;
    border-radius: 0 !important;
}

/* Menu inner area */
.header-menu-bar .header-menu-nav-inner {
    background: #20d5d8 !important;
}

/* Main navigation UL */
.header-menu-bar .header-nav {
    display: flex !important;
    align-items: center !important;
    gap: 8px !important;
    margin: 0 !important;
    padding: 8px 0 !important;
}

/* =========================================================
   EACH MENU ITEM
   ========================================================= */

.header-menu-bar .header-nav > li:not(.btn-close) {
    position: relative !important;
    margin: 0 !important;
    padding: 0 !important;
    border-radius: 12px !important;
    overflow: hidden !important;
}

/* Menu links */
.header-menu-bar .header-nav > li > a {
    position: relative !important;

    display: flex !important;
    align-items: center !important;
    justify-content: center !important;

    min-width: 115px !important;
    height: 48px !important;

    padding: 0 20px !important;

    background: transparent !important;

    color: #111111 !important;

    font-size: 16px !important;
    font-weight: 800 !important;
    letter-spacing: 0.3px !important;

    text-decoration: none !important;

    border: 2px solid transparent !important;
    border-radius: 12px !important;

    transition:
        color 0.35s ease,
        background 0.35s ease,
        border-color 0.35s ease,
        transform 0.35s ease,
        box-shadow 0.35s ease !important;

    z-index: 2 !important;
}

/* =========================================================
   ICONS FOR HOME / ABOUT / PRODUCT / BLOG / CONTACT
   ========================================================= */

/* Home */
.header-menu-bar .header-nav > li:nth-child(2) > a::before {
    content: "\f015";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    margin-right: 9px;
    font-size: 15px;
    transition: transform 0.35s ease;
}

/* About */
.header-menu-bar .header-nav > li:nth-child(3) > a::before {
    content: "\f05a";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    margin-right: 9px;
    font-size: 15px;
    transition: transform 0.35s ease;
}

/* Product */
.header-menu-bar .header-nav > li:nth-child(4) > a::before {
    content: "\f290";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    margin-right: 9px;
    font-size: 15px;
    transition: transform 0.35s ease;
}

/* Blog */
.header-menu-bar .header-nav > li:nth-child(5) > a::before {
    content: "\f1ea";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    margin-right: 9px;
    font-size: 15px;
    transition: transform 0.35s ease;
}

/* Contact Us */
.header-menu-bar .header-nav > li:nth-child(6) > a::before {
    content: "\f0e0";
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    margin-right: 9px;
    font-size: 15px;
    transition: transform 0.35s ease;
}

/* =========================================================
   SLIDE BACKGROUND EFFECT
   ========================================================= */

.header-menu-bar .header-nav > li > a::after {
    content: "";
    position: absolute;

    left: 0;
    bottom: 0;

    width: 0;
    height: 100%;

    background: #ffffff !important;

    border-radius: 10px;

    transition: width 0.4s cubic-bezier(.4,0,.2,1);

    z-index: -1;
}

/* Hover slide */
.header-menu-bar .header-nav > li:hover > a::after {
    width: 100%;
}

/* =========================================================
   HOVER TEXT COLOR
   ========================================================= */

.header-menu-bar .header-nav > li:hover > a {
    color: #20d5d8 !important;

    border-color: #ffffff !important;

    transform: translateY(-3px) !important;

    box-shadow:
        0 8px 20px rgba(0, 0, 0, 0.15) !important;
}

/* Icon hover animation */
.header-menu-bar .header-nav > li:hover > a::before {
    transform: translateY(-2px) scale(1.15);
}

/* =========================================================
   ACTIVE MENU
   ========================================================= */

.header-menu-bar .header-nav > li.current-menu-item > a,
.header-menu-bar .header-nav > li.active > a {
    background: #ffffff !important;
    color: #20d5d8 !important;

    border-color: #ffffff !important;

    box-shadow:
        0 6px 18px rgba(0, 0, 0, 0.15) !important;
}

/* =========================================================
   REMOVE OLD DARK / RED / OTHER BACKGROUND COLORS
   ========================================================= */

.header-menu-bar,
.header-menu-bar .header-menu-nav,
.header-menu-bar .header-menu-nav-inner,
.header-menu-bar .header-menu,
.header-menu-bar .header-nav {
    background-color: #20d5d8 !important;
}

/* Remove unwanted borders */
.header-menu-bar .header-nav > li {
    border: none !important;
}

/* =========================================================
   SUBMENU ARROW
   ========================================================= */

.header-menu-bar .toggle-submenu {
    color: #111111 !important;
    transition: transform 0.3s ease;
}

.header-menu-bar .header-nav > li:hover .toggle-submenu {
    color: #20d5d8 !important;
    transform: rotate(180deg);
}

/* =========================================================
   MOBILE MENU
   ========================================================= */

@media (max-width: 991px) {

    .header-menu-bar .header-menu-nav {
        background: #20d5d8 !important;
    }

    .header-menu-bar .header-nav {
        display: block !important;
        padding: 10px !important;
    }

    .header-menu-bar .header-nav > li {
        width: 100% !important;
        margin-bottom: 7px !important;
    }

    .header-menu-bar .header-nav > li > a {
        width: 100% !important;
        min-width: auto !important;
        justify-content: flex-start !important;

        padding: 0 20px !important;

        border-radius: 12px !important;
    }

    .header-menu-bar .header-nav > li > a::after {
        border-radius: 10px !important;
    }

    .header-menu-bar .header-nav > li:hover > a {
        transform: translateX(6px) !important;
    }
}

/* =========================================================
   SMALL MOBILE
   ========================================================= */

@media (max-width: 576px) {

    .header-menu-bar .header-nav > li > a {
        height: 45px !important;
        font-size: 15px !important;
        padding: 0 16px !important;
    }

    .header-menu-bar .header-nav > li > a::before {
        font-size: 14px !important;
        margin-right: 8px !important;
    }
}
    </style>
</head>
