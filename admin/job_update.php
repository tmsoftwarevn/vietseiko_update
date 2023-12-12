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
$id = 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Khong nhan duoc ID";
}
$job_modal =  $job->getJob_ByID($id);

$name_nganhnghe = $nganhnghe::getNganhngheName($job_modal['id_nganhnghe']);
$name_hinhthuc = $hinhthuc::getHinhthucName($job_modal['id_hinhthuc']);
$name_trangthai = $trangthai->getTrangthaiByID($job_modal['id_trangthai']);
$name_gioitinh = $gioitinh->getGioitinh_byId($job_modal['id_gioitinh']);
$name_kinhnghiem = $kinh_nghiem->getKinhNghiem_byId($job_modal['id_kinhnghiem']);

$all_kinhnghiem = $kinh_nghiem->getAllKinhNghiem();
$all_nganhnghe = $nganhnghe::getAllNganhnghe();
$allGioitinh = $gioitinh->getAllGioitinh();
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
        if (isset($_GET['typeUpdate']) == TRUE && $_GET['typeUpdate'] == "job") {
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
            <div class="body-view-job" style="padding: 100px;">

                <div class="title-job" style="text-align: center; font-weight: 600; 
                font-size: 20px; text-transform: capitalize;">
                    <?php echo 'Cập nhật mã công việc tại Việt Nam: ' . $job_modal['id_job'] ?>
                </div>
                <!-- job-vietnam/form-update.php -->
                <form action="job-vietnam/form-update.php" method="POST" enctype="multipart/form-data">
                    <input name='id_job' value="<?php echo $job_modal['id_job'] ?>" style="display: none;" />
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Tên Công Ty :</label>
                        <div class="controls">
                            <input required type="text" value="<?php echo $job_modal['name']; ?>" class="form-control" name="tencongty" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Logo Cty :</label>
                        <input value="<?php echo $job_modal['img_cty'] ?>" style="display: none;" name="path-image" />
                        <div class="image-job-logo">
                            <img src="../images/jobs-company/vietnam/<?php echo $job_modal['img_cty'] ?>" alt="anh" width="300px" height="auto" style="object-fit: cover;">
                        </div>
                        <label for="fileUpload" style="cursor: pointer;">Update ảnh: Chỉ được tải lên file đuôi (jpeg, png hoặc jpg)</label>
                        <input type="file" id="fileUpload" name="fileUpload"><br><br>

                    </div>

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
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Chức vụ:</label>
                        <div class="controls">
                            <input required name="chucvu" type="text" value="<?php echo $job_modal['chucvu']; ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Cấp Bậc:</label>
                        <div class="controls">
                            <input required name="capbac" type="text" value="<?php echo $job_modal['capbac']; ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Số Lượng :</label>
                        <div class="controls">
                            <input required name="soluong" type="text" value="<?php echo $job_modal['soluong']; ?>" class="form-control" />
                        </div>
                    </div>
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

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Ngày hết hạn :</label>
                        <div class="controls">
                            <input required name="ngaycuoicung" type="date" value="<?php echo $job_modal['ngaycuoicung']; ?>" class="form-control" />
                        </div>
                    </div>

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
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Mức Lương :</label>
                        <div class="controls">
                            <input required name="mucluong" type="text" value="<?php echo $job_modal['mucluong']; ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Địa Chỉ :</label>
                        <div class="controls">
                            <input required name="diachi" type="text" value="<?php echo $job_modal['diachi']; ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Địa Chỉ Cụ Thể :</label>
                        <div class="controls">
                            <input required name="diachicuthe" type="text" value="<?php echo $job_modal['diachi_cuthe']; ?>" class="form-control" />
                        </div>
                    </div>
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
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Mô tả công việc</label>
                        <div class="controls">
                            <textarea required name="mota" rows="10" class="form-control"><?php echo $job_modal['mota']; ?></textarea>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Yêu cầu</label>
                            <div class="controls">
                                <textarea required name="yeucau" rows="10" class="form-control"><?php echo $job_modal['yeucau']; ?></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Quyền Lợi</label>
                            <div class="controls">
                                <textarea required name="quyenloi" rows="10" class="form-control"><?php echo $job_modal['quyenloi']; ?></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Cách ứng tuyển</label>
                            <div class="controls">
                                <textarea required name="ungtuyen" rows="10" class="form-control"><?php echo $job_modal['cach_ungtuyen']; ?></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Trạng thái:</label>
                            <select required name="trangthai" class="form-select">
                                <?php
                                foreach ($all_trangthai as $key => $value) {
                                    if ($value['id_trangthai'] == $job_modal['id_trangthai']) {
                                        echo ('<option selected="selected" value=' . $value['id_trangthai'] . '>' . $value['name_trangthai'] . '</option>');
                                    } else {
                                        echo ('<option value=' . $value['id_trangthai'] . '>' . $value['name_trangthai'] . '</option>');
                                    }
                                }
                                ?>

                            </select>
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



<?php
require_once "footer.php";
?>