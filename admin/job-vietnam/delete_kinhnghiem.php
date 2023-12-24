<?php
require_once "../config.php";
require_once "../models/db.php";
require_once "../models/kinh_nghiem.php";

$nn = new Kinh_nghiem;
if (isset($_GET['id_kinhnghiem']) == TRUE) {
    $nn::deleteKinhnghiem($_GET['id_kinhnghiem']);
}

$url =  $_SERVER['HTTP_REFERER'];

header("Location: $url");

?>