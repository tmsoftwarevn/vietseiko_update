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
                                    TRÁCH
                                    NHIỆM HỮU HẠN VIETSEIKO
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
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md-6">
                                                <div class="name">
                                                    <input class="i-half" placeholder="Họ và tên" type="text" required name="name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="gender d-flex justify-content-evenly align-items-center">
                                                    <div style="cursor: pointer;">
                                                        <input type="radio" id="nam" name="gender" value="Nam" required>
                                                        <label for="nam" style="margin: 0;">Nam</label><br>
                                                    </div>
                                                    <div style="cursor: pointer;">
                                                        <input type="radio" id="nu" name="gender" value="Nữ" required>
                                                        <label for="nu" style="margin: 0;">Nữ</label><br>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row d-flex justify-content-evenly align-items-center">
                                            <div class="col-md-6">
                                                <div class="birth-day" style="cursor: pointer;">
                                                    <input name="birthday" required placeholder="Ngày sinh" class="i-half" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="birthday" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="phone">
                                                    <input name="phone" class="i-half" type="tel" placeholder="Số điện thoại" required pattern="(03|05|07|08|09)[0-9]{8}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="job">
                                                    <select id="job-ct" class="i-half" required name="job" style="cursor: pointer;">
                                                        <option disabled selected value>-- Ngành bạn ứng tuyển --</option>
                                                        <?php
                                                        foreach ($nganh_ung_tuyen->getAllNganh_ung_tuyen() as $key => $value) {
                                                        ?>
                                                            <option value="<?php echo $value['ten_nganh'] ?>">
                                                                <?php echo $value['ten_nganh'] ?>
                                                            </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="kinh-nghiem">
                                                    <select class="i-half" required name="kinh-nghiem" style="cursor: pointer;">

                                                        <option disabled selected value>-- Kinh nghiệm làm việc --</option>
                                                        <option value="dưới 1 năm">dưới 1 năm
                                                        </option>
                                                        <option value="1 năm">1 năm </option>
                                                        <option value="2 năm">2 năm </option>
                                                        <option value="3 năm">3 năm </option>
                                                        <option value="4 năm">4 năm </option>
                                                        <option value=">4 năm">>4 năm </option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="hoc-van d-flex justify-content-between align-items-center">
                                            <div style="font-weight: 600;">Học vấn:</div>
                                            <div>
                                                <input type="radio" id="THPT" name="hoc-van" value="THPT" required>
                                                  <label for="THPT" style="margin: 0;">THPT</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="Trung cấp" name="hoc-van" value="Trung cấp" required>
                                                  <label for="Trung cấp" style="margin: 0;">Trung cấp</label>
                                            </div>

                                            <div>
                                                <input type="radio" id="Cao đẳng" name="hoc-van" value="Cao đẳng" required>
                                                  <label for="Cao đẳng" style="margin: 0;">Cao đẳng</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="Đại học" name="hoc-van" value="Đại học" required>
                                                  <label for="Đại học" style="margin: 0;">Đại học</label>
                                            </div>


                                        </div>

                                        <div class="email">
                                            <input name="email" class="i-half" type="email" placeholder="Nhập email" required />
                                        </div>
                                        <div class="address">
                                            <select class="i-half" required name="address" style="cursor: pointer;">
                                                <option disabled selected value>-- Khu vực --</option>
                                                <?php
                                                foreach ($nganh_ung_tuyen->fetch_tinh_thanh() as $index => $item) {
                                                ?>
                                                    <option value="<?php echo $item ?>">
                                                        <?php echo $item ?>
                                                    </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="luong">
                                            <input name="luong" class="i-half" type="text" placeholder="Mức lương mong muốn" required />
                                        </div>
                                        <div class="des-kn">
                                            <textarea name="des-kn" required class="i-half ta" placeholder="Mô tả kinh nghiệm làm việc của bạn" rows="4"></textarea>
                                        </div>
                                        <div class="muc-tieu">
                                            <textarea name="muc-tieu" required class="i-half ta" placeholder="Mục tiêu nghề nghiệp" rows="4"></textarea>
                                        </div>
                                        <div class="ghi-chu">
                                            <textarea name="ghi-chu" class="i-half ta" placeholder="Ghi chú" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <input class="btn-form" type="submit" value="Gửi thông tin">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["your-name"])) {
                    echo "<span style='color:red;'>Error: Họ tên bắt buộc phải nhập.</span>";
                } else {
                    $name = $_POST["your-name"];
                    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                        echo "<span style='color:red;'>Họ tên chỉ chấp nhận chữ và khoảng trắng.</span>";
                    } else {
                        echo $name;
                    }
                }
                if (empty($_POST["your-email"])) {
                    echo "<span style='color:red;'>Email bắt không được để trống.</span>";
                } else {
                    $email = $_POST["your-email"];
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo "<span style='color:red;'>Email bạn nhập không đúng định dạng.</span>";
                    } else {
                        echo $email;
                    }
                }
                if (empty($_POST["your-tel"])) {
                    echo "<span style='color:red;'>Số điện thoại bắt buộc phải nhập</span>";
                } else {
                    $tel = $_POST["your-tel"];

                    $telPattern = "/^\d{10,12}$/";
                    if (!preg_match($telPattern, $tel)) {
                        echo "<span style='color:red;'>Số điện thoại không đúng định dạng</span>";
                    } else {
                        echo $tel;
                    }
                }
                if (empty($_POST["your-company"])) {
                    echo "<span style='color:red;'>Nơi đăng ký không được để trống</span>";
                }

                if (empty($_POST["your-message"])) {
                    echo "<span style='color:red;'>Nội dung không được để trống</span>";
                }
            }
            ?> -->

</div>

<!-- END CENTEN BODY -->

<?php
require "footer.php";
?>