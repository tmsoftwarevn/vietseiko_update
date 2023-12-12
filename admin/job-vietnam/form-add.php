<?php
require "../models/job.php";
require "../models/nganhnghe.php";
require "../models/hinhthuc.php";
require "../config.php";
require_once "../models/db.php";

$job = new Job;
?>
<?php
if (isset($_POST['submit']) == TRUE) {

    $valiFile = TRUE;
    $target_dir = "../../images/jobs-company/vietnam/";
    $fileName = time() . $_FILES['fileUpload']['name'];
    $fileTmpName = $_FILES['fileUpload']['tmp_name'];
    $fileSize = $_FILES['fileUpload']['size'];
    $fileError = $_FILES['fileUpload']['error'];
    $fileType = $_FILES['fileUpload']['type'];

    if ($fileName && $fileTmpName) {
        $final_path_image = $fileName;

        // Giới hạn kích thước tối đa của file (5MB)
        $allowed = array('jpeg', 'png', 'jpg');
        $filenameCheck = $_FILES['fileUpload']['name'];
        $ext = pathinfo($filenameCheck, PATHINFO_EXTENSION);


        if (!in_array($ext, $allowed)) {
            echo 'chỉ được tải lên file gồm jpeg, png hoặc jpg';
            return;
        }
        if ($fileSize > 5242880) {
            $errors[] = 'Kích thước file không được vượt quá 5 MB';
            return;
        }
        move_uploaded_file($fileTmpName, $target_dir . $fileName);
    } else {
        echo 'không có file ảnh nào';
        return;
    }
}

//Them du lieu vao CSDL: Neu upload duoc anh thi moi insert:

$checkResult  = -1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['tencongty'];
    $img_cty = $fileName;
    $chucvu = $_POST['chucvu'];
    $id_nganhnghe = $_POST['nganhnghe'];
    $capbac = $_POST['capbac'];
    $soluong = $_POST['soluong'];
    $id_kinhnghiem = $_POST['kinhnghiem'];
    //$ngaydang = $_POST['ngaydang'];
    $ngaycuoicung = $_POST['ngaycuoicung'];
    $gioitinh = $_POST['gioitinh'];
    $mucluong = $_POST['mucluong'];
    $diachi = $_POST['diachi'];
    $diachi_cuthe = $_POST['diachicuthe'];
    $id_hinhthuc = $_POST['hinhthuc'];
    $mota = htmlspecialchars($_POST['mota']);
    $yeucau = htmlspecialchars($_POST['yeucau']);
    $quyenloi = htmlspecialchars($_POST['quyenloi']);
    $ungtuyen = htmlspecialchars($_POST['ungtuyen']);

    // echo 'name image: ' . $img_cty;

    //echo 'check nganh nghe: ' . $id_nganhnghe;
    // echo 'check' . $name, $img_cty, $chucvu, $id_nganhnghe, $capbac, $soluong, $id_kinhnghiem, $ngaycuoicung, $gioitinh, $mucluong, $diachi, $diachi_cuthe, $id_hinhthuc, $mota, $yeucau, $quyenloi;
    // return;

    $checkResult = $job->insertJob($name, $chucvu, $capbac, $img_cty, $id_nganhnghe, $id_hinhthuc, $soluong, $id_kinhnghiem, $ngaycuoicung, $gioitinh, $mucluong, $diachi, $diachi_cuthe, $mota, $yeucau, $quyenloi,$ungtuyen);
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

