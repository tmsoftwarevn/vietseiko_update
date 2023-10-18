<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        // Lấy dữ liệu từ form
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $message = isset($_POST['message']) ? $_POST['message'] : '';

        // Cấu hình email
        $to = "phuongnamkante@gmail.com";
        $subject = "Liên hệ từ website";
        $headers = "From: $email\r\n";

        // Nội dung email
        $body = "Bạn nhận được liên hệ từ website\n";
        $body .= "Họ tên: $name\n";
        $body .= "Nơi đăng ký làm việc: $address\n";
        $body .= "Email: $email\n";
        $body .= "Số điện thoại: $phone\n";
        $body .= "Nội dung:\n$message";

        // Gửi email
        if (mail($to, $subject, $body, $headers)) {
            // Nếu email gửi thành công
            $response = "Gửi email thành công!";
        } else {
            // Nếu có lỗi xảy ra khi gửi email
            $response = "Có lỗi xảy ra, vui lòng thử lại.";
        }

        // Hiển thị thông báo trong email
        $body .= "\n\nTrạng thái: $response";

        // Gửi email với thông báo
        if (mail($to, $subject, $body, $headers)) {
            // Nếu email gửi thành công
            $response = "Gửi email thành công!";
        } else {
            // Nếu có lỗi xảy ra khi gửi email
            $response = "Có lỗi xảy ra, vui lòng thử lại.";
        }
    }



    header('Location: thank-you.html');

}
?>