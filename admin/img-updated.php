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

                <div class="card-file mt-5">

                    <form action="job-vietnam/form-image-update.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <input class="form-control mb-3" required type="text" value="<?php echo $detail['name'] ?>" name="name" />
                        <input hidden value="<?php echo $detail['id'] ?>" name="id_img" />
                        <input name="file_old" value="<?php echo $detail['img'] ?>" hidden />

                        <div class="form-group">
                            <label id="chon_img" for="image_f" class="control-label">Chọn banner:</label>
                            <input required type="file" name="image_f" id="image_f" accept="image/*" class="form-control" onchange="previewImage('image_f')">
                        </div>
                        <div class="form-group">
                            <img id="imagePreview" class="img-thumbnail" style="display:none;">
                        </div>
                        <div class="form-group m-5">
                            <button type="submit" name="add" class="btn btn-primary mt-5">Cập nhật</button>
                        </div>
                    </form>
                </div>
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