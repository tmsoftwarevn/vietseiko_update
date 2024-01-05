<?php

require "../config.php";
require_once "../models/db.php";
require "../models/image.php";
$image = new Image_f;
?>
<?php

$checkResult  = -1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id_img'];
    $name = $_POST['name'];
    $img = $_POST['image_f'];

    $checkResult = $image->update($id,$name,$img);
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