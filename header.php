<!DOCTYPE html>

<html lang="en">
<?php

session_start();
require 'setting-language.php';

require_once 'config.php';
require "models/db.php";

require "models/hinhthuc.php";
require "models/nganhnghe.php";
require "models/protype.php";

require "models/blog.php";
require "models/cam-nang.php";
require "models/form-contact.php";

require "models/job_kysu.php";
require "models/job_vietseiko.php";
require "models/job_NB_f.php";
require "models/jobs.php";
require_once "admin/models/kinh_nghiem.php";
require_once "admin/models/gioi_tinh.php";

$gioitinh = new Gioi_tinh;


$hinhthuc = new Hinhthuc;
$protype = new Protype;
$blog = new blog_f;

$cam_nang = new Cam_nang_f;

$form_contact = new Form_contact;
//$nganh_nghe = new Nganhnghe_f;
$kinh_nghiem = new Kinh_nghiem;
$job = new Job_f;
$job_nb = new Job_NB_f;
$job_kysu = new Job_kysu_f;
$job_vietseiko = new Vietseiko_f;

// fix lỗi thư mục css
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$domain = $_SERVER['HTTP_HOST'];
$currentUrl = $protocol . '://' . $domain . $_SERVER['REQUEST_URI'];
$domainFromUrl = parse_url($currentUrl, PHP_URL_SCHEME) . '://' . parse_url($currentUrl, PHP_URL_HOST);

?>

<head>

    <base href=<?php echo $domainFromUrl ?> />

    <!-- <meta http-equiv="refresh" content="3"> -->
    <!-- META -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="public/images/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="public/images/favicon.png" />
    <!-- Bao gồm các tệp CSS và JavaScript của Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- PAGE TITLE HERE -->
    <!-- <title>Tìm việc nhanh, tuyển dụng hiệu quả tại VietSeiko</title> -->

    <!-- flag -icon jp -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.0.0/css/flag-icons.min.css" />
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/feather.css" />
    <!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/owl.carousel.min.css" />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/magnific-popup.min.css" />
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/lc_lightbox.css" />
    <!-- Lc light box popup -->
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap-select.min.css" />
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="public/css/dataTables.bootstrap5.min.css" />
    <!-- DATA table STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="public/css/select.bootstrap5.min.css" />
    <!-- DASHBOARD select bootstrap  STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="public/css/dropzone.css" />
    <!-- DROPZONE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/scrollbar.css" />
    <!-- CUSTOM SCROLL BAR STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/datepicker.css" />
    <!-- DATEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/flaticon.css" />
    <!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="public/css/swiper-bundle.min.css" />
    <!-- Swiper Slider -->
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />
    <!-- MAIN STYLE SHEET ////////////dong lai ---------------------- -->
    <!-- <link rel="stylesheet" type="text/css" href="public/css/style2.css" /> -->
    <!-- Thêm liên kết đến tệp CSS -->
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="public/css/skins-type/skin-6.css" />
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/switcher.css" />
    <!--css contact-->
    <!--  <link rel="stylesheet" type="text/css" href="public/css/contact.css" /> -->
    <!-- Css INTRODUCE -->
    <!-- <link rel="stylesheet" type="text/css" href="public/css/about-us.css" /> -->

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="public/css/skins-type/skin-6.css" />
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/switcher.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@300&display=swap');



        @media (min-width: 992px) {
            .logo-mobile-f {
                display: none !important;
            }
        }

        .mr-3 {
            margin-right: 1rem !important;
        }

        #main-wrapper,
        #main-content {
            display: flex;
            flex: 1;
        }

        #main-wrapper {
            height: 100%;
            width: 100%;
        }

        #main-top-bar {
            position: relative;

            height: 70px;
            min-height: 70px;
            width: 100%;

            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            color: #fff;

            padding-left: 1rem;
        }

        .shape {
            width: 40%;
            height: 70px;

            -webkit-clip-path: polygon(94% 0, 100% 26%, 100% 100%, 0 100%, 22% 0);
            clip-path: polygon(94% 0, 100% 26%, 100% 100%, 0 100%, 22% 0);
        }

        .main-logo {
            background: url(https://rolecalljobs.com/img/RoleCall_WhiteLogo.svg) no-repeat;
            width: 140px;
            height: 55px;
        }

        .user-dropdown,
        .user-menu {
            position: absolute;
            right: 0;
            cursor: pointer;
        }

        .user-menu {
            background-color: #adc9f3bd;
            border-radius: 10px;
            height: 40px;
            width: 20rem;
            padding: 0 1rem;
            z-index: 10;
        }

        .user-menu:hover {
            background-color: transparent;
            background-color: #4080ff96;
        }

        .user-menu-item {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .user-image-wrapper {
            height: 40px;
            background-color: transparent;
            z-index: 20;
        }

        .user-image {
            display: inline-block;
            margin-top: 5px;
            height: 30px;
            width: 30px;
            border-radius: 50%;
            overflow: hidden;
        }

        .user-name-wrapper {
            padding-left: 1rem;
            font-size: 16px;
            font-weight: 500;
        }

        .user-name-wrapper i {
            padding: 0 0.3rem;
        }

        .user-menu.show {
            background-color: transparent;
            background-color: #4080ff96;
        }

        .user-menu.show .user-dropdown {
            box-shadow: -2px 4px 7px #ccc;
            display: block;
        }

        .user-dropdown {
            position: absolute;
            top: 70px;
            display: none;
            right: 0;
            width: 220px;
            background-color: #fff;
            cursor: pointer;
        }

        .dropdown-item {
            color: #000;
            display: block;
            padding: 1rem;
            text-decoration: none;
        }

        .dropdown-item:active,
        .dropdown-item:hover {
            background-color: #EBF5FF;
        }

        .dropdown-item span {
            color: #03A9FA;
            display: inline-block;
            width: 24px;
            text-align: center;
        }

        .default-tabs .tabbed-trigger {
            background: #e9eaec !important;
        }

        .default-tabs .tab-buttons {
            align-items: flex-start;
            /* flex-wrap: wrap; */
            justify-content: space-between !important;
        }

        .default-tabs .tab-buttons li {
            background: #e9eaec !important;
            color: #212f3f !important;
            font-size: 14px !important;
            font-weight: 500;
            height: 40px;
            line-height: 25px;
        }

        .default-tabs .tab-buttons li:hover {
            border: 1px solid #0dcaf0 !important;
            color: #fff !important;
            border-radius: 20px;
        }

        .default-tabs .tabbed-trigger.clicked {
            background: #0dcaf0 !important;
            color: #fff !important;
            font-size: 14px !important;
            font-weight: 500;
            height: 40px;
            line-height: 25px;
        }

        body {
            font-family: 'Roboto', sans-serif !important;
        }
    </style>
</head>

<body>
    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">
        <!-- HEADER START -->
        <header class="site-header header-style-3 mobile-sider-drawer-menu">
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar">
                    <div class="container clearfix ">
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="trang-chu">
                                    <img src="public/images/logo.png" alt="" />
                                </a>
                            </div>
                        </div>

                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse " style="display: block;">

                            <ul class="nav navbar-nav " style="margin: 0 auto;">
                                <a href="trang-chu">
                                    <div class="d-flex justify-content-center logo-mobile-f">
                                        <img src="public/images/logo.png" alt="logo" width="150px" height="150px" />
                                    </div>
                                </a>
                                <li class="has-child">
                                    <!-- <a href="gioi-thieu">Giới Thiệu</a> -->
                                    <a href="gioi-thieu"><?= __('Giới thiệu') ?></a>
                                </li>
                                <li class="has-child">
                                    <a href="javascript:;"><?= __('Việc làm') ?></a>
                                    <ul class="sub-menu" style="width: 270px;">
                                        <li style="cursor: pointer;"> <a href="/viec-lam-tai-viet-nam"><?= __('Việc làm tại Việt Nam') ?></a></li>
                                        <li style="cursor: pointer;"><a href="/viec-lam-xkld-nhat-ban"><?= __('Xuất khẩu lao động Nhật Bản') ?></a></li>
                                        <li style="cursor: pointer;"><a href="/viec-lam-ky-su-va-thong-dich-nhat-ban"><?= __('Kỹ sư & thông dịch viên tại Nhật Bản') ?></a></li>
                                        <li style="cursor: pointer;"><a href="/viec-lam-tai-vietseiko"><?= __('Việc làm tại Vietseiko') ?></a></li>
                                    </ul>
                                </li>
                                <li class="has-child">
                                    <a href="javascript:;" ;><?= __('Công cụ') ?></a>
                                    <ul class="sub-menu" style="width: 270px;">
                                        <li style="cursor: pointer;"><a href="cam-nang"><?= __('Cẩm nang nghề nghiệp') ?></a></li>
                                        <li style="cursor: pointer;"><a href="gross-net.php"><?= __('Tính lương Gross sang Net') ?></a></li>
                                    </ul>
                                </li>
                                <li class="has-child">
                                    <a href="tin-tuc"><?= __('Tin tức') ?></a>
                                </li>

                                <li class="has-child">
                                    <a href="lien-he"><?= __('Liên hệ') ?></a>
                                </li>
                            </ul>
                        </div>

                        <!-- Header Right Section-->
                        <div class="extra-nav header-2-nav">

                            <div class="extra-cell">
                                <div class="header-nav-btn-section">

                                    <!-- Chuyển đổi ngôn ngữ -->
                                    <a href="?lang=jp" <?php if ($_SESSION['lang'] == 'jp') echo 'style="display: none;"'; ?>>
                                        <span style="font-size: 22px;" class="fi fi-jp"></span> <span class="fi fi-Japan"></span>
                                    </a>
                                    <a href="?lang=vn" <?php if ($_SESSION['lang'] == 'vn') echo 'style="display: none;"'; ?>>
                                        <span style="font-size: 22px;" class="fi fi-vn"></span> <span class="fi fi-Vietnam"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SITE Search -->
                <div id="search">
                    <span class="close"></span>
                    <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                        <input class="form-control" value="" name="q" type="search" placeholder="Type to search" />
                        <span class="input-group-append">
                            <button type="button" class="search-btn">
                                <i class="bi bi-send"></i>
                            </button>
                        </span>
                    </form>
                </div>
            </div>
        </header>
    </div>

    <script>
        document.cookie = "width = " + window.innerWidth
    </script>


</body>

</html>

<!-- HEADER END -->