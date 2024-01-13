<?php
require_once "setting-all-file.php";
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$domain = $_SERVER['HTTP_HOST'];
$currentUrl = $protocol . '://' . $domain . $_SERVER['REQUEST_URI'];
$domainFromUrl = parse_url($currentUrl, PHP_URL_SCHEME) . '://' . parse_url($currentUrl, PHP_URL_HOST);

?>
<?php

require_once "models/job_kysu.php";

$list_custom_tinhthanh = $form_contact->list_nhatban_location();
$id_diachi = 'all';

$totalJob = 1;
$page = 1;
$resultsPerPage = 25;

$job_tyen_gap = $job_kysu::getJob_tuyen_gap($resultsPerPage);
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    //echo "Khong nhan duoc ID";
}

?>

<?php
$id_gioitinh = '';
$allJob = [];
$totalJob = 1;
$search = 'all';
if (
    (isset($_GET['id_nganhnghe']) && $_GET['id_nganhnghe'] != 'all')
    || (isset($_GET['id_hinhthuc']) && $_GET['id_hinhthuc'] != 'all')
    || (isset($_GET['id_kinhnghiem']) && $_GET['id_kinhnghiem'] != 'all')
    || (isset($_GET['id_gioitinh']) && $_GET['id_gioitinh'] != 'all')
    || (isset($_GET['id_diachi']) && $_GET['id_diachi'] != 'all')
    || (isset($_GET['search']) && $_GET['search'] != 'all')

) {
    $id_nganhnghe = $_GET['id_nganhnghe'];
    $id_hinhthuc = $_GET['id_hinhthuc'];
    $id_kinhnghiem = $_GET['id_kinhnghiem'];
    $id_gioitinh = $_GET['id_gioitinh'];
    $search = $_GET['search'];

    $id_diachi = $_GET['id_diachi'];
    // get name dia chi
    $diachi = 'all';
    if ($id_diachi != 'all')
        $diachi = $list_custom_tinhthanh[$id_diachi];

    //search all, tính tổng
    $kq = $job_kysu::searchJob($id_nganhnghe, $id_hinhthuc, $id_kinhnghiem, $id_gioitinh, $diachi,$search);
    $totalPages = ceil(floatval(count($kq)) / floatval($resultsPerPage));
    // phân trang
    $search_phantrang = $job_kysu::searchJob_and_Phantrang($id_nganhnghe, $id_hinhthuc, $id_kinhnghiem, $id_gioitinh, $diachi,$search, $page, $resultsPerPage);
    $allJob = $search_phantrang;
    $totalJob = count($kq);
} else {
    $allJob = $job_kysu::getAllJob_andCreatePagination($page, $resultsPerPage);
    $totalJob = count($job_kysu::getAllJob());
    $totalPages = ceil(floatval($totalJob) / floatval($resultsPerPage));
}

?>
<style>
    <?php include 'public/scss/list-job.scss';
    include 'public/scss/job-viec-lam-gap.scss'; ?>
</style>
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
        border: 1px solid #ccc;
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
  <meta name="description" content="Việc làm kỹ sư và thông dịch tại Nhật Bản" />
<title>Việc làm kỹ sư và thông dịch tại Nhật Bản</title>
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

<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image: url(images/banner/1.jpg)">
    <div class="overlay-main site-bg-white opacity-01"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <!-- BREADCRUMB ROW -->
            <div>
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="trang-chu"><?= __('Trang chủ') ?></a></li>
                    <li><?= __('Kỹ sư & thông dịch viên tại Nhật Bản') ?></li>
                </ul>
            </div>

            <!-- BREADCRUMB ROW END -->
        </div>
    </div>
</div>
<div class="test"> </div>

<div>
    <div class="container-css container-bg">
        <div class="title-1" style="margin-top: 20px;"><?= __('Kỹ sư & thông dịch viên tại Nhật Bản') ?></div>
        <p class="h-des"><?= __('Hàng ngàn việc làm tốt với mức lương cao, đồng nghiệp thân thiện và chế độ đãi ngộ cực tốt à nha!') ?></p>
        <!--form search -->
        <div class="box-search-f" >
            <form method="get" action="">
                <div class="row">
                    <div class="col-sm-8 mt-3">
                        <input value="<?php
                                        if ($search != 'all') echo $search;
                                        ?>" name="search" class="input-name-job" type="text" placeholder="Tên việc làm" />
                    </div>
                    <div class="col-sm-4 mt-3">
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
                </div>

                <input type="hidden" name="page" value="1">
                <div class="row ">
                    <div class="col-md-2 mt-3">
                        <select name="id_nganhnghe">
                            <option value="all">Tất cả ngành nghề</option>
                            <?php
                            foreach ($form_contact->getAllNganh_ung_tuyen() as $key => $value) {
                                if ($value['id_nganhnghe'] == $id_nganhnghe) {
                                    echo ('<option selected="selected" value=' . $value['id_nganhnghe'] . '>' . $value['name_nganhnghe'] . '</option>');
                                } else {
                                    echo ('<option value=' . $value['id_nganhnghe'] . '>' . $value['name_nganhnghe'] . '</option>');
                                }
                            }

                            ?>
                        </select>
                    </div>
                    <div class="col-md-2 mt-3">
                        <select name="id_hinhthuc">
                            <option value="all">Tất cả hình thức</option>
                            <?php
                            foreach ($hinhthuc->getAllHinhThuc() as $key => $value) {
                                if ($value['id_hinhthuc'] == $id_hinhthuc) {
                                    echo ('<option selected="selected" value=' . $value['id_hinhthuc'] . '>' . $value['name_hinhthuc'] . '</option>');
                                } else {
                                    echo ('<option value=' . $value['id_hinhthuc'] . '>' . $value['name_hinhthuc'] . '</option>');
                                }
                            } ?>

                        </select>
                    </div>
                    <div class="col-md-2 mt-3">
                        <select name="id_kinhnghiem">
                            <option value="all">Tất cả kinh nghiệm</option>
                            <?php
                            foreach ($kinh_nghiem->getAllKinhNghiem() as $key => $value) {
                                if ($value['id_kn'] == $id_kinhnghiem) {
                                    echo ('<option selected="selected" value=' . $value['id_kn'] . '>' . $value['name_kn'] . '</option>');
                                } else {
                                    echo ('<option value=' . $value['id_kn'] . '>' . $value['name_kn'] . '</option>');
                                }
                            } ?>

                        </select>
                    </div>
                    <div class="col-md-2 mt-3">
                        <select name="id_gioitinh">
                            <option value="all">Tất cả giới tính</option>
                            <option <?php
                                    if (1 == $id_gioitinh) echo 'selected="selected"'
                                    ?> value="1">Nam</option>
                            <option <?php
                                    if ($id_gioitinh == 2) echo 'selected="selected"'
                                    ?> value="2">Nữ</option>
                            <option <?php
                                    if ($id_gioitinh == 3) echo 'selected="selected"'
                                    ?> value="3">Không yêu cầu</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-3" style="display: flex; justify-content: center;">
                        <button type="submit" class="btn-search"><i class="bi bi-search"></i>Tìm việc</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <div class="container-css">

        <div class="content-list">
            <div class="row">
                <div class="col-md-9" style="margin-top: 30px;">
                    <p style="font-weight: 500;"><span style="color: red;"><?php echo $totalJob ?> </span> <?= __('việc làm phù hợp') ?></p>
                    <?php
                    foreach ($allJob as $key => $value) {
                    ?>
                        <div class="card-list" id='job-vietnam'>
                            <div class="group-info">
                                <?php

                                if ($value['id_cty'] == 1) {
                                ?>
                                    <div class="company-logo">
                                        <img src="public/images/logo.png" />
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <div class="company-logo">
                                        <?php echo $value['img_cty'] ?>
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="content">
                                    <a href="<?php echo 'viec-lam-ky-su-va-thong-dich-nhat-ban/' . $value['slug'] ?>-<?php echo $value['id_job'] ?>.html">
                                        <div class="chucvu">
                                            <?php echo $value['chucvu'] ?>
                                        </div>
                                    </a>

                                    <?php
                                    if ($value['id_cty'] == 1) {
                                    ?>
                                        <a href="<?php echo 'viec-lam-ky-su-va-thong-dich-nhat-ban/' . $value['slug'] ?>-<?php echo $value['id_job'] ?>.html">
                                            <div class="name_cty">
                                                <?php echo $value['diachi_cuthe'] ?>
                                            </div>
                                        </a>
                                    <?php
                                    } else {
                                    ?>
                                        <a href="<?php echo 'viec-lam-ky-su-va-thong-dich-nhat-ban/' . $value['slug'] ?>-<?php echo $value['id_job'] ?>.html">
                                            <div class="name_cty">
                                                <?php echo $value['name'] ?>
                                            </div>
                                        </a>
                                    <?php
                                    }
                                    ?>

                                    <div style="font-weight: 500;color: #636e72;font-size: 13px;">

                                        <?php echo $value['diachi'] ?>
                                    </div>
                                    <!-- <div style="font-weight: 500;color: #636e72;font-size: 13px;">
                                <?php
                                $dateTime = new DateTime($value['updated_at']);
                                $formattedDate = $dateTime->format('d/m/Y');
                                echo 'Cập nhật: ' . $formattedDate;
                                ?>
                            </div> -->
                                    <div style="font-weight: 500;color: #636e72;font-size: 13px;">
                                        <?php
                                        $ngayHienTai = new DateTime();
                                        $ngayDen = new DateTime($value['ngaycuoicung']);
                                        $soNgayConLai = $ngayHienTai->diff($ngayDen)->format('%a');
                                        if ($soNgayConLai <= 0) {
                                            echo 'Ngày cuối cùng để ứng tuyển';
                                        } else
                                            echo 'Bạn còn ' . '<span style="color: #ed1b24">' . $soNgayConLai . '</span>' . ' ngày để ứng tuyển';
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="salary">
                                <?php echo $value['mucluong'] ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-md-3" style="margin-top: 30px;">
                <div class="title-tuyen-gap">Công việc tuyển gấp</div>
                    <?php
                    foreach ($job_tyen_gap as $key => $value) {
                    ?>
                        <a href="<?php echo 'viec-lam-ky-su-va-thong-dich-nhat-ban/' . $value['slug'] ?>-<?php echo $value['id_job'] ?>.html">

                            <div class="card-job-gap mt-3">
                                <div class="chucvu">
                                    <?php echo $value['chucvu'] ?>
                                </div>
                                <div class="group-info">

                                    <?php
                                    if ($value['id_cty'] == 1) {
                                    ?>
                                        <div class="company-logo">
                                            <img src="public/images/logo.png" />
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="company-logo">
                                            <?php echo $value['img_cty'] ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="content">
                                        <?php
                                        if ($value['id_cty'] == 1) {
                                        ?>
                                            <div class="name_cty">
                                                <?php echo $value['diachi_cuthe'] ?>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="name_cty">
                                                <?php echo $value['name'] ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <div style="font-weight: 500;color: #636e72;font-size: 14px;">
                                            <i class="bi bi-cash" style="margin-right: 5px;"></i>
                                            <?php echo $value['mucluong'] ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                    }
                    ?>
            </div>
            </div>

        </div>

        <!-- page bootstrap -->
        <?php
        function generatePagination($currentPage, $totalPages)
        {
            $range = 2; // Number of pages before and after the current page to display
            $output = '';
            $d = 1;

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
        echo '<ul class="pagination justify-content-center pagination-lg" id="pagination">';
        echo generatePagination($page, $totalPages);
        echo '</ul>';
        echo '<div style="margin-bottom: 90px"> </div>'
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
    </div>
</div>
<?php
require 'footer.php';
?>
</body>
</html>
