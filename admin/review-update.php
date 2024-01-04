<?php
require_once "header.php";

require_once "models/db.php";
require_once "models/review.php";

$review = new Review;

$id = 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Khong nhan duoc ID";
}

$detail_review = $review->getReview_ByID($id);


?>
<style>
    <?php include './scss/job/job.scss'; ?>
</style>
<style>
    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 220px !important;
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

<body>

    <div class="content-body">
        <?php
        if (isset($_GET['typeUpdate']) == TRUE && $_GET['typeUpdate'] == "review") {
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
                    <?php echo 'Cập nhật Review khách hàng  ' ?>
                </div>
                <form action="job-vietnam/form-review-update.php" method="POST" enctype="multipart/form-data">

                    <input name='id_review' value="<?php echo $detail_review['id'] ?>" style="display: none;" />
                    
                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Họ tên </label>
                        <div class="controls">
                           <input class="form-control" name="name" value="<?php echo $detail_review['name'] ?>" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*ảnh </label>
                        <div class="controls">
                            <textarea id="anh" name='anh'><?php echo $detail_review['img_review'] ?></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" style="font-weight: 600;">*Mô tả </label>
                        <div class="controls">
                           <input class="form-control" name="mota" value="<?php echo $detail_review['mota'] ?>" />
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
        .create(document.querySelector('#anh'), {
            ckfinder: {
                uploadUrl: 'job-vietnam/upload-review.php'
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