<?php
require_once "header.php";
require_once "config.php";
require_once "models/db.php";
require_once "models/hinhthuc.php";
require_once "models/nganhnghe.php";
require_once "models/gioi_tinh.php";
require_once "models/trangthai.php";
require_once "models/kinh_nghiem.php";
require_once "models/cty.php";
require_once "models/job.php";
require_once "models/protypes.php";

$job = new Job;
$hinhthuc = new Hinhthuc;
$nganhnghe = new Nganhnghe;
$trangthai  = new Trangthai;
$gioitinh = new Gioi_tinh;
$kinh_nghiem = new Kinh_nghiem;
$cty = new Congty;
$type = new Protypes;

$all_kinhnghiem = $kinh_nghiem->getAllKinhNghiem();
$all_nganhnghe = $nganhnghe::getAllNganhnghe();
$all_Gioitinh = $gioitinh->getAllGioitinh();
$all_trangthai = $trangthai->getAllTrangthai();
$all_hinhthuc = $hinhthuc::getAllHinhthuc();
$all_cty = $cty::getAllCty();
$all_type = $type::getAllType();

?>
<style>
    <?php include './scss/job/job.scss'; ?>
</style>
<!--**********************************
            Content body start
        ***********************************-->
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>view</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link href="./scss/job/job.scss" rel="stylesheet" /> -->
</head>
<style>
    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 220px !important;
    }

    .ck-content .image {
        /* block images */
        max-width: 80%;
        margin: 20px auto;
    }

    ul,
    ol,
    li {
        list-style: unset;
    }
</style>

<body>

    <div class="content-body">

        <?php
        //job vietnam
        if (isset($_GET['typeAdd']) == TRUE && $_GET['typeAdd'] == "job") {
            ?>
            <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                <?php

                if (isset($_GET['checkResult']) == TRUE) {

                    if ($_GET['checkResult'] > 0) {
                        echo "<span style=\"color:green;\">" . "Thêm thành công." . "</span>";
                    } else {
                        echo "<span style=\"color:red;\">" . "Có lỗi từ server" . "</span>";
                    }
                }
                ?>
            </div>
            <div class="body-view-job" style="padding: 0 100px 50px 100px">

                <div class="title-job" style="text-align: center; font-weight: 600; 
                            font-size: 20px; text-transform: capitalize;">
                    <?php echo 'Thêm công việc mới tại Việt Nam ' ?>
                </div>
               
                <form action="job-vietnam/form-add.php" method="POST" enctype="multipart/form-data">

                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Công ty</label>
                                <select required class="form-select" name="cty">
                                    <option disabled selected value>-- chọn công ty --</option>
                                    <?php
                                    foreach ($all_cty as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['id_cty'] ?>">
                                            <?php echo $value['name'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group" aria-label="Default select example">
                                <label class="control-label" style="font-weight: 600;">*Ngành nghề :</label>
                                <select required class="form-select" name="nganhnghe">
                                    <option disabled selected value>--Việc thuộc ngành nghề nào--</option>
                                    <?php
                                    foreach ($all_nganhnghe as $key => $value) {
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
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Kinh Nghiệm :</label>
                                <select required class="form-select" name="kinhnghiem">
                                    <option disabled selected value>-- Kinh nghiệm làm việc --</option>
                                    <?php
                                    foreach ($all_kinhnghiem as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['id_kn'] ?>">
                                            <?php echo $value['name_kn'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Giới Tính :</label>
                                <select required name="gioitinh" class="form-select">
                                    <option disabled selected value>-- Giới tính --</option>
                                    <?php
                                    foreach ($all_Gioitinh as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['id_gt'] ?>">
                                            <?php echo $value['name_gt'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Hình thức :</label>
                                <select required name="hinhthuc" class="form-select">
                                    <option disabled selected value>-- Hình thức làm việc --</option>
                                    <?php
                                    foreach ($all_hinhthuc as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['id_hinhthuc'] ?>">
                                            <?php echo $value['name_hinhthuc'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Ngày hết hạn :</label>
                                <div class="controls">
                                    <input required name="ngaycuoicung" type="date" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Mã công việc:</label>
                                <div class="controls">
                                    <input required name="job-code" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Tuổi:</label>
                                <div class="controls">
                                    <input required name="age" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Ngôn ngữ</label>
                                <div class="controls">
                                    <input required name="ngonngu" type="text" class="form-control" />
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Chức vụ:</label>
                                <div class="controls">
                                    <input required name="chucvu" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Cấp Bậc:</label>
                                <div class="controls">
                                    <input required name="capbac" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Số Lượng (số)</label>
                                <div class="controls">
                                    <input required name="soluong" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Mức Lương (vd: 9-12 triệu)</label>
                                <div class="controls">
                                    <input required name="mucluong" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Địa Chỉ </label>
                                <div class="controls">
                                    <input required name="diachi" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Địa Chỉ Cụ Thể :</label>
                                <div class="controls">
                                    <input required name="diachicuthe" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Mô tả công việc </label>
                        <div class="controls">
                            <textarea name="mota" id="mota" class="form-control"></textarea>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Yêu cầu </label>
                            <div class="controls">
                                <textarea name="yeucau" id="yeucau" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Quyền Lợi </label>
                            <div class="controls">
                                <textarea name="quyenloi" id="quyenloi" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Thông tin khác </label>
                            <div class="controls">
                                <textarea name="other" id='other' class="form-control"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center">

                        <button style="font-size: 18px;" class="btn btn-primary" type="submit" name="submit">Thêm mới</button>
                    </div>
                </form>


            </div>
        <?php
        }
        // bảng job nhật bản
        if (isset($_GET['typeAdd']) == TRUE && $_GET['typeAdd'] == "job-nb") {
            ?>
            <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                <?php

                if (isset($_GET['checkResult']) == TRUE) {

                    if ($_GET['checkResult'] > 0) {
                        echo "<span style=\"color:green;\">" . "Thêm thành công." . "</span>";
                    } else {
                        echo "<span style=\"color:red;\">" . "Có lỗi từ server" . "</span>";
                    }
                }
                ?>
            </div>
            <div class="body-view-job" style="padding: 0 100px 50px 100px">

                <div class="title-job" style="text-align: center; font-weight: 600; 
                            font-size: 20px; text-transform: capitalize;">
                    <?php echo 'Thêm công việc mới XKLD tại Nhật Bản ' ?>
                </div>
                <!-- job-vietnam/form-update.php -->
                <form action="job-vietnam/form_nb-add.php" method="POST" enctype="multipart/form-data">

                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Công ty</label>
                                <select required class="form-select" name="cty">
                                    <option disabled selected value>-- chọn công ty --</option>
                                    <?php
                                    foreach ($all_cty as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['id_cty'] ?>">
                                            <?php echo $value['name'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group" aria-label="Default select example">
                                <label class="control-label" style="font-weight: 600;">*Ngành nghề :</label>
                                <select required class="form-select" name="nganhnghe">
                                    <option disabled selected value>--Việc thuộc ngành nghề nào--</option>
                                    <?php
                                    foreach ($all_nganhnghe as $key => $value) {
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
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Kinh Nghiệm :</label>
                                <select required class="form-select" name="kinhnghiem">
                                    <option disabled selected value>-- Kinh nghiệm làm việc --</option>
                                    <?php
                                    foreach ($all_kinhnghiem as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['id_kn'] ?>">
                                            <?php echo $value['name_kn'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Giới Tính :</label>
                                <select required name="gioitinh" class="form-select">
                                    <option disabled selected value>-- Giới tính --</option>
                                    <?php
                                    foreach ($all_Gioitinh as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['id_gt'] ?>">
                                            <?php echo $value['name_gt'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Hình thức :</label>
                                <select required name="hinhthuc" class="form-select">
                                    <option disabled selected value>-- Hình thức làm việc --</option>
                                    <?php
                                    foreach ($all_hinhthuc as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['id_hinhthuc'] ?>">
                                            <?php echo $value['name_hinhthuc'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Ngày hết hạn :</label>
                                <div class="controls">
                                    <input required name="ngaycuoicung" type="date" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Mã công việc:</label>
                                <div class="controls">
                                    <input required name="job-code" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Tuổi:</label>
                                <div class="controls">
                                    <input required name="age" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Ngôn ngữ</label>
                                <div class="controls">
                                    <input required name="ngonngu" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Chức vụ:</label>
                                <div class="controls">
                                    <input required name="chucvu" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Cấp Bậc:</label>
                                <div class="controls">
                                    <input required name="capbac" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Số Lượng (số)</label>
                                <div class="controls">
                                    <input required name="soluong" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Mức Lương (vd: 9-12 triệu)</label>
                                <div class="controls">
                                    <input required name="mucluong" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Địa Chỉ</label>
                                <div class="controls">
                                    <input required name="diachi" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Địa Chỉ Cụ Thể :</label>
                                <div class="controls">
                                    <input required name="diachicuthe" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Mô tả công việc </label>
                        <div class="controls">
                            <textarea name="mota" id="mota" class="form-control"></textarea>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Yêu cầu </label>
                            <div class="controls">
                                <textarea name="yeucau" id="yeucau" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Quyền Lợi </label>
                            <div class="controls">
                                <textarea name="quyenloi" id="quyenloi" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Thông tin khác </label>
                            <div class="controls">
                                <textarea name="other" id='other' class="form-control"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center">

                        <button style="font-size: 18px;" class="btn btn-primary" type="submit" name="submit">Thêm mới</button>
                    </div>
                </form>


            </div>
        <?php
        }

        /// bảng công ty
        if (isset($_GET['typeAdd']) == TRUE && $_GET['typeAdd'] == "cty") {
        ?>
            <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                <?php

                if (isset($_GET['checkResult']) == TRUE) {

                    if ($_GET['checkResult'] > 0) {
                        echo "<span style=\"color:green;\">" . "Thêm thành công." . "</span>";
                    } else {
                        echo "<span style=\"color:red;\">" . "Có lỗi.Không thể thêm mới" . "</span>";
                    }
                }
                ?>
            </div>
            <div class="body-view-job" style="padding: 0px 100px 50px 100px;">

                <div class="title-job" style="text-align: center; font-weight: 600; 
                        font-size: 20px; text-transform: capitalize;">
                    <?php echo 'Thêm công ty mới ' ?>
                </div>
                <!-- cty add -->
                <form action="job-vietnam/form-cty-add.php" method="POST" enctype="multipart/form-data">
                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Tên Công Ty :</label>
                                <div class="controls">
                                    <input type="text" name="tencongty" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Quy mô:</label>
                                <div class="controls">
                                    <input type="text" name="quymo" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Type công ty :</label>

                                <select required class="form-select" name="type">
                                    <option disabled selected value>-- type công ty --</option>
                                    <?php
                                    foreach ($all_type as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['type_id'] ?>">
                                            <?php echo $value['type_name'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Địa chỉ chi tiết:</label>
                        <div class="controls">
                            <input type="text" class="form-control" name="diachi" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Logo Cty :</label>
                        <div class="controls">
                            <textarea class="form-control" id="logo" name='logo'></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Thông tin:</label>
                        <div class="controls">
                            <textarea class="form-control" id="thongtin" name='thongtin'></textarea>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button style="font-size: 18px;" class="btn btn-primary" type="submit" name="submit">Thêm mới</button>
                    </div>
                </form>

            </div>
        <?php
        }

        // bảng job kỹ sư nhật bản
        if (isset($_GET['typeAdd']) == TRUE && $_GET['typeAdd'] == "job-ksnb") {
        ?>
            <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                <?php

                if (isset($_GET['checkResult']) == TRUE) {

                    if ($_GET['checkResult'] > 0) {
                        echo "<span style=\"color:green;\">" . "Thêm thành công." . "</span>";
                    } else {
                        echo "<span style=\"color:red;\">" . "Có lỗi từ server" . "</span>";
                    }
                }
                ?>
            </div>
            <div class="body-view-job" style="padding: 0 100px 50px 100px">

                <div class="title-job" style="text-align: center; font-weight: 600; 
                            font-size: 20px; text-transform: capitalize;">
                    <?php echo 'Thêm công việc mới kỹ sư & thông dịch tại Nhật Bản ' ?>
                </div>
                <!-- job-vietnam/form-update.php -->
                <form action="job-vietnam/form-ksnb-add.php" method="POST" enctype="multipart/form-data">

                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Công ty</label>
                                <select required class="form-select" name="cty">
                                    <option disabled selected value>-- chọn công ty --</option>
                                    <?php
                                    foreach ($all_cty as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['id_cty'] ?>">
                                            <?php echo $value['name'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group" aria-label="Default select example">
                                <label class="control-label" style="font-weight: 600;">*Ngành nghề :</label>
                                <select required class="form-select" name="nganhnghe">
                                    <option disabled selected value>--Việc thuộc ngành nghề nào--</option>
                                    <?php
                                    foreach ($all_nganhnghe as $key => $value) {
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
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Kinh Nghiệm :</label>
                                <select required class="form-select" name="kinhnghiem">
                                    <option disabled selected value>-- Kinh nghiệm làm việc --</option>
                                    <?php
                                    foreach ($all_kinhnghiem as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['id_kn'] ?>">
                                            <?php echo $value['name_kn'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Giới Tính :</label>
                                <select required name="gioitinh" class="form-select">
                                    <option disabled selected value>-- Giới tính --</option>
                                    <?php
                                    foreach ($all_Gioitinh as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['id_gt'] ?>">
                                            <?php echo $value['name_gt'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Hình thức :</label>
                                <select required name="hinhthuc" class="form-select">
                                    <option disabled selected value>-- Hình thức làm việc --</option>
                                    <?php
                                    foreach ($all_hinhthuc as $key => $value) {
                                    ?>
                                        <option value="<?php echo $value['id_hinhthuc'] ?>">
                                            <?php echo $value['name_hinhthuc'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Ngày hết hạn :</label>
                                <div class="controls">
                                    <input required name="ngaycuoicung" type="date" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Mã công việc:</label>
                                <div class="controls">
                                    <input required name="job-code" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Tuổi:</label>
                                <div class="controls">
                                    <input required name="age" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Ngôn ngữ</label>
                                <div class="controls">
                                    <input required name="ngonngu" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Chức vụ:</label>
                                <div class="controls">
                                    <input required name="chucvu" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Cấp Bậc:</label>
                                <div class="controls">
                                    <input required name="capbac" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Số Lượng (số)</label>
                                <div class="controls">
                                    <input required name="soluong" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Mức Lương (vd: 9-12 triệu)</label>
                                <div class="controls">
                                    <input required name="mucluong" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Địa Chỉ </label>
                                <div class="controls">
                                    <input required name="diachi" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Địa Chỉ Cụ Thể :</label>
                                <div class="controls">
                                    <input required name="diachicuthe" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Mô tả công việc </label>
                        <div class="controls">
                            <textarea name="mota" id="mota" class="form-control"></textarea>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Yêu cầu </label>
                            <div class="controls">
                                <textarea name="yeucau" id="yeucau" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Quyền Lợi </label>
                            <div class="controls">
                                <textarea name="quyenloi" id="quyenloi" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Thông tin khác </label>
                            <div class="controls">
                                <textarea name="other" id='other' class="form-control"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center">

                        <button style="font-size: 18px;" class="btn btn-primary" type="submit" name="submit">Thêm mới</button>
                    </div>
                </form>


            </div>
        <?php
        }
        // vietseiko
        if (isset($_GET['typeAdd']) == TRUE && $_GET['typeAdd'] == "job-vietseiko") {
            ?>
                <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                    <?php
    
                    if (isset($_GET['checkResult']) == TRUE) {
    
                        if ($_GET['checkResult'] > 0) {
                            echo "<span style=\"color:green;\">" . "Thêm thành công." . "</span>";
                        } else {
                            echo "<span style=\"color:red;\">" . "Có lỗi từ server" . "</span>";
                        }
                    }
                    ?>
                </div>
                <div class="body-view-job" style="padding: 0 100px 50px 100px">
    
                    <div class="title-job" style="text-align: center; font-weight: 600; 
                                font-size: 20px; text-transform: capitalize;">
                        <?php echo 'Thêm công việc mới Vietseiko ' ?>
                    </div>
                   
                    <form action="job-vietnam/form_vietseiko_add.php" method="POST" enctype="multipart/form-data">
    
                        <div class="row mt-5">
                            <div class="col-4">
                                <div class="control-group">
                                    <label class="control-label" style="font-weight: 600;">*Công ty</label>
                                    <select required class="form-select" name="cty">
                                        <option disabled selected value>-- chọn công ty --</option>
                                        <?php
                                        foreach ($all_cty as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value['id_cty'] ?>">
                                                <?php echo $value['name'] ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="control-group" aria-label="Default select example">
                                    <label class="control-label" style="font-weight: 600;">*Ngành nghề :</label>
                                    <select required class="form-select" name="nganhnghe">
                                        <option disabled selected value>--Việc thuộc ngành nghề nào--</option>
                                        <?php
                                        foreach ($all_nganhnghe as $key => $value) {
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
                            <div class="col-4">
                                <div class="control-group">
                                    <label class="control-label" style="font-weight: 600;">*Kinh Nghiệm :</label>
                                    <select required class="form-select" name="kinhnghiem">
                                        <option disabled selected value>-- Kinh nghiệm làm việc --</option>
                                        <?php
                                        foreach ($all_kinhnghiem as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value['id_kn'] ?>">
                                                <?php echo $value['name_kn'] ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
    
                        <div class="row mt-5">
                            <div class="col-4">
                                <div class="control-group">
                                    <label class="control-label" style="font-weight: 600;">*Giới Tính :</label>
                                    <select required name="gioitinh" class="form-select">
                                        <option disabled selected value>-- Giới tính --</option>
                                        <?php
                                        foreach ($all_Gioitinh as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value['id_gt'] ?>">
                                                <?php echo $value['name_gt'] ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="control-group">
                                    <label class="control-label" style="font-weight: 600;">*Hình thức :</label>
                                    <select required name="hinhthuc" class="form-select">
                                        <option disabled selected value>-- Hình thức làm việc --</option>
                                        <?php
                                        foreach ($all_hinhthuc as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value['id_hinhthuc'] ?>">
                                                <?php echo $value['name_hinhthuc'] ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
    
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="control-group">
                                    <label class="control-label" style="font-weight: 600;">*Ngày hết hạn :</label>
                                    <div class="controls">
                                        <input required name="ngaycuoicung" type="date" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-6">
                                <div class="control-group">
                                    <label class="control-label" style="font-weight: 600;">*Mã công việc:</label>
                                    <div class="controls">
                                        <input required name="job-code" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="control-group">
                                    <label class="control-label" style="font-weight: 600;">*Tuổi:</label>
                                    <div class="controls">
                                        <input required name="age" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-4">
                                <div class="control-group">
                                    <label class="control-label" style="font-weight: 600;">*Ngôn ngữ</label>
                                    <div class="controls">
                                        <input required name="ngonngu" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div class="row mt-5">
                            <div class="col-4">
                                <div class="control-group">
                                    <label class="control-label" style="font-weight: 600;">*Chức vụ:</label>
                                    <div class="controls">
                                        <input required name="chucvu" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="control-group">
                                    <label class="control-label" style="font-weight: 600;">*Cấp Bậc:</label>
                                    <div class="controls">
                                        <input required name="capbac" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="control-group">
                                    <label class="control-label" style="font-weight: 600;">*Số Lượng (số)</label>
                                    <div class="controls">
                                        <input required name="soluong" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row mt-5">
                            <div class="col-4">
                                <div class="control-group">
                                    <label class="control-label" style="font-weight: 600;">*Mức Lương (vd: 9-12 triệu)</label>
                                    <div class="controls">
                                        <input required name="mucluong" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="control-group">
                                    <label class="control-label" style="font-weight: 600;">*Địa Chỉ </label>
                                    <div class="controls">
                                        <input required name="diachi" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="control-group">
                                    <label class="control-label" style="font-weight: 600;">*Địa Chỉ Cụ Thể :</label>
                                    <div class="controls">
                                        <input required name="diachicuthe" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Mô tả công việc </label>
                            <div class="controls">
                                <textarea name="mota" id="mota" class="form-control"></textarea>
                            </div>
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Yêu cầu </label>
                                <div class="controls">
                                    <textarea name="yeucau" id="yeucau" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Quyền Lợi </label>
                                <div class="controls">
                                    <textarea name="quyenloi" id="quyenloi" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Thông tin khác </label>
                                <div class="controls">
                                    <textarea name="other" id='other' class="form-control"></textarea>
                                </div>
                            </div>
    
                        </div>
                        <div class="d-flex justify-content-center">
    
                            <button style="font-size: 18px;" class="btn btn-primary" type="submit" name="submit">Thêm mới</button>
                        </div>
                    </form>
    
    
                </div>
            <?php
            }
        ?>
    </div>
</body>

</html>


<!--**********************************
            Content body end
***********************************-->

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#mota'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#quyenloi'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#yeucau'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#other'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#logo'), {
            ckfinder: {
                uploadUrl: 'job-vietnam/upload-logo.php'
            },
        })
        .then(editor => {
            console.Log(editor);
        })
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#thongtin'))
        .catch(error => {
            console.error(error);
        });
</script>

<?php
require_once "footer.php";
?>