<?php
require_once "../config.php";
require_once "../models/db.php";
require_once "../models/image.php";

$img = new Image_f;
if (isset($_GET['id_banner']) == TRUE) {
    $img::delete_ByID($_GET['id_banner']);
}

$url =  $_SERVER['HTTP_REFERER'];

$path = $url;

$parts = explode('/', $path);

array_pop($parts);

$newpath = implode('/', $parts);
//echo 'check path: '.$newpath;
header("Location: $newpath/img-list.php");

?>