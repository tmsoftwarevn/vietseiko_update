<?php

require "../config.php";
require_once "../models/db.php";
require "../models/hinhanh-video.php";
$u = new Hinhanh_Video;
?>
<?php

$checkResult  = -1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_img'];
   
    $img = $_POST['image_f'];

    $checkResult = $u->update_hinhanh_video($id, $img);
    
    $url =  $_SERVER['HTTP_REFERER'];

    // custom path để click 2 lần submit ko bị lỗi
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