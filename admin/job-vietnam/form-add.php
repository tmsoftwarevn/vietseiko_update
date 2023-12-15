<?php
require "../models/job.php";
require "../models/nganhnghe.php";
require "../models/hinhthuc.php";
require "../config.php";
require_once "../models/db.php";

$job = new Job;

?>
<?php

$checkResult  = -1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['tencongty'];
    $chucvu = $_POST['chucvu'];
    $id_nganhnghe = $_POST['nganhnghe'];
    $capbac = $_POST['capbac'];
    $soluong = $_POST['soluong'];
    $id_kinhnghiem = $_POST['kinhnghiem'];
   
    $ngaycuoicung = $_POST['ngaycuoicung'];
    $gioitinh = $_POST['gioitinh'];
    $mucluong = $_POST['mucluong'];
    $diachi = $_POST['diachi'];
    $diachi_cuthe = $_POST['diachicuthe'];
    $id_hinhthuc = $_POST['hinhthuc'];
    $mota = $_POST['mota'];
    $yeucau = $_POST['yeucau'];
    $quyenloi = $_POST['quyenloi'];
    $ungtuyen = $_POST['ungtuyen'];

    // echo 'name image: ' . $img_cty;

    //echo 'check nganh nghe: ' . $id_nganhnghe;
    // echo 'check' . $name, $img_cty, $chucvu, $id_nganhnghe, $capbac, $soluong, $id_kinhnghiem, $ngaycuoicung, $gioitinh, $mucluong, $diachi, $diachi_cuthe, $id_hinhthuc, $mota, $yeucau, $quyenloi;
    // return;

    $checkResult = $job->insertJob($name, $chucvu, $capbac, $id_nganhnghe, $id_hinhthuc, $soluong, $id_kinhnghiem, $ngaycuoicung, $gioitinh, $mucluong, $diachi, $diachi_cuthe, $mota, $yeucau, $quyenloi,$ungtuyen);
    //return;
}

$url =  $_SERVER['HTTP_REFERER'];

// custom path để click 2 lần submit ko bị lỗi
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

