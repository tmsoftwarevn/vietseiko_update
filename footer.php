<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>congty</title>
    <!-- Link đến Bootstrap CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        footer {
            background-image: url('images/Footer/clound.jpg');
            background-color: #f8f9fa;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 20px 0;
            border-top: 1px solid #4b9331;
            padding-top: 20px;
            margin-bottom: 20px;
        }

        /* Định dạng cơ bản cho các phần tử */
        /* .col-lg-4,
        .col-md-4,
        .col-sm-12,
        .col-xs-12 {
            padding: 20px;
        } */

        /* Định dạng hình ảnh logo */
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        /* Định dạng chung cho các phần tử giấy phép */
        .giayphep-content-col-tile,
        .giayphep-content-col-title {
            color: orange;
            text-align: center;
            padding: 10px;
            font-size: 13px;
            text-transform: uppercase;
            text-decoration: none;
        }

        /* Định dạng cho container giấy phép */
        .giayphep-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;

        }

        /* Định dạng cho từng giấy phép */
        .giayphep-content-col {
            flex: 0 0 calc(50% - 0px);
            margin-bottom: 20px;
            box-sizing: border-box;
            padding: 20px;
            border: 1px solid #ffc107;
            border-radius: 2px;

        }

        /* Định dạng hình ảnh trong giấy phép */
        .giayphep-content-col-img img {
            width: 80px;
            /* height: 100px; */
        }

        .footer-section {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .footer-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            /* Khoảng cách giữa các item */
        }

        .hotline-icon {
            width: 65px;
            margin-right: 10px;
            height: auto;
        }

        .info {
            display: flex;
            flex-direction: column;
        }

        .title {
            font-size: 15px;
            /* Kích thước font cho tiêu đề */
            color: #c50000;
            /* Màu sắc cho tiêu đề */
        }

        .number {
            font-size: 20px;
            /* Kích thước font cho số hotline */
        }

        .social-media .social-link {
            margin-right: 10px;
            /* Khoảng cách giữa các biểu tượng mạng xã hội */
        }

        .mxh {
            margin-right: 15px;
        }

        /* Common styles for text inside both footer-item2 blocks */
        .footer-item2 p {
            margin: 0;
            /* Reset default margins */
        }

        .c50000 {
            color: #c50000;
            font-size: 18px;
        }

        .font20px {
            font-size: 20px;
        }


        .mx-2 {
            margin: 0 10px;
        }

        .mxh img {
            width: 40px;
            /* Adjust icon width */
        }

        .mxhhd img {
            width: 64px;
            height: 37px;
        }

        /* Remove default list styles from anchor tags */
        .mxh {
            list-style-type: none;
        }

        /* Optional: Add hover effects for social media icons */
        .mxh img:hover {
            opacity: 0.8;
        }

        .facebook_content {
            padding-top: 10px;
            margin-bottom: 10px;

        }

        .facebook_content_title {
            float: left;
            display: block;
            width: 10%;
        }

        .facebook_content_cont {
            float: left;
            display: block;
            width: 90%;
        }


        .facebook_content_nhipcau {
            width: 20%;
        }

        .facebook_content_vietsiko,
        .facebook_content_thuduc,
        .facebook_content_tiengnhat,
        .facebook_content_Hr,
        .facebook_content_oden,
        .facebook_content_nhipcau {
            float: right;
            display: block;
            background: #fff;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            margin-right: 1px;
            padding: 8px 10px;
            color: #163774;
            font-size: 15px;
        }

        .facebook_content_vietsiko_img,
        .facebook_content_thuduc_img {
            float: left;
            display: block;
            width: 50px;
            padding-right: 10px;
        }

        .facebook_content_vietsiko_cont a,
        .facebook_content_thuduc_cont a,
        .facebook_content_thuduc_cont a {
            color: #163774;
        }

        element.style {
            border: none;
            overflow: hidden;
        }


        .facebook_content_oden {
            width: 19%;
        }


        .facebook_content_tiengnhat,
        .facebook_content_Hr {
            width: 20.5%;
        }



        .facebook_content_thuduc {
            width: 17%;
        }

        a {
            color: #17171d;
            outline: 0px none;
            text-decoration: none;
        }

        .address_title {
            font-weight: bold;
            font-size: 23px;
        }

        /* Định nghĩa font chữ cho nội dung */
        .address_content,
        .address_content_label,
        .address_content_add,
        .address_content_tel,
        .address_content_Email {
            font-size: 15px;
            transition: all 0.3s ease;
        }

        /* Hiệu ứng khi re chuột vào các phần tử */
        .address_content_label:hover,
        .address_content_add:hover,
        .address_content_tel:hover,
        .address_content_Email:hover {
            color: #ff6600;
            transform: scale(1.05);
        }

        .add_cont {
            display: flex;
            flex-direction: column;
        }

        .address_content {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .address_content span {
            display: flex;
            align-items: center;
        }

        .copy_right {
            background: #000;
            color: #fff;
            padding: 10px 0;
        }

        .copy_right p {
            margin-bottom: 0;
            text-align: center;
            font-size: 14px;
        }

        .footer-item2.mt-3 {
            margin-top: 20px;
        }

        .facebook_content_thuduc_cont a {
            text-decoration: none;
            color: #000;
            /* Màu chữ mặc định */
            transition: color 0.3s ease;
        }

        .facebook_content_thuduc_cont a:hover {
            text-decoration: none;
            /* Vẫn giữ ẩn dấu gạch chân */
            /* Bạn có thể thay đổi màu chữ hoặc thêm hiệu ứng khác tại đây nếu muốn */
        }


        /* Khi rê chuột vào */
        .facebook_content_thuduc_cont a:hover {
            text-decoration: none;
            color: #4b24f9;

        }

        .no-decoration {
            text-decoration: none;
            /* Loại bỏ kiểu trang trí văn bản của liên kết */
        }

        .no-decoration:hover {
            text-decoration: none;
            /* Giữ cho liên kết không có dấu gạch chân khi rê chuột vào */
        }

        .img-fluid {
            max-width: 80%;
            height: auto;
        }
    </style>
</head>

<body>

    <footer>
        <div class="container">
            <!-- Dòng chứa các cột -->
            <div class="row">
                <!-- Cột 1 -->
                <div
                    class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-flex justify-content-center align-items-center company-logo-bg">
                    <img src="images/logo.png" alt="Company Logo" class="img-fluid">
                </div>
                <!-- Cột 2 -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="giayphep-content">
                        <!-- Giấy phép đưa NLĐ đi làm việc ở nước ngoài -->
                        <div class="giayphep-content-col">
                            <a href="giay-phep-hoat-dong" class="no-decoration">
                                <!-- Thay YOUR_LINK_1_HERE bằng đường dẫn bạn muốn đặt liên kết -->
                                <div class="giayphep-content-col-img">
                                    <img src="images/icon_giayphep@3x.png" width="80" height="80"
                                        alt="Giấy phép đưa NLĐ đi làm việc ở nước ngoài">
                                </div>
                                <div class="giayphep-content-col-tile">
                                    7907-ldtbxh-gp
                                </div>
                                <div class="giayphep-content-col-title">
                                    Giấy Phép Hoạt Động Dịch Vụ Việc Làm
                                </div>
                            </a>
                        </div>

                        <div class="giayphep-content-col">
                            <a href="giay-phep-kinh-doanh" class="no-decoration">
                                <!-- Thay YOUR_LINK_2_HERE bằng đường dẫn bạn muốn đặt liên kết -->
                                <div class="giayphep-content-col-img">
                                    <img src="images/icon_giayphep@2x.png" width="80" height="80"
                                        alt="Giấy phép Đào tạo">
                                </div>
                                <div class="giayphep-content-col-tile">
                                    7907-ldtbxh-gp
                                </div>
                                <div class="giayphep-content-col-title">
                                    Giấy Phép Kinh Doanh
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Cột 3 - Bạn có thể thêm nội dung hoặc các thành phần khác ở đây -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <!-- Nội dung của cột 3 -->
                    <div class="footer-section">
                        <!-- Footer Item 1: Hotline -->
                        <div class="footer-item hotline-item d-flex align-items-center">
                            <img alt="hotline" class="hotline-icon lazyload" src="images/Footer/phone.png">
                            <div class="info ml-2">
                                <p class="title c50000 f15 mb-0"><strong>Hotline</strong></p>
                                <p class="number font20px mb-0"><strong>090 397 2626</strong></p>
                            </div>
                        </div>

                        <!-- Footer Item 2: Social Media Links -->
                        <div class="footer-item social-media mt-3">
                            <a href="https://www.facebook.com/Cty.TNHH.Vietseiko" rel="nofollow" title="fb_vieseiko"
                                target="_blank" class="mxh">
                                <img alt="Facebook" src="images/Footer/fb.png">
                            </a>
                            <a href="https://zalo.me/2635801961745424279" rel="nofollow" title="zalo_vietseiko" target="_blank" class="mxh">
                                <img alt="mxh" src="images/footer/Zalo.png">
                            </a>
                            <a href="https://www.tiktok.com/@vietseiko.hr" rel="nofollow" title="tiktok_vietseiko"
                                target="_blank" class="mxh">
                                <img alt="mxh" src="images/Footer/tiktok.png">
                            </a>
                            <a href="https://www.youtube.com/@congtytnhhvietseiko7739" rel="nofollow"
                                title="youtube_vietseiko" target="_blank" class="mxh">
                                <img alt="mxh" src="images/Footer/youtube.png">
                            </a>
                            <a href="https://www.linkedin.com/company/vietseiko/" rel="nofollow"
                                title="youtube_vietseiko" target="_blank" class="mxhhd">
                                <img alt="mxhhd" src="images/Footer/linkedin.jpg">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Kết thúc dòng chứa các cột -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-xs hidden-sm">
                    <!-- start div facebook_content-->
                    <div class="facebook_content">
                        <div class="facebook_content_title">
                            <img src="images/icon_face@2x.png" width="60" height="60" alt="icon_face@2x.png" />
                        </div>
                        <div class="facebook_content_cont">
                            <!-- start div facebook_content_nhipcau-->
                            <div class="facebook_content_nhipcau">
                                <div class="facebook_content_thuduc_img hidden-md">
                                    <a href="https://www.facebook.com/vietlamuytinvietseiko" target="_blank">
                                        <img src="images/fanpage1.png" width="40" height="40"
                                            alt="icon_face_ncdh@2x.png" />
                                    </a>
                                </div>
                                <div class="facebook_content_thuduc_cont">
                                    <span>
                                        <a href="https://www.facebook.com/vietlamuytinvietseiko" target="_blank">
                                            Việc Làm Tiếng Nhật TP.HCM
                                        </a>
                                    </span>
                                    <!-- <span>
                                        <iframe
                                            src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/Vi%E1%BB%87c-L%C3%A0m-Ti%E1%BA%BFng-Nh%E1%BA%ADt-TPHCM-Vietseiko-105744628103928;width&layout=button_count&action=like&show_faces=false&share=false&height=21&appId=307551959318533"
                                            width="81" height="21" style="border:none;overflow:hidden" scrolling="no"
                                            frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                    </span> -->
                                </div>
                            </div>
                            <!-- end div facebook_content_oden-->

                            <!-- start div facebook_content_Hr-->
                            <div class="facebook_content_oden">
                                <div class="facebook_content_thuduc_img hidden-md">
                                    <a href="https://www.facebook.com/vieclamnhanhvietseiko" target="_blank">
                                        <img src="images/fanpage3.jpg" width="40" height="40"
                                            alt="icon_face_oden@2x.png" />
                                    </a>
                                </div>
                                <div class="facebook_content_thuduc_cont">
                                    <span>
                                        <a href="https://www.facebook.com/vieclamnhanhvietseiko" target="_blank">
                                            HR- Việc Làm Nhanh
                                        </a>
                                    </span>
                                    <!-- <span>
                                        <iframe
                                            src="https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/HR-Vietseiko-Vi%E1%BB%87c-L%C3%A0m-Nhanh-108428324645270;width&layout=button_count&action=like&show_faces=false&share=false&height=21&appId=307551959318533"
                                            width="81" height="21" style="border:none;overflow:hidden" scrolling="no"
                                            frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                    </span> -->
                                </div>
                            </div>
                            <!-- end div facebook_content_Hr-->

                            <!-- start div facebook_content_tiengnhat-->
                            <div class="facebook_content_Hr">
                                <div class="facebook_content_thuduc_img hidden-md">
                                    <a href="https://www.facebook.com/xuatkhaulaodongnhatbanVietseiko" target="_blank">
                                        <img src="images/fanpage4.jpg" width="40" height="40"
                                            alt="icon_face_vljp@2x.png" />


                                    </a>
                                </div>
                                <div class="facebook_content_thuduc_cont">
                                    <span>
                                        <a href="https://www.facebook.com/xuatkhaulaodongnhatbanVietseiko"
                                            target="_blank">
                                            Xuất Khẩu Lao Động Nhật Bản
                                        </a>
                                    </span>
                                    <!-- <span>
                                        <iframe
                                            src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FxuatkhaulaodongnhatbanVietseiko&width&layout=button_count&action=like&show_faces=false&share=false&height=21&appId=307551959318533"
                                            width="81" height="21" style="border:none;overflow:hidden" scrolling="no"
                                            frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                    </span> -->
                                </div>
                            </div>
                            <!-- end div facebook_content_Hr-->

                            <!-- start div facebook_content_tiengnhat-->
                            <div class="facebook_content_tiengnhat">
                                <div class="facebook_content_thuduc_img hidden-md">
                                    <a href="https://www.facebook.com/vietlamtiengnhatthuducvietseiko" target="_blank">
                                        <img src="images/fanpage2.png" width="40" height="40"
                                            alt="icon_face_tiengnhat@2x.png" />
                                    </a>
                                </div>
                                <div class="facebook_content_thuduc_cont">
                                    <span>
                                        <a href="https://www.facebook.com/vietlamtiengnhatthuducvietseiko"
                                            target="_blank">
                                            Việc làm tiếng Nhật TP. Thủ Đức
                                        </a>

                                    </span>
                                    <!-- <span>
                                        <iframe
                                            src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FxuatkhaulaodongnhatbanVietseiko&width&layout=button_count&action=like&show_faces=false&share=false&height=21&appId=307551959318533"
                                            width="81" height="21" style="border:none;overflow:hidden" scrolling="no"
                                            frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                    </span> -->
                                </div>
                            </div>
                            <!-- start div facebook_content_thuduc-->
                            <div class="facebook_content_thuduc">
                                <div class="facebook_content_thuduc_img hidden-md">
                                    <a href="https://www.facebook.com/Cty.TNHH.Vietseiko/" target="_blank">
                                        <img src="images/fanpage1 (1).png" width="40" height="40"
                                            alt="icon_face_thuduc@2x.png" />
                                    </a>
                                </div>
                                <div class="facebook_content_thuduc_cont">
                                    <span>
                                        <a href="https://www.facebook.com/Cty.TNHH.Vietseiko/" target="_blank">
                                            Vietseiko Co., Ltd
                                        </a>
                                    </span>
                                    <!-- <span>
                                        <iframe
                                            src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FCty.TNHH.Vietseiko&width&layout=button_count&action=like&show_faces=false&share=false&height=21&appId=307551959318533"
                                            width="81" height="21" style="border:none;overflow:hidden" scrolling="no"
                                            frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                    </span> -->
                                </div>
                            </div>
                            <!-- end div facebook_content_vietsiko-->
                        </div>
                    </div>
                    <!--end div footer-->
                </div>
            </div>
            <div class="row footer_add mt-5">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <!-- start div add_cont-->
                    <div class="add_cont">
                        <div class="address_title">
                            <ion-icon name="podium-outline"></ion-icon> CÔNG TY TNHH VIETSEIKO
                        </div>
                        <div class="address_content">
                            <span class="address_content_label">
                                <ion-icon name="ribbon-outline"></ion-icon>Văn phòng chính
                            </span>
                            <span class="address_content_add">
                                <ion-icon name="location-outline"></ion-icon> Số 108/17, Đường 79, Phường Tăng Nhơn Phú
                                B, TP.Thủ Đức, TP.HCM
                            </span>
                            <span class="address_content_tel">
                                <ion-icon name="logo-whatsapp"></ion-icon> Tel: (028) 3636.9996, 0363.212.627
                            </span>
                            <span class="address_content_Email">
                                <ion-icon name="mail-outline"></ion-icon> E-mail: hello.quykhachhang@vietseiko.com
                            </span>
                        </div>
                    </div>
                    <!-- end div add_cont-->
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <!-- start div add_cont-->
                    <div class="add_cont add_cont_t">
                        <div class="address_title">
                            <ion-icon name="podium-outline"></ion-icon> VĂN PHÒNG TẠI NHẬT BẢN
                        </div>
                        <div class="address_content">
                            <span class="address_content_label">
                                <ion-icon name="ribbon-outline"></ion-icon>Văn phòng tại TOKYO (東京)
                            </span>
                            <span class="address_content_add">
                                <ion-icon name="location-outline"></ion-icon>日本の駐住事務所: 〒170-0013東京都豊島区 <br>
                                東池袋1丁目34番5号いちご東池袋ビル6階
                            </span>
                            <span class="address_content_tel">
                                <ion-icon name="logo-whatsapp"></ion-icon><span> 担当者の電話番号:</span>080-5401-5365
                            </span>
                            <span class="address_content_Email">
                                <ion-icon name="mail-outline"></ion-icon>
                                <span>E-mail:</span>hello.quykhachhang@vietseiko.com
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <!-- start div add_cont-->
                    <div class="add_cont add_cont_t">
                        <div class="address_title">
                            <ion-icon name="podium-outline"></ion-icon> VĂN PHÒNG TẠI NHẬT BẢN
                        </div>
                        <div class="address_content">
                            <span class="address_content_label">
                                <ion-icon name="ribbon-outline"></ion-icon>Văn phòng tại HIROSHIMA (広島)
                            </span>
                            <span class="address_content_add">
                                <ion-icon name="location-outline"></ion-icon>日本の駐住事務所：広島県福山市神辺町 下御 領1332-5
                            </span>
                            <span class="address_content_tel">
                                <ion-icon name="logo-whatsapp"></ion-icon><span> 担当者の電話番号:</span>084-965-0831
                            </span>
                            <span class="address_content_Email">
                                <ion-icon name="mail-outline"></ion-icon>
                                <span>E-mail:</span>hello.quykhachhang@vietseiko.com
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copy_right">
                        <div class="copy">
                            <p>© Copyright © VIETSEIKO. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div><!-- Kết thúc container -->
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
    //tabbed
    document.addEventListener("DOMContentLoaded", function() {
        const trigger = document.querySelectorAll('.tabbed-trigger');
        const content = document.querySelectorAll('.tab');

        trigger.forEach((btn) => {
            btn.addEventListener('click', function(event) {
                event.preventDefault();

                let dataTarget = this.getAttribute('data-id');
                let selectedTab = document.getElementById(dataTarget);

                trigger.forEach((b) => b.parentNode.classList.remove('active'));
                content.forEach((s) => s.style.display = 'none');

                this.parentNode.classList.add('active');
                selectedTab.style.display = 'block';

                trigger.forEach((b) => b.classList.remove('clicked'));
                this.classList.add('clicked');
            });
        });
    });


    $(".user-menu").click(function() {
        $(this).toggleClass("show");
    });
</script>
<!-- JAVASCRIPT  FILES ========================================= -->
<script src="public/js/jquery-3.6.0.min.js">
</script>
<!--JQUERY.MIN JS-->
<script src="public/js/popper.min.js">
</script>
<!-- POPPER.MIN JS -->
<script src="public/js/bootstrap.min.js"></script>
<!-- BOOTSTRAP.MIN JS -->
<script src="public/js/magnific-popup.min.js"></script>
<!-- MAGNIFIC-POPUP JS -->
<script src="public/js/waypoints.min.js"></script>
<!-- WAYPOINTS JS -->
<script src="public/js/counterup.min.js"></script>
<!-- COUNTERUP JS -->
<script src="public/js/waypoints-sticky.min.js"></script>
<!-- STICKY HEADER -->
<script src="public/js/isotope.pkgd.min.js"></script>
<!-- MASONRY  -->
<script src="public/js/imagesloaded.pkgd.min.js"></script>
<!-- MASONRY  -->
<script src="public/js/owl.carousel.min.js"></script>
<!-- OWL  SLIDER  -->
<script src="public/js/theia-sticky-sidebar.js"></script>
<!-- STICKY SIDEBAR  -->
<script src="public/js/lc_lightbox.lite.js"></script>
<!-- IMAGE POPUP -->
<script src="public/js/bootstrap-select.min.js"></script>
<!-- Form js -->
<script src="public/js/dropzone.js"></script>
<!-- IMAGE UPLOAD  -->
<script src="public/js/jquery.scrollbar.js"></script>
<!-- scroller -->
<script src="public/js/bootstrap-datepicker.js"></script>
<!-- scroller -->
<script src="public/js/jquery.dataTables.min.js"></script>
<!-- Datatable -->
<script src="public/js/dataTables.bootstrap5.min.js"></script>
<!-- Datatable -->
<script src="public/js/chart.js"></script>
<!-- Chart -->
<script src="public/js/bootstrap-slider.min.js"></script>
<!-- Price range slider -->
<script src="public/js/swiper-bundle.min.js"></script>
<!-- Swiper JS -->
<script src="public/js/custom.js"></script>
<!-- CUSTOM FUCTIONS  -->
<script src="public/js/switcher.js"></script>
<!-- SHORTCODE FUCTIONS  -->
<script src="public/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!-- /about-us-js -->
<script src="public/js/about-us.js"></script>
<script src="public/js/Profile.js"></script>

<link rel="stylesheet" href=" https://www.vietseiko.com/public/admin/bower_components/jvectormap/jquery-jvectormap.css">

</body>
</html>