<?php
require_once "../config.php";
require_once "../models/db.php";
require_once "../models/tin-tuc.php";

$blog = new Tin_tuc;

$blog::deleteBlog_ByTypeID($_GET['id_blog']);
$url =  $_SERVER['HTTP_REFERER'];

$path = $url;

$parts = explode('/', $path);

array_pop($parts);

$newpath = implode('/', $parts);
//echo 'check path: '.$newpath;
header("Location: $newpath/tintuc-list.php");

?>