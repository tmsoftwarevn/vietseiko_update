<?php
require_once "header.php";
require_once "models/db.php";
require_once "models/image.php";

require_once "models/protypes.php";
$type = new Protypes;
$all_type = $type::getAllType();
$image = new Image_f;

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['name']) && isset($_POST['add'])) {
    $target_dir = "../images/banner/";
    $file_name = time() . $_FILES["image_f"]["name"];
    $file_type = $_FILES["image_f"]["type"];
    $file_tmp_name = $_FILES["image_f"]["tmp_name"];
    $target_path = $target_dir . $file_name;

    if (move_uploaded_file($file_tmp_name, $target_path) && $file_type) {

        $name = $_POST["name"];
        $img = $file_name;
        $image::insert($name, $img, 0);
    } else {
        echo "Error uploading the file.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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
        <div class="container" style="padding:0 50px;">
            <div class="d-flex align-items-center mb-4 flex-wrap">
                <h3 class="me-auto">Quản lý banner</h3>
            </div>

            <div class="card-file mb-5">
                <h4 style="text-align: center;">Thêm banner</h4>
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <input class="form-control mb-3" required type="text" placeholder="Nhập tên ảnh" name="name" />
                    <div class="form-group">
                        <label id="chon_img" for="image_f" class="control-label">Chọn banner:</label>
                        <input required type="file" name="image_f" id="image_f" accept="image/*" class="form-control" onchange="previewImage('image_f')">
                    </div>
                    <div class="form-group">
                        <img id="imagePreview" class="img-thumbnail" style="display:none;">
                    </div>
                    <div class="form-group m-5">
                        <button type="submit" name="add" class="btn btn-primary mt-5">Thêm</button>
                    </div>
                </form>
            </div>

            <table id="jobsTable" class="display table table-striped">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Ngày đăng</th>
                        <th>Ngày cập nhật</th>
                        <th>ảnh</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $list_image = $image->getAll();
                    foreach ($list_image as $index => $value) {
                    ?>
                        <tr>
                            <td><?php echo $index + 1 ?></td>
                            <td><?php echo $value['name'] ?></td>
                            <td>
                                <?php
                                foreach ($all_type as $ind => $item) {
                                    if ($item['type_id'] == $value['type_id']) {
                                        echo $item['type_name'];
                                    }
                                }
                                if ($value['type_id'] == 0) {
                                    echo 'ảnh banner';
                                }

                                ?>

                            </td>
                            <td><?php echo $value['created_at'] ?></td>
                            <td><?php echo $value['updated_at'] ?></td>
                            <td>
                                <img src="../images/banner/<?php echo $value['img'] ?>" />
                            </td>
                            <td>
                                <div class="action-buttons d-flex justify-content-end">
                                    <a href="img-updated.php?id=<?php echo $value['id'] ?>" class="btn btn-secondary light mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                            </g>
                                        </svg>
                                    </a>
                                    <?php
                                    if ($value['type_id'] == 0) {
                                    ?>
                                        <a onclick="return confirm('Xác nhận muốn xóa banner có Stt: <?php echo $index + 1 ?>?')" href="job-vietnam/delete_banner.php?id_banner=<?php echo $value['id']; ?>" class="btn btn-danger light">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <!-- // js handle img -->
    <script>
        // stop reload submit
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

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

</body>

</html>

<?php
require_once "footer.php";
?>