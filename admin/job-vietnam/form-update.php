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
if (isset($_POST['submit']) == TRUE) {

    $final_path_image = $_POST['path-image'];
    //$path_image = $_POST['path-image'];

    $valiFile = TRUE;
    $target_dir = "../../images/jobs-company/vietnam/";
    $fileName = time() . $_FILES['fileUpload']['name'];
    $fileTmpName = $_FILES['fileUpload']['tmp_name'];
    $fileSize = $_FILES['fileUpload']['size'];
    $fileError = $_FILES['fileUpload']['error'];
    $fileType = $_FILES['fileUpload']['type'];

    //check image đã có rồi ko import nữa

    if (!$final_path_image && !$fileName) {
        echo 'không có file ảnh nào';
        return;
    }
    if ($fileName && $fileTmpName) {
        $final_path_image = $fileName;

        // Giới hạn kích thước tối đa của file (5MB)
        $allowed = array('jpeg', 'png', 'jpg');
        $filenameCheck = $_FILES['fileUpload']['name'];
        $ext = pathinfo($filenameCheck, PATHINFO_EXTENSION);

        if (!$fileName || !$fileTmpName ) {
            echo 'không có file ảnh nào';
            return;
        }

        if (!in_array($ext, $allowed)) {
            echo 'chỉ được tải lên file gồm jpeg, png hoặc jpg';
            return;
        }
        if ($fileSize > 5242880) {
            $errors[] = 'Kích thước file không được vượt quá 5 MB';
            return;
        }
        echo 'chekk path: ' . $final_path_image;
        move_uploaded_file($fileTmpName, $target_dir . $fileName);
    }
}

//Them du lieu vao CSDL: Neu upload duoc anh thi moi insert:

$checkResult  = -1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_job = $_POST['id_job'];
    $name = $_POST['tencongty'];
    $img_cty = $final_path_image;
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
    $mota = htmlspecialchars($_POST['mota']);
    $yeucau = htmlspecialchars($_POST['yeucau']);
    $quyenloi = htmlspecialchars($_POST['quyenloi']);
    $id_trangthai = $_POST['trangthai'];
    $ungtuyen = htmlspecialchars($_POST['ungtuyen']);
    //echo 'check nganh nghe: ' . $id_nganhnghe;
    //echo 'check data' . $name . $chucvu . $id_nganhnghe . $capbac . $soluong . $kinhnghiem . $ngaycuoicung, $gioitinh, $mucluong, $diachi, $diachi_cuthe, $id_hinhthuc, $mota, $yeucau, $quyenloi, $id_trangthai;
    $checkResult = Job::updateJob($id_job, $name, $chucvu, $capbac,  $id_nganhnghe, $id_hinhthuc, $soluong, $id_kinhnghiem, $ngaycuoicung, $gioitinh, $mucluong, $diachi, $diachi_cuthe,  $mota, $yeucau, $quyenloi, $id_trangthai, $img_cty,$ungtuyen);
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

