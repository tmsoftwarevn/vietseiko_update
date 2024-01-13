<?php
require_once "setting-all-file.php";
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$domain = $_SERVER['HTTP_HOST'];
$currentUrl = $protocol . '://' . $domain . $_SERVER['REQUEST_URI'];
$domainFromUrl = parse_url($currentUrl, PHP_URL_SCHEME) . '://' . parse_url($currentUrl, PHP_URL_HOST);

?>
<?php

//domain
$baseURL = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$baseURL .= "://" . $_SERVER['HTTP_HOST'];

$page = 1;
$resultsPerPage = 15;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    //echo "Khong nhan duoc ID";
}

$type = 'all';

if (isset($_GET['type'])) {
    $type = $_GET['type'];
} else {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hình ảnh - video</title>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/about-us.css">

    <!-- /// import lai header cu -->
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

        /* @media only screen and (max-width: 576px) {
            .icon-zalo {
                bottom: 100px;
            }
        } */
    </style>
</head>
<style>
    @media (min-width: 992px) {
        .logo-mobile-f {
            display: none !important;
        }
    }

    ul.tm-gallery-links {
        list-style-type: none;
        padding: 0;
    }

    ul.tm-gallery-links li {
        border: 1px solid #ccc;
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 34px;
        transition: border-color 0.3s;
    }

    ul.tm-gallery-links li:hover {
        background-color: #f5f5f5;
        border-color: #999;
    }


    .tm-gallery-item img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease-in-out;
    }

    .tm-gallery-item {
        width: calc(33.33% - 20px);
        float: left;
        margin: 10px;
        box-sizing: border-box;
    }


    .tm-gallery-item:hover img {
        transform: scale(1.05);
        /* Đảm bảo tỷ lệ khung hình */
    }

    /* Clear float sau khi kết thúc một hàng */
    .clearfix::after {
        content: "";
        display: table;
        clear: both;
    }

    .effect-honey {
        position: relative;
        overflow: hidden;
    }

    .effect-honey video {
        /* width: 100%; */
        height: auto;
        transition: transform 0.3s ease-in-out;
    }

    .effect-honey:hover video {
        transform: scale(1.05);
        /* Kích thước video lớn hơn khi di chuột vào */
    }

    .effect-honey figcaption {
        position: absolute;
        bottom: 10px;
        left: 10px;
        background-color: rgba(0, 0, 0, 0.7);
        /* Một lớp đen nhẹ để văn bản rõ ràng hơn */
        padding: 5px 10px;
        border-radius: 5px;
        color: #fff;
        opacity: 0;
        /* Ẩn figcaption ban đầu */
        transition: opacity 0.3s ease-in-out;
    }

    .effect-honey:hover figcaption {
        opacity: 1;
        /* Hiển thị figcaption khi di chuột vào */
    }

    .tm-gallery-item:nth-child(3n+1) {
        clear: both;
    }

    @media (max-width: 768px) {
        .tm-gallery-item {
            width: 100%;
            margin-bottom: 20px;
        }
    }

    @media (max-width: 768px) {
        .custom-bg {
            background-color: #ffffff;
        }
    }

    /* Dành cho thiết bị có độ rộng màn hình từ 768px đến 992px */
    @media (min-width: 768px) and (max-width: 992px) {
        .custom-bg {
            background-color: #ffffff;
        }
    }
</style>

<body>
    <?php
    include "header.php";
    ?>
    <div class="page-wraper">

        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image: url(images/banner/1.jpg)">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">

                        <!-- BREADCRUMB ROW -->
                        <div>
                            <ul class="wt-breadcrumb breadcrumb-style-2">
                                <li><a href="trang-chu">Trang chủ</a></li>
                                <li>Giới thiệu</li>
                            </ul>
                        </div>
                        <!-- BREADCRUMB ROW END -->
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12 custom-bg">
                        <div class="left_container">
                            <div class="left_container_title ">
                                <span class="left_container_title_label">ABOUT US</span>
                                <span class="left_container_title_ch">...</span>
                            </div>
                            <!-- //Giới thiệu -->
                            <div class="left_container_content ">
                                <div class="panel-group" id="accordion">
                                    <!-- GIỚI THIỆU CÔNG TY -->
                                    <div class="panel panel-default active">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="/gioi-thieu">
                                                    <span class="icon-wrapper">
                                                        <i class="fas fa-info-circle"></i> <!-- Icon trước span -->
                                                        <span class="collapse_large">GIỚI THIỆU CÔNG TY</span>
                                                    </span>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- THƯ NGÕ CỦA CEO -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/thu-ngo">
                                                <span class="icon-wrapper">
                                                    <i class="fas fa-envelope"></i>
                                                    <!-- Icon thư hoặc thư ngõ trước span -->
                                                    <span class="collapse_large">THƯ NGỎ</span>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- VỀ CHÚNG TÔI -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/ve-chung-toi">
                                                <span class="icon-wrapper">
                                                    <i class="fas fa-user"></i>
                                                    <!-- Icon đại diện cho "VỀ CHÚNG TÔI" -->
                                                    <span class="collapse_large">VỀ CHÚNG TÔI</span>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- TẦM NHÌN & SỨ MỆNH -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/tam-nhin-va-su-menh">
                                                <span class="icon-wrapper">
                                                    <i class="fas fa-binoculars"></i>
                                                    <!-- Icon đại diện cho "Tầm nhìn" -->
                                                    <span class="collapse_large">TẦM NHÌN & SỨ MỆNH</span>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- NGUYÊN TẮC -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/nguyen-tac">
                                                <span class="icon-wrapper">
                                                    <i class="fas fa-gavel"></i> <!-- Icon đại diện cho "Nguyên tắc" -->
                                                    <span class="collapse_large">NGUYÊN TẮC</span>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- NHỮNG GIÁ TRỊ VĂN HÓA -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/gia-tri-van-hoa">
                                                <span class="icon-wrapper">
                                                    <i class="fas fa-heart"></i>
                                                    <span class="collapse_large">GIÁ TRỊ VĂN HÓA</span>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- GIÁ TRỊ CỐT LÕI -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/gia-tri-cot-loi">
                                                <span class="icon-wrapper">
                                                    <i class="fas fa-shield-alt"></i>
                                                    <span class="collapse_large">GIÁ TRỊ CỐT LÕI</span>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- HÌNH ẢNH & VIDEO -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/hinh-anh-va-video">
                                                <span class="icon-wrapper">
                                                    <i class="fas fa-image"></i>
                                                    <span class="collapse_large">HÌNH ẢNH & VIDEO</span>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CONTEN BODY 1 -->
                        <p>&#8203;<img src="images/backround/nguyen-tac-tuyen-dung-nhan-su.jpg"></p>
                        <p>&#8203;<img src="images/backround/su-gan-bo-cua-cay-tre.jpg"></p>
                        <p>&#8203;<img src="images/backround/cherry-blossom.jpg"></p>

                    </div>
                    <!-- Cột 9 -->
                    <div class="col-md-9 col-sm-12 col-xs-12 custom-bg">
                        <div class="text-black">
                            <h2 class="text-center mb-4">HÌNH ẢNH - VIDEO CÔNG TY</h2>
                            <hr class="mb-5">
                            <div class="company-introduction">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row hinhanh-video">
                                            <!-- TM Parallax Section -->
                                            <div class="col">
                                                <div class="tm-section-wrap">
                                                    <div class="tm-parallax" data-parallax="scroll" data-image-src="img/img-02.jpg"></div>
                                                    <!-- Gallery Section -->
                                                    <section id="gallery" class="tm-section">
                                                        <!-- Gallery Links -->
                                                        <ul class="tm-gallery-links row">
                                                            <li class="col-md-3 col-sm-6" >
                                                                <a style="cursor: pointer;" href="<?php echo $baseURL . '/hinh-anh-va-video' ?>?page=1&type=all" class="active tm-gallery-link" data-filter="*">
                                                                    <i class="fas fa-layer-group tm-gallery-link-icon"></i>
                                                                    Tất cả
                                                                </a>
                                                            </li>
                                                            <li class="col-md-3 col-sm-6">
                                                                <a href="<?php echo $baseURL . '/hinh-anh-va-video' ?>?page=1&type=2" class="active tm-gallery-link" data-filter="*">
                                                                    <i class="fas fa-leaf tm-gallery-link-icon"></i>
                                                                    Logo công ty
                                                                </a>
                                                            </li>
                                                            <li class="col-md-3 col-sm-6">
                                                                <a href="<?php echo $baseURL . '/hinh-anh-va-video' ?>?page=1&type=1" class="active tm-gallery-link" data-filter="*">
                                                                    <i class="fas fa-portrait tm-gallery-link-icon"></i>
                                                                    Hình ảnh hoạt động công ty
                                                                </a>
                                                            </li>
                                                            <li class="col-md-3 col-sm-6">
                                                                <a href="<?php echo $baseURL . '/hinh-anh-va-video' ?>?page=1&type=3" class="active tm-gallery-link" data-filter="*">
                                                                    <i class="fas fa-video tm-gallery-link-icon"></i>
                                                                    Video công ty
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!-- // render image -->
                                                        <div class="row">

                                                            <?php
                                                            $list = $hinhanh_video->getAll_hinhanh_video_andCreatePagination_byType($page, $resultsPerPage, $type);
                                                            foreach ($list as $index => $value) {
                                                            ?>
                                                                <div class="<?php if ($type == 3) echo 'col-sm-6 col-md-6 mt-4';
                                                                            else echo 'col-sm-6 col-md-4' ?>">
                                                                    <?php
                                                                    if ($value['type'] == 3) {
                                                                        $id_video = $hinhanh_video->getVideoId($value['path']);
                                                                        $iframe_code = '<iframe width="100%" height="250px"src="https://www.youtube.com/embed/' . $id_video . '"  frameborder="0" allowfullscreen></iframe>';
                                                                        echo $iframe_code;
                                                                    } else {
                                                                        echo $value['path'];
                                                                    }
                                                                    ?>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <!-- page bootstrap -->
                                                        <?php
                                                        function generatePagination($currentPage, $totalPages)
                                                        {
                                                            $range = 2; // Number of pages before and after the current page to display
                                                            $output = '';
                                                            $d = 1;
                                                            global $totalPages;
                                                            $currentUrl = strtok($_SERVER["REQUEST_URI"], '?');
                                                            $queryString = $_SERVER["QUERY_STRING"];
                                                            if ($totalPages > 1) {
                                                                // Get the current URL without the query string
                                                                $currentUrl = strtok($_SERVER["REQUEST_URI"], '?');

                                                                // Get the current query parameters
                                                                $queryString = $_SERVER["QUERY_STRING"];

                                                                // Previous button
                                                                if ($currentPage > 1) {
                                                                    $prevPage = ($currentPage > 1) ? $currentPage - 1 : 1;
                                                                    $output .= '<li class="page-item">';
                                                                    $output .= '<a class="page-link" href="' . $currentUrl . '?' . getNewQueryString($queryString, 'page', $prevPage) . '" aria-label="Previous">';
                                                                    $output .= '<span aria-hidden="true">&laquo;</span>';
                                                                    $output .= '</a>';
                                                                    $output .= '</li>';
                                                                }

                                                                for ($i = 1; $i <= $totalPages; $i++) {
                                                                    $newQueryString = getNewQueryString($queryString, 'page', $i);
                                                                    if ($i == 1 || $i == $totalPages || ($i >= $currentPage - $range && $i <= $currentPage + $range)) {
                                                                        $output .= '<li class="page-item';
                                                                        $output .= ($i == $currentPage) ? ' active">' : '">';
                                                                        $output .= '<a class="page-link" href="' . $currentUrl . '?' . $newQueryString . '">' . $i . '</a>';
                                                                        $output .= '</li>';
                                                                    } elseif (!strpos($output, '<li class="page-item dots">...</li>') || $d < 3) {
                                                                        if ($d > 2) {
                                                                            continue;
                                                                        }

                                                                        $d = $d + 1;
                                                                        $output .= '<li class="page-item dots">...</li>';
                                                                    }
                                                                }

                                                                if ($currentPage < $totalPages) {
                                                                    $nextPage = ($currentPage < $totalPages) ? $currentPage + 1 : $totalPages;
                                                                    $output .= '<li class="page-item">';
                                                                    $output .= '<a class="page-link" href="' . $currentUrl . '?' . getNewQueryString($queryString, 'page', $nextPage) . '" aria-label="Next">';
                                                                    $output .= '<span aria-hidden="true">&raquo;</span>';
                                                                    $output .= '</a>';
                                                                    $output .= '</li>';
                                                                }
                                                            }

                                                            return $output;
                                                        }
                                                        $total = count($hinhanh_video->getAll_hinhanh_video_byType($type));
                                                        $totalPages = ceil(floatval($total) / floatval($resultsPerPage));
                                                        echo '<ul class="pagination justify-content-center pagination-lg" id="pagination">';
                                                        echo generatePagination($page, $totalPages);
                                                        echo '</ul>';
                                                        echo '<div style="margin-bottom: 20px"> </div>'
                                                        ?>
                                                        <?php

                                                        // Function to generate a new query string by replacing or adding a parameter
                                                        function getNewQueryString($queryString, $parameter, $value)
                                                        {
                                                            parse_str($queryString, $params);
                                                            $params[$parameter] = $value;
                                                            return http_build_query($params);
                                                        }

                                                        ?>
                                                    </section>

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
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
    <!-- Bootstrap JS và các thư viện liên quan -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>