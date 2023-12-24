<?php
require_once "../config.php";
require_once "../models/db.php";
require_once "../models/hinhthuc.php";

$nn = new Hinhthuc;
if (isset($_GET['id_hinhthuc']) == TRUE) {
    $nn::deleteHinhthuc_ByTypeID($_GET['id_hinhthuc']);
}

$url =  $_SERVER['HTTP_REFERER'];

header("Location: $url");

?>