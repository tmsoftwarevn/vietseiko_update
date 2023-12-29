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
$form_contact = new Form_contact;

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
    $mail->Username = 'khongtenzzz1111@gmail.com';
    $mail->Password = 'pmoe okjr homu kzzf';

    // Điền tên và địa chỉ email của bạn
    // $mail->setFrom('namtpps23493@fpt.edu.vn', 'Your Name');
    $mail->CharSet = "UTF-8";

    $mail->Subject = 'Mail từ website VietSeiko';
    $mail->Body = "Bạn nhận được liên hệ từ <br><br>";
    $mail->Body .= "Họ tên: $name<br>";
    $mail->Body .= "Email: $email<br>";
    $mail->Body .= "Số điện thoại: $phone<br>";
    
    ///

    // Điền địa chỉ email của người nhận vào dòng dưới đây
    $mail->addAddress('thphongboy@gmail.com');

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
    );
    header('Location: cam-on');

    exit();
  } catch (Exception $e) {
    echo "Có lỗi xảy ra: " . $e->getMessage();
  }
}
