<?php
require_once "../config.php";
require_once "../models/db.php";
require_once "../models/job_NB.php";

$jobNb = new Job_NB;

$jobNb->deleteJobByID($_GET['id_job']);
$url =  $_SERVER['HTTP_REFERER'];

$path = $url;

$parts = explode('/', $path);

array_pop($parts);

$newpath = implode('/', $parts);
//echo 'check path: '.$newpath;
header("Location: $newpath/job_nb_list.php");

?>