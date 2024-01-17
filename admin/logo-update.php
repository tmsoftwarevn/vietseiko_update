<?php
require_once "header.php";

require_once "models/db.php";

require_once "models/hinhanh-video.php";

$image = new Hinhanh_Video;

$id = 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Khong nhan duoc ID";
}
$detail = $image->get_hinhanh_video_ById($id);

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
    .results {
        margin-bottom: 20px;
    }

    label {
        margin-right: 10px;
    }

    #imagePreview {
        max-width: 300px;
        width: 100%;
    }

    .card-file {
        padding: 20px 20px 10px;
        width: 100%;
        background-color: #ecf0f1;
    }

    #chon_img {
        padding: 10px;
        background-color: orangered;
        color: white;
        cursor: pointer;
    }

    img {
        width: 100%;
        max-width: 150px;
    }
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
                    Cập nhật logo :
                </div>

                <form action="job-vietnam/form-hinhanh-update.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <input value="<?php echo $detail['id'] ?>" hidden name="id_img" />
                    <input name="file_old" value="<?php echo $detail['path'] ?>" hidden />
                    <div class="form-group">
                        <label id="chon_img" for="image_f" class="control-label">Chọn ảnh:</label>
                        <input required type="file" name="image_f" id="image_f" accept="image/*" class="form-control" onchange="previewImage('image_f')">
                    </div>
                    <div class="form-group">
                        <img id="imagePreview" class="img-thumbnail" style="display:none;">
                    </div>
                    <div class="form-group m-5">
                        <button type="submit" name="submit" class="btn btn-primary mt-5">Cập nhật</button>
                    </div>
                </form>
            </div>
        <?php
        }

        ?>
    </div>

</body>

</html>

<script>
    function previewImage(inputId) {
        var preview = document.getElementById('imagePreview');
        var fileInput = document.getElementById(inputId);
        var file = fileInput.files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(file);
        } else {
            preview.style.display = 'none';
        }
    }
</script>

<?php
require_once "footer.php";
?>