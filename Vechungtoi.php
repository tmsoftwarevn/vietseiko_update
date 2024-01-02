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
    @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
    @media (min-width: 992px) {
            .logo-mobile-f {
                display: none !important;
            }
        }
    .snip1477 {
        position: relative;
        overflow: hidden;
        margin: 20px auto;
        width: calc(50% - 20px);
        min-width: 240px;
        max-width: 320px;
        color: #ffffff;
        text-align: center;
        font-size: 18px;
        border-radius: 4px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .snip1477:hover {
        transform: scale(1.05);
    }


    figure.snip1477:hover {
        background: #0c0c0c;
    }

    figure.snip1477 *,
    figure.snip1477 *:before,
    figure.snip1477 *:after {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all 0.55s ease;
        transition: all 0.55s ease;
    }

    figure.snip1477 img {
        max-width: 110%;
        backface-visibility: hidden;
        vertical-align: top;
        opacity: 0.9;
    }

    figure.snip1477 .title {
        position: absolute;
        top: 58%;
        left: 25px;
        padding: 5px 10px 10px;
    }

    figure.snip1477 .title:before,
    figure.snip1477 .title:after {
        height: 2px;
        width: 400px;
        position: absolute;
        content: '';
        background-color: #ffffff;
    }

    figure.snip1477 .title:before {
        top: 0;
        left: 10px;
        -webkit-transform: translateX(100%);
        transform: translateX(100%);
    }

    figure.snip1477 .title:after {
        bottom: 0;
        right: 10px;
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
    }

    figure.snip1477 .title div:before,
    figure.snip1477 .title div:after {
        width: 2px;
        height: 300px;
        position: absolute;
        content: '';
        background-color: #ffffff;
    }

    figure.snip1477 .title div:before {
        top: 10px;
        right: 0;
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
    }

    figure.snip1477 .title div:after {
        bottom: 10px;
        left: 0;
        -webkit-transform: translateY(-100%);
        transform: translateY(-100%);
    }

    figure.snip1477 h2,
    figure.snip1477 h4 {
        margin: 0;
        text-transform: uppercase;
    }

    figure.snip1477 h2 {
        font-weight: 400;
    }

    figure.snip1477 h6 {
        display: block;
        font-weight: 700;
        background-color: #ffffff;
        padding: 5px 10px;
        color: #000000;
    }

    figure.snip1477 figcaption {
        position: absolute;
        bottom: 42%;
        left: 25px;
        text-align: left;
        opacity: 0;
        padding: 5px 60px 5px 10px;
        font-size: 0.8em;
        font-weight: 500;
        letter-spacing: 1.5px;
    }

    figure.snip1477 figcaption p {
        margin: 0;
        color: wheat;
    }

    figure.snip1477 a {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

    figure.snip1477:hover img,
    figure.snip1477.hover img {
        zoom: 1;
        filter: alpha(opacity=35);
        -webkit-opacity: 0.35;
        opacity: 0.35;
    }

    figure.snip1477:hover .title:before,
    figure.snip1477.hover .title:before,
    figure.snip1477:hover .title:after,
    figure.snip1477.hover .title:after,
    figure.snip1477:hover .title div:before,
    figure.snip1477.hover .title div:before,
    figure.snip1477:hover .title div:after,
    figure.snip1477.hover .title div:after {
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0);
    }

    figure.snip1477:hover .title:before,
    figure.snip1477.hover .title:before,
    figure.snip1477:hover .title:after,
    figure.snip1477.hover .title:after {
        -webkit-transition-delay: 0.15s;
        transition-delay: 0.15s;
    }

    figure.snip1477:hover figcaption,
    figure.snip1477.hover figcaption {
        opacity: 1;
        -webkit-transition-delay: 0.2s;
        transition-delay: 0.2s;
    }

    @media only screen and (max-width: 46.1875em) {
        .img-vct {
            height: 450px;
        }
    }

    @media (max-width: 768px) {
        .custom-bg {
            background-color: #ffffff;
        }
    }

    /* Dành cho thiết bị có độ rộng màn hình từ 768px đến 992px */
    @media (min-width: 768px) and (max-width: 992px) {
        .custom-bg {
            background-color: #ffffff;
        }
    }

    */
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
                        <!-- <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">About Us</h2>
                            </div>
                        </div> -->
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
                            <div class="left_container_title hidden-md hidden-xs hidden-sm">
                                <span class="left_container_title_label">ABOUT US</span>
                                <span class="left_container_title_ch">...</span>
                            </div>
                            <!-- //Giới thiệu -->
                            <div class="left_container_content hidden-md hidden-xs hidden-sm">
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
                        <!-- CONTEN BODY 1 -->
                        <p>&#8203;<img src="images/backround/nguyen-tac-tuyen-dung-nhan-su.jpg"></p>
                        <p>&#8203;<img src="images/backround/su-gan-bo-cua-cay-tre.jpg"></p>
                        <p>&#8203;<img src="images/backround/cherry-blossom.jpg"></p>

                    </div>
                    <!-- Cột 9 -->
                    <div class="col-md-9 col-sm-12 col-xs-12 custom-bg">
                        <div class="text-black">
                            <h2 class="text-center mb-4">VỀ CHÚNG TÔI</h2>
                            <hr>
                            <div class="company-introduction">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-12 vechungtoi">
                                                <div class="row">
                                                    <!-- CEO -->
                                                    <div class="col-md-4 mb-4">
                                                        <figure class="snip1477">
                                                            <img src="images/profile/dao.jpg" alt="CEO.PHẠM HỮU ĐẠO">
                                                            <div class="title">
                                                                <div>
                                                                    <h4>CEO.PHẠM HỮU ĐẠO</h4>
                                                                    <h6>CEO.Giám Đốc</h6>
                                                                </div>
                                                            </div>
                                                            <figcaption>
                                                                <p style="font-size: 10px;">Có 13 Năm kinh nghiệm
                                                                    công tác Quản lý, điều hành doanh nghiệp, đặt
                                                                    biệt liên quan mảng giới thiệu, cung ứng nhân sự
                                                                    giữa hai thị trường Nhật Bản Việt Nam.</p>
                                                            </figcaption>
                                                            <a href="#"></a>
                                                        </figure>
                                                    </div>

                                                    <!-- Cố Vấn Chiến Lược -->
                                                    <div class="col-md-4 mb-4">
                                                        <figure class="snip1477">
                                                            <img src="images/profile/ozaki.jpg"
                                                                alt="Mr.OZAKI AKITOSHI (Người Nhật Bản)">
                                                            <div class="title">
                                                                <div>
                                                                    <h4>Mr.OZAKI AKITOSHI <br>(Người Nhật Bản)</h4>
                                                                    <h6>Cố Vấn Chiến Lược</h6>
                                                                </div>
                                                            </div>
                                                            <figcaption>
                                                                <p>Có 55 năm Kinh nghiệm công tác cố vấn cho các tập
                                                                    đoàn Lớn Tại Nhật Bản</p>
                                                            </figcaption>
                                                            <a href="#"></a>
                                                        </figure>
                                                    </div>

                                                    <!-- Phó Giám Đốc -->
                                                    <div class="col-md-4 mb-4">
                                                        <figure class="snip1477">
                                                            <img src="images/profile/ueno.jpg"
                                                                alt="Mr.UENO TAKASHI (Người Nhật Bản)">
                                                            <div class="title">
                                                                <div>
                                                                    <h4>Mr.UENO TAKASHI <br>(Người Nhật Bản)</h4>
                                                                    <h6>Phó Giám Đốc <br>(Mảng nhân sự cấp cao Việt
                                                                        Nam Nhật Bản)</h6>
                                                                </div>
                                                            </div>
                                                            <figcaption>
                                                                <p>25 năm Kinh Nghiệm công tác mảng Tuyển dụng Cung
                                                                    ứng nhân sự cấp cao Tại Nhật Bản.</p>
                                                            </figcaption>
                                                            <a href="#"></a>
                                                        </figure>
                                                    </div>

                                                    <!-- Phó Giám Đốc (Tài chính kế toán) -->
                                                    <div class="col-md-4 mb-4">
                                                        <figure class="snip1477">
                                                            <img src="images/profile/trang.jpg" alt="Ms.VÕ THỊ TRANG">
                                                            <div class="title">
                                                                <div>
                                                                    <h4>Ms.VÕ THỊ TRANG</h4>
                                                                    <h6>Phó Giám Đốc <br>(Tài chính kế toán)</h6>
                                                                </div>
                                                            </div>
                                                            <figcaption>
                                                                <p>Có 6 Năm kinh nghiệm Tài chính kế toán</p>
                                                            </figcaption>
                                                            <a href="#"></a>
                                                        </figure>
                                                    </div>

                                                    <!-- Trưởng Phòng Headhunt -->
                                                    <div class="col-md-4 mb-4">
                                                        <figure class="snip1477">
                                                            <img src="images/profile/ly.jpg" alt="Ms.TRỊNH THỊ KIỀU LY">
                                                            <div class="title">
                                                                <div>
                                                                    <h4>Ms.TRỊNH THỊ KIỀU LY</h4>
                                                                    <h6>Trưởng Phòng Headhunt <br>(Mảng nhân sự cấp
                                                                        cao)</h6>
                                                                </div>
                                                            </div>
                                                            <figcaption>
                                                                <p>Có 5 Năm kinh nghiệm công tác mảng nhân sự cấp
                                                                    cao Tại Việt Nam</p>
                                                            </figcaption>
                                                            <a href="#"></a>
                                                        </figure>
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