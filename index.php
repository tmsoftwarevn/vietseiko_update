<?php
require_once "setting-all-file.php";



$totalShow = 5;
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$list_custom_tinhthanh = $form_contact->list_tinh();
$id_diachi = 'all';
$search = 'all';

$typeJob = 'vn';
if (isset($_GET['type'])) {
    $typeJob = $_GET['type'];
}
$totalPages = 1;
// res 4 row carousel
$perItemCarousel = 9;
if (isset($_COOKIE['width'])) {
    $myPhpVar = $_COOKIE['width'];

    if ((int)$myPhpVar < 992) {
        $perItemCarousel = 4;
    }
}
// get image banner

$list_banner = $img_f->getAll_imgBy_id(0);
$vn = $img_f->getAll_imgBy_id(1);
$xkld = $img_f->getAll_imgBy_id(2);
$ksnb = $img_f->getAll_imgBy_id(3);
$vsk = $img_f->getAll_imgBy_id(4);


?>

<style>
    <?php include 'public/scss/custom.scss';
    include 'public/scss/banner.scss'; ?>.col-lg-4 {
        padding: 5px !important;
    }
</style>
<!-- /// search---------- -->
<style>
    .input-name-job {
        width: 100%;
        padding: 7px;
        border: 1px solid #1967d2;
        border-radius: 5px;
    }

    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #1967d2;
        border-radius: 5px;
        margin-right: 10px;
    }

    option {
        font-size: 17px;
    }

    .btn-search {
        width: 100%;
        background-color: #1967d2;
        color: white;
        padding: 5px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
    }

    .btn-search i {
        margin-right: 10px;
        font-size: 18px;
    }

    .btn-search:hover {
        background-color: #195191;
    }

    .box-search-index {
        margin-top: 130px;
    }

    @media only screen and (max-width: 576px) {
        .box-search-index {
            margin-top: 100px;
        }
    }

    /* ==== logo đối tác */

    @media (max-width: 767px) {
        .carousel-inner .carousel-item>div {
            display: flex;
            justify-content: center;
        }

        .carousel-item img {
            max-width: 33%;
            /* Adjust size for mobile */
            margin: auto;
            /* Center the image */
        }
    }

    @media (min-width: 768px) {
        .carousel-inner .carousel-item>div {
            display: block;
        }

        .carousel-item img {
            max-width: 33.3333%;
            margin: 0 auto;
            padding: 10px;
        }
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>

    <base href=<?php echo $domainFromUrl ?> />

    <!-- <meta http-equiv="refresh" content="3"> -->
    <!-- META -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Tìm việc nhanh, tuyển dụng hiệu quả tại VietSeiko" />

    <title>Tìm việc nhanh, tuyển dụng hiệu quả tại VietSeiko</title>
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

    <!-- Thêm liên kết đến tệp CSS -->
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="public/css/skins-type/skin-6.css" />
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="public/css/switcher.css" />
    <!--css contact-->


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
    <!-- ccs search -->
    <style>
        .icon-zalo {
            position: fixed;
            bottom: 100px;
            right: 30px;
            cursor: pointer;
            z-index: 100;
        }
    </style>
</head>

<body>

    <?php require "header.php" ?>
    <div class="test" style="display: none;"></div>
    <div class="container">
        <!-- // form search -->
        <div class="box-search-index">
            <form method="get" action="/viec-lam-tai-viet-nam">
                <div class="row">
                    <div class="col-sm-9 col-lg-7 mt-3">
                        <input value="<?php
                                        if ($search != 'all') echo $search;
                                        ?>" name="search" class="input-name-job" type="text" placeholder="Tên việc làm" />
                    </div>
                    <div class="col-lg-3 mt-3 d-none d-lg-block">
                        <select name="id_diachi">
                            <option value="all">Khu vực</option>
                            <?php
                            foreach ($list_custom_tinhthanh as $index => $item) {
                            ?>
                                <option <?php
                                        if ($id_diachi == $index) echo 'selected="selected"'
                                        ?> value="<?php echo $index ?>">
                                    <?php echo $item ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-sm-3 col-lg-2 mt-3" style="display: flex; justify-content: center;">
                        <button type="submit" class="btn-search"><i class="bi bi-search"></i>Tìm việc</button>
                    </div>
                    <input name="id_nganhnghe" value="all" hidden />
                    <input name="id_hinhthuc" value="all" hidden />
                    <input name="id_kinhnghiem" value="all" hidden />
                    <input name="id_gioitinh" value="all" hidden />
                </div>
            </form>
        </div>
        <!-- slide banner -->
        <div class="owl-carousel carousel-banner-home banner-home mt-5">
            <?php
            foreach ($list_banner as $key => $value) {
            ?>
                <div class="item">
                    <img src="/images/banner/<?php echo $value['img'] ?>" />
                </div>
            <?php
            }
            ?>
        </div>

    </div>

    <div class="page-content">
        <div class="test" style="display: none;"></div>
        <section>
            <div class="container">
                <div class="mt-5">
                    <div class="img-bg">
                        <img src="/images/banner/<?php echo $vn[0]['img'] ?>" />
                    </div>
                    <div class="g1 mt-5">
                        <div class="title ">
                            <div class="job-name">
                                <div><?= __('Việc làm tại Việt Nam - Headhunter') ?></div>
                            </div>
                            <a href="/viec-lam-tai-viet-nam">
                                <span class="btn-view-all"><?= __('Xem tất cả') ?></span>
                            </a>
                        </div>
                        <div class="job-list ">

                            <?php

                            $list_carousel = Job_f::getLatestJob(27);
                            // $list_carousel = [];
                            // for ($i = 0; $i < 4; $i++) {
                            //     $list_carousel = array_merge($list_carousel, $list_of_job_vn);
                            // }
                            ?>
                            <div class="owl-carousel carousel-job-list">
                                <?php for ($i = 0; $i < count($list_carousel); $i += $perItemCarousel) : ?>
                                    <div class="row">
                                        <div class="item ">
                                            <?php for ($j = 0; $j < $perItemCarousel && ($i + $j) < count($list_carousel); $j++) : ?>
                                                <div class="col-12 col-sm-12 col-lg-4">
                                                    <a href="<?php echo 'viec-lam-tai-viet-nam/' . $list_carousel[$i + $j]['slug'] ?>-<?php echo $list_carousel[$i + $j]['id_job'] ?>.html">

                                                        <div class="card-job">
                                                            <div class="chucvu">
                                                                <?php echo $list_carousel[$i + $j]['chucvu'] ?>
                                                            </div>
                                                            <div class="group-info">

                                                                <?php
                                                                if ($list_carousel[$i + $j]['id_cty'] == 1) {
                                                                ?>
                                                                    <div class="company-logo">
                                                                        <img src="public/images/logo.png" />
                                                                    </div>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <div class="company-logo">
                                                                        <?php echo $list_carousel[$i + $j]['img_cty'] ?>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                                <div class="content">
                                                                    <?php
                                                                    if ($list_carousel[$i + $j]['id_cty'] == 1) {
                                                                    ?>
                                                                        <div class="name_cty">
                                                                            <?php echo $list_carousel[$i + $j]['diachi_cuthe'] ?>
                                                                        </div>
                                                                    <?php
                                                                    } else {
                                                                    ?>
                                                                        <div class="name_cty">
                                                                            <?php echo $list_carousel[$i + $j]['name'] ?>
                                                                        </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                        <i class="bi bi-cash" style="margin-right: 5px;"></i>
                                                                        <?php echo $list_carousel[$i + $j]['mucluong'] ?>
                                                                    </div>
                                                                    <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                        <i class="bi bi-geo-alt" style="margin-right: 5px;"></i>
                                                                        <?php echo $list_carousel[$i + $j]['diachi'] ?>
                                                                    </div>
                                                                    <!-- <div class="eye-view">
                                                                    <i class="bi bi-eye"></i>9500 lượt xem
                                                                </div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php endfor; ?>

                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="mt-5">
                    <div class="img-bg">
                        <img src="/images/banner/<?php echo $xkld[0]['img'] ?>" />
                    </div>
                    <div class="g1 mt-5">
                        <div class="title ">
                            <div class="job-name">
                                <div><?= __('Xuất khẩu lao động Nhật Bản') ?></div>
                            </div>
                            <a href="viec-lam-xkld-nhat-ban">
                                <span class="btn-view-all"><?= __('Xem tất cả') ?></span>
                            </a>
                        </div>
                        <div class="job-list ">

                            <?php
                            $list_carousel = Job_NB_f::getLatestJob(27);
                            // $list_carousel = [];
                            // for ($i = 0; $i < 4; $i++) {
                            //     $list_carousel = array_merge($list_carousel, $list_of_job_vn);
                            // }

                            ?>
                            <div class="owl-carousel carousel-job-list">
                                <?php for ($i = 0; $i < count($list_carousel); $i += $perItemCarousel) : ?>
                                    <div class="row">
                                        <div class="item">
                                            <?php for ($j = 0; $j < $perItemCarousel && ($i + $j) < count($list_carousel); $j++) : ?>
                                                <div class="col-12 col-sm-12 col-lg-4">
                                                    <a href="<?php echo 'viec-lam-xkld-nhat-ban/' . $list_carousel[$i + $j]['slug'] ?>-<?php echo $list_carousel[$i + $j]['id_job'] ?>.html">
                                                        <div class="card-job" id='job-vietnam'>
                                                            <div class="chucvu">
                                                                <?php echo $list_carousel[$i + $j]['chucvu'] ?>
                                                            </div>
                                                            <div class="group-info">

                                                                <?php
                                                                if ($list_carousel[$i + $j]['id_cty'] == 1) {
                                                                ?>
                                                                    <div class="company-logo">
                                                                        <img src="public/images/logo.png" />
                                                                    </div>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <div class="company-logo">
                                                                        <?php echo $list_carousel[$i + $j]['img_cty'] ?>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                                <div class="content">
                                                                    <?php
                                                                    if ($list_carousel[$i + $j]['id_cty'] == 1) {
                                                                    ?>
                                                                        <div class="name_cty">
                                                                            <?php echo $list_carousel[$i + $j]['diachi_cuthe'] ?>
                                                                        </div>
                                                                    <?php
                                                                    } else {
                                                                    ?>
                                                                        <div class="name_cty">
                                                                            <?php echo $list_carousel[$i + $j]['name'] ?>
                                                                        </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                        <i class="bi bi-cash" style="margin-right: 5px;"></i>
                                                                        <?php echo $list_carousel[$i + $j]['mucluong'] ?>
                                                                    </div>
                                                                    <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                        <i class="bi bi-geo-alt" style="margin-right: 5px;"></i>
                                                                        <?php echo $list_carousel[$i + $j]['diachi'] ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="img-bg">
                        <img src="/images/banner/<?php echo $ksnb[0]['img'] ?>" />
                    </div>
                    <div class="g1 mt-5">
                        <div class="title ">
                            <div class="job-name">
                                <div><?= __('Kỹ sư & thông dịch viên tại Nhật Bản') ?></div>
                            </div>
                            <a href="viec-lam-ky-su-va-thong-dich-nhat-ban">
                                <span class="btn-view-all"><?= __('Xem tất cả') ?></span>
                            </a>
                        </div>
                        <div class="job-list ">
                            <?php
                            $list_carousel = Job_kysu_f::getLatestJob(27);

                            ?>
                            <div class="owl-carousel carousel-job-list">
                                <?php for ($i = 0; $i < count($list_carousel); $i += $perItemCarousel) : ?>
                                    <div class="row">
                                        <div class="item">
                                            <?php for ($j = 0; $j < $perItemCarousel && ($i + $j) < count($list_carousel); $j++) : ?>
                                                <div class="col-12 col-sm-12 col-lg-4">
                                                    <a href="<?php echo 'viec-lam-ky-su-va-thong-dich-nhat-ban/' . $list_carousel[$i + $j]['slug'] ?>-<?php echo $list_carousel[$i + $j]['id_job'] ?>.html">
                                                        <div class="card-job" id='job-vietnam'>
                                                            <div class="chucvu">
                                                                <?php echo $list_carousel[$i + $j]['chucvu'] ?>
                                                            </div>
                                                            <div class="group-info">

                                                                <?php
                                                                if ($list_carousel[$i + $j]['id_cty'] == 1) {
                                                                ?>
                                                                    <div class="company-logo">
                                                                        <img src="public/images/logo.png" />
                                                                    </div>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <div class="company-logo">
                                                                        <?php echo $list_carousel[$i + $j]['img_cty'] ?>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                                <div class="content">
                                                                    <?php
                                                                    if ($list_carousel[$i + $j]['id_cty'] == 1) {
                                                                    ?>
                                                                        <div class="name_cty">
                                                                            <?php echo $list_carousel[$i + $j]['diachi_cuthe'] ?>
                                                                        </div>
                                                                    <?php
                                                                    } else {
                                                                    ?>
                                                                        <div class="name_cty">
                                                                            <?php echo $list_carousel[$i + $j]['name'] ?>
                                                                        </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                        <i class="bi bi-cash" style="margin-right: 5px;"></i>
                                                                        <?php echo $list_carousel[$i + $j]['mucluong'] ?>
                                                                    </div>
                                                                    <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                        <i class="bi bi-geo-alt" style="margin-right: 5px;"></i>
                                                                        <?php echo $list_carousel[$i + $j]['diachi'] ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </a>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="img-bg">
                        <img src="/images/banner/<?php echo $vsk[0]['img'] ?>" />
                    </div>
                    <div class="g1 mt-5">
                        <div class="title ">
                            <div class="job-name">
                                <div><?= __('Việc làm tại Vietseiko') ?></div>
                            </div>
                            <a href="viec-lam-tai-vietseiko">
                                <span class="btn-view-all"><?= __('Xem tất cả') ?></span>
                            </a>
                        </div>
                        <div class="job-list ">
                            <?php
                            $list_carousel = Vietseiko_f::getLatestJob(27);

                            ?>
                            <div class="owl-carousel carousel-job-list">
                                <?php for ($i = 0; $i < count($list_carousel); $i += $perItemCarousel) : ?>
                                    <div class="row">
                                        <div class="item">
                                            <?php for ($j = 0; $j < $perItemCarousel && ($i + $j) < count($list_carousel); $j++) : ?>
                                                <div class="col-12 col-sm-12 col-lg-4">
                                                    <a href="<?php echo 'viec-lam-tai-vietseiko/' . $list_carousel[$i + $j]['slug'] ?>-<?php echo $list_carousel[$i + $j]['id_job'] ?>.html">
                                                        <div class="card-job" id='job-vietnam'>
                                                            <div class="chucvu">
                                                                <?php echo $list_carousel[$i + $j]['chucvu'] ?>
                                                            </div>
                                                            <div class="group-info">

                                                                <?php
                                                                if ($list_carousel[$i + $j]['id_cty'] == 1) {
                                                                ?>
                                                                    <div class="company-logo">
                                                                        <img src="public/images/logo.png" />
                                                                    </div>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <div class="company-logo">
                                                                        <?php echo $list_carousel[$i + $j]['img_cty'] ?>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                                <div class="content">
                                                                    <?php
                                                                    if ($list_carousel[$i + $j]['id_cty'] == 1) {
                                                                    ?>
                                                                        <div class="name_cty">
                                                                            <?php echo $list_carousel[$i + $j]['diachi_cuthe'] ?>
                                                                        </div>
                                                                    <?php
                                                                    } else {
                                                                    ?>
                                                                        <div class="name_cty">
                                                                            <?php echo $list_carousel[$i + $j]['name'] ?>
                                                                        </div>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                        <i class="bi bi-cash" style="margin-right: 5px;"></i>
                                                                        <?php echo $list_carousel[$i + $j]['mucluong'] ?>
                                                                    </div>
                                                                    <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                        <i class="bi bi-geo-alt" style="margin-right: 5px;"></i>
                                                                        <?php echo $list_carousel[$i + $j]['diachi'] ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- JOB POST END -->


        <!-- TOP COMPANIES START -->
        <div class="section-full p-t100 site-bg-white twm-companies-wrap">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <!-- Column 1: LIÊN KẾT VỚI CÁC DOANH NGHIỆP -->
                        <div class="col-lg-8 col-md-8 col-xs-12">
                            <h2 style="text-align: center;font-size: 24px;margin-bottom: 20px;"><?= __('LIÊN KẾT VỚI CÁC DOANH NGHIỆP') ?></h2>
                            <div class="owl-carousel home-client-carousel2 owl-btn-vertical-center">
                                <!-- Repeated Item Structure -->
                                <div class="item">
                                    <div class="logo-slide">
                                        <img src="images/client-logo/logo_olympus.png" alt="Olympus Logo" class="client-logo-media">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="logo-slide">
                                        <img src="images/client-logo/logo_lixil.jpg" alt="Lixil Logo" class="client-logo-media">
                                    </div>
                                </div>
                                <!-- Repeat this pattern for other logos -->
                                <div class="item">
                                    <div class="logo-slide">

                                        <img src="images/client-logo/logo_Nakajima.jpg" alt />

                                    </div>
                                </div>

                                <div class="item">
                                    <div class="logo-slide">

                                        <img src="images/client-logo/shimizu_logo.png" alt />

                                    </div>
                                </div>

                                <div class="item">
                                    <div class="logo-slide">

                                        <img src="images/client-logo/logo_Sumitomo.png" alt />

                                    </div>
                                </div>
                                <div class="item">
                                    <div class="logo-slide">

                                        <img src="images/client-logo/logo_nidec.png" alt />

                                    </div>
                                </div>

                                <div class="item">
                                    <div class="logo-slide">

                                        <img src="images/client-logo/logo_olympus.png" alt />

                                    </div>
                                </div>

                                <div class="item">
                                    <div class="logo-slide">

                                        <img src="images/client-logo/logo_lixil.jpg" alt />

                                    </div>
                                </div>

                                <div class="item">

                                    <div class="logo-slide">
                                        <img src="images/client-logo/logo_Nakajima.jpg" alt />
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Column 2: LOGO ĐỐI TÁC -->
                        <div class="col-lg-4 col-md-4 col-12">
                            <h2 style="text-align: center;font-size: 24px;margin-bottom: 20px;"><?= __('LOGO ĐỐI TÁC') ?></h2>
                            <div id="partnerLogoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="d-flex justify-content-center">
                                            <img src="images/client-logo/TM Branding.jpg" class="img-fluid" alt="TM Branding Logo">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-flex justify-content-center">
                                            <img src="images/client-logo/vov.jpg" class="img-fluid" alt="VOV Logo">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-flex justify-content-center">
                                            <img src="images/client-logo/hutech.jpg" class="img-fluid" alt="Hutech Logo">
                                        </div>
                                    </div>
                                    <!-- Add more items here -->
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#partnerLogoCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#partnerLogoCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END -->
            </div>

        </div>
        <!-- TOP COMPANIES END -->

        <!-- TESTIMONIAL SECTION START -->
        <div class="section-full site-bg-white twm-testimonial-1-area">
            <div class="container">
                <div class="wt-separator-two-part">
                    <div class="row wt-separator-two-part-row">
                        <div class=" wt-separator-two-part-left">
                            <!-- TITLE START-->
                            <div class="section-head left wt-small-separator-outer">
                                <div class="wt-small-separator site-text-primary">
                                    <h2 style="text-align: center;font-size: 24px;font-family: 'Roboto', sans-serif !important;margin-top: 50px;display: flex; align-items: center;justify-content: center;">
                                        <?= __('CẢM NHẬN CỦA NGƯỜI LAO ĐỘNG') ?>
                                    </h2>

                                </div>

                            </div>
                            <!-- TITLE END-->
                        </div>
                    </div>
                </div>

                <div class="section-content">
                    <div class="owl-carousel twm-testimonial-1-carousel owl-btn-bottom-center">
                        <!-- COLUMNS 1 -->
                        <?php
                        $list_review = $review::getAll_review();
                        foreach ($list_review as $key => $value) {
                        ?>
                            <div class="item">
                                <div class="twm-testimonial-1">
                                    <div class="twm-testimonial-1-content">
                                        <div class="twm-testi-media">
                                            <img src="/images/review/<?php echo $value['img_review'] ?>" />
                                        </div>

                                        <div class="twm-testi-content">
                                            <div class="twm-quote">
                                                <img src="images/quote-dark.png" alt="" />
                                            </div>
                                            <div class="twm-testi-info">
                                                <?php echo $value['mota'] ?>
                                            </div>
                                            <div class="twm-testi-detail">
                                                <div class="twm-testi-name">
                                                    <?php echo $value['name'] ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>


                    </div>
                </div>
            </div>
        </div>
        <!-- TESTIMONIAL SECTION END -->

        <!-- OUR BLOG START -->
        <div class="section-full p-t30 p-b90 site-bg-gray">
            <div class="container">
                <!-- TITLE START-->
                <div class="section-head center wt-small-separator-outer">
                    <div class="wt-small-separator site-text-primary">
                        <!-- <div>Tin tức</div> -->
                    </div>
                    <h2 class="wt-title"><?= __('Tin mới nhất') ?></h2>
                </div>
                <!-- TITLE END-->

                <div class="section-content">
                    <div class="twm-blog-post-1-outer-wrap">
                        <div class="owl-carousel twm-la-home-blog owl-btn-bottom-center">
                            <?php
                            $list_of_latestBlog = Blog_f::getLatestBlog(9);
                            foreach ($list_of_latestBlog as $key => $value) {
                            ?>
                                <div class="item">
                                    <div class="blog-post" style="margin-top: 20px; ">
                                        <div class="img_blog_l">
                                            <img src="/images/l-image-blog/<?php echo $value['img_blog'] ?>" />

                                        </div>
                                        <div class="blog-content">
                                            <div class="date-custom">
                                                <?php
                                                $dateTime = new DateTime($value['created_at']);
                                                $formattedDate = $dateTime->format('d/m/Y');
                                                echo $formattedDate; ?>
                                            </div>
                                            <a href="<?php echo 'tin-tuc/' . $value['slug'] ?>-<?php echo $value['id_blog'] ?>.html">
                                                <div class="name_blog">
                                                    <?php echo $value['tieude_blog'] ?>

                                                </div>
                                            </a>
                                            <div class="text-blog">

                                                <?php echo $value['noidung_blog'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <?php require "footer.php" ?>
</body>

</html>