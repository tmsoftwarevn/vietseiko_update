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

?>

<!-- ------------ -->

<style>
    <?php include 'public/scss/custom.scss';
    include 'public/scss/banner.scss'; ?>select {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 10px;
    }

    option {
        font-size: 17px;
    }

    .slides {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .slide {
        min-width: 100%;
    }
</style>

<title>Tìm việc nhanh, tuyển dụng hiệu quả tại VietSeiko</title>
<!-- CONTENT START -->
<div class="test" style="display: none;">v</div>
<div class="owl-carousel carousel-banner-home banner-home">

    <!-- <div class="item">
        <img src="images/banner/slide-03.jpg" />
    </div>
    <div class="item">
        <img src="images/banner/slide-01.jpg" />
    </div>
    <div class="item">
        <img src="images/banner/slide-02.jpg" />
    </div> -->
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
<div class="page-content">
    <!--Banner Start-->

    <!-- <div class="twm-home1-banner-section site-bg-gray bg-cover" style="background-image: url(images/main-slider/slider1/bg1.jpg)">
        <div class="row">

            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="twm-bnr-left-section">

                    <div class="twm-bnr-title-large" style="text-align: center;">
                        Tìm <span class="site-text-primary">công việc</span> phù hợp với nhu cầu của bạn
                    </div>


                    <div class="twm-bnr-search-bar">
                        <form action="search-list.php" method="get">
                            <div class="row">

                                <div class="form-group1 col-xl-3 col-lg-3 col-md-12">
                                    <label>Chọn ngành</label>
                                    <select class="form-select" style="cursor: pointer;">
                                        <option value="all">Tất cả</option>
                                        <?php
                                        foreach ($form_contact::getAllNganh_ung_tuyen() as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value['id_nganhnghe'] ?>">
                                                <?php echo $value['name_nganhnghe'] ?>
                                            </option>
                                        <?php } ?>

                                    </select>
                                </div>

                                <div class="form-group1 col-xl-3 col-lg-3 col-md-12 ">
                                    <label>Hình thức</label>
                                    <select class="form-select" style="cursor: pointer;">
                                        <option value="all">Tất cả</option>
                                        <?php
                                        foreach ($hinhthuc->getAllHinhThuc() as $key => $value) { ?>
                                            <option value="<?php echo $value['id_hinhthuc'] ?>">
                                                <?php echo $value['name_hinhthuc'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>


                                <div class="form-group1 col-xl-3 col-lg-3 col-md-12">
                                    <label>Khu vực</label>
                                    <div class="twm-inputicon-box">
                                        <select class="form-select" required name="location" style="cursor: pointer;">
                                            <option value="all">Tất cả</option>
                                            <?php
                                            foreach ($form_contact->fetch_tinh_thanh() as $index => $item) {
                                            ?>
                                                <option value="<?php echo $item ?>">
                                                    <?php echo $item ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-12">
                                    <input type="submit" name="submit" value="Tìm kiếm" class="site-button">
                                    </input>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 twm-bnr-right-section">
                <div class="twm-bnr-right-content">
                    <div class="twm-img-bg-circle-area">
                        <div class="twm-img-bg-circle1 rotate-center">
                            <span></span>
                        </div>
                        <div class="twm-img-bg-circle2 rotate-center-reverse">
                            <span></span>
                        </div>
                        <div class="twm-img-bg-circle3"><span></span></div>
                    </div>

                    <div class="twm-bnr-right-carousel">
                        <div class="owl-carousel twm-h1-bnr-carousal">
                            <div class="item">
                                <div class="slide-img">
                                    <img src="images/main-slider/slider1/r-img1.png" alt="#" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="slide-img">
                                    <div class="slide-img">
                                        <img src="images/main-slider/slider1/r-img2.png" alt="#" />
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="twm-small-ring-l slide-top-animation"></div>
                    <div class="twm-small-ring-2 slide-top-animation"></div>
                </div>
            </div>
        </div>
        <div class="twm-gradient-text">Jobs</div>
    </div> -->

    <!--Banner End-->

    <!-- HOW IT WORK SECTION START -->

    <!-- <div class="section-full p-t50 site-bg-white twm-how-it-work-area">
        <div class="container">
          
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                    <div>Working Process</div>
                </div>
                <h2 class="wt-title">How It Works</h2>
            </div>
           
            <div class="twm-how-it-work-section">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="twm-w-process-steps">
                            <span class="twm-large-number">01</span>
                            <div class="twm-w-pro-top bg-clr-sky">
                                <div class="twm-media">
                                    <span><img src="images/work-process/icon1.png" alt="icon1" /></span>
                                </div>
                                <h4 class="twm-title">Register<br />Your Account</h4>
                            </div>
                            <p>
                                You need to create an account to find the best and
                                preferred job.
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="twm-w-process-steps">
                            <span class="twm-large-number">02</span>
                            <div class="twm-w-pro-top bg-clr-pink">
                                <div class="twm-media">
                                    <span><img src="images/work-process/icon2.png" alt="icon1" /></span>
                                </div>
                                <h4 class="twm-title">
                                    Apply <br />
                                    For Dream Job
                                </h4>
                            </div>
                            <p>
                                You need to create an account to find the best and
                                preferred job.
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="twm-w-process-steps">
                            <span class="twm-large-number">03</span>
                            <div class="twm-w-pro-top bg-clr-green">
                                <div class="twm-media">
                                    <span><img src="images/work-process/icon3.png" alt="icon1" /></span>
                                </div>
                                <h4 class="twm-title">Upload <br />Your Resume</h4>
                            </div>
                            <p>
                                You need to create an account to find the best and
                                preferred job.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- HOW IT WORK SECTION END -->

    <!-- JOB POST START -->
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
                            <div><?= __('Việc làm tại Việt Nam') ?></div>
                        </div>
                        <a href="/viec-lam-tai-viet-nam">
                            <span class="btn-view-all"><?= __('Xem tất cả') ?></span>
                        </a>
                    </div>
                    <div class="job-list ">

                        <?php

                        $list_of_job_vn = Job_f::getLatestJob(27);
                        $new_list_of_job_vn = [];
                        for ($i = 0; $i < 4; $i++) {
                            $new_list_of_job_vn = array_merge($new_list_of_job_vn, $list_of_job_vn);
                        }
                        ?>
                        <div class="owl-carousel carousel-job-list">
                            <?php for ($i = 0; $i < count($new_list_of_job_vn); $i += $perItemCarousel) : ?>
                                <div class="row">
                                    <div class="item ">
                                        <?php for ($j = 0; $j < $perItemCarousel && ($i + $j) < count($new_list_of_job_vn); $j++) : ?>
                                            <div class="col-12 col-sm-12 col-lg-4">
                                                <a href="<?php echo 'viec-lam-tai-viet-nam/' . $new_list_of_job_vn[$i + $j]['slug'] ?>-<?php echo $new_list_of_job_vn[$i + $j]['id_job'] ?>.html">
                                                    <!-- <a href="job-detail.php?id=<?php echo $new_list_of_job_vn[$i + $j]['id_job'] ?>"> -->
                                                    <div class="card-job">
                                                        <div class="chucvu">
                                                            <?php echo $new_list_of_job_vn[$i + $j]['chucvu'] ?>
                                                        </div>
                                                        <div class="group-info">

                                                            <?php
                                                            if ($new_list_of_job_vn[$i + $j]['id_cty'] == 1) {
                                                            ?>
                                                                <div class="company-logo">
                                                                    <img src="public/images/logo.png" />
                                                                </div>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <div class="company-logo">
                                                                    <?php echo $new_list_of_job_vn[$i + $j]['img_cty'] ?>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="content">
                                                                <?php
                                                                if ($new_list_of_job_vn[$i + $j]['id_cty'] == 1) {
                                                                ?>
                                                                    <div class="name_cty">
                                                                        <?php echo $new_list_of_job_vn[$i + $j]['diachi_cuthe'] ?>
                                                                    </div>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <div class="name_cty">
                                                                        <?php echo $new_list_of_job_vn[$i + $j]['name'] ?>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                    <i class="bi bi-cash" style="margin-right: 5px;"></i>
                                                                    <?php echo $new_list_of_job_vn[$i + $j]['mucluong'] ?>
                                                                </div>
                                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                    <i class="bi bi-geo-alt" style="margin-right: 5px;"></i>
                                                                    <?php echo $new_list_of_job_vn[$i + $j]['diachi'] ?>
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
                        $list_of_job_vn = Job_NB_f::getLatestJob(27);
                        $new_list_of_job_vn = [];
                        for ($i = 0; $i < 4; $i++) {
                            $new_list_of_job_vn = array_merge($new_list_of_job_vn, $list_of_job_vn);
                        }

                        ?>
                        <div class="owl-carousel carousel-job-list">
                            <?php for ($i = 0; $i < count($new_list_of_job_vn); $i += $perItemCarousel) : ?>
                                <div class="row">
                                    <div class="item">
                                        <?php for ($j = 0; $j < $perItemCarousel && ($i + $j) < count($new_list_of_job_vn); $j++) : ?>
                                            <div class="col-12 col-sm-12 col-lg-4">
                                                <a href="<?php echo 'viec-lam-xkld-nhat-ban/' . $new_list_of_job_vn[$i + $j]['slug'] ?>-<?php echo $new_list_of_job_vn[$i + $j]['id_job'] ?>.html">
                                                    <div class="card-job" id='job-vietnam'>
                                                        <div class="chucvu">
                                                            <?php echo $new_list_of_job_vn[$i + $j]['chucvu'] ?>
                                                        </div>
                                                        <div class="group-info">

                                                            <?php
                                                            if ($new_list_of_job_vn[$i + $j]['id_cty'] == 1) {
                                                            ?>
                                                                <div class="company-logo">
                                                                    <img src="public/images/logo.png" />
                                                                </div>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <div class="company-logo">
                                                                    <?php echo $new_list_of_job_vn[$i + $j]['img_cty'] ?>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="content">
                                                                <?php
                                                                if ($new_list_of_job_vn[$i + $j]['id_cty'] == 1) {
                                                                ?>
                                                                    <div class="name_cty">
                                                                        <?php echo $new_list_of_job_vn[$i + $j]['diachi_cuthe'] ?>
                                                                    </div>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <div class="name_cty">
                                                                        <?php echo $new_list_of_job_vn[$i + $j]['name'] ?>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                    <i class="bi bi-cash" style="margin-right: 5px;"></i>
                                                                    <?php echo $new_list_of_job_vn[$i + $j]['mucluong'] ?>
                                                                </div>
                                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                    <i class="bi bi-geo-alt" style="margin-right: 5px;"></i>
                                                                    <?php echo $new_list_of_job_vn[$i + $j]['diachi'] ?>
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
                    <img src="public/images/bg-job.jpg" alt="" />
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
                        $list_of_job_vn = Job_kysu_f::getAllJob();
                        $new_list_of_job_vn = [];
                        for ($i = 0; $i < 4; $i++) {
                            $new_list_of_job_vn = array_merge($new_list_of_job_vn, $list_of_job_vn);
                        }

                        ?>
                        <div class="owl-carousel carousel-job-list">
                            <?php for ($i = 0; $i < count($new_list_of_job_vn); $i += $perItemCarousel) : ?>
                                <div class="row">
                                    <div class="item">
                                        <?php for ($j = 0; $j < $perItemCarousel && ($i + $j) < count($new_list_of_job_vn); $j++) : ?>
                                            <div class="col-12 col-sm-12 col-lg-4">
                                                <a href="<?php echo 'viec-lam-ky-su-va-thong-dich-nhat-ban/' . $new_list_of_job_vn[$i + $j]['slug'] ?>-<?php echo $new_list_of_job_vn[$i + $j]['id_job'] ?>.html">
                                                    <div class="card-job" id='job-vietnam'>
                                                        <div class="chucvu">
                                                            <?php echo $new_list_of_job_vn[$i + $j]['chucvu'] ?>
                                                        </div>
                                                        <div class="group-info">

                                                            <?php
                                                            if ($new_list_of_job_vn[$i + $j]['id_cty'] == 1) {
                                                            ?>
                                                                <div class="company-logo">
                                                                    <img src="public/images/logo.png" />
                                                                </div>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <div class="company-logo">
                                                                    <?php echo $new_list_of_job_vn[$i + $j]['img_cty'] ?>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="content">
                                                                <?php
                                                                if ($new_list_of_job_vn[$i + $j]['id_cty'] == 1) {
                                                                ?>
                                                                    <div class="name_cty">
                                                                        <?php echo $new_list_of_job_vn[$i + $j]['diachi_cuthe'] ?>
                                                                    </div>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <div class="name_cty">
                                                                        <?php echo $new_list_of_job_vn[$i + $j]['name'] ?>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                    <i class="bi bi-cash" style="margin-right: 5px;"></i>
                                                                    <?php echo $new_list_of_job_vn[$i + $j]['mucluong'] ?>
                                                                </div>
                                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                    <i class="bi bi-geo-alt" style="margin-right: 5px;"></i>
                                                                    <?php echo $new_list_of_job_vn[$i + $j]['diachi'] ?>
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
                    <img src="public/images/bg-job.jpg" alt="" />
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
                        $list_of_job_vn = Vietseiko_f::getAllJob();
                        $new_list_of_job_vn = [];
                        for ($i = 0; $i < 4; $i++) {
                            $new_list_of_job_vn = array_merge($new_list_of_job_vn, $list_of_job_vn);
                        }

                        ?>
                        <div class="owl-carousel carousel-job-list">
                            <?php for ($i = 0; $i < count($new_list_of_job_vn); $i += $perItemCarousel) : ?>
                                <div class="row">
                                    <div class="item">
                                        <?php for ($j = 0; $j < $perItemCarousel && ($i + $j) < count($new_list_of_job_vn); $j++) : ?>
                                            <div class="col-12 col-sm-12 col-lg-4">
                                                <a href="<?php echo 'viec-lam-tai-vietseiko/' . $new_list_of_job_vn[$i + $j]['slug'] ?>-<?php echo $new_list_of_job_vn[$i + $j]['id_job'] ?>.html">
                                                    <div class="card-job" id='job-vietnam'>
                                                        <div class="chucvu">
                                                            <?php echo $new_list_of_job_vn[$i + $j]['chucvu'] ?>
                                                        </div>
                                                        <div class="group-info">

                                                            <?php
                                                            if ($new_list_of_job_vn[$i + $j]['id_cty'] == 1) {
                                                            ?>
                                                                <div class="company-logo">
                                                                    <img src="public/images/logo.png" />
                                                                </div>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <div class="company-logo">
                                                                    <?php echo $new_list_of_job_vn[$i + $j]['img_cty'] ?>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="content">
                                                                <?php
                                                                if ($new_list_of_job_vn[$i + $j]['id_cty'] == 1) {
                                                                ?>
                                                                    <div class="name_cty">
                                                                        <?php echo $new_list_of_job_vn[$i + $j]['diachi_cuthe'] ?>
                                                                    </div>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                    <div class="name_cty">
                                                                        <?php echo $new_list_of_job_vn[$i + $j]['name'] ?>
                                                                    </div>
                                                                <?php
                                                                }
                                                                ?>
                                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                    <i class="bi bi-cash" style="margin-right: 5px;"></i>
                                                                    <?php echo $new_list_of_job_vn[$i + $j]['mucluong'] ?>
                                                                </div>
                                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                                    <i class="bi bi-geo-alt" style="margin-right: 5px;"></i>
                                                                    <?php echo $new_list_of_job_vn[$i + $j]['diachi'] ?>
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

        <div class="container">
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

                    <!-- <div class="item">
                        <div class="twm-testimonial-1">
                            <div class="twm-testimonial-1-content">
                                <div class="twm-testi-media">
                                    <img src="images/testimonials/pic-3.png" alt="#" />
                                </div>
                                <div class="twm-testi-content">
                                    <div class="twm-quote">
                                        <img src="images/quote-dark.png" alt="" />
                                    </div>
                                    <div class="twm-testi-info">
                                        <?= __('Công ty uy tín, hỗ trợ tôi rất nhiệt tình trong quá trình tư vấn công việc.') ?>
                                    </div>
                                    <div class="twm-testi-detail">
                                        <div class="twm-testi-name">Ms Nguyễn Văn D</div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
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
                        $list_of_latestBlog = Blog_f::getLatestBlog(6);
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


<?php
require_once 'footer.php';
?>