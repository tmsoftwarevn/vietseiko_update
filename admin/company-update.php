<?php
require_once "header.php";

require_once "models/db.php";
require_once "models/cty.php";
require_once "models/protypes.php";

$id = 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Khong nhan duoc ID";
}

$cty = new Congty;
$type = new Protypes;
$detail_Cty = $cty::getCty_byId($id);
$all_type = $type::getAllType();
?>
<style>
    <?php include './scss/job/job.scss'; ?>
</style>
<style>
    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 300px !important;
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
<style>

</style>

<body>

    <div class="content-body">
        <?php
        if (isset($_GET['typeUpdate']) == TRUE && $_GET['typeUpdate'] == "cty") {
        ?>

            <div class="body-view-job" style="padding: 100px;">
                <!-- detail cong viec -->
                <div class="title-job" style="text-align: center; font-weight: 600; 
                font-size: 20px; text-transform: capitalize;">
                    <?php echo 'cập nhật Mã công ty: ' . $detail_Cty['id_cty'] ?>
                </div>

                <form action="job-vietnam/form-cty-update.php" method="POST" enctype="multipart/form-data">
                    <div class="row mt-5">

                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Quy mô:</label>
                                <div class="controls">
                                    <input  required type="text" value="<?php echo $detail_Cty['quymo']; ?>" class="form-control" name="quymo" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Type công ty :</label>
                                <select required class="form-select" name="type">
                                    <?php
                                    foreach ($all_type as $key => $value) {
                                        if ($value['type_id'] == $detail_Cty['type_id']) {
                                            echo ('<option selected="selected" value=' . $value['type_id'] . '>' . $value['type_name'] . '</option>');
                                        } else {
                                            echo ('<option value=' . $value['type_id'] . '>' . $value['type_name'] . '</option>');
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <input name="id_cty" value=" <?php echo $detail_Cty['id_cty'] ?>" style="display: none;"/>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Tên Công Ty :</label>
                        <div class="controls">
                            <input required type="text" value="<?php echo $detail_Cty['name']; ?>" class="form-control" name="tencongty" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Địa chỉ chi tiết:</label>
                        <div class="controls">
                            <input required type="text" value="<?php echo $detail_Cty['address']; ?>" class="form-control" name="diachi" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Logo Cty hiện tại:</label>
                        
                        <div class="controls">
                            <textarea class="form-control" id="logo" name='logo'><?php echo $detail_Cty['img_cty'] ?></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Thông tin:</label>
                        <div class="controls">
                            <textarea id="thongtin" name='thongtin'><?php echo $detail_Cty['about_cty'] ?></textarea>
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
        .create(document.querySelector('#thongtin'))
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
</script>


<?php
require_once "footer.php";
?>