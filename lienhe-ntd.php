<?php
require_once "setting-all-file.php";
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$domain = $_SERVER['HTTP_HOST'];
$currentUrl = $protocol . '://' . $domain . $_SERVER['REQUEST_URI'];
$domainFromUrl = parse_url($currentUrl, PHP_URL_SCHEME) . '://' . parse_url($currentUrl, PHP_URL_HOST);

?>

<style>
    <?php include 'scss-client/contact.scss'; ?>.btn-info-contact {
        color: #000;
        background-color: #ccc;
        border-color: #ccc;
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
    <meta name="description" content="Liên hệ việc làm tại Vietseiko, xkld, kỹ sư, thông dịch Nhật Bản" />

    <title>Liên hệ</title>

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
    <?php
    require "header.php";
    ?>
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
    <?php
    require "footer.php";
    ?>
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


</body>

</html>