<?php
session_start();


require_once "config.php";
require_once "models/db.php";
require_once "models/job.php";
require_once "models/trangthai.php";

$trangthaiAdmin = new Trangthai;
$jobAdmin = new Job;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="DexignLab" />
    <meta name="robots" content="" />
    <meta name="keywords" content="admin dashboard, admin template, analytics, bootstrap, bootstrap 5, bootstrap 5 admin template, job board admin, job portal admin, modern, responsive admin dashboard, sales dashboard, sass, ui kit, web app, frontend" />
    <meta name="description" content="We proudly present Jobick, a Job Admin dashboard php Template, If you are hiring a job expert you would like to build a superb website for your Jobick, it's a best choice." />
    <meta property="og:title" content="Jobick : Job Admin Dashboard Bootstrap 5 Template + FrontEnd" />
    <meta property="og:description" content="We proudly present Jobick, a Job Admin dashboard php Template, If you are hiring a job expert you would like to build a superb website for your Jobick, it's a best choice." />
    <meta property="og:image" content="https://jobick.dexignlab.com/xphp/social-image.png" />
    <meta name="format-detection" content="telephone=no" />

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Page Title -->
    <title>VietSeiko : Job Admin Dashboard</title>

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />

    <!-- All StyleSheet -->
    <!-- <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" /> -->
    <link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" /> -->

    <!-- <link rel="stylesheet" href="css/uniform.css" />
    <link rel="stylesheet" href="css/select2.css" />
    <link rel="stylesheet" href="css/matrix-style.css" />
    <link rel="stylesheet" href="css/matrix-media.css" /> -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Globle CSS -->
    <link href="css/style.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include MetisMenu CSS and JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.6/metisMenu.min.css" integrity="sha512-cz36v2XU3wP+g6N9ClmsqWQE5q9/0zi2Mu+AP1wrR/q/2WajIcNcGJDeQxUJLgT3vwEflqT5H7JsjRJCIYCXgA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.6/metisMenu.min.js" integrity="sha512-ODsgr0r0s5b5ZoIYdU3zuklsTU3smnT8K1I54vbq6Dl3R72BKfnZ/VFXpbz+W7HsCQD1FTjln8AP3MZg6aHfrUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- /////// -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<style>
    .sub-menu {
        display: none;
    }
</style>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="dashboard.php" class="brand-logo">
                <img src="images/profile/logo.png" width="100px" />
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->

        <div class="header">

        </div>

        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <?php
                if (isset($_SESSION['user'])) {
                    $user = $_SESSION['user'];
                ?>
                    <div class="dropdown header-profile2">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <div class="header-info2 d-flex align-items-center">
                                <!-- <img src="images/profile/logo.png" alt="" style="width: 70px;" /> -->
                                <div class="d-flex align-items-center sidebar-info">
                                    <div>
                                        <span class="font-w400 d-block"><?php echo $user; ?></span>
                                        <small class="text-end font-w400">Superadmin</small>
                                    </div>
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="app-profile.php" class="dropdown-item ai-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="ms-2">Profile </span>
                            </a>
                            <a href="email-inbox.php" class="dropdown-item ai-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <span class="ms-2">Inbox </span>
                            </a>
                            <a href="./login/logout.php" class="dropdown-item ai-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span class="ms-2">Logout </span>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
                <ul class="metismenu" id="menu">
                    <li>
                        <a class="has-arrow" href="dashboard.php" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Thống kê</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" onclick="toggleSubMenu('sub-menu-1','span-1')">
                            <i class="flaticon-093-waving"></i>
                            <span id="span-1" class="nav-text">Quản lý công việc và công ty</span>
                        </a>
                        <ul class="sub-menu" id="sub-menu-1">
                            <li><a href="job-list.php">Công việc tại Việt Nam</a></li>
                            <li><a href="job_nb_list.php">Công việc XKLD tại Nhật Bản</a></li>
                            <li><a href="job_ksnb_list.php">Kỹ sư & Thông dịch viên tại Nhật Bản</a></li>
                            <li><a href="job_vietseiko_list.php">Công việc tại VietSeiko</a></li>
                            <li><a href="company-list.php">Thông tin các công ty</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0);" onclick="toggleSubMenu('sub-menu-2','span-2')">
                            <i class="flaticon-093-waving"></i>
                            <span id="span-2" class="nav-text">Quản lý ứng viên</span>
                        </a>
                        <ul class="sub-menu" id="sub-menu-2">
                            <li><a href="cv-vn-list.php">Ứng viên tại Việt Nam</a></li>
                            <li><a href="cv-xkld-list.php">Ứng viên XKLD tại Nhật Bản</a></li>
                            <li><a href="cv-ksnb-list.php"> Ứng viên Kỹ sư & Thông dịch viên tại Nhật Bản</a></li>
                            <li><a href="cv-vietseiko-list.php">Ứng viên tại VietSeiko</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" onclick="toggleSubMenu('sub-menu-6.3','span-6.3')">
                            <i class="flaticon-093-waving"></i>
                            <span id="span-6.3" class="nav-text">Quản lý ứng viên nhập tay</span>
                        </a>
                        <ul class="sub-menu" id="sub-menu-6.3">
                            <li><a href="ungvien-list-nhaptay.php?type=vn">Nhập tay ứng viên tại Việt Nam</a></li>
                            <li><a href="ungvien-list-nhaptay.php?type=xkld">Nhập tay ứng viên XKLD Nhật Bản</a></li>
                            <li><a href="ungvien-list-nhaptay.php?type=ksnb">Nhập tay ứng viên kỹ sư & thông dịch Nhật Bản</a></li>
                            <li><a href="ungvien-list-nhaptay.php?type=vsk">Nhập tay ứng viên tại VietSeiko</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" onclick="toggleSubMenu('sub-menu-3','span-3')">
                            <i class="flaticon-093-waving"></i>
                            <span id="span-3" class="nav-text">Quản lý Tin tức</span>
                        </a>
                        <ul class="sub-menu" id="sub-menu-3">
                            <li><a href="tintuc-list.php">Thông tin</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0);" onclick="toggleSubMenu('sub-menu-4','span-4')">
                            <i class="flaticon-093-waving"></i>
                            <span id="span-4" class="nav-text">Quản lý Cẩm nang</span>
                        </a>
                        <ul class="sub-menu" id="sub-menu-4">
                            <li><a href="admin-list-camnang.php">Danh sách</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0);" onclick="toggleSubMenu('sub-menu-5','span-5')">
                            <i class="flaticon-093-waving"></i>
                            <span id="span-5" class="nav-text">Quản lý cảm nhận khách hàng</span>
                        </a>
                        <ul class="sub-menu" id="sub-menu-5">
                            <li><a href="review-list.php">Danh sách</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" onclick="toggleSubMenu('sub-menu-6','span-6')">
                            <i class="flaticon-093-waving"></i>
                            <span id="span-6" class="nav-text">Quản lý liên hệ ứng viên</span>
                        </a>
                        <ul class="sub-menu" id="sub-menu-6">
                            <li><a href="contact-list.php?type=vn">Liên hệ tại Việt Nam</a></li>
                            <li><a href="contact-list.php?type=xkld">Liên hệ XKLD Nhật Bản</a></li>
                            <li><a href="contact-list.php?type=ksnb">Liên hệ Kỹ sư & thông dịch Nhật Bản</a></li>
                            <li><a href="contact-list.php?type=vietseiko">Liên hệ tại VietSeiko</a></li>
                        </ul>
                    </li>
                    

                    <li>
                        <a class="has-arrow" href="javascript:void()" onclick="toggleSubMenu('sub-menu-6.2','span-6.2')">
                            <i class="flaticon-093-waving"></i>
                            <span id="span-6.2" class="nav-text">Quản lý liên hệ nhà tuyển dụng & khác</span>
                        </a>
                        <ul class="sub-menu" id="sub-menu-6.2">
                            <li><a href="contact-list.php?type=ntd">Nhà tuyển dụng</a></li>
                            <li><a href="contact-list.php?type=khac">Khác</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" onclick="toggleSubMenu('sub-menu-7','span-7')">
                            <i class="flaticon-093-waving"></i>
                            <span id="span-7" class="nav-text">Quản lý thông tin khác</span>
                        </a>
                        <ul class="sub-menu" id="sub-menu-7">
                            <li><a href="table-other.php?type=nganhnghe">Ngành nghề</a></li>
                            <li><a href="table-other.php?type=kinhnghiem">Kinh nghiệm</a></li>
                            <li><a href="table-other.php?type=hinhthuc">Hình thức</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" onclick="toggleSubMenu('sub-menu-8','span-8')">
                            <i class="flaticon-093-waving"></i>
                            <span id="span-8" class="nav-text">Quản lý banner</span>
                        </a>
                        <ul class="sub-menu" id="sub-menu-8">
                            <li><a href="img-list.php">Danh sách</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" onclick="toggleSubMenu('sub-menu-9','span-9')">
                            <i class="flaticon-093-waving"></i>
                            <span id="span-9" class="nav-text">Quản lý hình ảnh ,logo & video</span>
                        </a>
                        <ul class="sub-menu" id="sub-menu-9">
                            <li><a href="hinhanh-list.php">Hình ảnh</a></li>
                            <li><a href="logo-list.php">Logo</a></li>
                            <li><a href="video-list.php">Video</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="copyright">
                    <p><strong>Admin</strong> © All Rights Reserved</p>
                    <p class="fs-12">
                        Made with <span class="heart"></span> by TM
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- // custom js click tab left -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var subMenus = document.querySelectorAll('.sub-menu');
            subMenus.forEach(function(subMenu) {
                subMenu.style.display = 'none';
            });

            // Retrieve and set the state on page load
            var storedState = localStorage.getItem('submenuState');
            if (storedState) {
                var state = JSON.parse(storedState);
                state.forEach(function(item) {
                    var subMenu = document.getElementById(item.subMenuId);
                    var spanElement = document.getElementById(item.spanId);

                    if (item.spanColor === 'red') {
                        subMenu.style.display = 'block';
                        spanElement.style.color = 'red';
                    } else {
                        subMenu.style.display = 'none';
                        spanElement.style.color = 'black';
                    }
                });
            }
        });

        function toggleSubMenu(subMenuId, spanId) {
            var subMenu = document.getElementById(subMenuId);
            var spanElement = document.getElementById(spanId);

            // Reset color for all spans
            var allSpans = document.querySelectorAll('.nav-text');
            allSpans.forEach(function(otherSpan) {
                otherSpan.style.color = 'black';
            });

            // Reset display for all sub-menus
            var allSubMenus = document.querySelectorAll('.sub-menu');
            allSubMenus.forEach(function(otherSubMenu) {
                otherSubMenu.style.display = 'none';
            });

            if (subMenu.style.display === 'none') {
                subMenu.style.display = 'block';
                spanElement.style.color = 'red';
            } else {
                subMenu.style.display = 'none';
                spanElement.style.color = 'black';
                localStorage.removeItem('submenuState'); // Remove localStorage on collapse
            }

            // Update and store the state in localStorage
            var storedState = localStorage.getItem('submenuState');
            var currentState = storedState ? JSON.parse(storedState) : [];
            var existingIndex = currentState.findIndex(item => item.subMenuId === subMenuId);

            if (existingIndex !== -1) {
                currentState[existingIndex] = {
                    subMenuId: subMenuId,
                    spanId: spanId,
                    displayStyle: subMenu.style.display,
                    spanColor: spanElement.style.color
                };
            } else {
                currentState = [{
                    subMenuId: subMenuId,
                    spanId: spanId,
                    displayStyle: subMenu.style.display,
                    spanColor: spanElement.style.color
                }];
            }

            localStorage.setItem('submenuState', JSON.stringify(currentState));
        }
    </script>



</body>

</html>