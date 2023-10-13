
<?php
require "./models/hinhthuc.php";
require "config.php";

$hinhthuc = new Hinhthuc;


if ($_FILES['fileUpload']['name'] == "") {
    header("location: ./new-loaicongviec.php");
    die;
}
$hinhthuc->addHinhthuc($_POST['name_hinhthuc'], $_FILES['fileUpload']['name']);
$target_dir = "/images/";
$target_file = $target_dir . basename($_FILES['fileUpload']['name_hinhthuc']);
move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_file);
header("location: ./hinh-thuc.php");

?>