<?php

require "../config.php";
require_once "../models/db.php";
require "../models/cam_nang.php";
require "../models/slug.php";
$slug = new TextUtil;
$blog = new Cam_nang;
?>
<?php

$checkResult  = -1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $target_dir = "../../images/l-image-blog/";
    $file_name = time() . $_FILES["image_f"]["name"];
    $file_type = $_FILES["image_f"]["type"];
    $file_tmp_name = $_FILES["image_f"]["tmp_name"];
    $target_path = $target_dir . $file_name;

    if (move_uploaded_file($file_tmp_name, $target_path) && $file_type) {
        $name = $_POST['tentintuc'];
        $img_blog = $file_name;
        $noidung = $_POST['noidung'];
        $type = $_POST['type'];
        $slug_custom = $slug::sanitize($name);
        $checkResult = $blog->insertBlog($img_blog, $name, $noidung, $type, $slug_custom);
    } else {
        echo "Error uploading the file.";
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