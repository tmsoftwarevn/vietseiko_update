<?php
require_once "../config.php";
require_once "../models/db.php";
require_once "../models/cty.php";

$cty = new Congty;

$cty::delete_Cty($_GET['id_cty']);
$url =  $_SERVER['HTTP_REFERER'];

$path = $url;

$parts = explode('/', $path);

array_pop($parts);

$newpath = implode('/', $parts);
//echo 'check path: '.$newpath;
header("Location: $newpath/company-list.php");

?>