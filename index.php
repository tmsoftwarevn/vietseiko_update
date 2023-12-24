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
    <?php include 'public/scss/custom.scss'; ?>select {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 10px;
    }

    option {
        font-size: 17px;
    }
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
                        <form action="search-list.php" method="get">
                            <div class="row">
                                <!--Title-->
                                <div class="form-group1 col-xl-3 col-lg-6 col-md-6">
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
                                            foreach ($form_contact->fetch_tinh_thanh() as $index => $item) {
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
                                    <input type="submit" name="submit" value="Tìm kiếm" class="site-button">
                                    </input>
                                </div>
                            </div>
                        </form>
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
    <div class="test" style="display: none;"></div>
    <section>
        <div class="container">
            <div class="job-vietnam  job">
                <div class="img-bg">
                    <img src="public/images/bg-job.jpg" alt="anh" />
                </div>

                <div class="g1 mt-5">
                    <div class="title ">
                        <div class="job-name">
                            <div>Việc làm tại Việt Nam</div>
                        </div>
                        <a href="job-list-vn.php?id_nganhnghe=&id_hinhthuc=&id_kinhnghiem=&id_gioitinh=">
                            <span class="btn-view-all">Xem tất cả</span>
                        </a>
                    </div>
                    <div class="job-list ">
                        <div class="row">
                            <?php
                            $list_of_job_vn = Job_f::getLatestJob(27);
                            $new_list_of_job_vn = [];
                            for ($i = 0; $i < 8; $i++) {
                                $new_list_of_job_vn = array_merge($new_list_of_job_vn, $list_of_job_vn);
                            }
                            ?>
                            <div class="owl-carousel carousel-job-list">
                                <?php for ($i = 0; $i < count($new_list_of_job_vn); $i += 9) : ?>
                                    <div class="item">
                                        <?php for ($j = 0; $j < 9 && ($i + $j) < count($new_list_of_job_vn); $j++) : ?>
                                            <div class="col-lg-4 col-md-12 col-sm-12 ">
                                                <a href="job-detail.php?id=<?php echo $new_list_of_job_vn[$i + $j]['id_job'] ?>">
                                                    <div class="card" id='job-vietnam'>
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
                                <?php endfor; ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="job-nb  job">
                <div class="img-bg">
                    <img src="public/images/bg-job.jpg" alt="" />
                </div>
                <div class="g1 mt-5">
                    <div class="title ">
                        <div class="job-name">
                            <div>Việc làm XKLD tại Nhật Bản</div>
                        </div>
                        <a href="job-list-xkld.php?id_nganhnghe=&id_hinhthuc=&id_kinhnghiem=&id_gioitinh=">
                            <span class="btn-view-all">Xem tất cả</span>
                        </a>
                    </div>
                    <div class="job-list ">

                        <div class="row">
                            <?php
                            $list_of_job_vn = Job_NB_f::getLatestJob(27);
                            $new_list_of_job_vn = [];
                            for ($i = 0; $i < 8; $i++) {
                                $new_list_of_job_vn = array_merge($new_list_of_job_vn, $list_of_job_vn);
                            }

                            ?>
                            <div class="owl-carousel carousel-job-list">
                                <?php for ($i = 0; $i < count($new_list_of_job_vn); $i += 9) : ?>
                                    <div class="item">
                                        <?php for ($j = 0; $j < 9 && ($i + $j) < count($new_list_of_job_vn); $j++) : ?>
                                            <div class="col-lg-4 col-md-12 col-sm-12 ">
                                                <a href="job-detail_NB.php?id=<?php echo $new_list_of_job_vn[$i + $j]['id_job'] ?>">
                                                    <div class="card" id='job-vietnam'>
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
                                <?php endfor; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="job-ksnb job">
                <div class="img-bg">
                    <img src="public/images/bg-job.jpg" alt="" />
                </div>
                <div class="g1 mt-5">
                    <div class="title ">
                        <div class="job-name">
                            <div>Việc làm Kỹ sư & thông dịch viên Nhật Bản</div>
                        </div>
                        <a href="job-list-ksnb.php?id_nganhnghe=&id_hinhthuc=&id_kinhnghiem=&id_gioitinh=">
                            <span class="btn-view-all">Xem tất cả</span>
                        </a>
                    </div>
                    <div class="job-list ">

                        <div class="row">
                            <?php
                            $list_of_job_vn = Job_kysu_f::getAllJob();
                            $new_list_of_job_vn = [];
                            for ($i = 0; $i < 8; $i++) {
                                $new_list_of_job_vn = array_merge($new_list_of_job_vn, $list_of_job_vn);
                            }

                            ?>
                            <div class="owl-carousel carousel-job-list">
                                <?php for ($i = 0; $i < count($new_list_of_job_vn); $i += 9) : ?>
                                    <div class="item">
                                        <?php for ($j = 0; $j < 9 && ($i + $j) < count($new_list_of_job_vn); $j++) : ?>
                                            <div class="col-lg-4 col-md-12 col-sm-12 ">
                                                <a href="job-detail-kysunb.php?id=<?php echo $new_list_of_job_vn[$i + $j]['id_job'] ?>">
                                                    <div class="card" id='job-vietnam'>
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
                                <?php endfor; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="job-vietseiko job">
                <div class="img-bg">
                    <img src="public/images/bg-job.jpg" alt="" />
                </div>
                <div class="g1 mt-5">
                    <div class="title ">
                        <div class="job-name">
                            <div>Việc làm tại Vietseiko</div>
                        </div>
                        <a href="job-list-vietseiko.php?id_nganhnghe=&id_hinhthuc=&id_kinhnghiem=&id_gioitinh=">
                            <span class="btn-view-all">Xem tất cả</span>
                        </a>
                    </div>
                    <div class="job-list ">

                        <div class="row">
                            <?php
                            $list_of_job_vn = Vietseiko_f::getAllJob();
                            $new_list_of_job_vn = [];
                            for ($i = 0; $i < 5; $i++) {
                                $new_list_of_job_vn = array_merge($new_list_of_job_vn, $list_of_job_vn);
                            }

                            ?>
                            <div class="owl-carousel carousel-job-list">
                                <?php for ($i = 0; $i < count($new_list_of_job_vn); $i += 9) : ?>
                                    <div class="item">
                                        <?php for ($j = 0; $j < 9 && ($i + $j) < count($new_list_of_job_vn); $j++) : ?>
                                            <div class="col-lg-4 col-md-12 col-sm-12 ">
                                                <a href="job-detail-vietseiko.php?id=<?php echo $new_list_of_job_vn[$i + $j]['id_job'] ?>">
                                                    <div class="card" id='job-vietnam'>
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
                                <?php endfor; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JOB POST END -->


    <!-- TOP COMPANIES START -->
    <div class="section-full p-t50 site-bg-white twm-companies-wrap">
        <!-- TITLE START-->
        <div class="section-head center wt-small-separator-outer">
            <h2 class="wt-title" style="font-size: 24px;">LIÊN KẾT VỚI CÁC DOANH NGHIỆP - TẠO CƠ HỘI LÀM VIỆC CHO NGƯỜI LAO ĐỘNG</h2>
        </div>
        <!-- TITLE END-->

        <div class="container">
            <div class="section-content mt-5">
                <div class="owl-carousel home-client-carousel2 owl-btn-vertical-center">
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <img src="images/client-logo/logo_olympus.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <img src="images/client-logo/logo_lixil.jpg" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <img src="images/client-logo/logo_Nakajima.jpg" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <img src="images/client-logo/shimizu_logo.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <img src="images/client-logo/logo_Sumitomo.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <img src="images/client-logo/logo_nidec.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <img src="images/client-logo/logo_olympus.png" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <img src="images/client-logo/logo_lixil.jpg" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo client-logo-media">
                                <img src="images/client-logo/logo_Nakajima.jpg" alt="" />
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
                                    CẢM NHẬN CỦA NGƯỜI LAO ĐỘNG
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
                                        <div class="twm-testi-name">anh Trung chia sẻ</div>
                                        <!-- <div class="twm-testi-position">Accountant</div> -->
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
                                        <div class="twm-testi-name">Anh Nguyễn Văn A</div>
                                        <!-- <div class="twm-testi-position">Accountant</div> -->
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
                                        <div class="twm-testi-name">Chị Nguyễn Văn B</div>
                                        <!-- <div class="twm-testi-position">Accountant</div> -->
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
                                        <div class="twm-testi-name">Chị Nguyễn Văn D</div>
                                        <!-- <div class="twm-testi-position">Accountant</div> -->
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
                    <!-- <div>Tin tức</div> -->
                </div>
                <h2 class="wt-title">Tin mới nhất</h2>
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
                                        <a href="blog-detail.php?id=<?php echo $value['id_blog']; ?>">
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