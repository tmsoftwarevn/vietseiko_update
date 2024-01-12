<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

require_once 'config.php';
require "models/db.php";
require "models/form-contact.php";
require "models/nganhnghe.php";

$form_contact = new Form_contact;
$name_nganhnghe = new Nganhnghe_f;

if (isset($_POST['submit']) == TRUE) {

  if ($_FILES["file"]["name"]) {
    $file_name = time() . $_FILES["file"]["name"];
    $file_type = $_FILES["file"]["type"];
    $fileTmpName = $_FILES["file"]["tmp_name"];
    $target_dir = "./admin/file-cv/list-file/";

    if ($file_name && $fileTmpName) {
      move_uploaded_file($fileTmpName, $target_dir . $file_name);
    }
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  try {
    // Lấy dữ liệu từ biểu mẫu liên hệ
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $luong = $_POST['luong'];

    $type = $_POST['type'];
    $nganhnghe = $_POST['nganhnghe'];

    $address = $_POST['address'];
    $address_h = $_POST['address-h'];

    $file = $file_name;
    $get_name_nn = $name_nganhnghe->getNganhngheName($nganhnghe);


    // return;
    // Tạo đối tượng PHPMailer
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->isHTML(true);

    // thông tin mk mail console

    $mail->Username = 'vietseikohanhdong@gmail.com';
    $mail->Password = 'vpoi kpzu brou firt';

    //thông tin người gửi
    $mail->setFrom($email, $name);

    //email người nhận
    // $recipientEmail = 'thphongboy@gmail.com';
    // $recipientName = 'vietseiko';

    $recipientEmail = 'admin@vietseiko.com';
    $recipientName = 'vietseiko';


    $mail->addAddress($recipientEmail, $recipientName);

    $mail->CharSet = "UTF-8";
    if ($type == 1) $job_name = 'Việc làm tại Việt Nam';
    if ($type == 2) $job_name = 'XKLD Nhật Bản';
    if ($type == 3) $job_name = 'Kỹ sư và thông dịch viên Nhật Bản';
    if ($type == 4) $job_name = 'Việc làm tại VietSeiko';

    $mail->Subject = 'Mail từ website VietSeiko: Liên Hệ';
    $mail->Body = "Bạn nhận được ứng viên liên hệ công việc thuộc: $job_name <br><br>";
    $mail->Body .= "Họ tên: $name<br>";
    $mail->Body .= "Email: $email<br>";
    $mail->Body .= "Số điện thoại: $phone<br>";

    $mail->Body .= "Mức lương mong muốn: $luong<br>";
    $mail->Body .= "Khu vực hiện tại: $address<br>";
    $mail->Body .= "Nơi mong muốn làm việc: $address_h<br>";
    $mail->Body .= "Ngành nghề: $get_name_nn <br>";

    ///

    // Điền địa chỉ email của người nhận vào dòng dưới đây
    //$mail->addAddress('admin@vietseiko.com');

    // Gửi email và kiểm tra kết quả
    if (!$mail->send()) {
      throw new Exception("Lỗi khi gửi email");
    }

    // Chuyển hướng đến trang cảm ơn sau khi gửi email thành công

    $form_contact->createInformationUser_lienhe(
      $name,
      $email,
      $phone,
      $luong,
      $type,
      $nganhnghe,
      $address,
      $address_h,
      $file
    );
    header('Location: cam-on');

    exit();
  } catch (Exception $e) {
    echo "Có lỗi xảy ra: " . $e->getMessage();
  }
}
