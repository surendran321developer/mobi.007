<head>
    <style>
/* =========================================================
   MOBI WORLD - NAV1 COMPLETE CSS
   Desktop + Laptop + Tablet + Mobile
   ========================================================= */

/* =========================================================
   1. GLOBAL RESET
   ========================================================= */

.site-header.header-opt-1,
.site-header.header-opt-1 *,
.site-header.header-opt-1 *::before,
.site-header.header-opt-1 *::after {
    box-sizing: border-box;
}

.site-header.header-opt-1 {
    width: 100%;
    margin: 0;
    padding: 0;
    position: relative;
    z-index: 99999;
    background: #39cbd7 !important;
}

.site-header a {
    text-decoration: none !important;
}

.site-header ul,
.site-header li {
    margin: 0;
    padding: 0;
}


/* =========================================================
   2. TOP HEADER
   ========================================================= */

.site-header .header-content {
    width: 100%;
    min-height: 135px;
    margin: 0;
    padding: 0;
    background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;
    border: none !important;
    box-shadow: none !important;
    position: relative;
    z-index: 100000;
}

.site-header .header-content > .container {
    width: 100%;
    max-width: 100%;
    margin: 0;
    padding: 0 30px;
}

.site-header .header-content .row {
    width: 100%;
    min-height: 135px;
    margin: 0;
    display: flex;
    align-items: center;
}


/* =========================================================
   3. LOGO AREA
   ========================================================= */

.site-header .nav-left {
    min-height: 135px;
    padding: 0 15px;

    display: flex;
    align-items: center;

    flex: 0 0 280px;
    max-width: 280px;

    position: relative;
    z-index: 100;
}

.site-header .nav-left .logo {
    margin: 0;
    padding: 0;
    
    display: flex;
    align-items: center;

    line-height: 0;
}

.site-header .nav-left .logo a.img_anbu {
    display: block;
    margin: 0;
    padding: 0;
    line-height: 0;
}

.site-header .nav-left .logo img {
    width: 180px !important;
    max-width: 180px !important;
    height: auto !important;
    display: block;
    object-fit: contain;

    transition: transform 0.3s ease;
}

.site-header .nav-left .logo a:hover img {
    transform: scale(1.03);
}


/* =========================================================
   4. MOBI WORLD NAME
   ========================================================= */

.site-header .mobi-world-name {
    display: none !important;
}


/* =========================================================
   5. SEARCH AREA
   ========================================================= */

.site-header .nav-mind {
    min-height: 135px;
    padding:  30px;

    display: flex;
    align-items: center;
  
    flex: 1 1 auto;
    max-width: none;

    position: relative;
    z-index: 10000;

    overflow: visible !important;
}

.site-header .block-search {
    width: 100%;
    margin-left:70px;
    padding-top:10px;

    position: relative;
    z-index: 20000;
    border:none;
}

.site-header .block-search .block-content {
    width: 100%;
    margin: 0;
    padding: 0;

    display: flex;
    align-items: stretch;

    position: relative;
    z-index: 10000;
}


/* =========================================================
   6. CATEGORY
   ========================================================= */

.site-header .categori-search {
    width: 180px !important;
    min-width: 180px !important;

    margin: 0 !important;
    padding: 0 !important;

    position: relative !important;
    z-index: 999999;
}

.site-header .categori-search-option {
    width: 100% !important;
    height: 52px;

    margin: 0;
    padding: 0 25px 0 14px;

    border: 1px solid #39cbd7 !important;
    border-right: none !important;
    border-radius: 0 !important;

    background: #ffffff !important;
    color: #1e5666 !important;

    outline: none !important;
    box-shadow: none !important;

    font-size: 14px;
    cursor: pointer;
}


/* =========================================================
   7. CHOSEN CATEGORY
   ========================================================= */

.site-header .categori-search .chosen-container {
    width: 100% !important;
    margin-top: -3px;
    padding: 0 !important;

    position: relative !important;
    z-index: 999999;
}

.site-header
.categori-search
.chosen-container-single
.chosen-single {

    width: 100% !important;
    height: 52px;

    line-height: 50px;

    margin: 0 !important;
    padding: 0 25px 0 15px;

    border: 1px solid #39cbd7 !important;
    border-right: none !important;

    border-radius: 0 !important;

    background: #ffffff !important;
    background-image: none !important;

    color: #1e5666 !important;

    font-size: 14px;
    text-decoration: none !important;

    box-shadow: none !important;

    position: relative;
}

.site-header
.categori-search
.chosen-container-single
.chosen-single span {
    color: #1e5666 !important;
}


/* =========================================================
   8. CATEGORY ARROW
   ========================================================= */

.site-header
.categori-search
.chosen-container-single
.chosen-single div {

    width: 30px;
    height: 100%;

    top: 0;
    right: 0;
}

.site-header
.categori-search
.chosen-container-single
.chosen-single div b {

    width: 100%;
    height: 100%;

    display: block;

    background: none !important;
    position: relative;
}

.site-header
.categori-search
.chosen-container-single
.chosen-single div b::after {

    content: "\f078";

    font-family: "Font Awesome 6 Free";
    font-weight: 900;

    color: #1e5666;

    font-size: 11px;

    position: absolute;

    top: 50%;
    right: 8px;

    transform: translateY(-50%);
}


/* =========================================================
   9. CATEGORY DROPDOWN
   ========================================================= */

.site-header
.categori-search
.chosen-container
.chosen-drop {

    position: absolute !important;

    top: 100% !important;
    left: 0 !important;

    width: 100% !important;

    margin: 0 !important;

    z-index: 99999999 !important;

    border: 1px solid #39cbd7 !important;
    border-top: none !important;

    border-radius: 0 !important;

    background: #ffffff !important;

    box-shadow:
        0 12px 30px rgba(30, 86, 102, 0.35);
}

.site-header
.categori-search
.chosen-container
.chosen-results {

    margin: 0 !important;
    padding: 5px 0 !important;

    background: #ffffff !important;
}

.site-header
.categori-search
.chosen-container
.chosen-results li {

    margin: 0 !important;
    padding: 10px 15px !important;

    background: #ffffff !important;
    color: #1e5666 !important;

    font-size: 13px;
    line-height: 1.4;

    transition:
        background 0.2s ease,
        color 0.2s ease;
}

.site-header
.categori-search
.chosen-container
.chosen-results li.highlighted {

    background: #39cbd7 !important;
    color: #111111 !important;
}


/* =========================================================
   10. SEARCH FORM
   ========================================================= */

.site-header .form-search {
    flex: 1 1 auto;
    width: auto;

    margin: 0 !important;
    padding: 0 !important;

    position: relative;
    z-index: 10;
}

.site-header .form-search form {
    width: 100%;
    margin: 0;
    padding: 0;
}

.site-header .form-search .box-group {

    width: 100%;
    height: 52px;

    margin: 0;
    padding: 0;

    display: flex;
    align-items: stretch;

    border: 1px solid #39cbd7 !important;
    border-left: none !important;

    border-radius: 0 !important;

    background: #ffffff !important;

    overflow: hidden;

    position: relative;
}

.site-header .form-search .form-control {

    flex: 1 1 auto;

    width: auto;
    height: 50px;

    margin: 0 !important;
    padding: 0 18px;

    border: none !important;
    outline: none !important;

    background: #ffffff !important;
    color: #1e5666 !important;

    font-size: 14px;

    box-shadow: none !important;
}

.site-header .form-search .form-control::placeholder {
    color: #777777 !important;
    opacity: 1;
}


/* =========================================================
   11. SEARCH BUTTON
   ========================================================= */

.site-header .form-search .btn-search {

    width: 60px !important;
    min-width: 60px !important;

    height: 50px !important;

    margin: 0 !important;
    padding: 0 !important;

    border: none !important;
    border-radius: 0 !important;

    background: #39cbd7 !important;
    color: #1e5666 !important;

    display: flex !important;
    align-items: center;
    justify-content: center;

    cursor: pointer;

    transition:
        background 0.25s ease,
        color 0.25s ease;
}

.site-header .form-search .btn-search:hover {
    background: #1e5666 !important;
    color: #ffffff !important;
}

.site-header .form-search .btn-search span,
.site-header .form-search .btn-search i {

    color: #1e5666 !important;
    font-size: 18px;

    transition:
        color 0.25s ease,
        transform 0.25s ease;
}

.site-header .form-search .btn-search:hover span,
.site-header .form-search .btn-search:hover i {

    color: #ffffff !important;
    transform: scale(1.1);
}


/* =========================================================
   12. ADMIN AREA
   ========================================================= */

.site-header .nav-right {

    min-height: 135px;

    padding: 0 15px;

    display: flex;
    align-items: center;
    justify-content: center;

    flex: 0 0 110px;
    max-width: 110px;

    position: relative;
    z-index: 100;
}

.site-header .block-minicart {

    margin: 0 !important;
    padding: 0 !important;

    display: flex;
    align-items: center;
    justify-content: center;
}

.site-header .block-minicart > .minicart {

    display: flex !important;

    flex-direction: column;

    align-items: center;
    justify-content: center;

    margin: 0 !important;
    padding: 0 !important;

    color: #111111 !important;

    background: transparent !important;

    text-decoration: none !important;
}


/* =========================================================
   13. ADMIN ICON
   ========================================================= */

.site-header .counter.qty {

    position: static !important;

    margin: 0 !important;
    padding: 0 !important;

    transform: none !important;

    display: flex;
    align-items: center;
    justify-content: center;
}

.site-header .admin-login {

    display: flex !important;

    align-items: center;
    justify-content: center;

    margin: 0 !important;
    padding: 0 !important;

    color: #111111 !important;

    background: transparent !important;

    text-decoration: none !important;

    transition:
        color 0.3s ease,
        transform 0.3s ease;
}

.site-header .admin-login svg {

    width: 30px;
    height: 30px;

    display: block;

    color: #111111 !important;

    fill: currentColor;

    transition:
        color 0.3s ease,
        transform 0.3s ease;
}

.site-header .admin-login:hover {
    color: #ffffff !important;
    transform: translateY(-2px);
}

.site-header .admin-login:hover svg {
    color: #ffffff !important;
    transform: scale(1.08);
}


/* =========================================================
   14. ADMIN TEXT
   ========================================================= */

.site-header .block-minicart p {

    margin: 5px 0 0 0 !important;
    padding: 0 !important;

    color: #111111 !important;

    font-size: 14px;
    font-weight: 700;

    line-height: 1.2;

    text-align: center;

    white-space: nowrap;
}


/* =========================================================
   15. MAIN NAV BAR
   ========================================================= */

.site-header .header-menu-bar {

    width: 100%;

    height: 65px;
    min-height: 65px;

    margin: 0;
    padding: 0;

    background: #1e5666 !important;

    border: none !important;

    position: relative;

    z-index: 5000;
    
}

.site-header .header-menu-bar::before {

    content: "";

    position: absolute;

    top: 0;
    left: 0;

    width: 100%;
    height: 2px;

    background: #39cbd7;

    pointer-events: none;

    z-index: 20;
}


/* =========================================================
   16. NAV GRADIENT
   ========================================================= */

.site-header .header-menu-nav {

    width: 100%;

    height: 65px;
    min-height: 65px;

    margin: 0;
    padding: 0;

    background: linear-gradient(
        90deg,
        #1e5666,
        #39cbd7,
        #1e5666
    ) !important;

    position: relative;

    z-index: 5000;
}

.site-header .header-menu-nav > .container {

    width: 100%;
    max-width: 100%;

    margin: 0;
    padding: 0 20px;
}

.site-header .header-menu-nav-inner {

    width: 100%;

    height: 65px;
    min-height: 65px;

    margin: 0;
    padding: 0;

    display: flex;
    align-items: center;

    background: transparent !important;

    position: relative;

    z-index: 5000;
}


/* =========================================================
   17. ALL DEPARTMENTS
   ========================================================= */

.site-header #box-vertical-megamenus {

    width: 230px;
    min-width: 230px;

    height: 65px;

    margin: 0;
    padding: 0;

    position: relative;

    z-index: 999999;
}

.site-header
#box-vertical-megamenus
.title {

    width: 230px;
    height: 65px;

    margin: 0 !important;
    padding: 0 20px !important;

    display: flex !important;
    align-items: center;
    justify-content: flex-start;

    gap: 12px;

    background: #39cbd7 !important;
    color: #1e5666 !important;

    font-size: 14px;
    font-weight: 800;

    text-transform: uppercase;

    cursor: pointer;

    border: none !important;
    box-shadow: none !important;

    position: relative;
    z-index: 10;
}

.site-header
#box-vertical-megamenus
.title span,
.site-header
#box-vertical-megamenus
.title .title-menu {

    color: #1e5666 !important;
    background: transparent !important;
}


/* =========================================================
   18. DEPARTMENT HAMBURGER
   ========================================================= */

.site-header
#box-vertical-megamenus
.btn-open-mobile {

    width: 20px;
    height: 18px;

    display: flex !important;
    flex-direction: column;

    justify-content: center;

    gap: 4px;

    flex-shrink: 0;
}

.site-header
#box-vertical-megamenus
.btn-open-mobile > span {

    width: 20px;
    height: 2px;

    display: block;

    background: #1e5666 !important;

    border-radius: 3px;
}


/* =========================================================
   19. DEPARTMENT DROPDOWN
   ========================================================= */

.site-header
#box-vertical-megamenus
.vertical-menu-content {

    position: absolute !important;

    top: 65px !important;
    left: 0 !important;

    width: 280px !important;

    margin: 0 !important;
    padding: 0 !important;

    background: #ffffff !important;

    border: 1px solid #39cbd7 !important;
    border-top: none !important;

    box-shadow:
        0 15px 35px rgba(30, 86, 102, 0.35);

    z-index: 99999999 !important;

    display: none;
}

.site-header
#box-vertical-megamenus:hover
.vertical-menu-content {

    display: block;
}

.site-header
#box-vertical-megamenus
.vertical-menu-list {

    width: 100%;

    margin: 0 !important;
    padding: 0 !important;

    list-style: none;

    background: #ffffff !important;
}

.site-header
#box-vertical-megamenus
.vertical-menu-list > li {

    width: 100%;

    margin: 0 !important;
    padding: 0 !important;

    list-style: none;

    background: #ffffff !important;

    border-bottom: 1px solid #eeeeee;

    position: relative;
}

.site-header
#box-vertical-megamenus
.vertical-menu-list > li > a {

    width: 100%;
    min-height: 45px;

    margin: 0 !important;
    padding: 12px 18px !important;

    display: flex;
    align-items: center;
    

    color: #1e5666 !important;

    background: #ffffff !important;

    text-decoration: none !important;

    font-size: 13px;
    font-weight: 600;

    transition:
        background 0.25s ease,
        color 0.25s ease,
        padding-left 0.25s ease;
}

.site-header
#box-vertical-megamenus
.vertical-menu-list > li:hover > a {

    background: #39cbd7 !important;
    color: #111111 !important;

    padding-left: 24px !important;
}


/* =========================================================
   20. DEPARTMENT MEGA MENU
   ========================================================= */

.site-header
#box-vertical-megamenus
.submenu.megamenu {

    position: absolute !important;

    top: 0 !important;
    left: 100% !important;

    width: 520px !important;
    min-height: 250px;

    margin: 0 !important;
    padding: 25px !important;

    background: #ffffff !important;

    border: 1px solid #39cbd7 !important;

    box-shadow:
        0 15px 35px rgba(30, 86, 102, 0.30);

    z-index: 99999999 !important;

    display: none;
}

.site-header
#box-vertical-megamenus
.vertical-menu-list
> li:hover
> .submenu.megamenu {

    display: block;
}

.site-header .dropdown-menu-title {

    margin: 0 0 15px 0;
    padding-bottom: 8px;

    color: #1e5666 !important;

    font-size: 15px;
    font-weight: 800;

    text-transform: uppercase;

    border-bottom: 2px solid #39cbd7;
}

.site-header
.dropdown-menu-content
ul.menu {

    margin: 0;
    padding: 0;

    list-style: none;
}

.site-header
.dropdown-menu-content
ul.menu li {

    margin: 0;
    padding: 0;

    list-style: none;
}

.site-header
.dropdown-menu-content
ul.menu li a {

    display: block;

    padding: 7px 0;

    color: #1e5666 !important;

    background: transparent !important;

    font-size: 13px;

    text-decoration: none !important;

    transition:
        color 0.2s ease,
        padding-left 0.2s ease;
}

.site-header
.dropdown-menu-content
ul.menu li a:hover {

    color: #39cbd7 !important;

    padding-left: 6px;
}


/* =========================================================
   21. MAIN MENU WRAPPER
   ========================================================= */

.site-header .header-menu {

    flex: 1 1 auto;

    width: auto;

    height: 65px;
    min-height: 65px;

    margin: 0;
    padding: 0;

    display: flex;

    align-items: center;
    justify-content: center;

    background: transparent !important;

    position: relative;

    z-index: 200;
}


/* =========================================================
   22. MAIN NAV UL
   ========================================================= */

.site-header .header-nav.dagon-nav {

    width: 100%;

    height: 65px;

    margin: 0 !important;
    padding: 0 10px !important;

    display: flex;

    align-items: center;
    justify-content: center;

    gap: 10px;

    list-style: none;

    background: transparent !important;

    position: relative;

    z-index: 200;
}


/* =========================================================
   23. MAIN NAV LI
   ========================================================= */

.site-header
.header-nav.dagon-nav
> li {

    height: 65px;

    margin: 0 !important;
    padding: 0 !important;

    display: flex;
    align-items: center;

    position: relative;

    list-style: none;

    background: transparent !important;

    border: none !important;
    box-shadow: none !important;

    overflow: visible;
}

.site-header
.header-nav.dagon-nav
> li.btn-close {

    display: none !important;
}


/* =========================================================
   24. MAIN MENU LINK
   NORMAL = WHITE BACKGROUND + BLACK TEXT
   ========================================================= */

.site-header
.header-nav.dagon-nav
> li:not(.btn-close)
> a {

    width: 125px;
    height: 44px !important;
    min-height: 44px !important;

    margin: 0 !important;
    padding: 0 15px !important;

    display: flex !important;

    align-items: center;
    justify-content: center;

    gap: 8px;

    color: #111111 !important;

    background: #ffffff !important;

    border: 1px solid transparent !important;
    border-radius: 7px !important;

    box-shadow: none !important;

    outline: none !important;

    text-decoration: none !important;

    font-size: 13px;
    font-weight: 700;

    text-transform: uppercase;

    line-height: 1;

    white-space: nowrap;

    position: relative;

    overflow: hidden;

    z-index: 1;

    transition:
        color 0.3s ease,
        border-color 0.3s ease,
        box-shadow 0.3s ease;
}


/* =========================================================
   25. REMOVE OLD TEMPLATE PSEUDO ICON
   ========================================================= */

.site-header
.header-nav.dagon-nav
> li:not(.btn-close)
> a::before {

    content: none !important;
    display: none !important;
}


/* =========================================================
   26. HOVER SLIDE GRADIENT
   BLACK -> CYAN -> BLACK
   ========================================================= */

.site-header
.header-nav.dagon-nav
> li:not(.btn-close)
> a::after {

    content: "";

    position: absolute;

    top: 0;
    left: -100%;

    width: 100%;
    height: 100%;

    background: linear-gradient(
        90deg,
        #111111,
        #39cbd7,
        #111111
    );

    z-index: -1;

    transition: left 0.35s ease;
}

.site-header
.header-nav.dagon-nav
> li:not(.btn-close)
> a:hover::after {

    left: 0;
}


/* =========================================================
   27. HOVER TEXT
   ========================================================= */

.site-header
.header-nav.dagon-nav
> li:not(.btn-close)
> a:hover {

    color: #ffffff !important;

    background: transparent !important;

    border-color: #ffffff !important;

    box-shadow:
        0 4px 14px rgba(0, 0, 0, 0.25) !important;
}


/* =========================================================
   28. REAL FONT AWESOME ICON
   ========================================================= */

.site-header
.header-nav.dagon-nav
> li
> a
> i {

    display: inline-flex !important;

    width: auto !important;
    height: auto !important;

    align-items: center;
    justify-content: center;

    flex-shrink: 0;

    margin: 0 !important;
    padding: 0 !important;

    color: #111111 !important;

    background: transparent !important;

    font-family: "Font Awesome 6 Free" !important;
    font-weight: 900 !important;

    font-size: 15px;

    line-height: 1;

    position: relative;

    z-index: 2;

    transition:
        color 0.3s ease,
        transform 0.3s ease;
}

.site-header
.header-nav.dagon-nav
> li:not(.btn-close)
> a:hover
> i {

    color: #ffffff !important;

    transform: scale(1.1);
}


/* =========================================================
   29. ACTIVE MENU
   ========================================================= */

.site-header
.header-nav.dagon-nav
> li.active
> a,
.site-header
.header-nav.dagon-nav
> li.current-menu-item
> a {

    color: #111111 !important;

    background: #ffffff !important;

    border-color: transparent !important;
}

.site-header
.header-nav.dagon-nav
> li.active
> a
> i,
.site-header
.header-nav.dagon-nav
> li.current-menu-item
> a
> i {

    color: #111111 !important;
}


/* =========================================================
   30. SUBMENU TOGGLE
   ========================================================= */

.site-header
.header-nav.dagon-nav
> li
> .toggle-submenu {

    display: none !important;
}


/* =========================================================
   31. MOBILE BUTTON - DEFAULT HIDDEN
   ========================================================= */

.site-header .menu-on-mobile {

    display: none;

    color: #111111 !important;

    cursor: pointer;

    text-decoration: none !important;
}

.site-header
.menu-on-mobile
.btn-open-mobile {

    width: 24px;
    height: 24px;

    display: flex;

    flex-direction: column;

    justify-content: center;

    gap: 4px;
}

.site-header
.menu-on-mobile
.btn-open-mobile
> span {

    width: 22px;
    height: 2px;

    display: block;

    background: #111111 !important;

    border-radius: 3px;

    transition:
        transform 0.25s ease,
        background 0.25s ease;
}

.site-header
.menu-on-mobile
.title-menu-mobile {

    color: #111111 !important;

    font-size: 13px;
    font-weight: 700;
}


/* =========================================================
   32. SEARCH HIDDEN ICON
   ========================================================= */

.site-header .search-hidden {
    display: none !important;
}


/* =========================================================
   33. LAPTOP / SMALL DESKTOP
   1200px
   ========================================================= */

@media (max-width: 1199px) {

    .site-header .header-content > .container {
        padding-left: 15px;
        padding-right: 15px;
    }

    .site-header .nav-left {

        flex: 0 0 230px;
        max-width: 230px;
    }

    .site-header
    .nav-left
    .logo
    img {

        width: 150px !important;
        max-width: 150px !important;
    }

    .site-header .nav-mind {
        padding: 0 10px;
    }

    .site-header .categori-search {

        width: 150px !important;
        min-width: 150px !important;
    }

    .site-header
    .header-nav.dagon-nav {

        gap: 6px;
    }

    .site-header
    .header-nav.dagon-nav
    > li:not(.btn-close)
    > a {

        width: 110px;
        padding: 0 10px !important;

        font-size: 11px;
    }

    .site-header
    .header-nav.dagon-nav
    > li
    > a
    > i {

        font-size: 14px;
    }

    .site-header #box-vertical-megamenus {

        width: 205px;
        min-width: 205px;
    }

    .site-header
    #box-vertical-megamenus
    .title {

        width: 205px;
        padding: 0 15px !important;

        font-size: 12px;
    }

    .site-header .nav-right {

        flex: 0 0 90px;
        max-width: 90px;
    }
}


/* =========================================================
   34. TABLET
   991px
   ========================================================= */

@media (max-width: 991px) {

    .site-header .header-content {
        min-height: 110px;
    }

    .site-header
    .header-content
    .row {

        min-height: 110px;
    }

    .site-header .nav-left,
    .site-header .nav-mind,
    .site-header .nav-right {

        min-height: 110px;
    }

    .site-header .nav-left {

        flex: 0 0 190px;
        max-width: 190px;
    }

    .site-header
    .nav-left
    .logo
    img {

        width: 125px !important;
        max-width: 125px !important;
    }

    .site-header .categori-search {

        width: 120px !important;
        min-width: 120px !important;
    }

    .site-header
    .categori-search
    .chosen-container-single
    .chosen-single {

        font-size: 11px;
        padding-left: 10px;
        padding-right: 25px;
    }

    .site-header
    .form-search
    .form-control {

        font-size: 11px;
    }

    .site-header
    .form-search
    .btn-search {

        width: 48px !important;
        min-width: 48px !important;
    }

    .site-header
    .header-nav.dagon-nav {

        gap: 4px;
    }

    .site-header
    .header-nav.dagon-nav
    > li:not(.btn-close)
    > a {

        width: 90px;
        padding: 0 7px !important;

        font-size: 9px;
    }

    .site-header
    .header-nav.dagon-nav
    > li
    > a
    > i {

        font-size: 12px;
    }

    .site-header #box-vertical-megamenus {

        width: 180px;
        min-width: 180px;
    }

    .site-header
    #box-vertical-megamenus
    .title {

        width: 180px;

        padding: 0 10px !important;

        font-size: 10px;

        gap: 7px;
    }

    .site-header
    #box-vertical-megamenus
    .btn-open-mobile {

        width: 17px;
    }

    .site-header
    #box-vertical-megamenus
    .btn-open-mobile > span {

        width: 17px;
    }
}


/* =========================================================
   35. MOBILE
   767px
   IMPORTANT:
   JS uses .header-nav.has-open
   ========================================================= */

@media (max-width: 767px) {

    /* -------------------------
       TOP HEADER
       ------------------------- */

    .site-header .header-content {

        min-height: auto;

        background: linear-gradient(
            90deg,
            #1e5666,
            #39cbd7,
            #1e5666
        ) !important;
    }

    .site-header
    .header-content
    > .container {

        width: 100%;

        padding: 0 10px;
    }

    .site-header
    .header-content
    .row {

        width: 100%;

        min-height: 72px;

        margin: 0;

        display: flex;

        align-items: center;
    }


    /* -------------------------
       LOGO
       ------------------------- */

    .site-header .nav-left {

        width: auto;

        min-height: 72px;

        padding: 8px 5px;

        flex: 0 0 auto;

        max-width: none;

        display: flex;

        align-items: center;

        justify-content: flex-start;
    }

    .site-header
    .nav-left
    .logo
    img {

        width: 105px !important;
        max-width: 105px !important;
    }


    /* -------------------------
       SEARCH
       ------------------------- */

    .site-header .nav-mind {

        display: none !important;
    }


    /* -------------------------
       ADMIN
       ------------------------- */

    .site-header .nav-right {

        width: auto;

        min-height: 72px;

        padding: 5px 3px;

        margin-left: auto;

        flex: 0 0 auto;

        max-width: none;

        display: flex;

        align-items: center;

        justify-content: center;
    }

    .site-header
    .block-minicart
    > .minicart {

        display: flex !important;

        flex-direction: column;

        align-items: center;

        justify-content: center;
    }

    .site-header
    .admin-login
    svg {

        width: 25px;
        height: 25px;
    }

    .site-header
    .block-minicart
    p {

        margin: 2px 0 0 0 !important;

        font-size: 10px;

        color: #111111 !important;
    }


    /* -------------------------
       MAIN BAR
       ------------------------- */

    .site-header .header-menu-bar {

        height: 55px;

        min-height: 55px;
    }

    .site-header .header-menu-nav {

        height: 55px;

        min-height: 55px;
    }

    .site-header
    .header-menu-nav
    > .container {

        width: 100%;

        padding: 0 10px;
    }

    .site-header .header-menu-nav-inner {

        width: 100%;

        height: 55px;

        min-height: 55px;

        display: flex;

        align-items: center;

        justify-content: space-between;
    }


    /* -------------------------
       ALL DEPARTMENTS
       MOBILE
       ------------------------- */

    .site-header #box-vertical-megamenus {

        width: auto;

        min-width: auto;

        height: 55px;

        flex: 1 1 auto;
    }

    .site-header
    #box-vertical-megamenus
    .title {

        width: 100%;

        height: 55px;

        padding: 0 12px !important;

        font-size: 11px;

        gap: 8px;

        justify-content: flex-start;
    }

    .site-header
    #box-vertical-megamenus
    .btn-open-mobile {

        width: 18px;

        height: 18px;
    }

    .site-header
    #box-vertical-megamenus
    .btn-open-mobile > span {

        width: 18px;

        height: 2px;
    }


    /* -------------------------
       DEPARTMENT DROPDOWN
       ------------------------- */

    .site-header
    #box-vertical-megamenus
    .vertical-menu-content {

        top: 55px !important;

        left: 0 !important;

        width: 100vw !important;

        max-width: 100vw !important;
    }

    .site-header
    #box-vertical-megamenus
    .vertical-menu-list
    > li
    > a {

        min-height: 44px;

        padding: 11px 15px !important;

        font-size: 12px;
    }


    /* -------------------------
       MOBILE MENU BUTTON
       ------------------------- */

    .site-header .menu-on-mobile {

        display: flex !important;

        width: 48px;

        height: 45px;

        margin-left: 8px;

        padding: 0;

        align-items: center;

        justify-content: center;

        flex-direction: column;

        gap: 3px;

        background: #ffffff !important;

        border-radius: 7px;

        position: relative;

        z-index: 1000001;
    }

    .site-header
    .menu-on-mobile
    .btn-open-mobile {

        width: 23px;

        height: 19px;

        gap: 4px;
    }

    .site-header
    .menu-on-mobile
    .btn-open-mobile > span {

        width: 23px;

        height: 2px;

        background: #111111 !important;
    }

    .site-header
    .menu-on-mobile
    .title-menu-mobile {

        display: none !important;
    }


    /* -------------------------
       MENU BUTTON ACTIVE
       ------------------------- */

    .site-header
    .menu-on-mobile.active {

        background: #111111 !important;
    }

    .site-header
    .menu-on-mobile.active
    .btn-open-mobile > span {

        background: #39cbd7 !important;
    }


    /* -------------------------
       MAIN MENU
       CLOSED
       ------------------------- */

    .site-header
    .header-menu {

        width: 100%;

        height: auto;

        min-height: 0;

        margin: 0;

        padding: 0;

        display: block;

        position: absolute;

        top: 55px;

        left: 0;

        z-index: 1000000;

        background: transparent !important;
    }

    .site-header
    .header-nav.dagon-nav {

        width: 100% !important;

        height: auto !important;

        min-height: 0 !important;

        margin: 0 !important;

        padding: 10px !important;

        display: none !important;

        flex-direction: column !important;

        align-items: stretch !important;

        justify-content: flex-start !important;

        gap: 5px !important;

        background: #ffffff !important;

        border-top: 1px solid #39cbd7 !important;

        box-shadow:
            0 12px 30px rgba(0, 0, 0, 0.20);

        overflow-y: auto;

        max-height: calc(100vh - 127px);

        position: relative;

        z-index: 1000000;
    }


    /* -------------------------
       MAIN MENU
       OPEN
       JS CLASS = has-open
       ------------------------- */

    .site-header
    .header-nav.dagon-nav.has-open {

        display: flex !important;

        flex-direction: column !important;

        align-items: stretch !important;

        justify-content: flex-start !important;
    }


    /* -------------------------
       CLOSE BUTTON
       ------------------------- */

    .site-header
    .header-nav.dagon-nav
    > li.btn-close {

        width: 100%;

        height: 35px;

        min-height: 35px;

        display: flex !important;

        align-items: center;

        justify-content: flex-end;

        padding: 0 8px !important;

        background: #ffffff !important;
    }

    .site-header
    .header-nav.dagon-nav
    > li.btn-close
    i {

        color: #111111 !important;

        font-size: 18px;
    }


    /* -------------------------
       MOBILE MENU ITEMS
       ------------------------- */

    .site-header
    .header-nav.dagon-nav
    > li:not(.btn-close) {

        width: 100% !important;

        height: auto !important;

        min-height: 0 !important;

        margin: 0 !important;

        padding: 0 !important;

        display: block !important;

        flex: none !important;

        background: transparent !important;
    }


    /* -------------------------
       MOBILE MENU LINKS
       ------------------------- */

    .site-header
    .header-nav.dagon-nav
    > li:not(.btn-close)
    > a {

        width: 100% !important;

        max-width: none !important;

        height: 48px !important;

        min-height: 48px !important;

        margin: 0 !important;

        padding: 0 15px !important;

        display: flex !important;

        align-items: center !important;

        justify-content: flex-start !important;

        gap: 12px !important;

        border-radius: 7px !important;

        border: 1px solid #eeeeee !important;

        background: #ffffff !important;

        color: #111111 !important;

        font-size: 14px !important;

        font-weight: 700 !important;

        text-transform: none !important;

        white-space: nowrap !important;

        position: relative !important;

        overflow: hidden !important;
    }


    /* -------------------------
       MOBILE ICON
       ------------------------- */

    .site-header
    .header-nav.dagon-nav
    > li:not(.btn-close)
    > a
    > i {

        width: 25px !important;

        min-width: 25px !important;

        margin: 0 !important;

        color: #111111 !important;

        font-size: 17px !important;

        position: relative;

        z-index: 2;
    }


    /* -------------------------
       MOBILE HOVER
       ------------------------- */

    .site-header
    .header-nav.dagon-nav
    > li:not(.btn-close)
    > a::after {

        background: linear-gradient(
            90deg,
            #111111,
            #39cbd7,
            #111111
        );

        z-index: 0;
    }

    .site-header
    .header-nav.dagon-nav
    > li:not(.btn-close)
    > a:hover {

        color: #ffffff !important;

        background: transparent !important;

        border-color: #39cbd7 !important;
    }

    .site-header
    .header-nav.dagon-nav
    > li:not(.btn-close)
    > a:hover
    > i {

        color: #ffffff !important;

        transform: scale(1.08);
    }


    /* -------------------------
       MOBILE LINK TEXT
       ------------------------- */

    .site-header
    .header-nav.dagon-nav
    > li:not(.btn-close)
    > a
    > span {

        position: relative;

        z-index: 2;

        color: inherit !important;
    }


    /* -------------------------
       SUBMENU ARROW
       ------------------------- */

    .site-header
    .header-nav.dagon-nav
    > li
    > .toggle-submenu {

        display: none !important;
    }
}


/* =========================================================
   36. SMALL MOBILE
   480px
   ========================================================= */

@media (max-width: 480px) {

    .site-header
    .header-content
    > .container {

        padding: 0 7px;
    }

    .site-header
    .nav-left
    .logo
    img {

        width: 88px !important;
        max-width: 88px !important;
    }

    .site-header .nav-right {

        padding-right: 2px;
    }

    .site-header
    .admin-login
    svg {

        width: 23px;
        height: 23px;
    }

    .site-header
    .block-minicart
    p {

        font-size: 9px;
    }

    .site-header
    .header-menu-nav
    > .container {

        padding: 0 7px;
    }

    .site-header
    #box-vertical-megamenus
    .title {

        padding: 0 10px !important;

        font-size: 10px;
    }

    .site-header
    #box-vertical-megamenus
    .title-menu {

        font-size: 10px !important;
    }

    .site-header .menu-on-mobile {

        width: 43px;

        height: 43px;

        margin-left: 5px;
    }

    .site-header
    .menu-on-mobile
    .btn-open-mobile {

        width: 21px;
    }

    .site-header
    .menu-on-mobile
    .btn-open-mobile > span {

        width: 21px;
    }

    .site-header
    .header-nav.dagon-nav {

        padding: 8px !important;

        gap: 4px !important;
    }

    .site-header
    .header-nav.dagon-nav
    > li:not(.btn-close)
    > a {

        height: 46px !important;

        min-height: 46px !important;

        padding: 0 13px !important;

        font-size: 13px !important;
    }

    .site-header
    .header-nav.dagon-nav
    > li:not(.btn-close)
    > a
    > i {

        width: 23px !important;

        min-width: 23px !important;

        font-size: 16px !important;
    }
}


/* =========================================================
   37. VERY SMALL MOBILE
   360px
   ========================================================= */

@media (max-width: 360px) {

    .site-header
    .nav-left
    .logo
    img {

        width: 78px !important;
        max-width: 78px !important;
    }

    .site-header
    #box-vertical-megamenus
    .title {

        padding: 0 8px !important;

        gap: 6px;
    }

    .site-header
    #box-vertical-megamenus
    .title-menu {

        font-size: 9px !important;
    }

    .site-header .menu-on-mobile {

        width: 40px;

        height: 40px;
    }

    .site-header
    .header-nav.dagon-nav
    > li:not(.btn-close)
    > a {

        height: 44px !important;

        min-height: 44px !important;

        font-size: 12px !important;
    }
}


/* =========================================================
   38. FINAL SAFETY OVERRIDES
   ========================================================= */

/* Remove accidental inline margin from Admin */
.site-header .block-minicart p[style] {
    margin-right: 0 !important;
}

/* Search border clean */
.site-header .form-search .form-control:focus {
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
}

/* Keep category and search attached */
.site-header .categori-search,
.site-header .form-search,
.site-header .form-search .box-group {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
}

/* Keep dropdown above everything */
.site-header .categori-search,
.site-header .categori-search .chosen-container,
.site-header .categori-search .chosen-drop,
.site-header #box-vertical-megamenus,
.site-header #box-vertical-megamenus .vertical-menu-content {
    z-index: 999999 !important;
}




/* ============================================================
   END OF MOBI WORLD NAV1.CSS
   ============================================================ */

   /* =========================================================
   MOBILE NAVIGATION - FINAL FIX
   Paste this CSS at the VERY END of nav1.css
   Do not remove your existing JavaScript
   ========================================================= */

@media (max-width: 767px) {

    /* =====================================================
       1. BODY / PAGE
       ===================================================== */

    html,
    body {
        width: 100%;
        max-width: 100%;
        overflow-x: hidden !important;
    }

    body.menu-open {
        overflow-x: hidden !important;
    }


    /* =====================================================
       2. MAIN HEADER
       ===================================================== */

    .site-header {
        width: 100% !important;
        max-width: 100% !important;
        position: relative !important;
        z-index: 99999 !important;
    }


    /* =====================================================
       3. TOP HEADER ROW
       ===================================================== */

    .site-header .header-menu-nav {
        width: 100% !important;
        min-height: 72px !important;
        height: auto !important;
        padding: 0 !important;
        margin: 0 !important;

        display: block !important;

        position: relative !important;
        z-index: 99999 !important;

        background: linear-gradient(
            135deg,
            #17c5e8,
            #1e5666,
            #17c5e8
        ) !important;
    }


    .site-header .header-menu-nav-inner {
        width: 100% !important;
        max-width: 100% !important;
        min-height: 72px !important;

        padding: 0 12px !important;
        margin: 0 !important;

        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;

        gap: 8px !important;

        position: relative !important;
        box-sizing: border-box !important;
    }


    /* =====================================================
       4. LOGO
       ===================================================== */

    .site-header .header-logo,
    .site-header .logo {
        flex: 0 0 auto !important;

        width: auto !important;
        max-width: 45px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }


    .site-header .header-logo img,
    .site-header .logo img {
        display: block !important;

        width: 38px !important;
        max-width: 38px !important;
        height: auto !important;

        margin: 0 !important;
    }


    /* =====================================================
       5. MOBI WORLD BRAND
       ===================================================== */

    .mobi-world-brand {
        flex: 1 1 auto !important;

        min-width: 0 !important;
        max-width: none !important;

        margin: 0 !important;
        padding: 0 5px !important;

        display: flex !important;
        flex-direction: column !important;

        align-items: flex-start !important;
        justify-content: center !important;

        line-height: 1 !important;
    }


    .mobi-world-brand span {
        display: block !important;

        margin: 0 !important;
        padding: 0 !important;

        font-size: 16px !important;
        line-height: 20px !important;

        font-weight: 800 !important;

        white-space: nowrap !important;

        color: #111111 !important;

        background: none !important;
        -webkit-text-fill-color: #111111 !important;
    }


    .mobi-world-brand p {
        display: block !important;

        margin: 2px 0 0 0 !important;
        padding: 0 !important;

        font-size: 9px !important;
        line-height: 11px !important;

        font-weight: 500 !important;

        color: #ffffff !important;

        white-space: nowrap !important;
    }


    /* =====================================================
       6. SEARCH BAR
       Hide desktop search on mobile
       ===================================================== */

    .site-header .block-search {
        display: none !important;

        width: auto !important;
        margin: 0 !important;
        padding: 0 !important;
    }


    .site-header .categori-search {
        display: none !important;
    }


    /* =====================================================
       7. ALL DEPARTMENTS
       Hide desktop department menu on mobile
       ===================================================== */

    .site-header .block-nav-categori,
    .site-header .box-vertical-megamenus {
        display: none !important;
    }


    /* =====================================================
       8. ADMIN
       ===================================================== */

    .site-header .block-user,
    .site-header .header-user,
    .site-header .admin-login {
        flex: 0 0 auto !important;

        width: auto !important;
        max-width: 80px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;
        align-items: center !important;
        justify-content: center !important;

        position: relative !important;
        z-index: 100000 !important;
    }


    .site-header .block-user a,
    .site-header .header-user a,
    .site-header .admin-login a {
        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        gap: 3px !important;

        margin: 0 !important;
        padding: 4px !important;

        color: #111111 !important;

        text-decoration: none !important;

        white-space: nowrap !important;
    }


    .site-header .block-user i,
    .site-header .header-user i,
    .site-header .admin-login i {
        display: inline-flex !important;

        width: auto !important;
        height: auto !important;

        margin: 0 !important;

        font-size: 18px !important;

        color: #111111 !important;
    }


    .site-header .block-user span,
    .site-header .header-user span,
    .site-header .admin-login span {
        display: inline-block !important;

        margin: 0 !important;

        font-size: 11px !important;
        line-height: 15px !important;

        color: #111111 !important;
    }


    /* =====================================================
       9. MOBILE MENU BUTTON
       IMPORTANT:
       Do NOT use generic span rules here
       ===================================================== */

    .site-header .menu-on-mobile {
        flex: 0 0 42px !important;

        width: 42px !important;
        min-width: 42px !important;
        height: 42px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        position: relative !important;

        cursor: pointer !important;

        z-index: 100001 !important;

        background: rgba(255, 255, 255, 0.95) !important;

        border-radius: 8px !important;

        box-sizing: border-box !important;
    }


    /* =====================================================
       10. HAMBURGER THREE LINES
       This fixes the hidden 3 icons/lines
       ===================================================== */

    .site-header .menu-on-mobile .btn-open-mobile {
        width: 24px !important;
        height: 20px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;

        flex-direction: column !important;
        align-items: center !important;
        justify-content: space-between !important;

        position: relative !important;

        visibility: visible !important;
        opacity: 1 !important;

        box-sizing: border-box !important;
    }


    .site-header .menu-on-mobile .btn-open-mobile > span {
        display: block !important;

        width: 24px !important;
        min-width: 24px !important;
        max-width: 24px !important;

        height: 3px !important;
        min-height: 3px !important;
        max-height: 3px !important;

        margin: 0 !important;
        padding: 0 !important;

        background: #111111 !important;

        border-radius: 10px !important;

        opacity: 1 !important;
        visibility: visible !important;

        position: relative !important;

        transform: none !important;
    }


    /* Hide only the "Main menu" text */
    .site-header .menu-on-mobile .title-menu-mobile {
        display: none !important;
    }


    /* =====================================================
       11. MOBILE MAIN NAV
       ===================================================== */

    .site-header .header-menu {
        width: 100% !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        z-index: 99998 !important;
    }


    /* Default: menu closed */
    .site-header .header-menu .header-nav.dagon-nav {
        display: none !important;
    }


    /* =====================================================
       12. MENU OPEN
       JS adds .has-open to .header-nav
       ===================================================== */

    .site-header .header-menu .header-nav.dagon-nav.has-open {
        display: flex !important;

        flex-direction: column !important;

        width: calc(100% - 20px) !important;
        height: auto !important;

        max-height: calc(100vh - 85px) !important;

        margin: 0 10px !important;
        padding: 8px !important;

        overflow-y: auto !important;
        overflow-x: hidden !important;

        position: absolute !important;

        top: 0 !important;
        left: 0 !important;

        background: #ffffff !important;

        border-radius: 0 0 12px 12px !important;

        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.20) !important;

        z-index: 999999 !important;

        visibility: visible !important;
        opacity: 1 !important;

        transform: none !important;

        transition: none !important;
    }


    /* =====================================================
       13. CLOSE BUTTON
       ===================================================== */

    .site-header .header-nav.dagon-nav .btn-close {
        display: flex !important;

        width: 100% !important;
        height: 38px !important;

        margin: 0 0 5px 0 !important;
        padding: 0 8px !important;

        align-items: center !important;
        justify-content: flex-end !important;

        list-style: none !important;

        background: transparent !important;

        border: none !important;
    }


    .site-header .header-nav.dagon-nav .btn-close i {
        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        width: 32px !important;
        height: 32px !important;

        font-size: 22px !important;

        color: #111111 !important;

        cursor: pointer !important;
    }


    /* =====================================================
       14. MENU ITEMS
       ===================================================== */

    .site-header .header-nav.dagon-nav > li {
        display: block !important;

        width: 100% !important;
        min-height: 52px !important;

        margin: 0 !important;
        padding: 0 !important;

        position: relative !important;

        list-style: none !important;

        border-bottom: 1px solid #eeeeee !important;
    }


    .site-header .header-nav.dagon-nav > li:last-child {
        border-bottom: none !important;
    }


    /* =====================================================
       15. MENU LINKS
       ===================================================== */

    .site-header .header-nav.dagon-nav > li > a {
        display: flex !important;

        width: 100% !important;
        min-height: 52px !important;

        margin: 0 !important;
        padding: 0 14px !important;

        align-items: center !important;

        justify-content: flex-start !important;

        gap: 14px !important;

        color: #111111 !important;

        background: #ffffff !important;

        text-decoration: none !important;

        font-size: 15px !important;
        font-weight: 600 !important;

        line-height: 1 !important;

        border-radius: 7px !important;

        position: relative !important;

        z-index: 2 !important;

        box-sizing: border-box !important;
    }


    /* =====================================================
       16. REAL FONT AWESOME ICONS
       ===================================================== */

    .site-header .header-nav.dagon-nav > li > a > i {
        display: inline-flex !important;

        flex: 0 0 22px !important;

        width: 22px !important;
        min-width: 22px !important;

        height: 22px !important;

        align-items: center !important;
        justify-content: center !important;

        margin: 0 !important;
        padding: 0 !important;

        font-size: 17px !important;

        line-height: 22px !important;

        color: #111111 !important;

        visibility: visible !important;
        opacity: 1 !important;
    }


    /* Text */
    .site-header .header-nav.dagon-nav > li > a > span {
        display: inline-block !important;

        margin: 0 !important;
        padding: 0 !important;

        color: #111111 !important;

        font-size: 15px !important;

        line-height: 20px !important;

        visibility: visible !important;
        opacity: 1 !important;
    }


    /* =====================================================
       17. REMOVE DESKTOP HOVER EFFECT ON MOBILE
       This prevents menu disappearing when cursor moves
       ===================================================== */

    .site-header .header-nav.dagon-nav > li:hover > a {
        background: #ffffff !important;

        color: #111111 !important;
    }


    .site-header .header-nav.dagon-nav > li:hover > a > i {
        color: #111111 !important;
    }


    .site-header .header-nav.dagon-nav > li:hover > a > span {
        color: #111111 !important;
    }


    /* Disable sliding desktop hover pseudo element */
    .site-header .header-nav.dagon-nav > li > a::before,
    .site-header .header-nav.dagon-nav > li > a::after {
        display: none !important;
        content: none !important;
    }


    /* =====================================================
       18. SUBMENU TOGGLE ARROW
       ===================================================== */

    .site-header .header-nav.dagon-nav > li > .toggle-submenu {
        display: none !important;
    }


    /* =====================================================
       19. IMPORTANT:
       Remove mouse-hover based menu states
       ===================================================== */

    body.is-show-menu .site-header .header-nav.dagon-nav {
        display: none !important;
    }


    body.is-show-menu .site-header .header-nav.dagon-nav.has-open {
        display: flex !important;
    }


    /* =====================================================
       20. MENU OPEN SHOULD STAY OPEN
       Even when mouse moves outside
       ===================================================== */

    body.menu-open .site-header .header-nav.dagon-nav.has-open {
        display: flex !important;

        visibility: visible !important;
        opacity: 1 !important;

        transform: none !important;
    }


    /* =====================================================
       21. WHATSAPP BUTTON
       Keep it below menu
       ===================================================== */

    .site-footer + *,
    .whatsapp-float,
    .whatsapp-button,
    .float-whatsapp {
        z-index: 1000 !important;
    }


    /* =====================================================
       22. PREVENT OTHER CONTENT FROM COVERING MENU
       ===================================================== */

    .site-header,
    .site-header * {
        box-sizing: border-box;
    }


    /* =====================================================
       23. SMALL MOBILE DEVICES
       ===================================================== */

    @media (max-width: 380px) {

        .site-header .header-menu-nav-inner {
            padding-left: 8px !important;
            padding-right: 8px !important;

            gap: 5px !important;
        }


        .mobi-world-brand span {
            font-size: 14px !important;
        }


        .mobi-world-brand p {
            font-size: 8px !important;
        }


        .site-header .block-user {
            max-width: 65px !important;
        }


        .site-header .block-user span,
        .site-header .header-user span,
        .site-header .admin-login span {
            font-size: 10px !important;
        }


        .site-header .menu-on-mobile {
            width: 38px !important;
            min-width: 38px !important;
            height: 38px !important;
        }


        .site-header .menu-on-mobile .btn-open-mobile {
            width: 22px !important;
        }


        .site-header .menu-on-mobile .btn-open-mobile > span {
            width: 22px !important;
            min-width: 22px !important;
            max-width: 22px !important;
        }
    }
}

/* =========================================================
   MOBILE HEADER + MENU FINAL FIX
   HEADER + OPEN MENU STAY AT TOP
   ========================================================= */

@media (max-width: 767px) {

    /* =====================================================
       1. MOBILE HEADER STAYS AT TOP
       ===================================================== */

    

    /* =====================================================
       2. HEADER TOP AREA
       ===================================================== */

    .site-header .header-menu-nav {
        position: relative !important;

        width: 100% !important;

        min-height: 72px !important;
        height: 72px !important;

        margin: 0 !important;
        padding: 0 !important;

        z-index: 999999 !important;
    }


    .site-header .header-menu-nav-inner {
        position: relative !important;

        width: 100% !important;
        height: 72px !important;
        min-height: 72px !important;

        display: flex !important;

        align-items: center !important;

        margin: 0 !important;

        padding: 0 10px !important;

        box-sizing: border-box !important;

        z-index: 999999 !important;
    }


    /* =====================================================
       3. MAIN MENU CONTAINER
       ===================================================== */

    .site-header .header-menu {

        position: static !important;

        width: 100% !important;

        height: 0 !important;

        margin: 0 !important;
        padding: 0 !important;

        z-index: 999999 !important;
    }


    /* =====================================================
       4. MENU CLOSED
       ===================================================== */

    .site-header .header-menu .header-nav.dagon-nav {

        display: none !important;
    }


    /* =====================================================
       5. MENU OPEN
       FIXED UNDER THE HEADER
       ===================================================== */

    .site-header .header-menu .header-nav.dagon-nav.has-open {

        display: flex !important;

        flex-direction: column !important;

        position: fixed !important;

        top: 72px !important;

        left: 8px !important;
        right: 8px !important;

        width: auto !important;

        height: auto !important;

        max-height: calc(100vh - 72px) !important;

        margin: 0 !important;

        padding: 8px !important;

        background: #ffffff !important;

        border-radius: 0 0 12px 12px !important;

        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25) !important;

        overflow-x: hidden !important;

        overflow-y: auto !important;

        z-index: 99999999 !important;

        visibility: visible !important;

        opacity: 1 !important;

        transform: none !important;

        transition: none !important;

        box-sizing: border-box !important;
    }


    /* =====================================================
       6. MENU CLOSE BUTTON
       ===================================================== */

    .site-header .header-nav.dagon-nav.has-open > .btn-close {

        display: flex !important;

        width: 100% !important;

        height: 42px !important;
        min-height: 42px !important;

        flex: 0 0 42px !important;

        align-items: center !important;

        justify-content: flex-end !important;

        margin: 0 !important;

        padding: 0 5px !important;

        background: #ffffff !important;

        border: none !important;
    }


    .site-header .header-nav.dagon-nav.has-open > .btn-close i {

        display: flex !important;

        align-items: center !important;

        justify-content: center !important;

        width: 32px !important;

        height: 32px !important;

        margin: 0 !important;

        font-size: 22px !important;

        color: #111111 !important;
    }


    /* =====================================================
       7. MENU ITEMS
       ===================================================== */

    .site-header .header-nav.dagon-nav.has-open > li:not(.btn-close) {

        display: block !important;

        width: 100% !important;

        height: 50px !important;

        min-height: 50px !important;

        flex: 0 0 50px !important;

        margin: 0 !important;

        padding: 0 !important;

        border-bottom: 1px solid #eeeeee !important;

        list-style: none !important;
    }


    /* =====================================================
       8. MENU LINKS
       ===================================================== */

    .site-header .header-nav.dagon-nav.has-open > li:not(.btn-close) > a {

        display: flex !important;

        align-items: center !important;

        justify-content: flex-start !important;

        width: 100% !important;

        height: 50px !important;

        min-height: 50px !important;

        margin: 0 !important;

        padding: 0 14px !important;

        gap: 14px !important;

        background: #ffffff !important;

        color: #111111 !important;

        font-size: 15px !important;

        font-weight: 600 !important;

        line-height: 1 !important;

        text-decoration: none !important;

        border-radius: 6px !important;

        box-sizing: border-box !important;
    }


    /* =====================================================
       9. MENU ICONS
       ===================================================== */

    .site-header .header-nav.dagon-nav.has-open > li > a > i {

        display: flex !important;

        align-items: center !important;

        justify-content: center !important;

        width: 22px !important;

        min-width: 22px !important;

        height: 22px !important;

        margin: 0 !important;

        padding: 0 !important;

        font-size: 17px !important;

        color: #111111 !important;

        opacity: 1 !important;

        visibility: visible !important;
    }


    /* =====================================================
       10. MENU TEXT
       ===================================================== */

    .site-header .header-nav.dagon-nav.has-open > li > a > span {

        display: inline-block !important;

        margin: 0 !important;

        padding: 0 !important;

        font-size: 15px !important;

        line-height: 20px !important;

        color: #111111 !important;

        opacity: 1 !important;

        visibility: visible !important;
    }


    /* =====================================================
       11. DISABLE OLD DESKTOP HOVER
       ===================================================== */

    .site-header .header-nav.dagon-nav.has-open > li:hover > a {

        background: #ffffff !important;

        color: #111111 !important;
    }


    .site-header .header-nav.dagon-nav.has-open > li:hover > a > i {

        color: #111111 !important;
    }


    .site-header .header-nav.dagon-nav.has-open > li:hover > a > span {

        color: #111111 !important;
    }


    .site-header .header-nav.dagon-nav.has-open > li > a::before,
    .site-header .header-nav.dagon-nav.has-open > li > a::after {

        display: none !important;

        content: none !important;
    }


    /* =====================================================
       12. PAGE CONTENT STAYS BELOW HEADER + MENU
       ===================================================== */

    .site-header {
        isolation: isolate !important;
    }


    /* =====================================================
       13. IMPORTANT
       BODY MUST NOT MOVE THE HEADER
       ===================================================== */

    body {
        overflow-x: hidden !important;
    }


    /* =====================================================
       14. WHEN MENU IS OPEN
       PAGE CAN SCROLL NORMALLY
       MENU STAYS ABOVE IT
       ===================================================== */

    body.menu-open {

        overflow-x: hidden !important;

        overflow-y: auto !important;
    }


    /* =====================================================
       15. SMALL MOBILE
       ===================================================== */

    @media (max-width: 380px) {

        .site-header .header-menu-nav {

            height: 68px !important;

            min-height: 68px !important;
        }


        .site-header .header-menu-nav-inner {

            height: 68px !important;

            min-height: 68px !important;
        }


        .site-header .header-nav.dagon-nav.has-open {

            top: 68px !important;

            max-height: calc(100vh - 68px) !important;
        }
    }
}







/* =========================================================
   MOBI WORLD MOBILE HEADER + HAMBURGER
   FINAL FIX
   DO NOT CHANGE HTML / JS
   ========================================================= */

@media (max-width: 767px) {

    /* =====================================================
       1. MAIN HEADER
       Header always stays at top
       ===================================================== */

    .site-header {
        position: sticky !important;

        top: 0 !important;

        width: 100% !important;

        z-index: 999999 !important;

        margin: 0 !important;
        padding: 0 !important;

        isolation: isolate !important;
    }


    /* =====================================================
       2. HEADER CONTENT
       Logo + Mobi World + Admin + Search
       ===================================================== */

    .site-header .header-content {

        position: relative !important;

        width: 100% !important;

        height: 255px !important;
        min-height: 255px !important;

        margin: 0 !important;
        padding: 0 !important;

        z-index: 999999 !important;

        background: linear-gradient(
            135deg,
            #17c5e8 0%,
            #1e5666 55%,
            #17c5e8 100%
        ) !important;
    }


    .site-header .header-content > .container {

        width: 100% !important;
        max-width: 100% !important;

        height: 255px !important;

        margin: 0 !important;

        padding: 0 10px !important;
    }


    .site-header .header-content .row {

        position: relative !important;

        width: 100% !important;

        height: 255px !important;
        min-height: 255px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: block !important;
    }


    /* =====================================================
       3. LOGO
       ===================================================== */

    .site-header .nav-left {

        position: absolute !important;

        left: 15px !important;
        top: 28px !important;

        width: 80px !important;
        max-width: 80px !important;

        height: 55px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;

        align-items: center !important;
        justify-content: flex-start !important;

        z-index: 1000000 !important;
    }


    .site-header .nav-left .logo {

        display: flex !important;

        align-items: center !important;

        width: auto !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    .site-header .nav-left .logo img {

        display: block !important;

        width: 75px !important;
        max-width: 75px !important;

        height: auto !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    /* =====================================================
       4. MOBI WORLD TEXT
       ===================================================== */

    .site-header .mobi-world-brand {

        position: absolute !important;

        left: 50% !important;
        top: 27px !important;

        transform: translateX(-50%) !important;

        width: max-content !important;
        max-width: 160px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;

        flex-direction: column !important;

        align-items: center !important;

        justify-content: center !important;

        text-align: center !important;

        z-index: 1000000 !important;
    }


    .site-header .mobi-world-brand span {

        display: block !important;

        width: max-content !important;

        margin: 0 !important;
        padding: 0 !important;

        font-family: "Inter", Arial, sans-serif !important;

        font-size: 17px !important;

        font-weight: 800 !important;

        line-height: 20px !important;

        letter-spacing: .4px !important;

        white-space: nowrap !important;

        color: #ffffff !important;

        background: none !important;

        -webkit-text-fill-color: #ffffff !important;
    }


    .site-header .mobi-world-brand p {

        display: block !important;

        margin: 3px 0 0 !important;
        padding: 0 !important;

        font-size: 9px !important;

        font-weight: 600 !important;

        line-height: 11px !important;

        white-space: nowrap !important;

        color: #ffffff !important;

        text-align: center !important;
    }


    /* =====================================================
       5. ADMIN + HAMBURGER
       ===================================================== */

    .site-header .nav-right {

        position: absolute !important;

        right: 12px !important;
        top: 25px !important;

        width: auto !important;

        height: 60px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;

        align-items: center !important;

        justify-content: flex-end !important;

        gap: 8px !important;

        z-index: 1000000 !important;
    }


    /* Admin */

    .site-header .nav-right .block-minicart {

        width: auto !important;

        height: auto !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;

        align-items: center !important;
    }


    .site-header .nav-right .minicart {

        width: auto !important;

        height: auto !important;

        display: flex !important;

        flex-direction: column !important;

        align-items: center !important;

        justify-content: center !important;

        margin: 0 !important;
        padding: 0 !important;

        color: #111111 !important;

        text-decoration: none !important;
    }


    .site-header .nav-right .admin-login {

        display: flex !important;

        width: 28px !important;
        height: 28px !important;

        align-items: center !important;
        justify-content: center !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    .site-header .nav-right .admin-login svg {

        width: 27px !important;
        height: 27px !important;

        color: #111111 !important;

        fill: currentColor !important;
    }


    .site-header .nav-right .minicart p {

        display: block !important;

        margin: 2px 0 0 !important;
        padding: 0 !important;

        font-size: 9px !important;

        line-height: 11px !important;

        color: #111111 !important;

        text-align: center !important;
    }


    /* =====================================================
       6. HAMBURGER BUTTON
       ===================================================== */

    .site-header .menu-on-mobile {

        position: relative !important;

        top: auto !important;
        right: auto !important;
        left: auto !important;

        width: 44px !important;
        height: 44px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;

        align-items: center !important;
        justify-content: center !important;

        cursor: pointer !important;

        background: #111111 !important;

        border-radius: 8px !important;

        z-index: 1000001 !important;

        flex-shrink: 0 !important;
    }


    .site-header .menu-on-mobile .title-menu-mobile {
        display: none !important;
    }


    .site-header .menu-on-mobile .btn-open-mobile {

        width: 27px !important;
        height: 27px !important;

        display: flex !important;

        flex-direction: column !important;

        align-items: center !important;
        justify-content: center !important;

        gap: 5px !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    .site-header .menu-on-mobile
    .btn-open-mobile span {

        display: block !important;

        width: 25px !important;

        height: 3px !important;

        margin: 0 !important;
        padding: 0 !important;

        background: #39cbd7 !important;

        border-radius: 5px !important;
    }


    /* =====================================================
       7. SEARCH
       ===================================================== */

    .site-header .nav-mind {

        position: absolute !important;

        left: 15px !important;
        right: 15px !important;

        top: 120px !important;

        width: auto !important;
        max-width: none !important;

        height: 52px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: block !important;

        z-index: 100000 !important;
    }


    .site-header .block-search {

        width: 100% !important;

        height: 52px !important;

        margin: 0 !important;
        padding: 0 !important;

        display: block !important;
    }


    .site-header .block-search .block-content {

        width: 100% !important;

        height: 52px !important;

        display: flex !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    .site-header .categori-search {

        width: 115px !important;

        min-width: 115px !important;
        max-width: 115px !important;

        height: 52px !important;

        margin: 0 !important;
        padding: 0 !important;

        background: #ffffff !important;

        border: none !important;

        border-radius: 8px 0 0 8px !important;

        overflow: hidden !important;

        z-index: 999999 !important;
    }


    .site-header .categori-search .chosen-container {

        width: 100% !important;

        height: 52px !important;

        margin: 0 !important;
        padding: 0 !important;

        border: none !important;
    }


    .site-header .categori-search
    .chosen-container-single
    .chosen-single {

        width: 100% !important;

        height: 52px !important;

        display: flex !important;

        align-items: center !important;

        margin: 0 !important;

        padding: 0 8px !important;

        border: none !important;

        border-radius: 8px 0 0 8px !important;

        background: #ffffff !important;

        box-shadow: none !important;

        color: #111111 !important;

        font-size: 10px !important;
    }


    .site-header .form-search {

        flex: 1 !important;

        min-width: 0 !important;

        height: 52px !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    .site-header .box-group {

        width: 100% !important;

        height: 52px !important;

        display: flex !important;

        margin: 0 !important;
        padding: 0 !important;

        border: none !important;

        background: #ffffff !important;

        border-radius: 0 8px 8px 0 !important;

        overflow: hidden !important;
    }


    .site-header .box-group .form-control {

        flex: 1 !important;

        min-width: 0 !important;

        height: 52px !important;

        margin: 0 !important;

        padding: 0 10px !important;

        border: none !important;

        outline: none !important;

        box-shadow: none !important;

        font-size: 11px !important;
    }


    .site-header .box-group .btn-search {

        width: 48px !important;

        min-width: 48px !important;

        height: 52px !important;

        display: flex !important;

        align-items: center !important;

        justify-content: center !important;

        margin: 0 !important;
        padding: 0 !important;

        border: none !important;

        background: #39cbd7 !important;

        color: #111111 !important;
    }


    /* =====================================================
       8. IMPORTANT:
       MENU BAR ITSELF MUST NOT CREATE EXTRA SPACE
       ===================================================== */

    .site-header .header-menu-bar {

        position: static !important;

        width: 100% !important;

        height: 0 !important;

        min-height: 0 !important;

        margin: 0 !important;
        padding: 0 !important;

        background: transparent !important;

        border: none !important;

        z-index: 999999 !important;
    }


    .site-header .header-menu-nav {

        position: static !important;

        width: 100% !important;

        height: 0 !important;

        min-height: 0 !important;

        margin: 0 !important;
        padding: 0 !important;

        background: transparent !important;

        border: none !important;

        z-index: 999999 !important;
    }


    .site-header .header-menu-nav > .container {

        width: 100% !important;

        height: 0 !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    .site-header .header-menu-nav-inner {

        width: 100% !important;

        height: 0 !important;

        min-height: 0 !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    /* =====================================================
       9. MENU CLOSED
       ===================================================== */

    .site-header .header-menu {

        display: none !important;

        position: static !important;

        width: 100% !important;

        height: 0 !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    .site-header .header-menu
    .header-nav.dagon-nav {

        display: none !important;
    }


    /* =====================================================
       10. MENU OPEN
       FIXED DIRECTLY BELOW HEADER
       ===================================================== */

    .site-header .header-menu
    .header-nav.dagon-nav.has-open {

        display: flex !important;

        flex-direction: column !important;

        position: fixed !important;

        top: 255px !important;

        left: 10px !important;
        right: 10px !important;

        width: auto !important;

        height: auto !important;

        max-height: calc(100vh - 265px) !important;

        margin: 0 !important;

        padding: 8px !important;

        background: #ffffff !important;

        border-radius: 0 0 12px 12px !important;

        box-shadow: 0 8px 30px rgba(0,0,0,.25) !important;

        overflow-x: hidden !important;

        overflow-y: auto !important;

        z-index: 99999999 !important;

        visibility: visible !important;

        opacity: 1 !important;

        transform: none !important;

        box-sizing: border-box !important;
    }


    /* =====================================================
       11. CLOSE BUTTON
       ===================================================== */

    .site-header .header-nav.dagon-nav.has-open
    > .btn-close {

        display: flex !important;

        width: 100% !important;

        height: 42px !important;

        min-height: 42px !important;

        flex: 0 0 42px !important;

        align-items: center !important;

        justify-content: flex-end !important;

        margin: 0 !important;

        padding: 0 5px !important;

        background: #ffffff !important;

        border: none !important;
    }


    .site-header .header-nav.dagon-nav.has-open
    > .btn-close i {

        display: flex !important;

        align-items: center !important;

        justify-content: center !important;

        width: 32px !important;

        height: 32px !important;

        font-size: 22px !important;

        color: #111111 !important;
    }


    /* =====================================================
       12. MENU ITEMS
       ===================================================== */

    .site-header .header-nav.dagon-nav.has-open
    > li.menu-item-has-children {

        display: block !important;

        width: 100% !important;

        height: 52px !important;

        min-height: 52px !important;

        flex: 0 0 52px !important;

        margin: 0 !important;

        padding: 0 !important;

        background: #ffffff !important;

        border-bottom: 1px solid #eeeeee !important;
    }


    /* =====================================================
       13. MENU LINKS
       ===================================================== */

    .site-header .header-nav.dagon-nav.has-open
    > li.menu-item-has-children > a {

        display: flex !important;

        align-items: center !important;

        width: 100% !important;

        height: 52px !important;

        min-height: 52px !important;

        margin: 0 !important;

        padding: 0 14px !important;

        gap: 14px !important;

        background: #ffffff !important;

        color: #111111 !important;

        font-size: 15px !important;

        font-weight: 600 !important;

        text-decoration: none !important;

        border: none !important;

        box-sizing: border-box !important;
    }


    /* =====================================================
       14. REAL ICONS
       ===================================================== */

    .site-header .header-nav.dagon-nav.has-open
    > li > a > i {

        display: flex !important;

        align-items: center !important;

        justify-content: center !important;

        width: 22px !important;

        min-width: 22px !important;

        height: 22px !important;

        margin: 0 !important;

        font-size: 17px !important;

        color: #111111 !important;
    }


    /* =====================================================
       15. TEXT
       ===================================================== */

    .site-header .header-nav.dagon-nav.has-open
    > li > a {

        line-height: normal !important;
    }


    /* =====================================================
       16. REMOVE OLD HOVER ANIMATION ON MOBILE
       ===================================================== */

    .site-header .header-nav.dagon-nav.has-open
    > li > a::before,

    .site-header .header-nav.dagon-nav.has-open
    > li > a::after {

        display: none !important;

        content: none !important;
    }


    .site-header .header-nav.dagon-nav.has-open
    > li:hover > a {

        background: #ffffff !important;

        color: #111111 !important;
    }


    .site-header .header-nav.dagon-nav.has-open
    > li:hover > a > i {

        color: #111111 !important;
    }


    /* =====================================================
       17. HIDE SUBMENU ARROWS
       ===================================================== */

    .site-header .header-nav.dagon-nav.has-open
    .toggle-submenu {

        display: none !important;
    }


    /* =====================================================
       18. PAGE MUST SCROLL NORMALLY
       HEADER + MENU STAY ABOVE PAGE
       ===================================================== */

    body.menu-open {

        overflow-x: hidden !important;

        overflow-y: auto !important;
    }


    /* =====================================================
       19. SMALL MOBILE
       ===================================================== */

    @media (max-width: 380px) {

        .site-header .header-content {

            height: 235px !important;

            min-height: 235px !important;
        }


        .site-header .header-content > .container,

        .site-header .header-content .row {

            height: 235px !important;

            min-height: 235px !important;
        }


        .site-header .header-menu
        .header-nav.dagon-nav.has-open {

            top: 235px !important;

            max-height: calc(100vh - 245px) !important;
        }


        .site-header .nav-left {

            left: 10px !important;
        }


        .site-header .nav-left .logo img {

            width: 68px !important;

            max-width: 68px !important;
        }


        .site-header .mobi-world-brand span {

            font-size: 15px !important;
        }


        .site-header .nav-right {

            right: 8px !important;
        }
    }
}
/* =========================================================
   MOBILE HAMBURGER MENU - FINAL FIX
   IMPORTANT: PASTE THIS AT THE VERY END OF CSS
   ========================================================= */

@media (max-width: 767px) {

    /* -----------------------------------------------------
       HEADER
       ----------------------------------------------------- */

    .site-header {
        position: static !important;
        top: 0 !important;
        width: 100% !important;
     
    }


    /* -----------------------------------------------------
       VERY IMPORTANT
       DO NOT HIDE .header-menu
       ----------------------------------------------------- */

    .site-header .header-menu {
        display: block !important;

        position: static !important;

        width: 100% !important;

        height: 0 !important;
        min-height: 0 !important;

        margin: 0 !important;
        padding: 0 !important;

        background: transparent !important;

        border: 0 !important;

        overflow: visible !important;

        z-index: 999999 !important;
    }


    /* -----------------------------------------------------
       MENU CLOSED
       ----------------------------------------------------- */

    .site-header .header-menu
    .header-nav.dagon-nav {
        display: none !important;
    }


    /* -----------------------------------------------------
       MENU OPEN
       JS ADDS .has-open
       ----------------------------------------------------- */

    .site-header .header-menu
    .header-nav.dagon-nav.has-open {

        display: flex !important;

        flex-direction: column !important;

        position: fixed !important;

        top: 255px !important;

        left: 10px !important;
        right: 10px !important;

        width: auto !important;

        height: auto !important;

        max-height: calc(100vh - 265px) !important;

        margin: 0 !important;

        padding: 8px !important;

        background: #ffffff !important;

        border-radius: 0 0 12px 12px !important;

        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25) !important;

        overflow-x: hidden !important;

        overflow-y: auto !important;

        visibility: visible !important;

        opacity: 1 !important;

        transform: none !important;

        z-index: 99999999 !important;

        box-sizing: border-box !important;
    }


    /* -----------------------------------------------------
       CLOSE BUTTON
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav.has-open
    > .btn-close {

        display: flex !important;

        width: 100% !important;

        height: 42px !important;

        min-height: 42px !important;

        align-items: center !important;

        justify-content: flex-end !important;

        margin: 0 !important;

        padding: 0 5px !important;

        background: #ffffff !important;

        border: 0 !important;
    }


    .site-header .header-nav.dagon-nav.has-open
    > .btn-close i {

        display: flex !important;

        width: 32px !important;

        height: 32px !important;

        align-items: center !important;

        justify-content: center !important;

        font-size: 22px !important;

        color: #111111 !important;
    }


    /* -----------------------------------------------------
       MENU ITEMS
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav.has-open
    > li.menu-item-has-children {

        display: block !important;

        width: 100% !important;

        height: 52px !important;

        min-height: 52px !important;

        margin: 0 !important;

        padding: 0 !important;

        border-bottom: 1px solid #eeeeee !important;

        background: #ffffff !important;

        flex: 0 0 52px !important;
    }


    /* -----------------------------------------------------
       MENU LINKS
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav.has-open
    > li.menu-item-has-children > a {

        display: flex !important;

        align-items: center !important;

        justify-content: flex-start !important;

        width: 100% !important;

        height: 52px !important;

        min-height: 52px !important;

        margin: 0 !important;

        padding: 0 14px !important;

        gap: 14px !important;

        background: #ffffff !important;

        color: #111111 !important;

        font-size: 15px !important;

        font-weight: 600 !important;

        line-height: 1 !important;

        text-decoration: none !important;

        border: 0 !important;

        box-sizing: border-box !important;
    }


    /* -----------------------------------------------------
       ICONS
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav.has-open
    > li > a > i {

        display: flex !important;

        align-items: center !important;

        justify-content: center !important;

        width: 22px !important;

        min-width: 22px !important;

        height: 22px !important;

        margin: 0 !important;

        font-size: 17px !important;

        color: #111111 !important;

        visibility: visible !important;

        opacity: 1 !important;
    }


    /* -----------------------------------------------------
       TEXT
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav.has-open
    > li > a > span {

        display: inline-block !important;

        margin: 0 !important;

        padding: 0 !important;

        color: #111111 !important;

        font-size: 15px !important;

        line-height: 20px !important;

        visibility: visible !important;

        opacity: 1 !important;
    }


    /* -----------------------------------------------------
       REMOVE OLD HOVER EFFECT
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav.has-open
    > li > a::before,

    .site-header .header-nav.dagon-nav.has-open
    > li > a::after {

        display: none !important;

        content: none !important;
    }


    .site-header .header-nav.dagon-nav.has-open
    > li:hover > a {

        background: #ffffff !important;

        color: #111111 !important;
    }


    .site-header .header-nav.dagon-nav.has-open
    > li:hover > a > i {

        color: #111111 !important;
    }


    /* -----------------------------------------------------
       HIDE SUBMENU ARROW
       ----------------------------------------------------- */

    .site-header .header-nav.dagon-nav.has-open
    .toggle-submenu {

        display: none !important;
    }


    /* -----------------------------------------------------
       HAMBURGER BUTTON MUST STAY ABOVE MENU
       ----------------------------------------------------- */

    .site-header .menu-on-mobile {

        position: relative !important;

        z-index: 100000000 !important;

        display: flex !important;

        cursor: pointer !important;
    }


    /* -----------------------------------------------------
       BODY
       PAGE CAN SCROLL
       ----------------------------------------------------- */

    body.menu-open {

        overflow-x: hidden !important;

        overflow-y: auto !important;
    }
}





/* =========================================================
   MOBILE MENU OPEN - COMPLETELY FIXED
   MENU OPEN AANATHU PAGE SCROLL AAGA KUDATHU
   ========================================================= */

@media (max-width: 767px) {

    /* Header always fixed at top */
    .site-header {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;

        width: 100% !important;

        z-index: 999999 !important;
    }


    /* Header content */
    .site-header .header-content {
        position: relative !important;

        width: 100% !important;

        z-index: 999999 !important;
    }


    /* Main menu container */
    .site-header .header-menu {
        display: block !important;

        position: static !important;

        width: 100% !important;

        height: 0 !important;
        min-height: 0 !important;

        margin: 0 !important;
        padding: 0 !important;

        overflow: visible !important;
    }


    /* Menu normally hidden */
    .site-header .header-menu
    .header-nav.dagon-nav {
        display: none !important;
    }


    /* =====================================================
       MENU OPEN
       ===================================================== */

    .site-header .header-menu
    .header-nav.dagon-nav.has-open {

        display: flex !important;

        flex-direction: column !important;

        position: fixed !important;

        top: 255px !important;

        left: 10px !important;
        right: 10px !important;

        width: auto !important;

        height: auto !important;

        max-height: calc(100vh - 255px) !important;

        margin: 0 !important;

        padding: 8px !important;

        background: #ffffff !important;

        border-radius: 0 0 12px 12px !important;

        box-shadow: 0 8px 25px rgba(0,0,0,.25) !important;

        overflow: hidden !important;

        z-index: 999999999 !important;

        visibility: visible !important;

        opacity: 1 !important;

        transform: none !important;
    }


    /* =====================================================
       STOP PAGE SCROLL WHEN MENU IS OPEN
       ===================================================== */

    html:has(body.menu-open),
    body.menu-open {

        overflow: hidden !important;

        height: 100% !important;

        max-height: 100% !important;
    }


    /* =====================================================
       MENU ITEMS
       ===================================================== */

    .site-header .header-nav.dagon-nav.has-open
    > li.menu-item-has-children {

        display: block !important;

        width: 100% !important;

        height: 52px !important;

        min-height: 52px !important;

        flex: 0 0 52px !important;

        margin: 0 !important;

        padding: 0 !important;

        background: #ffffff !important;

        border-bottom: 1px solid #eeeeee !important;
    }


    /* Menu links */
    .site-header .header-nav.dagon-nav.has-open
    > li.menu-item-has-children > a {

        display: flex !important;

        align-items: center !important;

        width: 100% !important;

        height: 52px !important;

        padding: 0 14px !important;

        gap: 14px !important;

        margin: 0 !important;

        background: #ffffff !important;

        color: #111111 !important;

        font-size: 15px !important;

        font-weight: 600 !important;

        text-decoration: none !important;

        box-sizing: border-box !important;
    }


    /* Icons */
    .site-header .header-nav.dagon-nav.has-open
    > li > a > i {

        display: flex !important;

        align-items: center !important;

        justify-content: center !important;

        width: 22px !important;

        min-width: 22px !important;

        height: 22px !important;

        font-size: 17px !important;

        color: #111111 !important;
    }


    /* Text */
    .site-header .header-nav.dagon-nav.has-open
    > li > a > span {

        display: inline-block !important;

        color: #111111 !important;

        font-size: 15px !important;
    }


    /* Close button */
    .site-header .header-nav.dagon-nav.has-open
    > .btn-close {

        display: flex !important;

        width: 100% !important;

        height: 42px !important;

        min-height: 42px !important;

        align-items: center !important;

        justify-content: flex-end !important;

        flex: 0 0 42px !important;

        padding: 0 5px !important;

        background: #ffffff !important;

        border: none !important;
    }


    .site-header .header-nav.dagon-nav.has-open
    > .btn-close i {

        display: flex !important;

        align-items: center !important;

        justify-content: center !important;

        width: 32px !important;

        height: 32px !important;

        font-size: 22px !important;

        color: #111111 !important;
    }


    /* Remove old hover animation */
    .site-header .header-nav.dagon-nav.has-open
    > li > a::before,

    .site-header .header-nav.dagon-nav.has-open
    > li > a::after {

        display: none !important;

        content: none !important;
    }


    /* Hide submenu arrows */
    .site-header .header-nav.dagon-nav.has-open
    .toggle-submenu {

        display: none !important;
    }


    /* Hamburger stays above menu */
    .site-header .menu-on-mobile {

        position: relative !important;

        z-index: 1000000000 !important;
    }
}


/* =========================================================
   MOBILE LOGO + MOBI WORLD CENTER FIX
   ========================================================= */

@media (max-width: 767px) {

    /* LEFT LOGO - BIGGER */
    .site-header .nav-left {
        position: absolute !important;

        left: 12px !important;
        top: 28px !important;

        width: 200% !important;
        height: 20% !important;

        margin: 0 !important;
        padding: 0 !important;

        display: flex !important;
        align-items: center !important;
        justify-content: flex-start !important;

        z-index: 1000000 !important;
    }


    .site-header .nav-left .logo {
        display: flex !important;

        align-items: center !important;
        justify-content: flex-start !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    .site-header .nav-left .logo img {
        display: block !important;

        width: 200% !important;
        max-width: 90px !important;

        height: 20% !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    /* =====================================================
       MOBI WORLD - EXACT CENTER
       ===================================================== */

    .site-header .mobi-world-brand {

        position: absolute !important;

        left: 50% !important;
        top: 38px !important;

        transform: translateX(-50%) !important;

        width: max-content !important;

        margin: 0!important;
        padding-left: 340% !important;

        display: flex !important;

        flex-direction: column !important;

        align-items: center !important;
        justify-content: center !important;

        text-align: center !important;

        z-index: 1000000 !important;
        margin-top: -10px !important;
    }


    .site-header .mobi-world-brand span {

        display: block !important;

        margin: 0 !important;
        padding: 0 !important;

        font-size: 19px !important;

        font-weight: 800 !important;

        line-height: 22px !important;

        letter-spacing: .5px !important;

        white-space: nowrap !important;

        text-align: center !important;

        color: #111111 !important;

        background: none !important;

        
    }


    .site-header .mobi-world-brand p {

        display: block !important;

        margin: 5px 0 0 !important;
        padding: 0 !important;

        font-size: 9px !important;

        font-weight: 600 !important;

        line-height: 11px !important;

        white-space: nowrap !important;

        text-align: center !important;

        color: #111111 !important;
    }
}



/* =========================================================
   MOBI WORLD NAVBAR - FINAL DESKTOP HOVER FIX
   3 COLOR HOVER + TRANSFORM + EVEN SPACING
   ========================================================= */


/* =========================================================
   1. MOBI WORLD BRAND
   ========================================================= */

.site-header .mobi-world-brand {

    position: absolute !important;

    left: 205px !important;
    top: 28px !important;

    width: max-content !important;

    margin: 0 !important;
    padding: 0 !important;

    display: flex !important;

    flex-direction: column !important;

    align-items: flex-start !important;

    justify-content: center !important;

    text-align: left !important;

    z-index: 100000 !important;
}


/* MOBI WORLD */

.site-header .mobi-world-brand span {

    display: block !important;

    margin: 0 !important;
    padding: 0 !important;

    font-family: "Inter", Arial, sans-serif !important;

    font-size: 20px !important;

    font-weight: 800 !important;

    line-height: 23px !important;

    letter-spacing: .5px !important;

    white-space: nowrap !important;

    color: #111111 !important;

    background: none !important;

    -webkit-text-fill-color: #111111 !important;
}


/* Small text below MOBI WORLD */

.site-header .mobi-world-brand p {

    display: block !important;

    margin: 3px 0 0 !important;
    padding: 0 !important;

    font-size: 9px !important;

    font-weight: 600 !important;

    line-height: 12px !important;

    letter-spacing: .4px !important;

    white-space: nowrap !important;

    color: #1e5666 !important;

    text-align: left !important;
}



/* =========================================================
   2. MAIN NAV MENU
   ========================================================= */

.site-header .header-menu {

    position: relative !important;

    z-index: 99999 !important;
}


.site-header .header-nav.dagon-nav {

    display: flex !important;

    align-items: center !important;

    justify-content: center !important;

    gap: 50px !important;

    margin: 0 !important;

    padding: 0 !important;
}


/* =========================================================
   3. MENU ITEMS
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children {

    position: relative !important;

    display: flex !important;

    align-items: center !important;

    justify-content: center !important;

    margin: 0 !important;

    padding: 0 !important;

    overflow: hidden !important;

    border-radius: 8px !important;

    background: #ffffff !important;
}


/* =========================================================
   4. MENU LINK
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children > a {

    position: relative !important;

    z-index: 2 !important;

    display: flex !important;

    align-items: center !important;

    justify-content: center !important;

    gap: 9px !important;

    min-width: 125px !important;

    height: 50px !important;

    margin: 0 !important;

    padding: 0 17px !important;

    overflow: hidden !important;

    background: #ffffff !important;

    color: #111111 !important;

    font-size: 14px !important;

    font-weight: 700 !important;

    line-height: 1 !important;

    text-decoration: none !important;

    border-radius: 8px !important;

    transition:
        color .35s ease,
        transform .35s ease !important;
}


/* =========================================================
   5. 3 COLOR GRADIENT
   BLACK → CYAN → BLACK
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children > a::before {

    content: "" !important;

    position: absolute !important;

    top: 0 !important;

    left: 0 !important;

    width: 100% !important;

    height: 100% !important;

    z-index: -1 !important;

    background: linear-gradient(
        90deg,
        #111111 0%,
        #39cbd7 50%,
        #111111 100%
    ) !important;

    transform: translateX(-101%) !important;

    transition: transform .4s ease-in-out !important;
}


/* =========================================================
   6. HOVER - SLIDE FROM LEFT
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children:hover > a::before {

    transform: translateX(0) !important;
}


/* =========================================================
   7. HOVER TEXT WHITE
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children:hover > a {

    color: #ffffff !important;

    background: transparent !important;

    transform: translateY(-2px) !important;
}


/* =========================================================
   8. REAL FONT AWESOME ICONS
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children > a > i {

    position: relative !important;

    z-index: 3 !important;

    font-size: 15px !important;

    color: #111111 !important;

    transition:
        color .35s ease,
        transform .35s ease !important;
}


/* Hover icon WHITE */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children:hover > a > i {

    color: #ffffff !important;

    transform: scale(1.08) !important;
}


/* =========================================================
   9. MENU TEXT ABOVE GRADIENT
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children > a > span {

    position: relative !important;

    z-index: 3 !important;

    color: #111111 !important;

    transition: color .35s ease !important;
}


.site-header .header-nav.dagon-nav
> li.menu-item-has-children:hover > a > span {

    color: #ffffff !important;
}


/* =========================================================
   10. EVEN SPACE BETWEEN MENU ITEMS
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children + li.menu-item-has-children {

    margin-left: 40px !important;
    justify-content:space-evenly !important;
}


/* =========================================================
   11. REMOVE OLD WHITE HOVER EFFECT
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children:hover {

    background: transparent !important;
}


.site-header .header-nav.dagon-nav
> li.menu-item-has-children:hover > a::after {

    display: none !important;

    content: none !important;
}


/* =========================================================
   12. CLOSE BUTTON - DON'T APPLY MENU STYLE
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.btn-close {

    background: transparent !important;

    overflow: visible !important;
}



/* =========================================================
   MOBILE
   Keep your previous mobile layout
   ========================================================= */

@media (max-width: 767px) {

    .site-header .mobi-world-brand {

        left: 50% !important;

        top: 38px !important;

        transform: translateX(-50%) !important;

        align-items: center !important;

        text-align: center !important;
    }


    .site-header .mobi-world-brand span {

        font-size: 19px !important;

        color: #ffffff !important;

        -webkit-text-fill-color: #ffffff !important;

        text-align: center !important;
    }


    .site-header .mobi-world-brand p {

        color: #ffffff !important;

        text-align: center !important;
    }


    .site-header .header-nav.dagon-nav {

        gap: 0 !important;
    }
}


/* =========================================================
   MOBI WORLD + NAVBAR FINAL ALIGNMENT
   ========================================================= */

/* =========================================================
   MOBILE ONLY - MOBI WORLD LOGO + TEXT
   ========================================================= */
@media (max-width: 767px) {

    /* Header row */
    .site-header .header-content .container .row {
        position: relative !important;
    }

    /* =========================
       LOGO
       ========================= */
    .site-header .header-content .nav-left {
        position: absolute !important;

        left: 15px !important;
        top: 50% !important;

        width: 85px !important;
        max-width: 85px !important;

        margin: 0 !important;
        padding: 0 !important;

        transform: translateY(-50%) !important;

        z-index: 100 !important;
    }

    .site-header .header-content .nav-left .logo {
        display: block !important;

        width: 85px !important;

        margin: 0 !important;
        padding: 0 !important;
    }

    .site-header .header-content .nav-left .logo a {
        display: block !important;

        width: 85px !important;

        margin: 0 !important;
        padding: 0 !important;
    }

    .site-header .header-content .nav-left .logo img {
        display: block !important;

        width: 85px !important;
        height: auto !important;

        max-width: 85px !important;

        margin: 0 !important;
        padding: 0 !important;
    }


    /* =========================
       MOBI WORLD TEXT
       LOGO RIGHT SIDE
       ========================= */
    .site-header .header-content .mobi-world-name {
        position: absolute !important;

        left: 115px !important;
        top: 50% !important;

        width: auto !important;
        min-width: 130px !important;

        margin: 0 !important;
        padding: 0 !important;

        transform: translateY(-50%) !important;

        display: flex !important;
        flex-direction: column !important;

        justify-content: center !important;
        align-items: flex-start !important;

        text-align: left !important;

        z-index: 101 !important;
    }


    /* MOBI WORLD */
    .site-header .header-content .mobi-world-name span {
        display: block !important;

        margin: 0 !important;
        padding: 0 !important;

        font-size: 20px !important;
        line-height: 22px !important;

        font-weight: 800 !important;

        color: #ffffff !important;

        white-space: nowrap !important;
    }


    /* Subtitle */
    .site-header .header-content .mobi-world-name p {
        display: block !important;

        margin: 3px 0 0 0 !important;
        padding: 0 !important;

        font-size: 9px !important;
        line-height: 11px !important;

        color: #ffffff !important;

        white-space: nowrap !important;
    }

}
/* =========================================================
   1. MOBI WORLD TEXT
   ========================================================= */

.site-header .mobi-world-brand {

    position: absolute !important;

    left: 205px !important;

    top: 32px !important;

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
    padding-left: 25px !important;

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
   2. MAIN MENU - NO EXTRA HEIGHT
   ========================================================= */

.site-header .header-nav.dagon-nav {

    display: flex !important;

    align-items: center !important;

    justify-content: center !important;

    gap: 10px !important;

    margin: 0 !important;

    padding: 0 !important;

    height: 50px !important;

    min-height: 50px !important;
}


/* =========================================================
   3. MENU LI
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children {

    position: relative !important;

    display: flex !important;

    align-items: center !important;

    justify-content: center !important;

    height: 50px !important;

    min-height: 50px !important;

    margin: 0 !important;

    padding: 0 !important;

    border-radius: 8px !important;

    overflow: hidden !important;

    background: transparent !important;

    box-sizing: border-box !important;
}


/* =========================================================
   4. MENU LINK SAME HEIGHT
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children > a {

    position: relative !important;

    display: flex !important;

    align-items: center !important;

    justify-content: center !important;

    gap: 9px !important;

    width: 125px !important;

    min-width: 125px !important;

    max-width: 125px !important;

    height: 50px !important;

    min-height: 50px !important;

    max-height: 50px !important;

    margin: 0 !important;

    padding: 0 14px !important;

    background: #ffffff !important;

    color: #111111 !important;

    border-radius: 8px !important;

    border: 0 !important;

    box-sizing: border-box !important;

    overflow: hidden !important;

    transition:
        color .35s ease,
        transform .35s ease !important;
}


/* =========================================================
   5. GRADIENT HOVER
   BLACK → CYAN → BLACK
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children > a::before {

    content: "" !important;

    position: absolute !important;

    left: 0 !important;

    top: 0 !important;

    width: 100% !important;

    height: 100% !important;

    z-index: 0 !important;

    background: linear-gradient(
        90deg,
        #111111 0%,
        #39cbd7 50%,
        #111111 100%
    ) !important;

    transform: translateX(-101%) !important;

    transition: transform .4s ease-in-out !important;
}


/* Hover slide */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children:hover > a::before {

    transform: translateX(0) !important;
}


/* =========================================================
   6. HOVER BUTTON
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children:hover > a {

    background: transparent !important;

    color: #ffffff !important;

    transform: translateY(-2px) !important;
}


/* =========================================================
   7. ICON
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children > a > i {

    position: relative !important;

    z-index: 3 !important;

    color: #111111 !important;

    font-size: 15px !important;

    transition:
        color .35s ease,
        transform .35s ease !important;
}


/* Hover icon */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children:hover > a > i {

    color: #ffffff !important;

    transform: scale(1.08) !important;
}


/* =========================================================
   8. MENU TEXT
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children > a > span {

    position: relative !important;

    z-index: 3 !important;

    color: #111111 !important;

    font-size: 14px !important;

    font-weight: 700 !important;

    line-height: 1 !important;

    white-space: nowrap !important;

    transition: color .35s ease !important;
}


/* Hover text */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children:hover > a > span {

    color: #ffffff !important;
}


/* =========================================================
   9. SEARCH BUTTON SMALLER
   ========================================================= */

.site-header .box-group .btn-search {

    width: 42px !important;

    min-width: 42px !important;

    max-width: 42px !important;

    height: 50px !important;

    padding: 0 !important;

    margin: 0 !important;

    display: flex !important;

    align-items: center !important;

    justify-content: center !important;

    background: #39cbd7 !important;

    color: #111111 !important;

    border: none !important;
}


.site-header .box-group .btn-search i {

    font-size: 14px !important;

    color: #111111 !important;
}


/* =========================================================
   10. EVEN MENU SPACING
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children {

    margin-left: 3px !important;

    margin-right: 3px !important;
}


/* =========================================================
   11. REMOVE OLD HEIGHT / PADDING
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children > a {

    line-height: 50px !important;

    box-shadow: none !important;
}


/* =========================================================
   12. DON'T LET OLD HOVER AFTER EFFECT SHOW
   ========================================================= */

.site-header .header-nav.dagon-nav
> li.menu-item-has-children > a::after {

    content: none !important;

    display: none !important;
}


/* =========================================================
   MOBILE
   ========================================================= */

@media (max-width: 767px) {

    .site-header .mobi-world-brand {

        left: 50% !important;

        top: -88px !important;
        margin-left:150px !important;

        transform: translateX(-50%) !important;

        align-items: center !important;

        text-align: center !important;
    }


    .site-header .mobi-world-brand span {

        color: #ffffff !important;

        -webkit-text-fill-color: #ffffff !important;

        text-align: center !important;
        
    }


    .site-header .mobi-world-brand p {

        color: #111111 !important;

        -webkit-text-fill-color: #111111 !important;

        text-align: center !important;
    }
}

.site-header .header-nav.dagon-nav
> li.menu-item-has-children:hover > a {

    background: linear-gradient(
        90deg,
        #111111 0%,
        #39cbd7 50%,
        #111111 100%
    ) !important;

    color: #ffffff !important;
}


/* ==========================================
   MOBILE LOGO - BIGGER SIZE
   ========================================== */
@media (max-width: 767px) {

    .site-header .nav-left {
        width: auto !important;
        max-width: none !important;
        flex: 0 0 auto !important;
        padding: 0 !important;
        margin: 0 !important;
    }

    .site-header .nav-left .logo {
        display: block !important;
        width: auto !important;
        max-width: none !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .site-header .nav-left .logo a {
        display: block !important;
        width: auto !important;
        max-width: none !important;
    }

    .site-header .nav-left .logo img {
        width: 170% !important;
        max-width: none !important;
        height: auto !important;
        display: block !important;
        object-fit: contain !important;
    }

}



/* =========================================================
   MOBILE SEARCH + CATEGORY
   ========================================================= */

@media only screen and (max-width: 767px) {

    /* Main search area */
    .site-header .nav-mind {
        width: 100% !important;

        max-width: 100% !important;

        flex: 0 0 100% !important;

        display: block !important;

        margin: 0 !important;

        padding: 0 10px !important;
    }


    .site-header .nav-mind .block-search {
        width: 100% !important;

        display: block !important;

        margin: 0 !important;

        padding: 0 !important;
    }


    .site-header .nav-mind .block-content {

        width: 100% !important;

        display: flex !important;

        flex-direction: column !important;

        gap: 10px !important;

        margin: 0 !important;

        padding: 0 !important;
    }


    /* =====================================================
       CATEGORY - SEARCHக்கு மேலே
       ===================================================== */

    .site-header .nav-mind .categori-search {

        order: 1 !important;

        width: 100% !important;

        display: block !important;

        margin: 0 !important;

        padding: 0 !important;
    }


    .site-header .nav-mind
    .categori-search .chosen-container {

        width: 100% !important;

        min-height: 45px !important;
    }


    /* =====================================================
       SEARCH
       ===================================================== */

    .site-header .nav-mind .form-search {

        order: 2 !important;

        width: 100% !important;

        display: block !important;

        margin: 0 !important;

        padding: 0 !important;
    }


    .site-header .nav-mind .form-search form {

        width: 100% !important;

        margin: 0 !important;
    }


    .site-header .nav-mind .box-group {

        width: 100% !important;

        display: flex !important;

        align-items: stretch !important;

        margin: 0 !important;

        padding: 0 !important;
    }


    .site-header .nav-mind .box-group .form-control {

        flex: 1 !important;

        width: auto !important;

        height: 48px !important;

        border: none !important;

        border-radius: 7px 0 0 7px !important;

        padding: 0 14px !important;

        font-size: 13px !important;

        background: #ffffff !important;

        color: #222222 !important;
    }


    .site-header .nav-mind .box-group .btn-search {

        width: 52px !important;

        min-width: 52px !important;

        height: 48px !important;

        display: flex !important;

        align-items: center !important;

        justify-content: center !important;

        border: none !important;

        border-radius: 0 7px 7px 0 !important;

        background: #39cbd7 !important;

        color: #ffffff !important;

        padding: 0 !important;
    }


    .site-header .nav-mind .box-group .btn-search span {

        color: #ffffff !important;

        font-size: 18px !important;
    }


    /* =====================================================
       CHOSEN CATEGORY
       ===================================================== */

    .site-header .nav-mind
    .categori-search .chosen-container {

        width: 100% !important;

        background: #ffffff !important;

        border-radius: 7px !important;
    }


    .site-header .nav-mind
    .categori-search .chosen-container-single
    .chosen-single {

        height: 45px !important;

        line-height: 45px !important;

        padding: 0 14px !important;

        background: #ffffff !important;

        border: 1px solid #1e5666 !important;

        border-radius: 7px !important;

        box-shadow: none !important;

        color: #1e5666 !important;

        font-size: 13px !important;
    }


    .site-header .nav-mind
    .categori-search .chosen-container-single
    .chosen-single span {

        color: #1e5666 !important;

        font-weight: 700 !important;
    }


    .site-header .nav-mind
    .categori-search .chosen-container-single
    .chosen-single div b {

        border-color: #1e5666 transparent transparent transparent !important;
    }


    /* =====================================================
       CATEGORY DROPDOWN
       ===================================================== */

    .site-header .nav-mind
    .categori-search
    .chosen-container .chosen-drop {

        width: 100% !important;

        border: 1px solid #1e5666 !important;

        border-top: none !important;

        background: #ffffff !important;

        z-index: 99999999 !important;
    }


    .site-header .nav-mind
    .categori-search
    .chosen-container .chosen-results {

        max-height: 230px !important;

        padding: 5px !important;
    }


    .site-header .nav-mind
    .categori-search
    .chosen-container .chosen-results li {

        padding: 9px 10px !important;

        font-size: 13px !important;

        color: #1e5666 !important;
    }


    .site-header .nav-mind
    .categori-search
    .chosen-container .chosen-results li.highlighted {

        background: #39cbd7 !important;

        color: #ffffff !important;
    }

}
    </style>
</head>

<header class="site-header header-opt-1">
    <!-- header-top -->
    

    <!-- header-content -->
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2 nav-left">
    <strong class="logo">
        <a href="index.php" class="img_anbu">
            <img src="assets/images/logo1.png" width="380px" alt="Mobi World Logo">
        </a>

        <div class="mobi-world-brand">
            <span>MOBI WORLD</span>
            <p>Smart Life • Smart Choice</p>
        </div>
    </strong>
</div>
                <div class="col-md-8 nav-mind">

    <!-- block search -->
    <div class="block-search">

        <div class="block-content">

            <!-- CATEGORY -->
            <div class="categori-search">

                <select title="categories"
                        data-placeholder="All Categories"
                        class="chosen-select categori-search-option">

                    <option value="">All Categories</option>

                    <optgroup label="Mobile">
                        <option>Mobile Phones</option>
                        <option>iPhone</option>
                        <option>OnePlus</option>
                        <option>Android Phones</option>
                    </optgroup>

                    <optgroup label="Audio">
                        <option>AirPods</option>
                        <option>Earbuds</option>
                        <option>Headphones</option>
                        <option>Speakers</option>
                    </optgroup>

                    <optgroup label="Smart Devices">
                        <option>Smart Watch</option>
                        <option>Projectors</option>
                        <option>Gaming Accessories</option>
                    </optgroup>

                    <optgroup label="Accessories">
                        <option>Chargers</option>
                        <option>Cables</option>
                        <option>Power Banks</option>
                        <option>Phone Cases</option>
                        <option>Screen Guards</option>
                    </optgroup>

                </select>

            </div>


            <!-- SEARCH -->
            <div class="form-search">

                <form>

                    <div class="box-group">

                        <input type="text"
                               class="form-control"
                               placeholder="Search keyword here...">

                        <button class="btn btn-search"
                                type="button">

                            <span class="flaticon-magnifying-glass"></span>

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>
    <!-- block search -->

</div>
                <div class="col-md-2 nav-right">
                    <!-- block mini cart -->
                    <span data-action="toggle-nav" class="menu-on-mobile hidden-md style2">
                        <span class="btn-open-mobile home-page">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="title-menu-mobile">Main menu</span>
                    </span>
                    <div class="block-minicart dropdown style2">
                        <a class="minicart" href="#">

                            <span class="counter qty">
                                <a href="Admin/index.php" class="admin-login">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                        class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                    </svg>
                                </a>
                                <p style="display:flex; justify-content:center;">Admin</p>
                            </span>
                            
                            </span>
                        </a>

                    </div><!-- block mini cart -->
                    <a href="#" class="hidden-md search-hidden"><span class="flaticon-magnifying-glass"></span></a>
                </div>
            </div>
        </div>
    </div><!-- header-content -->
    <!-- header-menu-bar -->
    <div class="header-menu-bar header-sticky">
        <div class="header-menu-nav menu-style-1" style="background-color:black;">
            <div class="container">
                <div class="header-menu-nav-inner ">
                    <div class="header-menu header-menu-resize">
                        <ul class="header-nav dagon-nav">
                            <li class="btn-close hidden-md"><i class="flaticon-close" aria-hidden="true"></i></li>
                            <li class="menu-item-has-children ">
                                <a href="index.php">
                                <i class="fa-solid fa-house"></i>
                                                      Home
                                                       </a>
                                <span class="toggle-submenu hidden-md"></span>

                            </li>
                            <li class="menu-item-has-children ">
                                <a href="about-us.php">
                                    <i class="fa-solid fa-circle-info"></i>
                                    About
                                </a>
                                <span class="toggle-submenu hidden-md"></span>
                            </li>


                            <li class="menu-item-has-children ">
                                <a href="list-product.php">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                    Product
                                </a>
                                <span class="toggle-submenu hidden-md"></span>
                                <!-- <ul class="submenu parent-megamenu">
                                    <li class="menu-item">
                                        <a href="grid-product.php">Grid Product</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="list-product.php">List Product</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="list-product-right.php">List Product Right</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="grid-product-right.php">Grid Product Right</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="detail.php">Detail Product</a>
                                    </li>
                                </ul> -->
                            </li>
                            <!-- <li class="menu-item-has-children arrow item-megamenu">
                                <a href="#">Camera</a>
                                <span class="toggle-submenu hidden-md"></span>
                                <div class="submenu parent-megamenu megamenu">
                                    <div class="row">
                                        <div class="submenu-banner submenu-banner-menu-1">
                                            <div class="col-md-4">
                                                <div class="dropdown-menu-info">
                                                    <h6 class="dropdown-menu-title">Camera</h6>
                                                    <div class="dropdown-menu-content">
                                                   
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="dropdown-menu-info">
                                                    <h6 class="dropdown-menu-title">Computer</h6>
                                                    <div class="dropdown-menu-content">
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> -->

                            <!-- <li class="menu-item-has-children ">
                                <a href="shopping-cart.php">Shopping Cart</a>
                                <span class="toggle-submenu hidden-md"></span> -->
                            <!-- <ul class="submenu parent-megamenu">
                                    <li class="menu-item">
                                        <a href="checkout.php">Checkout</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="shopping-cart.php">Shopping Cart</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="wishlist.php">Wishlist</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="compare.php">Compare</a>
                                    </li>
                                </ul> -->
                            <!-- </li> -->
                            <li class="menu-item-has-children">
                                <a href="blog-grid.php">
                                    <i class="fa-solid fa-newspaper"></i>
                                    Blog
                                </a>
                                <span class="toggle-submenu hidden-md"></span>
                                <!-- <ul class="submenu parent-megamenu">
                                    <li class="menu-item">
                                        <a href="blog-grid.php">Blog Grid</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="blog-list.php">Blog List</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="blog-single.php">Blog Single</a>
                                    </li>
                                </ul> -->
                            </li>
                            <li class="menu-item-has-children ">
                                <a href="contact-us.php">
                                    <i class="fa-solid fa-envelope"></i>
                                    Contact Us
                                </a>
                                <span class="toggle-submenu hidden-md"></span>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header-menu-bar -->
</header>