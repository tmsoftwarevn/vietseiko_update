<?php
require_once "setting-all-file.php";
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$domain = $_SERVER['HTTP_HOST'];
$currentUrl = $protocol . '://' . $domain . $_SERVER['REQUEST_URI'];
$domainFromUrl = parse_url($currentUrl, PHP_URL_SCHEME) . '://' . parse_url($currentUrl, PHP_URL_HOST);

?>
<?php

$id = 1;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  //echo 'id blog la:'.$id;
} else {
  echo "Khong nhan duoc ID";
}

$allBlog = $cam_nang->detail($id);
$relate_blog = $cam_nang->getRelatedBlog($allBlog[0]['type_id'], 6);

if ($allBlog[0]['type_id'] == 1) {
  $job_moinhat = $job::getLatestJob(12);
  $link = 'viec-lam-tai-viet-nam/';
}
if ($allBlog[0]['type_id'] == 2) {
  $job_moinhat = $job_nb::getLatestJob(12);
  $link = 'viec-lam-xkld-nhat-ban/';
}
if ($allBlog[0]['type_id'] == 3) {
  $job_moinhat = $job_kysu::getLatestJob(12);
  $link = 'viec-lam-ky-su-va-thong-dich-nhat-ban/';
}
if ($allBlog[0]['type_id'] == 4) {
  $job_moinhat = $job_vietseiko::getLatestJob(12);
  $link = 'viec-lam-tai-vietseiko/';
}
?>
<style>
  <?php include 'public/scss/custom.scss'; ?>
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
  <meta name="description" content="<?php echo $allJob[0]['tieude_blog'] ?>" />
  <title><?php echo  $allBlog[0]['tieude_blog'] ?></title>
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

  <?php require "header.php" ?>
  <div class="page-content" style="transform: none">

    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image: url(images/banner/1.jpg)">
      <div class="overlay-main site-bg-white opacity-01"></div>
      <div class="container">
        <div class="wt-bnr-inr-entry">

          <div>
            <ul class="wt-breadcrumb breadcrumb-style-2">
              <li><a href="cam-nang"><?= __('Cẩm nang') ?></a></li>
              <li><?= __('Chi tiết cẩm nang') ?></li>
            </ul>
          </div>

          <!-- BREADCRUMB ROW END -->
        </div>
      </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- OUR BLOG START -->
    <div class="section-full p-t60 p-b40 bg-white" style="transform: none">
      <div class="container" style="transform: none">
        <!-- BLOG SECTION START -->
        <div class="section-content" style="transform: none">
          <div class="row d-flex justify-content-center" style="transform: none">
            <div class="col-md-12 col-lg-8">
              <!-- BLOG START -->
              <div class="blog-detail">

                <h2 class="tieude-detail"><?php echo $allBlog[0]['tieude_blog'] ?></h2>
                <div class="date-detail">
                  <?php
                  $dateTime = new DateTime($allBlog[0]['created_at']);
                  $formattedDate = $dateTime->format('d/m/Y');
                  echo $formattedDate; ?>
                </div>
                <div class="img-blog-detail">
                <img src="/images/l-image-blog/<?php echo $allBlog[0]['img_blog'] ?>" />

                 
                </div>

                <div style="margin-top: 20px;">
                  <?php
                  echo $allBlog[0]['noidung_blog'];
                  ?>
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
                      
                    ">
                <div style="margin-top: 20px;">

                  <div class="widget recent-posts-entry">
                    <h4 class="section-head-small mb-5"><?= __('Cẩm nang liên quan') ?></h4>
                    <?php

                    foreach ($relate_blog as $key => $value) {
                    ?>
                      <div class="pr-blog">
                        <div class="img-detail-blog-new">
                        <img src="/images/l-image-blog/<?php echo $value['img_blog'] ?>" />

                         
                        </div>
                        <div class="pr-r">
                          <a href="<?php echo 'cam-nang/' . $value['slug'] ?>-<?php echo $value['id_blog'] ?>.html">
                            <div class="name-pr">
                              <?php echo $value['tieude_blog'] ?>

                            </div>
                          </a>
                          <div class="text-pr">

                            <?php echo $value['noidung_blog'] ?>
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
        </div>
      </div>
    </div>
    <!-- OUR BLOG END -->
    <div class="section-full p-t30 p-b90 site-bg-light-purple twm-related-jobs-carousel-wrap">
      <div class="section-head center wt-small-separator-outer">
        <div class="wt-small-separator site-text-primary">
          <!-- <div>Top Jobs</div> -->
        </div>
        <h2 class="wt-title" style="margin-bottom: 30px;"><?= __('Công việc mới nhất') ?></h2>
      </div>
      <div class="container">

        <div class="section-content">
          <div class="owl-carousel twm-related-jobs-carousel owl-btn-vertical-center owl-loaded owl-drag">
            <?php

            foreach ($job_moinhat as $key => $value) {
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
                    $time = $job->timeAgo($value['created_at']);
                    echo $time;
                    ?>
                  </span>
                  <!-- <div class="twm-jobs-category green">
                  <span class="twm-bg-sky">Mới nhất</span>
                </div> -->
                  <div class="twm-mid-content">

                    <a href="<?php echo $link .  $value['slug'] . '/' . $value['id_job'] ?>" class="twm-job-title">
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
                    <a href="<?php echo $link .  $value['slug'] . '-' . $value['id_job'] ?>.html" class="twm-jobs-browse site-text-primary">Chi tiết</a>
                  </div>
                </div>
              </div>

            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require "footer.php" ?>
</body>

</html>