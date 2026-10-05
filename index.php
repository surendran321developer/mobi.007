<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<style>

/* =========================================================
   DAILY DEALS - 2 COLUMN
========================================================= */

.daily-deals-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 30px;
}

.daily-deals-grid .deal-of-day {
    width: 100%;
}

/* =========================================================
   PRODUCT IMAGE
========================================================= */

.daily-deals-grid .product-thumb .thumb-inner {
    align-items: center;
    background: #fff;
    display: flex;
    height: 280px;
    justify-content: center;
    margin-top: 0 !important;
    overflow: hidden;
    width: 100%;
    border-radius: 18px;
}

.daily-deals-grid .product-thumb .thumb-inner a {
    display: block;
    height: 100%;
    width: 100%;
}

.daily-deals-grid .product-thumb img {
    display: block;
    height: 100%;
    object-fit: cover;
    width: 100%;
    transition: transform 0.6s ease;
}

.daily-deals-grid .deal-of-day:hover .product-thumb img {
    transform: scale(1.07);
}


/* =========================================================
   PRODUCT INFORMATION
========================================================= */

.daily-deals-grid .product-innfo {
    padding: 18px;
}

.daily-deals-grid .product-name a {
    font-weight: 800;
    font-size: 19px;
    line-height: 1.4;
    color: #111;
    text-decoration: none;
    transition: 0.3s ease;
}

.daily-deals-grid .product-name a:hover {
    color: #39cbd7;
}

.daily-deals-grid .product-description {
    margin: 8px 0 12px;
    font-size: 14px;
    line-height: 1.6;
    color: #555;
}


/* =========================================================
   GLASS PRODUCT CARD
========================================================= */

.daily-deals-grid .deal-of-day {
    background: rgba(255,255,255,0.72);
    border: 1px solid rgba(255,255,255,0.8);
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 12px 35px rgba(0,0,0,0.08);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    transition:
        transform 0.45s ease,
        box-shadow 0.45s ease,
        border-color 0.45s ease;
}

.daily-deals-grid .deal-of-day:hover {
    transform: translateY(-10px);
    box-shadow: 0 22px 50px rgba(33,150,243,0.18);
    border-color: rgba(33,150,243,0.35);
}


/* =========================================================
   PRICE
========================================================= */

.daily-deals-grid .price ins {
    font-size: 21px;
    font-weight: 800;
    color: #111;
    text-decoration: none;
}

.daily-deals-grid .price del {
    color: #999;
    margin-left: 8px;
}

.daily-deals-grid .onsale {
    background: #39cbd7;
    color: #39cbd7;
    border-radius: 20px;
    padding: 5px 12px;
    font-size: 11px;
    font-weight: 700;
    margin-left: 8px;
}


/* =========================================================
   PRODUCT ACTION BUTTONS
========================================================= */

.product-action-buttons {
    display: flex;
    gap: 10px;
    margin-top: 18px;
}

.product-action-buttons a {
    flex: 1;
    min-height: 46px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    border-radius: 30px;
    font-weight: 800;
    font-size: 13px;
    text-decoration: none;
    transition: all 0.35s ease;
    position: relative;
    overflow: hidden;
}


/* BLACK SHOP BUTTON */

.shop-product-btn {
     background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;
    color: #fff !important;
    border: 1px solid #39cbd7;
}

.shop-product-btn:hover {
    background: #39cbd7;
    border-color: #39cbd7;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(57, 203, 215, 0.3);
}


/* BLUE ADD CART BUTTON */

.add-product-btn {
     background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;
    color: #fff !important;
    border: 1px solid #39cbd7;
}

.add-product-btn:hover {
    background: #39cbd7;
    border-color: #39cbd7;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
}


/* BUTTON SHINE */

.product-action-buttons a::before {
    content: "";
    position: absolute;
    top: 0;
    left: -120%;
    width: 80%;
    height: 100%;
    background: rgba(255,255,255,0.25);
    transform: skewX(-25deg);
    transition: left 0.6s ease;
}

.product-action-buttons a:hover::before {
    left: 130%;
}


/* =========================================================
   FEATURED PRODUCT BUTTON
========================================================= */

.featured-action-buttons {
    display: flex;
    gap: 8px;
    margin-top: 12px;
}

.featured-action-buttons a {
    flex: 1;
    text-align: center;
    padding: 10px 8px;
    border-radius: 25px;
    font-size: 12px;
    font-weight: 800;
    text-decoration: none;
    transition: 0.3s ease;
}

.featured-shop-btn {
     background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;
    color: #fff !important;
}

.featured-cart-btn {
      background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;
    color: #fff !important;
}

.featured-shop-btn:hover {
    background: #39cbd7;
    transform: translateY(-3px);
}

.featured-cart-btn:hover {
    background: #39cbd7;
    transform: translateY(-3px);
}


/* =========================================================
   PRODUCT MARQUEE BAR
   ========================================================= */

.product-marquee-section {
    width: 100%;
    overflow: hidden;
    background: #1e5666;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    padding: 14px 0;
    position: relative;
}

/* Soft glow on both sides */
.product-marquee-section::before,
.product-marquee-section::after {
    content: "";
    position: absolute;
    top: 0;
    width: 100px;
    height: 100%;
    z-index: 3;
    pointer-events: none;
}

.product-marquee-section::before {
    left: 0;
    background: linear-gradient(
        to right,
        #17bae8,
        rgba(23, 53, 61, 0)
    );
}

.product-marquee-section::after {
    right: 0;
    background: linear-gradient(
        to left,
        #0bb4e2,
        rgba(23, 53, 61, 0)
    );
}

.product-marquee-track {
    display: flex;
    width: max-content;
    animation: productMarquee 32s linear infinite;
    will-change: transform;
}

.product-marquee-section:hover .product-marquee-track {
    animation-play-state: paused;
}

.product-marquee-group {
    display: flex;
    align-items: center;
    flex-shrink: 0;
}

.product-marquee-item {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-right: 55px;
    color: #ffffff;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 0.3px;
    white-space: nowrap;
    text-transform: uppercase;
    transition: all 0.3s ease;
}

.product-marquee-item i {
    font-size: 18px;
    color: #20d5d8;
    transition: all 0.3s ease;
}

.product-marquee-item:hover {
    color: #20d5d8;
    transform: scale(1.06);
}

.product-marquee-item:hover i {
    transform: rotate(10deg) scale(1.15);
}

/* Small separator */
.product-marquee-separator {
    color: #20d5d8;
    font-size: 10px;
    margin-right: 55px;
    opacity: 0.8;
}

/* Animation */
@keyframes productMarquee {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(-50%);
    }
}

/* =========================================================
   MOBILE
   ========================================================= */

@media (max-width: 767px) {

    .product-marquee-section {
        padding: 11px 0;
    }

    .product-marquee-item {
        font-size: 12px;
        gap: 7px;
        margin-right: 35px;
        letter-spacing: 0.2px;
    }

    .product-marquee-item i {
        font-size: 15px;
    }

    .product-marquee-separator {
        margin-right: 35px;
    }

    .product-marquee-track {
        animation-duration: 25s;
    }

    .product-marquee-section::before,
    .product-marquee-section::after {
        width: 45px;
    }
}
/* =========================================================
   FEATURED DESCRIPTION
========================================================= */

.featured-description {
    margin-top: 8px;
    color: #666;
    font-size: 13px;
    line-height: 1.55;
}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .daily-deals-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .daily-deals-grid .product-thumb .thumb-inner {
        height: 240px;
    }

    .daily-deals-grid .product-innfo {
        padding: 15px;
    }

    .daily-deals-grid .product-name a {
        font-size: 17px;
    }

    .product-action-buttons {
        flex-direction: column;
    }

    .product-action-buttons a {
        width: 100%;
    }

    .product-marquee-item {
        font-size: 12px;
        margin-right: 30px;
    }

}
/* =========================================
   PRODUCT ACTION BUTTONS
========================================= */

.product-actions {
    display: flex;
    gap: 10px;
    margin-top: 15px;
    width: 100%;
}

.product-actions button {
    flex: 1;
    min-height: 46px;
    border: none;
    border-radius: 12px;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.35s ease;
    position: relative;
    overflow: hidden;
}

/* =========================================
   ADD TO CART
========================================= */

.product-actions .cart-btn {
    background: #39cbd7;
    color: #ffffff;
    border: 1px solid #39cbd7;
}

.product-actions .cart-btn i {
    margin-right: 6px;
}

.product-actions .cart-btn:hover {
    background: #12d8df;
    color: #050505;
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(18, 216, 223, 0.30);
}

/* =========================================
   BUY NOW
========================================= */

.product-actions .buy-now-btn {
     background: linear-gradient(
        to right,
        #1e5666,
        #39cbd7 ,
        #1e5666
    ) !important;
    color: #050505;
    border: 1px solid #39cbd7;
}

.product-actions .buy-now-btn i {
    margin-right: 6px;
}

.product-actions .buy-now-btn:hover {
    background: #050505;
    color: #12d8df;
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(18, 216, 223, 0.30);
}

/* =========================================
   BUTTON SHINE
========================================= */

.product-actions button::before {
    content: "";
    position: absolute;
    top: 0;
    left: -120%;
    width: 70%;
    height: 100%;
    background: rgba(255,255,255,0.25);
    transform: skewX(-25deg);
    transition: left 0.6s ease;
}

.product-actions button:hover::before {
    left: 140%;
}

/* =========================================
   MOBILE
========================================= */

@media (max-width: 576px) {

    .product-actions {
        flex-direction: column;
        gap: 8px;
    }

    .product-actions button {
        width: 100%;
    }

}
/* =========================================================
   MOBI WORLD PRODUCT DETAILS / FAQ
========================================================= */

.mw-product-info-section {

    width: 100%;

    padding: 90px 20px;

    background: #ffffff;

    position: relative;

    overflow: hidden;
}


/* subtle decorative circles */

.mw-product-info-section::before {

    content: "";

    position: absolute;

    width: 220px;

    height: 220px;

    border-radius: 50%;

    border: 1px solid rgba(57,203,215,0.12);

    top: -100px;

    left: -80px;

    animation: mwFloatCircle 6s ease-in-out infinite;
}


.mw-product-info-section::after {

    content: "";

    position: absolute;

    width: 280px;

    height: 280px;

    border-radius: 50%;

    border: 1px solid rgba(57,203,215,0.10);

    bottom: -150px;

    right: -100px;

    animation: mwFloatCircle 7s ease-in-out infinite reverse;
}


@keyframes mwFloatCircle {

    0% {

        transform: translateY(0) rotate(0deg);

    }

    50% {

        transform: translateY(-18px) rotate(10deg);

    }

    100% {

        transform: translateY(0) rotate(0deg);

    }

}


/* CONTAINER */

.mw-product-info-container {

    max-width: 1180px;

    margin: 0 auto;

    display: grid;

    grid-template-columns: 38% 62%;

    gap: 55px;

    align-items: start;

    position: relative;

    z-index: 2;
}


/* LEFT */

.mw-info-heading {

    padding-top: 25px;

    position: sticky;

    top: 100px;
}


.mw-small-title {

    display: inline-block;

    font-size: 12px;

    font-weight: 800;

    letter-spacing: 3px;

    color: #39cbd7;

    margin-bottom: 15px;
}


.mw-info-heading h2 {

    margin: 0;

    color: #111;

    font-size: 42px;

    line-height: 1.15;

    font-weight: 800;
}


.mw-info-heading h2 span {

    color: #39cbd7;
}


.mw-info-heading p {

    max-width: 430px;

    margin-top: 22px;

    color: #777;

    font-size: 15px;

    line-height: 1.8;
}


/* RIGHT */

.mw-product-accordion {

    width: 100%;
}


/* ITEM */

.mw-accordion-item {

    margin-bottom: 12px;

    background: #fff;

    border: 1px solid #eeeeee;

    border-radius: 12px;

    overflow: hidden;

    box-shadow: 0 5px 18px rgba(0,0,0,0.04);

    transition:
        transform 0.35s ease,
        border-color 0.35s ease,
        box-shadow 0.35s ease;
}


.mw-accordion-item:hover {

    transform: translateX(5px);

    border-color: rgba(57,203,215,0.35);

    box-shadow:
        0 10px 30px rgba(57,203,215,0.10);
}


/* BUTTON */

.mw-accordion-button {

    width: 100%;

    border: 0;

    outline: none;

    background: transparent;

    padding: 20px 22px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    cursor: pointer;

    text-align: left;

    color: #39cbd7;
}


/* PRODUCT QUESTION */

.mw-product-question {

    display: flex;

    align-items: center;

    gap: 15px;

    font-size: 15px;

    font-weight: 700;

    line-height: 1.4;
}


/* ICON */

.mw-product-icon {

    width: 40px;

    height: 40px;

    min-width: 40px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    background: linear-gradient(
        135deg,
        #111,
        #39cbd7
    );

    color: #fff;

    font-size: 15px;

    transition:
        transform 0.35s ease,
        box-shadow 0.35s ease;
}


.mw-accordion-item:hover .mw-product-icon {

    transform: rotate(8deg) scale(1.08);

    box-shadow:
        0 6px 15px rgba(57,203,215,0.25);
}


/* PLUS */

.mw-plus {

    width: 30px;

    height: 30px;

    min-width: 30px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    background: #111;

    color: #fff;

    font-size: 19px;

    font-weight: 400;

    transition:
        transform 0.35s ease,
        background 0.35s ease;
}


/* ACTIVE PLUS */

.mw-accordion-item.active .mw-plus {

    transform: rotate(45deg);

    background: #39cbd7;
}


/* CONTENT */

.mw-accordion-content {

    max-height: 0;

    overflow: hidden;

    opacity: 0;

    padding: 0 22px;

    transition:
        max-height 0.45s ease,
        opacity 0.35s ease,
        padding 0.45s ease;
}


/* ACTIVE CONTENT */

.mw-accordion-item.active .mw-accordion-content {

    max-height: 300px;

    opacity: 1;

    padding:
        0 22px
        22px
        22px;
}


.mw-accordion-content p {

    margin: 0;

    color: #666;

    font-size: 14px;

    line-height: 1.7;

    border-top: 1px solid #eeeeee;

    padding-top: 18px;
}


/* PRODUCT META */

.mw-product-meta {

    display: flex;

    flex-wrap: wrap;

    gap: 10px;

    margin-top: 15px;
}


.mw-product-meta span {

    display: inline-flex;

    align-items: center;

    gap: 6px;

    padding: 7px 11px;

    border-radius: 30px;

    background: #f4fdfe;

    color: #111;

    border: 1px solid #d9f2f4;

    font-size: 12px;

    font-weight: 700;
}


.mw-product-meta span i {

    color: #39cbd7;
}


/* ACTIVE ITEM */

.mw-accordion-item.active {

    border-color: rgba(57,203,215,0.35);

    box-shadow:
        0 12px 35px rgba(57,203,215,0.10);
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 900px) {

    .mw-product-info-container {

        grid-template-columns: 1fr;

        gap: 35px;
    }


    .mw-info-heading {

        position: relative;

        top: auto;

        padding-top: 0;
    }


    .mw-info-heading h2 {

        font-size: 36px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 600px) {

    .mw-product-info-section {

        padding: 60px 15px;
    }


    .mw-product-info-container {

        gap: 25px;
    }


    .mw-info-heading h2 {

        font-size: 30px;
    }


    .mw-info-heading p {

        font-size: 13px;

        line-height: 1.7;
    }


    .mw-accordion-button {

        padding: 15px;
    }


    .mw-product-question {

        gap: 10px;

        font-size: 13px;
    }


    .mw-product-icon {

        width: 35px;

        height: 35px;

        min-width: 35px;

        font-size: 13px;
    }


    .mw-plus {

        width: 27px;

        height: 27px;

        min-width: 27px;

        font-size: 17px;
    }


    .mw-accordion-item.active .mw-accordion-content {

        padding:
            0 15px
            18px
            15px;
    }


    .mw-accordion-content p {

        font-size: 13px;
    }

}
/* =========================================================
   MOBI WORLD FAQ SECTION
========================================================= */

.mw-faq-section {

    position: relative;

    width: 100%;

    padding: 90px 20px;

    overflow: hidden;

    background:
        linear-gradient(
            135deg,
            #131212 0%,
            #05859c 45%,
            #111111 100%
        );

}


/* =========================================================
   CONTAINER
========================================================= */

.mw-faq-container {

    position: relative;

    z-index: 2;

    max-width: 1180px;

    margin: 0 auto;

    display: grid;

    grid-template-columns:
        0.9fr
        1.1fr;

    gap: 70px;

    align-items: center;

}


/* =========================================================
   LEFT SIDE
========================================================= */

.mw-faq-left {

    position: relative;

    padding: 10px;

}


.faq-small-title {

    display: inline-block;

    padding: 7px 15px;

    border-radius: 30px;

    color: #39cbd7;

    background:
        rgba(57,203,215,0.10);

    border:
        1px solid rgba(57,203,215,0.30);

    font-size: 11px;

    font-weight: 800;

    letter-spacing: 1.5px;

    margin-bottom: 17px;

    animation:
        faqBadgePulse 2.5s infinite;

}


.mw-faq-left h2 {

    margin: 0;

    color: #ffffff;

    font-size: 43px;

    line-height: 1.12;

    font-weight: 900;

    text-transform: uppercase;

}


.mw-faq-left h2 span {

    display: block;

    color: #39cbd7;

}


.faq-intro {

    max-width: 430px;

    margin: 18px 0 0;

    color:
        rgba(255,255,255,0.68);

    font-size: 14px;

    line-height: 1.8;

}


/* =========================================================
   FAQ ILLUSTRATION
========================================================= */

.faq-illustration {

    position: relative;

    width: 360px;

    height: 260px;

    margin: 35px auto 10px;

}


/* =========================================================
   QUESTION CIRCLES
========================================================= */

.question-circle {

    position: absolute;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    font-size: 45px;

    font-weight: 900;

    color: #111;

    background:
        linear-gradient(
            135deg,
            #ffffff,
            #9df3f7
        );

    box-shadow:
        0 15px 35px
        rgba(0,0,0,0.35);

}


/* MAIN */

.main-question {

    width: 115px;

    height: 115px;

    left: 120px;

    top: 65px;

    font-size: 65px;

    z-index: 4;

    animation:
        mainQuestionFloat 3.5s ease-in-out infinite;

}


/* LEFT */

.circle-one {

    width: 75px;

    height: 75px;

    left: 45px;

    top: 45px;

    z-index: 2;

    opacity: 0.85;

    animation:
        smallQuestionOne 4s ease-in-out infinite;

}


/* RIGHT */

.circle-two {

    width: 82px;

    height: 82px;

    right: 55px;

    top: 55px;

    z-index: 3;

    opacity: 0.9;

    animation:
        smallQuestionTwo 4.5s ease-in-out infinite;

}


/* BOTTOM */

.circle-three {

    width: 65px;

    height: 65px;

    left: 145px;

    bottom: 5px;

    z-index: 2;

    opacity: 0.8;

    animation:
        smallQuestionThree 3.8s ease-in-out infinite;

}


/* HEADPHONE */

.faq-headphone {

    position: absolute;

    right: 20px;

    bottom: 10px;

    width: 75px;

    height: 75px;

    border-radius: 50%;

    display: flex;

    align-items: center;

    justify-content: center;

    background:
        rgba(255,255,255,0.08);

    border:
        1px solid rgba(57,203,215,0.25);

    font-size: 35px;

    backdrop-filter:
        blur(10px);

    animation:
        headphoneFloat 4s ease-in-out infinite;

}


/* =========================================================
   SUPPORT CARD
========================================================= */

.faq-support-card {

    display: flex;

    align-items: center;

    gap: 13px;

    width: max-content;

    padding: 12px 18px;

    border-radius: 50px;

    background:
        rgba(255,255,255,0.07);

    border:
        1px solid
        rgba(255,255,255,0.13);

    backdrop-filter:
        blur(15px);

    box-shadow:
        0 10px 30px rgba(0,0,0,0.15);

    transition:
        transform 0.3s ease,
        background 0.3s ease;

}


.faq-support-card:hover {

    transform:
        translateY(-5px);

    background:
        rgba(57,203,215,0.12);

}


.support-icon {

    width: 38px;

    height: 38px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    background:
        #39cbd7;

    font-size: 17px;

}


.faq-support-card strong {

    color: #ffffff;

    font-size: 12px;

}


.faq-support-card p {

    color:
        rgba(255,255,255,0.55);

    font-size: 10px;

    margin: 2px 0 0;

}


/* =========================================================
   RIGHT SIDE
========================================================= */

.mw-faq-right {

    position: relative;

}


/* HEADING */

.faq-heading {

    margin-bottom: 20px;

}


.faq-heading span {

    color: #39cbd7;

    font-size: 10px;

    font-weight: 800;

    letter-spacing: 2px;

}


.faq-heading h3 {

    color: #ffffff;

    font-size: 24px;

    margin: 7px 0 0;

    font-weight: 800;

}


/* =========================================================
   FAQ ITEM
========================================================= */

.mw-faq-item {

    position: relative;

    margin-bottom: 10px;

    border-radius: 14px;

    overflow: hidden;

    background:
        rgba(255,255,255,0.045);

    border:
        1px solid
        rgba(255,255,255,0.12);

    backdrop-filter:
        blur(12px);

    transition:
        border-color 0.3s ease,
        background 0.3s ease,
        transform 0.3s ease;

}


.mw-faq-item:hover {

    transform:
        translateX(4px);

    border-color:
        rgba(57,203,215,0.45);

    background:
        rgba(57,203,215,0.055);

}


/* ACTIVE */

.mw-faq-item.active {

    border-color:
        rgba(57,203,215,0.55);

    background:
        rgba(57,203,215,0.07);

    box-shadow:
        0 10px 30px
        rgba(0,0,0,0.12);

}


/* =========================================================
   QUESTION BUTTON
========================================================= */

.mw-faq-question {

    width: 100%;

    border: 0;

    outline: none;

    background: transparent;

    color: #ffffff;

    padding: 19px 20px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 20px;

    cursor: pointer;

    text-align: left;

    font-size: 14px;

    font-weight: 700;

}


/* QUESTION HOVER */

.mw-faq-question:hover {

    color: #39cbd7;

}


/* =========================================================
   ARROW
========================================================= */

.faq-arrow {

    flex-shrink: 0;

    width: 27px;

    height: 27px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    color: #39cbd7;

    border:
        1px solid
        rgba(57,203,215,0.35);

    transition:
        transform 0.4s ease,
        background 0.3s ease;

}


.mw-faq-item.active .faq-arrow {

    transform:
        rotate(180deg);

    background:
        rgba(57,203,215,0.12);

}


/* =========================================================
   ANSWER
========================================================= */

.mw-faq-answer {

    display: grid;

    grid-template-rows: 0fr;

    transition:
        grid-template-rows 0.45s ease;

}


.mw-faq-answer p {

    overflow: hidden;

    margin: 0;

    padding:
        0 20px;

    color:
        rgba(255,255,255,0.67);

    font-size: 13px;

    line-height: 1.7;

    transition:
        padding 0.45s ease;

}


/* ACTIVE ANSWER */

.mw-faq-item.active .mw-faq-answer {

    grid-template-rows: 1fr;

}


.mw-faq-item.active .mw-faq-answer p {

    padding:
        0 20px 19px;

}


/* =========================================================
   BACKGROUND BUBBLES
========================================================= */

.faq-bubble {

    position: absolute;

    border-radius: 50%;

    background:
        rgba(57,203,215,0.08);

    filter:
        blur(1px);

    pointer-events: none;

}


.faq-bubble-1 {

    width: 220px;

    height: 220px;

    top: -90px;

    left: -80px;

    animation:
        bubbleMoveOne 8s ease-in-out infinite;

}


.faq-bubble-2 {

    width: 130px;

    height: 130px;

    right: 10%;

    top: 10%;

    animation:
        bubbleMoveTwo 6s ease-in-out infinite;

}


.faq-bubble-3 {

    width: 80px;

    height: 80px;

    left: 35%;

    bottom: 5%;

    animation:
        bubbleMoveThree 7s ease-in-out infinite;

}


.faq-bubble-4 {

    width: 160px;

    height: 160px;

    right: -70px;

    bottom: -70px;

    animation:
        bubbleMoveFour 9s ease-in-out infinite;

}


/* =========================================================
   ANIMATIONS
========================================================= */

@keyframes mainQuestionFloat {

    0%,
    100% {

        transform:
            translateY(0)
            rotate(0deg);

    }

    50% {

        transform:
            translateY(-13px)
            rotate(4deg);

    }

}


@keyframes smallQuestionOne {

    0%,
    100% {

        transform:
            translate(0,0)
            rotate(-5deg);

    }

    50% {

        transform:
            translate(-8px,-10px)
            rotate(5deg);

    }

}


@keyframes smallQuestionTwo {

    0%,
    100% {

        transform:
            translate(0,0)
            rotate(5deg);

    }

    50% {

        transform:
            translate(10px,-8px)
            rotate(-5deg);

    }

}


@keyframes smallQuestionThree {

    0%,
    100% {

        transform:
            translateY(0);

    }

    50% {

        transform:
            translateY(12px);

    }

}


@keyframes headphoneFloat {

    0%,
    100% {

        transform:
            translateY(0)
            rotate(0deg);

    }

    50% {

        transform:
            translateY(-10px)
            rotate(8deg);

    }

}


@keyframes faqBadgePulse {

    0%,
    100% {

        box-shadow:
            0 0 0 rgba(57,203,215,0);

    }

    50% {

        box-shadow:
            0 0 22px rgba(57,203,215,0.15);

    }

}


@keyframes bubbleMoveOne {

    0%,
    100% {

        transform:
            translate(0,0);

    }

    50% {

        transform:
            translate(40px,30px);

    }

}


@keyframes bubbleMoveTwo {

    0%,
    100% {

        transform:
            translate(0,0);

    }

    50% {

        transform:
            translate(-25px,35px);

    }

}


@keyframes bubbleMoveThree {

    0%,
    100% {

        transform:
            translate(0,0);

    }

    50% {

        transform:
            translate(30px,-25px);

    }

}


@keyframes bubbleMoveFour {

    0%,
    100% {

        transform:
            translate(0,0);

    }

    50% {

        transform:
            translate(-30px,-30px);

    }

}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 900px) {

    .mw-faq-container {

        grid-template-columns: 1fr;

        gap: 35px;

    }


    .mw-faq-left {

        text-align: center;

    }


    .faq-intro {

        margin-left: auto;

        margin-right: auto;

    }


    .faq-support-card {

        margin:
            0 auto;

    }


    .mw-faq-right {

        width: 100%;

    }

}


@media (max-width: 600px) {

    .mw-faq-section {

        padding:
            60px 15px;

    }


    .mw-faq-left h2 {

        font-size: 30px;

    }


    .faq-illustration {

        width: 300px;

        height: 220px;

    }


    .main-question {

        width: 90px;

        height: 90px;

        left: 105px;

        top: 55px;

        font-size: 50px;

    }


    .circle-one {

        width: 60px;

        height: 60px;

        left: 35px;

        top: 45px;

        font-size: 35px;

    }


    .circle-two {

        width: 65px;

        height: 65px;

        right: 35px;

        top: 50px;

        font-size: 35px;

    }


    .circle-three {

        width: 55px;

        height: 55px;

        left: 125px;

        bottom: 0;

        font-size: 30px;

    }


    .faq-headphone {

        width: 60px;

        height: 60px;

        right: 5px;

        font-size: 28px;

    }


    .faq-heading h3 {

        font-size: 20px;

    }


    .mw-faq-question {

        padding:
            16px 15px;

        font-size: 12px;

    }


    .mw-faq-answer p {

        font-size: 12px;

    }

}

</style>


<body class="index-opt-1">

<div class="wrapper">


<!-- =========================================================
     HEADER
========================================================= -->

<?php include 'nav_1.php'; ?>


<!-- =========================================================
     MAIN
========================================================= -->

<main class="site-main">


<!-- =========================================================
     HERO VIDEO
========================================================= -->

<div class="block-section-1">

    <div class="main-slide slide-opt-1 full-width">

        <video
            autoplay
            muted
            loop
            playsinline
            style="
                width:100%;
                height:clamp(260px,55vw,800px);
                object-fit:cover;
                margin-top:1px;
            "
        >

            <source
                src="assets/images/video/mobi_video.mp4"
                type="video/mp4"
            >

            Your browser does not support the video tag.

        </video>

    </div>

</div>



<!-- =========================================================
     PRODUCT CATEGORY MARQUEE
     ========================================================= -->

<div class="product-marquee-section">

    <div class="product-marquee-track">

        <!-- FIRST GROUP -->
        <div class="product-marquee-group">

            <div class="product-marquee-item">
                <i class="fa fa-headphones"></i>
                AirPods
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-clock-o"></i>
                Smart Watch
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-bolt"></i>
                Mobile Charger
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-headphones"></i>
                AirPods Max
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-plug"></i>
                iPhone Original Adapter
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-volume-up"></i>
                Marshall Kilburn Portable Bluetooth Speaker
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-battery-full"></i>
                PowerBank
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-mobile"></i>
                Mobile Accessories
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-music"></i>
                Bluetooth Speakers
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-usb"></i>
                USB Cables
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-camera"></i>
                Mobile Gadgets
            </div>

            <span class="product-marquee-separator">●</span>

        </div>


        <!-- SECOND GROUP
             Duplicate for seamless infinite animation -->

        <div class="product-marquee-group">

            <div class="product-marquee-item">
                <i class="fa fa-headphones"></i>
                AirPods
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-clock-o"></i>
                Smart Watch
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-bolt"></i>
                Mobile Charger
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-headphones"></i>
                AirPods Max
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-plug"></i>
                iPhone Original Adapter
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-volume-up"></i>
                Marshall Kilburn Portable Bluetooth Speaker
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-battery-full"></i>
                PowerBank
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-mobile"></i>
                Mobile Accessories
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-music"></i>
                Bluetooth Speakers
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-usb"></i>
                USB Cables
            </div>

            <span class="product-marquee-separator">●</span>

            <div class="product-marquee-item">
                <i class="fa fa-camera"></i>
                Mobile Gadgets
            </div>

            <span class="product-marquee-separator">●</span>

        </div>

    </div>

</div>

<!-- END PRODUCT CATEGORY MARQUEE -->


<!-- =========================================================
     DAILY DEALS
========================================================= -->

<div class="block-daily-deals style1">

<div class="container">


<div class="title-of-section main-title">
    Daily Deals
</div>


<div class="daily-deals-grid equal-container">


<!-- =========================================================
     PRODUCT 1
========================================================= -->

<div class="deal-of-day equal-elem">


<div class="product-thumb style1">

<div class="thumb-inner">

<a href="order.php?product=Airpods%20pro%203rd%20generation%20%2B%205000%20mah%20magsafe%20combo%20offer&price=2499&image=assets%2Fimages%2Fhome-product%2Fpro1.webp&description=Airpods%20Pro%203rd%20generation%20with%205000mAh%20MagSafe%20PowerBank%20combo%20offer.">

<img
src="assets/images/home-product/pro1.webp"
alt="Airpods Pro 3rd Generation"
>

</a>

</div>

</div>


<div class="product-innfo">


<div class="product-name">

<a href="order.php?product=Airpods%20pro%203rd%20generation%20%2B%205000%20mah%20magsafe%20combo%20offer&price=2499&image=assets%2Fimages%2Fhome-product%2Fpro1.webp&description=Airpods%20Pro%203rd%20generation%20with%205000mAh%20MagSafe%20PowerBank%20combo%20offer.">

AirPods Pro 3rd Generation + 5000mAh MagSafe Combo Offer

</a>

</div>


<p class="product-description">
<strong>Easy Connection:</strong>
Enjoy fast wireless connectivity with your phone and other devices.
<strong>Powerful Sound:</strong>
Clear audio with comfortable fit for music and calls.
<strong>MagSafe Power:</strong>
Includes 5000mAh magnetic power bank for convenient charging.
</p>


<span class="price">

<ins>Rs. 2,499</ins>
<del>Rs. 3,499</del>

<span class="onsale">
Combo
</span>

</span>


<span class="star-rating">

<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>

<span class="review">
5 Review(s)
</span>

</span>


<div class="product-action-buttons">

<a
href="order.php?product=Airpods%20pro%203rd%20generation%20%2B%205000%20mah%20magsafe%20combo%20offer&price=2499&image=assets%2Fimages%2Fhome-product%2Fpro1.webp&description=Airpods%20Pro%203rd%20generation%20with%205000mAh%20MagSafe%20PowerBank%20combo%20offer."
class="shop-product-btn"
>

<i class="fa fa-shopping-bag"></i>
Shop Now

</a>


<a
href="order.php?product=Airpods%20pro%203rd%20generation%20%2B%205000%20mah%20magsafe%20combo%20offer&price=2499&image=assets%2Fimages%2Fhome-product%2Fpro1.webp&description=Airpods%20Pro%203rd%20generation%20with%205000mAh%20MagSafe%20PowerBank%20combo%20offer."
class="add-product-btn"
>

<i class="fa fa-shopping-cart"></i>
Add to Cart

</a>

</div>


</div>

</div>



<!-- =========================================================
     PRODUCT 2
========================================================= -->

<div class="deal-of-day equal-elem">


<div class="product-thumb style1">

<div class="thumb-inner">

<a href="order.php?product=Airpods%20pro%202nd%20generation%20USA%20ANC%20%2B%20Free%20magsafe%20powerbank&price=1799&image=assets%2Fimages%2Fhome-product%2Fdeal2.webp&description=Airpods%20Pro%202nd%20generation%20USA%20ANC%20with%20free%20MagSafe%20powerbank.">

<img
src="assets/images/home-product/deal2.webp"
alt="Airpods Pro 2nd Generation"
>

</a>

</div>

</div>


<div class="product-innfo">


<div class="product-name">

<a href="order.php?product=Airpods%20pro%202nd%20generation%20USA%20ANC%20%2B%20Free%20magsafe%20powerbank&price=1799&image=assets%2Fimages%2Fhome-product%2Fdeal2.webp&description=Airpods%20Pro%202nd%20generation%20USA%20ANC%20with%20free%20MagSafe%20powerbank.">

AirPods Pro 2nd Generation USA ANC + Free MagSafe PowerBank

</a>

</div>


<p class="product-description">
<strong>Active Noise Cancellation:</strong>
Reduce unwanted background noise.
<strong>Immersive Audio:</strong>
Enjoy rich and balanced sound.
<strong>Free PowerBank:</strong>
Comes with a useful MagSafe charging power bank.
</p>


<span class="price">

<ins>Rs. 1,799</ins>
<del>Rs. 2,600</del>

<span class="onsale">
Offer
</span>

</span>


<span class="star-rating">

<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>

<span class="review">
5 Review(s)
</span>

</span>


<div class="product-action-buttons">

<a
href="order.php?product=Airpods%20pro%202nd%20generation%20USA%20ANC%20%2B%20Free%20magsafe%20powerbank&price=1799&image=assets%2Fimages%2Fhome-product%2Fdeal2.webp&description=Airpods%20Pro%202nd%20generation%20USA%20ANC%20with%20free%20MagSafe%20powerbank."
class="shop-product-btn"
>

<i class="fa fa-shopping-bag"></i>
Shop Now

</a>


<a
href="order.php?product=Airpods%20pro%202nd%20generation%20USA%20ANC%20%2B%20Free%20magsafe%20powerbank&price=1799&image=assets%2Fimages%2Fhome-product%2Fdeal2.webp&description=Airpods%20Pro%202nd%20generation%20USA%20ANC%20with%20free%20MagSafe%20powerbank."
class="add-product-btn"
>

<i class="fa fa-shopping-cart"></i>
Add to Cart

</a>

</div>


</div>

</div>



<!-- =========================================================
     PRODUCT 3
========================================================= -->

<div class="deal-of-day equal-elem">


<div class="product-thumb style1">

<div class="thumb-inner">

<a href="order.php?product=AirPods%20Pro%203rd%20Gen&price=2499&image=assets%2Fimages%2Fhome-product%2Fairpods%203%20gen.jpeg&description=Latest%20AirPods%20Pro%203rd%20generation%20with%20improved%20sound%20and%20wireless%20connectivity.">

<img
src="assets/images/home-product/airpods 3 gen.jpeg"
alt="AirPods Pro 3rd Gen"
>

</a>

</div>

</div>


<div class="product-innfo">


<div class="product-name">

<a href="order.php?product=AirPods%20Pro%203rd%20Gen&price=2499&image=assets%2Fimages%2Fhome-product%2Fairpods%203%20gen.jpeg&description=Latest%20AirPods%20Pro%203rd%20generation%20with%20improved%20sound%20and%20wireless%20connectivity.">

AirPods Pro 3rd Gen

</a>

</div>


<p class="product-description">
<strong>Next Generation Audio:</strong>
Enjoy detailed sound and powerful bass.
<strong>Smart Connectivity:</strong>
Connect easily with supported devices.
<strong>Comfort Design:</strong>
Designed for comfortable daily use.
</p>


<span class="price">

<ins>Rs. 2,499</ins>
<del>Rs. 3,600</del>

<span class="onsale">
New
</span>

</span>


<span class="star-rating">

<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>

<span class="review">
5 Review(s)
</span>

</span>


<div class="product-action-buttons">

<a
href="order.php?product=AirPods%20Pro%203rd%20Gen&price=2499&image=assets%2Fimages%2Fhome-product%2Fairpods%203%20gen.jpeg&description=Latest%20AirPods%20Pro%203rd%20generation%20with%20improved%20sound%20and%20wireless%20connectivity."
class="shop-product-btn"
>

<i class="fa fa-shopping-bag"></i>
Shop Now

</a>


<a
href="order.php?product=AirPods%20Pro%203rd%20Gen&price=2499&image=assets%2Fimages%2Fhome-product%2Fairpods%203%20gen.jpeg&description=Latest%20AirPods%20Pro%203rd%20generation%20with%20improved%20sound%20and%20wireless%20connectivity."
class="add-product-btn"
>

<i class="fa fa-shopping-cart"></i>
Add to Cart

</a>

</div>


</div>

</div>



<!-- =========================================================
     PRODUCT 4
========================================================= -->

<div class="deal-of-day equal-elem">


<div class="product-thumb style1">

<div class="thumb-inner">

<a href="order.php?product=Iphone%2020W%20Original%20Adapter%20%2B%20Airpods%20Pro%202nd%20Generation&price=2500&image=assets%2Fimages%2Fhome-product%2Fdeal4.webp&description=Original%20style%20iPhone%2020W%20fast%20charging%20adapter%20with%20AirPods%20Pro%202nd%20generation.">

<img
src="assets/images/home-product/deal4.webp"
alt="iPhone 20W Original Adapter"
>

</a>

</div>

</div>


<div class="product-innfo">


<div class="product-name">

<a href="order.php?product=Iphone%2020W%20Original%20Adapter%20%2B%20Airpods%20Pro%202nd%20Generation&price=2500&image=assets%2Fimages%2Fhome-product%2Fdeal4.webp&description=Original%20style%20iPhone%2020W%20fast%20charging%20adapter%20with%20AirPods%20Pro%202nd%20generation.">

iPhone 20W Original Adapter & AirPods Pro 2nd Generation

</a>

</div>


<p class="product-description">
<strong>Fast Charging:</strong>
20W high-speed charging support.
<strong>Compact Design:</strong>
Easy to carry and use every day.
<strong>Combo Offer:</strong>
Adapter combined with AirPods Pro 2nd generation.
</p>


<span class="price">

<ins>Rs. 2,500</ins>

<del>Rs. 3,500</del>

<span class="onsale">
Offer
</span>

</span>


<span class="star-rating">

<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>

<span class="review">
5 Review(s)
</span>

</span>


<div class="product-action-buttons">

<a
href="order.php?product=Iphone%2020W%20Original%20Adapter%20%2B%20Airpods%20Pro%202nd%20Generation&price=2500&image=assets%2Fimages%2Fhome-product%2Fdeal4.webp&description=Original%20style%20iPhone%2020W%20fast%20charging%20adapter%20with%20AirPods%20Pro%202nd%20generation."
class="shop-product-btn"
>

<i class="fa fa-shopping-bag"></i>
Shop Now

</a>


<a
href="order.php?product=Iphone%2020W%20Original%20Adapter%20%2B%20Airpods%20Pro%202nd%20Generation&price=2500&image=assets%2Fimages%2Fhome-product%2Fdeal4.webp&description=Original%20style%20iPhone%2020W%20fast%20charging%20adapter%20with%20AirPods%20Pro%202nd%20generation."
class="add-product-btn"
>

<i class="fa fa-shopping-cart"></i>
Add to Cart

</a>

</div>


</div>

</div>



<!-- =========================================================
     PRODUCT 5
========================================================= -->

<div class="deal-of-day equal-elem">


<div class="product-thumb style1">

<div class="thumb-inner">

<a href="order.php?product=Marshall%20Kilburn%20II%2036W%20Portable%20Bluetooth%20Speaker&price=2599&image=assets%2Fimages%2Fhome-product%2Fdeal5.webp&description=Marshall%20Kilburn%20II%2036W%20portable%20Bluetooth%20speaker%20with%20powerful%20sound%20and%20portable%20design.">

<img
src="assets/images/home-product/deal5.webp"
alt="Marshall Kilburn II Speaker"
>

</a>

</div>

</div>


<div class="product-innfo">


<div class="product-name">

<a href="order.php?product=Marshall%20Kilburn%20II%2036W%20Portable%20Bluetooth%20Speaker&price=2599&image=assets%2Fimages%2Fhome-product%2Fdeal5.webp&description=Marshall%20Kilburn%20II%2036W%20portable%20Bluetooth%20speaker%20with%20powerful%20sound%20and%20portable%20design.">

Marshall Kilburn II 36W Portable Bluetooth Speaker - Black & Brass

</a>

</div>


<p class="product-description">
<strong>Powerful Sound:</strong>
Enjoy rich and powerful audio wherever you go.
<strong>Portable Design:</strong>
Easy to carry for travel and outdoor use.
<strong>Premium Style:</strong>
Classic Black & Brass premium finish.
</p>


<span class="price">

<ins>Rs. 2,599</ins>
<del>Rs. 3,799</del>
<span class="onsale">
Hot
</span>

</span>


<span class="star-rating">

<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>

<span class="review">
5 Review(s)
</span>

</span>


<div class="product-action-buttons">

<a
href="order.php?product=Marshall%20Kilburn%20II%2036W%20Portable%20Bluetooth%20Speaker&price=2599&image=assets%2Fimages%2Fhome-product%2Fdeal5.webp&description=Marshall%20Kilburn%20II%2036W%20portable%20Bluetooth%20speaker%20with%20powerful%20sound%20and%20portable%20design."
class="shop-product-btn"
>

<i class="fa fa-shopping-bag"></i>
Shop Now

</a>


<a
href="order.php?product=Marshall%20Kilburn%20II%2036W%20Portable%20Bluetooth%20Speaker&price=2599&image=assets%2Fimages%2Fhome-product%2Fdeal5.webp&description=Marshall%20Kilburn%20II%2036W%20portable%20Bluetooth%20speaker%20with%20powerful%20sound%20and%20portable%20design."
class="add-product-btn"
>

<i class="fa fa-shopping-cart"></i>
Add to Cart

</a>

</div>


</div>

</div>



<!-- =========================================================
     PRODUCT 6
========================================================= -->

<div class="deal-of-day equal-elem">


<div class="product-thumb style1">

<div class="thumb-inner">

<a href="order.php?product=Airpods%20Max%20ANC&price=1999&image=assets%2Fimages%2Fhome-product%2Fdeal6.webp&description=AirPods%20Max%20style%20ANC%20headphones%20with%20immersive%20audio%20and%20comfortable%20over-ear%20design.">

<img
src="assets/images/home-product/deal6.webp"
alt="AirPods Max ANC"
>

</a>

</div>

</div>


<div class="product-innfo">


<div class="product-name">

<a href="order.php?product=Airpods%20Max%20ANC&price=1999&image=assets%2Fimages%2Fhome-product%2Fdeal6.webp&description=AirPods%20Max%20style%20ANC%20headphones%20with%20immersive%20audio%20and%20comfortable%20over-ear%20design.">

AirPods Max ANC

</a>

</div>


<p class="product-description">
<strong>Active Noise Cancellation:</strong>
Enjoy focused listening with reduced background noise.
<strong>Immersive Audio:</strong>
Experience rich and detailed sound.
<strong>Comfortable Design:</strong>
Soft over-ear style for longer listening sessions.
</p>


<span class="price">

<ins>Rs. 1,999</ins>

<del>Rs. 2,999</del>

<span class="onsale">
-50%
</span>

</span>


<span class="star-rating">

<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>

<span class="review">
5 Review(s)
</span>

</span>


<div class="product-action-buttons">

<a
href="order.php?product=Airpods%20Max%20ANC&price=1999&image=assets%2Fimages%2Fhome-product%2Fdeal6.webp&description=AirPods%20Max%20style%20ANC%20headphones%20with%20immersive%20audio%20and%20comfortable%20over-ear%20design."
class="shop-product-btn"
>

<i class="fa fa-shopping-bag"></i>
Shop Now

</a>


<a
href="order.php?product=Airpods%20Max%20ANC&price=1999&image=assets%2Fimages%2Fhome-product%2Fdeal6.webp&description=AirPods%20Max%20style%20ANC%20headphones%20with%20immersive%20audio%20and%20comfortable%20over-ear%20design."
class="add-product-btn"
>

<i class="fa fa-shopping-cart"></i>
Add to Cart

</a>

</div>


</div>

</div>


</div>

</div>

</div>

<!-- =========================================================
     PRODUCT DETAILS / FAQ SECTION
========================================================= -->

<!-- =========================================================
     FREQUENTLY ASKED QUESTIONS
========================================================= -->

<section class="mw-faq-section">

    <!-- BACKGROUND ANIMATION -->
    <div class="faq-bubble faq-bubble-1"></div>
    <div class="faq-bubble faq-bubble-2"></div>
    <div class="faq-bubble faq-bubble-3"></div>
    <div class="faq-bubble faq-bubble-4"></div>


    <div class="mw-faq-container">


        <!-- =================================================
             LEFT SIDE
        ================================================== -->

        <div class="mw-faq-left">

            <div class="faq-small-title">
                MOBI WORLD SUPPORT
            </div>

            <h2>
                Frequently Asked
                <span>Questions</span>
            </h2>

            <p class="faq-intro">
                Everything you need to know about our products,
                orders, delivery, payments and customer support.
            </p>


            <!-- FAQ ILLUSTRATION -->

            <div class="faq-illustration">

                <div class="question-circle circle-one">
                    ?
                </div>

                <div class="question-circle circle-two">
                    ?
                </div>

                <div class="question-circle circle-three">
                    ?
                </div>

                <div class="question-circle main-question">
                    ?
                </div>

                <div class="faq-headphone">
                    🎧
                </div>

            </div>


            <!-- SUPPORT BADGE -->

            <div class="faq-support-card">

                <div class="support-icon">
                    💬
                </div>

                <div>
                    <strong>Need more help?</strong>

                    <p>
                        Contact Mobi World support
                    </p>
                </div>

            </div>

        </div>



        <!-- =================================================
             RIGHT SIDE FAQ
        ================================================== -->

        <div class="mw-faq-right">

            <div class="faq-heading">

                <span>
                    QUICK ANSWERS
                </span>

                <h3>
                    How can we help you?
                </h3>

            </div>


            <!-- FAQ 1 -->

            <div class="mw-faq-item active">

                <button
                    class="mw-faq-question"
                    type="button"
                >

                    <span>
                        Is advance payment required for COD?
                    </span>

                    <span class="faq-arrow">
                        ↓
                    </span>

                </button>


                <div class="mw-faq-answer">

                    <p>
                        No. We offer Cash on Delivery (COD).
                        You can pay only after receiving your order.
                    </p>

                </div>

            </div>



            <!-- FAQ 2 -->

            <div class="mw-faq-item">

                <button
                    class="mw-faq-question"
                    type="button"
                >

                    <span>
                        When will I receive my order?
                    </span>

                    <span class="faq-arrow">
                        ↓
                    </span>

                </button>


                <div class="mw-faq-answer">

                    <p>
                        Orders are usually delivered within
                        3–7 working days depending on your
                        location and product availability.
                    </p>

                </div>

            </div>



            <!-- FAQ 3 -->

            <div class="mw-faq-item">

                <button
                    class="mw-faq-question"
                    type="button"
                >

                    <span>
                        Does the product come with a warranty?
                    </span>

                    <span class="faq-arrow">
                        ↓
                    </span>

                </button>


                <div class="mw-faq-answer">

                    <p>
                        Warranty depends on the individual product.
                        Product warranty details will be mentioned
                        on the product information or can be
                        confirmed before placing your order.
                    </p>

                </div>

            </div>



            <!-- FAQ 4 -->

            <div class="mw-faq-item">

                <button
                    class="mw-faq-question"
                    type="button"
                >

                    <span>
                        Why should I choose Mobi World?
                    </span>

                    <span class="faq-arrow">
                        ↓
                    </span>

                </button>


                <div class="mw-faq-answer">

                    <p>
                        Mobi World offers a wide range of
                        mobiles, AirPods, earbuds, headphones,
                        chargers, power banks, smart watches
                        and other useful accessories at
                        attractive prices.
                    </p>

                </div>

            </div>



            <!-- FAQ 5 -->

            <div class="mw-faq-item">

                <button
                    class="mw-faq-question"
                    type="button"
                >

                    <span>
                        Can I order products through WhatsApp?
                    </span>

                    <span class="faq-arrow">
                        ↓
                    </span>

                </button>


                <div class="mw-faq-answer">

                    <p>
                        Yes. You can contact our Mobi World
                        support team through WhatsApp for
                        product enquiries and order assistance.
                    </p>

                </div>

            </div>



            <!-- FAQ 6 -->

            <div class="mw-faq-item">

                <button
                    class="mw-faq-question"
                    type="button"
                >

                    <span>
                        What payment methods are available?
                    </span>

                    <span class="faq-arrow">
                        ↓
                    </span>

                </button>


                <div class="mw-faq-answer">

                    <p>
                        You can choose Cash on Delivery or
                        Online Payment while placing your order,
                        depending on the available option.
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>

<!-- =========================================================
     PROMOTION BANNERS
========================================================= -->

<div class="block-section-3">

<div class="container">

<div class="row">


<div class="col-md-6 col-sm-6">

<div class="promotion-banner style-1">

<a href="list-product.php" class="banner-img">

<img
src="assets/images/product/a.jpg"
alt="Apple Headphone"
>

</a>

<div
class="promotion-banner-inner"
style="top:70px"
>

<h4>
Apple Headphone
</h4>

<h3>
Sale <strong>25%</strong> Off
</h3>

</div>

</div>

</div>



<div class="col-md-6 col-sm-6">

<div class="promotion-banner style-1">

<a href="list-product.php" class="banner-img">

<img
src="assets/images/home2/banner-1.jpg"
alt="Apple Watch"
>

</a>

<div
class="promotion-banner-inner"
style="top:70px"
>

<h4>
Apple Watch
</h4>

<h3>
Sale <strong>40%</strong> Off
</h3>

</div>

</div>

</div>


</div>

</div>

</div>



<!-- =========================================================
     FEATURED PRODUCTS
========================================================= -->

<div class="block-section-4">

<div class="container">


<div class="title-of-section main-title">
Featured Products
</div>


<div class="tab-product tab-product-fade-effect">


<div class="tab-content">

<div class="tab-container">


<div
class="owl-carousel nav-style2 border-background equal-container"
data-nav="false"
data-autoplay="true"
data-dots="false"
data-loop="true"
data-margin="30"
data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":4},"1200":{"items":4}}'
>



<!-- FEATURED 1 -->

<div class="owl-one-row">

<div class="product-item style1">

<div class="product-inner equal-elem">


<div class="product-thumb">

<div class="thumb-inner">

<a href="order.php?product=AirPods%20Pro%203rd%20Gen&price=2499&image=assets%2Fimages%2Fhome-product%2Fairpodspro.jpg&description=AirPods%20Pro%203rd%20Gen%20Made%20in%20Vietnam%20with%20advanced%20audio%20and%20wireless%20connectivity.">

<img
src="assets/images/home-product/airpodspro.jpg"
alt="AirPods Pro 3rd Gen"
>

</a>

</div>

<span class="onsale">
-50%
</span>

</div>


<div class="product-innfo">

<div class="product-name">

<a href="order.php?product=AirPods%20Pro%203rd%20Gen&price=2499&image=assets%2Fimages%2Fhome-product%2Fairpodspro.jpg&description=AirPods%20Pro%203rd%20Gen%20Made%20in%20Vietnam%20with%20advanced%20audio%20and%20wireless%20connectivity.">

AirPods Pro 3rd Gen - Made in Vietnam

</a>

</div>


<span class="price price-dark">

<ins>
Rs. 2,499.00
</ins>
<del>Rs. 3,800.00</del>

</span>


<span class="star-rating">

<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>

<span class="review">
5 Review(s)
</span>

</span>


<p class="featured-description">
Premium wireless audio with powerful sound,
easy connectivity and comfortable design.
</p>


<div class="featured-action-buttons">

<a
href="order.php?product=AirPods%20Pro%203rd%20Gen&price=2499&image=assets%2Fimages%2Fhome-product%2Fairpodspro.jpg&description=AirPods%20Pro%203rd%20Gen%20Made%20in%20Vietnam%20with%20advanced%20audio%20and%20wireless%20connectivity."
class="featured-shop-btn"
>
<i class="fa fa-shopping-bag"></i>
Shop
</a>

<a
href="order.php?product=AirPods%20Pro%203rd%20Gen&price=2499&image=assets%2Fimages%2Fhome-product%2Fairpodspro.jpg&description=AirPods%20Pro%203rd%20Gen%20Made%20in%20Vietnam%20with%20advanced%20audio%20and%20wireless%20connectivity."
class="featured-cart-btn"
>
<i class="fa fa-shopping-cart"></i>
Cart
</a>

</div>


</div>

</div>

</div>

</div>



<!-- FEATURED 2 -->

<div class="owl-one-row">

<div class="product-item style1">

<div class="product-inner equal-elem">

<div class="product-thumb">

<div class="thumb-inner">

<a href="order.php?product=Airpods%20Max%20ANC&price=1799&image=assets%2Fimages%2F3.jpg&description=AirPods%20Max%20style%20ANC%20headphones%20with%20immersive%20sound%20and%20comfortable%20over-ear%20design.">

<img
src="assets/images/3.jpg"
alt="AirPods Max ANC"
width="300"
height="250"
>

</a>

</div>

<span class="onnew">
-70%
</span>

</div>


<div class="product-innfo">

<div class="product-name">

<a href="order.php?product=Airpods%20Max%20ANC&price=1799&image=assets%2Fimages%2F3.jpg&description=AirPods%20Max%20style%20ANC%20headphones%20with%20immersive%20sound%20and%20comfortable%20over-ear%20design.">

AirPods Max ANC

</a>

</div>


<span class="price price-dark">

<ins>
₹1,799.00
</ins>
<del>₹2,600.00</del>
</span>


<span class="star-rating">

<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>

<span class="review">
5 Review(s)
</span>

</span>


<p class="featured-description">
Immersive sound with ANC technology,
deep bass and premium comfort.
</p>


<div class="featured-action-buttons">

<a
href="order.php?product=Airpods%20Max%20ANC&price=1799&image=assets%2Fimages%2F3.jpg&description=AirPods%20Max%20style%20ANC%20headphones%20with%20immersive%20sound%20and%20comfortable%20over-ear%20design."
class="featured-shop-btn"
>
<i class="fa fa-shopping-bag"></i>
Shop
</a>

<a
href="order.php?product=Airpods%20Max%20ANC&price=1799&image=assets%2Fimages%2F3.jpg&description=AirPods%20Max%20style%20ANC%20headphones%20with%20immersive%20sound%20and%20comfortable%20over-ear%20design."
class="featured-cart-btn"
>
<i class="fa fa-shopping-cart"></i>
Cart
</a>

</div>


</div>

</div>

</div>

</div>



<!-- FEATURED 3 -->

<div class="owl-one-row">

<div class="product-item style1">

<div class="product-inner equal-elem">

<div class="product-thumb">

<div class="thumb-inner">

<a href="order.php?product=Marshall%20Kilburn%20II%2036W%20Portable%20Bluetooth%20Speaker&price=2599&image=assets%2Fimages%2Fhome-product%2Fspeaker.webp&description=Marshall%20Kilburn%20II%2036W%20portable%20Bluetooth%20speaker%20with%20powerful%20sound.">

<img
src="assets/images/home-product/speaker.webp"
alt="Marshall Speaker"
style="height:250px;object-fit:contain;"
>

</a>

</div>

<span class="onsale">
Hot
</span>

</div>


<div class="product-innfo">

<div class="product-name">

<a href="order.php?product=Marshall%20Kilburn%20II%2036W%20Portable%20Bluetooth%20Speaker&price=2599&image=assets%2Fimages%2Fhome-product%2Fspeaker.webp&description=Marshall%20Kilburn%20II%2036W%20portable%20Bluetooth%20speaker%20with%20powerful%20sound.">

Marshall Kilburn II 36W Portable Bluetooth Speaker

</a>

</div>


<span class="price price-dark">

<ins>
Rs. 2,599.00
</ins>
<del>Rs. 3,299.00</del>
</span>


<span class="star-rating">

<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>

<span class="review">
5 Review(s)
</span>

</span>


<p class="featured-description">
Powerful portable Bluetooth audio with
premium Black & Brass design.
</p>


<div class="featured-action-buttons">

<a
href="order.php?product=Marshall%20Kilburn%20II%2036W%20Portable%20Bluetooth%20Speaker&price=2599&image=assets%2Fimages%2Fhome-product%2Fspeaker.webp&description=Marshall%20Kilburn%20II%2036W%20portable%20Bluetooth%20speaker%20with%20powerful%20sound."
class="featured-shop-btn"
>
<i class="fa fa-shopping-bag"></i>
Shop
</a>

<a
href="order.php?product=Marshall%20Kilburn%20II%2036W%20Portable%20Bluetooth%20Speaker&price=2599&image=assets%2Fimages%2Fhome-product%2Fspeaker.webp&description=Marshall%20Kilburn%20II%2036W%20portable%20Bluetooth%20speaker%20with%20powerful%20sound."
class="featured-cart-btn"
>
<i class="fa fa-shopping-cart"></i>
Cart
</a>

</div>


</div>

</div>

</div>

</div>



<!-- FEATURED 4 -->

<div class="owl-one-row">

<div class="product-item style1">

<div class="product-inner equal-elem">

<div class="product-thumb">

<div class="thumb-inner">

<a href="order.php?product=iModa%20Ultra%20Smart%20Watch&price=2499&image=assets%2Fimages%2Fproduct%2Fi_smart_thumbnail2c9d6.jpg&description=iModa%20Ultra%20Smart%20Watch%20with%20AMOLED%20display%2C%20IP67%20rating%20and%20smart%20features.">

<img
src="assets/images/product/i_smart_thumbnail2c9d6.jpg"
alt="iModa Smartwatch"
style="height:250px;object-fit:contain;"
>

</a>

</div>

<span class="onnew">
New
</span>

</div>


<div class="product-innfo">

<div class="product-name">

<a href="order.php?product=iModa%20Ultra%20Smart%20Watch&price=2499&image=assets%2Fimages%2Fproduct%2Fi_smart_thumbnail2c9d6.jpg&description=iModa%20Ultra%20Smart%20Watch%20with%20AMOLED%20display%2C%20IP67%20rating%20and%20smart%20features.">

iModa Ultra Smart Watch – AMOLED, IP67, ChatGPT

</a>

</div>


<span class="price price-dark">

<ins>
₹2,499.00
</ins>

<del>
₹4,999.00
</del>

</span>


<span class="star-rating">

<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>

<span class="review">
5 Review(s)
</span>

</span>


<p class="featured-description">
Smart AMOLED watch with modern features,
IP67 protection and intelligent functionality.
</p>


<div class="featured-action-buttons">

<a
href="order.php?product=iModa%20Ultra%20Smart%20Watch&price=2499&image=assets%2Fimages%2Fproduct%2Fi_smart_thumbnail2c9d6.jpg&description=iModa%20Ultra%20Smart%20Watch%20with%20AMOLED%20display%2C%20IP67%20rating%20and%20smart%20features."
class="featured-shop-btn"
>
<i class="fa fa-shopping-bag"></i>
Shop
</a>

<a
href="order.php?product=iModa%20Ultra%20Smart%20Watch&price=2499&image=assets%2Fimages%2Fproduct%2Fi_smart_thumbnail2c9d6.jpg&description=iModa%20Ultra%20Smart%20Watch%20with%20AMOLED%20display%2C%20IP67%20rating%20and%20smart%20features."
class="featured-cart-btn"
>
<i class="fa fa-shopping-cart"></i>
Cart
</a>

</div>


</div>

</div>

</div>

</div>



<!-- FEATURED 5 -->

<div class="owl-one-row">

<div class="product-item style1">

<div class="product-inner equal-elem">

<div class="product-thumb">

<div class="thumb-inner">

<a href="order.php?product=MagSafe%20Wireless%205000mAh%20PowerBank&price=599&image=assets%2Fimages%2F4.jpg&description=MagSafe%20Wireless%205000mAh%20PowerBank%20with%20magnetic%20charging%20and%20portable%20design.">

<img
src="assets/images/4.jpg"
alt="MagSafe PowerBank"
>

</a>

</div>

<span class="onnew">
New
</span>

</div>


<div class="product-innfo">

<div class="product-name">

<a href="order.php?product=MagSafe%20Wireless%205000mAh%20PowerBank&price=599&image=assets%2Fimages%2F4.jpg&description=MagSafe%20Wireless%205000mAh%20PowerBank%20with%20magnetic%20charging%20and%20portable%20design.">

MagSafe Wireless 5000mAh PowerBank

</a>

</div>


<span class="price price-dark">

<ins>
₹599.00
</ins>
<del>
₹1,000
</del>
</span>


<span class="star-rating">

<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>

<span class="review">
5 Review(s)
</span>

</span>


<p class="featured-description">
Compact magnetic power bank with
5000mAh capacity for convenient charging.
</p>


<div class="featured-action-buttons">

<a
href="order.php?product=MagSafe%20Wireless%205000mAh%20PowerBank&price=599&image=assets%2Fimages%2F4.jpg&description=MagSafe%20Wireless%205000mAh%20PowerBank%20with%20magnetic%20charging%20and%20portable%20design."
class="featured-shop-btn"
>
<i class="fa fa-shopping-bag"></i>
Shop
</a>

<a
href="order.php?product=MagSafe%20Wireless%205000mAh%20PowerBank&price=599&image=assets%2Fimages%2F4.jpg&description=MagSafe%20Wireless%205000mAh%20PowerBank%20with%20magnetic%20charging%20and%20portable%20design."
class="featured-cart-btn"
>
<i class="fa fa-shopping-cart"></i>
Cart
</a>

</div>


</div>

</div>

</div>

</div>


</div>

</div>

</div>

</div>

</div>



<!-- =========================================================
     SMART WATCH BANNER
========================================================= -->

<div class="block-section-6 page-product">

<div class="container">

<div class="promotion-banner style-3">

<a href="list-product.php" class="banner-img">

<img
src="assets/images/home2/banner-3.jpg"
alt="Smart Watches"
>

</a>


<div class="promotion-banner-inner">

<h4>
Top Collection
</h4>

<h3>
All New Smart Watches
</h3>

<a
class="banner-link"
href="list-product.php"
>
Shop now
</a>

</div>

</div>

</div>

</div>



<!-- =========================================================
     BLOG
========================================================= -->

<div class="block-the-blog">

<div class="container">


<div class="title-of-section">

<span>
From The Blog
</span>

</div>


<div
class="owl-carousel nav-style2 border-background equal-container"
data-nav="false"
data-autoplay="true"
data-dots="false"
data-loop="true"
data-margin="30"
data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":4},"1200":{"items":4}}'
>


<div class="blog-item">

<div class="post-thumb">

<a href="#">

<img
src="assets/images/home1/blog1.jpg"
alt="Wireless AirPods"
>

</a>

</div>


<div class="post-item-info">

<h3 class="post-name">

<a href="#">
Wireless Freedom with Apple AirPods
</a>

</h3>


<div class="post-metas">

<span class="author">
Post by: <span>Admin</span>
</span>

<span class="comment">
<i class="fa fa-comment"></i>
36 Comments
</span>

</div>


<div>
Say goodbye to tangled wires and enjoy
seamless wireless connectivity with Apple AirPods.
</div>

</div>

</div>



<div class="blog-item">

<div class="post-thumb">

<a href="#">

<img
src="assets/images/home1/blog2.jpg"
alt="Smart Living"
>

</a>

</div>


<div class="post-item-info">

<h3 class="post-name">

<a href="#">
Smart Living Begins with Mobi World
</a>

</h3>


<div class="post-metas">

<span class="author">
Post by: <span>Admin</span>
</span>

<span class="comment">
<i class="fa fa-comment"></i>
36 Comments
</span>

</div>


<div>
Step into the future with smart home devices
that make everyday life easier and smarter.
</div>

</div>

</div>



<div class="blog-item">

<div class="post-thumb">

<a href="#">

<img
src="assets/images/home1/blog3.jpg"
alt="Perfect Sound"
>

</a>

</div>


<div class="post-item-info">

<h3 class="post-name">

<a href="#">
Perfect Sound, Anytime, Anywhere
</a>

</h3>


<div class="post-metas">

<span class="author">
Post by: <span>Admin</span>
</span>

<span class="comment">
<i class="fa fa-comment"></i>
36 Comments
</span>

</div>


<div>
Take your music anywhere with premium
wireless audio products from Mobi World.
</div>

</div>

</div>



<div class="blog-item">

<div class="post-thumb">

<a href="#">

<img
src="assets/images/home1/blog1.jpg"
alt="Immersive Sound"
>

</a>

</div>


<div class="post-item-info">

<h3 class="post-name">

<a href="#">
Experience Sound Like Never Before
</a>

</h3>


<div class="post-metas">

<span class="author">
Post by: <span>Admin</span>
</span>

<span class="comment">
<i class="fa fa-comment"></i>
36 Comments
</span>

</div>


<div>
Enjoy crystal-clear sound, noise cancellation
and effortless pairing with your devices.
</div>

</div>

</div>



</div>

</div>

</div>


</main>


<!-- =========================================================
     FOOTER
========================================================= -->

<?php include 'footer.php'; ?>


</div>



<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script
type="text/javascript"
src="assets/js/jquery-2.1.4.min.js"
></script>

<script
type="text/javascript"
src="assets/js/bootstrap.min.js"
></script>

<script
type="text/javascript"
src="assets/js/jquery-ui.min.js"
></script>

<script
type="text/javascript"
src="assets/js/owl.carousel.min.js"
></script>

<script
type="text/javascript"
src="assets/js/wow.min.js"
></script>

<script
type="text/javascript"
src="assets/js/jquery.actual.min.js"
></script>

<script
type="text/javascript"
src="assets/js/chosen.jquery.min.js"
></script>

<script
type="text/javascript"
src="assets/js/jquery.bxslider.min.js"
></script>

<script
type="text/javascript"
src="assets/js/jquery.sticky.js"
></script>

<script
type="text/javascript"
src="assets/js/jquery.elevateZoom.min.js"
></script>

<script
src="assets/js/fancybox/source/jquery.fancybox.pack.js"
></script>

<script
src="assets/js/fancybox/source/helpers/jquery.fancybox-media.js"
></script>

<script
src="assets/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"
></script>

<script
type="text/javascript"
src="assets/js/function.js"
></script>

<script
type="text/javascript"
src="assets/js/Modernizr.js"
></script>

<script
type="text/javascript"
src="assets/js/jquery.plugin.js"
></script>

<script
type="text/javascript"
src="assets/js/jquery.countdown.js"
></script>


<script>

$(document).ready(function() {


    /* =====================================================
       FEATURED PRODUCT CAROUSEL
    ===================================================== */

    $(".block-section-4 .owl-carousel").owlCarousel({

        loop: true,

        margin: 20,

        nav: false,

        dots: false,

        autoplay: true,

        autoplayTimeout: 3000,

        autoplayHoverPause: true,

        smartSpeed: 800,

        responsive: {

            0: {
                items: 1
            },

            480: {
                items: 2
            },

            768: {
                items: 3
            },

            992: {
                items: 4
            },

            1200: {
                items: 4
            }

        }

    });


    /* =====================================================
       BLOG CAROUSEL
    ===================================================== */

    $(".block-the-blog .owl-carousel").owlCarousel({

        loop: true,

        margin: 30,

        nav: false,

        dots: false,

        autoplay: true,

        autoplayTimeout: 3500,

        autoplayHoverPause: true,

        smartSpeed: 900,

        responsive: {

            0: {
                items: 1
            },

            480: {
                items: 2
            },

            768: {
                items: 3
            },

            992: {
                items: 4
            },

            1200: {
                items: 4
            }

        }

    });


});
/* =========================================================
   MOBI WORLD CART
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

        return Array.isArray(cart)
            ? cart
            : [];

    } catch (error) {

        console.error(
            "Cart Error:",
            error
        );

        return [];
    }
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
   ADD TO CART
========================================================= */

document.addEventListener(
    "click",
    function(event) {

        const button =
            event.target.closest(
                ".add-to-cart"
            );


        if (!button) {
            return;
        }


        const id =
            button.dataset.id || "";


        const name =
            button.dataset.name || "";


        const price =
            Number(
                button.dataset.price || 0
            );


        const image =
            button.dataset.image ||
            "assets/images/card.jpeg";


        const description =
            button.dataset.description ||
            "";


        if (!name) {

            alert(
                "Product details not found."
            );

            return;
        }


        let cart =
            getCart();


        /* =================================================
           CHECK EXISTING PRODUCT
        ================================================== */

        const existingIndex =
            cart.findIndex(
                item =>
                    String(item.id) ===
                    String(id)
            );


        if (
            existingIndex !== -1
        ) {

            cart[
                existingIndex
            ].quantity =
                Number(
                    cart[
                        existingIndex
                    ].quantity || 1
                ) + 1;

        }

        else {

            cart.push({

                id: id,

                name: name,

                price: price,

                image: image,

                description: description,

                quantity: 1

            });

        }


        /* =================================================
           SAVE
        ================================================== */

        saveCart(cart);


        /* =================================================
           BUTTON ANIMATION
        ================================================== */

        const oldText =
            button.innerHTML;


        button.innerHTML =
            "✓ Added";


        button.style.transform =
            "scale(1.05)";


        setTimeout(
            function() {

                button.innerHTML =
                    oldText;

                button.style.transform =
                    "";

            },
            1000
        );


        /* =================================================
           GO TO ORDER PAGE
        ================================================== */

        setTimeout(
            function() {

                window.location.href =
                    "order.php";

            },
            350
        );

    }
);

/* =========================================
   CREATE BUY NOW BUTTON
   FOR ALL PRODUCTS AUTOMATICALLY
========================================= */

document.addEventListener("DOMContentLoaded", function () {

    const cartButtons = document.querySelectorAll(".add-cart");

    cartButtons.forEach(function (cartButton) {

        /* -------------------------------------
           PRODUCT CARD
        ------------------------------------- */

        const productCard =
            cartButton.closest(".product-card");

        if (!productCard) {
            return;
        }


        /* -------------------------------------
           CHECK ALREADY CREATED
        ------------------------------------- */

        if (
            productCard.querySelector(".buy-now-btn")
        ) {
            return;
        }


        /* -------------------------------------
           GET PRODUCT DATA
        ------------------------------------- */

        const productName =
            cartButton.getAttribute("data-name") || "";

        const productPrice =
            cartButton.getAttribute("data-price") || "";

        const productImage =
            cartButton.getAttribute("data-image") || "";


        /* -------------------------------------
           GET PRODUCT DESCRIPTION
           FROM EXISTING UL
        ------------------------------------- */

        let description = "";

        const specificationList =
            productCard.querySelector("ul");

        if (specificationList) {

            const specifications =
                specificationList.querySelectorAll("li");

            let descriptionArray = [];

            specifications.forEach(function (item) {

                const text =
                    item.innerText.trim();

                if (text !== "") {
                    descriptionArray.push(text);
                }

            });

            description =
                descriptionArray.join(". ");
        }


        /* -------------------------------------
           ACTION WRAPPER
        ------------------------------------- */

        const actionWrapper =
            document.createElement("div");

        actionWrapper.className =
            "product-actions";


        /* -------------------------------------
           MOVE EXISTING CART BUTTON
        ------------------------------------- */

        cartButton.parentNode.insertBefore(
            actionWrapper,
            cartButton
        );

        actionWrapper.appendChild(cartButton);


        /* -------------------------------------
           CREATE BUY NOW BUTTON
        ------------------------------------- */

        const buyNowButton =
            document.createElement("button");

        buyNowButton.type = "button";

        buyNowButton.className =
            "buy-now-btn";

        buyNowButton.innerHTML =
            '<i class="fa-solid fa-bag-shopping"></i> Buy Now';


        /* -------------------------------------
           ADD BUY NOW BUTTON
        ------------------------------------- */

        actionWrapper.appendChild(
            buyNowButton
        );


        /* -------------------------------------
           BUY NOW CLICK
        ------------------------------------- */

        buyNowButton.addEventListener(
            "click",
            function () {

                if (!productName) {

                    alert(
                        "Product information not available."
                    );

                    return;
                }


                /* ---------------------------------
                   ORDER PAGE URL
                --------------------------------- */

                const orderUrl =
                    "order.php" +

                    "?product=" +
                    encodeURIComponent(productName) +

                    "&price=" +
                    encodeURIComponent(productPrice) +

                    "&image=" +
                    encodeURIComponent(productImage) +

                    "&description=" +
                    encodeURIComponent(description);


                /* ---------------------------------
                   GO TO ORDER PAGE
                --------------------------------- */

                window.location.href =
                    orderUrl;

            }
        );

    });

});
/* =========================================================
   MOBI WORLD FAQ ACCORDION
========================================================= */

const faqItems =
    document.querySelectorAll(".mw-faq-item");


faqItems.forEach(function(item) {

    const question =
        item.querySelector(".mw-faq-question");


    question.addEventListener("click", function() {

        const isActive =
            item.classList.contains("active");


        /* CLOSE ALL */

        faqItems.forEach(function(otherItem) {

            otherItem.classList.remove("active");

        });


        /* OPEN CLICKED */

        if (!isActive) {

            item.classList.add("active");

        }

    });

});
</script>


</body>

</html>