
<?php
require "./models/nganhnghe.php";
require "config.php";

$nganhnghe = new Nganhnghe;


if ($_FILES['fileUpload']['name'] == "") {
    header("location: ./new-nganhnghe.php");
    die;
}
$nganhnghe->addNganhNghe($_POST['name_nganhnghe'], $_FILES['fileUpload']['name']);
$target_dir = "/images/";
$target_file = $target_dir . basename($_FILES['fileUpload']['name_nganhnghe']);
move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_file);
header("location: ./nganhnghe.php");

?>