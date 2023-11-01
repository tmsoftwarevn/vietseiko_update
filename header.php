<!DOCTYPE html>

<html lang="en">
<?php
session_start();

require_once 'config.php';
require "models/db.php";
require "models/jobs.php";
require "models/hinhthuc.php";
require "models/nganhnghe.php";
require "models/protype.php";
require "models/job_NB.php";
require "models/nganhnghe_NB.php";
require "models/blog.php";
require "models/ban_tin.php";
require "models/protypes_congcu.php";
require "models/job_kysu.php";


$protypes_congcu = new Protypes_congcu;
$ban_tin = new Ban_tin;
$nganhnghe = new Nganhnghe;
$nganhngheNB = new Nganhnghe_NB;
$hinhthuc = new Hinhthuc;
$protype = new Protype;
$job = new Job;
$job_NB = new Job_NB;
$blog = new blog;
$job_kysu = new Job_Kysu;
?>

<head>
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
    <title>Tìm việc nhanh, tuyển dụng hiệu quả tại VietSeiko</title>

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
    <!-- <link rel="stylesheet" type="text/css" href="public/css/flaticon.css" /> -->
    <!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="public/css/swiper-bundle.min.css" />
    <!-- Swiper Slider -->
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/style2.css" />
    <!-- Thêm liên kết đến tệp CSS -->
    <link rel="stylesheet" type="text/css" href="public/css/main.css">

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="public/css/skins-type/skin-6.css" />
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/switcher.css" />
    <!--css contact-->
    <link rel="stylesheet" type="text/css" href="public/css/contact.css" />
    <!-- Css INTRODUCE -->
    <link rel="stylesheet" type="text/css" href="public/css/about-us.css" />
    <link rel="stylesheet" type="text/css" href="public/css/style1.css" />
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
            height: 60px;
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
            height: 70px;
            background-color: transparent;
            z-index: 20;
        }

        .user-image {
            display: inline-block;
            margin-top: 14px;
            height: 40px;
            width: 40px;
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
    </style>
</head>

<body style="font-family: 'Roboto', sans-serif;">
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
                                <a href="index.php">
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
                                    <a href="about-us.php">Giới Thiệu</a>
                                </li>
                                <li class="has-child">
                                    <a href="javascript:;">Việc Làm</a>
                                    <ul class="sub-menu" style="width: 270px;">
                                        <?php
                                        $list_of_protypes = Protype::getAllProtypes();
                                        foreach ($list_of_protypes as $key => $value) {
                                        ?>
                                            <li>
                                                <a href="job-list.php?type_id=<?php echo $value['type_id']; ?>">
                                                    <?php echo $value['type_name'] ?>
                                                </a>
                                            </li>

                                        <?php } ?>
                                    </ul>
                                </li>
                                <li class="has-child">
                                    <a href="javascript:" ;>Công Cụ</a>
                                    <ul class="sub-menu" style="width: 270px;">
                                        <?php
                                        $list_of_Protypes_congcu = Protypes_congcu::getAllProtypes_congcu();
                                        foreach ($list_of_Protypes_congcu as $key => $value) {
                                        ?>
                                            <li>
                                                <a href="blog-camnang.php?id_congcu=<?php echo $value['id_congcu']; ?>">
                                                    <?php echo $value['name_congcu'] ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li class="has-child">
                                    <a href="javascript:;">Công Ty</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="employer.html">Danh Sách Công Ty</a>
                                        </li>
                                        <li><a href="employer-list.html">Top Công Ty</a></li>
                                    </ul>
                                </li>
                                <li class="has-child">
                                    <a href="blog.php">Tin Tức</a>
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
                                                                <span class="user-image"><img src="https://rolecall.imgix.net/users/31603_GE9ho7jeF7Wt3YwD?crop=faces&amp;fit=crop&amp;h=40&amp;ixlib=php-1.1.0&amp;trim=auto&amp;w=40&amp;s=e7983239e5d698a99e87fcbc491d03fb"></span>
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
                                            <a class="twm-nav-sign-up" href="login.php" role="button">
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