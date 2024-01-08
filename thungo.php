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
                    <div class="col-md-3 col-sm-12  custom-bg">
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
                    <div class="col-md-9 col-sm-12 custom-bg">
                        <div class="text-black">
                            <h2 class="text-center mb-4">THƯ NGỎ</h2>
                            <hr>
                            <div class="company-introduction">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-12 thungo">
                                                <div style="margin-left: 20px;">
                                                    <img class="img-thungo" typeof="foaf:Image" src="images/thungo/Ceo.jpg" height="1220">
                                                    <p class="text-center"><i>CEO.GIÁM ĐỐC PHẠM HỮU ĐẠO</i>
                                                    </p>
                                                    <p align=justify style="font-size:14pt;line-height:2.1em;">
                                                        Được thành lập vào năm 2017, Công Ty TNHH Vietseiko với sứ mệnh
                                                        làm cầu nối tin cậy giữa người tìm việc và nhà tuyển dụng. Là
                                                        một trong những đơn vị hàng đầu tại Việt Nam trong lĩnh vực tư
                                                        vấn, giới thiệu nhân sự khối việc làm tiếng nhật, nhân sự cấp
                                                        cao Headhunter. Song song đó, Vietseiko tư vấn phái cử nguồn
                                                        nhân lực có trình độ kỹ thuật cao, Thực tập sinh kỹ năng, Kỹ sư
                                                        và Kỹ năng đặc định cho thị trường lao động tại Nhật Bản.
                                                        Vietseiko luôn quan niệm rằng con người là yếu tố quan trọng
                                                        nhất, là chìa khóa tạo nên mọi thành công của một doanh nghiệp.
                                                        Vietseiko luôn cam kết mọi hoạt động đều hướng đến giá trị uy
                                                        tín, sự tận tâm, tư vấn giải pháp tối ưu, định hướng nghề nghiệp
                                                        phù hợp nhất mang đến sự hài lòng và thành công nghề nghiệp cho
                                                        người tìm việc và nhà tuyển dụng.
                                                    </p>
                                                    <p align=justify style="font-size:14pt;line-height:2.1em;">
                                                        Trong những năm qua, Vietseiko đã thành công đưa hàng trăm lao
                                                        động Việt Nam sang làm việc tại thị trường Nhật Bản với môi
                                                        trường làm việc chuyên nghiệp cùng mức lương hấp dẫn, được tiếp
                                                        cận với nền kỹ thuật cao làm việc trực tiếp với người Nhật Bản,
                                                        được đào tạo học tập các kỹ năng làm việc chuyên nghiệp. Chúng
                                                        tôi luôn đồng hành cùng lao động sau khi phái cử sang Nhật Bản,
                                                        thực tập sinh theo diện có hợp đồng, sau khi về nước chúng tôi
                                                        tiếp tục giới thiệu việc làm vào các nhà máy công ty FDI Nhật
                                                        Bản có ở Việt Nam. Chúng tôi có đội ngũ nhân sự lành nghề trên
                                                        10 năm kinh nghiệm, có đội ngũ chuyên gia nhân sự là người Nhật
                                                        Bản, áp dụng công nghệ số và nguồn dữ liệu Data lao động dồi
                                                        dào, với hơn 100.000 CV chúng tôi tin tưởng rằng trong thời gian
                                                        sớm nhất sẽ kết nối giới thiệu thành công cho quý khách hàng.
                                                    </p>
                                                    <p align=justify style="font-size:14pt;line-height:2.1em;">
                                                        Sự yên mến và niềm tin, phó thác của Quý khách hàng là niềm tự
                                                        hào và thành công nhất của Vietseiko. Chính vì thế chúng tôi
                                                        luôn cam kết hoàn thiện, nâng cao chất lượng dịch vụ mỗi ngày để
                                                        đáp ứng tốt nhất về nhu cầu ngày càng cao của Quý khách hàng. Sự
                                                        thành công của Quý khách hàng, Quý đối tác là niềm hạnh phúc đối
                                                        với Vietseiko, mong rằng với sự nổ lực và quyết tâm không ngừng
                                                        nghỉ, chúng tôi hy vọng sẽ cùng hợp tác lâu dài, phát triển bền
                                                        vững với tất cả các đối tác trong nước và Nhật Bản.
                                                    </p>
                                                    <p align=justify style="font-size:14pt;line-height:2.1em;">
                                                        Vietseiko xin chân thành cảm ơn và mong muốn tiếp tục nhận được
                                                        sự quan tâm hợp tác, ủng hộ đồng hành của quý khách hàng, quý
                                                        đối tác, người lao động cũng như sự cống hiến gắn bó của toàn
                                                        thể cán bộ nhân viên công ty Vietseiko, “Khát vọng của bạn,
                                                        tương lai của chúng ta”.
                                                    </p>
                                                    <p align=justify style="font-size:14pt;line-height:2.1em;">
                                                        Một lần nữa kính chúc Quý đối tác, Quý khách hàng những lời chúc
                                                        sức khỏe, kinh doanh ngày càng phát triển. Mong cho sự hợp tác
                                                        giữa quý vị và Công ty TNHH Vietseiko sẽ lâu dài và ngày càng
                                                        bền vững.
                                                    </p>
                                                    <p align=justify style="font-size:14pt;line-height:2.1em;">
                                                        Trân trọng cảm ơn!
                                                    </p>
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