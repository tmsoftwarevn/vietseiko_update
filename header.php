<!DOCTYPE html>

<html lang="en">
<?php

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


$protypes_congcu = new Protypes_congcu;
$ban_tin = new Ban_tin;
$nganhnghe = new Nganhnghe;
$nganhngheNB = new Nganhnghe_NB;
$hinhthuc = new Hinhthuc;
$protype = new Protype;
$job = new Job;
$job_NB = new Job_NB;
$blog = new blog;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- PAGE TITLE HERE -->
    <title>Jobzilla Template | Home Page Style 1</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/font-awesome.min.css" />
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
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@300&display=swap');
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
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                            class="navbar-toggler collapsed">
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
                                        <li></li>
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
                            <div class="extra-cell">
                                <div class="header-search">
                                    <a href="#search" class="header-search-icon"><i class="bi bi-search"></i></a>
                                </div>
                            </div>
                            <div class="extra-cell">
                                <div class="header-nav-btn-section">
                                    <div class="twm-nav-btn-left has-child">
                                        <a class="twm-nav-sign-up" href="login.php" role="button">
                                            <i class="feather-log-in"></i> Đăng Nhập
                                        </a>
                                    </div>
                                    <div class="twm-nav-btn-right">
                                        <a href="employer/dash-post-job.html" class="twm-nav-post-a-job">
                                            <i class="bi bi-briefcase"></i> Đăng Tuyển & Tìm Hồ Sơ
                                        </a>
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