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