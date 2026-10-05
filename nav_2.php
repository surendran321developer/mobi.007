<style>
/* =========================================================
   MOBI WORLD - NAV2 FULL RESPONSIVE CSS
   DESKTOP + TABLET + MOBILE
   ========================================================= */


/* =========================================================
   GOOGLE FONT
   ========================================================= */

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');


/* =========================================================
   GLOBAL RESET
   ========================================================= */

.site-header,
.site-header * {
    box-sizing: border-box;
}


.site-header {
    width: 100%;
    position: relative;
    z-index: 99999;
    font-family: "Inter", Arial, sans-serif;
}


.site-header a {
    text-decoration: none;
}


.site-header ul {
    list-style: none;
    margin: 0;
    padding: 0;
}


/* =========================================================
   MAIN HEADER
   ========================================================= */

.site-header .header-content {
    width: 100%;
    min-height: 135px;

    position: relative;

    background: linear-gradient(
        90deg,
        #1e5666 0%,
        #17c5e8 50%,
        #1e5666 100%
    );

    z-index: 99999;
}


.site-header .header-content > .container {
    width: 100%;
    max-width: 1400px;

    margin: 0 auto;

    padding: 0 25px;
}


.site-header .header-content .row {
    min-height: 135px;

    display: flex;
    align-items: center;

    position: relative;

    margin: 0;
}


/* =========================================================
   LOGO
   ========================================================= */

.site-header .nav-left {
    position: relative;

    display: flex;
    align-items: center;

    justify-content: flex-start;

    width: 18%;
    min-height: 100px;

    padding: 0 10px !important;

    z-index: 10;
}


.site-header .nav-left .logo {
    display: block;

    margin: 0;
    padding: 0;

    line-height: 0;
}


.site-header .nav-left .logo a {
    display: block;

    line-height: 0;
}


.site-header .nav-left .logo img {
    display: block;

    width: 135px !important;
    max-width: 135px !important;

    height: auto;

    object-fit: contain;

    margin: 0;
}

/* =========================================================
   1. MOBI WORLD TEXT
   ========================================================= */

.site-header .mobi-world-brand {

    position: absolute !important;

    left: 150px !important;

    top: 12px !important;

    width: max-content !important;

    margin: 0 !important;
    padding: 0 !important;

    display: flex !important;

    flex-direction: column !important;

    align-items: flex-start !important;

    justify-content: center !important;

    text-align: left !important;

    z-index: 100000 !important;
    margin-top:30px !important; 
}


/* MOBI WORLD - WHITE */

.site-header .mobi-world-brand span {

    display: block !important;

    margin: 0 !important;
    padding: 0 !important;

    font-family: "Inter", Arial, sans-serif !important;

    font-size: 20px !important;

    font-weight: 800 !important;

    line-height: 22px !important;

    letter-spacing: .5px !important;

    white-space: nowrap !important;

    color: #ffffff !important;

    background: transparent !important;

    -webkit-text-fill-color: #ffffff !important;

    text-align: left !important;

    
}


/* SMALL TEXT BELOW MOBI WORLD - BLACK */

.site-header .mobi-world-brand p {

    display: block !important;

    margin: 4px 0 0 !important;
    padding-left: 10px !important;

    font-size: 9px !important;

    font-weight: 600 !important;

    line-height: 11px !important;

    letter-spacing: .3px !important;

    white-space: nowrap !important;

    color: #111111 !important;

    background: transparent !important;

    -webkit-text-fill-color: #111111 !important;

    text-align: left !important;
    
}
/* =========================================================
   MOBI WORLD NAME
   ========================================================= */

.site-header .mobi-world-name {
    position: absolute;

    left: 18%;
    top: 42px;

    width: 170px;

    min-height: 55px;

    z-index: 20;

    display: flex;

    flex-direction: column;

    justify-content: center;

    align-items: flex-start;
}


/*
   If you put text directly inside .mobi-world-name
*/

.site-header .mobi-world-name span {
    display: block;

    color: #ffffff;

    font-size: 20px;

    font-weight: 800;

    line-height: 23px;

    letter-spacing: .5px;

    white-space: nowrap;
}


.site-header .mobi-world-name p {
    margin: 3px 0 0;

    color: #111111;

    font-size: 9px;

    font-weight: 600;

    line-height: 12px;

    white-space: nowrap;
}


/* =========================================================
   SEARCH AREA
   ========================================================= */

.site-header .nav-mind {
    width: 62%;

    display: flex;

    align-items: center;

    justify-content: center;

    padding: 0 10px !important;
}


.site-header .block-search {
    width: 100%;

    margin-left: 120px !important;

    padding: 0;

    position: relative;

    z-index: 999999;
}


.site-header .block-search .block-content {
    width: 100%;

    height: 52px;

    display: flex;

    align-items: stretch;

    margin: 0;

    padding: 0;
}


/* =========================================================
   CATEGORY
   ========================================================= */

.site-header .categori-search {
    width: 180px;

    min-width: 180px;

    height: 52px;

    position: relative;

    z-index: 999999;

    margin-top: -3px;

    padding: 0;

    background: #ffffff;
}


.site-header .categori-search select {
    width: 100%;

    height: 52px;

    border: none !important;

    outline: none !important;

    background: #ffffff;

    color: #111111;

    padding: 0 15px;

    font-size: 13px;

    font-weight: 500;
}


.site-header .categori-search .chosen-container {
    width: 100% !important;

    height: 52px !important;

    position: relative;

    z-index: 999999;
}


.site-header .categori-search .chosen-container-single
.chosen-single {
    height: 52px !important;

    display: flex !important;

    align-items: center !important;

    padding: 0 15px !important;

    border: none !important;

    border-radius: 0 !important;

    background: #ffffff !important;

    box-shadow: none !important;

    color: #111111 !important;

    font-size: 13px !important;
}


.site-header .categori-search
.chosen-container-single
.chosen-single span {
    color: #111111 !important;

    line-height: 52px !important;
}


.site-header .categori-search
.chosen-container-single
.chosen-single div {
    display: flex !important;

    align-items: center !important;

    justify-content: center !important;
}


/* CATEGORY DROPDOWN */

.site-header .categori-search
.chosen-container .chosen-drop {
    width: 100%;

    position: absolute !important;

    top: 100% !important;

    left: 0;

    z-index: 99999999 !important;

    background: #ffffff;

    border: 1px solid #39cbd7;

    box-shadow: 0 10px 25px rgba(0,0,0,.15);
}


.site-header .categori-search
.chosen-container .chosen-results {
    margin: 0;

    padding: 5px 0;
}


.site-header .categori-search
.chosen-container .chosen-results li {
    padding: 9px 12px;

    color: #111111;

    font-size: 13px;
}


.site-header .categori-search
.chosen-container .chosen-results li.highlighted {
    background: linear-gradient(
        90deg,
        #111111 0%,
        #39cbd7 50%,
        #111111 100%
    ) !important;

    color: #ffffff !important;
}


/* =========================================================
   SEARCH INPUT
   ========================================================= */

.site-header .form-search {
    flex: 1;

    min-width: 0;

    height: 52px;

    margin: 0;

    padding: 0;
}


.site-header .form-search form {
    width: 100%;

    height: 52px;

    margin: 0;
}


.site-header .box-group {
    width: 100%;

    height: 52px;

    display: flex;

    align-items: stretch;

    margin: 0;

    padding: 0;

    border: 0 !important;

    background: #ffffff;
}


.site-header .box-group .form-control {
    flex: 1;

    min-width: 0;

    height: 52px !important;

    margin: 0 !important;

    padding: 0 18px !important;

    border: none !important;

    outline: none !important;

    border-radius: 0 !important;

    box-shadow: none !important;

    background: #ffffff !important;

    color: #111111 !important;

    font-size: 13px;
}


.site-header .box-group .form-control::placeholder {
    color: #777777;

    opacity: 1;
}


/* =========================================================
   SEARCH BUTTON
   ========================================================= */

.site-header .box-group .btn-search {
    width: 48px !important;

    min-width: 48px !important;

    max-width: 58px !important;

    height: 55px !important;

    margin-top: -2px !important;

    padding: 0 !important;

    border: none !important;

    border-radius: 0 !important;

    outline: none !important;

    display: flex !important;

    align-items: center !important;

    justify-content: center !important;

  background: linear-gradient(
            90deg,
            #1e5666 0%,
            #39cbd7 50%,
            #1e5666 100%
        ) !important;
    

    color: #111111 !important;

    cursor: pointer;

    transition:
        background .3s ease,
        color .3s ease !important;
}


.site-header .box-group .btn-search:hover {
    background: linear-gradient(
        90deg,
        #111111 0%,
        #39cbd7 50%,
        #111111 100%
    ) !important;

    color: #ffffff !important;
}


.site-header .box-group .btn-search span,
.site-header .box-group .btn-search i {
    color: inherit !important;

    font-size: 15px;
}


/* =========================================================
   ADMIN
   ========================================================= */

.site-header .nav-right {
    width: 20%;

    min-height: 100px;

    display: flex;

    align-items: center;

    justify-content: flex-end;

    padding: 0 10px !important;

    position: relative;

    z-index: 50;
}


.site-header .block-minicart {
    margin: 0;

    padding: 0;

    display: flex;

    align-items: center;

    justify-content: center;
}


.site-header .block-minicart > a.minicart {
    display: flex !important;

    flex-direction: column;

    align-items: center;

    justify-content: center;

    color: #ffffff !important;

    text-decoration: none;

    margin-left: 80px !important;

    padding: 0 !important;
}


.site-header .counter.qty {
    display: flex !important;

    align-items: center;

    justify-content: center;

    margin: 0 !important;

    padding: 0 !important;
}


.site-header .admin-login {
    display: flex !important;

    align-items: center;

    justify-content: center;

    color: #ffffff !important;

    margin: 0 !important;

    padding: 0 !important;

    text-decoration: none !important;
}


.site-header .admin-login svg {
    width: 27px;

    height: 27px;

    color: #ffffff;

    fill: currentColor;

    transition:
        color .3s ease,
        transform .3s ease;
}


.site-header .admin-login:hover svg {
    color: #ffffff;

    transform: scale(1.08);
}


.site-header .block-minicart p {
    margin: 3px 0 0 !important;

    padding-right: 50px !important;

    color: #ffffff !important;

    font-size: 12px;

    font-weight: 600;

    line-height: 15px;

    text-align: center;
}


/* Remove inline margin from your HTML */

.site-header .block-minicart p[style] {
    margin-right: 0 !important;
}


/* =========================================================
   MOBILE SEARCH HIDDEN ICON
   ========================================================= */

.site-header .search-hidden {
    display: none;
}


/* =========================================================
   HEADER MENU BAR
   ========================================================= */

.site-header .header-menu-bar {
    width: 100%;

    position: relative;

    z-index: 99998;

    background: linear-gradient(
            90deg,
            #1e5666 0%,
            #39cbd7 50%,
            #1e5666 100%
        ) !important;

    }



.site-header .header-menu-nav {
    width: 100%;

    position: relative;

    background: transparent;
}


.site-header .header-menu-nav > .container {
    width: 100%;

    max-width: 1400px;

    margin: 0 auto;

    padding: 0 25px;
}


.site-header .header-menu-nav-inner {
    width: 100%;

    min-height: 68px;

    display: flex;

    align-items: center;

    justify-content: space-between;

    position: relative;

    background: transparent !important;

    padding: 8px 0;
}


/* =========================================================
   ALL DEPARTMENTS
   ========================================================= */

.site-header .box-vertical-megamenus {
    width: 210px;

    min-width: 210px;

    position: relative;

    z-index: 999999;
}


.site-header .box-vertical-megamenus .title {
    width: 100%;

    height: 50px;

    margin: 0;

    padding: 0 16px;

    display: flex;

    align-items: center;

    justify-content: flex-start;

    gap: 10px;

     background: linear-gradient(
        90deg,
        #111111 0%,
        #39cbd7 50%,
        #111111 100%
    ) !important;

    color: #ffffff !important;

    border-radius: 8px;

    cursor: pointer;

    font-size: 13px;

    font-weight: 700;
}


.site-header .box-vertical-megamenus
.title .btn-open-mobile {
    width: 20px;

    height: 18px;

    display: flex;

    flex-direction: column;

    justify-content: space-between;
}


.site-header .box-vertical-megamenus
.title .btn-open-mobile span {
    width: 100%;

    height: 2px;

    background: #111111;

    display: block;
}


/* =========================================================
   VERTICAL DEPARTMENT CONTENT
   ========================================================= */

.site-header .vertical-menu-content {
    position: absolute;

    top: calc(100% + 8px);

    left: 0;

    width: 210px;

    display: none;

    background: #ffffff;

    border-radius: 8px;

    box-shadow: 0 10px 30px rgba(0,0,0,.18);

    overflow: visible;

    z-index: 99999999;
}


.site-header .box-vertical-megamenus:hover
.vertical-menu-content {
    display: block;
}


.site-header .vertical-menu-list {
    margin: 0;

    padding: 6px 0;

    background: #ffffff;

    border-radius: 8px;
}


.site-header .vertical-menu-list > li {
    position: relative;

    margin: 0;

    padding: 0;
}


.site-header .vertical-menu-list > li > a {
    display: flex;

    align-items: center;

    min-height: 42px;

    padding: 0 15px;

    color: #111111;

    font-size: 13px;

    font-weight: 500;

    transition:
        background .3s ease,
        color .3s ease;
        
}


.site-header .vertical-menu-list > li > a:hover {
    color: #ffffff;

    background: linear-gradient(
        90deg,
        #111111 0%,
        #39cbd7 50%,
        #111111 100%
    );
}


/* =========================================================
   MAIN MENU
   ========================================================= */

.site-header .header-menu {
    flex: 1;

    min-width: 0;

    margin-left: 18px;
}


.site-header .header-nav.dagon-nav {
    width: 100%;

    min-height: 50px;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 10px;

    margin: 0;

    padding: 0;
}


/* =========================================================
   MAIN MENU ITEM
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children {
    position: relative;

    display: flex;

    align-items: center;

    justify-content: center;

    height: 50px;

    margin: 0;

    padding: 0;

    border-radius: 8px;

    overflow: hidden;

    background: transparent;
}


.site-header .header-nav.dagon-nav
> li.menu-item-has-children > a {
    position: relative;

    width: 125px;

    min-width: 125px;

    max-width: 125px;

    height: 50px;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 8px;

    padding: 0 13px;

    border-radius: 8px;

    background: #ffffff;

    color: #111111;

    font-size: 13px;

    font-weight: 700;

    line-height: 1;

    overflow: hidden;

    z-index: 1;

    transition:
        color .35s ease,
        transform .35s ease;
}


/* =========================================================
   THREE COLOR HOVER
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children > a::before {
    content: "";

    position: absolute;

    left: 0;

    top: 0;

    width: 100%;

    height: 100%;

    z-index: -1;

    background: linear-gradient(
        90deg,
        #111111 0%,
        #39cbd7 50%,
        #111111 100%
    );

    transform: translateX(-101%);

    transition:
        transform .4s ease-in-out;
}


.site-header .header-nav.dagon-nav
> li.menu-item-has-children:hover > a::before {
    transform: translateX(0);
}


/* =========================================================
   HOVER MAIN MENU
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children:hover > a {
    background: transparent !important;

    color: #ffffff !important;

    transform: translateY(-2px);
}


/* =========================================================
   ICON
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children > a > i {
    position: relative;

    z-index: 3;

    color: #111111;

    font-size: 14px;

    flex-shrink: 0;

    transition:
        color .35s ease,
        transform .35s ease;
}


.site-header .header-nav.dagon-nav
> li.menu-item-has-children:hover > a > i {
    color: #ffffff !important;

    transform: scale(1.08);
}


/* =========================================================
   MENU TEXT
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children > a > span {
    position: relative;

    z-index: 3;

    color: #111111;

    font-size: 13px;

    font-weight: 700;

    white-space: nowrap;

    transition: color .35s ease;
}


.site-header .header-nav.dagon-nav
> li.menu-item-has-children:hover > a > span {
    color: #ffffff !important;
}


/* =========================================================
   REMOVE OLD WHITE AFTER EFFECT
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children > a::after {
    content: none !important;

    display: none !important;
}


/* =========================================================
   CLOSE BUTTON
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.btn-close {
    display: none;
}


/* =========================================================
   MOBILE MENU BUTTON
   ========================================================= */

.site-header .menu-on-mobile {
    display: none;
}


/* =========================================================
   MEGA MENU
   ========================================================= */

.site-header .submenu.parent-megamenu {
    position: absolute;

    top: calc(100% + 5px);

    left: 0;

    min-width: 450px;

    background: #ffffff;

    border-radius: 8px;

    box-shadow: 0 12px 35px rgba(0,0,0,.18);

    padding: 20px;

    z-index: 99999999;
}


.site-header .dropdown-menu-title {
    margin: 0 0 10px;

    color: #111111;

    font-size: 15px;

    font-weight: 700;
}


.site-header .dropdown-menu-content ul {
    margin: 0;

    padding: 0;
}


.site-header .dropdown-menu-content li a {
    display: block;

    padding: 7px 0;

    color: #555555;

    font-size: 13px;

    transition:
        color .25s ease,
        padding-left .25s ease;
}


.site-header .dropdown-menu-content li a:hover {
    color: #39cbd7;

    padding-left: 5px;
}


/* =========================================================
   TABLET
   ========================================================= */

@media (max-width: 1199px) {

    .site-header .header-content > .container,
    .site-header .header-menu-nav > .container {
        padding-left: 18px;

        padding-right: 18px;
    }


    .site-header .nav-left {
        width: 16%;
    }


    .site-header .nav-mind {
        width: 64%;
    }


    .site-header .nav-right {
        width: 20%;
    }


    .site-header .mobi-world-name {
        left: 16%;

        width: 145px;
    }


    .site-header .mobi-world-name span {
        font-size: 17px;
    }


    .site-header .categori-search {
        width: 150px;

        min-width: 150px;
    }


    .site-header .header-nav.dagon-nav {
        gap: 6px;
    }


    .site-header .header-nav.dagon-nav
    > li.menu-item-has-children > a {
        width: 112px;

        min-width: 112px;

        max-width: 112px;

        padding: 0 8px;
    }
}


/* =========================================================
   MOBILE
   ========================================================= */

@media (max-width: 767px) {

    /* -----------------------------------------------------
       MAIN HEADER
       ----------------------------------------------------- */

    .site-header .header-content {
        min-height: 170px;

        background: linear-gradient(
            90deg,
            #17c5e8 0%,
            #1e5666 50%,
            #17c5e8 100%
        )!important;
    }


    .site-header .header-content > .container {
        width: 100%;

        max-width: 100%;

        padding: 0 12px;
    }


    .site-header .header-content .row {
        min-height: 170px;

        display: block;

        position: relative;
    }


    /* -----------------------------------------------------
       LOGO
       ----------------------------------------------------- */

    .site-header .nav-left {
        position: absolute !important;

        left: 5px !important;

        top: 24px !important;

        width: 85px !important;

        min-height: auto !important;

        height: 65px !important;

        padding: 0 !important;

        display: flex !important;

        align-items: center !important;

        justify-content: flex-start !important;

        z-index: 1000000 !important;
    }


    .site-header .nav-left .logo img {
        width: 88px !important;

        max-width: 88px !important;

        height: auto !important;
    }


    /* -----------------------------------------------------
       MOBI WORLD
       ----------------------------------------------------- */

    .site-header .mobi-world-name {
        position: absolute !important;

        left: 50% !important;

        top: 31px !important;

        transform: translateX(-50%) !important;

        width: max-content !important;

        min-height: auto !important;

        margin: 0 !important;

        padding: 0 !important;

        align-items: center !important;

        text-align: center !important;

        z-index: 1000000 !important;
    }


    .site-header .mobi-world-name span {
        font-size: 19px !important;

        line-height: 22px !important;

        color: #ffffff !important;

        text-align: center !important;
    }


    .site-header .mobi-world-name p {
        margin-top: 3px !important;

        font-size: 9px !important;

        color: #111111 !important;

        text-align: center !important;
    }


    /* -----------------------------------------------------
       ADMIN
       ----------------------------------------------------- */

    .site-header .nav-right {
        position: absolute !important;

        right: 7px !important;

        top: 22px !important;

        width: 50px !important;

        min-height: auto !important;

        height: 65px !important;

        padding: 0 !important;

        display: flex !important;

        align-items: center !important;

        justify-content: center !important;

        z-index: 1000000 !important;
    }


    .site-header .block-minicart {
        width: 50px !important;

        margin: 0 !important;

        padding: 0 !important;
    }


    .site-header .admin-login svg {
        width: 27px !important;

        height: 27px !important;

        color: #111111 !important;
    }


    .site-header .block-minicart p {
        font-size: 9px !important;

        line-height: 11px !important;

        margin: 2px 0 0 !important;
    }


    /* -----------------------------------------------------
       SEARCH
       ----------------------------------------------------- */

    .site-header .nav-mind {
        position: absolute !important;

        left: 12px !important;

        right: 12px !important;

        top: 102px !important;

        width: auto !important;

        height: 50px !important;

        padding: 0 !important;

        display: block !important;
    }


    .site-header .block-search {
        width: 100% !important;

        margin: 0 !important;
    }


    .site-header .block-search .block-content {
        height: 50px !important;

        display: flex !important;
    }


    .site-header .categori-search {
        display: none !important;
    }


    .site-header .form-search {
        width: 100% !important;

        height: 50px !important;
    }


    .site-header .form-search form {
        height: 50px !important;
    }


    .site-header .box-group {
        height: 50px !important;

        width: 100% !important;

        border-radius: 6px !important;

        overflow: hidden !important;
    }


    .site-header .box-group .form-control {
        height: 50px !important;

        padding: 0 14px !important;

        font-size: 12px !important;
    }


    .site-header .box-group .btn-search {
        width: 43px !important;

        min-width: 43px !important;

        max-width: 43px !important;

        height: 50px !important;
    }


    /* -----------------------------------------------------
       MENU BAR
       ----------------------------------------------------- */

    .site-header .header-menu-bar {
        width: 100% !important;

        position: relative !important;

        z-index: 99998 !important;

     background: linear-gradient(
            90deg,
            #1e5666 0%,
            #39cbd7 50%,
            #1e5666 100%
        ) !important;
    }


    .site-header .header-menu-nav {
        width: 100% !important;

        background: transparent !important;
    }


    .site-header .header-menu-nav > .container {
        width: 100% !important;

        max-width: 100% !important;

        padding: 0 !important;
    }


    .site-header .header-menu-nav-inner {
        min-height: 62px !important;

        height: 62px !important;

        padding: 6px 12px !important;

        display: flex !important;

        align-items: center !important;

        justify-content: flex-end !important;

        position: relative !important;
    }


    /* -----------------------------------------------------
       HIDE ALL DEPARTMENTS MOBILE
       ----------------------------------------------------- */

    .site-header .box-vertical-megamenus {
        display: none !important;
    }


    /* -----------------------------------------------------
       HIDE NORMAL MENU INITIALLY
       ----------------------------------------------------- */

    .site-header .header-menu {
        display: none !important;

        position: absolute !important;

        top: 62px !important;

        left: 0 !important;

        width: 100% !important;

        margin: 0 !important;

        padding: 0 !important;

        z-index: 99999999 !important;
    }


    /* -----------------------------------------------------
       OPEN MOBILE MENU
       IMPORTANT:
       JS ADDS .has-open TO .header-nav
       ----------------------------------------------------- */

    .site-header .header-menu
    .header-nav.dagon-nav.has-open {
        display: flex !important;

        flex-direction: column !important;

        align-items: stretch !important;

        justify-content: flex-start !important;

        width: 100% !important;

        height: auto !important;

        min-height: 0 !important;

        margin: 0 !important;

        padding: 12px !important;

        background: #ffffff !important;

        border-radius: 0 !important;

        box-shadow: 0 10px 25px rgba(0,0,0,.18) !important;

        position: relative !important;

        z-index: 99999999 !important;

        gap: 7px !important;
    }


    /* -----------------------------------------------------
       MOBILE CLOSE BUTTON
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav.has-open
    > li.btn-close {
        display: flex !important;

        align-items: center !important;

        justify-content: flex-end !important;

        width: 100% !important;

        height: 35px !important;

        min-height: 35px !important;

        margin: 0 !important;

        padding: 0 8px !important;

        background: transparent !important;

        border: none !important;

        overflow: visible !important;
    }


    .site-header .header-nav.dagon-nav.has-open
    > li.btn-close i {
        font-size: 23px !important;

        color: #111111 !important;

        cursor: pointer;
    }


    /* -----------------------------------------------------
       MOBILE MENU ITEMS
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav.has-open
    > li.menu-item-has-children {
        width: 100% !important;

        height: 48px !important;

        min-height: 48px !important;

        margin: 0 !important;

        padding: 0 !important;

        display: flex !important;

        overflow: hidden !important;

        border-radius: 7px !important;

        background: transparent !important;
    }


    .site-header .header-nav.dagon-nav.has-open
    > li.menu-item-has-children > a {
        width: 100% !important;

        min-width: 100% !important;

        max-width: 100% !important;

        height: 48px !important;

        min-height: 48px !important;

        max-height: 48px !important;

        padding: 0 18px !important;

        display: flex !important;

        align-items: center !important;

        justify-content: flex-start !important;

        gap: 14px !important;

        border-radius: 7px !important;

        background: #ffffff !important;

        color: #111111 !important;

        font-size: 14px !important;

        transform: none !important;
    }


    /* -----------------------------------------------------
       MOBILE HOVER / TAP GRADIENT
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav.has-open
    > li.menu-item-has-children > a::before {
        background: linear-gradient(
            90deg,
            #111111 0%,
            #39cbd7 50%,
            #111111 100%
        ) !important;

        transform: translateX(-101%) !important;

        transition: transform .35s ease !important;
    }


    .site-header .header-nav.dagon-nav.has-open
    > li.menu-item-has-children:hover > a::before {
        transform: translateX(0) !important;
    }


    .site-header .header-nav.dagon-nav.has-open
    > li.menu-item-has-children:hover > a {
        background: transparent !important;

        color: #ffffff !important;

        transform: none !important;
    }


    .site-header .header-nav.dagon-nav.has-open
    > li.menu-item-has-children
    > a > i {
        width: 20px !important;

        min-width: 20px !important;

        text-align: center !important;

        color: #111111 !important;

        font-size: 16px !important;

        position: relative !important;

        z-index: 3 !important;
    }


    .site-header .header-nav.dagon-nav.has-open
    > li.menu-item-has-children:hover
    > a > i {
        color: #ffffff !important;
    }


    .site-header .header-nav.dagon-nav.has-open
    > li.menu-item-has-children
    > a > span {
        position: relative !important;

        z-index: 3 !important;

        color: #111111 !important;

        font-size: 14px !important;

        font-weight: 600 !important;
    }


    .site-header .header-nav.dagon-nav.has-open
    > li.menu-item-has-children:hover
    > a > span {
        color: #ffffff !important;
    }


    /* -----------------------------------------------------
       HIDE SUBMENU ARROW
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav.has-open
    .toggle-submenu {
        display: none !important;
    }


    /* -----------------------------------------------------
       MOBILE MENU BUTTON
       ----------------------------------------------------- */

    .site-header .menu-on-mobile {
        width: 50px !important;

        height: 50px !important;

        display: flex !important;

        align-items: center !important;

        justify-content: center !important;

        position: relative !important;

        z-index: 100000000 !important;

        margin: 0 !important;

        padding: 0 !important;

        cursor: pointer;

        border-radius: 8px !important;

        background: #111111 !important;
    }


    .site-header .menu-on-mobile
    .btn-open-mobile {
        width: 27px !important;

        height: 22px !important;

        display: flex !important;

        flex-direction: column !important;

        justify-content: space-between !important;
    }


    .site-header .menu-on-mobile
    .btn-open-mobile > span {
        width: 100% !important;

        height: 3px !important;

        display: block !important;

        border-radius: 3px !important;

        background: #39cbd7 !important;
    }


    .site-header .title-menu-mobile {
        display: none !important;
    }


    /* -----------------------------------------------------
       BODY WHEN MENU OPEN
       Do NOT lock body / page scroll
       ----------------------------------------------------- */

    body.menu-open {
        overflow: auto !important;
    }


    /* -----------------------------------------------------
       SEARCH HIDDEN ICON
       ----------------------------------------------------- */

    .site-header .search-hidden {
        display: none !important;
    }
}


/* =========================================================
   SMALL MOBILE
   ========================================================= */

@media (max-width: 480px) {

    .site-header .header-content {
        min-height: 165px;
    }


    .site-header .header-content .row {
        min-height: 165px;
    }


    .site-header .nav-left {
        left: 3px !important;

        top: 22px !important;
    }


    .site-header .nav-left .logo img {
        width: 80px !important;

        max-width: 80px !important;
    }


    .site-header .mobi-world-name {
        top: 29px !important;
    }


    .site-header .mobi-world-name span {
        font-size: 17px !important;

        line-height: 20px !important;
    }


    .site-header .mobi-world-name p {
        font-size: 8px !important;
    }


    .site-header .nav-right {
        right: 3px !important;

        top: 20px !important;
    }


    .site-header .nav-mind {
        top: 98px !important;

        left: 10px !important;

        right: 10px !important;
    }


    .site-header .header-menu-nav-inner {
        padding-left: 10px !important;

        padding-right: 10px !important;
    }


    .site-header .menu-on-mobile {
        width: 46px !important;

        height: 46px !important;
    }


    .site-header .menu-on-mobile
    .btn-open-mobile {
        width: 25px !important;

        height: 20px !important;
    }
}

/* =========================================================
   NAV2 - FINAL HEADER + MENU FIX
   Same 3 Color Gradient
   #111111 -> #39cbd7 -> #111111
   ========================================================= */


/* ---------------------------------------------------------
   REMOVE GAP BETWEEN HEADER AND MENU
   --------------------------------------------------------- */

.site-header .header-content {
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
}

.site-header .header-menu-bar {
    margin-top: 0 !important;
    padding-top: 0 !important;
}

.site-header .header-menu-nav {
    margin-top: 0 !important;
    padding-top: 0 !important;
}

.site-header .header-menu-nav-inner {
    margin-top: 0 !important;
    padding-top: 0 !important;
}


/* ---------------------------------------------------------
   MAIN MENU BAR
   --------------------------------------------------------- */

.site-header .header-menu-bar,
.site-header .header-menu-nav {
    background: linear-gradient(
            90deg,
            #1e5666 0%,
            #39cbd7 50%,
            #1e5666 100%
        ) !important;
    }


.site-header .header-menu-nav-inner {
    background: transparent !important;
}


/* ---------------------------------------------------------
   INNER MENU ALIGNMENT
   --------------------------------------------------------- */

.site-header .header-menu-nav-inner {
    display: flex !important;
    align-items: center !important;
    min-height: 70px !important;
    position: relative !important;
}


/* ---------------------------------------------------------
   ALL DEPARTMENTS
   --------------------------------------------------------- */

.site-header .box-vertical-megamenus {
    position: relative !important;
    margin: 0 !important;
    padding: 0 !important;
    z-index: 99999 !important;
}

.site-header .box-vertical-megamenus .title {
    margin: 0 !important;
    height: 50px !important;
    min-width: 205px !important;

    display: flex !important;
    align-items: center !important;
    justify-content: center !important;

    background: linear-gradient(
            90deg,
            #1e5666 0%,
            #39cbd7 50%,
            #1e5666 100%
        ) !important;
    

    color: #ffffff !important;

    border-radius: 6px !important;

    cursor: pointer !important;

    position: relative !important;
    z-index: 100000 !important;
}


/* Title text */

.site-header .box-vertical-megamenus .title .title-menu {
    color: #ffffff !important;
    font-weight: 600 !important;
}


/* Hamburger */

.site-header .box-vertical-megamenus .title .btn-open-mobile {
    display: none !important;
}


/* ---------------------------------------------------------
   DEPARTMENT DROPDOWN
   --------------------------------------------------------- */

.site-header .box-vertical-megamenus .vertical-menu-content {
    position: absolute !important;

    top: 50px !important;
    left: 0 !important;

    width: 205px !important;

    margin: 0 !important;
    padding: 0 !important;

    background: #ffffff !important;

    border-radius: 0 0 6px 6px !important;

    box-shadow: 0 10px 30px rgba(0,0,0,0.20) !important;

    z-index: 999999 !important;

    display: none;
}


/* ---------------------------------------------------------
   CLICK OPEN
   --------------------------------------------------------- */

.site-header
.box-vertical-megamenus.has-open
.vertical-menu-content {

    display: block !important;
}


/* Also support title active */

.site-header
.box-vertical-megamenus .title.active
+ .vertical-menu-content {

    display: block !important;
}


/* ---------------------------------------------------------
   DEPARTMENT ITEMS
   --------------------------------------------------------- */

.site-header .vertical-menu-list {
    margin: 0 !important;
    padding: 8px 0 !important;

    list-style: none !important;

    background: #ffffff !important;
}


.site-header .vertical-menu-list > li {
    position: relative !important;
    margin: 0 !important;
    padding: 0 !important;
}


.site-header .vertical-menu-list > li > a {
    display: flex !important;

    align-items: center !important;

    min-height: 42px !important;

    padding: 0 18px !important;

    color: #222222 !important;

    text-decoration: none !important;

    background: #ffffff !important;

    transition: all 0.25s ease !important;
}


/* Department hover */

.site-header .vertical-menu-list > li:hover > a {
    background: linear-gradient(
        90deg,
        #111111 0%,
        #39cbd7 50%,
        #111111 100%
    ) !important;

    color: #ffffff !important;

    padding-left: 23px !important;
}


/* ---------------------------------------------------------
   MEGA SUBMENU
   --------------------------------------------------------- */

.site-header .vertical-menu-list
> li.menu-item-has-children
> .submenu {

    position: absolute !important;

    top: 0 !important;
    left: 100% !important;

    min-width: 450px !important;

    margin: 0 !important;

    background: #ffffff !important;

    border-radius: 0 6px 6px 6px !important;

    box-shadow: 0 10px 35px rgba(0,0,0,0.20) !important;

    z-index: 1000000 !important;

    display: none !important;
}


/* Keep submenu visible while mouse is inside */

.site-header .vertical-menu-list
> li.menu-item-has-children:hover
> .submenu {

    display: block !important;
}


/* Click-open submenu */

.site-header .vertical-menu-list
> li.menu-item-has-children.show-submenu
> .submenu {

    display: block !important;
}


/* ---------------------------------------------------------
   MEGA MENU CONTENT
   --------------------------------------------------------- */

.site-header .submenu.parent-megamenu {
    padding: 20px !important;
}

.site-header .submenu .dropdown-menu-title {
    color: #111111 !important;
    margin-bottom: 12px !important;
}

.site-header .submenu .menu {
    margin: 0 !important;
    padding: 0 !important;
    list-style: none !important;
}

.site-header .submenu .menu li {
    margin: 0 !important;
    padding: 0 !important;
}

.site-header .submenu .menu li a {
    display: block !important;

    padding: 8px 10px !important;

    color: #333333 !important;

    background: #ffffff !important;

    transition: all 0.25s ease !important;
}

.site-header .submenu .menu li a:hover {
    color: #ffffff !important;

    background: linear-gradient(
        90deg,
        #111111 0%,
        #39cbd7 50%,
        #111111 100%
    ) !important;

    padding-left: 15px !important;
}


/* ---------------------------------------------------------
   MAIN HOME / ABOUT / PRODUCT / BLOG / CONTACT MENU
   --------------------------------------------------------- */

.site-header .header-menu {
    flex: 1 !important;

    margin: 0 !important;
    padding: 0 !important;
}


.site-header .header-nav.dagon-nav {
    display: flex !important;

    align-items: center !important;
    justify-content: center !important;

    gap: 12px !important;

    margin: 0 !important;
    padding: 0 !important;

    list-style: none !important;
}


.site-header .header-nav.dagon-nav > li {
    margin: 0 !important;
    padding: 0 !important;

    position: relative !important;
}


/* Main menu normal */

.site-header .header-nav.dagon-nav > li > a {
    position: relative !important;

    display: flex !important;

    align-items: center !important;
    justify-content: center !important;

    gap: 8px !important;

    min-height: 50px !important;

    padding: 0 22px !important;

    border-radius: 6px !important;

    background: transparent !important;

    color: #ffffff !important;

    text-decoration: none !important;

    overflow: hidden !important;

    z-index: 1 !important;

    transition: color 0.3s ease,
                transform 0.3s ease !important;
}


/* Sliding gradient */

.site-header .header-nav.dagon-nav > li > a::before {

    content: "" !important;

    position: absolute !important;

    left: -100% !important;
    top: 0 !important;

    width: 100% !important;
    height: 100% !important;

    background: linear-gradient(
        90deg,
        #111111 0%,
        #39cbd7 50%,
        #111111 100%
    ) !important;

    transition: left 0.35s ease !important;

    z-index: -1 !important;
}


/* Hover */

.site-header .header-nav.dagon-nav > li > a:hover::before {
    left: 0 !important;
}


.site-header .header-nav.dagon-nav > li > a:hover {

    color: #ffffff !important;

    transform: translateY(-2px) !important;
}


/* Real Font Awesome icons */

.site-header .header-nav.dagon-nav > li > a i {

    color: #ffffff !important;

    font-size: 15px !important;

    transition: color 0.3s ease !important;
}


.site-header .header-nav.dagon-nav > li > a:hover i {
    color: #ffffff !important;
}


/* ---------------------------------------------------------
   ADMIN
   --------------------------------------------------------- */

.site-header .nav-right {
    display: flex !important;

    align-items: center !important;
    justify-content: center !important;

    margin: 0 !important;
    padding: 0 !important;
}

.site-header .admin-login {
    color: #111111 !important;
}

.site-header .admin-login svg {
    width: 24px !important;
    height: 24px !important;

    color: #111111 !important;
}





/* ---------------------------------------------------------
   IMPORTANT:
   DROPDOWN SHOULD NOT MOVE WHEN HOVERING ITS CONTENT
   --------------------------------------------------------- */

.site-header .box-vertical-megamenus,
.site-header .box-vertical-megamenus .vertical-menu-content,
.site-header .box-vertical-megamenus .vertical-menu-list,
.site-header .box-vertical-megamenus .vertical-menu-list > li,
.site-header .box-vertical-megamenus .submenu {
    pointer-events: auto !important;
}


/* ---------------------------------------------------------
   MOBILE
   --------------------------------------------------------- */

@media (max-width: 767px) {

    .site-header .header-menu-nav-inner {
        min-height: 60px !important;

        display: flex !important;
        align-items: center !important;
    }


    /* Hide All Departments on mobile */

    .site-header .box-vertical-megamenus {
        display: none !important;
    }


    /* Main menu */

    .site-header .header-menu {
        width: 100% !important;
    }


    .site-header .header-nav.dagon-nav {

        display: none !important;

        position: fixed !important;

        top: 0 !important;
        left: 0 !important;

        width: 100% !important;
        height: 100vh !important;

        padding: 75px 20px 30px !important;

        flex-direction: column !important;

        justify-content: flex-start !important;
        align-items: stretch !important;

        gap: 8px !important;

        background: #ffffff !important;

        overflow-y: auto !important;

        z-index: 999999 !important;
    }


    /* JS adds has-open */

    .site-header .header-nav.dagon-nav.has-open {
        display: flex !important;
    }


    /* Close */

    .site-header .header-nav.dagon-nav .btn-close {
        display: flex !important;

        position: absolute !important;

        top: 18px !important;
        right: 20px !important;

        width: 42px !important;
        height: 42px !important;

        align-items: center !important;
        justify-content: center !important;

        cursor: pointer !important;
    }


    /* Mobile menu links */

    .site-header .header-nav.dagon-nav > li:not(.btn-close) {
        width: 100% !important;
    }


    .site-header .header-nav.dagon-nav > li > a {

        width: 100% !important;

        min-height: 52px !important;

        justify-content: flex-start !important;

        padding: 0 18px !important;

        color: #111111 !important;

        background: #ffffff !important;

        border-bottom: 1px solid #eeeeee !important;

        border-radius: 6px !important;
    }


    .site-header .header-nav.dagon-nav > li > a i {
        color: #111111 !important;
    }


    .site-header .header-nav.dagon-nav > li > a:hover,
    .site-header .header-nav.dagon-nav > li > a:hover i {
        color: #ffffff !important;
    }


    /* Mobile menu button */

    .site-header .menu-on-mobile {

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        width: 48px !important;
        height: 48px !important;

        margin-left: auto !important;

        cursor: pointer !important;

       background: linear-gradient(
            90deg,
            #1e5666 0%,
            #39cbd7 50%,
            #1e5666 100%
        ) !important;
    }

        border-radius: 6px !important;

        z-index: 1000000 !important;
    }


    .site-header .title-menu-mobile {
        display: none !important;
    }


    .site-header .btn-open-mobile {
        display: flex !important;

        flex-direction: column !important;

        gap: 5px !important;
    }


    .site-header .btn-open-mobile span {
        width: 24px !important;
        height: 3px !important;

        background: #ffffff !important;

        border-radius: 2px !important;
    }


/* =========================================
   MAIN MENU BACKGROUND - SAME AS HEADER
   ========================================= */

.site-header .header-menu-bar,
.site-header .header-menu-nav,
.site-header .header-menu-nav-inner {
    background: linear-gradient(
        90deg,
        #111111 0%,
        #39cbd7 50%,
        #111111 100%
    ) !important;

    background-color: transparent !important;
}


/* Remove extra white / separate background */
.site-header .header-menu {
    background: transparent !important;
}


/* Main menu area should blend with header */
.site-header .header-menu-resize {
    background: transparent !important;
}


/* Remove any border/shadow creating the extra strip */
.site-header .header-menu-bar,
.site-header .header-menu-nav,
.site-header .header-menu-nav-inner {
    border: none !important;
    box-shadow: none !important;
}


/* Keep menu items transparent in normal state */
.site-header .header-nav.dagon-nav > li {
    background: transparent !important;
}


/* Menu links transparent */
.site-header .header-nav.dagon-nav > li > a {
    background: transparent !important;
}


/* =========================================
   IMPORTANT:
   MENU BAR AND HEADER SHOULD TOUCH
   ========================================= */

.site-header .header-content {
    margin-bottom: 0 !important;
}

.site-header .header-menu-bar {
    margin-top: 0 !important;
}

.site-header .header-menu-nav {
    margin-top: 0 !important;
}







/* =========================================
   REMOVE #39CBD7 BACKGROUND BEHIND MENU
   ========================================= */

/* Menu full area - transparent */
.site-header .header-menu-bar,
.site-header .header-menu-nav,
.site-header .header-menu-nav-inner,
.site-header .header-menu {
    background: transparent !important;
    background-color: transparent !important;
    box-shadow: none !important;
    border: none !important;
}


/* Menu list - transparent */
.site-header .header-nav.dagon-nav {
    background: transparent !important;
}


/* Home / About / Product / Blog / Contact
   remove the separate #39cbd7 background */
.site-header .header-nav.dagon-nav > li {
    background: transparent !important;
}


/* Menu links also transparent */
.site-header .header-nav.dagon-nav > li > a {
    background: transparent !important;
}


/* Remove any pseudo-element background */
.site-header .header-nav.dagon-nav > li::before,
.site-header .header-nav.dagon-nav > li::after {
    background: transparent !important;
}


/* Keep the SAME gradient behind the complete header/menu area */
.site-header .header-content,
.site-header .header-menu-bar {
    background: linear-gradient(
            90deg,
            #1e5666 0%,
            #39cbd7 50%,
            #1e5666 100%
        ) !important;
}




/* =========================================================
   HEADER SEARCH + MOBI WORLD ALIGNMENT FIX
   ========================================================= */

/* Main header row */
.site-header .header-content .container > .row {
    display: flex !important;
    align-items: center !important;
    flex-wrap: nowrap !important;
}


/* =========================================================
   MOBI WORLD TEXT
   ========================================================= */

.site-header .mobi-world-name {
    width: 180px !important;
    min-width: 180px !important;
    max-width: 180px !important;

    margin: 0 !important;
    padding: 0 10px !important;

    display: flex !important;
    align-items: center !important;
    justify-content: flex-start !important;

    position: relative !important;
    z-index: 5 !important;
}


/* =========================================================
   SEARCH COLUMN
   ========================================================= */

.site-header .nav-mind {
    flex: 1 1 auto !important;
    width: auto !important;
    max-width: none !important;

    margin: 0 !important;
    padding: 0 15px !important;

    position: relative !important;
    z-index: 100 !important;
}


/* Search block */
.site-header .block-search {
    width: 100% !important;

    margin: 0 !important;
    padding: 0 !important;

    position: relative !important;
    z-index: 1000 !important;
}


/* Search content */
.site-header .block-search .block-content {
    width: 100% !important;

    display: flex !important;
    flex-direction: row !important;
    align-items: stretch !important;

    flex-wrap: nowrap !important;

    position: relative !important;
    z-index: 1000 !important;
}


/* =========================================================
   ALL CATEGORIES
   ========================================================= */

.site-header .categori-search {
    width: 180px !important;
    min-width: 180px !important;
    max-width: 180px !important;

    height: 58px !important;

    margin-top: -4px !important;
    padding: 0 !important;

    position: relative !important;
    z-index: 999999 !important;

    flex-shrink: 0 !important;
}


/* Chosen dropdown */
.site-header .categori-search .chosen-container {
    width: 100% !important;
    height: 54px !important;

    position: relative !important;
    z-index: 999999 !important;
}


/* Selected category */
.site-header .categori-search .chosen-container .chosen-single {
    height: 54px !important;
    line-height: 54px !important;

    margin: 0 !important;
    padding: 0 20px !important;

    border: none !important;
    border-radius: 0 !important;

    box-shadow: none !important;
}


/* Category dropdown itself */
.site-header .categori-search .chosen-container .chosen-drop {
    position: absolute !important;

    top: 100% !important;
    left: 0 !important;

    width: 100% !important;

    margin: 0 !important;

    z-index: 99999999 !important;
}


/* =========================================================
   SEARCH INPUT
   ========================================================= */

.site-header .form-search {
    flex: 1 1 auto !important;

    width: auto !important;
    min-width: 0 !important;

    margin: 0 !important;
    padding: 0 !important;

    position: relative !important;
    z-index: 1000 !important;
}


.site-header .form-search form {
    width: 100% !important;

    margin: 0 !important;
    padding: 0 !important;
}


.site-header .form-search .box-group {
    width: 100% !important;
    height: 54px !important;

    display: flex !important;
    align-items: stretch !important;

    margin: 0 !important;
    padding: 0 !important;

    border: none !important;
    box-shadow: none !important;
}


/* Input */
.site-header .form-search .form-control {
    flex: 1 1 auto !important;

    width: auto !important;
    height: 54px !important;

    margin: 0 !important;

    border: none !important;
    outline: none !important;

    box-shadow: none !important;
}


/* Search button */
.site-header .form-search .btn-search {
    width: 52px !important;
    min-width: 52px !important;
    height: 60px !important;

    margin-top: -3px !important;

    flex-shrink: 0 !important;
}


/* =========================================================
   ADMIN
   ========================================================= */

.site-header .nav-right {
    width: 120px !important;
    min-width: 120px !important;

    margin: 0 !important;
    padding: 0 10px !important;

    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}


/* =========================================================
   REMOVE OLD SEARCH LEFT MARGIN
   ========================================================= */

.site-header .block-search {
    margin-left: 180px !important;
    margin-right: 0 !important;
}


/* =========================================================
   DESKTOP
   ========================================================= */

@media (min-width: 992px) {

    .site-header .header-content .container > .row {
        min-height: 110px !important;
    }

    .site-header .nav-left {
        width: 150px !important;
        min-width: 150px !important;
        padding: 0 !important;
    }

    .site-header .mobi-world-name {
        width: 180px !important;
        min-width: 180px !important;
    }

    .site-header .nav-mind {
        flex: 1 !important;
        padding-left: 10px !important;
        padding-right: 10px !important;
    }

    .site-header .nav-right {
        width: 110px !important;
        min-width: 110px !important;
    }
}


/* =========================================================
   TABLET
   ========================================================= */

@media (min-width: 768px) and (max-width: 991px) {

    .site-header .mobi-world-name {
        width: 150px !important;
        min-width: 150px !important;
    }

    .site-header .categori-search {
        width: 150px !important;
        min-width: 150px !important;
    }

    .site-header .nav-right {
        width: 90px !important;
        min-width: 90px !important;
    }
}


/* =========================================================
   MOBILE
   ========================================================= */

@media (max-width: 767px) {

    .site-header .header-content .container > .row {
        display: flex !important;
        flex-wrap: wrap !important;
        align-items: center !important;
    }


    /* Logo */
    .site-header .nav-left {
        width: auto !important;
        flex: 0 0 auto !important;

        padding: 0 !important;
        margin: 0 !important;
    }


    /* Mobi World */
    .site-header .mobi-world-name {
        flex: 1 1 auto !important;

        width: auto !important;
        min-width: 0 !important;
        max-width: none !important;

        padding: 0 8px !important;
    }


    /* Admin */
    .site-header .nav-right {
        width: auto !important;
        min-width: auto !important;

        padding: 0 5px !important;
        margin: 0 !important;
    }


    /* Search below header */
    .site-header .nav-mind {
        width: 100% !important;
        flex: 0 0 100% !important;

        padding: 10px 0 0 !important;
        margin: 0 !important;
    }


    /* Search row */
    .site-header .block-search .block-content {
        width: 100% !important;
    }


    /* Category */
    .site-header .categori-search {
        width: 125px !important;
        min-width: 125px !important;

        height: 48px !important;
    }


    .site-header .categori-search .chosen-container {
        height: 48px !important;
    }


    .site-header .categori-search .chosen-container .chosen-single {
        height: 48px !important;
        line-height: 48px !important;

        padding: 0 10px !important;
    }


    /* Search */
    .site-header .form-search {
        flex: 1 !important;
        min-width: 0 !important;
    }


    .site-header .form-search .box-group,
    .site-header .form-search .form-control {
        height: 48px !important;
    }


    .site-header .form-search .btn-search {
        width: 48px !important;
        min-width: 48px !important;
        height: 48px !important;
    }
}





/* =========================================================
   MOBI WORLD - MOBILE HEADER / NAVIGATION
   Applies only below 767px
   Paste this block at the VERY END of nav2.css
   ========================================================= */

@media only screen and (max-width: 767px) {

    /* =====================================================
       01. BASIC MOBILE RESET
       ===================================================== */

    html,
    body {
        width: 100% !important;
        max-width: 100% !important;
        overflow-x: hidden !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .site-header.header-opt-1 {
        width: 100% !important;
        position: relative !important;
        z-index: 99999 !important;
        background: #ffffff !important;
    }


    /* =====================================================
       02. HEADER CONTENT
       ===================================================== */

    .site-header .header-content.navbar {
        width: 100% !important;
        height: 155px !important;
        min-height: 155px !important;
        padding: 0 !important;
        margin: 0 !important;
        position: relative !important;
        background: #ffffff !important;
        display: block !important;
    }


    /* Bootstrap container */

    .site-header .header-content .container {
        width: 100% !important;
        max-width: 100% !important;
        padding: 0 12px !important;
        margin: 0 !important;
    }


    /* Bootstrap row */

    .site-header .header-content .container > .row {
        width: 100% !important;
        min-height: 155px !important;
        margin: 0 !important;
        padding: 0 !important;
        position: relative !important;
        display: block !important;
    }


    /* =====================================================
       03. LOGO - LEFT
       ===================================================== */

    .site-header .header-content .nav-left {
        width: auto !important;
        max-width: none !important;
        height: auto !important;

        position: absolute !important;

        left: 10px !important;
        top: 12px !important;

        margin: 0 !important;
        padding: 0 !important;

        float: none !important;

        display: block !important;

        z-index: 100005 !important;
    }


    /* Remove old bootstrap column behaviour */

    .site-header .nav-left.col-md-2 {
        width: auto !important;
        float: none !important;
    }


    /* Logo strong */

    .site-header .nav-left .logo {
        display: block !important;
        width: 72px !important;
        height: auto !important;
        margin: 0 !important;
        padding: 0 !important;
        line-height: 0 !important;
    }


    /* Logo link */

    .site-header .nav-left .logo > a.img_anbu {
        display: block !important;
        width: 72px !important;
        height: auto !important;
        margin: 0 !important;
        padding: 0 !important;
        line-height: 0 !important;
    }


    /* Actual logo image */

    .site-header .nav-left .logo > a.img_anbu img {
        display: block !important;

        width: 72px !important;
        max-width: 72px !important;
        height: auto !important;

        margin: 0 !important;
        padding: 0 !important;

        object-fit: contain !important;
    }


    /* =====================================================
       04. MOBI WORLD - EXACT CENTER
       ===================================================== */

    .site-header .mobi-world-brand {
        position: absolute !important;

        left: 50% !important;
        top: 12px !important;

        transform: translateX(-50%) !important;

        width: max-content !important;
        max-width: 55% !important;

        margin: 0 !important;
        padding: 0 !important;

        text-align: center !important;

        display: block !important;

        z-index: 100004 !important;
    }


    /* MOBI WORLD text */

    .site-header .mobi-world-brand span {
        display: block !important;

        margin: 0 !important;
        padding: 0 !important;

        color: #1e5666 !important;

        font-size: 19px !important;
        font-weight: 800 !important;

        line-height: 24px !important;

        white-space: nowrap !important;

        text-align: center !important;
    }


    /* Smart Life text */

    .site-header .mobi-world-brand p {
        display: block !important;

        margin: 2px 0 0 0 !important;
        padding: 0 !important;

        color: #777777 !important;

        font-size: 8px !important;
        font-weight: 500 !important;

        line-height: 12px !important;

        white-space: nowrap !important;

        text-align: center !important;
    }


    /* Empty old brand block */

    .site-header .mobi-world-name {
        display: none !important;
    }


    /* =====================================================
       05. ADMIN - RIGHT SIDE
       ===================================================== */

    .site-header .header-content .nav-right {
        width: auto !important;
        max-width: none !important;
        height: auto !important;

        position: absolute !important;

        right: 52px !important;
        top: 12px !important;

        margin: 0 !important;
        padding: 0 !important;

        float: none !important;

        display: block !important;

        z-index: 100005 !important;
    }


    .site-header .nav-right.col-md-2 {
        width: auto !important;
        float: none !important;
    }


    /* Remove old minicart layout */

    .site-header .nav-right .block-minicart {
        width: auto !important;

        margin: 0 !important;
        padding: 0 !important;

        display: block !important;
    }


    .site-header .nav-right .minicart {
        display: block !important;

        width: auto !important;

        margin: 0 !important;
        padding: 0 !important;

        color: #111111 !important;

        text-align: center !important;

        text-decoration: none !important;

        box-shadow: none !important;
        background: transparent !important;
    }


    /* Admin icon */

    .site-header .nav-right .admin-login {
        display: block !important;

        width: 24px !important;
        height: 24px !important;

        margin: 0 auto !important;
        padding: 0 !important;

        color: #111111 !important;

        text-decoration: none !important;

        line-height: 0 !important;

        background: transparent !important;
    }


    .site-header .nav-right .admin-login svg {
        display: block !important;

        width: 23px !important;
        height: 23px !important;

        margin: 0 auto !important;

        color: #111111 !important;
        fill: currentColor !important;
    }


    /* Admin text */

    .site-header .nav-right .minicart p {
        display: block !important;

        margin: 2px 0 0 0 !important;
        padding: 0 !important;

        color: #111111 !important;

        font-size: 10px !important;
        font-weight: 600 !important;

        line-height: 14px !important;

        text-align: center !important;
    }


    /* =====================================================
       06. SEARCH AREA
       ===================================================== */

    .site-header .header-content .nav-mind {
        width: auto !important;
        max-width: none !important;

        position: absolute !important;

        left: 12px !important;
        right: 12px !important;
        top: 78px !important;

        margin: 0 !important;
        padding: 0 !important;

        float: none !important;

        display: block !important;

        z-index: 100000 !important;
    }


    .site-header .nav-mind.col-md-8 {
        width: auto !important;
        float: none !important;
    }


    /* Search block */

    .site-header .block-search {
        width: 100% !important;

        height: 46px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: block !important;

        position: relative !important;
    }


    /* Search block content */

    .site-header .block-search .block-content {
        width: 100% !important;
        height: 46px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;

        align-items: stretch !important;

        gap: 0 !important;
    }


    /* =====================================================
       07. CATEGORY DROPDOWN
       ===================================================== */

    .site-header .block-search .categori-search {
        width: 34% !important;
        min-width: 34% !important;
        max-width: 34% !important;

        height: 46px !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        display: block !important;

        z-index: 999999 !important;
    }


    .site-header .categori-search .chosen-container {
        width: 100% !important;
        height: 46px !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        z-index: 999999 !important;
    }


    .site-header .categori-search .chosen-container-single .chosen-single {
        width: 100% !important;
        height: 46px !important;

        margin: 0 !important;
        padding: 0 28px 0 12px !important;

        display: flex !important;

        align-items: center !important;

        border: 1px solid #d9d9d9 !important;

        border-right: 0 !important;

        border-radius: 8px 0 0 8px !important;

        background: #ffffff !important;

        box-shadow: none !important;

        color: #222222 !important;

        font-size: 11px !important;
        font-weight: 500 !important;

        line-height: 46px !important;
    }


    .site-header .categori-search .chosen-container-single
    .chosen-single span {
        margin: 0 !important;
        padding: 0 !important;

        color: #222222 !important;

        font-size: 11px !important;

        overflow: hidden !important;
        white-space: nowrap !important;
        text-overflow: ellipsis !important;
    }


    .site-header .categori-search .chosen-container-single
    .chosen-single div {
        width: 25px !important;
        right: 5px !important;
    }


    .site-header .categori-search .chosen-container-single
    .chosen-single div b {
        background-position: 0 10px !important;
    }


    /* Category dropdown */

    .site-header .categori-search
    .chosen-container .chosen-drop {
        width: 100% !important;

        position: absolute !important;

        top: 100% !important;
        left: 0 !important;

        z-index: 99999999 !important;
    }


    /* =====================================================
       08. SEARCH INPUT
       ===================================================== */

    .site-header .block-search .form-search {
        width: 66% !important;
        min-width: 66% !important;

        height: 46px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: block !important;
    }


    .site-header .block-search .form-search form {
        width: 100% !important;
        height: 46px !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    .site-header .block-search .box-group {
        width: 100% !important;
        height: 46px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;

        align-items: stretch !important;

        position: relative !important;
    }


    .site-header .block-search .box-group .form-control {
        width: calc(100% - 46px) !important;
        height: 46px !important;

        margin: 0 !important;
        padding: 0 12px !important;

        border: 1px solid #d9d9d9 !important;

        border-radius: 0 !important;

        background: #ffffff !important;

        box-shadow: none !important;

        color: #222222 !important;

        font-size: 12px !important;
    }


    .site-header .block-search .box-group .form-control:focus {
        outline: none !important;

        border-color: #39cbd7 !important;

        box-shadow: none !important;
    }


    .site-header .block-search .box-group .form-control::placeholder {
        color: #999999 !important;

        font-size: 11px !important;
    }


    /* Search button */

    .site-header .block-search .box-group .btn-search {
        width: 46px !important;
        min-width: 46px !important;

        height: 46px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        border: 1px solid #1e5666 !important;

        border-radius: 0 8px 8px 0 !important;

        background: #1e5666 !important;

        color: #ffffff !important;

        box-shadow: none !important;
    }


    .site-header .block-search .box-group .btn-search:hover {
        background: #39cbd7 !important;

        border-color: #39cbd7 !important;

        color: #ffffff !important;
    }


    .site-header .block-search .box-group .btn-search span {
        color: #ffffff !important;

        font-size: 15px !important;
    }


    /* Hide extra mobile search icon */

    .site-header .search-hidden {
        display: none !important;
    }


    /* =====================================================
       09. MOBILE MENU BAR
       ===================================================== */

    .site-header .header-menu-bar {
        width: 100% !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        background: #ffffff !important;

        box-shadow: none !important;
    }


    .site-header .header-menu-nav {
        width: 100% !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        background: #ffffff !important;
    }


    .site-header .header-menu-nav > .container {
        width: 100% !important;
        max-width: 100% !important;

        margin: 0 !important;
        padding: 0 10px !important;
    }


    .site-header .header-menu-nav-inner {
        width: 100% !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        display: block !important;
    }


    /* =====================================================
       10. HAMBURGER BUTTON
       ===================================================== */

    .site-header .menu-on-mobile {
        width: 38px !important;
        height: 38px !important;

        position: absolute !important;

        top: -145px !important;
        right: 8px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        background: #1e5666 !important;

        border-radius: 8px !important;

        cursor: pointer !important;

        z-index: 100010 !important;
    }


    /* Hamburger lines */

    .site-header .menu-on-mobile .btn-open-mobile {
        width: 20px !important;
        height: 18px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;

        flex-direction: column !important;

        justify-content: space-between !important;

        align-items: stretch !important;
    }


    .site-header .menu-on-mobile .btn-open-mobile span {
        display: block !important;

        width: 20px !important;
        height: 2px !important;

        margin: 0 !important;
        padding: 0 !important;

        background: #ffffff !important;

        border-radius: 5px !important;
    }


    /* Hide Main menu text */

    .site-header .menu-on-mobile .title-menu-mobile {
        display: none !important;
    }


    /* Hamburger active */

    .site-header .menu-on-mobile.active {
        background: #39cbd7 !important;
    }


    /* =====================================================
       11. ALL DEPARTMENTS
       ===================================================== */

    /*
       Hidden initially.
       When hamburger opens .header-nav.has-open,
       :has() will show All Departments.
    */

    .site-header .header-menu-nav-inner
    .box-vertical-megamenus {
        width: 100% !important;

        display: none !important;

        margin: 0 0 8px 0 !important;
        padding: 0 !important;

        position: relative !important;

        background: #ffffff !important;

        border: 1px solid #e3e3e3 !important;

        border-radius: 10px !important;

        overflow: visible !important;

        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08) !important;

        z-index: 100000 !important;
    }


    /*
       Hamburger clicked:
       .header-nav gets has-open
       Then All Departments becomes visible.
    */

    .site-header .header-menu-nav-inner
    .box-vertical-megamenus:has(+ .header-menu .header-nav.has-open),

    .site-header .header-menu-nav-inner:has(.header-nav.has-open)
    .box-vertical-megamenus {
        display: block !important;
    }


    /* All Departments title */

    .site-header .box-vertical-megamenus > h4.title {
        width: 100% !important;
        min-height: 48px !important;

        margin: 0 !important;
        padding: 0 14px !important;

        display: flex !important;

        align-items: center !important;

        background: #1e5666 !important;

        border-radius: 9px !important;

        color: #ffffff !important;

        cursor: pointer !important;
    }


    .site-header .box-vertical-megamenus > h4.title .title-menu {
        display: block !important;

        margin: 0 !important;
        padding: 0 !important;

        color: #ffffff !important;

        font-size: 14px !important;
        font-weight: 700 !important;

        line-height: 48px !important;
    }


    /* Hide its old hamburger */

    .site-header .box-vertical-megamenus > h4.title
    .btn-open-mobile {
        display: none !important;
    }


    /* =====================================================
       12. ALL DEPARTMENTS CONTENT
       ===================================================== */

    /*
       Initially collapsed.
       Click All Departments title -> existing JS adds .has-open
    */

    .site-header .box-vertical-megamenus
    .vertical-menu-content {
        display: none !important;

        width: 100% !important;

        margin: 0 !important;
        padding: 8px !important;

        position: relative !important;

        background: #ffffff !important;
    }


    .site-header .box-vertical-megamenus.has-open
    .vertical-menu-content {
        display: block !important;
    }


    .site-header .box-vertical-megamenus
    .vertical-menu-list {
        width: 100% !important;

        margin: 0 !important;
        padding: 0 !important;

        list-style: none !important;
    }


    .site-header .box-vertical-megamenus
    .vertical-menu-list > li {
        width: 100% !important;

        margin: 0 !important;
        padding: 0 !important;

        display: block !important;

        border-bottom: 1px solid #eeeeee !important;
    }


    .site-header .box-vertical-megamenus
    .vertical-menu-list > li:last-child {
        border-bottom: 0 !important;
    }


    .site-header .box-vertical-megamenus
    .vertical-menu-list > li > a {
        width: 100% !important;

        min-height: 42px !important;

        margin: 0 !important;
        padding: 10px 12px !important;

        display: flex !important;

        align-items: center !important;

        background: #ffffff !important;

        color: #222222 !important;

        font-size: 12px !important;
        font-weight: 500 !important;

        text-decoration: none !important;

        border-radius: 6px !important;
    }


    .site-header .box-vertical-megamenus
    .vertical-menu-list > li > a:hover {
        background: #39cbd7 !important;

        color: #ffffff !important;
    }


    /* Hide desktop mega menu on mobile */

    .site-header .box-vertical-megamenus
    .vertical-menu-list .submenu {
        display: none !important;
    }


    .site-header .box-vertical-megamenus
    .vertical-menu-list .toggle-submenu {
        display: none !important;
    }


    /* =====================================================
       13. MAIN MENU
       ===================================================== */

    /* Main menu hidden */

    .site-header .header-menu.header-menu-resize
    .header-nav {
        width: 100% !important;

        display: none !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        list-style: none !important;
    }


    /* Main menu visible after hamburger */

    .site-header .header-menu.header-menu-resize
    .header-nav.has-open {
        width: 100% !important;

        display: flex !important;

        flex-direction: column !important;

        align-items: stretch !important;

        justify-content: flex-start !important;

        gap: 5px !important;

        margin: 0 !important;
        padding: 5px !important;

        position: relative !important;

        background: #ffffff !important;

        border: 1px solid #e3e3e3 !important;

        border-radius: 10px !important;

        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08) !important;

        visibility: visible !important;

        opacity: 1 !important;

        transform: none !important;

        height: auto !important;

        max-height: none !important;

        overflow: visible !important;

        z-index: 999999 !important;
    }


    /* =====================================================
       14. MAIN MENU CLOSE BUTTON
       ===================================================== */

    .site-header .header-nav.dagon-nav
    > li.btn-close {
        width: 100% !important;

        min-height: 35px !important;

        margin: 0 0 3px 0 !important;
        padding: 0 8px !important;

        display: flex !important;

        align-items: center !important;
        justify-content: flex-end !important;

        background: transparent !important;

        border: 0 !important;
    }


    .site-header .header-nav.dagon-nav
    > li.btn-close i {
        width: 30px !important;
        height: 30px !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        background: #1e5666 !important;

        border-radius: 50% !important;

        color: #ffffff !important;

        font-size: 13px !important;

        cursor: pointer !important;
    }


    /* =====================================================
       15. MAIN MENU ITEMS
       ===================================================== */

    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) {
        width: 100% !important;

        min-height: 45px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: block !important;

        position: relative !important;

        background: #ffffff !important;

        border: 0 !important;

        list-style: none !important;

        float: none !important;
    }


    /* Main links */

    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a {
        width: 100% !important;

        min-height: 45px !important;

        margin: 0 !important;
        padding: 0 14px !important;

        display: flex !important;

        align-items: center !important;

        gap: 11px !important;

        position: relative !important;

        overflow: hidden !important;

        background: #ffffff !important;

        border: 1px solid #eeeeee !important;

        border-radius: 8px !important;

        color: #111111 !important;

        font-size: 13px !important;
        font-weight: 600 !important;

        line-height: 45px !important;

        text-decoration: none !important;

        box-shadow: none !important;

        z-index: 1 !important;
    }


    /* Remove Bootstrap / theme arrow */

    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a.dropdown-toggle::after {
        display: none !important;

        content: none !important;
    }


    /* Real icons */

    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a > i {
        width: 20px !important;
        min-width: 20px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: inline-flex !important;

        align-items: center !important;
        justify-content: center !important;

        color: #111111 !important;

        font-size: 15px !important;

        line-height: 1 !important;
    }


    /* Menu text */

    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a > span {
        display: block !important;

        margin: 0 !important;
        padding: 0 !important;

        color: #111111 !important;

        font-size: 13px !important;
        font-weight: 600 !important;

        line-height: normal !important;
    }


    /* =====================================================
       16. MAIN MENU HOVER
       ===================================================== */

    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a::before {
        content: "" !important;

        position: absolute !important;

        top: 0 !important;
        left: -100% !important;

        width: 100% !important;
        height: 100% !important;

        background: linear-gradient(
            90deg,
            #111111 0%,
            #39cbd7 50%,
            #111111 100%
        ) !important;

        transition: left 0.35s ease !important;

        z-index: -1 !important;
    }


    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a:hover::before {
        left: 0 !important;
    }


    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a:hover {
        color: #ffffff !important;

        border-color: #39cbd7 !important;

        background: transparent !important;
    }


    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a:hover > i,
    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a:hover > span {
        color: #ffffff !important;
    }


    /* =====================================================
       17. HIDE SUBMENU TOGGLE ICONS
       ===================================================== */

    .site-header .header-nav.dagon-nav
    > li > .toggle-submenu {
        display: none !important;
    }


    /* =====================================================
       18. MOBILE MENU OPEN STATE
       ===================================================== */

    /*
       Existing JavaScript already does:

       .header-nav -> .has-open

       So NO NEW JavaScript is required.
    */

    .site-header .header-menu.header-menu-resize
    .header-nav.has-open {
        visibility: visible !important;
        opacity: 1 !important;
        transform: none !important;
    }


    /* =====================================================
       19. KEEP EVERYTHING INSIDE SCREEN
       ===================================================== */

    .site-header *,
    .site-header *::before,
    .site-header *::after {
        box-sizing: border-box !important;
    }


    /* =====================================================
       20. SMALL MOBILE - 480px
       ===================================================== */

    @media only screen and (max-width: 480px) {

        .site-header .header-content.navbar {
            height: 155px !important;
            min-height: 155px !important;
        }


        .site-header .header-content .container > .row {
            min-height: 155px !important;
        }


        .site-header .nav-left {
            left: 8px !important;
            top: 12px !important;
        }


        .site-header .nav-left .logo,
        .site-header .nav-left .logo > a.img_anbu {
            width: 66px !important;
        }


        .site-header .nav-left .logo > a.img_anbu img {
            width: 66px !important;
            max-width: 66px !important;
        }


        .site-header .mobi-world-brand {
            top: 13px !important;

            max-width: 52% !important;
        }


        .site-header .mobi-world-brand span {
            font-size: 17px !important;
            line-height: 22px !important;
        }


        .site-header .mobi-world-brand p {
            font-size: 7px !important;
            line-height: 10px !important;
        }


        .site-header .nav-right {
            right: 50px !important;
            top: 12px !important;
        }


        .site-header .menu-on-mobile {
            right: 7px !important;
            top: -145px !important;

            width: 36px !important;
            height: 36px !important;
        }


        .site-header .nav-mind {
            left: 8px !important;
            right: 8px !important;
            top: 78px !important;
        }


        .site-header .block-search .categori-search {
            width: 35% !important;
            min-width: 35% !important;
            max-width: 35% !important;
        }


        .site-header .block-search .form-search {
            width: 65% !important;
            min-width: 65% !important;
        }


        .site-header .block-search .form-control {
            font-size: 11px !important;
        }


        .site-header .block-search .form-control::placeholder {
            font-size: 10px !important;
        }


        .site-header .categori-search
        .chosen-container-single .chosen-single {
            padding-left: 9px !important;
            padding-right: 22px !important;
        }


        .site-header .categori-search
        .chosen-container-single .chosen-single span {
            font-size: 9px !important;
        }


        .site-header .header-menu-nav > .container {
            padding-left: 8px !important;
            padding-right: 8px !important;
        }
    }


    /* =====================================================
       21. VERY SMALL MOBILE - 360px
       ===================================================== */

    @media only screen and (max-width: 360px) {

        .site-header .nav-left .logo,
        .site-header .nav-left .logo > a.img_anbu,
        .site-header .nav-left .logo > a.img_anbu img {
            width: 58px !important;
            max-width: 58px !important;
        }


        .site-header .mobi-world-brand span {
            font-size: 15px !important;
        }


        .site-header .mobi-world-brand p {
            font-size: 6px !important;
        }


        .site-header .nav-right {
            right: 46px !important;
        }


        .site-header .nav-right .admin-login svg {
            width: 20px !important;
            height: 20px !important;
        }


        .site-header .nav-right .minicart p {
            font-size: 8px !important;
        }


        .site-header .menu-on-mobile {
            width: 34px !important;
            height: 34px !important;
        }


        .site-header .block-search .categori-search {
            width: 37% !important;
            min-width: 37% !important;
            max-width: 37% !important;
        }


        .site-header .block-search .form-search {
            width: 63% !important;
            min-width: 63% !important;
        }
    }

}


/* ==========================================================
   MOBI WORLD - FINAL MOBILE HEADER FIX
   ONLY MOBILE VIEW
   ========================================================== */

@media only screen and (max-width: 767px) {

    /* ------------------------------------------------------
       BASIC
       ------------------------------------------------------ */

    html,
    body {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        overflow-x: hidden !important;
    }

    .site-header {
        width: 100% !important;
        position: relative !important;
        z-index: 99999 !important;
        background: #ffffff !important;
    }


    /* ======================================================
       HEADER TOP AREA
       ====================================================== */

    .site-header .header-content.navbar {
        width: 100% !important;
        height: 145px !important;
        min-height: 145px !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        background: #ffffff !important;
    }


    .site-header .header-content > .container {
        width: 100% !important;
        max-width: 100% !important;

        margin: 0 !important;
        padding: 0 10px !important;
    }


    .site-header .header-content .row {
        width: 100% !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        display: block !important;
    }


    /* ======================================================
       LOGO - LEFT
       ====================================================== */

    .site-header .nav-left {
        width: auto !important;
        height: auto !important;

        position: absolute !important;

        left: 10px !important;
        top: 12px !important;

        margin: 0 !important;
        padding: 0 !important;

        float: none !important;

        display: block !important;

        z-index: 100001 !important;
    }


    .site-header .nav-left .logo {
        width: 62px !important;
        height: auto !important;

        display: block !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    .site-header .nav-left .logo a.img_anbu {
        width: 62px !important;

        display: block !important;

        margin: 0 !important;
        padding: 0 !important;

        line-height: 0 !important;
    }


    .site-header .nav-left .logo img {
        width: 62px !important;
        max-width: 62px !important;
        height: auto !important;

        display: block !important;

        margin: 0 !important;
        padding: 0 !important;

        object-fit: contain !important;
    }


    /* ======================================================
       MOBI WORLD - CENTER
       ====================================================== */

    .site-header .mobi-world-brand {
        position: absolute !important;

        left: 50% !important;
        top: 12px !important;

        transform: translateX(-50%) !important;

        width: max-content !important;
        max-width: 50% !important;

        margin: 0 !important;
        padding: 0 !important;

        display: block !important;

        text-align: center !important;

        z-index: 100002 !important;
    }


    .site-header .mobi-world-brand span {
        display: block !important;

        margin: 0 !important;
        padding: 0 !important;

        color: #1e5666 !important;

        font-size: 17px !important;
        font-weight: 800 !important;

        line-height: 22px !important;

        white-space: nowrap !important;

        text-align: center !important;
    }


    .site-header .mobi-world-brand p {
        display: block !important;

        margin: 1px 0 0 0 !important;
        padding: 0 !important;

        color: #777777 !important;

        font-size: 7px !important;
        font-weight: 500 !important;

        line-height: 10px !important;

        white-space: nowrap !important;

        text-align: center !important;
    }


    /* Remove empty old brand */

    .site-header .mobi-world-name {
        display: none !important;
    }


    /* ======================================================
       ADMIN - RIGHT
       ====================================================== */

    .site-header .nav-right {
        width: auto !important;

        position: absolute !important;

        right: 55px !important;
        top: 11px !important;

        margin: 0 !important;
        padding: 0 !important;

        float: none !important;

        display: block !important;

        z-index: 100003 !important;
    }


    .site-header .nav-right .block-minicart {
        width: auto !important;

        margin: 0 !important;
        padding: 0 !important;

        display: block !important;
    }


    .site-header .nav-right .minicart {
        display: block !important;

        width: auto !important;

        margin: 0 !important;
        padding: 0 !important;

        background: transparent !important;

        box-shadow: none !important;

        text-decoration: none !important;
    }


    .site-header .nav-right .admin-login {
        width: 24px !important;
        height: 24px !important;

        display: block !important;

        margin: 0 auto !important;
        padding: 0 !important;

        color: #111111 !important;

        line-height: 0 !important;
    }


    .site-header .nav-right .admin-login svg {
        width: 23px !important;
        height: 23px !important;

        display: block !important;

        color: #111111 !important;
    }


    .site-header .nav-right p {
        display: block !important;

        margin: 2px 0 0 0 !important;
        padding: 0 !important;

        color: #111111 !important;

        font-size: 9px !important;
        font-weight: 600 !important;

        line-height: 12px !important;

        text-align: center !important;
    }


    /* ======================================================
       SEARCH
       ====================================================== */

    .site-header .nav-mind {
        width: auto !important;

        position: absolute !important;

        left: 10px !important;
        right: 10px !important;
        top: 72px !important;

        margin: 0 !important;
        padding: 0 !important;

        float: none !important;

        display: block !important;

        z-index: 100000 !important;
    }


    .site-header .block-search {
        width: 100% !important;

        height: 44px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: block !important;
    }


    .site-header .block-search .block-content {
        width: 100% !important;
        height: 44px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;

        gap: 0 !important;
    }


    /* CATEGORY */

    .site-header .block-search .categori-search {
        width: 34% !important;
        min-width: 34% !important;
        max-width: 34% !important;

        height: 44px !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        z-index: 999999 !important;
    }


    .site-header .categori-search .chosen-container {
        width: 100% !important;
        height: 44px !important;

        position: relative !important;

        z-index: 999999 !important;
    }


    .site-header .categori-search
    .chosen-container-single
    .chosen-single {
        width: 100% !important;
        height: 44px !important;

        margin: 0 !important;
        padding: 0 20px 0 10px !important;

        display: flex !important;
        align-items: center !important;

        border: 1px solid #dddddd !important;
        border-right: 0 !important;

        border-radius: 7px 0 0 7px !important;

        background: #ffffff !important;

        box-shadow: none !important;

        color: #222222 !important;
    }


    .site-header .categori-search
    .chosen-container-single
    .chosen-single span {
        font-size: 9px !important;

        color: #222222 !important;

        overflow: hidden !important;
        white-space: nowrap !important;
        text-overflow: ellipsis !important;
    }


    /* SEARCH FORM */

    .site-header .block-search .form-search {
        width: 66% !important;
        min-width: 66% !important;

        height: 44px !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    .site-header .block-search .form-search form {
        width: 100% !important;
        height: 44px !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    .site-header .block-search .box-group {
        width: 100% !important;
        height: 44px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;
    }


    .site-header .block-search
    .box-group .form-control {
        width: calc(100% - 44px) !important;
        height: 44px !important;

        margin: 0 !important;
        padding: 0 10px !important;

        border: 1px solid #dddddd !important;

        border-radius: 0 !important;

        background: #ffffff !important;

        box-shadow: none !important;

        font-size: 11px !important;

        color: #222222 !important;
    }


    .site-header .block-search
    .box-group .form-control::placeholder {
        font-size: 9px !important;
        color: #999999 !important;
    }


    .site-header .block-search
    .box-group .btn-search {
        width: 44px !important;
        min-width: 44px !important;

        height: 44px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        border: 0 !important;

        border-radius: 0 7px 7px 0 !important;

        background: #39cbd7 !important;

        color: #ffffff !important;
    }


    .site-header .block-search
    .box-group .btn-search span {
        color: #ffffff !important;
        font-size: 14px !important;
    }


    /* ======================================================
       HAMBURGER
       ====================================================== */

    /*
       IMPORTANT:
       Old theme can hide .menu-on-mobile.
       So we force it visible.
    */

    .site-header .menu-on-mobile {
        display: flex !important;

        width: 36px !important;
        height: 36px !important;

        position: fixed !important;

        top: 10px !important;
        right: 8px !important;

        margin: 0 !important;
        padding: 0 !important;

        align-items: center !important;
        justify-content: center !important;

        background: #1e5666 !important;

        border-radius: 7px !important;

        cursor: pointer !important;

        visibility: visible !important;
        opacity: 1 !important;

        z-index: 99999999 !important;
    }


    .site-header .menu-on-mobile .btn-open-mobile {
        width: 20px !important;
        height: 17px !important;

        display: flex !important;

        flex-direction: column !important;

        justify-content: space-between !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    .site-header .menu-on-mobile
    .btn-open-mobile span {
        width: 20px !important;
        height: 2px !important;

        display: block !important;

        margin: 0 !important;
        padding: 0 !important;

        background: #39cbd7 !important;

        border-radius: 5px !important;
    }


    .site-header .title-menu-mobile {
        display: none !important;
    }


    /* ======================================================
       MOBILE MENU
       ====================================================== */

    .site-header .header-menu-bar {
        width: 100% !important;

        height: auto !important;
        min-height: 0 !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        background: #39cbd7 !important;

        overflow: visible !important;
    }


    .site-header .header-menu-nav {
        width: 100% !important;

        height: auto !important;
        min-height: 0 !important;

        margin: 0 !important;
        padding: 0 !important;

        background: #39cbd7 !important;

        overflow: visible !important;
    }


    .site-header .header-menu-nav > .container {
        width: 100% !important;
        max-width: 100% !important;

        margin: 0 !important;
        padding: 0 8px !important;
    }


    .site-header .header-menu-nav-inner {
        width: 100% !important;

        height: auto !important;
        min-height: 0 !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        overflow: visible !important;
    }


    /* ======================================================
       HIDE ALL DEPARTMENTS INITIALLY
       ====================================================== */

    .site-header #box-vertical-megamenus {
        display: none !important;

        width: 100% !important;

        margin: 0 0 7px 0 !important;
        padding: 0 !important;

        position: relative !important;

        background: #39cbd7 !important;

        border: 1px solid #dddddd !important;

        border-radius: 8px !important;

        overflow: visible !important;
    }


    /*
       When hamburger opens:
       .header-nav gets .has-open

       Then :has() shows All Departments.
    */

    .site-header .header-menu-nav-inner:has(.header-nav.has-open)
    #box-vertical-megamenus {
        display: block !important;
    }


    /* ======================================================
       ALL DEPARTMENTS TITLE
       ====================================================== */

    .site-header #box-vertical-megamenus > h4.title {
        width: 100% !important;
        height: 44px !important;

        margin: 0 !important;
        padding: 0 13px !important;

        display: flex !important;

        align-items: center !important;

        background: #1e5666 !important;

        border-radius: 7px !important;

        color: #ffffff !important;
    }


    .site-header #box-vertical-megamenus
    .title-menu {
        display: block !important;

        color: #ffffff !important;

        font-size: 13px !important;
        font-weight: 700 !important;

        line-height: 44px !important;
    }


    .site-header #box-vertical-megamenus
    .title .btn-open-mobile {
        display: none !important;
    }


    /* ======================================================
       ALL DEPARTMENTS LIST
       ====================================================== */

    .site-header #box-vertical-megamenus
    .vertical-menu-content {
        display: none !important;

        width: 100% !important;

        margin: 0 !important;
        padding: 7px !important;

        background: #39cbd7 !important;
    }


    .site-header #box-vertical-megamenus.has-open
    .vertical-menu-content {
        display: block !important;
    }


    .site-header #box-vertical-megamenus
    .vertical-menu-list {
        width: 100% !important;

        margin: 0 !important;
        padding: 0 !important;

        list-style: none !important;
    }


    .site-header #box-vertical-megamenus
    .vertical-menu-list > li {
        width: 100% !important;

        margin: 0 !important;
        padding: 0 !important;

        border-bottom: 1px solid #eeeeee !important;
    }


    .site-header #box-vertical-megamenus
    .vertical-menu-list > li > a {
        width: 100% !important;

        min-height: 40px !important;

        display: flex !important;
        align-items: center !important;

        padding: 9px 10px !important;

        color: #222222 !important;

        background: #39cbd7 !important;

        font-size: 11px !important;

        text-decoration: none !important;
    }


    /* Hide desktop mega menus on mobile */

    .site-header #box-vertical-megamenus
    .submenu {
        display: none !important;
    }


    .site-header #box-vertical-megamenus
    .toggle-submenu {
        display: none !important;
    }


    /* ======================================================
       MAIN MENU
       ====================================================== */

    .site-header .header-menu-resize .header-nav {
        display: none !important;

        width: 100% !important;

        margin: 0 !important;
        padding: 0 !important;

        list-style: none !important;
    }


    .site-header .header-menu-resize
    .header-nav.has-open {
        width: 100% !important;

        display: flex !important;

        flex-direction: column !important;

        gap: 5px !important;

        margin: 0 !important;
        padding: 5px !important;

        background: #39cbd7 !important;

        border: 1px solid #dddddd !important;

        border-radius: 8px !important;

        position: relative !important;

        z-index: 999999 !important;

        opacity: 1 !important;
        visibility: visible !important;

        transform: none !important;

        height: auto !important;
        max-height: none !important;

        overflow: visible !important;
    }


    /* ======================================================
       CLOSE BUTTON
       ====================================================== */

    .site-header .header-nav
    > li.btn-close {
        width: 100% !important;
        height: 32px !important;

        display: flex !important;

        justify-content: flex-end !important;
        align-items: center !important;

        margin: 0 !important;
        padding: 0 5px !important;

        background: transparent !important;
    }


    .site-header .header-nav
    > li.btn-close i {
        width: 27px !important;
        height: 27px !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        border-radius: 50% !important;

        background: #1e5666 !important;

        color: #ffffff !important;

        font-size: 11px !important;
    }


    /* ======================================================
       MAIN MENU ITEMS
       ====================================================== */

    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) {
        width: 100% !important;

        min-height: 43px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: block !important;

        float: none !important;
    }


    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a {
        width: 100% !important;
        min-height: 43px !important;

        margin: 0 !important;
        padding: 0 12px !important;

        display: flex !important;

        align-items: center !important;

        gap: 10px !important;

        background: #39cbd7 !important;

        border: 1px solid #eeeeee !important;

        border-radius: 7px !important;

        color: #111111 !important;

        font-size: 12px !important;
        font-weight: 600 !important;

        text-decoration: none !important;

        position: relative !important;

        overflow: hidden !important;
    }


    /* Real icons */

    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a > i {
        width: 18px !important;
        min-width: 18px !important;

        display: inline-flex !important;

        align-items: center !important;
        justify-content: center !important;

        color: #111111 !important;

        font-size: 14px !important;
    }


    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a > span {
        color: #111111 !important;

        font-size: 12px !important;
    }


    /* Remove theme arrow */

    .site-header .header-nav.dagon-nav
    .toggle-submenu {
        display: none !important;
    }


    .site-header .header-nav.dagon-nav
    > li > a.dropdown-toggle::after {
        display: none !important;
    }


    /* ======================================================
       HOVER
       ====================================================== */

    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a:hover {
        background: #39cbd7 !important;

        border-color: #39cbd7 !important;

        color: #ffffff !important;
    }


    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a:hover i,
    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a:hover span {
        color: #ffffff !important;
    }


    /* ======================================================
       REMOVE EXTRA SPACE AFTER HEADER
       ====================================================== */

    .site-header + * {
        margin-top: 0 !important;
    }


    /* ======================================================
       SMALL SCREEN
       ====================================================== */

    @media only screen and (max-width: 480px) {

        .site-header .header-content.navbar {
            height: 140px !important;
            min-height: 140px !important;
        }


        .site-header .nav-left {
            left: 8px !important;
            top: 10px !important;
        }


        .site-header .nav-left .logo,
        .site-header .nav-left .logo a.img_anbu,
        .site-header .nav-left .logo img {
            width: 58px !important;
            max-width: 58px !important;
        }


        .site-header .mobi-world-brand {
            top: 10px !important;
        }


        .site-header .mobi-world-brand span {
            font-size: 15px !important;
        }


        .site-header .mobi-world-brand p {
            font-size: 6px !important;
        }


        .site-header .nav-right {
            right: 51px !important;
            top: 10px !important;
        }


        .site-header .nav-mind {
            top: 68px !important;
            left: 8px !important;
            right: 8px !important;
        }


        .site-header .menu-on-mobile {
            top: 8px !important;
            right: 7px !important;

            width: 34px !important;
            height: 34px !important;
        }


        .site-header .block-search
        .categori-search {
            width: 36% !important;
            min-width: 36% !important;
            max-width: 36% !important;
        }


        .site-header .block-search
        .form-search {
            width: 64% !important;
            min-width: 64% !important;
        }
    }

}

/* ==========================================================
   MOBI WORLD FINAL MOBILE HEADER
   DARK TEAL + CYAN + WHITE
   ========================================================== */

@media only screen and (max-width: 767px) {

    /* BASIC */
    html,
    body {
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        overflow-x: hidden !important;
    }

    .site-header {
        width: 100% !important;
         background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
        position: relative !important;
        z-index: 999999 !important;
    }


    /* HEADER TOP */
    .site-header .header-content.navbar {
        height: 145px !important;
        min-height: 145px !important;
        padding: 0 !important;
        margin: 0 !important;
        background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
        position: relative !important;
    }

    .site-header .header-content > .container,
    .site-header .header-content .row {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        position: relative !important;
    }


    /* LOGO LEFT */
    .site-header .nav-left {
        position: absolute !important;
        top: 10px !important;
        left: 10px !important;

        width: 65px !important;
        margin: 0 !important;
        padding: 0 !important;

        display: block !important;
        z-index: 1000000 !important;
    }

    .site-header .nav-left .logo {
        width: 65px !important;
        margin: 0 !important;
        padding: 0 !important;
        display: block !important;
    }

    .site-header .nav-left .logo a {
        display: block !important;
        width: 65px !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .site-header .nav-left .logo img {
        width: 65px !important;
        max-width: 65px !important;
        height: auto !important;
        display: block !important;
    }


    /* MOBI WORLD CENTER */
    .site-header .mobi-world-brand {
        position: fixed !important;

        top: 12px !important;
        left: 50% !important;

        transform: translateX(-50%) !important;

        width: max-content !important;
        max-width: 60% !important;

        margin: 0 !important;
        padding: 0 !important;

        text-align: center !important;
        display: block !important;

        z-index: 1000001 !important;
    }

    .site-header .mobi-world-brand span {
        display: block !important;

        color: #1e5666 !important;

        font-size: 17px !important;
        font-weight: 800 !important;
        line-height: 22px !important;

        white-space: nowrap !important;
        text-align: center !important;
    }

    .site-header .mobi-world-brand p {
        display: block !important;

        color: #39cbd7 !important;

        font-size: 8px !important;
        font-weight: 600 !important;
        line-height: 12px !important;

        margin: 0 !important;
        padding: 0 !important;

        white-space: nowrap !important;
        text-align: center !important;
    }

    .site-header .mobi-world-name {
        display: none !important;
    }


    /* ADMIN RIGHT */
    .site-header .nav-right {
        position: absolute !important;

        top: 10px !important;
        right: 53px !important;

        width: auto !important;
        margin: 0 !important;
        padding: 0 !important;

        display: block !important;
        z-index: 1000002 !important;
    }

    .site-header .nav-right .block-minicart,
    .site-header .nav-right .minicart {
        margin: 0 !important;
        padding: 0 !important;
        background: transparent !important;
        box-shadow: none !important;
    }

    .site-header .admin-login {
        display: block !important;
        width: 25px !important;
        height: 25px !important;
        margin: 0 auto !important;
        padding: 0 !important;
        color: #1e5666 !important;
    }

    .site-header .admin-login svg {
        width: 25px !important;
        height: 25px !important;
        color: #1e5666 !important;
        fill: #1e5666 !important;
    }

    .site-header .nav-right p {
        color: #1e5666 !important;
        font-size: 9px !important;
        font-weight: 700 !important;
        text-align: center !important;

        margin: 2px 0 0 0 !important;
        padding: 0 !important;
    }


    /* SEARCH BELOW HEADER */
    .site-header .nav-mind {
        position: absolute !important;

        top: 72px !important;
        left: 10px !important;
        right: 10px !important;

        width: auto !important;
        margin: 0 !important;
        padding: 0 !important;

        display: block !important;
        z-index: 100000 !important;
    }

    .site-header .block-search,
    .site-header .block-search .block-content {
        width: 100% !important;
        height: 44px !important;

        margin: 0 !important;
        padding: 0 !important;

        background: #ffffff !important;
    }

    .site-header .block-search .block-content {
        display: flex !important;
        gap: 0 !important;
    }


    /* CATEGORY */
    .site-header .categori-search {
        width: 35% !important;
        min-width: 35% !important;
        max-width: 35% !important;

        height: 44px !important;
        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;
        z-index: 9999999 !important;
    }

    .site-header .categori-search .chosen-container {
        width: 100% !important;
        height: 44px !important;
    }

    .site-header .chosen-container-single .chosen-single {
        width: 100% !important;
        height: 44px !important;

        display: flex !important;
        align-items: center !important;

        padding: 0 8px !important;
        margin: 0 !important;

        background: #ffffff !important;
        border: 2px solid #1e5666 !important;
        border-right: 0 !important;

        border-radius: 7px 0 0 7px !important;
        box-shadow: none !important;

        color: #1e5666 !important;
    }

    .site-header .chosen-container-single
    .chosen-single span {
        color: #1e5666 !important;
        font-size: 9px !important;
        white-space: nowrap !important;
    }


    /* SEARCH INPUT */
    .site-header .form-search {
        width: 65% !important;
        min-width: 65% !important;
        height: 44px !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .site-header .form-search form,
    .site-header .box-group {
        width: 100% !important;
        height: 44px !important;
        margin: 0 !important;
        padding: 0 !important;
        display: flex !important;
    }

    .site-header .box-group .form-control {
        width: calc(100% - 43px) !important;
        height: 44px !important;

        margin: 0 !important;
        padding: 0 9px !important;

         background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
        border: 2px solid #1e5666 !important;
        border-right: 0 !important;
        border-radius: 0 !important;

        color: #1e5666 !important;
        font-size: 10px !important;
    }

    .site-header .box-group .form-control::placeholder {
        color: #39cbd7 !important;
        font-size: 9px !important;
    }

    .site-header .box-group .btn-search {
        width: 43px !important;
        min-width: 43px !important;
        height: 44px !important;

        display: flex !important;
        align-items: center !important;
        justify-content: center !important;

        margin: 0 !important;
        padding: 0 !important;

        background: #1e5666 !important;
        border: 2px solid #1e5666 !important;
        border-radius: 0 7px 7px 0 !important;

        color: #ffffff !important;
    }

    .site-header .box-group .btn-search span {
        color: #ffffff !important;
        font-size: 15px !important;
    }

    .site-header .box-group .btn-search:hover {
        background: #39cbd7 !important;
        border-color: #39cbd7 !important;
    }


    /* HAMBURGER TOP RIGHT */
    .site-header .menu-on-mobile {
        display: flex !important;

        position: fixed !important;

        top: 8px !important;
        right: 8px !important;

        width: 36px !important;
        height: 36px !important;

        align-items: center !important;
        justify-content: center !important;
  background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
        border: 2px solid #39cbd7 !important;
        border-radius: 7px !important;

        visibility: visible !important;
        opacity: 1 !important;
        cursor: pointer !important;

        z-index: 99999999 !important;
    }

    .site-header .menu-on-mobile .btn-open-mobile {
        width: 21px !important;
        height: 18px !important;

        display: flex !important;
        flex-direction: column !important;
        justify-content: space-between !important;
    }

    .site-header .menu-on-mobile
    .btn-open-mobile span {
        display: block !important;

        width: 21px !important;
        height: 3px !important;

         background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
        border-radius: 5px !important;
    }

    .site-header .title-menu-mobile {
        display: none !important;
    }


    /* MENU AREA */
    .site-header .header-menu-bar,
    .site-header .header-menu-nav,
    .site-header .header-menu-nav-inner {
        width: 100% !important;
        height: auto !important;
        min-height: 0 !important;

        margin: 0 !important;
        padding: 0 !important;

        background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
        position: relative !important;
        overflow: visible !important;
    }

    .site-header .header-menu-nav > .container {
        width: 100% !important;
        max-width: 100% !important;
        padding: 0 8px !important;
        margin: 0 !important;
    }


    /* ALL DEPARTMENTS HIDDEN INITIALLY */
    .site-header #box-vertical-megamenus {
        display: none !important;

        width: 100% !important;
        margin: 0 0 7px 0 !important;
        padding: 0 !important;

        background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
        border: 2px solid #39cbd7 !important;
        border-radius: 8px !important;
    }

    /* HAMBURGER CLICK AFTER MENU OPEN */
    .site-header .header-menu-nav-inner:has(.header-nav.has-open)
    #box-vertical-megamenus {
        display: block !important;
    }


    /* ALL DEPARTMENTS TITLE */
    .site-header #box-vertical-megamenus > h4.title {
        height: 44px !important;
        width: 100% !important;

        display: flex !important;
        align-items: center !important;

        margin: 0 !important;
        padding: 0 12px !important;

        background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
        color: #ffffff !important;

        border-radius: 6px !important;
    }

    .site-header #box-vertical-megamenus .title-menu {
        color: #ffffff !important;
        font-size: 13px !important;
        font-weight: 700 !important;
    }

    .site-header #box-vertical-megamenus
    .title .btn-open-mobile {
        display: none !important;
    }


    /* ALL DEPARTMENTS ITEMS */
    .site-header #box-vertical-megamenus
    .vertical-menu-content {
        display: none !important;
        background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
        padding: 6px !important;
    }

    .site-header #box-vertical-megamenus.has-open
    .vertical-menu-content {
        display: block !important;
    }

    .site-header #box-vertical-megamenus
    .vertical-menu-list {
        margin: 0 !important;
        padding: 0 !important;
        list-style: none !important;
    }

    .site-header #box-vertical-megamenus
    .vertical-menu-list > li {
        width: 100% !important;
        border-bottom: 1px solid #39cbd7 !important;
    }

    .site-header #box-vertical-megamenus
    .vertical-menu-list > li > a {
        display: block !important;

        width: 100% !important;
        min-height: 38px !important;

        padding: 10px !important;

        background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
        color: #ffffff !important;

        font-size: 11px !important;
        text-decoration: none !important;
    }

    .site-header #box-vertical-megamenus
    .vertical-menu-list > li > a:hover {
        background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
        color: #ffffff !important;
    }

    .site-header #box-vertical-megamenus .submenu,
    .site-header #box-vertical-megamenus .toggle-submenu {
        display: none !important;
    }


    /* MAIN MENU HIDDEN */
    .site-header .header-menu-resize .header-nav {
        display: none !important;

        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;

        list-style: none !important;
    }


    /* MAIN MENU SHOW AFTER HAMBURGER CLICK */
    .site-header .header-menu-resize
    .header-nav.has-open {
        display: flex !important;

        flex-direction: column !important;
        gap: 5px !important;

        width: 100% !important;

        margin: 0 !important;
        padding: 6px !important;

        background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
        border: 2px solid #39cbd7 !important;
        border-radius: 8px !important;

        position: relative !important;
        z-index: 999999 !important;
    }


    /* CLOSE BUTTON */
    .site-header .header-nav > li.btn-close {
        display: flex !important;

        width: 100% !important;
        height: 32px !important;

        justify-content: flex-end !important;
        align-items: center !important;
    }

    .site-header .header-nav > li.btn-close i {
        width: 26px !important;
        height: 26px !important;

        display: flex !important;
        align-items: center !important;
        justify-content: center !important;

        background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
        color: #ffffff !important;

        border-radius: 50% !important;
    }


    /* HOME / ABOUT / PRODUCT / BLOG / CONTACT */
    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) {
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a {
        width: 100% !important;
        min-height: 43px !important;

        display: flex !important;
        align-items: center !important;
        gap: 10px !important;

        padding: 0 12px !important;

        background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
        border: 2px solid #39cbd7 !important;
        border-radius: 7px !important;

        color: #ffffff !important;

        font-size: 12px !important;
        font-weight: 700 !important;

        text-decoration: none !important;
    }

    /* REAL ICONS */
    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a > i {
        color: #ffffff !important;
        font-size: 15px !important;
    }

    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a > span {
        color: #ffffff !important;
    }

    /* HOVER */
    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a:hover {
        background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
        border-color: #39cbd7 !important;
        color: #ffffff !important;
    }

    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a:hover i,
    .site-header .header-nav.dagon-nav
    > li:not(.btn-close) > a:hover span {
        color: #ffffff !important;
    }

    .site-header .header-nav .toggle-submenu,
    .site-header .header-nav a.dropdown-toggle::after {
        display: none !important;
    }

}




/* =========================================================
   MOBI WORLD MOBILE MAIN MENU
   HAMBURGER -> HOME / ABOUT / PRODUCT / BLOG / CONTACT
   ========================================================= */

@media only screen and (max-width: 767px) {

    /* -----------------------------------------------------
       ALL DEPARTMENTS - COMPLETELY HIDE
       ----------------------------------------------------- */

    .site-header #box-vertical-megamenus {
        display: none !important;
        visibility: hidden !important;
        height: 0 !important;
        overflow: hidden !important;
    }


    /* -----------------------------------------------------
       MAIN MENU CONTAINER
       ----------------------------------------------------- */

    .site-header .header-menu.header-menu-resize {
        width: 100% !important;

        display: block !important;

        position: relative !important;

        margin: 0 !important;
        padding: 0 !important;

        background: #ffffff !important;

        visibility: visible !important;
        opacity: 1 !important;
    }


    /* -----------------------------------------------------
       MAIN MENU DEFAULT HIDDEN
       ----------------------------------------------------- */

    .site-header .header-menu.header-menu-resize
    .header-nav.dagon-nav {
        display: none !important;

        visibility: hidden !important;
        opacity: 0 !important;

        width: 100% !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    /* =====================================================
       HAMBURGER CLICK
       .has-open IS ADDED BY YOUR EXISTING JAVASCRIPT
       ===================================================== */

    .site-header .header-menu.header-menu-resize
    .header-nav.dagon-nav.has-open {

        display: flex !important;

        visibility: visible !important;
        opacity: 1 !important;

        flex-direction: column !important;

        width: 100% !important;

        margin: 0 !important;
        padding: 8px !important;

        gap: 7px !important;

        background: #ffffff !important;

        border: 2px solid #1e5666 !important;

        border-radius: 10px !important;

        position: relative !important;

        z-index: 99999999 !important;
    }


    /* -----------------------------------------------------
       CLOSE BUTTON
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav
    > li.btn-close {

        display: flex !important;

        width: 100% !important;
        height: 32px !important;

        align-items: center !important;
        justify-content: flex-end !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    .site-header .header-nav.dagon-nav
    > li.btn-close i {

        width: 28px !important;
        height: 28px !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        background: #1e5666 !important;

        color: #ffffff !important;

        border-radius: 50% !important;

        font-size: 13px !important;
    }


    /* =====================================================
       HOME / ABOUT / PRODUCT / BLOG / CONTACT
       ===================================================== */

    .site-header .header-nav.dagon-nav
    > li.menu-item-has-children {

        display: block !important;

        width: 100% !important;

        margin: 0 !important;
        padding: 0 !important;

        visibility: visible !important;
        opacity: 1 !important;
    }


    /* -----------------------------------------------------
       MENU LINK
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav
    > li.menu-item-has-children
    > a.dropdown-toggle {

        width: 100% !important;
        min-height: 46px !important;

        display: flex !important;

        align-items: center !important;

        gap: 12px !important;

        padding: 0 14px !important;

        background: #ffffff !important;

        border: 2px solid #1e5666 !important;

        border-radius: 8px !important;

        color: #1e5666 !important;

        font-size: 13px !important;

        font-weight: 700 !important;

        text-decoration: none !important;

        visibility: visible !important;
        opacity: 1 !important;
    }


    /* -----------------------------------------------------
       ICON
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav
    > li.menu-item-has-children
    > a.dropdown-toggle
    > i {

        display: inline-block !important;

        color: #1e5666 !important;

        font-size: 17px !important;

        width: 22px !important;

        text-align: center !important;
    }


    /* -----------------------------------------------------
       TEXT
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav
    > li.menu-item-has-children
    > a.dropdown-toggle
    > span {

        display: inline-block !important;

        color: #1e5666 !important;

        font-size: 13px !important;

        font-weight: 700 !important;
    }


    /* =====================================================
       HOVER
       ===================================================== */

    .site-header .header-nav.dagon-nav
    > li.menu-item-has-children
    > a.dropdown-toggle:hover {

        background: #39cbd7 !important;

        border-color: #39cbd7 !important;

        color: #ffffff !important;
    }


    .site-header .header-nav.dagon-nav
    > li.menu-item-has-children
    > a.dropdown-toggle:hover
    > i,

    .site-header .header-nav.dagon-nav
    > li.menu-item-has-children
    > a.dropdown-toggle:hover
    > span {

        color: #ffffff !important;
    }


    /* -----------------------------------------------------
       REMOVE OLD MOBILE SUBMENU ARROWS
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav
    > li > .toggle-submenu {

        display: none !important;
    }


    .site-header .header-nav.dagon-nav
    > li > a.dropdown-toggle::after {

        display: none !important;
        content: none !important;
    }


    /* =====================================================
       HAMBURGER BUTTON
       ===================================================== */

    .site-header .menu-on-mobile {

        display: flex !important;

        position: absolute !important;

        top: 10px !important;
        right: 8px !important;

        width: 38px !important;
        height: 38px !important;

        align-items: center !important;
        justify-content: center !important;

        background: #1e5666 !important;

        border: 2px solid #39cbd7 !important;

        border-radius: 8px !important;

        cursor: pointer !important;

        visibility: visible !important;
        opacity: 1 !important;

        z-index: 999999999 !important;
    }


    .site-header .menu-on-mobile
    .btn-open-mobile {

        display: flex !important;

        flex-direction: column !important;

        justify-content: space-between !important;

        width: 22px !important;
        height: 18px !important;
    }


    .site-header .menu-on-mobile
    .btn-open-mobile span {

        display: block !important;

        width: 22px !important;
        height: 3px !important;

        background: #ffffff !important;

        border-radius: 5px !important;
    }


    .site-header .title-menu-mobile {
        display: none !important;
    }

}

/* =====================================================
   MOBI WORLD MOBILE LOGO - BIG
   ===================================================== */

@media only screen and (max-width: 767px) {

    /* Logo container */
    .site-header .nav-left {
        position: absolute !important;

        left: 8px !important;
        top: 8px !important;

        width: 100px !important;
        height: auto !important;

        margin: 0 !important;
        padding: 0 !important;

        display: block !important;

        z-index: 9999999 !important;
    }

    /* Logo */
    .site-header .nav-left .logo {
        width: 100px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: block !important;
    }

    .site-header .nav-left .logo a {
        width: 100px !important;

        display: block !important;

        margin: 0 !important;
        padding: 0 !important;
    }

    /* Actual image */
    .site-header .nav-left .logo img {
        width: 100px !important;

        max-width: 100px !important;
        height: auto !important;

        display: block !important;

        object-fit: contain !important;
    }

    /* Prevent old width attribute from affecting it */
    .site-header .nav-left img[width] {
        width: 100px !important;
    }

}

/* =========================================
   MOBILE MENU - HOME LINK FIX
   ========================================= */

@media only screen and (max-width: 767px) {

    /* Home மற்றும் மற்ற menu links clickable */
    .site-header .header-nav.dagon-nav > li.menu-item-has-children > a.dropdown-toggle {
        position: relative !important;
        z-index: 999999999 !important;
        pointer-events: auto !important;
        cursor: pointer !important;
    }

    /* Menu item மேலே வேறு element வராமல் இருக்க */
    .site-header .header-nav.dagon-nav > li.menu-item-has-children {
        position: relative !important;
        z-index: 99999999 !important;
        pointer-events: auto !important;
    }

    /* Home link specifically */
    .site-header .header-nav.dagon-nav > li:first-of-type > a {
        position: relative !important;
        z-index: 999999999 !important;
        pointer-events: auto !important;
    }

    /* Hamburger மேலே மட்டும் இருக்க வேண்டும் */
    .site-header .menu-on-mobile {
        z-index: 9999999999 !important;
        pointer-events: auto !important;
    }

    /* Open menu முழுவதும் clickable */
    .site-header .header-nav.dagon-nav.has-open {
        position: relative !important;
        z-index: 999999999 !important;
        pointer-events: auto !important;
    }

    /* Close button மட்டும் close செய்ய */
    .site-header .header-nav.dagon-nav > li.btn-close {
        position: relative !important;
        z-index: 999999999 !important;
        pointer-events: auto !important;
    }
}

/* ============================================
   MOBI WORLD - PRODUCT PAGE MOBILE MENU FIX
   ============================================ */

@media only screen and (max-width: 767px) {

    /* Header must stay above product content */
    .site-header {
        position: relative !important;
        z-index: 999999 !important;
    }

    .site-header .header-content {
        position: relative !important;
        z-index: 999999 !important;
    }

    .site-header .header-menu-bar {
        position: relative !important;
        z-index: 99999999 !important;
    }

    .site-header .header-menu-nav {
        position: relative !important;
        z-index: 99999999 !important;
    }

    .site-header .header-menu-nav-inner {
        position: relative !important;
        z-index: 99999999 !important;
    }


    /* ============================================
       HIDE ALL DEPARTMENTS IN MOBILE
       ============================================ */

    .site-header #box-vertical-megamenus {
        display: none !important;
        visibility: hidden !important;
    }


    /* ============================================
       HAMBURGER BUTTON
       ============================================ */

    .site-header .menu-on-mobile {
        display: flex !important;

        position: absolute !important;

        top: 10px !important;
        right: 8px !important;

        width: 42px !important;
        height: 42px !important;

        align-items: center !important;
        justify-content: center !important;

        background: #1e5666 !important;

        border: 2px solid #39cbd7 !important;
        border-radius: 8px !important;

        cursor: pointer !important;

        visibility: visible !important;
        opacity: 1 !important;

        z-index: 9999999999 !important;

        pointer-events: auto !important;
    }


    /* Hamburger 3 lines */

    .site-header .menu-on-mobile .btn-open-mobile {
        display: flex !important;

        flex-direction: column !important;

        justify-content: space-between !important;

        width: 23px !important;
        height: 19px !important;

        pointer-events: none !important;
    }

    .site-header .menu-on-mobile .btn-open-mobile span {
        display: block !important;

        width: 23px !important;
        height: 3px !important;

        background: #ffffff !important;

        border-radius: 5px !important;

        pointer-events: none !important;
    }

    .site-header .title-menu-mobile {
        display: none !important;
    }


    /* ============================================
       MAIN MENU CONTAINER
       ============================================ */

    .site-header .header-menu.header-menu-resize {
        display: block !important;

        width: 100% !important;

        position: relative !important;

        margin: 0 !important;
        padding: 0 !important;

        visibility: visible !important;
        opacity: 1 !important;

        z-index: 99999999 !important;
    }


    /* ============================================
       MENU CLOSED
       ============================================ */

    .site-header .header-menu.header-menu-resize
    .header-nav.dagon-nav {
        display: none !important;

        visibility: hidden !important;
        opacity: 0 !important;

        width: 100% !important;

        margin: 0 !important;
        padding: 0 !important;

        pointer-events: none !important;
    }


    /* ============================================
       MENU OPEN
       JS ADDS .has-open
       ============================================ */

    .site-header .header-menu.header-menu-resize
    .header-nav.dagon-nav.has-open {

        display: flex !important;

        flex-direction: column !important;

        width: 100% !important;

        margin: 0 !important;
        padding: 10px !important;

        gap: 7px !important;

        background: #ffffff !important;

        border: 2px solid #1e5666 !important;

        border-radius: 10px !important;

        visibility: visible !important;
        opacity: 1 !important;

        position: relative !important;

        z-index: 999999999 !important;

        pointer-events: auto !important;
    }


    /* ============================================
       CLOSE BUTTON
       ============================================ */

    .site-header .header-nav.dagon-nav > li.btn-close {

        display: flex !important;

        width: 100% !important;

        height: 32px !important;

        align-items: center !important;

        justify-content: flex-end !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        z-index: 999999999 !important;
    }

    .site-header .header-nav.dagon-nav > li.btn-close i {

        width: 28px !important;
        height: 28px !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        background: #1e5666 !important;

        color: #ffffff !important;

        border-radius: 50% !important;

        font-size: 13px !important;

        cursor: pointer !important;
    }


    /* ============================================
       HOME / ABOUT / PRODUCT / BLOG / CONTACT
       ============================================ */

    .site-header .header-nav.dagon-nav
    > li.menu-item-has-children {

        display: block !important;

        width: 100% !important;

        margin: 0 !important;
        padding: 0 !important;

        visibility: visible !important;
        opacity: 1 !important;

        position: relative !important;

        z-index: 999999999 !important;

        pointer-events: auto !important;
    }


    .site-header .header-nav.dagon-nav
    > li.menu-item-has-children
    > a.dropdown-toggle {

        display: flex !important;

        width: 100% !important;

        min-height: 46px !important;

        align-items: center !important;

        gap: 12px !important;

        padding: 0 14px !important;

        background: #ffffff !important;

        border: 2px solid #1e5666 !important;

        border-radius: 8px !important;

        color: #1e5666 !important;

        font-size: 13px !important;

        font-weight: 700 !important;

        text-decoration: none !important;

        position: relative !important;

        z-index: 999999999 !important;

        pointer-events: auto !important;

        cursor: pointer !important;
    }


    /* Icons */

    .site-header .header-nav.dagon-nav
    > li.menu-item-has-children
    > a.dropdown-toggle > i {

        display: inline-block !important;

        width: 22px !important;

        color: #1e5666 !important;

        font-size: 17px !important;

        text-align: center !important;
    }


    /* Text */

    .site-header .header-nav.dagon-nav
    > li.menu-item-has-children
    > a.dropdown-toggle > span {

        display: inline-block !important;

        color: #1e5666 !important;

        font-size: 13px !important;

        font-weight: 700 !important;
    }


    /* Hover */

    .site-header .header-nav.dagon-nav
    > li.menu-item-has-children
    > a.dropdown-toggle:hover {

        background: #39cbd7 !important;

        border-color: #39cbd7 !important;

        color: #ffffff !important;
    }

    .site-header .header-nav.dagon-nav
    > li.menu-item-has-children
    > a.dropdown-toggle:hover > i,

    .site-header .header-nav.dagon-nav
    > li.menu-item-has-children
    > a.dropdown-toggle:hover > span {

        color: #ffffff !important;
    }


    /* Remove submenu arrows */

    .site-header .header-nav.dagon-nav
    > li > .toggle-submenu,

    .site-header .header-nav.dagon-nav
    > li > a.dropdown-toggle::after {

        display: none !important;
    }


    /* ============================================
       IMPORTANT:
       PRODUCT PAGE CONTENT SHOULD NOT COVER MENU
       ============================================ */

    .site-main,
    .main-content,
    .page-main,
    .main-container,
    .content-area {

        position: relative !important;

        z-index: 1 !important;
    }


    /* Header menu always above product cards */

    .site-header,
    .site-header * {

        box-sizing: border-box;
    }

}


/* =========================================================
   ALL DEPARTMENTS - CLEAN DROPDOWN
   ========================================================= */

.site-header #box-vertical-megamenus {
    position: relative !important;

    width: 225px !important;

    height: auto !important;

    background: transparent !important;

    overflow: visible !important;

    z-index: 999999 !important;
}


/* =========================================================
   ALL DEPARTMENTS BUTTON
   ========================================================= */

.site-header #box-vertical-megamenus > .title {
    position: relative !important;

    width: 225px !important;

    height: 54px !important;

    margin: 0 !important;

    padding: 0 15px !important;

    display: flex !important;

    align-items: center !important;

    justify-content: center !important;

   background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !importa

    color: #ffffff !important;

    border-radius: 8px !important;

    cursor: pointer !important;

    z-index: 1000000 !important;

    overflow: hidden !important;
}


/* Button hover */

.site-header #box-vertical-megamenus > .title:hover {
   background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !importa

    color: #ffffff !important;
}


/* =========================================================
   MENU - DEFAULT CLOSED
   ========================================================= */

.site-header #box-vertical-megamenus .vertical-menu-content {
    display: none !important;

    position: absolute !important;

    top: 54px !important;

    left: 0 !important;

    width: 225px !important;

    height: auto !important;

    margin: 0 !important;

    padding: 0 !important;

    background: #ffffff !important;

    border-radius: 0 0 8px 8px !important;

    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.20) !important;

    visibility: hidden !important;

    opacity: 0 !important;

    pointer-events: none !important;

    z-index: 99999999 !important;
}


/* =========================================================
   MENU - OPEN
   ========================================================= */

.site-header #box-vertical-megamenus.has-open .vertical-menu-content {

    display: block !important;

    position: absolute !important;

    top: 54px !important;

    left: 0 !important;

    width: 225px !important;

    height: auto !important;

    background: #ffffff !important;

    visibility: visible !important;

    opacity: 1 !important;

    pointer-events: auto !important;

    z-index: 99999999 !important;
}


/* =========================================================
   MENU LIST
   ========================================================= */

.site-header #box-vertical-megamenus .vertical-menu-list {

    display: block !important;

    width: 100% !important;

    height: auto !important;

    margin: 0 !important;

    padding: 0 !important;

    background: #ffffff !important;

    list-style: none !important;

    border-radius: 0 0 8px 8px !important;

    overflow: hidden !important;
}


/* =========================================================
   MENU ITEMS
   ========================================================= */

.site-header #box-vertical-megamenus .vertical-menu-list > li {

    display: block !important;

    width: 100% !important;

    height: auto !important;

    margin: 0 !important;

    padding: 0 !important;

    background: #ffffff !important;

    border-bottom: 1px solid #e5e5e5 !important;

    position: relative !important;
}


/* =========================================================
   MENU LINKS
   ========================================================= */

.site-header #box-vertical-megamenus .vertical-menu-list > li > a {

    display: flex !important;

    align-items: center !important;

    width: 100% !important;

    min-height: 50px !important;

    padding: 0 15px !important;

    background: #ffffff !important;

    color: #1e5666 !important;

    font-size: 14px !important;

    font-weight: 600 !important;

    text-decoration: none !important;

    border: none !important;
}


/* =========================================================
   MENU HOVER
   ========================================================= */

.site-header #box-vertical-megamenus .vertical-menu-list > li:hover > a {

    background: #39cbd7 !important;

    color: #ffffff !important;
}


/* =========================================================
   ICON
   ========================================================= */

.site-header #box-vertical-megamenus .vertical-menu-list > li > a i {

    color: #1e5666 !important;

    margin-right: 7px !important;
}


.site-header #box-vertical-megamenus .vertical-menu-list > li:hover > a i {

    color: #ffffff !important;
}


/* =========================================================
   REMOVE EXTRA BACKGROUND FROM PARENT
   ========================================================= */

.site-header #box-vertical-megamenus,
.site-header #box-vertical-megamenus .nav-toggle-cat,
.site-header #box-vertical-megamenus .vertical-menu {

    background: transparent !important;

    box-shadow: none !important;
}


/* =========================================================
   IMPORTANT - DON'T PUSH NAVIGATION
   ========================================================= */

.site-header #box-vertical-megamenus.has-open {
    height: 54px !important;

    min-height: 54px !important;

    max-height: 54px !important;
}


/* =========================================================
   MOBILE
   ========================================================= */

@media only screen and (max-width: 767px) {

    .site-header #box-vertical-megamenus {

        width: 100% !important;

        height: auto !important;

        background: transparent !important;

        overflow: visible !important;
    }


    .site-header #box-vertical-megamenus > .title {

        width: 100% !important;

        height: 50px !important;

        border-radius: 8px !important;
    }


    .site-header #box-vertical-megamenus .vertical-menu-content {

        top: 50px !important;

        left: 0 !important;

        width: 100% !important;
    }


    .site-header #box-vertical-megamenus.has-open {

        height: 50px !important;

        min-height: 50px !important;

        max-height: 50px !important;
    }


    .site-header #box-vertical-megamenus.has-open .vertical-menu-content {

        top: 50px !important;

        width: 100% !important;
    }
}

/* =========================================================
   PRODUCT PAGE - NAV MENU FIX
   ========================================================= */

@media only screen and (max-width: 767px) {

    /* Header should stay above product content */
    .site-header {
        position: relative !important;
        z-index: 999999 !important;
    }

    .site-header .header-content,
    .site-header .header-menu-bar,
    .site-header .header-menu-nav,
    .site-header .header-menu-nav-inner {
        position: relative !important;
        z-index: 999999 !important;
    }


    /* ================================
       MOBILE HAMBURGER
    ================================= */

    .site-header .menu-on-mobile {
        display: flex !important;

        position: absolute !important;

        top: 10px !important;
        right: 8px !important;

        width: 42px !important;
        height: 42px !important;

        align-items: center !important;
        justify-content: center !important;

        background: #1e5666 !important;

        border: 2px solid #39cbd7 !important;

        border-radius: 8px !important;

        cursor: pointer !important;

        z-index: 999999999 !important;

        pointer-events: auto !important;
    }


    .site-header .menu-on-mobile .btn-open-mobile {
        display: flex !important;

        flex-direction: column !important;

        justify-content: space-between !important;

        width: 23px !important;
        height: 19px !important;

        pointer-events: none !important;
    }


    .site-header .menu-on-mobile .btn-open-mobile span {
        display: block !important;

        width: 23px !important;
        height: 3px !important;

        background: #ffffff !important;

        border-radius: 5px !important;
    }


    .site-header .title-menu-mobile {
        display: none !important;
    }


    /* ================================
       MAIN MOBILE MENU
    ================================= */

    .site-header .header-menu.header-menu-resize {
        display: block !important;

        width: 100% !important;

        position: relative !important;

        z-index: 999999 !important;
    }


    .site-header .header-nav.dagon-nav {
        display: none !important;

        visibility: hidden !important;

        opacity: 0 !important;

        pointer-events: none !important;
    }


    .site-header .header-nav.dagon-nav.has-open {
        display: flex !important;

        flex-direction: column !important;

        width: 100% !important;

        margin: 0 !important;

        padding: 10px !important;

        gap: 7px !important;

        background: #ffffff !important;

        border: 2px solid #1e5666 !important;

        border-radius: 10px !important;

        visibility: visible !important;

        opacity: 1 !important;

        position: relative !important;

        z-index: 99999999 !important;

        pointer-events: auto !important;
    }


    .site-header .header-nav.dagon-nav > li.menu-item-has-children {
        display: block !important;

        width: 100% !important;

        margin: 0 !important;

        padding: 0 !important;

        position: relative !important;

        z-index: 99999999 !important;
    }


    .site-header .header-nav.dagon-nav > li.menu-item-has-children > a.dropdown-toggle {
        display: flex !important;

        width: 100% !important;

        min-height: 46px !important;

        align-items: center !important;

        gap: 12px !important;

        padding: 0 14px !important;

        background: #ffffff !important;

        border: 2px solid #1e5666 !important;

        border-radius: 8px !important;

        color: #1e5666 !important;

        font-size: 13px !important;

        font-weight: 700 !important;

        text-decoration: none !important;

        pointer-events: auto !important;

        cursor: pointer !important;
    }


    .site-header .header-nav.dagon-nav > li.menu-item-has-children > a.dropdown-toggle i {
        color: #1e5666 !important;

        font-size: 17px !important;
    }


    .site-header .header-nav.dagon-nav > li.menu-item-has-children > a.dropdown-toggle span {
        color: #1e5666 !important;
    }


    .site-header .header-nav.dagon-nav > li.menu-item-has-children > a.dropdown-toggle:hover {
        background: #39cbd7 !important;

        border-color: #39cbd7 !important;

        color: #ffffff !important;
    }


    .site-header .header-nav.dagon-nav > li.menu-item-has-children > a.dropdown-toggle:hover i,
    .site-header .header-nav.dagon-nav > li.menu-item-has-children > a.dropdown-toggle:hover span {
        color: #ffffff !important;
    }


    /* Remove submenu arrows */
    .site-header .header-nav.dagon-nav .toggle-submenu,
    .site-header .header-nav.dagon-nav a.dropdown-toggle::after {
        display: none !important;
    }


    /* Close button */
    .site-header .header-nav.dagon-nav > li.btn-close {
        display: flex !important;

        width: 100% !important;

        height: 32px !important;

        align-items: center !important;

        justify-content: flex-end !important;
    }


    .site-header .header-nav.dagon-nav > li.btn-close i {
        width: 28px !important;

        height: 28px !important;

        display: flex !important;

        align-items: center !important;

        justify-content: center !important;

        background: #1e5666 !important;

        color: #ffffff !important;

        border-radius: 50% !important;
    }


    /* ================================
       ALL DEPARTMENTS
    ================================= */

    .site-header #box-vertical-megamenus {
        position: relative !important;

        z-index: 999999 !important;
    }


    .site-header #box-vertical-megamenus .vertical-menu-content {
        display: none !important;

        visibility: hidden !important;

        opacity: 0 !important;

        pointer-events: none !important;
    }


    .site-header #box-vertical-megamenus.has-open .vertical-menu-content {
        display: block !important;

        visibility: visible !important;

        opacity: 1 !important;

        pointer-events: auto !important;
    }

}
</style>

<header class="site-header header-opt-1">

    <!-- header-top -->

    <!-- header-content -->
    <div class="header-content navbar">
        <div class="container">
            <div class="row">

                <!-- LOGO -->
                <div class="col-md-2 nav-left">

                    <!-- logo -->
                    <strong class="logo">
                        <a href="index.php" class="img_anbu">
                            <img src="assets/images/logo1.png"
                                 width="280"
                                 alt="logo">
                        </a>
                    </strong>
                    <!-- logo -->

                       <div class="mobi-world-brand">
            <span>MOBI WORLD</span>
            <p>Smart Life • Smart Choice</p>
        </div>

                </div>


                <!-- SEARCH -->
                <div class="col-md-8 nav-mind">

                    <!-- block search -->
                    <div class="block-search">

                        <div class="block-content">

                            <div class="categori-search">

                                <select title="categories"
                                        data-placeholder="All Categories"
                                        class="chosen-select categori-search-option">

                                    <option value="">All Categories</option>

                                    <optgroup label="Mobile">
                                        <option value="mobile">Mobile Phones</option>
                                        <option value="iphone">iPhone</option>
                                        <option value="oneplus">OnePlus</option>
                                        <option value="android">Android Phones</option>
                                    </optgroup>

                                    <optgroup label="Audio">
                                        <option value="earbuds">Earbuds</option>
                                        <option value="headphones">Headphones</option>
                                        <option value="speakers">Speakers</option>
                                    </optgroup>

                                    <optgroup label="Accessories">
                                        <option value="charger">Chargers</option>
                                        <option value="cable">Cables</option>
                                        <option value="powerbank">Power Banks</option>
                                        <option value="case">Phone Cases</option>
                                        <option value="screenguard">Screen Guards</option>
                                    </optgroup>

                                    <optgroup label="Smart Devices">
                                        <option value="smartwatch">Smart Watches</option>
                                        <option value="projector">Projectors</option>
                                        <option value="gaming">Gaming Accessories</option>
                                    </optgroup>

                                </select>

                            </div>


                            <div class="form-search">

                                <form action="list-product.php" method="GET">

                                    <div class="box-group">

                                        <input type="text"
                                               name="search"
                                               class="form-control"
                                               placeholder="Search keyword here..."
                                               autocomplete="off">

                                        <button class="btn btn-search"
                                                type="submit">

                                            <span class="flaticon-magnifying-glass"></span>

                                        </button>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>
                    <!-- block search -->

                </div>


                <!-- ADMIN -->
                <div class="col-md-2 nav-right">

                    <!-- block mini cart -->
                    <div class="block-minicart dropdown">

                        <a class="minicart" href="#">

                            <span class="counter qty">

                                <a href="Admin/index.php"
                                   class="admin-login">

                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         width="24"
                                         height="24"
                                         fill="currentColor"
                                         class="bi bi-person-circle"
                                         viewBox="0 0 16 16">

                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />

                                        <path fill-rule="evenodd"
                                              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A8 8 0 0 0 8 1" />

                                    </svg>

                                </a>

                            </span>

                            <br>

                            <p style="margin-right: 100px;">
                                Admin
                            </p>

                        </a>

                    </div>

                </div>
                <!-- block mini cart -->


                <a href="#"
                   class="hidden-md search-hidden">

                    <span class="flaticon-magnifying-glass"></span>

                </a>

            </div>
        </div>
    </div>
    <!-- header-content -->


    <!-- header-menu-bar -->
    <div class="header-menu-bar header-sticky">

        <div class="header-menu-nav menu-style-2">

            <div class="container">

                <div class="header-menu-nav-inner">


                    <!-- =====================================================
                         ALL DEPARTMENTS
                         ===================================================== -->

                    <div id="box-vertical-megamenus"
                         class="box-vertical-megamenus nav-toggle-cat">

                        <!-- IMPORTANT:
                             active removed here.
                             So menu is CLOSED by default.
                        -->

                        <h4 class="title">

                            <span class="btn-open-mobile home-page">

                                <span></span>

                                <span></span>

                                <span></span>

                            </span>

                            <span class="title-menu">
                                All Departments
                            </span>

                        </h4>


                        <!-- =================================================
                             VERTICAL MENU CONTENT
                             ================================================= -->

                        <div class="vertical-menu-content">

                            <!-- CLOSE BUTTON -->
                            <span class="btn-close hidden-md">
                                <i class="flaticon-close"
                                   aria-hidden="true"></i>
                            </span>


                            <!-- =================================================
                                 VERTICAL MENU LIST
                                 ================================================= -->

                            <ul class="vertical-menu-list">


                                <!-- AUDIO -->
                                <li>
                                    <a href="list-product.php?category=earbuds">
                                        <i class="fa-solid fa-headphones"></i>
                                        Audio
                                    </a>
                                </li>


                                <!-- SMART WATCH -->
                                <li>
                                    <a href="list-product.php?category=smartwatch">
                                        <i class="fa-solid fa-clock"></i>
                                        Smart Watch
                                    </a>
                                </li>


                                <!-- CHARGERS & POWER -->
                                <li>
                                    <a href="list-product.php?category=charger">
                                        <i class="fa-solid fa-bolt"></i>
                                        Chargers &amp; Power
                                    </a>
                                </li>


                                <!-- PHONE ACCESSORIES -->
                                <li>
                                    <a href="list-product.php?category=accessories">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                        Phone Accessories
                                    </a>
                                </li>


                                <!-- PROJECTORS -->
                                <li>
                                    <a href="list-product.php?category=projector">
                                        <i class="fa-solid fa-video"></i>
                                        Projectors
                                    </a>
                                </li>


                                <!-- GAMING ACCESSORIES -->
                                <li>
                                    <a href="list-product.php?category=gaming">
                                        <i class="fa-solid fa-gamepad"></i>
                                        Gaming Accessories
                                    </a>
                                </li>


                                <!-- APPLE ACCESSORIES -->
                                <li>
                                    <a href="list-product.php?category=apple-accessories">
                                        <i class="fa-brands fa-apple"></i>
                                        Apple Accessories
                                    </a>
                                </li>


                                <!-- NEW ARRIVALS -->
                                <li>
                                    <a href="list-product.php?category=new-arrivals">
                                        <i class="fa-solid fa-star"></i>
                                        New Arrivals
                                    </a>
                                </li>


                                <!-- BEST SELLERS -->
                                <li>
                                    <a href="list-product.php?category=best-sellers">
                                        <i class="fa-solid fa-fire"></i>
                                        Best Sellers
                                    </a>
                                </li>


                                <!-- SPECIAL OFFERS -->
                                <li>
                                    <a href="list-product.php?category=special-offers">
                                        <i class="fa-solid fa-tag"></i>
                                        Special Offers
                                    </a>
                                </li>


                            </ul>

                        </div>
                        <!-- vertical-menu-content -->

                    </div>
                    <!-- ALL DEPARTMENTS -->


                    <!-- =====================================================
                         MAIN MENU
                         ===================================================== -->

                    <div class="header-menu header-menu-resize">

                        <ul class="header-nav dagon-nav">


                            <!-- CLOSE MOBILE MENU -->
                            <li class="btn-close hidden-md">

                                <i class="flaticon-close"
                                   aria-hidden="true"></i>

                            </li>


                            <!-- HOME -->
                            <li class="menu-item-has-children">

                                <a href="index.php"
                                   class="dropdown-toggle">

                                    <i class="fa-solid fa-house"></i>

                                    <span>
                                        Home
                                    </span>

                                </a>

                                <span class="toggle-submenu hidden-md"></span>

                            </li>


                            <!-- ABOUT -->
                            <li class="menu-item-has-children">

                                <a href="about-us.php"
                                   class="dropdown-toggle">

                                    <i class="fa-solid fa-circle-info"></i>

                                    <span>
                                        About
                                    </span>

                                </a>

                                <span class="toggle-submenu hidden-md"></span>

                            </li>


                            <!-- PRODUCT -->
                            <li class="menu-item-has-children">

                                <a href="list-product.php"
                                   class="dropdown-toggle">

                                    <i class="fa-solid fa-bag-shopping"></i>

                                    <span>
                                        Product
                                    </span>

                                </a>

                                <span class="toggle-submenu hidden-md"></span>

                            </li>


                            <!-- BLOG -->
                            <li class="menu-item-has-children">

                                <a href="blog-grid.php"
                                   class="dropdown-toggle">

                                    <i class="fa-solid fa-newspaper"></i>

                                    <span>
                                        Blog
                                    </span>

                                </a>

                                <span class="toggle-submenu hidden-md"></span>

                            </li>


                            <!-- CONTACT -->
                            <li class="menu-item-has-children">

                                <a href="contact-us.php"
                                   class="dropdown-toggle">

                                    <i class="fa-solid fa-envelope"></i>

                                    <span>
                                        Contact Us
                                    </span>

                                </a>

                                <span class="toggle-submenu hidden-md"></span>

                            </li>


                        </ul>

                    </div>
                    <!-- MAIN MENU -->


                    <!-- =====================================================
                         MOBILE MENU BUTTON
                         ===================================================== -->

                    <span data-action="toggle-nav"
                          class="menu-on-mobile hidden-md">

                        <span class="btn-open-mobile home-page">

                            <span></span>

                            <span></span>

                            <span></span>

                        </span>

                        <span class="title-menu-mobile">
                            Main menu
                        </span>

                    </span>


                </div>
            </div>

        </div>

    </div>
    <!-- header-menu-bar -->

</header>