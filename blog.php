<?php
require_once "setting-all-file.php";


$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$domain = $_SERVER['HTTP_HOST'];
$currentUrl = $protocol . '://' . $domain . $_SERVER['REQUEST_URI'];
$domainFromUrl = parse_url($currentUrl, PHP_URL_SCHEME) . '://' . parse_url($currentUrl, PHP_URL_HOST);

?>
<?php

$page = 1;
$type = 'all';
$resultsPerPage = 15;
$totalJob = 1;
$totalPages = 1;
if (isset($_GET['page'])) {
  $page = $_GET['page'];
}
if (isset($_GET['type'])) {
  $type = $_GET['type'];
}

$allBlog = $blog::getLatestBlogWithPagination_byid($page, $resultsPerPage, $type);
$totalJob = $blog::count_AllBlog_byId($type);

$totalPages = ceil($totalJob / floatval($resultsPerPage));


?>
<style>
  <?php include 'public/scss/custom.scss';
  include 'public/scss/custom-select.scss'
  ?>
</style>
<style>
  form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
  }

  select {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
  }

  option {
    font-size: 17px;
  }

  #search-input-blog {
    padding: 8px 20px;
    color: white;
    border: none;
    border-radius: 5px;

    margin-left: 20px;
    border: 1px solid #ccc;
  }

  #icon-search {
    font-size: 16px;
    margin-left: 15px;
    padding: 8px;
    border: none;

    cursor: pointer;
  }

  .job-result {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
    background-color: white;
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
  <meta name="description" content="Tin tức việc làm tại Vietseiko, xkld, kỹ sư, thông dịch Nhật Bản" />

  <title>Tin tức</title>

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
  <div class="page-wraper">

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
                <li><a href="trang-chu"><?= __('Trang chủ') ?></a></li>
                <li><?= __('Tin tức') ?></li>
              </ul>
            </div>

            <!-- BREADCRUMB ROW END -->
          </div>
        </div>
      </div>

      <div class="container" style=" margin-top: 50px;">

        <!-- // search cs -->
        <form action="" method="get" style="display: flex; justify-content: start;">
          <input type="hidden" name="page" value="1">
          <select name="type">
            <option value="all">Tất cả tin tức</option>
            <option <?php
                    if (1 == $type) echo 'selected="selected"'
                    ?> value="1">Việc Làm Tại Việt Nam</option>
            <option <?php
                    if ($type == 2) echo 'selected="selected"'
                    ?> value="2">Xuất Khẩu Lao Động Tại Nhật Bản</option>
            <option <?php
                    if ($type == 3) echo 'selected="selected"'
                    ?> value="3">Kỹ Sư & Thông Dịch Viên tại Nhật Bản</option>
            <option <?php
                    if ($type == 4) echo 'selected="selected"'
                    ?> value="3">Việc làm tại VietSeiko</option>
          </select>
          <!-- <input type="text" id="search-input-blog" name="search-input-blog" placeholder="Nhập từ khóa..."> -->
          <button type="submit" id="icon-search"><i class="bi bi-search"></i></button>
        </form>
      </div>

      <!-- INNER PAGE BANNER END -->

      <!-- OUR BLOG START -->
      <div class="section-full p-t20  site-bg-white" style="transform: none">
        <div class="container" style="transform: none">
          <div class="row" style="transform: none">
            <?php
            foreach ($allBlog as $key => $value) {
            ?>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="blog-post">
                  <div class="img_blog_l">
                    <img src="/images/l-image-blog/<?php echo $value['img_blog'] ?>" />
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
            <?php } ?>
          </div>
        </div>
      </div>
      <!-- OUR BLOG END -->

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

  <?php require "footer.php" ?>
</body>

</html>