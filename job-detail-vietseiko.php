<?php
include 'header.php';

require_once "./admin/models/gioi_tinh.php";
require_once "./admin/models/kinh_nghiem.php";
$gioitinh = new Gioi_tinh;
$kinh_nghiem = new Kinh_nghiem;

$id = 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Khong nhan duoc ID";
}

$allJob = $job_vietseiko->getJob_Detail($id);
$name_gioitinh = $gioitinh->getGioitinh_byId($allJob[0]['id_gioitinh']);

$name_kinhnghiem = $kinh_nghiem->getKinhNghiem_byId($allJob[0]['id_kinhnghiem']);

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
                        <li><a href="/trangchu?type=vsk">Vietseiko</a></li>
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
                                        <?php
                                            if ($allJob[0]['id_cty'] == 1) {
                                            ?>
                                                <div class="twm-media">
                                                    <img src="public/images/logo.png" alt="anh" style="width: 100%;height: 100%;object-fit: contain;" />
                                                </div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="twm-media">
                                                    <?php echo $allJob[0]['img_cty'] ?>
                                                </div>
                                            <?php
                                            }
                                            ?>

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
                                                        <?php echo $allJob[0]['mucluong'] ?> triệu
                                                    </span>
                                                </div>
                                                <div class="twm-job-apllication-area">
                                                    Hạn nộp hồ sơ:
                                                    <span class="twm-job-apllication-date">
                                                    <?php 
                                                        $dateTime = new DateTime($allJob[0]['ngaycuoicung']);
                                                        $formattedDate = $dateTime->format('d/m/Y');
                                                        echo $formattedDate;
                                                        ?>
                                                       
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
                            <?php  echo  $allJob[0]['mota']; ?>

                            <h4 class="twm-s-title">Quyền lợi:</h4>
                            <?php  echo  $allJob[0]['quyenloi']; ?>
                            <h4 class="twm-s-title">Thông tin thêm:</h4>
                            <?php  echo  $allJob[0]['thongtin_khac']; ?>
                            <!-- // nut dang ki -->
                            <div class="btn-dangki-detail" id="openModalBtn-2">
                                Ứng tuyển ngay
                            </div>
                            
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
                                                    <?php 
                                                        $dateTime = new DateTime($allJob[0]['created_at']);
                                                        $formattedDate = $dateTime->format('d/m/Y');
                                                        echo $formattedDate;
                                                        ?>
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
                                                        <?php echo $allJob[0]['soluong'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                <i class="bi bi-person"></i>
                                                    <span class="twm-title">Độ tuổi</span>
                                                    <div class="twm-s-info-discription">
                                                        <?php echo $allJob[0]['age'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                            <!-- Thông tin cty -->
                            <?php
                            if ($allJob[0]['id_cty'] == 1) {
                            ?>
                                <div class="twm-media">
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="twm-s-info3-wrap mb-5">
                                    <div class="twm-s-info3">
                                        <div class="twm-s-info-logo-section">

                                            <div class="twm-media">
                                                <?php echo $allJob[0]['img_cty'] ?>
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
                                                        <?php echo $allJob[0]['address'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="bi bi-people"></i>
                                                    <span class="twm-title">Quy mô</span>
                                                    <div class="twm-s-info-discription">
                                                        <?php echo $allJob[0]['quymo'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="bi bi-card-text"></i>
                                                    <span class="twm-title">Thông tin</span>
                                                    <div class="twm-s-info-discription">
                                                        <?php
                                                        $middleSpacePosition = strpos($allJob[0]['about_cty'], ' ', strlen($allJob[0]['about_cty']) / 2);
                                                        $randomTextWithSpan = substr_replace($allJob[0]['about_cty'], '<span id="dots">...</span><span id="more">', $middleSpacePosition, 0);
                                                        echo $randomTextWithSpan;
                                                        ?>
                                                        <p onclick="myFunction()" id="myBtn" style="color: #1967d2; margin: 0 auto;width: fit-content;cursor: pointer;">Xem thêm</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
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
</div>
<!-- OUR BLOG END -->
<!-- RELATED JOBS START -->
<div class="section-full p-t120 p-b90 site-bg-light-purple twm-related-jobs-carousel-wrap">
    <!-- TITLE START-->
    <div class="section-head center wt-small-separator-outer">
        <div class="wt-small-separator site-text-primary">
            <!-- <div>Top Jobs</div> -->
        </div>
        <h2 class="wt-title">Công việc mới nhất</h2>
    </div>
    <!-- TITLE END-->

    <div class="container">
        <div class="section-content">
            <div class="owl-carousel twm-related-jobs-carousel owl-btn-vertical-center owl-loaded owl-drag">
                <?php
                $list_of_latestJob = Vietseiko_f::getLatestJob(8);
                foreach ($list_of_latestJob as $key => $value) {
                ?>

                    <div class="item">
                        <div class="twm-jobs-grid-style2">
                        <?php
                            if ($value['id_cty'] == 1) {
                            ?>
                                <div class="twm-media">
                                    <img src="public/images/logo.png" alt="anh" style="width: 100%;height: 100%;object-fit: contain;" />
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="twm-media">
                                    <?php echo $value['img_cty'] ?>
                                </div>
                            <?php
                            }
                            ?>
                            <span class="twm-job-post-duration">
                                <?php
                                $time = $job_nb->timeAgo($value['created_at']);
                                echo $time;
                                ?>
                            </span>
                            <div class="twm-jobs-category green">
                                <span class="twm-bg-sky">Mới nhất</span>
                            </div>
                            <div class="twm-mid-content">
                                <a href="job-detail-vietseiko.php?id=<?php echo $value['id_job'] ?>" class="twm-job-title">
                                    <h5 class="twm-job-title" style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">
                                        <?php echo $value['chucvu'] ?>
                                    </h5>
                                </a>
                                <span class="icon" style="background: #f4f5f5; border-radius: 4px;color: #212f3f;display: inline-block;
                          font-size: 13px;font-weight: 500;line-height: 16px;padding: 4px 8px;">
                                    <?php echo $value['capbac'] ?>
                                </span>
                                <span class="icon" style="background: #f4f5f5; border-radius: 4px;color: #212f3f;display: inline-block;
                          font-size: 13px;font-weight: 500;line-height: 16px;padding: 4px 8px;">
                                    <?php echo $value['diachi'] ?>
                                </span>
                            </div>
                            <div class="twm-right-content">
                                <div class="twm-jobs-amount">
                                    <?php echo $value['mucluong'] ?>
                                </div>
                                <a href="job-detail-vietseiko.php?id=<?php echo $value['id_job'] ?>" class="twm-jobs-browse site-text-primary">Chi tiết</a>
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
                <p style="font-size: 12px;font-weight: 600; color: #333;"><?php echo $allJob[0]['diachi_cuthe'] ?></p>
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