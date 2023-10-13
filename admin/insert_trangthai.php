
<?php
require "./models/trangthai.php";
require "config.php";

$trangthai = new Trangthai;


if ($_FILES['fileUpload']['name'] == "") {
    header("location: ./new-trangthai.php");
    die;
}
$trangthai->addTrangthai($_POST['name_trangthai'], $_FILES['fileUpload']['name']);
$target_dir = "/images/";
$target_file = $target_dir . basename($_FILES['fileUpload']['name_trangthai']);
move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_file);
header("location: ./job-trangthai.php");

?>