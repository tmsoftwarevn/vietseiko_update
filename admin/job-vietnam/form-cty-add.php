<?php

require "../config.php";
require_once "../models/db.php";
require "../models/cty.php";
$cty = new Congty;
?>
<?php
/// submit
$checkResult  = -1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['tencongty'];
    $img_logo = $_POST['logo'];
    
    $quymo = $_POST['quymo'];
    $thongtin = $_POST['thongtin'];
   
    $diachi = $_POST['diachi'];
    $type = $_POST['type'];


    $checkResult = $cty->insertCty($name, $img_logo, $quymo,$thongtin,$diachi,$type);

    $url =  $_SERVER['HTTP_REFERER'];

    // custom path để click 2 lần submit ko bị lỗi
    $path = $url;

    $parts = explode('&', $path);
    if (count($parts) > 2) {
        array_pop($parts);
        $newpath = implode('&', $parts);
        header("Location: $newpath&checkResult=$checkResult");
    } else {
        header("Location: $url&checkResult=$checkResult");
    }
}
?>