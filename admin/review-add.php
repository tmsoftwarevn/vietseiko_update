<?php
require_once "header.php";

require_once "models/db.php";
require_once "models/review.php";

$review = new Review;

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

<body>

    <div class="content-body">
        <?php
        if (isset($_GET['typeAdd']) == TRUE && $_GET['typeAdd'] == "review") {
        ?>
            <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                <?php

                if (isset($_GET['checkResult']) == TRUE) {

                    if ($_GET['checkResult'] > 0) {
                        echo "<span style=\"color:green;\">" . "Thêm thành công." . "</span>";
                    } else {
                        echo "<span style=\"color:red;\">" . "Có lỗi từ server" . "</span>";
                    }
                }
                ?>
            </div>
            <div class="body-view-job" style="padding: 0 100px 50px 100px">

                <div class="title-job" style="text-align: center; font-weight: 600; 
                        font-size: 20px; text-transform: capitalize;">
                    <?php echo 'Thêm Review người lao động  ' ?>
                </div>
                <form action="job-vietnam/form-review-add.php" method="POST" enctype="multipart/form-data">
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Họ tên </label>
                        <div class="controls">
                            <input required class="form-control" name="name" />
                        </div>
                    </div>

                    <div class="card-file mb-4">
                        <div class="control-group">
                            <label id="chon_img" for="image_f" class="control-label" style="font-weight: 600;">Chọn ảnh:</label>
                            <input required type="file" name="image_f" id="image_f" accept="image/*" class="form-control" onchange="previewImage('image_f')">
                        </div>
                        <div class="form-group">
                            <img id="imagePreview" class="img-thumbnail" style="display:none;">
                        </div>
                    </div>
                    <!-- ---------- -->
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Mô tả </label>
                        <div class="controls">
                            <input required class="form-control" name="mota" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button style="font-size: 18px;" class="btn btn-primary" type="submit" name="submit">Thêm mới</button>
                    </div>
                </form>
            </div>

        <?php
        }

        ?>
    </div>

</body>

</html>

<!-- // js handle img -->
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