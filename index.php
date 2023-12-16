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

?>
<style>
    <?php include 'public/scss/custom.scss'; ?>
</style>

<title>Tìm việc nhanh, tuyển dụng hiệu quả tại VietSeiko</title>
<!-- CONTENT START -->
<div class="test" style="display: none;">v</div>
<div class="page-content">
    <!--Banner Start-->
    <div class="twm-home1-banner-section site-bg-gray bg-cover" style="background-image: url(images/main-slider/slider1/bg1.jpg)">
        <div class="row">
            <!--Left Section-->
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="twm-bnr-left-section">
                    <div class="twm-bnr-title-small">
                        Chúng ta có <span class="site-text-primary">208,000+</span> Việc làm trực tiếp
                    </div>
                    <div class="twm-bnr-title-large">
                        Tìm <span class="site-text-primary">công việc</span> phù hợp với cuộc sống của bạn
                    </div>
                    <div class="twm-bnr-discription">
                        Nhập từ khóa của bạn, sau đó nhấp vào tìm kiếm để tìm công việc hoàn hảo của bạn.
                    </div>

                    <div class="twm-bnr-search-bar">
                        <form action="rearch-result.php" method="get">
                            <div class="row">
                                <!--Title-->
                                <div class="form-group1 col-xl-3 col-lg-6 col-md-6">
                                    <label>Chọn ngành</label>
                                    <select class="form-select" style="cursor: pointer;">
                                        <option value="all">Tất cả</option>
                                        <?php
                                        foreach ($nganh_ung_tuyen->getAllNganh_ung_tuyen() as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value['id'] ?>">
                                                <?php echo $value['ten_nganh'] ?>
                                            </option>
                                        <?php } ?>

                                    </select>
                                </div>

                                <!--All Category-->
                                <!-- class="wt-search-bar-select selectpicker" data-live-search="true" title="" id="j-All_Category" data-bv-field="size" -->
                                <div class="form-group1 col-xl-3 col-lg-6 col-md-6">
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

                                <!--Location-->
                                <div class="form-group1 col-xl-3 col-lg-6 col-md-6">
                                    <label>Khu vực</label>
                                    <div class="twm-inputicon-box">
                                        <!-- <input name="keyword" type="text" required class="form-control" placeholder="Search..." /> -->
                                        <select class="form-select" required name="location" style="cursor: pointer;">
                                            <!-- <option disabled selected value>-- Tất cả --</option> -->
                                            <option value="all">Tất cả</option>
                                            <?php
                                            foreach ($nganh_ung_tuyen->fetch_tinh_thanh() as $index => $item) {
                                            ?>
                                                <option value="<?php echo $item ?>">
                                                    <?php echo $item ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <!-- <i class="twm-input-icon bi bi-geo-alt"></i> -->
                                    </div>
                                </div>

                                <!--Find job btn-->
                                <div class="form-group1 col-xl-3 col-lg-6 col-md-6">
                                    <input type="submit" name="submit" value="Search" class="site-button">
                                    </input>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="twm-bnr-popular-search">
                        <span class="twm-title">Popular Searches:</span>
                        <a href="job-list.html">Developer</a> ,
                        <a href="job-list.html">Designer</a> ,
                        <a href="job-list.html">Architect</a> ,
                        <a href="job-list.html">Engineer</a> ...
                    </div>
                </div>
            </div>

            <!--right Section-->
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

                        <div class="twm-bnr-blocks-position-wrap">
                            <!--icon-block-1-->
                            <div class="twm-bnr-blocks twm-bnr-blocks-position-1">
                                <div class="twm-icon">
                                    <img src="images/main-slider/slider1/icon-1.png" alt="" />
                                </div>
                                <div class="twm-content">
                                    <div class="tw-count-number text-clr-sky">
                                        <span class="counter">12</span>K+
                                    </div>
                                    <p class="icon-content-info">Companies Jobs</p>
                                </div>
                            </div>

                            <!--icon-block-2-->
                            <div class="twm-bnr-blocks twm-bnr-blocks-position-2">
                                <div class="twm-icon">
                                    <img src="images/main-slider/slider1/icon-2.png" alt="" />
                                </div>
                                <div class="twm-content">
                                    <div class="tw-count-number text-clr-pink">
                                        <span class="counter">98</span> +
                                    </div>
                                    <p class="icon-content-info">Job For Countries</p>
                                </div>
                            </div>

                            <!--icon-block-3-->
                            <div class="twm-bnr-blocks-3 twm-bnr-blocks-position-3">
                                <div class="twm-pics">
                                    <span><img src="images/main-slider/slider1/user/u-1.jpg" alt="" /></span>
                                    <span><img src="images/main-slider/slider1/user/u-2.jpg" alt="" /></span>
                                    <span><img src="images/main-slider/slider1/user/u-3.jpg" alt="" /></span>
                                    <span><img src="images/main-slider/slider1/user/u-4.jpg" alt="" /></span>
                                    <span><img src="images/main-slider/slider1/user/u-5.jpg" alt="" /></span>
                                    <span><img src="images/main-slider/slider1/user/u-6.jpg" alt="" /></span>
                                </div>
                                <div class="twm-content">
                                    <div class="tw-count-number text-clr-green">
                                        <span class="counter">3</span>K+
                                    </div>
                                    <p class="icon-content-info">Jobs Done</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Samll Ring Left-->
                    <div class="twm-small-ring-l slide-top-animation"></div>
                    <div class="twm-small-ring-2 slide-top-animation"></div>
                </div>
            </div>
        </div>
        <div class="twm-gradient-text">Jobs</div>
    </div>
    <!--Banner End-->

    <!-- HOW IT WORK SECTION START -->
    <div class="section-full p-t50 site-bg-white twm-how-it-work-area">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                    <div>Working Process</div>
                </div>
                <h2 class="wt-title">How It Works</h2>
            </div>
            <!-- TITLE END-->

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
    </div>
    <!-- HOW IT WORK SECTION END -->

    <!-- JOB POST START -->
    <section class="job-section alternate p-t20" style="padding: 50px 0; background: #f3f5f7!important;">
        <div class="auto-container">
            <div class="default-tabs tabs-box wrapper tabbed">
                <!--Tabs Box-->
                <nav class="list-inline scrollto"></nav>
                <ul class="tab-buttons wrapper">
                    <div class="sec-title text-center" style="margin-bottom: 10px;">
                        <h2 style="font-size: 24px; font-weight: bold;">Thông tin</h2>
                    </div>
                    <div style="display: flex;">
                        <li class="tab-btn active">
                            <a href="#1" class="tabbed-trigger 
                            <?php
                            if ($typeJob == 'vn') echo ' clicked'
                            ?>
                            " data-id="tabbed1" onclick="changeUrl_vn()" ;>
                                <span>Việc làm tại Việt Nam</span>
                            </a>
                        </li>
                        <li class="tab-btn">
                            <a href="#2" class="tabbed-trigger
                            <?php
                            if ($typeJob == 'nb') echo ' clicked'
                            ?>
                            " data-id="tabbed2" onclick="changeUrl_nb()" ;>
                                <span>XKLD Nhật Bản</span>
                            </a>

                        </li>
                        <li class="tab-btn">
                            <a href="#3" class="tabbed-trigger
                            <?php
                            if ($typeJob == 'ks') echo ' clicked'
                            ?> 
                            " data-id="tabbed3" onclick="changeUrl_ks()" ;>
                                <span>Kỹ sư & Thông dịch tại Nhật Bản</span>
                            </a>
                        </li>
                        <li class="tab-btn">
                            <a href="#4" class="tabbed-trigger
                            <?php
                            if ($typeJob == 'vsk') echo ' clicked' ?>" data-id="tabbed4" onclick="changeUrl_vs()" ;>
                                <span>Việc làm tại VietSeiko</span>
                            </a>
                        </li>
                    </div>

                </ul>
                </nav>
            </div>

            <div class="tabs-content wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp">
                <div class="tab active-tab animated fadeIn" id="tabbed1" style="<?php if ($typeJob == 'vn') echo 'display: block';
                                                                                else echo 'display: none' ?>">
                    <div class="row">
                        <!-- Job Block -->
                        <?php

                        $list_of_job_vn = Job::getAllJob_andCreatePagination($currentPage, $totalShow);

                        $list_all = count(Job::getAllJob());
                        if ($typeJob == 'vn') {
                            $totalPages = ceil(floatval($list_all) / floatval($totalShow));
                        }
                        foreach ($list_of_job_vn as $key => $value) {
                        ?>
                            <div class="col-lg-4 col-md-12 col-sm-12 ">
                                <a href="job-detail.php?id=<?php echo $value['id_job'] ?>" style="display: block;">

                                    <div class="g-pr" id='job-vietnam'>
                                        <div class="chucvu">
                                            <?php echo $value['chucvu'] ?>
                                        </div>
                                        <div class="group-info">
                                            <div class="company-logo">
                                                <?php echo $value['img_cty'] ?>
                                            </div>
                                            <div class="content">
                                                <div class="name_job">
                                                    <?php echo $value['name'] ?>
                                                </div>

                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                    <i class="bi bi-cash"></i>
                                                    <?php echo $value['mucluong'] ?> triệu
                                                </div>
                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                    <i class="bi bi-geo-alt"></i>
                                                    <?php echo $value['diachi'] ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>

                </div>

                <div class="tab animated fadeIn" id="tabbed2" style="<?php if ($typeJob == 'nb') echo 'display: block';
                                                                        else echo 'display: none' ?>">
                    <div class="row">
                        <!-- Job Block - Replace with PHP loop -->
                        <?php
                        $list_of_latestJob_NB = Job_NB_f::getAllJob_andCreatePagination_admin($currentPage, $totalShow);
                        $list_all = count(Job_NB_f::getAllJob());
                        if ($typeJob == 'nb') {
                            $totalPages = ceil(floatval($list_all) / floatval($totalShow));
                        }
                        foreach ($list_of_latestJob_NB as $key => $value) {
                        ?>
                            <div class="col-lg-4 col-md-12 col-sm-12 ">
                                <a href="job-detail_NB.php?id=<?php echo $value['id_job'] ?>" style="display: block;">

                                    <div class="g-pr" id='job-vietnam'>
                                        <div class="chucvu">
                                            <?php echo $value['chucvu'] ?>
                                        </div>
                                        <div class="group-info">
                                        <div class="company-logo">
                                                <?php echo $value['img_cty'] ?>
                                            </div>
                                            <div class="content">

                                                <div class="name_job">
                                                    <?php echo $value['name'] ?>
                                                </div>

                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                    <i class="bi bi-cash"></i>
                                                    <?php echo $value['mucluong'] ?> triệu
                                                </div>
                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                    <i class="bi bi-geo-alt"></i>
                                                    <?php echo $value['diachi'] ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>

                </div>

                <div class="tab animated fadeIn" id="tabbed3" style="<?php if ($typeJob == 'ks') echo 'display: block';
                                                                        else echo 'display: none' ?>">
                    <div class="row">
                        <!-- Job Block - Replace with PHP loop -->
                        <?php
                         $list_of_latestJob_NB = Job_kysu_f::getAllJob_andCreatePagination_admin($currentPage, $totalShow);
                         $list_all = count(Job_kysu_f::getAllJob());
                        if ($typeJob == 'nb') {
                            $totalPages = ceil(floatval($list_all) / floatval($totalShow));
                        }
                        foreach ($list_of_latestJob_NB as $key => $value) {
                        ?>
                            <div class="col-lg-4 col-md-12 col-sm-12 ">
                                <a href="job-detail-kysunb.php?id=<?php echo $value['id_job'] ?>" style="display: block;">

                                    <div class="g-pr" id='job-vietnam'>
                                        <div class="chucvu">
                                            <?php echo $value['chucvu'] ?>
                                        </div>
                                        <div class="group-info">
                                        <div class="company-logo">
                                                <?php echo $value['img_cty'] ?>
                                            </div>
                                            <div class="content">

                                                <div class="name_job">
                                                    <?php echo $value['name'] ?>
                                                </div>

                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                    <i class="bi bi-cash"></i>
                                                    <?php echo $value['mucluong'] ?> triệu
                                                </div>
                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                    <i class="bi bi-geo-alt"></i>
                                                    <?php echo $value['diachi'] ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="tab animated fadeIn" id="tabbed4" style="<?php if ($typeJob == 'vsk') echo 'display: block';
                                                                        else echo 'display: none' ?>">
                     <div class="row">
                        <!-- Job Block - Replace with PHP loop -->
                        <?php
                        $list_of_latestJob_NB = Vietseiko_f::getAllJob_andCreatePagination_admin($currentPage, $totalShow);
                        $list_all = count(Vietseiko_f::getAllJob());
                        if ($typeJob == 'nb') {
                            $totalPages = ceil(floatval($list_all) / floatval($totalShow));
                        }
                        foreach ($list_of_latestJob_NB as $key => $value) {
                        ?>
                            <div class="col-lg-4 col-md-12 col-sm-12 ">
                                <a href="job-detail-vietseiko.php?id=<?php echo $value['id_job'] ?>" style="display: block;">

                                    <div class="g-pr" id='job-vietnam'>
                                        <div class="chucvu">
                                            <?php echo $value['chucvu'] ?>
                                        </div>
                                        <div class="group-info">
                                        <div class="company-logo">
                                                <?php echo $value['img_cty'] ?>
                                            </div>
                                            <div class="content">

                                                <div class="name_job">
                                                    <?php echo $value['name'] ?>
                                                </div>

                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                    <i class="bi bi-cash"></i>
                                                    <?php echo $value['mucluong'] ?> triệu
                                                </div>
                                                <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                                    <i class="bi bi-geo-alt"></i>
                                                    <?php echo $value['diachi'] ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
            <!-- // page  -->
            <div style="border-bottom: 1px solid #1967d2;"></div>
            <!-- page bootstrap -->
            <?php

            function generatePagination($currentPage, $totalPages)
            {
                $range = 2; // Number of pages before and after the current page to display
                $output = '';
                $d = 1;
                global $typeJob;

                if ($totalPages > 1) {
                    // Previous button
                    if ($currentPage > 1) {
                        $prevPage = ($currentPage > 1) ? $currentPage - 1 : 1;
                        $output .= '<li class="page-item">';
                        $output .= '<a class="page-link" href="?page=' . $prevPage . '&type=' . $typeJob . '" aria-label="Previous">';
                        $output .= '<span aria-hidden="true">&laquo;</span>';
                        $output .= '</a>';
                        $output .= '</li>';
                    }

                    for ($i = 1; $i <= $totalPages; $i++) {

                        if ($i == 1 || $i == $totalPages || ($i >= $currentPage - $range && $i <= $currentPage + $range)) {
                            $output .= '<li class="page-item';
                            $output .= ($i == $currentPage) ? ' active">' : '">';
                            $output .= '<a class="page-link" href="?page=' . $i . '&type=' . $typeJob . ' ">' . $i . '</a>';
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
                        $output .= '<a class="page-link" href="?page=' . $nextPage . '&type=' . $typeJob . '" aria-label="Next">';
                        $output .= '<span aria-hidden="true">&raquo;</span>';
                        $output .= '</a>';
                        $output .= '</li>';
                    }
                }

                return $output;
            }
            // $totalPages = 10; // Replace with the actual total number of pages
            // $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

            echo '<ul class="pagination justify-content-end pagination-lg" id="pagination">';
            echo generatePagination($currentPage, $totalPages);
            echo '</ul>';
            ?>
        </div>

    </section>
    <!-- JOB POST END -->

    <!-- EXPLORE NEW LIFE START -->
    <!-- <div class="section-full p-t20 p-b20 twm-explore-area bg-cover" style="background-image: url(images/background/bg-1.jpg)">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="twm-explore-media-wrap">
                            <div class="twm-media" style="width: 70%; height: 70%;">
                                <img src="images/gir-large.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <div class="twm-explore-content-outer">
                            <div class="twm-explore-content">
                                <div class="twm-l-line-1"></div>
                                <div class="twm-l-line-2"></div>

                                <div class="twm-r-circle-1"></div>
                                <div class="twm-r-circle-2"></div>

                                <div class="twm-title-small">Explore New Life</div>
                                <div class="twm-title-large">
                                    <h2>
                                        <span>Một CV tốt</span> mở ra cánh cửa dẫn đến thành công
                                    </h2>
                                    <p>
                                        Dễ dàng tạo CV xịn, gây ấn tượng tốt với Nhà tuyển dụng và gia tăng
                                        cơ hội được lựa chọn phỏng vấn
                                    </p>
                                </div>
                                <div class="twm-upload-file">
                                    <button type="button" class="site-button">
                                        Tạo CV ngay <i class="feather-upload"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="twm-bold-circle-right"></div>
                            <div class="twm-bold-circle-left"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- EXPLORE NEW LIFE END -->

    <!-- TOP COMPANIES START -->
    <div class="section-full p-t50 site-bg-white twm-companies-wrap">
        <!-- TITLE START-->
        <div class="section-head center wt-small-separator-outer">
            <h2 class="wt-title" style="font-size: 24px;">LIÊN KẾT VỚI CÁC DOANH NGHIỆP - TẠO CƠ HỘI LÀM VIỆC CHO MGƯỜI LAO ĐỘNG</h2>
        </div>
        <!-- TITLE END-->

        <div class="container">
            <div class="section-content">
                <div class="owl-carousel home-client-carousel2 owl-btn-vertical-center">
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <a href="employer-list.html"><img src="images/client-logo/logo_olympus.png" alt="" /></a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <a href="employer-list.html"><img src="images/client-logo/logo_lixil.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <a href="employer-list.html"><img src="images/client-logo/logo_Nakajima.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <a href="employer-list.html"><img src="images/client-logo/shimizu_logo.png" alt="" /></a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <a href="employer-list.html"><img src="images/client-logo/logo_Sumitomo.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <a href="employer-list.html"><img src="images/client-logo/logo_nidec.png" alt="" /></a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <a href="employer-list.html"><img src="images/client-logo/logo_olympus.png" alt="" /></a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <a href="employer-list.html"><img src="images/client-logo/logo_lixil.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <a href="employer-list.html"><img src="images/client-logo/logo_Nakajima.jpg" alt="" /></a>
                            </div>
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
                    <div class="col-xl-5 col-lg-6 col-md-12 wt-separator-two-part-left">
                        <!-- TITLE START-->
                        <div class="section-head left wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                                <h2 style="font-size: 24px;font-family: 'Roboto', sans-serif !important;">
                                    CẢM NHẬN CỦA NGƯỜI TUYỂN DỤNG
                                </h2>
                                <a class="wt-title" style="font-family: 'Roboto', sans-serif;">
                                    Mọi người nói gì về các dịch vụ mà Vietseiko cung cấp khi họ đến với công ty
                                </a>
                            </div>

                        </div>
                        <!-- TITLE END-->
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="owl-carousel twm-testimonial-1-carousel owl-btn-bottom-center">
                    <!-- COLUMNS 1 -->
                    <div class="item">
                        <div class="twm-testimonial-1">
                            <div class="twm-testimonial-1-content">
                                <div class="twm-testi-media">
                                    <img src="images/testimonials/pic-3.png" alt="#">
                                </div>
                                <div class="twm-testi-content">
                                    <div class="twm-quote">
                                        <img src="images/quote-dark.png" alt="" />
                                    </div>
                                    <div class="twm-testi-info">
                                        Với đội ngũ nhân viên nhiệt tình, có quan hệ tốt với nhiều doanh nghiệp Nhật
                                        Bản. Rất phù hợp với các bạn tìm việc tiếng Nhật, xuất khẩu lao động Nhật Bản.
                                    </div>
                                    <div class="twm-testi-detail">
                                        <div class="twm-testi-name">Nikola Tesla</div>
                                        <div class="twm-testi-position">Accountant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 2 -->
                    <div class="item">
                        <div class="twm-testimonial-1">
                            <div class="twm-testimonial-1-content">
                                <div class="twm-testi-media">
                                    <img src="images/testimonials/pic-2.png" alt="#" />
                                </div>
                                <div class="twm-testi-content">
                                    <div class="twm-quote">
                                        <img src="images/quote-dark.png" alt="" />
                                    </div>
                                    <div class="twm-testi-info">
                                        Tỷ lệ chọi thấp, uy tín, luôn quan tâm đến học viên, nhiệt tình trong tư vấn,
                                        nhân viên vui vẻ.
                                    </div>
                                    <div class="twm-testi-detail">
                                        <div class="twm-testi-name">Nikola Tesla</div>
                                        <div class="twm-testi-position">Accountant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 3 -->
                    <div class="item">
                        <div class="twm-testimonial-1">
                            <div class="twm-testimonial-1-content">
                                <div class="twm-testi-media">
                                    <img src="images/testimonials/pic-1.png" alt="#" />
                                </div>
                                <div class="twm-testi-content">
                                    <div class="twm-quote">
                                        <img src="images/quote-dark.png" alt="" />
                                    </div>
                                    <div class="twm-testi-info">
                                        Công ty có hình ảnh thực tế, đội ngũ chuyên môn tư vấn nhiệt tình nên mình rất
                                        tin tưởng, các bạn nên tham gia !!
                                    </div>
                                    <div class="twm-testi-detail">
                                        <div class="twm-testi-name">Nikola Tesla</div>
                                        <div class="twm-testi-position">Accountant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 4 -->
                    <div class="item">
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
                                        Công ty uy tín, hỗ trợ tôi rất nhiệt tình trong quá trình tư vấn công việc.
                                    </div>
                                    <div class="twm-testi-detail">
                                        <div class="twm-testi-name">Nikola Tesla</div>
                                        <div class="twm-testi-position">Accountant</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div>Tin tức</div>
                </div>
                <h2 class="wt-title">Tin mới nhất</h2>
            </div>
            <!-- TITLE END-->

            <div class="section-content">
                <div class="twm-blog-post-1-outer-wrap">
                    <div class="owl-carousel twm-la-home-blog owl-btn-bottom-center">
                        <?php
                        $list_of_latestBlog = Blog::getLatestBlog(6);
                        foreach ($list_of_latestBlog as $key => $value) {
                        ?>
                            <div class="item">
                                <div class="blog-post twm-blog-post-1-outer">
                                    <div class="wt-post-media">
                                        <a href="blog-detail.php?id=<?php echo $value['id_blog']; ?>">
                                            <img src="images/blog/latest/<?php echo $value['img_blog']; ?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-meta">
                                            <ul>
                                                <li class="post-date">
                                                    <?php echo $value['ngaydang']; ?>
                                                </li>
                                                <li class="post-author">
                                                    By <a href="blog-detail.php?id=<?php echo $value['id_blog']; ?>">
                                                        <?php echo $value['name_blog']; ?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-title">
                                            <h4 class="post-title">
                                                <a href="blog-detail.php?id=<?php echo $value['id_blog']; ?>">
                                                    <?php echo substr($value['tieude_blog'], 0, 100); ?>...
                                                </a>
                                            </h4>
                                        </div>
                                        <div class="wt-post-text">
                                            <p>
                                                <?php echo substr($value['noidung_blog'], 0, 200); ?>...
                                            </p>
                                        </div>
                                        <div class="wt-post-readmore">
                                            <a href="blog-detail.php?id=<?php echo $value['id_blog']; ?>" class="site-button-link site-text-primary">Read More</a>
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
    function changeUrl_vn() {
        var domain = new URL(window.location.href).pathname;
        window.location.href = domain + '?type=vn';
    }

    function changeUrl_nb() {
        var domain = new URL(window.location.href).pathname;
        window.location.href = domain + '?type=nb';
    }

    function changeUrl_ks() {
        var domain = new URL(window.location.href).pathname;
        window.location.href = domain + '?type=ks';
    }

    function changeUrl_vs() {
        var domain = new URL(window.location.href).pathname;
        window.location.href = domain + '?type=vsk';
    }
</script>
<?php
require_once 'footer.php';
?>