<?php
require_once "header.php";

require_once "models/db.php";
require_once "models/hinhthuc.php";
require_once "models/nganhnghe.php";
require_once "models/gioi_tinh.php";
require_once "models/kinh_nghiem.php";
require_once "models/job.php";

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
$name_kinhnghiem = $kinh_nghiem->getKinhNghiem_byId($job_modal['id_kinhnghiem']);

$all_kinhnghiem = $kinh_nghiem->getAllKinhNghiem();
$name_gioitinh = $gioitinh->getGioitinh_byId($job_modal['id_gioitinh']);


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
</head>

<body>

    <div class="content-body">
        <?php
        if (isset($_GET['typeView']) == TRUE && $_GET['typeView'] == "job" ) {
        ?>

            <div class="body-view-job" style="padding: 0 100px 50px 100px">

                <div class="title-job" style="text-align: center; font-weight: 600; 
        font-size: 20px; text-transform: capitalize;">
                    <?php echo 'Công việc tại Việt Nam mã: ' . $job_modal['job_code'] ?>
                </div>

                <div class="row mt-5">
                    <div class="col-6">
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Tên Công Ty :</label>
                            <div class="controls">
                                <input type="text" value="<?php echo $job_modal['name']; ?>" class="form-control" disabled />
                            </div>
                        </div>
                    </div>

                    <div class="col-6">

                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Địa Chỉ Cụ Thể :</label>
                            <div class="controls">
                                <input disabled value="<?php echo $job_modal['diachi_cuthe']; ?>" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-6">
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Giới Tính :</label>
                            <div class="controls">
                                <input type="text" value="<?php echo $name_gioitinh; ?>" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Hình thức :</label>
                            <div class="controls">
                                <input type="text" value="<?php echo $name_hinhthuc; ?>" class="form-control" disabled />
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-5">
                    <div class="col-6">
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Ngày hết hạn :</label>
                            <div class="controls">
                                <input disabled value="<?php echo $job_modal['ngaycuoicung']; ?>" type="date" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Mã công việc:</label>
                            <div class="controls">
                                <input disabled value="<?php echo $job_modal['job_code']; ?>" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>


                    <!-- <div class="col-4">
        <div class="control-group">
            <label class="control-label" style="font-weight: 600;">*Ngôn ngữ</label>
            <div class="controls">
                <input disabled value="<?php echo $job_modal['ngonngu']; ?>" type="text" class="form-control" />
            </div>
        </div>
    </div> -->
                </div>
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Tuổi:</label>
                            <div class="controls">
                                <input disabled value="<?php echo $job_modal['age']; ?>" type="text" class="form-control" />

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Địa Chỉ </label>
                            <div class="controls">
                                <input disabled value="<?php echo $job_modal['diachi']; ?>" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Chức vụ:</label>
                            <div class="controls">
                                <input disabled value="<?php echo $job_modal['chucvu']; ?>" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Cấp Bậc:</label>
                            <div class="controls">
                                <input disabled value="<?php echo $job_modal['capbac']; ?>" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-5">
                    <div class="col-6">
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Số Lượng </label>
                            <div class="controls">
                                <input disabled value="<?php echo $job_modal['soluong']; ?>" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Mức Lương </label>
                            <div class="controls">
                                <input disabled value="<?php echo $job_modal['mucluong']; ?>" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-5">
                    <div class="col-6">
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Ngành nghề :</label>
                            <div class="controls">
                                <input type="text" value="<?php echo $name_nganhnghe; ?>" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="control-group">
                            <label class="control-label" style="font-weight: 600;">*Kinh Nghiệm :</label>
                            <div class="controls">
                                <input type="text" value="<?php echo $name_kinhnghiem; ?>" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" style="font-weight: 600;">*Mô tả công việc:</label>
                    <div style="border: 1px solid #ccc; background-color: #f4f4f4;padding: 20px 10px;">
                        <?php echo $job_modal['mota'] ?>
                    </div>

                </div>
                <div class="control-group">
                    <label class="control-label" style="font-weight: 600;">*Yêu cầu </label>
                    <div style="border: 1px solid #ccc; background-color: #f4f4f4;padding: 20px 10px;">
                        <?php echo htmlspecialchars_decode($job_modal['yeucau']) ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" style="font-weight: 600;">*Quyền Lợi </label>
                    <div style="border: 1px solid #ccc; background-color: #f4f4f4;padding: 20px 10px;">
                        <?php echo htmlspecialchars_decode($job_modal['quyenloi']) ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" style="font-weight: 600;">*Thông tin khác </label>
                    <div style="border: 1px solid #ccc; background-color: #f4f4f4;padding: 20px 10px;">
                        <?php echo htmlspecialchars_decode($job_modal['thongtin_khac']) ?>
                    </div>
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