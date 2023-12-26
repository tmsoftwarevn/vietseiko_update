<?php
require "../models/job_vietseiko.php";
require "../models/nganhnghe.php";
require "../models/hinhthuc.php";
require "../config.php";
require_once "../models/db.php";
require "../models/slug.php";
$slug = new TextUtil;
$job = new Vietseiko;

?>
<?php

$checkResult  = -1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_cty = $_POST['cty'];
    $id_nganhnghe = $_POST['nganhnghe'];
    $id_kinhnghiem = $_POST['kinhnghiem'];

    $id_gioitinh = $_POST['gioitinh'];
    $id_hinhthuc = $_POST['hinhthuc'];
    $ngaycuoicung = $_POST['ngaycuoicung'];

    $chucvu = $_POST['chucvu'];
    $capbac = $_POST['capbac'];
    $soluong = $_POST['soluong'];
    
    $job_code = $_POST['job-code'];
    $age = $_POST['age'];
    // $ngonngu = $_POST['ngonngu'];

    $mucluong = $_POST['mucluong'];
    $diachi = $_POST['diachi'];
    $diachi_cuthe = $_POST['diachicuthe'];
   
    $mota = $_POST['mota'];
    $yeucau = $_POST['yeucau'];
    $quyenloi = $_POST['quyenloi'];
    $other = $_POST['other'];

    $slug_custom = $slug::sanitize($chucvu);

    $checkResult = $job->insertJob($chucvu, $capbac, $job_code, $id_nganhnghe, $id_hinhthuc, $soluong, $id_kinhnghiem, $ngaycuoicung, $id_gioitinh, $mucluong, $diachi, $diachi_cuthe, $mota, $yeucau, $quyenloi, $other, $id_cty, $age,$slug_custom);
    
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

