<?php
require_once "../config.php";
require_once "../models/db.php";
require_once "../models/contact.php";

$lh = new Contact;;
if (isset($_GET['id_contact']) == TRUE) {
    $lh::delete_contact($_GET['id_contact']);
}

$url =  $_SERVER['HTTP_REFERER'];

header("Location: $url");

?>