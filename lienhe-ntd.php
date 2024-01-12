<?php
require_once 'header.php';
?>
<style>
    <?php include 'scss-client/contact.scss'; ?>.btn-info-contact {
        color: #000;
        background-color: #ccc;
        border-color: #ccc;
    }
</style>
<title>Liên hệ</title>
<!-- CONTENT START -->
<div class="page-content">
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image: url(images/banner/1.jpg)">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <!-- <h2 class="wt-title">Liên hệ</h2> -->
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="trang-chu"><?= __('Trang chủ') ?></a></li>
                        <li><?= __('Liên hệ') ?></li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <br />
    <!-- CONTENT JOBS-->
    <div class="contact_page">
        <div class="container-css">
            <div class="col_contact">
                <div class="entry_content">
                    <div class="row">
                        <div class="col-lg-6 bordered-element">
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
                        <div class="col-lg-6 bordered-element">
                            <h3 class="ft_title"><?= __('LIÊN HỆ VỚI CHÚNG TÔI') ?></h3>

                            <form action="mail-lien-he-ntd.php" method="POST" enctype="multipart/form-data">
                                <div class="form-contact_f">
                                    <div class="row mt-5">
                                        <div class="col-lg-12">
                                            <div class="name">
                                                <input class="i-half" placeholder="Họ và tên" type="text" required name="name" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="email">
                                                <input name="email" class="i-half" type="email" placeholder="Nhập email" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="phone">
                                                <input name="phone" class="i-half" type="tel" placeholder="Số điện thoại" required pattern="(03|05|07|08|09)[0-9]{8}" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="luong">
                                                <input name="mucdich" class="i-half" type="text" placeholder="Mục đích liên hệ" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="vitri_cantuyen">
                                                <input name="vitri_cantuyen" class="i-half" type="text" placeholder="Vị trí cần tuyển" required />
                                            </div>

                                        </div>
                                        <div class="col-lg-12">
                                            <select class="i-half" required name="address" style="cursor: pointer;">
                                                <option disabled selected value>-- Địa điểm--</option>
                                                <?php
                                                foreach ($form_contact->list_tinh() as $index => $item) {
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

                                    <button class="btn btn-info-contact btn-block button-upload">
                                        <label class="upload-option">
                                            <input name="file" id="file" type="file" class="upload-input" accept=".pdf, .doc, .docx" onchange="handleFileUpload(event)">
                                            <span class="svicon-upload mr-2"></span>
                                        </label>
                                    </button>
                                    <div id="error-message" class="text-danger mt-2"></div>
                                    <p id="uploadSuccess" class="text-success mt-2"></p>



                                    <input class="btn-form-f mt-5" type="submit" name="submit" value="Gửi thông tin">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<script>
    function handleFileUpload(event) {
        const fileInput = event.target;
        const file = fileInput.files[0];
        const errorMessageBox = document.getElementById('error-message');
        const uploadSuccess = document.getElementById('uploadSuccess');

        if (file) {
            const allowedExtensions = ['.pdf', '.doc', '.docx'];
            const maxFileSize = 2 * 1024 * 1024;

            const fileExtension = file.name.toLowerCase().substring(file.name.lastIndexOf('.'));
            if (!allowedExtensions.includes(fileExtension) || file.size > maxFileSize) {
                errorMessageBox.textContent = 'File upload không hợp lệ. File phải có định dạng .pdf, .doc, .docx và dung lượng <= 2MB.';
                uploadSuccess.textContent = '';
                fileInput.value = '';
            } else {
                errorMessageBox.textContent = '';
                uploadSuccess.textContent = 'Tải lên thành công: ' + file.name;
            }
        }
    }
</script>

<!-- END CENTEN BODY -->

<?php
require "footer.php";
?>