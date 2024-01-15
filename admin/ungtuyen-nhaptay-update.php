<?php
require_once "header.php";

require_once "models/db.php";
require_once "models/ungtuyen_nhaptay.php";

$u = new Ungtuyen_nhaptay;

$id = 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Khong nhan duoc ID";
}
$ungtuyen = $u::get_detail_ungtuyen($id);

?>
<style>
    <?php include './scss/job/job.scss'; ?>
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

        //vn
        if (isset($_GET['typeUpdate']) == TRUE && $_GET['typeUpdate'] == "vn") {
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
                    <?php echo 'Cập nhật ứng viên công việc Việt Nam : ' . $ungtuyen['id_ungtuyen'] ?>
                </div>
                <form action="file-cv/code/form-ungtuyen-update.php" method="POST" enctype="multipart/form-data">

                    <input name='id' value="<?php echo $ungtuyen['id_ungtuyen'] ?>" style="display: none;" />

                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Họ tên :</label>
                                <div class="controls">
                                    <input required name="name" value="<?php echo $ungtuyen['name']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Email :</label>
                                <div class="controls">
                                    <input required name="email" value="<?php echo $ungtuyen['email']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*SDT:</label>
                                <div class="controls">
                                    <input required name="phone" value="<?php echo $ungtuyen['phone']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Năm sinh:</label>
                                <div class="controls">
                                    <input required name="namsinh" value="<?php echo $ungtuyen['nam_sinh']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Mức lương:</label>
                                <div class="controls">
                                    <input required name="mucluong" value="<?php echo $ungtuyen['muc_luong']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Khu vực:</label>
                                <div class="controls">
                                    <input required name="khuvuc" value="<?php echo $ungtuyen['khu_vuc']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Vị trí ứng tuyển </label>
                                <div class="controls">
                                    <input required name="vitri" value="<?php echo $ungtuyen['vi_tri_ung_tuyen']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="control-label" style="font-weight: 600;">*File </label>
                            <input type="text" name="file_old" class="form-control" value="<?php echo $ungtuyen['link_cv']; ?>" readonly />
                            <div class="control-group">

                                <label class="upload-option">
                                    <input name="file" id="file" type="file" class="upload-input" accept=".pdf, .doc, .docx" onchange="handleFileUpload(event)">
                                    <span class="svicon-upload mr-2"></span>
                                </label>

                                <div id="error-message" class="text-danger mt-2"></div>
                                <p id="uploadSuccess" class="text-success mt-2"></p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-5">

                        <button style="font-size: 18px;" class="btn btn-primary" type="submit" name="submit">Cập nhật</button>
                    </div>
                </form>
            </div>

        <?php
        }
        //xkld
        if (isset($_GET['typeUpdate']) == TRUE && $_GET['typeUpdate'] == "xkld") {
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
                    <?php echo 'Cập nhật ứng viên công việc XKLD : ' . $ungtuyen['id_ungtuyen'] ?>
                </div>
                <form action="file-cv/code/form-ungtuyen-update.php" method="POST" enctype="multipart/form-data">

                    <input name='id' value="<?php echo $ungtuyen['id_ungtuyen'] ?>" style="display: none;" />

                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Họ tên :</label>
                                <div class="controls">
                                    <input required name="name" value="<?php echo $ungtuyen['name']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Email :</label>
                                <div class="controls">
                                    <input required name="email" value="<?php echo $ungtuyen['email']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*SDT:</label>
                                <div class="controls">
                                    <input required name="phone" value="<?php echo $ungtuyen['phone']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Năm sinh:</label>
                                <div class="controls">
                                    <input required name="namsinh" value="<?php echo $ungtuyen['nam_sinh']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Mức lương:</label>
                                <div class="controls">
                                    <input required name="mucluong" value="<?php echo $ungtuyen['muc_luong']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Khu vực:</label>
                                <div class="controls">
                                    <input required name="khuvuc" value="<?php echo $ungtuyen['khu_vuc']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Vị trí ứng tuyển </label>
                                <div class="controls">
                                    <input required name="vitri" value="<?php echo $ungtuyen['vi_tri_ung_tuyen']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="control-label" style="font-weight: 600;">*File </label>
                            <input type="text" name="file_old" class="form-control" value="<?php echo $ungtuyen['link_cv']; ?>" readonly />
                            <div class="control-group">

                                <label class="upload-option">
                                    <input name="file" id="file" type="file" class="upload-input" accept=".pdf, .doc, .docx" onchange="handleFileUpload(event)">
                                    <span class="svicon-upload mr-2"></span>
                                </label>

                                <div id="error-message" class="text-danger mt-2"></div>
                                <p id="uploadSuccess" class="text-success mt-2"></p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-5">

                        <button style="font-size: 18px;" class="btn btn-primary" type="submit" name="submit">Cập nhật</button>
                    </div>
                </form>
            </div>

        <?php
        }
        //VIETSEIKO
        if (isset($_GET['typeUpdate']) == TRUE && $_GET['typeUpdate'] == "vsk") {
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
                    <?php echo 'Cập nhật ứng viên công việc Vietseiko : ' . $ungtuyen['id_ungtuyen'] ?>
                </div>
                <form action="file-cv/code/form-ungtuyen-update.php" method="POST" enctype="multipart/form-data">

                    <input name='id' value="<?php echo $ungtuyen['id_ungtuyen'] ?>" style="display: none;" />

                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Họ tên :</label>
                                <div class="controls">
                                    <input required name="name" value="<?php echo $ungtuyen['name']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Email :</label>
                                <div class="controls">
                                    <input required name="email" value="<?php echo $ungtuyen['email']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*SDT:</label>
                                <div class="controls">
                                    <input required name="phone" value="<?php echo $ungtuyen['phone']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Năm sinh:</label>
                                <div class="controls">
                                    <input required name="namsinh" value="<?php echo $ungtuyen['nam_sinh']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Mức lương:</label>
                                <div class="controls">
                                    <input required name="mucluong" value="<?php echo $ungtuyen['muc_luong']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Khu vực:</label>
                                <div class="controls">
                                    <input required name="khuvuc" value="<?php echo $ungtuyen['khu_vuc']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Vị trí ứng tuyển </label>
                                <div class="controls">
                                    <input required name="vitri" value="<?php echo $ungtuyen['vi_tri_ung_tuyen']; ?>" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="control-label" style="font-weight: 600;">*File </label>
                            <input type="text" name="file_old" class="form-control" value="<?php echo $ungtuyen['link_cv']; ?>" readonly />
                            <div class="control-group">

                                <label class="upload-option">
                                    <input  name="file" id="file" type="file" class="upload-input" accept=".pdf, .doc, .docx" onchange="handleFileUpload(event)">
                                    <span class="svicon-upload mr-2"></span>
                                </label>

                                <div id="error-message" class="text-danger mt-2"></div>
                                <p id="uploadSuccess" class="text-success mt-2"></p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-5">

                        <button style="font-size: 18px;" class="btn btn-primary" type="submit" name="submit">Cập nhật</button>
                    </div>
                </form>
            </div>

        <?php
        }

        ?>
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
</body>

</html>


<?php
require_once "footer.php";
?>