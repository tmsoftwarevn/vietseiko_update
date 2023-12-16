<?php
require_once "header.php";

require_once "models/db.php";
require_once "models/hinhthuc.php";
require_once "models/nganhnghe.php";
require_once "models/gioi_tinh.php";
require_once "models/kinh_nghiem.php";
require_once "models/job_vietseiko.php";
require_once "models/cty.php";

$job = new Vietseiko;
$hinhthuc = new Hinhthuc;
$nganhnghe = new Nganhnghe;
$gioitinh = new Gioi_tinh;
$kinh_nghiem = new Kinh_nghiem;
$cty = new Congty;

$id = 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Khong nhan duoc ID";
}


$job_modal =  $job->getJob_vietseiko_ByID($id);

$name_nganhnghe = $nganhnghe::getNganhngheName($job_modal['id_nganhnghe']);
$name_hinhthuc = $hinhthuc::getHinhthucName($job_modal['id_hinhthuc']);

$name_gioitinh = $gioitinh->getGioitinh_byId($job_modal['id_gioitinh']);
$name_kinhnghiem = $kinh_nghiem->getKinhNghiem_byId($job_modal['id_kinhnghiem']);

$all_kinhnghiem = $kinh_nghiem->getAllKinhNghiem();
$all_nganhnghe = $nganhnghe::getAllNganhnghe();
$allGioitinh = $gioitinh->getAllGioitinh();

$all_hinhthuc = $hinhthuc::getAllHinhthuc();
$all_cty = $cty::getAllCty();
/////////////


?>
<style>
    <?php include './scss/job/job.scss'; ?>
</style>
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
</head>

<body>

    <div class="content-body">
        <?php
        if (isset($_GET['typeUpdate']) == TRUE && $_GET['typeUpdate'] == "vietseiko") {
        ?>
 <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                <?php

                if (isset($_GET['checkResult']) == TRUE) {

                    if ($_GET['checkResult'] > 0) {
                        echo "<span style=\"color:green;\">" . "Cập nhật thành công." . "</span>";
                    } else {
                        echo "<span style=\"color:red;\">" . "Không thể cập nhật" . "</span>";
                    }
                }
                ?>
            </div>
            <div class="body-view-job" style="padding: 0 100px 50px 100px">

                <div class="title-job" style="text-align: center; font-weight: 600; 
                        font-size: 20px; text-transform: capitalize;">
                    <?php echo 'Cập nhật công việc Vietseiko : ' . $job_modal['job_code'] ?>
                </div>
                <form action="job-vietnam/form_vietseiko_update.php" method="POST" enctype="multipart/form-data">

                    <input name='id_job' value="<?php echo $job_modal['id_job'] ?>" style="display: none;" />
                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Công ty</label>
                                <select required name="id_cty" class="form-select">
                                    <?php
                                    foreach ($all_cty as $key => $value) {
                                        if ($value['id_cty'] == $job_modal['id_cty']) {
                                            echo ('<option selected="selected" value=' . $value['id_cty'] . '>' . $value['name'] . '</option>');
                                        } else {
                                            echo ('<option value=' . $value['id_cty'] . '>' . $value['name'] . '</option>');
                                        }
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group" aria-label="Default select example">
                                <label class="control-label" style="font-weight: 600;">*Ngành nghề :</label>
                                <select required class="form-select" name="nganhnghe">

                                    <?php
                                    foreach ($all_nganhnghe as $key => $value) {
                                        if ($value['id_nganhnghe'] == $job_modal['id_nganhnghe']) {
                                            echo ('<option selected="selected" value=' . $value['id_nganhnghe'] . '>' . $value['name_nganhnghe'] . '</option>');
                                        } else {
                                            echo ('<option value=' . $value['id_nganhnghe'] . '>' . $value['name_nganhnghe'] . '</option>');
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Kinh Nghiệm :</label>
                                <select required class="form-select" name="kinhnghiem">

                                    <?php
                                    foreach ($all_kinhnghiem as $key => $value) {
                                        if ($value['id_kn'] == $job_modal['id_kinhnghiem']) {
                                            echo ('<option selected="selected" value=' . $value['id_kn'] . '>' . $value['name_kn'] . '</option>');
                                        } else {
                                            echo ('<option value=' . $value['id_kn'] . '>' . $value['name_kn'] . '</option>');
                                        }
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
                                    <?php
                                    foreach ($allGioitinh as $key => $value) {
                                        if ($value['id_gt'] == $job_modal['id_gioitinh']) {
                                            echo ('<option selected="selected" value=' . $value['id_gt'] . '>' . $value['name_gt'] . '</option>');
                                        } else {
                                            echo ('<option value=' . $value['id_gt'] . '>' . $value['name_gt'] . '</option>');
                                        }
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Hình thức :</label>
                                <select required name="hinhthuc" class="form-select">
                                    <?php
                                    foreach ($all_hinhthuc as $key => $value) {
                                        if ($value['id_hinhthuc'] == $job_modal['id_hinhthuc']) {
                                            echo ('<option selected="selected" value=' . $value['id_hinhthuc'] . '>' . $value['name_hinhthuc'] . '</option>');
                                        } else {
                                            echo ('<option value=' . $value['id_hinhthuc'] . '>' . $value['name_hinhthuc'] . '</option>');
                                        }
                                    }
                                    ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Ngày hết hạn :</label>
                                <div class="controls">
                                    <input name="ngaycuoicung" value="<?php echo $job_modal['ngaycuoicung']; ?>" type="date" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Mã công việc:</label>
                                <div class="controls">
                                    <input name="job-code" value="<?php echo $job_modal['job_code']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Tuổi:</label>
                                <div class="controls">
                                    <input name="age" value="<?php echo $job_modal['age']; ?>" type="text" class="form-control" />

                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Ngôn ngữ</label>
                                <div class="controls">
                                    <input name="ngonngu" value="<?php echo $job_modal['ngonngu']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Chức vụ:</label>
                                <div class="controls">
                                    <input name="chucvu" value="<?php echo $job_modal['chucvu']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Cấp Bậc:</label>
                                <div class="controls">
                                    <input name="capbac" value="<?php echo $job_modal['capbac']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Số Lượng </label>
                                <div class="controls">
                                    <input name="soluong" value="<?php echo $job_modal['soluong']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Mức Lương </label>
                                <div class="controls">
                                    <input name="mucluong" value="<?php echo $job_modal['mucluong']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Địa Chỉ </label>
                                <div class="controls">
                                    <input name="diachi" value="<?php echo $job_modal['diachi']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">

                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Địa Chỉ Cụ Thể :</label>
                                <div class="controls">
                                    <input name="diachicuthe" value="<?php echo $job_modal['diachi_cuthe']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Mô tả:</label>
                        <div class="controls">
                            <textarea id="mota" name='mota'><?php echo $job_modal['mota'] ?></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Yêu cầu </label>
                        <div class="controls">
                            <textarea id="yeucau" name='yeucau'><?php echo $job_modal['yeucau'] ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Quyền Lợi </label>
                        <div class="controls">
                            <textarea id="quyenloi" name='quyenloi'><?php echo $job_modal['quyenloi'] ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Thông tin khác </label>
                        <div class="controls">
                            <textarea id="other" name='other'><?php echo $job_modal['thongtin_khac'] ?></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">

                        <button style="font-size: 18px;" class="btn btn-primary" type="submit" name="submit">Cập nhật</button>
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
</script>



<?php
require_once "footer.php";
?>