<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/about-us.css">
</head>
<style>
    @media (min-width: 992px) {
        .logo-mobile-f {
            display: none !important;
        }
    }

    .items-nguyentac {
        margin-bottom: 20px;
    }

    .item-nguyentac_box img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .item-nguyentac_box p {
        text-align: center;
        margin-top: 10px;
    }

    .sole {
        font-weight: bold;
        color: #007bff;
    }

    .col-md-6 {
        padding: 0 15px;
    }

    .custom-bg {
        background-color: #f9f9f9;
        padding: 20px;
    }

    .text-black h2 {
        font-size: 28px;
        margin-bottom: 20px;
        font-weight: bold;
        color: #333;
    }

    .company-introduction {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .company-introduction p {
        font-size: 16px;
        line-height: 1
    }
</style>

<body>
    <!-- LOADING AREA START ===== -->

    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">
        <!-- HEADER START -->

        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image: url(images/banner/1.jpg)">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">

                        <!-- BREADCRUMB ROW -->

                        <div>
                            <ul class="wt-breadcrumb breadcrumb-style-2">
                                <li><a href="trang-chu">Trang chủ</a></li>
                                <li>Giới thiệu</li>
                            </ul>
                        </div>

                        <!-- BREADCRUMB ROW END -->
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12 custom-bg">
                        <div class="left_container">
                            <div class="left_container_title ">
                                <span class="left_container_title_label">ABOUT US</span>
                                <span class="left_container_title_ch">...</span>
                            </div>
                            <!-- //Giới thiệu -->
                            <div class="left_container_content ">
                                <div class="panel-group" id="accordion">
                                    <!-- GIỚI THIỆU CÔNG TY -->
                                    <div class="panel panel-default active">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="/gioi-thieu">
                                                    <span class="icon-wrapper">
                                                        <i class="fas fa-info-circle"></i> <!-- Icon trước span -->
                                                        <span class="collapse_large">GIỚI THIỆU CÔNG TY</span>
                                                    </span>
                                                </a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- THƯ NGÕ CỦA CEO -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/thu-ngo">
                                                <span class="icon-wrapper">
                                                    <i class="fas fa-envelope"></i>
                                                    <!-- Icon thư hoặc thư ngõ trước span -->
                                                    <span class="collapse_large">THƯ NGỎ</span>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- VỀ CHÚNG TÔI -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/ve-chung-toi">
                                                <span class="icon-wrapper">
                                                    <i class="fas fa-user"></i>
                                                    <!-- Icon đại diện cho "VỀ CHÚNG TÔI" -->
                                                    <span class="collapse_large">VỀ CHÚNG TÔI</span>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- TẦM NHÌN & SỨ MỆNH -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/tam-nhin-va-su-menh">
                                                <span class="icon-wrapper">
                                                    <i class="fas fa-binoculars"></i>
                                                    <!-- Icon đại diện cho "Tầm nhìn" -->
                                                    <span class="collapse_large">TẦM NHÌN & SỨ MỆNH</span>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- NGUYÊN TẮC -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/nguyen-tac">
                                                <span class="icon-wrapper">
                                                    <i class="fas fa-gavel"></i> <!-- Icon đại diện cho "Nguyên tắc" -->
                                                    <span class="collapse_large">NGUYÊN TẮC</span>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- NHỮNG GIÁ TRỊ VĂN HÓA -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/gia-tri-van-hoa">
                                                <span class="icon-wrapper">
                                                    <i class="fas fa-heart"></i>
                                                    <span class="collapse_large">GIÁ TRỊ VĂN HÓA</span>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- GIÁ TRỊ CỐT LÕI -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/gia-tri-cot-loi">
                                                <span class="icon-wrapper">
                                                    <i class="fas fa-shield-alt"></i>
                                                    <span class="collapse_large">GIÁ TRỊ CỐT LÕI</span>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                <!-- HÌNH ẢNH & VIDEO -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/hinh-anh-va-video">
                                                <span class="icon-wrapper">
                                                    <i class="fas fa-image"></i>
                                                    <span class="collapse_large">HÌNH ẢNH & VIDEO</span>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //Cây tre viet nam -->
                        <p>&#8203;<img src="images/backround/nguyen-tac-tuyen-dung-nhan-su.jpg"></p>
                        <p>&#8203;<img src="images/backround/su-gan-bo-cua-cay-tre.jpg"></p>
                        <p>&#8203;<img src="images/backround/cherry-blossom.jpg"></p>
                    </div>
                    <!-- Cột 9 -->
                    <div class="col-md-9 col-sm-12 col-xs-12 custom-bg">
                        <div class="text-black">
                            <h2 class="text-center mb-4">NGUYÊN TẮC</h2>
                            <hr>
                            <div class="company-introduction">
                                <div class="row">
                                    <!-- Cột 6 cho mỗi hàng -->
                                    <div class="col-md-6">
                                        <!-- Hàng đầu tiên trong cột 6 -->
                                        <div class="items-nguyentac">
                                            <div class="item-nguyentac_box">
                                                <img src="images/nguyentat/yeuthuonggiadinh.jpg" alt="Mô tả hình ảnh">
                                                <p>1. Yêu thương gia đình</p>
                                            </div>
                                        </div>
                                        <!-- Hàng thứ hai trong cột 6 -->
                                        <div class="items-nguyentac">
                                            <div class="item-nguyentac_box">
                                                <img src="images/nguyentat/khongluoibien.jpg" alt="Mô tả hình ảnh">
                                                <p>3. Không lười biếng</p>
                                            </div>
                                        </div>
                                        <!-- Hàng thứ ba trong cột 6 -->
                                        <div class="items-nguyentac">
                                            <div class="item-nguyentac_box">
                                                <img src="images/nguyentat/Tanluccaptren.jpg" alt="Mô tả hình ảnh">
                                                <p class="sole">5. Tận lực cấp trên</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cột 6 cho mỗi hàng, dựa trên cấu trúc của Bootstrap -->
                                    <div class="col-md-6">
                                        <!-- Hàng đầu tiên trong cột 6 -->
                                        <div class="items-nguyentac">
                                            <div class="item-nguyentac_box">
                                                <img src="images/nguyentat/kiluat.jpg" alt="Mô tả hình ảnh">
                                                <p>2. Kỷ luật với bản thân</p>
                                            </div>
                                        </div>
                                        <!-- Hàng thứ hai trong cột 6 -->
                                        <div class="items-nguyentac">
                                            <div class="item-nguyentac_box">
                                                <img src="images/nguyentat/kodoki.jpg" alt="Mô tả hình ảnh">
                                                <p>4. Không đố kị</p>
                                            </div>
                                        </div>
                                        <!-- Hàng thứ ba trong cột 6 -->
                                        <div class="items-nguyentac">
                                            <div class="item-nguyentac_box">
                                                <img src="images/nguyentat/nangdocapduoi.jpg" alt="Mô tả hình ảnh">
                                                <p class="sole">6. Nâng đỡ cấp dưới</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS và các thư viện liên quan -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
<?php
include "footer.php";
?>