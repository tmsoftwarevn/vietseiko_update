<?php
require_once "../config.php";
require_once "../models/db.php";
require_once "../models/review.php";

$r = new Review;

if (isset($_GET['id']) == TRUE) {
    $r->delete_review($_GET['id']);
}

$url =  $_SERVER['HTTP_REFERER'];

$path = $url;

$parts = explode('/', $path);

array_pop($parts);

$newpath = implode('/', $parts);
//echo 'check path: '.$newpath;
header("Location: $newpath/review-list.php");

?>