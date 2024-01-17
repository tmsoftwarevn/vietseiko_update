<?php

require "../config.php";
require_once "../models/db.php";
require "../models/tin-tuc.php";

require "../models/slug.php";
$slug = new TextUtil;
$blog  = new Tin_tuc;
?>
<?php
/// submit
$checkResult  = -1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ---------
    $file_old = $_POST['file_old'];
    if ($_FILES["image_f"]["name"] && $_FILES["image_f"]["type"]) {
        //if tồn tại file mới
        $target_dir = "../../images/l-image-blog/";
        $file_name = time() . $_FILES["image_f"]["name"];
        $file_type = $_FILES["image_f"]["type"];
        $file_tmp_name = $_FILES["image_f"]["tmp_name"];
        $target_path = $target_dir . $file_name;

        // move thành công
        if (move_uploaded_file($file_tmp_name, $target_path)) {
            //xóa ảnh cũ
            $file_path = '../../images/l-image-blog/' . $file_old . '';

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
            $id_blog = $_POST['id_blog'];
            $name = $_POST['tentintuc'];
            $img_blog = $file_name;
            $noidung = $_POST['noidung'];
            $type = $_POST['type'];
            $slug_custom = $slug::sanitize($name);
            $checkResult = $blog->updateBlog($id_blog, $img_blog, $name, $noidung, $type, $slug_custom);
        } else {
            echo "Error uploading the file.";
        }
    } else {
        $id_blog = $_POST['id_blog'];
        $name = $_POST['tentintuc'];
        $img_blog = $file_old;
        $noidung = $_POST['noidung'];
        $type = $_POST['type'];
        $slug_custom = $slug::sanitize($name);
        $checkResult = $blog->updateBlog($id_blog, $img_blog, $name, $noidung, $type, $slug_custom);
    }



    $url =  $_SERVER['HTTP_REFERER'];
    // custom path để click 2 lần submit ko bị lỗi
    $path = $url;
    $parts = explode('&', $path);
    if (count($parts) > 2) {
        //xóa path cuối 'checkresult'
        array_pop($parts);
        $newpath = implode('&', $parts);
        header("Location: $newpath&checkResult=$checkResult");
    } else {
        header("Location: $url&checkResult=$checkResult");
    }
}
?>