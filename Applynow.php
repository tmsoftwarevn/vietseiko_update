<?php
    require_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />
    <link rel="icon" href="public/images/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="public/images/favicon.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->

    <link rel="stylesheet" type="text/css" href="public/css/apply-now.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 offset-sm-3 bordered-element p-4 bg-white rounded shadow">
                <div class="card">
                    <p class="fw-bold text-primary mb-0">Ứng Tuyển Vị Trí</p>
                    <h4 class="mb-3">Nhân Viên Tư Vấn</h4>
                    <p>Công Ty TNHH VIETSEIKO</p>
                </div>
                <div class="card-body with-scroll">
                    <div class="group text-center mb-4">
                        <img src="images/apply-job.png" alt="" class="rounded-circle"
                            style="width: 128px; height: 128px;">
                        <p class="mt-2">Bạn chưa có hồ sơ nào</p>
                    </div>
                    <form id="applicationForm" action="" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <a href="#" class="btn btn-primary btn-custom btn-block">Tạo Hồ Sơ Trực Tiếp</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-info btn-block button-upload">
                                    <label class="upload-option">
                                        <input type="file" class="upload-input" accept=".pdf, .doc, .docx"
                                            onchange="handleFileUpload(event)">
                                        <span class="svicon-upload mr-2"></span>
                                    </label>
                                </button>
                                <div id="error-message" class="text-danger mt-2"></div>
                                <p id="uploadSuccess" class="text-success mt-2"></p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Họ Và Tên <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded" id="fullName"
                                placeholder="Nhập họ và tên của bạn" required>
                            <span id="fullNameError" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control rounded" id="email"
                                placeholder="Nhập địa chỉ email của bạn" required>
                            <span id="emailError" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Số Điện Thoại <span
                                    class="text-danger">*</span></label>
                            <input type="tel" class="form-control rounded" id="phoneNumber"
                                placeholder="Nhập số điện thoại của bạn">
                            <span id="phoneNumberError" class="text-danger"></span>
                        </div>
                    </form>
                </div>
                <hr>
                <div class="card-footer mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" id="submitButton" type="submit">Nộp Hồ Sơ</button>
                </div>
               
            </div>
        </div>
    </div>
    <script>
        var fullNameField = document.getElementById("fullName");
        var emailField = document.getElementById("email");
        var phoneNumberField = document.getElementById("phoneNumber");
        var fullNameError = document.getElementById("fullNameError");
        var emailError = document.getElementById("emailError");
        var phoneNumberError = document.getElementById("phoneNumberError");




        var submitButton = document.getElementById("submitButton");
        submitButton.addEventListener("click", function (event) {
            fullNameError.textContent = "";
            emailError.textContent = "";
            phoneNumberError.textContent = "";

            if (fullNameField.value === "") {
                fullNameError.textContent = "Họ và Tên không được để trống";
                event.preventDefault();
            }

            if (emailField.value === "") {
                emailError.textContent = "Email không được để trống";
                event.preventDefault();
            } else if (!isValidEmail(emailField.value)) {
                emailError.textContent = "Email không đúng định dạng";
                event.preventDefault();
            }

            if (phoneNumberField.value === "") {
                phoneNumberError.textContent = "Số Điện Thoại không được để trống";
                event.preventDefault();
            } else if (!isValidPhoneNumber(phoneNumberField.value)) {
                phoneNumberError.textContent = "Số Điện Thoại không đúng định dạng";
                event.preventDefault();
            }

            function isValidEmail(email) {
                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                return emailPattern.test(email);
            }
            // function containsNumber(str) {
            //     return /\d/.test(str);
            // }
            function isValidPhoneNumber(phoneNumber) {
                phoneNumber = phoneNumber.replace(/[\s()-]/g, "");
                return phoneNumber.length <= 12 && !containsNumber(phoneNumber);
            }
        });
        //lưu ảnh 
        function handleFileUpload(event) {
            const fileInput = event.target;
            const file = fileInput.files[0];
            const errorMessageBox = document.getElementById('error-message');
            const uploadSuccess = document.getElementById('uploadSuccess');

            if (file) {
                const allowedExtensions = ['.pdf', '.doc', '.docx'];
                const maxFileSize = 2 * 1024 * 1024;

                const fileExtension = file.name.toLowerCase().substring(file.name.lastIndexOf('.'));
                if (!allowedExtensions.includes(fileExtension) || file.size > maxFileSize) {
                    errorMessageBox.textContent = 'File upload không hợp lệ. File phải có định dạng .pdf, .doc, .docx và dung lượng <= 2MB.';
                    uploadSuccess.textContent = '';
                    fileInput.value = '';
                } else {
                    errorMessageBox.textContent = '';
                    uploadSuccess.textContent = 'Tải lên thành công: ' + file.name;
                }
            }
        }
        // thông tin người dùng đăng nhập
        const loggedInUser = {
            name: "John Doe",
            email: "johndoe@example.com"
        };

        // Cập nhật giá trị của form sau khi đăng nhập thành công
        document.getElementById('fullName').value = loggedInUser.name;
        document.getElementById('email').value = loggedInUser.email;
    </script>
</body>

</html>

<?php
    require_once "footer.php";
?>