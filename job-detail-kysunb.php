<?php
require_once "setting-all-file.php";
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$domain = $_SERVER['HTTP_HOST'];
$currentUrl = $protocol . '://' . $domain . $_SERVER['REQUEST_URI'];
$domainFromUrl = parse_url($currentUrl, PHP_URL_SCHEME) . '://' . parse_url($currentUrl, PHP_URL_HOST);

?>
<?php


$banner = $img_f->getAll_imgBy_id(3);
$gioitinh = new Gioi_tinh;
$kinh_nghiem = new Kinh_nghiem;

$id = 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //echo 'id ksnb: '.$id;
} else {
    echo "Khong nhan duoc ID";
}

$allJob = $job_kysu->getJob_Detail($id);
$job_kysu::tang_view($allJob[0]['id_job']);

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
  <meta name="description" content="<?php echo $allJob[0]['chucvu'] ?>" />
<title><?php echo $allJob[0]['chucvu'] ?></title>

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

    /* @media only screen and (max-width: 576px) {
            .icon-zalo {
                bottom: 100px;
            }
        } */
  </style>

</head>
<body>
<?php
require 'header.php';
?>
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
                        <li><a href="viec-lam-ky-su-va-thong-dich-nhat-ban"><?= __('Kỹ sư & thông dịch viên tại Nhật Bản') ?></a></li>
                        <li><?= __('Chi tiết công việc') ?></li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    <?php
    if (isset($_SESSION['status'])) {
        echo '<div class="centered-alert">
            <div id="success-alert" class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>Thông báo</strong> Đã gửi cv thành công!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          </div>';


        echo '<script>
            $(document).ready(function(){
                $("#success-alert").fadeTo(5000, 500).slideUp(500, function(){
                    $("#success-alert").alert("close");
                });
            });
          </script>';
        unset($_SESSION['status']);
    }
    ?>
    <!-- OUR BLOG START -->
    <div class="section-full p-t30 p-b30 bg-white" style="transform: none">
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
                                            <?php echo $banner[0]['img'] ?>
                                        </div>

                                        <div class="twm-mid-content">
                                            <?php
                                            if ($allJob[0]['id_cty'] == 1) {
                                            ?>
                                                <div class="twm-media">
                                                    <img src="public/images/logo.png" alt="anh" style="width: 100%;height: 50px;object-fit: contain;" />
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
                                            <div class="eye-view">
                                                <i class="bi bi-eye"></i>
                                                <span style="font-weight: 600;">Lượt xem: <?php echo $allJob[0]['view']?></span>
                                            </div>
                                            <h4 class="twm-job-title" style="font-size: 25px; padding-top: 20px;">
                                                <?php echo $allJob[0]['chucvu'] ?>
                                            </h4>
                                            <p class="twm-job-address">
                                                <!-- <span style="font-weight: 500;">Địa điểm làm việc: </span> -->
                                                <i class="feather-map-pin"></i>
                                                <?php echo $allJob[0]['diachi_cuthe'] ?>
                                            </p>
                                            <div class="twm-job-self-mid">
                                                <div class="twm-job-self-mid-left">
                                                    <span style="font-weight: 500;"> <?= __('Mức lương: ') ?></span>
                                                    <span style="color: #1967d2;">
                                                        <?php echo $allJob[0]['mucluong'] ?>
                                                    </span>
                                                </div>
                                                <div class="twm-job-apllication-area">
                                                    <?= __('Hạn nộp hồ sơ: ') ?>
                                                    <span class="twm-job-apllication-date">
                                                        <?php
                                                        $dateTime = new DateTime($allJob[0]['ngaycuoicung']);
                                                        $formattedDate = $dateTime->format('d/m/Y');
                                                        echo $formattedDate;
                                                        ?>

                                                    </span> </span>
                                                </div>
                                            </div>

                                            <div class="twm-job-self-bottom" id="openModalBtn">
                                                <a class="site-button" role="button">
                                                    <i class="feather-log-in"></i> <?= __('Ứng tuyển ngay ') ?>
                                                </a>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="side-bar mb-4 mobile-info">
                                <div class="twm-s-info2-wrap mb-5">
                                    <div class="twm-s-info2">
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
                                            <?= __('Thông tin việc làm') ?>
                                        </h2>
                                        <ul class="twm-job-hilites2">
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-lg-12 mt-3">
                                                    <li>
                                                        <div class="twm-s-info-inner">
                                                            <i class="bi bi-calendar-week"></i>
                                                            <span class="twm-title"><?= __('Ngày đăng') ?></span>
                                                            <div class="twm-s-info-discription">
                                                                <?php
                                                                $dateTime = new DateTime($allJob[0]['created_at']);
                                                                $formattedDate = $dateTime->format('d/m/Y');
                                                                echo $formattedDate;
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="col-6 col-sm-6 col-lg-12 mt-3">
                                                    <li>
                                                        <div class="twm-s-info-inner ">
                                                            <i class="bi bi-pin-map-fill"></i>
                                                            <span class="twm-title"><?= __('Cấp bậc') ?></span>
                                                            <div class="twm-s-info-discription">
                                                                <?php echo $allJob[0]['capbac'] ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-lg-12 mt-3">
                                                    <li>
                                                        <div class="twm-s-info-inner">
                                                            <i class="bi bi-clock"></i>
                                                            <span class="twm-title"><?= __('Kinh nghiệm') ?></span>
                                                            <div class="twm-s-info-discription">
                                                                <?php echo $name_kinhnghiem; ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="col-6 col-sm-6 col-lg-12 mt-3">
                                                    <li>
                                                        <div class="twm-s-info-inner">

                                                            <i class="bi bi-gender-ambiguous"></i>
                                                            <span class="twm-title"><?= __('Giới tính') ?></span>
                                                            <div class="twm-s-info-discription">
                                                                <?php echo $name_gioitinh ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-lg-12 mt-3">
                                                    <li>
                                                        <div class="twm-s-info-inner">
                                                            <i class="bi bi-briefcase"></i>
                                                            <span class="twm-title"><?= __('Số lượng tuyển') ?></span>
                                                            <div class="twm-s-info-discription">
                                                                <?php echo $allJob[0]['soluong'] ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="col-6 col-sm-6 col-lg-12 mt-3">
                                                    <li>
                                                        <div class="twm-s-info-inner">
                                                            <i class="bi bi-person"></i>
                                                            <span class="twm-title"><?= __('Độ tuổi') ?></span>
                                                            <div class="twm-s-info-discription">
                                                                <?php echo $allJob[0]['age'] ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                            <li>
                                                <div class="twm-s-info-inner mt-3">
                                                    <i class="bi bi-bookmark-dash"></i>
                                                    <span class="twm-title"><?= __('Ngôn ngữ') ?></span>
                                                    <div class="twm-s-info-discription">
                                                        <?php echo $allJob[0]['ngonngu'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
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
                                <?= __('Chi tiết tuyển dụng') ?>
                            </h2>

                            <h4 class="twm-s-title"><?= __('Mô tả công việc:') ?></h4>

                            <?php

                            echo  $allJob[0]['mota'];
                            ?>

                            <h4 class="twm-s-title"><?= __('Yêu cầu:') ?></h4>
                            <?php echo  $allJob[0]['mota']; ?>

                            <h4 class="twm-s-title"><?= __('Quyền lợi:') ?></h4>
                            <?php echo  $allJob[0]['quyenloi']; ?>
                            <h4 class="twm-s-title"><?= __('Thông tin thêm:') ?></h4>
                            <?php echo  $allJob[0]['thongtin_khac']; ?>
                            <!-- // nut dang ki -->
                            <div class="btn-dangki-detail" id="openModalBtn-2">
                                <?= __('Ứng tuyển ngay ') ?>
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
                            <div class="side-bar mb-4 scr_big-info">
                                <div class="twm-s-info2-wrap mb-5">
                                    <div class="twm-s-info2">
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
                                            <?= __('Thông tin việc làm') ?>
                                        </h2>
                                        <ul class="twm-job-hilites2">
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-lg-12 mt-3">
                                                    <li>
                                                        <div class="twm-s-info-inner">
                                                            <i class="bi bi-calendar-week"></i>
                                                            <span class="twm-title"><?= __('Ngày đăng') ?></span>
                                                            <div class="twm-s-info-discription">
                                                                <?php
                                                                $dateTime = new DateTime($allJob[0]['created_at']);
                                                                $formattedDate = $dateTime->format('d/m/Y');
                                                                echo $formattedDate;
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="col-6 col-sm-6 col-lg-12 mt-3">
                                                    <li>
                                                        <div class="twm-s-info-inner ">
                                                            <i class="bi bi-pin-map-fill"></i>
                                                            <span class="twm-title"><?= __('Cấp bậc') ?></span>
                                                            <div class="twm-s-info-discription">
                                                                <?php echo $allJob[0]['capbac'] ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-lg-12 mt-3">
                                                    <li>
                                                        <div class="twm-s-info-inner">
                                                            <i class="bi bi-clock"></i>
                                                            <span class="twm-title"><?= __('Kinh nghiệm') ?></span>
                                                            <div class="twm-s-info-discription">
                                                                <?php echo $name_kinhnghiem; ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="col-6 col-sm-6 col-lg-12 mt-3">
                                                    <li>
                                                        <div class="twm-s-info-inner">

                                                            <i class="bi bi-gender-ambiguous"></i>
                                                            <span class="twm-title"><?= __('Giới tính') ?></span>
                                                            <div class="twm-s-info-discription">
                                                                <?php echo $name_gioitinh ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-lg-12 mt-3">
                                                    <li>
                                                        <div class="twm-s-info-inner">
                                                            <i class="bi bi-briefcase"></i>
                                                            <span class="twm-title"><?= __('Số lượng tuyển') ?></span>
                                                            <div class="twm-s-info-discription">
                                                                <?php echo $allJob[0]['soluong'] ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="col-6 col-sm-6 col-lg-12 mt-3">
                                                    <li>
                                                        <div class="twm-s-info-inner">
                                                            <i class="bi bi-person"></i>
                                                            <span class="twm-title"><?= __('Độ tuổi') ?></span>
                                                            <div class="twm-s-info-discription">
                                                                <?php echo $allJob[0]['age'] ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </div>
                                            </div>
                                            <li>
                                                <div class="twm-s-info-inner mt-3">
                                                    <i class="bi bi-bookmark-dash"></i>
                                                    <span class="twm-title"><?= __('Ngôn ngữ') ?></span>
                                                    <div class="twm-s-info-discription">
                                                        <?php echo $allJob[0]['ngonngu'] ?>
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
                                                    <span class="twm-title"><?= __('Địa chỉ') ?></span>
                                                    <div class="twm-s-info-discription">
                                                        <?php echo $allJob[0]['address'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="bi bi-people"></i>
                                                    <span class="twm-title"><?= __('Quy mô') ?></span>
                                                    <div class="twm-s-info-discription">
                                                        <?php echo $allJob[0]['quymo'] ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="bi bi-card-text"></i>
                                                    <span class="twm-title"><?= __('Thông tin') ?></span>
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
<div class="section-full p-t50 p-b90 site-bg-light-purple twm-related-jobs-carousel-wrap">
    <!-- TITLE START-->
    <div class="section-head center wt-small-separator-outer">
        <div class="wt-small-separator site-text-primary">
            <!-- <div>Top Jobs</div> -->
        </div>
        <h2 class="wt-title" style="margin-bottom: 30px;"><?= __('Công việc mới nhất') ?></h2>
    </div>
    <!-- TITLE END-->

    <div class="container">
        <div class="section-content">
            <div class="owl-carousel twm-related-jobs-carousel owl-btn-vertical-center owl-loaded owl-drag">
                <?php
                $list_of_latestJob = Job_kysu_f::getLatestJob(12);
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
                            <!-- <div class="twm-jobs-category green">
                                <span class="twm-bg-sky">Mới nhất</span>
                            </div> -->
                            <div class="twm-mid-content">
                                <a href="<?php echo 'viec-lam-ky-su-va-thong-dich-nhat-ban/' . $value['slug'] ?>-<?php echo $value['id_job'] ?>.html" class="twm-job-title">
                                    <h5 class="twm-job-title" style="margin: 10px auto;max-width: 250px; align-items: center;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    height: 39px;
                                    ">
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

                                <a href="<?php echo 'viec-lam-ky-su-va-thong-dich-nhat-ban/' . $value['slug'] ?>-<?php echo $value['id_job'] ?>.html" class="twm-jobs-browse site-text-primary"><?= __('Chi tiết') ?></a>
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
                <p class="fw-bold text-primary mb-0" style="font-size: 14px;"><?= __('Ứng Tuyển Vào Vị Trí') ?></p>
                <h3 class="mt-2 mb-2"><?php echo $allJob[0]['chucvu'] ?></h3>
                <p style="font-size: 13px;font-weight: 600; color: #333;"><?php echo $allJob[0]['diachi_cuthe'] ?></p>
            </div>
            <div class="card-body height-scroll">
                <div class="group text-center mb-4">
                    <img src="images/apply-job.png" alt="" class="rounded-circle" style="width: 128px; height: 128px;">
                    <p><?= __('File CV phải có định dạng .pdf, .doc, .docx và dung lượng <= 2MB.') ?></p>
                </div>
                <form action="./admin/file-cv/code/add_file_cv.php" method="POST" enctype="multipart/form-data">
                    <!-- <form action="" method="post" enctype="multipart/form-data"> -->
                    <button class="btn btn-info btn-block button-upload">
                        <label class="upload-option">
                            <input name="file" id="file" type="file" class="upload-input" accept=".pdf, .doc, .docx" required onchange="handleFileUpload(event)">
                            <span class="svicon-upload mr-2"></span>
                        </label>
                    </button>
                    <div id="error-message" class="text-danger mt-2"></div>
                    <p id="uploadSuccess" class="text-success mt-2"></p>

                    <input name="id_job" value=<?php echo $allJob[0]['id_job'] ?> style="display: none;" />
                    <input name="type_id" value="3" style="display: none;" />
                    <div class="mb-3">
                        <label for="fullName" class="form-label"><?= __('Họ Và Tên') ?> <span class="text-danger">*</span></label>
                        <input name="name" type="text" class="form-control rounded input-field" id="fullName" required>
                        <span id="fullNameError" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                        <input name="email" required type="email" class="form-control rounded input-field" id="email">
                        <span id="emailError" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label"><?= __('Số Điện Thoại') ?> <span class="text-danger">*</span></label>
                        <input name="phone" type="tel" class="form-control rounded input-field" id="phoneNumber" required pattern="(03|05|07|08|09)[0-9]{8}">
                        <span id="phoneNumberError" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label"><?= __('Năm sinh') ?> <span class="text-danger">*</span></label>
                        <input required name="namsinh" type="text" class="form-control rounded input-field" id="phoneNumber">
                        <span id="phoneNumberError" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label"><?= __('Mức lương mong muốn') ?> <span class="text-danger">*</span></label>
                        <input required name="mucluong" type="text" class="form-control rounded input-field" id="phoneNumber">
                        <span id="phoneNumberError" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label"><?= __('Khu vực mong muốn') ?> <span class="text-danger">*</span></label>
                        <input required name="khuvuc" type="text" class="form-control rounded input-field" id="phoneNumber">
                        <span id="phoneNumberError" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label"><?= __('Vị trí ứng tuyển') ?> <span class="text-danger">*</span></label>
                        <input required name="vitri" type="text" class="form-control rounded input-field" id="phoneNumber">
                        <span id="phoneNumberError" class="text-danger"></span>
                    </div>
                    <hr>
                    <div class="card-footer mt-3 d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary" type="submit" name="submit" style="font-size: 14px;"><?= __('Nộp Hồ Sơ') ?></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php
require 'footer.php';
?>
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

</body>
</html>

