<?php
require_once "../config.php";
require_once "../models/db.php";
require_once "../models/hinhanh-video.php";

$d = new Hinhanh_Video;
if (isset($_GET['id']) == TRUE) {
    $d::delete_byID($_GET['id']);
}

$url =  $_SERVER['HTTP_REFERER'];

header("Location: $url");
?>