<?php
require_once "header.php";

require_once "models/db.php";
require_once "models/hinhthuc.php";
require_once "models/nganhnghe.php";
require_once "models/gioi_tinh.php";

$job = new Job;
$hinhthuc = new Hinhthuc;
$nganhnghe = new Nganhnghe;
$trangthai  = new Trangthai;
$gioitinh = new Gioi_tinh;
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

$all_nganhnghe = $nganhnghe::getAllNganhnghe();
$allGioitinh = $gioitinh->getAllGioitinh();
$name_gioitinh = $gioitinh->getGioitinh_byId($job_modal['id_gioitinh']);
$all_trangthai = $trangthai->getAllTrangthai();


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
            <div class="body-view-job" style="padding: 100px;">

                <div class="title-job" style="text-align: center; font-weight: 600; 
                font-size: 20px; text-transform: capitalize;">
                    <?php echo 'Cập nhật mã công việc tại Việt Nam: ' . $job_modal['id_job'] ?>
                </div>

                <form action="job-vietnam/form-update.php" method="POST" enctype="multipart/form-data" name="job">
                    <input name='id_job' value="<?php echo $job_modal['id_job'] ?>" style="display: none;" />
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Tên Công Ty :</label>
                        <div class="controls">
                            <input type="text" value="<?php echo $job_modal['name']; ?>" class="form-control" name="tencongty" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Logo Cty :</label>
                        <div class="image-job-logo">
                            <img src="../images/job-viet-nam/logo-company/<?php echo $job_modal['img_cty'] ?>" alt="anh">
                        </div>
                    </div>

                    <div class="control-group" aria-label="Default select example">
                        <label class="control-label" style="font-weight: 600;">*Ngành nghề :</label>
                        <select class="form-select" name="nganhnghe">
                            <option disabled selected value="<?php echo $job_modal['id_nganhnghe'] ?>"><?php echo '---' . $name_nganhnghe . '---' ?></option>
                            <?php
                            foreach ($all_nganhnghe as $key => $value) {
                            ?>
                                <option value="<?php echo $value['id_nganhnghe'] ?>">
                                    <?php echo $value['name_nganhnghe'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Chức vụ:</label>
                        <div class="controls">
                            <input name="chucvu" type="text" value="<?php echo $job_modal['chucvu']; ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Cấp Bậc:</label>
                        <div class="controls">
                            <input name="capbac" type="text" value="<?php echo $job_modal['capbac']; ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Số Lượng :</label>
                        <div class="controls">
                            <input name="soluong" type="text" value="<?php echo $job_modal['soluong']; ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Kinh Nghiệm :</label>
                        <div class="controls">
                            <input name="kinhnghiem" type="text" value="<?php echo $job_modal['kinhnghiem']; ?>" class="form-control" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Ngày hết hạn :</label>
                        <div class="controls">
                            <input name="ngaycuoicung" type="date" value="<?php echo $job_modal['ngaycuoicung']; ?>" class="form-control" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Giới Tính :</label>
                        <select name="gioitinh" class="form-select">
                            <option disabled selected value="<?php echo $job_modal['id_gioitinh'] ?>"><?php echo '---' . $name_gioitinh . '---' ?></option>
                            <?php
                            foreach ($allGioitinh as $key => $value) {
                            ?>
                                <option value="<?php echo $value['id_gt'] ?>">
                                    <?php echo $value['name_gt'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Mức Lương :</label>
                        <div class="controls">
                            <input name="mucluong" type="text" value="<?php echo $job_modal['mucluong']; ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Địa Chỉ :</label>
                        <div class="controls">
                            <input name="diachi" type="text" value="<?php echo $job_modal['diachi']; ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Địa Chỉ Cụ Thể :</label>
                        <div class="controls">
                            <input name="diachicuthe" type="text" value="<?php echo $job_modal['diachi_cuthe']; ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Hình thức:</label>
                        <div class="controls">
                            <input name="hinhthuc" type="text" value="<?php echo $name_hinhthuc ?>" class="form-control" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Mô tả công việc</label>
                        <div class="controls">
                            <textarea name="mota" rows="10" class="form-control"><?php echo $job_modal['mota']; ?></textarea>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Yêu cầu</label>
                            <div class="controls">
                                <textarea name="yeucau" rows="10" class="form-control"><?php echo $job_modal['yeucau']; ?></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Quyền Lợi</label>
                            <div class="controls">
                                <textarea name="quyenloi" rows="10" class="form-control"><?php echo $job_modal['quyenloi']; ?></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Trạng thái:</label>
                            <select name="trangthai" class="form-select">
                                <option disabled selected value="<?php echo $job_modal['id_trangthai'] ?>"><?php echo '---' . $name_trangthai . '---' ?></option>
                                <?php
                                foreach ($all_trangthai as $key => $value) {
                                ?>
                                    <option value="<?php echo $value['id_trangthai'] ?>">
                                        <?php echo $value['name_trangthai'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center">
                        <button style="font-size: 18px;" class="btn btn-primary" type="submit">Cập nhật</button>
                    </div>
                </form>

                <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                    <?php

                    if (isset($_GET['checkResult']) == TRUE) {
                        echo "<div style=\"text-decoration:underline;\">RESULT:</div>";
                        if ($_GET['checkResult'] > 0) {
                            echo "<span style=\"color:green;\">" . "Cập nhật thành công." . "</span>";
                        } elseif ($_GET['checkResult'] == 0) {
                            echo "<span style=\"color:green;\">" . "Không có thay đổi" . "</span>";
                        } else {
                            echo "<span style=\"color:red;\">" . "Chưa cập nhật" . "</span>";
                        }
                    }
                    ?>
                </div>
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