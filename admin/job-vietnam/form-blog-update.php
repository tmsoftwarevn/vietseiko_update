<?php

require "../config.php";
require_once "../models/db.php";
require "../models/tin-tuc.php";
$blog  = new Tin_tuc;
?>
<?php
/// submit
$checkResult  = -1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_blog = $_POST['id_blog'];
   
    $name = $_POST['tentintuc'];
    $img_blog = $_POST['image-blog'];
    $noidung = $_POST['noidung'];
    $type = $_POST['type'];

    $checkResult =$blog->updateBlog($id_blog,$img_blog, $name, $noidung, $type);
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