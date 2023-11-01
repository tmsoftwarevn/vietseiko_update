<?php
require "./models/job.php";
require "./models/nganhnghe.php";
require "./models/hinhthuc.php";
require "config.php";
require_once "models/db.php";

$job = new Job;
$nganhnghe = new Nganhnghe;
$nganhngheAdmin = new Nganhnghe;
$hinhthuc = new Hinhthuc;
$hinhthucAdmin = new Hinhthuc;
?>
<?php
if (isset($_POST['submit']) == TRUE) {
    $valiFile = TRUE;

    $target_dir = "../images/jobs-company";


    //Du lieu file:
    $fileName = $_FILES['fileUpload']['name'];
    $fileTmpName = $_FILES['fileUpload']['tmp_name'];
    $fileSize = $_FILES['fileUpload']['size'];
    $fileError = $_FILES['fileUpload']['error'];
    $fileType = $_FILES['fileUpload']['type'];

    //Upload va kiem tra xem file da upload hay chua:
    move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_dir . $_FILES["fileUpload"]["name"]);
}

//Them du lieu vao CSDL: Neu upload duoc anh thi moi insert:
$insertResult = -1;
if (isset($_POST['name']) == TRUE) {
    $name = $_POST['name'];
    $img_cty = $_FILES['fileUpload']['name'];
    $chucvu = $_POST['chucvu'];
    $id_nganhnghe = $_POST['id_nganhnghe'];
    $capbac = $_POST['capbac'];
    $soluong = $_POST['soluong'];
    $kinhnghiem = $_POST['kinhnghiem'];
    $ngaydang = (new DateTime('now'))->format('Y-m-d H:i:s');
    $ngaycuoicung = (new DateTime('now'))->format('Y-m-d H:i:s');
    $ngaygan = (new DateTime('now'))->format('Y-m-d H:i:s');
    $gioitinh = $_POST['gioitinh'];
    $mucluong = $_POST['mucluong'];
    $diachi = $_POST['diachi'];
    $diachi_cuthe = $_POST['diachi_cuthe'];
    $id_hinhthuc = $_POST['id_hinhthuc'];
    $mota = $_POST['mota'];
    $yeucau = $_POST['yeucau'];
    $quyenloi = $_POST['quyenloi'];
    $id_trangthai = $_POST['id_trangthai'];
    $feature = $_POST['feature'];
    $create_at = (new DateTime('now'))->format('Y-m-d H:i:s');
    $insertResult = Job::insertJob($name, $img_cty, $chucvu, $id_nganhnghe, $capbac, $soluong, $kinhnghiem, $ngaydang, $ngaycuoicung, $gioitinh, $mucluong, $diachi, $diachi_cuthe ,$id_hinhthuc, $mota, $yeucau, $quyenloi, $id_trangthai, $feature, $create_at);
}
header("Location: form.php?functionType=job&insertResult=$insertResult");

?>