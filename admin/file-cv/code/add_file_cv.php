
<?php
session_start();
require "../../config.php";
require_once "../../models/db.php";
require "../../models/apply.php";

$apply = new Apply;

?>
<?php

if (isset($_POST['submit']) == TRUE) {

    $file_name = time() . $_FILES["file"]["name"];
    $file_type = $_FILES["file"]["type"];
    $fileTmpName = $_FILES["file"]["tmp_name"];
    $target_dir = "../list-file/";

    if ($file_name && $fileTmpName) {
        move_uploaded_file($fileTmpName, $target_dir . $file_name);
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
    $id_job = $_POST['id_job'];
    
    $checkResult = $apply->insert_apply($name,$email,$phone,$namsinh,$mucluong,$khuvuc,$vi_tri,$link_cv,$id_job);
}

if($checkResult >0){
    $_SESSION['status'] = "Đã gửi cv thành công!";
}else{
    echo 'something went wrong';
}
$url =  $_SERVER['HTTP_REFERER'];
header("Location: $url");


// $path = $url;
// $parts = explode('&', $path);
// if (count($parts) > 1) {
//     array_pop($parts);
//     $newpath = implode('&', $parts);
//     header("Location: $newpath&checkResult=$checkResult");
// } else {
//     header("Location: $url&checkResult=$checkResult");
// }

?>

