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
/* if (isset($_POST['Submit']) == TRUE) {
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
} */

//Them du lieu vao CSDL: Neu upload duoc anh thi moi insert:
$insertResult = -1;

$tencongty = $_POST['tencongty'];
$chucvu = $_POST['chucvu'];
$img_cty = $_FILES['fileUpload']['name'];
$id_nganhnghe = $_POST['id_nganhnghe'];
$id_hinhthuc = $_POST['id_hinhthuc'];
$soluong = $_POST['soluong'];
$kinhnghiem = $_POST['kinhnghiem'];
$ngaydang = (new DateTime('now'))->format('Y-m-d H:i:s');
$ngaycuoicung = (new DateTime('now'))->format('Y-m-d H:i:s');
$ngaygan = (new DateTime('now'))->format('Y-m-d H:i:s');
$gioitinh = $_POST['gioitinh'];
$mucluong = $_POST['mucluong'];
$diachi = $_POST['diachi'];
$mota = $_POST['mota'];
$yeucau = $_POST['yeucau'];
$quyenloi = $_POST['quyenloi'];
$id_trangthai = $_POST['id_trangthai'];
$create_at = (new DateTime('now'))->format('Y-m-d H:i:s');
$insertResult = Job::insertJob($tencongty, $chucvu, $img_cty, $id_nganhnghe, $id_hinhthuc, $soluong, $kinhnghiem, $ngaydang, $ngaycuoicung, $ngaygan, $gioitinh, $mucluong, $diachi, $mota, $yeucau, $quyenloi, $id_trangthai, $create_at);

header("Location: new-job.php?functionType=job&insertResult=$insertResult");


/* if (isset($_FILES['fileUpload'])) {
    if (is_numeric($_POST['name'] == "" || $_POST['mucluong'] == null)) {
        echo "die";
    }
    $target_dir = "../image/product/";
    $target_file = $target_dir . basename($_FILES['fileUpload']['name']);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        // header("location: editproduct.php");
        echo "File not supported";
    }
    $job->addJob(
        $_POST['tencongty'],
        $_POST['chucvu'],
        $_POST['id_nganhnghe'],
        $_POST['id_hinhthuc'],
        $_FILES['fileUpload']['name'],
        $_POST['soluong'],
        $_POST['kinhnghiem'],
        $_POST['ngaydang'],
        $_POST['ngaycuoicung'],
        $_POST['ngaygan'],
        $_POST['gioitinh'],
        $_POST['mucluong'],
        $_POST['diachi'],
        $_POST['mota'],
        $_POST['yeucau'],
        $_POST['quyenloi'],
        $_POST['id_trangthai'],
        $_POST['created_at']
    );
    move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_file);
    header("location: job-list.php");
} else {
    $job->addJobWOImg(
        $_POST['tencongty'],
        $_POST['chucvu'],
        $_POST['id_nganhnghe'],
        $_POST['id_hinhthuc'],
        $_POST['soluong'],
        $_POST['kinhnghiem'],
        $_POST['ngaydang'],
        $_POST['ngaycuoicung'],
        $_POST['ngaygan'],
        $_POST['gioitinh'],
        $_POST['mucluong'],
        $_POST['diachi'],
        $_POST['mota'],
        $_POST['yeucau'],
        $_POST['quyenloi'],
        $_POST['id_trangthai'],
        $_POST['created_at']
    );
    header("location: job-list.php");
} */
?>