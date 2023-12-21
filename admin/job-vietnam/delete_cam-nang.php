<?php
require_once "../config.php";
require_once "../models/db.php";
require_once "../models/cam_nang.php";

$blog = new Cam_nang;

$blog::deleteBlog_ByTypeID($_GET['id_blog']);
$url =  $_SERVER['HTTP_REFERER'];

$path = $url;

$parts = explode('/', $path);

array_pop($parts);

$newpath = implode('/', $parts);
//echo 'check path: '.$newpath;
header("Location: $newpath/cam-nang-list.php");

?>