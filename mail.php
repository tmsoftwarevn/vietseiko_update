<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  try {
    // Lấy dữ liệu từ biểu mẫu liên hệ
    $name = $_POST['your-name'];
    $email = $_POST['your-email'];
    $phone = $_POST['your-tel'];
    $company = $_POST['your-company'];
    $message = $_POST['your-message'];

    // Tạo đối tượng PHPMailer
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->isHTML(true);

    // Điền thông tin email của bạn vào dòng dưới đây
    $mail->Username = 'phuongnamkante@gmail.com';
    $mail->Password = 'sdvn xvio boll lawm';

    // Điền tên và địa chỉ email của bạn
    // $mail->setFrom('namtpps23493@fpt.edu.vn', 'Your Name');
    $mail->Subject = 'Liên hệ từ website';
    $mail->Body = "Bạn nhận được liên hệ từ website<br><br>";
    $mail->Body .= "Họ tên: $name<br>";
    $mail->Body .= "Email: $email<br>";
    $mail->Body .= "SĐT: $phone<br>";
    $mail->Body .= "Nơi đăng ký làm việc: $company<br><br>";
    $mail->Body .= "Nội dung tin nhắn:<br>$message";

    // Điền địa chỉ email của người nhận vào dòng dưới đây
    $mail->addAddress('phuongnamkante@gmail.com');

    // Gửi email và kiểm tra kết quả
    if (!$mail->send()) {
      throw new Exception("Lỗi khi gửi email");
    }

    // Chuyển hướng đến trang cảm ơn sau khi gửi email thành công
    header('Location: thank-you.php');
    exit();
  } catch (Exception $e) {
    echo "Có lỗi xảy ra: " . $e->getMessage();
  }
}
?>