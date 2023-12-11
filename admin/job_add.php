<?php
require_once "header.php";

require_once "models/db.php";
require_once "models/hinhthuc.php";
require_once "models/nganhnghe.php";
require_once "models/gioi_tinh.php";
require_once "models/kinh_nghiem.php";

$job = new Job;
$hinhthuc = new Hinhthuc;
$nganhnghe = new Nganhnghe;
$trangthai  = new Trangthai;
$gioitinh = new Gioi_tinh;
$kinh_nghiem = new Kinh_nghiem;


$all_kinhnghiem = $kinh_nghiem->getAllKinhNghiem();
$all_nganhnghe = $nganhnghe::getAllNganhnghe();
$all_Gioitinh = $gioitinh->getAllGioitinh();
$all_trangthai = $trangthai->getAllTrangthai();
$all_hinhthuc = $hinhthuc::getAllHinhthuc();
/////////////

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

<body>

    <div class="content-body">

        <?php
        if (isset($_GET['typeAdd']) == TRUE && $_GET['typeAdd'] == "job") {
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
            <div class="body-view-job" style="padding: 100px;">

                <div class="title-job" style="text-align: center; font-weight: 600; 
                font-size: 20px; text-transform: capitalize;">
                    <?php echo 'Thêm công việc mới tại Việt Nam ' ?>
                </div>
                <!-- job-vietnam/form-update.php -->
                <form action="job-vietnam/form-add.php" method="POST" enctype="multipart/form-data">

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Tên Công Ty :</label>
                        <div class="controls">
                            <input required type="text" class="form-control" name="tencongty" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Logo Cty :</label>

                        <label for="fileUpload" style="cursor: pointer;">Update ảnh: Chỉ được tải lên file đuôi (jpeg, png hoặc jpg)</label>
                        <input required type="file" id="fileUpload" name="fileUpload"><br><br>

                    </div>

                    <div class="control-group" aria-label="Default select example">
                        <label class="control-label" style="font-weight: 600;">*Ngành nghề :</label>
                        <select required class="form-select" name="nganhnghe">
                            <option disabled selected value>-- ngành nghề --</option>
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
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Chức vụ:</label>
                        <div class="controls">
                            <input required name="chucvu" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Cấp Bậc:</label>
                        <div class="controls">
                            <input required name="capbac" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Số Lượng :</label>
                        <div class="controls">
                            <input required name="soluong" type="text" class="form-control" />
                        </div>
                    </div>
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

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Ngày hết hạn :</label>
                        <div class="controls">
                            <input required name="ngaycuoicung" type="date" class="form-control" />
                        </div>
                    </div>

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
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Mức Lương :</label>
                        <div class="controls">
                            <input required name="mucluong" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Địa Chỉ :</label>
                        <div class="controls">
                            <input required name="diachi" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Địa Chỉ Cụ Thể :</label>
                        <div class="controls">
                            <input required name="diachicuthe" type="text" class="form-control" />
                        </div>
                    </div>
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
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Mô tả công việc (thêm dấu '+' trước mỗi câu)</label>
                        <div class="controls">
                            <textarea required name="mota" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Yêu cầu (thêm dấu '+' trước mỗi câu)</label>
                            <div class="controls">
                                <textarea required name="yeucau" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Quyền Lợi (thêm dấu '+' trước mỗi câu)</label>
                            <div class="controls">
                                <textarea required name="quyenloi" rows="10" class="form-control"></textarea>
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
                        echo "<span style=\"color:red;\">" . "Có lỗi.Không thể thêm mới" . "</span>";
                    }
                }
                ?>
            </div>
            <div class="body-view-job" style="padding: 0px 100px 50px 100px;">

                <div class="title-job" style="text-align: center; font-weight: 600; 
                    font-size: 20px; text-transform: capitalize;">
                    <?php echo 'Thêm công việc mới XKLD Nhật Bản ' ?>
                </div>
                <!-- job-vietnam/form-update.php -->
                <form action="job-vietnam/form_nb-add.php" method="POST" enctype="multipart/form-data">

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Tên Công Ty :</label>
                        <div class="controls">
                            <input required type="text" class="form-control" name="tencongty" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Logo Cty :</label>

                        <label for="fileUpload" style="cursor: pointer;">Update ảnh: Chỉ được tải lên file đuôi (jpeg, png hoặc jpg)</label>
                        <input required type="file" id="fileUpload" name="fileUpload"><br><br>

                    </div>

                    <div class="control-group" aria-label="Default select example">
                        <label class="control-label" style="font-weight: 600;">*Ngành nghề :</label>
                        <select required class="form-select" name="nganhnghe">
                            <option disabled selected value>-- ngành nghề --</option>
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
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Chức vụ:</label>
                        <div class="controls">
                            <input required name="chucvu" type="text" class="form-control" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Cấp Bậc:</label>
                        <div class="controls">
                            <input required name="capbac" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Số Lượng :</label>
                        <div class="controls">
                            <input required name="soluong" type="text" class="form-control" />
                        </div>
                    </div>

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

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Ngày hết hạn :</label>
                        <div class="controls">
                            <input required name="ngaycuoicung" type="date" class="form-control" />
                        </div>
                    </div>

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
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Mức Lương :</label>
                        <div class="controls">
                            <input required name="mucluong" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Địa Chỉ :</label>
                        <div class="controls">
                            <input required name="diachi" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Địa Chỉ Cụ Thể :</label>
                        <div class="controls">
                            <input required name="diachicuthe" type="text" class="form-control" />
                        </div>
                    </div>
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
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Phỏng vấn:</label>
                        <select required name="phongvan" class="form-select">
                            <option disabled selected value>-- Hình thức phỏng vấn --</option>
                            <option value="Online">Online</option>
                            <option value="Offline">Offline</option>
                        </select>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Mô tả công việc (thêm dấu '+' trước mỗi câu)</label>
                        <div class="controls">
                            <textarea required name="mota" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Yêu cầu (thêm dấu '+' trước mỗi câu)</label>
                            <div class="controls">
                                <textarea required name="yeucau" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Quyền Lợi (thêm dấu '+' trước mỗi câu)</label>
                            <div class="controls">
                                <textarea required name="quyenloi" rows="10" class="form-control"></textarea>
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



<?php
require_once "footer.php";
?>