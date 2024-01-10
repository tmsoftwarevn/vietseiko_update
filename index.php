<?php
require_once 'header.php';
require_once 'admin/models/gioi_tinh.php';

$totalShow = 5;
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

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

//// get all name job to search

$list = $search_f->search_custom($job::getAllJob(), $job_nb::getAllJob(), $job_kysu::getAllJob(), $job_vietseiko::getAllJob());
$list_search = json_encode($list);

?>

<!-- ------------ -->

<style>
    <?php include 'public/scss/custom.scss';
    include 'public/scss/banner.scss'; ?>.col-lg-4 {
        padding: 5px !important;
    }
</style>
<!-- /// search---------- -->
<!-- <style>
    .card-search {
        margin-top: 130px;
    }

    .search-container {
        position: relative;
        width: 100%;
        max-width: 100%;
        margin: 0 auto;
        z-index: 99;
    }

    @media only screen and (max-width: 576px) {
        .card-search {
            margin-top: 80px;
        }
    }

    .search-input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        box-sizing: border-box;
    }

    .search-input:focus {
        border-color: red;
    }

    .search-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        color: #555;
    }

    .search-results {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        z-index: 1;
    }

    .search-results-item {
        text-align: left;
        padding: 10px;
        cursor: pointer;
    }

    .search-results-item:hover {
        background-color: #f0f0f0;
    }
</style> -->
<style>
    .flex {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            margin: -1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }

        .search-container {
            display: flex;
            align-items: center;
        }

        .search-input,
        .search-select {
            padding: 10px;
            margin: 10px;
            border: 2px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.3s;
        }

        .search-input:focus,
        .search-select:focus {
            border-color: #3498db;
        }

        .search-button {
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            outline: none;
        }

        .search-button:hover {
            background-color: #2980b9;
        }
</style>
<title>Tìm việc nhanh, tuyển dụng hiệu quả tại VietSeiko</title>
<!-- CONTENT START -->
<div class="test" style="display: none;"></div>
<div class="container">
    <!-- // form search -->
    <!-- <div class="card-search">
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Tìm kiếm" id="searchInput">
            <i class="fas fa-search search-icon"></i>
            <div class="search-results" id="searchResults"></div>
        </div>
    </div> -->
    <form class="flex" style="margin-top: 150px;">
        <div class="search-container">
            <label for="search-input" class="sr-only">Search</label>
            <input type="search" id="search-input" class="search-input" placeholder="Search...">
        </div>
        <div class="search-container">
            <label for="category-select" class="sr-only">Category</label>
            <select id="category-select" class="search-select">
                <option value="category1">Category 1</option>
                <option value="category2">Category 2</option>
                <option value="category3">Category 3</option>
            </select>
        </div>
        <div class="search-container">
            <label for="location-select" class="sr-only">Location</label>
            <select id="location-select" class="search-select">
                <option value="location1">Location 1</option>
                <option value="location2">Location 2</option>
                <option value="location3">Location 3</option>
            </select>
        </div>
        <button type="submit" class="search-button">
            Search
        </button>
    </form>
    <div class="owl-carousel carousel-banner-home banner-home mt-5">
        <?php
        foreach ($list_banner as $key => $value) {
        ?>
            <div class="item">
                <?php
                echo $value['img'];
                ?>
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
                    <!-- <img src="public/images/bg-job.jpg" alt="anh" /> -->
                    <?php echo $vn[0]['img'] ?>
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
                    <?php echo $xkld[0]['img'] ?>
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
                    <?php echo $ksnb[0]['img'] ?>
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
                    <?php echo $vsk[0]['img'] ?>
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
        <!-- TITLE START-->
        <div class="section-head center wt-small-separator-outer">
            <h2 class="wt-title" style="font-size: 24px;"><?= __('LIÊN KẾT VỚI CÁC DOANH NGHIỆP - TẠO CƠ HỘI LÀM VIỆC CHO NGƯỜI LAO ĐỘNG') ?></h2>
        </div>
        <!-- TITLE END-->

        <div class="container" style="margin-top: 30px;">
            <div class="section-content mt-5">
                <div class="owl-carousel home-client-carousel2 owl-btn-vertical-center">
                    <div class="item">
                        <div class="logo-slide">
                            <img src="images/client-logo/logo_olympus.png" alt="" />
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo-slide">
                            <img src="images/client-logo/logo_lixil.jpg" alt="" />
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo-slide">
                            <img src="images/client-logo/logo_Nakajima.jpg" alt="" />
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo-slide">
                            <img src="images/client-logo/shimizu_logo.png" alt="" />
                        </div>
                    </div>

                    <div class="item">
                        <div class="logo-slide">
                            <img src="images/client-logo/logo_Sumitomo.png" alt="" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="logo-slide">
                            <img src="images/client-logo/logo_nidec.png" alt="" />
                        </div>
                    </div>

                </div>
            </div>
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
                                <h2 style="font-size: 24px;font-family: 'Roboto', sans-serif !important;margin: 130px 0 20px;display: flex; align-items: center;justify-content: center;">
                                    <?= __('CẢM NHẬN CỦA NGƯỜI LAO ĐỘNG') ?>
                                </h2>
                                <!-- <p style="font-family: 'Roboto', sans-serif; color: unset;">
                                    Mọi người nói gì về các dịch vụ mà Vietseiko cung cấp khi họ đến với công ty
                            </p> -->
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
                                        <?php echo $value['img_review'] ?>
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
    <div class="section-full p-t50 p-b90 site-bg-gray">
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
                                        <?php echo $value['img_blog'] ?>
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
    <!-- //fixxxx -->
    <!-- OUR BLOG END -->
</div>
<!-- CONTENT END -->
<script>
    const suggestions = <?php echo $list_search; ?>;

    console.log('check list: ', suggestions);
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');

    searchInput.addEventListener('input', function() {
        const searchTerm = searchInput.value.toLowerCase();

        const matchingNames = suggestions.filter(entry => {
            const normalizedEntry = entry.name.toLowerCase();
            return normalizedEntry.includes(searchTerm);
        });

        displaySuggestions(matchingNames.slice(0, 6)); // Limit to the first 8 suggestions
    });
    document.addEventListener('click', function(event) {
        const searchContainer = document.querySelector('.search-container');
        if (!searchContainer.contains(event.target)) {
            searchResults.style.display = 'none';
        }
    });
    searchResults.addEventListener('click', function(event) {
        const resultItem = event.target.closest('.search-results-item');
        if (resultItem) {
            const suggestion = suggestions.find(s => s.name === resultItem.textContent);
            if (suggestion) {
                navigateToDetailPage(suggestion.name, suggestion.type_job, suggestion.id);
            }
        }
    });

    function displaySuggestions(suggestions) {
        searchResults.innerHTML = '';

        suggestions.forEach(suggestion => {
            const resultItem = document.createElement('div');
            resultItem.classList.add('search-results-item');
            resultItem.textContent = suggestion.name;
            searchResults.appendChild(resultItem);
        });

        if (suggestions.length > 0) {
            searchResults.style.display = 'block';
        } else {
            searchResults.style.display = 'none';
        }
    }

    function navigateToDetailPage(name, type_job, id) {
        const slug = toSlug(name);
        if (type_job == 1) window.location.href = `/viec-lam-tai-viet-nam/${slug}-${id}.html`;
        if (type_job == 2) window.location.href = `/viec-lam-xkld-nhat-ban/${slug}-${id}.html`;
        if (type_job == 3) window.location.href = `/viec-lam-ky-su-va-thong-dich-nhat-ban/${slug}-${id}.html`;
        if (type_job == 4) window.location.href = `/viec-lam-tai-vietseiko/${slug}-${id}.html`;
    }
</script>
<script>
    function toSlug(str) {
        // Chuyển hết sang chữ thường
        str = str.toLowerCase();

        // xóa dấu
        str = str.replace(/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/g, 'a');
        str = str.replace(/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/g, 'e');
        str = str.replace(/(ì|í|ị|ỉ|ĩ)/g, 'i');
        str = str.replace(/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/g, 'o');
        str = str.replace(/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/g, 'u');
        str = str.replace(/(ỳ|ý|ỵ|ỷ|ỹ)/g, 'y');
        str = str.replace(/(đ)/g, 'd');

        // Xóa ký tự đặc biệt
        str = str.replace(/([^0-9a-z-\s])/g, '');

        // Xóa khoảng trắng thay bằng ký tự -
        str = str.replace(/(\s+)/g, '-');

        // Xóa ký tự - liên tiếp
        str = str.replace(/-+/g, '-');

        // xóa phần dự - ở đầu
        str = str.replace(/^-+/g, '');

        // xóa phần dư - ở cuối
        str = str.replace(/-+$/g, '');

        // return
        return str;
    }
</script>

<?php
require_once 'footer.php';
?>