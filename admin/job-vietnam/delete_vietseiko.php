<?php
require_once "../config.php";
require_once "../models/db.php";
require_once "../models/job_vietseiko.php";

$job_kysu = new Vietseiko;
if (isset($_GET['id_job']) == TRUE) {
    $job_kysu::deleteJob_ByTypeID($_GET['id_job']);
}

$url =  $_SERVER['HTTP_REFERER'];

$path = $url;

$parts = explode('/', $path);

array_pop($parts);

$newpath = implode('/', $parts);

header("Location: $newpath/job_vietseiko_list.php");

?>