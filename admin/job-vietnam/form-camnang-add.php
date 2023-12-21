<?php

require "../config.php";
require_once "../models/db.php";
require "../models/cam_nang.php";
$blog = new Cam_nang;
?>
<?php

$checkResult  = -1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['tentintuc'];
    $img_blog = $_POST['image-blog'];
    $noidung = $_POST['noidung'];
    $type = $_POST['type'];

    $checkResult = $blog->insertBlog($img_blog, $name, $noidung, $type);
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