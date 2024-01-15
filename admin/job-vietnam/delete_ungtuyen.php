<?php
require_once "../config.php";
require_once "../models/db.php";
require_once "../models/ungtuyen_nhaptay.php";

$u = new Ungtuyen_nhaptay;
if (isset($_GET['id']) == TRUE) {
    $u::delete($_GET['id']);
}

$url =  $_SERVER['HTTP_REFERER'];

header("Location: $url");

?>