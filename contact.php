<?php
require_once 'header.php';
?>
<style>
    <?php include 'scss-client/contact.scss'; ?>
</style>
<!-- CONTENT START -->
<div class="page-content">
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image: url(images/banner/1.jpg)">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Liên hệ</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="trang-chu">Home</a></li>
                        <li>Liên hệ</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <br />
    <!-- CONTENT JOBS-->
    <div class="contact_page">
        <div class="container">
            <div class="col_contact">
                <div class="entry_content">
                    <div class="row">
                        <div class="col-md-6 bordered-element">
                            <h3 class="ft_title">
                                <ion-icon name="ribbon-outline"></ion-icon> VĂN PHÒNG CHÍNH
                            </h3>
                            <h3 class="ft_title_ct"><span>
                                    <ion-icon name="podium-outline"></ion-icon> CÔNG TY
                                    TNHH VIETSEIKO
                                </span></h3>

                            <div class="ft_infos">
                                <ul class="ft_list">
                                    <li>
                                        <ion-icon name="location-outline"></ion-icon> Địa chỉ: Số 108/17, Đường
                                        79,
                                        Phường Tăng Nhơn Phú B, TP.Thủ Đức, TP.HCM
                                    </li>
                                    <li>
                                        <ion-icon name="logo-whatsapp"></ion-icon> Điện thoại: <a href="tel: (028) 3636.9996">(028) 3636.9996</a>
                                    </li>
                                    <li>
                                        <ion-icon name="logo-whatsapp"></ion-icon> Hotline: <a href="tel: 0363.212.627">0363.212.627</a>
                                    </li>
                                    <li>
                                        <ion-icon name="logo-facebook"></ion-icon> Facebook: <a href="https://www.facebook.com/Cty.TNHH.Vietseiko/">https://www.facebook.com/Cty.TNHH.Vietseiko/</a>
                                    </li>
                                    <li>
                                        <ion-icon name="logo-youtube"></ion-icon> Youtube: <a href="https://www.youtube.com/@congtytnhhvietseiko7739">https://www.youtube.com/@congtytnhhvietseiko7739</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="box_map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3033.524927092567!2d106.77114615693199!3d10.835620625226769!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175270c34838b03%3A0xd7a2ad66e58afeac!2sC%C3%B4ng%20Ty%20TNHH%20VIETSEIKO!5e0!3m2!1svi!2s!4v1648175501035!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-md-6 bordered-element">
                            <div class="contact_form qcol form_info_customer">
                                <h3 class="ft_title">LIÊN HỆ VỚI CHÚNG TÔI</h3>

                                <form action="mail.php" method="POST">
                                    <div class="form-contact pt-3">
                                        <div class="row d-flex align-items-center mt-5">
                                            <div class="col-md-6">
                                                <div class="name">
                                                    <input class="i-half" placeholder="Họ và tên" type="text" required name="name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="email">
                                                    <input name="email" class="i-half" type="email" placeholder="Nhập email" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row d-flex justify-content-evenly align-items-center">

                                            <div class="col-md-6">
                                                <div class="phone">
                                                    <input name="phone" class="i-half" type="tel" placeholder="Số điện thoại" required pattern="(03|05|07|08|09)[0-9]{8}" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="luong">
                                                    <input name="luong" class="i-half" type="text" placeholder="Mức lương mong muốn" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="kinh-nghiem">
                                                    <select class="i-half" required name="kinh-nghiem" style="cursor: pointer;">

                                                        <option disabled selected value>-- Nhóm việc làm --</option>
                                                        <option value="1">Việc Làm Tại Việt Nam
                                                        </option>
                                                        <option value="2">Xuất Khẩu Lao Động Nhật Bản </option>

                                                        <option value="3">Kỹ Sư & Thông Dịch Viên Nhật Bản </option>
                                                        <option value="4">Việc làm tại VietSeiko </option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="job">
                                                    <select id="job-ct" class="i-half" required name="job" style="cursor: pointer;">
                                                        <option disabled selected value>-- Ngành bạn ứng tuyển --</option>
                                                        <?php
                                                        foreach ($form_contact->getAllNganh_ung_tuyen() as $key => $value) {
                                                        ?>
                                                            <option value="<?php echo $value['id_nganhnghe'] ?>">
                                                                <?php echo $value['name_nganhnghe'] ?>
                                                            </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                           
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="address">
                                                    <select class="i-half" required name="address" style="cursor: pointer;">
                                                        <option disabled selected value>-- Khu vực hiện tại--</option>
                                                        <?php
                                                        foreach ($form_contact->fetch_tinh_thanh() as $index => $item) {
                                                        ?>
                                                            <option value="<?php echo $item ?>">
                                                                <?php echo $item ?>
                                                            </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="address-hope">

                                                    <input name="address-h" class="i-half" type="text" placeholder="Nơi mong muốn làm việc" required />

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <input class="btn-form mt-5" type="submit" value="Gửi thông tin">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

<!-- END CENTEN BODY -->

<?php
require "footer.php";
?>