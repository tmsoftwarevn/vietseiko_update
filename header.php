<!DOCTYPE html>

<html lang="en">
<?php
session_start();

require_once 'config.php';
require "models/db.php";

require "models/hinhthuc.php";
require "models/nganhnghe.php";
require "models/protype.php";

require "models/nganhnghe_NB.php";
require "models/blog.php";
require "models/ban_tin.php";
require "models/protypes_congcu.php";
require "models/nganh_ung_tuyen.php";

require "models/job_kysu.php";
require "models/job_vietseiko.php";
require "models/job_NB_f.php";
require "models/jobs.php";
$protypes_congcu = new Protypes_congcu;
$ban_tin = new Ban_tin;
$nganhnghe = new Nganhnghe;
$nganhngheNB = new Nganhnghe_NB;
$hinhthuc = new Hinhthuc;
$protype = new Protype;
$blog = new blog;
$nganh_ung_tuyen = new Nganh_ung_tuyen;

$job = new Job;
$job_nb = new Job_NB_f;
$job_kysu = new Job_kysu_f;
$job_vietseiko = new Vietseiko_f;

$nganh_ung_tuyen->fetch_tinh_thanh();


?>

<head>
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


    <!-- PAGE TITLE HERE -->
    <!-- <title>Tìm việc nhanh, tuyển dụng hiệu quả tại VietSeiko</title> -->

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
    <link rel="stylesheet" type="text/css" href="public/css/style2.css" />
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
                    <div class="container-fluid clearfix">
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
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                            <ul class="nav navbar-nav">
                                <li class="has-child">
                                    <a href="about.php">Giới Thiệu</a>
                                </li>
                                <li class="has-child">
                                    <a href="javascript:;">Việc Làm</a>
                                    <ul class="sub-menu" style="width: 270px;">
                                        <li style="cursor: pointer;" > <a>Việc làm tại Việt Nam</a></li>
                                        <li style="cursor: pointer;"><a>Xuất khẩu lao động Nhật Bản</a></li>
                                        <li style="cursor: pointer;"><a>Kỹ sư & thông dịch viên Nhật Bản</a></li>
                                        <li style="cursor: pointer;"><a>Việc làm tại Vietseiko</a></li>
                                    </ul>
                                </li>
                                <li class="has-child">
                                    <a href="blog-camnang.php" ;>Công Cụ</a>
                                    <ul class="sub-menu" style="width: 270px;">
                                        <li style="cursor: pointer;"><a>Cẩm nang nghề nghiệp</a></li>
                                        <li style="cursor: pointer;"><a>Tính lương Gross sang Net</a></li>
                                    </ul>
                                </li>
                                <li class="has-child">
                                    <a href="tin-tuc">Tin Tức</a>
                                </li>

                                <li class="has-child">
                                    <a href="contact.php">Liên Hệ</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Header Right Section-->
                        <div class="extra-nav header-2-nav">
                            <!-- Search -->
                            <!-- <div class="extra-cell">
                                <div class="header-search">
                                    <a href="#search" class="header-search-icon"><i class="bi bi-search"></i></a>
                                </div>
                            </div> -->
                            <div class="extra-cell">
                                <div class="header-nav-btn-section">
                                    <?php
                                    if (isset($_SESSION['user'])) {
                                        $user = $_SESSION['user'];
                                    ?>

                                        <div id="main-wrapper">
                                            <main class="main" role="main" id="main-content">
                                                <div id="main-top-bar">
                                                    <a href="https://rolecalljobs.com" class="main-logo"></a>
                                                    <div class="user-menu">
                                                        <div class="user-menu-item">
                                                            <div class="user-image-wrapper">
                                                                <span class="user-image">
                                                                    <img src="/login/image/user.png">
                                                                </span>
                                                            </div>
                                                            <div class="user-name-wrapper">
                                                                <?php echo $user; ?> <i class="bi bi-caret-down-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="user-dropdown">
                                                            <a href="candidates/candidate-profile.html" class="dropdown-item"><span class="mr-3"><i class="bi bi-person-square"></i></span> Tài Khoản</a>
                                                            <a href="logout.php" class="dropdown-item"><span class="mr-3"><i class="bi bi-box-arrow-right"></i></span> Đăng Xuất</a>
                                                        </div>
                                                    </div>
                                                    <div class="shape"></div>
                                                </div>
                                            </main>
                                        </div>

                                    <?php
                                    } else {
                                    ?>
                                        <div class="twm-nav-btn-left has-child">
                                            <a class="twm-nav-sign-up" href="./login/login.php" role="button">
                                                <i class="feather-log-in"></i> Đăng Nhập
                                            </a>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <!-- Đăng nhập cho nhà tuyển dụng: -->
                                    <!-- <div class="twm-nav-btn-right">
                                        <a href="employer/dash-post-job.html" class="twm-nav-post-a-job">
                                            <i class="bi bi-briefcase"></i> Đăng Tuyển & Tìm Hồ Sơ
                                        </a>
                                    </div> -->
                                    <!-- Chuyển đổi ngôn ngữ -->
                                    <div class="rounded cursor-pointer hover:bg[#341678]">
                                        <svg width="36" height="30" fill="currentColor" class="" stroke="unset" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                                            <path fill="#ECEFF1" d="M1.998 10H45.998V37H1.998z"></path>
                                            <path fill="#F44336" d="M2 10H46V13H2zM2 16H46V19H2zM2 22H46V25H2zM2 28H46V31H2zM2 34H46V37H2z"></path>
                                            <path fill="#3F51B5" d="M2 10H23V25H2z"></path>
                                            <g>
                                                <path fill="#FFF" d="M4.25 12L4.713 12.988 5.75 13.146 5 13.916 5.178 15 4.25 14.488 3.322 15 3.5 13.916 2.75 13.146 3.787 12.988zM8.25 12L8.713 12.988 9.75 13.146 9 13.916 9.178 15 8.25 14.488 7.322 15 7.5 13.916 6.75 13.146 7.787 12.988zM12.25 12L12.713 12.988 13.75 13.146 13 13.916 13.178 15 12.25 14.488 11.322 15 11.5 13.916 10.75 13.146 11.787 12.988zM16.25 12L16.713 12.988 17.75 13.146 17 13.916 17.178 15 16.25 14.488 15.322 15 15.5 13.916 14.75 13.146 15.787 12.988zM20 12L20.463 12.988 21.5 13.146 20.75 13.916 20.928 15 20 14.488 19.072 15 19.25 13.916 18.5 13.146 19.537 12.988zM4.25 20L4.713 20.988 5.75 21.146 5 21.916 5.178 23 4.25 22.488 3.322 23 3.5 21.916 2.75 21.146 3.787 20.988zM8.25 20L8.713 20.988 9.75 21.146 9 21.916 9.178 23 8.25 22.488 7.322 23 7.5 21.916 6.75 21.146 7.787 20.988zM12.25 20L12.713 20.988 13.75 21.146 13 21.916 13.178 23 12.25 22.488 11.322 23 11.5 21.916 10.75 21.146 11.787 20.988zM16.25 20L16.713 20.988 17.75 21.146 17 21.916 17.178 23 16.25 22.488 15.322 23 15.5 21.916 14.75 21.146 15.787 20.988zM20 20L20.463 20.988 21.5 21.146 20.75 21.916 20.928 23 20 22.488 19.072 23 19.25 21.916 18.5 21.146 19.537 20.988zM5.25 16L5.713 16.988 6.75 17.146 6 17.916 6.178 19 5.25 18.488 4.322 19 4.5 17.916 3.75 17.146 4.787 16.988zM9.25 16L9.713 16.988 10.75 17.146 10 17.916 10.178 19 9.25 18.488 8.322 19 8.5 17.916 7.75 17.146 8.787 16.988zM13.25 16L13.713 16.988 14.75 17.146 14 17.916 14.178 19 13.25 18.488 12.322 19 12.5 17.916 11.75 17.146 12.787 16.988zM17.25 16L17.713 16.988 18.75 17.146 18 17.916 18.178 19 17.25 18.488 16.322 19 16.5 17.916 15.75 17.146 16.787 16.988zM21 16L21.463 16.988 22.5 17.146 21.75 17.916 21.928 19 21 18.488 20.072 19 20.25 17.916 19.5 17.146 20.537 16.988z"></path>
                                            </g>
                                        </svg>
                                    </div>
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
        <!-- HEADER END -->