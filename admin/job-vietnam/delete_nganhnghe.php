<?php
require_once "../config.php";
require_once "../models/db.php";
require_once "../models/nganhnghe.php";

$nn = new Nganhnghe;
if (isset($_GET['id_nganhnghe']) == TRUE) {
    $nn::deleteNganhnghe_ByTypeID($_GET['id_nganhnghe']);
}

$url =  $_SERVER['HTTP_REFERER'];


header("Location: $url");

?>