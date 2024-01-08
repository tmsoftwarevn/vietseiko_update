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
                        <div class="banner-title-outer">
                            <!-- <div class="banner-title-name">
                                <h2 class="wt-title">About Us</h2>
                            </div> -->
                        </div>
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
                    <div class="col-md-3 col-sm-12  col-xs-12 custom-bg">
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
                        <!-- CONTEN BODY 1 -->
                        <p>&#8203;<img src="images/backround/nguyen-tac-tuyen-dung-nhan-su.jpg"></p>
                        <p>&#8203;<img src="images/backround/su-gan-bo-cua-cay-tre.jpg"></p>
                        <p>&#8203;<img src="images/backround/cherry-blossom.jpg"></p>

                    </div>

                    <!-- Cột 9 -->
                    <div class="col-md-9 col-sm-12 col-xs-12 custom-bg">
                        <div class="text-black">
                            <h2 class="text-center mb-4">GIỚI THIỆU CÔNG TY</h2>
                            <hr>
                            <div class="company-introduction">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th>Tên Công ty</th>
                                                <td>CÔNG TY TNHH VIETSEIKO</td>
                                            </tr>
                                            <tr>
                                                <th>Điện Thoại</th>
                                                <td> (028) 3636.9996</td>
                                            </tr>
                                            <tr>
                                                <th>Ngày thành lập</th>
                                                <td>Ngày 15 tháng 12 năm 2017</td>
                                            </tr>
                                            <tr>
                                                <th>Giám Đốc: ÔNG/Mr.</th>
                                                <td>PHẠM HỮU ĐẠO</td>
                                            </tr>
                                            <tr>
                                                <th>Phó Giám đốc: ÔNG/Mr.</th>
                                                <td>UENO TAKASHI</td>
                                            </tr>
                                            <tr>
                                                <th>Vốn điều lệ</th>
                                                <td>9.600.000.000 đồng</td>
                                            </tr>
                                            <tr>
                                                <th>Nhân Viên</th>
                                                <td>22 nhân viên</td>
                                            </tr>
                                            <tr>
                                                <th>Thành Phố</th>
                                                <td>Hồ Chí Minh City</td>
                                            </tr>
                                            <tr>
                                                <th>Tổ chức tài chính</th>
                                                <td>

                                                    <li>SACOMBANK <br> Số tài khoản: 060170201577<br>Ngân hàng
                                                        Thương Mại Cổ Phần Sài Gòn Thương Tín - Chi nhánh Quận 9
                                                    </li>
                                                    <br>
                                                    <li>EXIMBANK<br> Số tài khoản: 180280700999996 <br>Ngân hàng
                                                        Thương Mại Cổ Phần Xuất Nhập Khẩu Việt Nam – Chi nhánh
                                                        Thủ Đức</li>

                                                </td>
                                            </tr>


                                            <tr>
                                                <th>Nội dung Kinh doanh</th>
                                                <td>

                                                    <li>Giới thiệu nhân sự các khối văn phòng, việc làm bằng
                                                        tiếng Nhật tại Việt Nam.</li>
                                                    <li>Giới thiệu kỹ sư và phái cử Thực tập sinh, KN Đặc định
                                                        sang Nhật Bản làm việc</li>
                                                    <li>Xúc tiến đầu tư, thương mại các doanh nghiệp Nhật Bản
                                                    </li>

                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Số giấy phép</th>
                                                <td>
                                                    Giấy Phép Hoạt Động Dịch Vụ Việc Làm: 17986/ SLĐTBXH-GP
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Công ty thành viên</th>
                                                <td>
                                                    <ul>
                                                        <li>Ngoài Vietseiko ra: </li>
                                                    </ul>
                                                    CÔNG TY TNHH PHÁT TRIỂN THƯƠNG MẠI QUỐC TẾ RETKI
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Mã số doanh nghiệp</th>
                                                <td>
                                                    0314789339
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Địa chỉ kinh doanh</th>
                                                <td>108/17,Đường 79, Phường Tăng
                                                    Nhơn Phú B, TP.Thủ Đức, TP.HCM</td>
                                            </tr>
                                        </tbody>
                                    </table>
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