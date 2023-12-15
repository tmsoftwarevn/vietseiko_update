<?php
include 'header.php';

require_once "./admin/models/gioi_tinh.php";
require_once "./admin/models/kinh_nghiem.php";
$gioitinh = new Gioi_tinh;
$kinh_nghiem = new Kinh_nghiem;

$id = 0;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Khong nhan duoc ID";
}

$allJob = $job->getJob_Detail($id);
$name_gioitinh = $gioitinh->getGioitinh_byId($allJob[0]['id_gioitinh']);

$name_kinhnghiem = $kinh_nghiem->getKinhNghiem_byId($allJob[0]['id_kinhnghiem']);


/* $getNN_HTID = $job->getNN_HTID($id); */
/* $getNganhNgheName = $nganhnghe->getNganhngheByID($getNN_HTID[0]['id_nganhnghe']);
$getRelatedJob = $job->getRelatedJob($getNN_HTID[0]['id_nganhnghe'], $getNN_HTID[0]['id_hinhthuc']); */
/* var_dump(Hinhthuc::getAllHinhThuc()); */
/* var_dump($allJob); */
?>
<style>
    <?php include 'public/scss/custom.scss'; ?>#more {
        display: none;
    }

    .ul-ct {
        /* 
        overflow: hidden !important;
        list-style-position: inside !important; */
    }
</style>

<title><?php echo $allJob[0]['chucvu'] ?></title>
<!-- CONTENT START -->
<div class="page-content" style="transform: none">
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image: url(images/banner/1.jpg)">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <!-- BREADCRUMB ROW -->
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li>Chi tiết công việc</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- OUR BLOG START -->
    <div class="section-full p-t120 p-b90 bg-white" style="transform: none">
        <div class="container" style="transform: none">
            <!-- BLOG SECTION START -->
            <div class="section-content" style="transform: none">
                <div class="row">
                    <div class="col-md-12 col-lg-8 ">
                        <!-- Candidate detail START -->
                        <div class="cabdidate-de-info">
                            <div class="twm-job-self-wrap">
                                <div class="twm-job-self-info">
                                    <div class="twm-job-self-top">
                                        <div class="twm-media-bg">
                                            <img src="images/job-detail-bg.jpg" alt="anh" />
                                        </div>

                                        <div class="twm-mid-content">
                                            <div class="twm-media">
                                                <img src="./images/jobs-company/vietnam/<?php echo $allJob[0]['img_cty'] ?>" alt="anh" />
                                            </div>

                                            <h4 class="twm-job-title" style="font-size: 25px; padding-top: 20px;">
                                                <?php echo $allJob[0]['chucvu'] ?>
                                            </h4>
                                            <p class="twm-job-address">
                                                <span style="font-weight: 500;">Địa điểm làm việc: </span>
                                                <i class="feather-map-pin"></i>
                                                <?php echo $allJob[0]['diachi_cuthe'] ?>
                                            </p>
                                            <div class="twm-job-self-mid">
                                                <div class="twm-job-self-mid-left">
                                                    <span style="font-weight: 500;"> Mức lương:</span>
                                                    <span style="color: #1967d2;">
                                                        <?php echo $allJob[0]['mucluong'] ?>
                                                    </span>
                                                </div>
                                                <div class="twm-job-apllication-area">
                                                    Hạn nộp hồ sơ:
                                                    <span class="twm-job-apllication-date">
                                                        <?php echo $allJob[0]['ngaycuoicung'] ?>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="twm-job-self-bottom" id="openModalBtn">
                                                <a class="site-button" role="button">
                                                    <i class="feather-log-in"></i> Ứng tuyển ngay
                                                </a>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="job-detail__information-detail--title" style="
                        border-left: 6px solid #1967d2;
                        color: #212f3f;
                        font-size: 24px;
                        font-style: normal;
                        font-weight: 700;
                        letter-spacing: -0.2px;
                        line-height: 28px;
                        margin: 0;
                        padding-left: 10px;
                      ">
                                Chi tiết tuyển dụng
                            </h2>

                            <h4 class="twm-s-title">Mô tả công việc:</h4>

                             <?php

                            echo  $allJob[0]['mota'];
                            ?> 

                            <h4 class="twm-s-title">Yêu cầu:</h4>
                            <ul class="description-list-2">
                                <?php
                                $str = $allJob[0]['yeucau'];
                                $arr = (explode("+", $str));
                                foreach ($arr as $key => $value) {
                                ?>
                                    <div style="margin-bottom: 5px;">
                                        <?php
                                        if ($key == 0) continue;
                                        echo '+' . $value;
                                        ?>
                                    </div>
                                <?php }
                                ?>

                            </ul>

                            <h4 class="twm-s-title">Quyền lợi:</h4>
                            <ul class="description-list-2">
                                <?php
                                $str = $allJob[0]['quyenloi'];
                                $arr = (explode("+", $str));
                                foreach ($arr as $key => $value) {
                                ?>
                                    <div style="margin-bottom: 5px;">
                                        <?php
                                        if ($key == 0) continue;
                                        echo '+' . $value;
                                        ?>
                                    </div>
                                <?php }
                                ?>
                            </ul>
                            <h4 class="twm-s-title">Thông tin thêm:</h4>
                            <ul class="description-list-2">
                                <?php
                                $str = $allJob[0]['cach_ungtuyen'];
                                $arr = (explode("+", $str));
                                foreach ($arr as $key => $value) {
                                ?>
                                    <div style="margin-bottom: 5px;">
                                        <?php
                                        if ($key == 0) continue;
                                        echo '+' . $value;
                                        ?>
                                    </div>
                                <?php }
                                ?>
                            </ul>
                            <!-- // nut dang ki -->
                            <div class="btn-dangki-detail" id="openModalBtn-2">
                                Ứng tuyển ngay

                            </div>
                            <!-- <h4 class="twm-s-title">Share Profile</h4>
                            <div class="twm-social-tags">
                                <a href="javascript:void(0)" class="fb-clr">Facebook</a>
                                <a href="javascript:void(0)" class="tw-clr">Twitter</a>
                                <a href="javascript:void(0)" class="link-clr">Linkedin</a>
                                <a href="javascript:void(0)" class="whats-clr">Whatsapp</a>
                                <a href="javascript:void(0)" class="pinte-clr">Pinterest</a>
                            </div> -->

                            <!-- <h4 class="twm-s-title">Vị trí</h4>
                            <div class="twm-m-map mb-5">
                                <div class="twm-m-map-iframe">
                                    <iframe height="310" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.8534521658976!2d-118.2533646842856!3d34.073270780600225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c6fd9829c6f3%3A0x6ecd11bcf4b0c23a!2s1363%20Sunset%20Blvd%2C%20Los%20Angeles%2C%20CA%2090026%2C%20USA!5e0!3m2!1sen!2sin!4v1620815366832!5m2!1sen!2sin"></iframe>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 rightSidebar" style="
                    position: relative;
                    overflow: visible;
                    box-sizing: border-box;
                    min-height: 1px;
                  ">
                        <div class="theiaStickySidebar" style="
                      padding-top: 0px;
                      padding-bottom: 1px;
                      position: static;
                      transform: none;
                      top: 0px;
                      left: 903px;
                    ">
                            <div class="side-bar mb-4">
                                <div class="twm-s-info2-wrap mb-5">
                                    <div class="twm-s-info2">
                                        <h4 class="section-head-small mb-4">
                                            Thông tin việc làm
                                        </h4>
                                        <ul class="twm-job-hilites2">
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="bi bi-calendar-week"></i>
                                                    <span class="twm-title">Ngày đăng</span>
                                                    <div class="twm-s-info-discription">
                                                        <?php echo $allJob[0]['ngaydang'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="bi bi-geo-alt"></i>
                                                    <span class="twm-title">Địa chỉ</span>
                                                    <div class="twm-s-info-discription">
                                                        <?php echo $allJob[0]['diachi'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="bi bi-pin-map-fill"></i>
                                                    <span class="twm-title">Cấp bậc</span>
                                                    <div class="twm-s-info-discription">
                                                        <?php echo $allJob[0]['capbac'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="bi bi-clock"></i>
                                                    <span class="twm-title">Kinh nghiệm</span>
                                                    <div class="twm-s-info-discription">
                                                        <?php echo $name_kinhnghiem; ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">

                                                    <i class="bi bi-gender-ambiguous"></i>
                                                    <span class="twm-title">Giới tính</span>
                                                    <div class="twm-s-info-discription">
                                                        <?php echo $name_gioitinh ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="bi bi-briefcase"></i>
                                                    <span class="twm-title">Số lượng tuyển</span>
                                                    <div class="twm-s-info-discription">
                                                        <?php echo $allJob[0]['soluong'] ?> Người
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                            <!-- Thông tin cty -->
                            <div class="twm-s-info3-wrap mb-5">
                                <div class="twm-s-info3">
                                    <div class="twm-s-info-logo-section">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic1.jpg" alt="#" />
                                        </div>
                                        <h4 class="twm-title">
                                            <?php echo $allJob[0]['name'] ?>
                                        </h4>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="bi bi-geo-alt-fill"></i>
                                                <span class="twm-title">Địa chỉ</span>
                                                <div class="twm-s-info-discription">
                                                    addressfdsf dsfds fdsfdsf fdfdsfff fff
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="bi bi-people"></i>
                                                <span class="twm-title">Quy mô</span>
                                                <div class="twm-s-info-discription">
                                                    50 -100 người
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="bi bi-card-text"></i>
                                                <span class="twm-title">Thông tin</span>
                                                <div class="twm-s-info-discription">
                                                    <p>Lorem ipsum dolor sit amet, consectetur nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa Sed dapibus pulvinar nibh tempor porta.</span></p>
                                                    <p onclick="myFunction()" id="myBtn" style="color: #1967d2; margin: 0 auto;width: fit-content;cursor: pointer;">Xem thêm</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="twm-advertisment" style="background-image: url(images/add-bg.jpg)">
                                <div class="overlay"></div>
                                <h4 class="twm-title">Recruiting?</h4>
                                <p>
                                    Get Best Matched Jobs On your <br />
                                    Email. Add Resume NOW!
                                </p>
                                <a href="javascript:;" class="site-button white">Read More</a>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- OUR BLOG END -->
<!-- RELATED JOBS START -->
<div class="section-full p-t120 p-b90 site-bg-light-purple twm-related-jobs-carousel-wrap">
    <!-- TITLE START-->
    <div class="section-head center wt-small-separator-outer">
        <div class="wt-small-separator site-text-primary">
            <!-- <div>Top Jobs</div> -->
        </div>
        <h2 class="wt-title">Công Việc mới nhất</h2>
    </div>
    <!-- TITLE END-->

    <div class="container">
        <div class="section-content">
            <div class="owl-carousel twm-related-jobs-carousel owl-btn-vertical-center owl-loaded owl-drag">
                <?php
                $list_of_latestJob = Job::getLatestJob(9);
                foreach ($list_of_latestJob as $key => $value) {
                ?>

                    <div class="item">
                        <div class="twm-jobs-grid-style2">
                            <div class="twm-media">
                                <a href="job-detail.php?id=<?php echo $value['id_job'] ?>">
                                    <img src="./images/jobs-company/vietnam/<?php echo $value['img_cty'] ?>" alt="anh" />

                                </a>
                            </div>
                            <span class="twm-job-post-duration">
                                <?php
                                $time = $job->timeAgo($value['created_at']);
                                echo $time;
                                ?>
                            </span>
                            <div class="twm-jobs-category green">
                                <span class="twm-bg-sky">Mới nhất</span>
                            </div>
                            <div class="twm-mid-content">
                                <a href="job-detail.php?id=<?php echo $value['id_job'] ?>" class="twm-job-title">
                                    <h4 class="twm-job-title" style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">
                                        <?php echo $value['chucvu'] ?>
                                    </h4>
                                </a>
                                <span class="icon" style="background: #f4f5f5; border-radius: 4px;color: #212f3f;display: inline-block;
                          font-size: 12px;font-weight: 500;line-height: 16px;padding: 4px 8px;">
                                    <?php echo $value['capbac'] ?>
                                </span>
                                <span class="icon" style="background: #f4f5f5; border-radius: 4px;color: #212f3f;display: inline-block;
                          font-size: 12px;font-weight: 500;line-height: 16px;padding: 4px 8px;">
                                    <?php echo $value['diachi'] ?>
                                </span>
                            </div>
                            <div class="twm-right-content">
                                <div class="twm-jobs-amount">
                                    <?php echo $value['mucluong'] ?>
                                </div>
                                <a href="job-detail.php?id=<?php echo $value['id_job'] ?>" class="twm-jobs-browse site-text-primary">Chi tiết</a>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
    </div>
</div>
<!-- RELATED JOBS END -->
</div>
<!-- CONTENT END -->



<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModalBtn" style="text-align: end;margin-right: 10px;font-size: 35px;">&times;</span>

        <div class="bordered-element p-4 rounded shadow">
            <div class="card" style="padding: 10px;">
                <p class="fw-bold text-primary mb-0" style="font-size: 13px;">Ứng Tuyển Vị Trí</p>
                <h4 class="mt-2 mb-2"><?php echo $allJob[0]['chucvu'] ?></h4>
                <p style="font-size: 12px;font-weight: 600; color: #333;"><?php echo $allJob[0]['name'] ?></p>
            </div>
            <div class="card-body height-scroll">
                <div class="group text-center mb-4">
                    <img src="images/apply-job.png" alt="" class="rounded-circle" style="width: 128px; height: 128px;">
                    <p>File phải có định dạng .pdf, .doc, .docx và dung lượng <= 2MB.</p>
                </div>
                <form action="./admin/file-cv/code/add_file_cv.php" method="POST" enctype="multipart/form-data">

                    <button class="btn btn-info btn-block button-upload">

                        <label class="upload-option">
                            <input name="file" id="file" type="file" class="upload-input" accept=".pdf, .doc, .docx" required onchange="handleFileUpload(event)">
                            <span class="svicon-upload mr-2"></span>
                        </label>
                    </button>
                    <div id="error-message" class="text-danger mt-2"></div>
                    <p id="uploadSuccess" class="text-success mt-2"></p>

                    <div class="mb-3">
                        <label for="fullName" class="form-label">Họ Và Tên <span class="text-danger">*</span></label>
                        <input type="text" class="form-control rounded input-field" id="fullName" placeholder="Nhập họ và tên của bạn" required>
                        <span id="fullNameError" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input required type="email" class="form-control rounded input-field" id="email" placeholder="Nhập địa chỉ email của bạn">
                        <span id="emailError" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Số Điện Thoại <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control rounded input-field" id="phoneNumber" placeholder="Nhập số điện thoại của bạn" required pattern="(03|05|07|08|09)[0-9]{8}">
                        <span id="phoneNumberError" class="text-danger"></span>
                    </div>
                    <hr>
                    <div class="card-footer mt-3 d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary" type="submit" style="font-size: 14px;">Nộp Hồ Sơ</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script src="public/js/modal-form-apply.js">
</script>
<script>
    function handleFileUpload(event) {
        const fileInput = event.target;
        const file = fileInput.files[0];
        const errorMessageBox = document.getElementById('error-message');
        const uploadSuccess = document.getElementById('uploadSuccess');

        if (file) {
            const allowedExtensions = ['.pdf', '.doc', '.docx'];
            const maxFileSize = 2 * 1024 * 1024;

            const fileExtension = file.name.toLowerCase().substring(file.name.lastIndexOf('.'));
            if (!allowedExtensions.includes(fileExtension) || file.size > maxFileSize) {
                errorMessageBox.textContent = 'File upload không hợp lệ. File phải có định dạng .pdf, .doc, .docx và dung lượng <= 2MB.';
                uploadSuccess.textContent = '';
                fileInput.value = '';
            } else {
                errorMessageBox.textContent = '';
                uploadSuccess.textContent = 'Tải lên thành công: ' + file.name;
            }
        }
    }
    // view text
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Xem thêm";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Thu gọn";
            moreText.style.display = "inline";
        }
    }
</script>
<?php
require_once 'footer.php';
?>