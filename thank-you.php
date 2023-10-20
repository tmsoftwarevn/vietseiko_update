<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Cảm ơn</title>
    <link rel="stylesheet" href="public/css/thanks.css">
</head>

<body>

    <div class="message">
        <h1>Cảm ơn bạn đã gửi liên hệ!</h1>
        <p>Chúng tôi đã nhận được thông tin và sẽ liên hệ lại với bạn sớm nhất có thể.</p>
    </div>

    <div class="back-home">
        <a href="index.php">Quay lại trang chủ</a>
    </div>



</body>
<script>
    function validateForm() {
        // Lấy các trường dữ liệu
        var nameInput = document.querySelector('input[name="your-name"]');
        var emailInput = document.querySelector('input[name="your-email"]');
        var telInput = document.querySelector('input[name="your-tel"]');
        var companyInput = document.querySelector('input[name="your-company"]');
        var messageTextarea = document.querySelector('textarea[name="your-message"]');

        // Lấy các thẻ div chứa thông báo lỗi
        var nameError = document.querySelector('input[name="your-name"] + .error');
        var emailError = document.querySelector('input[name="your-email"] + .error');
        var telError = document.querySelector('input[name="your-tel"] + .error');
        var companyError = document.querySelector('input[name="your-company"] + .error');
        var messageError = document.querySelector('textarea[name="your-message"] + .error');

        // Thực hiện kiểm tra lỗi và cập nhật thông báo lỗi dưới mỗi trường dữ liệu
        var hasError = false;

        if (nameInput.value.trim() === "") {
            hasError = true;
            nameError.innerText = "Họ tên không được để trống";
        } else {
            nameError.innerText = "";
        }

        // Kiểm tra Email
        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (emailInput.value.trim() === "") {
            hasError = true;
            emailError.innerText = "Email không được để trống";
        } else if (!emailRegex.test(emailInput.value)) {
            hasError = true;
            emailError.innerText = "Email sai định dạng";
        } else {
            emailError.innerText = "";
        }

        // Kiểm tra SĐT
        var telRegex = /^\d{10,12}$/;
        if (telInput.value.trim() === "") {
            hasError = true;
            telError.innerText = "SĐT không được để trống";
        } else if (!telRegex.test(telInput.value)) {
            hasError = true;
            telError.innerText = "SĐT sai định dạng";
        } else {
            telError.innerText = "";
        }

        // Kiểm tra Nơi làm việc
        if (companyInput.value.trim() === "") {
            hasError = true;
            companyError.innerText = "Nơi làm việc không được để trống";
        } else {
            companyError.innerText = "";
        }

        // Kiểm tra nội dung
        if (messageTextarea.value.trim() === "") {
            hasError = true;
            messageError.innerText = "Nội dung không được để trống";
        } else if (messageTextarea.value.length > 200) {
            hasError = true;
            messageError.innerText = "Nội dung không được quá 200 ký tự";
        } else {
            messageError.innerText = "";
        }

        // Ngăn submit nếu có lỗi
        if (hasError) {
            return false;
        }

        return true;
    }
</script>

</html>