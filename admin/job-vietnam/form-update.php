<?php
require "../models/job.php";
require "../models/nganhnghe.php";
require "../models/hinhthuc.php";
require "../config.php";
require_once "../models/db.php";

$job = new Job;
$nganhnghe = new Nganhnghe;
$nganhngheAdmin = new Nganhnghe;
$hinhthuc = new Hinhthuc;
$hinhthucAdmin = new Hinhthuc;
?>
<?php
// if (isset($_POST['submit']) == TRUE) {
//     $valiFile = TRUE;

//     $target_dir = "../images/jobs-company";

//     $fileName = $_FILES['fileUpload']['name'];
//     $fileTmpName = $_FILES['fileUpload']['tmp_name'];
//     $fileSize = $_FILES['fileUpload']['size'];
//     $fileError = $_FILES['fileUpload']['error'];
//     $fileType = $_FILES['fileUpload']['type'];

//     move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_dir . $_FILES["fileUpload"]["name"]);
// }

//Them du lieu vao CSDL: Neu upload duoc anh thi moi insert:

$checkResult  = -1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_job = $_POST['id_job'];
    $name = $_POST['tencongty'];
    //$img_cty = $_FILES['fileUpload']['name'];
    $chucvu = $_POST['chucvu'];
    $id_nganhnghe = $_POST['nganhnghe'];
    $capbac = $_POST['capbac'];
    $soluong = $_POST['soluong'];
    $kinhnghiem = $_POST['kinhnghiem'];

    $ngaycuoicung = $_POST['ngaycuoicung'];

    $gioitinh = $_POST['gioitinh'];
    $mucluong = $_POST['mucluong'];
    $diachi = $_POST['diachi'];
    $diachi_cuthe = $_POST['diachicuthe'];
    $id_hinhthuc = $_POST['hinhthuc'];
    $mota = htmlspecialchars($_POST['mota']);
    $yeucau = htmlspecialchars($_POST['yeucau']);
    $quyenloi = htmlspecialchars($_POST['quyenloi']);
    $id_trangthai = $_POST['trangthai'];

    echo 'check data' . $name . $chucvu . $id_nganhnghe . $capbac . $soluong . $kinhnghiem . $ngaycuoicung, $gioitinh, $mucluong, $diachi, $diachi_cuthe, $id_hinhthuc, $mota, $yeucau, $quyenloi, $id_trangthai;

    $checkResult = Job::updateJob($id_job, $name, $chucvu, $id_nganhnghe, $capbac, $soluong, $kinhnghiem, $ngaydang, $ngaycuoicung, $gioitinh, $mucluong, $diachi, $diachi_cuthe, $id_hinhthuc, $mota, $yeucau, $quyenloi, $id_trangthai, $feature);
}
$url =  $_SERVER['HTTP_REFERER'] . '&checkResult=' . $checkResult;

header("Location: $url");

?>