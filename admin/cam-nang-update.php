<?php
require_once "header.php";

require_once "models/db.php";
require_once "models/cam_nang.php";
require_once "models/protypes.php";

$id = 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Khong nhan duoc ID";
}

$blog = new Cam_nang;
$type = new Protypes;
$detail_blog = $blog->getBlog_ByID($id);
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
        if (isset($_GET['typeUpdate']) == TRUE && $_GET['typeUpdate'] == "cam-nang") {
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
            <div class="body-view-job" style="padding:0 100px 50px;">
                <!-- detail cong viec -->
                <div class="title-job" style="text-align: center; font-weight: 600; 
                font-size: 20px; text-transform: capitalize;">
                    <?php echo 'cập nhật Blog mã: ' . $detail_blog['id_blog'] ?>
                </div>

                <form action="job-vietnam/form-camnang-update.php" method="POST" enctype="multipart/form-data">
                    <input style="display: none;" name='id_blog' value="<?php echo $detail_blog['id_blog'] ?>" />
                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Loại tin tức</label>

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
                        <div class="col-6">
                            <div class="control-group">
                                <label class="control-label" style="font-weight: 600;">*Tên tin tức :</label>
                                <div class="controls">
                                    <input required type="text" class="form-control" value="<?php echo $detail_blog['tieude_blog'] ?>" name="tentintuc" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Ảnh hiển thị:</label>

                        <div class="controls">
                            <textarea class="form-control" id="image-blog" name='image-blog'><?php echo $detail_blog['img_blog'] ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Nội dung:</label>
                        <div class="controls">
                            <textarea class="form-control" id="noidung" name='noidung'><?php echo $detail_blog['noidung_blog'] ?></textarea>
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
        .create(document.querySelector('#image-blog'), {
            ckfinder: {
                uploadUrl: 'job-vietnam/upload-blog.php'
            },
        })
        .then(editor => {
            console.Log(editor);
        })
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#noidung'), {
            ckfinder: {
                uploadUrl: 'job-vietnam/upload-blog.php'
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