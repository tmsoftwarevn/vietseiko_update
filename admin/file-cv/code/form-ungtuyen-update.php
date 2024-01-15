
<?php

require "../../config.php";
require_once "../../models/db.php";
require "../../models/ungtuyen_nhaptay.php";

$apply = new Ungtuyen_nhaptay;

?>
<?php


if (isset($_POST['submit']) == TRUE) {
    $file_name = $_POST['file_old'];
   
    if ($_FILES["file"]["name"]) {

        $file_name = time() . $_FILES["file"]["name"];
        $file_type = $_FILES["file"]["type"];
        $fileTmpName = $_FILES["file"]["tmp_name"];
        $target_dir = "../nhaptay-ungtuyen/";

        /// xóa file cũ khi update
        $file_old = $_POST['file_old'];
        $file_path = '../nhaptay-ungtuyen/' . $file_old . '';

        if (file_exists($file_path)) {
            if (unlink($file_path)) {
                echo 'File was successfully deleted.';
            } else {
                echo 'Unable to delete the file.';
            }
        } else {
            echo 'File does not exist.';
        }
        // thêm mới
        if ($file_name && $fileTmpName) {
            move_uploaded_file($fileTmpName, $target_dir . $file_name);
        }
    }
}

$checkResult  = -1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $link_cv = $file_name;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $namsinh = $_POST['namsinh'];
    $mucluong = $_POST['mucluong'];
    $khuvuc = $_POST['khuvuc'];

    $vi_tri = $_POST['vitri'];
    $id_ungtuyen = $_POST['id'];


    $checkResult = $apply->update($id_ungtuyen, $name, $email, $phone, $namsinh, $mucluong, $khuvuc, $vi_tri, $link_cv);
}


$url =  $_SERVER['HTTP_REFERER'];

$path = $url;

$parts = explode('&', $path);
if (count($parts) > 2) {
    array_pop($parts);
    $newpath = implode('&', $parts);
    header("Location: $newpath&checkResult=$checkResult");
} else {
    header("Location: $url&checkResult=$checkResult");
}

?>

