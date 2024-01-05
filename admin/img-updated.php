<?php
require_once "header.php";

require_once "models/db.php";

require_once "models/image.php";

$image = new Image_f;

$id = 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Khong nhan duoc ID";
}
$detail = $image->getdetail_ByID($id);

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
        if (isset($_GET['id']) == TRUE) {
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
                    Cập nhật ảnh :
                </div>

                <form action="job-vietnam/form-image-update.php" method="POST" enctype="multipart/form-data">
                    <input value="<?php echo $detail['id'] ?>" hidden name="id_img" />
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Tên ảnh:</label>
                        <div class="controls">
                            <input required type="text" value="<?php echo $detail['name']; ?>" class="form-control" name="name" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Ảnh hiện tại:</label>
                        <div class="controls">
                            <textarea class="form-control" id="image_f" name='image_f'><?php echo $detail['img'] ?></textarea>
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


<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#image_f'), {
            ckfinder: {
                uploadUrl: 'job-vietnam/upload-banner.php'
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