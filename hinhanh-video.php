<?php
include "header.php";

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
    <title>Giới thiệu</title>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/about-us.css">
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
    <!-- LOADING AREA START ===== -->

    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">
        <!-- HEADER START -->

        <!-- HEADER END -->

        <!-- CONTENT START -->
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
                                                            <li class="col-md-3 col-sm-6">
                                                                <a href="<?php echo $baseURL . '/hinh-anh-va-video' ?>?page=1&type=all" class="active tm-gallery-link" data-filter="*">
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
                                                                        $iframe_code = '<iframe width="875" height="492" src="https://www.youtube.com/embed/' . $id_video . '"  frameborder="0" allowfullscreen></iframe>';
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

    <!-- Bootstrap JS và các thư viện liên quan -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

</body>

</html>
<?php
include "footer.php";
?>