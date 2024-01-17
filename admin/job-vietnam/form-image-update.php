<?php

require "../config.php";
require_once "../models/db.php";
require "../models/image.php";
$image = new Image_f;
?>
<?php

$checkResult  = -1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $target_dir = "../../images/banner/";
    $file_name = time() . $_FILES["image_f"]["name"];
    $file_type = $_FILES["image_f"]["type"];
    $file_tmp_name = $_FILES["image_f"]["tmp_name"];
    $target_path = $target_dir . $file_name;

    if (move_uploaded_file($file_tmp_name, $target_path) && $file_type) {
        //xóa ảnh cũ
        $file_old = $_POST['file_old'];
        $file_path = '../../images/banner/' . $file_old . '';

        if (file_exists($file_path)) {
            if (unlink($file_path)) {
                echo 'File was successfully deleted.';
            } else {
                echo 'Unable to delete the file.';
            }
        } else {
            echo 'File does not exist.';
        }

        //thêm thông tin mới
                
        $id = $_POST['id_img'];
        $name = $_POST['name'];
        $img = $file_name;
        $checkResult = $image->update($id, $name, $img);
    
    } else {
        echo "Error uploading the file.";

    }


    // custom path để click 2 lần submit ko bị lỗi
    $url =  $_SERVER['HTTP_REFERER'];
    $path = $url;
    $parts = explode('&', $path);
    if (count($parts) > 1) {
        //xóa path cuối 'checkresult'
        array_pop($parts);
        $newpath = implode('&', $parts);
        header("Location: $newpath&checkResult=$checkResult");
    } else {
        header("Location: $url&checkResult=$checkResult");
    }
}

?>