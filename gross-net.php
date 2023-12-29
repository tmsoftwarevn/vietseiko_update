<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Bootstrap Column Example</title>
    <!-- Thêm Bootstrap CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .custom-bg {
            background-color: #fff;
            padding: 30px;
            /* border-radius: 8px; */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px
        }

        .result-section {
            display: flex;
            align-items: center;
            justify-content: start;
        }

        .result-title {
            margin-right: 20px;
        }

        .gross-to-net-button {
            display: flex;
            align-items: center;
            padding: 9px 10px;
            margin-right: 150px;
            background-color: #8ed0f6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .gross-to-net-button:hover {
            background-color: #2980b9;
        }

        .arrow-icon {
            width: 20px;
            height: 20px;
            margin: 0 5px;
        }

        label {
            margin-right: 1rem;
            flex: 1;
            max-width: 150px;
            overflow: hidden;
            text-overflow: ellipsis;
            flex: 2;
            margin-right: 10px;
            font-size: 16px;
            font-family: math;
        }

        .form-control {
            max-width: 50%;
            flex: 2;
        }

        .form-row {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 1rem;
        }

        .form-group {
            display: flex;
            align-items: center;
        }

        .form-group label {
            margin-right: 1rem;
            flex: 1;
            max-width: 170px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        input[type="radio"] {
            margin-right: 5px;
            vertical-align: middle;
        }

        input[type="radio"]:checked+label {
            font-weight: bold;
            color: #007bff;
        }

        label.required::after {
            content: "*";
            color: red;
            margin-left: 5px;
        }

        #grossSalary::placeholder {
            font-size: 16px;
            font-family: math;
        }

        #insuranceSalary::placeholder {
            font-size: 16px;
            font-family: math;
        }

        #dependents::placeholder {
            font-size: 16px;
            font-family: math;
        }

        #region option {
            font-size: 16px;
            font-family: math;
        }

        .required {
            font-size: 16px;
            font-family: math;
        }

        .input-with-vnd::after {
            content: "VND";
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .fas.fa-arrow-right {
            font-size: 1rem;
            color: #d18df9;
        }

        button {
            transition: background-color 0.3s ease;
            /* Hiệu ứng chuyển đổi màu nền trong 0.3 giây */
        }

        button:hover {
            background-color: #1f4778;
            /* Màu nền khi hover */
            color: #ffffff;
            /* Màu chữ khi hover */
        }

        .mr-2,
        .mx-2 {
            margin-right: 1.5rem !important;
        }

        /* // col-md-4 col-sm-12 */
        h2 {
            font-size: 26px;
            font-family: math;
            font-weight: bold;
            margin-bottom: 16px;
        }

        p.text-muted {
            font-size: 16px;
        }

        .font-weight-bold {
            font-weight: bold;
        }

        .text-secondary {
            color: #c4def6;
            font-size: 16px;
            font-family: math;
            /* Màu của chữ khi được hover */
        }

        /* Thiết lập kích thước và khoảng cách */
        .custom-container {
            padding: 3px 0;
            width: 100%;
            margin-top: 10px;
            background-color: #fff;

            border-radius: 6px;
        }


        /* Đoạn văn bản bên trong */
        .card-text {
            margin-bottom: 16px;
            font-family: math;
        }


        .custom-heading {
            padding-top: 20px;
            padding-bottom: 10px;
        }

        .custom-title {
            font-size: 32px;
            line-height: 46px;
            font-weight: 600;
            color: #333;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .custom-content {
            margin-top: 36px;
            font-size: 16px;
            font-family: math;
            /* Giảm kích thước font chữ */
            line-height: 1.6;
        }

        .custom-box {
            padding: 5px 24px;
            cursor: pointer;
            border: 2px solid rgb(0 123 255 / 5%);
            border-radius: 20px;
        }

        .faq-item {
            border-bottom: 3px solid #e5e5e5;
            padding: 5px 3px;
        }

        .faq-question {
            cursor: pointer;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .faq-icon {
            display: inline-block;
            margin-right: 8px;
        }

        /* Dành cho thiết bị có độ rộng màn hình <= 768px */
        @media (max-width: 768px) {
            .custom-bg {
                background-color: #ffffff;
            }
        }

        /* Dành cho thiết bị có độ rộng màn hình từ 768px đến 992px */
        @media (min-width: 768px) and (max-width: 992px) {
            .custom-bg {
                background-color: #ffffff;
            }
        }

        .faq-item {
            border-bottom: 3px solid #e5e5e51c;
            padding: 3px 0;
        }

        .faq-question {
            cursor: pointer;
            font-weight: bold;
        }

        .faq-answer {
            display: none;
        }

        /* // hiệu ứng icom */
        .faq-icon {
            transition: transform 0.3s;
            /* Hiệu ứng chuyển đổi */
        }

        .faq-icon.collapsed {
            transform: rotate(0deg);
            /* Không xoay */
        }

        .faq-icon.expanded {
            transform: rotate(180deg);
            /* Xoay 180 độ */
        }

        .faq-icon.collapsed {
            color: blue;
            /* Màu icon khi đóng */
        }

        .faq-icon.expanded {
            color: red;
            /* Màu icon khi mở */
        }

        .mt-4 h5,
        .mt-4 h6 {
            font-size: 16px;
            font-family: math;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .mt-4 ul {
            font-size: 16px;
            font-family: math;
            line-height: 1.6;
            margin-bottom: 15px;
            padding-left: 20px;
        }

        .mt-4 strong {
            font-weight: bold;
        }
    </style>
    <script>
        // Hàm xử lý khi nút được nhấp
        function handleButtonClick(type) {
            if (type === 'GROSS') {
                alert('Bạn đã nhấp vào GROSS');
            } else if (type === 'NET') {
                alert('Bạn đã nhấp vào NET');
            }
        }

        // Hiệu ứng icon
        function toggleAnswer(answerId) {
            const answer = document.getElementById(answerId);
            const icon = document.querySelector(`[onclick="toggleAnswer('${answerId}')"] .faq-icon`);

            if (answer.style.display === "none" || answer.style.display === "") {
                answer.style.display = "block";
                icon.classList.remove('collapsed');
                icon.classList.add('expanded');
            } else {
                answer.style.display = "none";
                icon.classList.remove('expanded');
                icon.classList.add('collapsed');
            }
        }



    </script>
</head>

<body>

    <div class="container" style="margin-top: 200px;">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12 custom-bg">
                <h2 class="text-center mb-4">CÔNG CỤ TÍNH LƯƠNG GROSS SANG NET</h2>
                <form>
                    <!-- Currency form group -->
                    <div class="form-group">
                        <label for="currency" class="required">Đơn vị tiền tệ</label>
                        <div>
                            <input type="radio" id="vnd" name="currency" value="VND" required>
                            <label for="vnd">VNĐ</label>

                            <input type="radio" id="usd" name="currency" value="USD">
                            <label for="usd">USD</label>
                        </div>
                    </div>

                    <!-- Gross Salary form group -->
                    <div class="form-group">
                        <label for="grossSalary" class="required">Lương thỏa thuận</label>
                        <input type="number" class="form-control input-with-vnd" id="grossSalary"
                            placeholder="Nhập số tiền, VD: 5,000,000" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="insuranceSalary " class="required">Mức lương đóng bảo hiểm</label>
                            <input type="number" class="form-control input-with-vnd" id="insuranceSalary"
                                placeholder="Theo lương thỏa thuận" required>
                        </div>

                        <!-- Other Salary checkbox -->
                        <div class="form-group">
                            <input type="checkbox" class="form-check-input" id="otherSalary">
                            <label class="form-check-label" for="otherSalary">Mức lương đóng bảo hiểm khác</label>
                            <i class="svicon svicon-question-circle ml-2 text-se-accent-100 cursor-pointer my-auto"></i>
                        </div>
                    </div>


                    <!-- Dependents form group -->
                    <div class="form-group">
                        <label for="dependents" class="required">Số người phụ thuộc</label>
                        <input type="number" class="form-control" id="dependents" placeholder="Nhập số người phụ thuộc">
                    </div>

                    <!-- Region dropdown -->
                    <div class="form-group">
                        <label for="region" class="required">Khu vực</label>
                        <select class="form-control" id="region">
                            <option value="1">Khu vực 1</option>
                            <option value="2">Khu vực 2</option>
                            <option value="3">Khu vực 3</option>
                        </select>
                    </div>
                    <hr>
                    <!-- Result Section -->
                    <div class="result-section d-flex align-items-center">
                        <!-- Kết quả: ở đây -->
                        <label class="result-title">Cách tính kết quả</label>
                        <!-- Sử dụng flex-grow để hai nút tự căn giữa -->
                        <div class="d-flex flex-grow-1 justify-content-center">
                            <!-- Gross to Net buttons -->
                            <button type="button"
                                class="px-3 py-2 font-semibold  mr-2 text-primary bg-primary-400 flex items-center mb-3 outline-none"
                                onclick="handleButtonClick('GROSS')">
                                GROSS
                                <i class="fas fa-arrow-right ml-1"></i>
                                NET
                            </button>
                            <!-- Net to Gross buttons -->
                            <button type="button"
                                class="px-3 py-2 font-semibold rounded-md mr-2 text-primary bg-primary-400 flex items-center mb-3 outline-none"
                                onclick="handleButtonClick('NET')">
                                NET
                                <i class="fas fa-arrow-right ml-1"></i>
                                GROSS
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 custom-bg">
                <h2 class="font-weight-bold mb-4">Giải thích lương Gross & Net</h2>

                <div class="bg-light p-3 mb-4 rounded">
                    <div class="mb-3">
                        <span class="font-weight-bold text-secondary" style="font-size: 16px; font-family: math;">Lương
                            Gross là gì?</span>
                        <span class="ml-2 text-muted"></span>
                    </div>
                    <p class="text-muted mb-0" style="font-size: 16px; font-family: math;">
                        "Là tổng thu nhập ghi trên hợp đồng của người lao động, bao gồm chi phí thuế, bảo hiểm và phí
                        công đoàn (nếu có).
                        Lương thực lãnh sẽ thấp hơn lương gross.
                    </p>
                </div>

                <div class="bg-light p-3 mb-4 rounded">
                    <div class="mb-3">
                        <span class="font-weight-bold text-secondary">Lương Net là gì?</span>
                    </div>
                    <p class="text-muted mb-0" style="font-size: 16px; font-family: math;">
                        Là số tiền lương người lao động thực lãnh sau khi đã trừ hết các khoản thuế, bảo hiểm và phí
                        công đoàn (nếu có).
                    </p>
                </div>

                <p class="text-muted" style="font-size: 13px; font-family: math;">
                    Cách tính kết quả dựa trên công thức và biểu thuế mới nhất của cục thuế.
                    Áp dụng mức giảm trừ gia cảnh mới nhất 11 triệu đồng/tháng
                    (theo nghị định số 954/2020/UBTVQH14)
                    và áp dụng mức lương tối thiểu vùng mới nhất có hiệu lực từ ngày 01/07/2022 (theo nghị định
                    38/2022/NĐ-CP)
                </p>
            </div>
            <!-- // Câu hỏi thường gặp  -->
            <div class="col-md-8 col-sm-12 custom-bg">
                <div id="salary-calculator-questions" class="custom-container">
                    <div class="text-center custom-heading">
                        <h2 class="custom-title">Các câu hỏi thường gặp</h2>
                    </div>
                    <div class="custom-content">
                        <div class="container mt-5">
                            <!-- Lương Gross là gì? -->
                            <div class="custom-box mb-3">
                                <div class="faq-item">
                                    <div class="faq-question" onclick="toggleAnswer('answer1')">
                                        <span class="faq-icon">▼</span>
                                        Lương Gross là gì?
                                    </div>

                                    <div class="faq-answer" id="answer1" style="display: none;">
                                        Lương Gross là tổng số tiền mà một người lao động nhận được trước khi trừ bất kỳ
                                        khoản thuế hoặc khấu trừ nào.
                                    </div>
                                </div>
                            </div>

                            <!-- Tính lương Net -->
                            <div class="custom-box mb-3">
                                <div class="faq-item">
                                    <div class="faq-question" onclick="toggleAnswer('answer2')">
                                        <span class="faq-icon">▼</span>
                                        Tính lương Net?
                                    </div>
                                    <div class="faq-answer" id="answer2" style="display: none;">
                                        Lương Net là số tiền mà người lao động nhận được sau khi đã trừ đi các khoản
                                        thuế, bảo hiểm, và các khoản khấu trừ khác.
                                    </div>
                                </div>
                            </div>

                            <!-- Cách tính lương Gross và Net -->
                            <div class="custom-box mb-3">
                                <div class="faq-item">
                                    <div class="faq-question" onclick="toggleAnswer('answer3')">
                                        <span class="faq-icon">▼</span>
                                        Cách tính lương Gross và Net?
                                    </div>
                                    <div class="faq-answer" id="answer3" style="display: none;">
                                        Đây là một vấn đề phức tạp và phụ thuộc vào nhiều yếu tố như mức lương, thuế,
                                        bảo hiểm và các khoản khấu trừ khác. Thường thì lương Gross trừ đi các khoản
                                        khấu trừ sẽ ra lương Net.
                                    </div>
                                </div>
                            </div>

                            <!-- Nên deal lương Gross hay Net -->
                            <div class="custom-box mb-3">
                                <div class="faq-item">
                                    <div class="faq-question" onclick="toggleAnswer('answer4')">
                                        <span class="faq-icon">▼</span>
                                        Nên deal lương Gross hay Net?
                                    </div>
                                    <div class="faq-answer" id="answer4" style="display: none;">
                                        Quyết định nên deal lương Gross hay Net phụ thuộc vào nhu cầu và tình hình tài
                                        chính cá nhân. Mỗi lựa chọn đều có ưu và nhược điểm của riêng nó.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-8 col-sm-12 custom-bg">
                <div id="salary-calculator-questions">
                    <div class="text-center custom-heading">
                        <h2 class="custom-title"> Lương Gross Net - lương nào có lợi hơn cho người lao động?</h2>
                    </div>
                    <div class="mt-4">
                        <p class="card-text">
                            <i class="fas fa-info-circle"></i> Nhiều người lao động cho rằng khi deal lương, chọn lương
                            Net sẽ có lợi hơn. Lý do vì khoản
                            lương này thể hiện đúng giá trị số tiền được nhận, không mất công quy đổi.
                        </p>
                        <p class="card-text">
                            <i class="fas fa-info-circle"></i> Trên thực tế, đổi lương Gross sang Net hay quy đổi lương
                            Net sang Gross đều không ảnh hưởng
                            đến mức lương của bạn. Khi đàm phán, nhà tuyển dụng xem xét lương Gross và lương Net tương
                            đương nhau.
                        </p>
                        <p class="card-text">
                            <i class="fas fa-info-circle"></i> Tuy nhiên, bảng lương Gross được hệ thống chi tiết và
                            minh
                            bạch hơn. Vì thế bạn có thể linh
                            động kiểm tra các khoản tiền bảo hiểm và thuế mà doanh nghiệp đã đóng để đảm bảo quyền lợi
                            của mình.
                        </p>
                        <p class="card-text">
                            <i class="fas fa-info-circle"></i> Dựa vào ưu điểm, Việc làm Vietseiko khuyến khích bạn nên
                            chọn lương Gross. Khi ký hợp đồng tại Vietseiko, bạn có thể hiểu rõ hơn về trách nhiệm mỗi
                            bên trong việc đóng BHXH, BHYT, BHTN, quỹ công đoàn và thuế TNCN là bao nhiêu.
                        </p>
                    </div>
                </div>
                <div class="text-center custom-heading">
                    <h2 class="custom-title"> Công thức tính lương gross sang net</h2>
                </div>
                <div class="mt-4">
                    <p class="card-text">
                        <i class="fas fa-check-circle"></i> Dù tính lương Gross sang Net hoặc ngược lại, bạn cần chuẩn
                        bị
                        tinh thần rằng thu nhập thực nhận của bạn sẽ thấp hơn mức lương Gross khi trao đổi với HR. Để
                        đảm
                        bảo quyền lợi và hạn chế mâu thuẫn không đáng có, bạn cân nhắc các lưu ý:
                    </p>
                    <p class="card-text">
                        <i class="fas fa-info-circle"></i> <Strong> Luôn cập nhật quy định mới</Strong><br>
                        Hãy luôn chủ động cập nhật các quy định của pháp luật về những BHYT, BHXH... Những hạng mục này
                        luôn
                        thay đổi theo từng thời điểm. Vì thế, bạn cần chủ động nắm bắt thông tin để hạn chế tình trạng
                        bị
                        doanh nghiệp trừ sai.
                    </p>
                    <p class="card-text">
                        <i class="fas fa-info-circle"></i><strong> Kiểm tra thông tin đóng Bảo hiểm xã hội thường
                            xuyên</strong><br>
                        Để có thể đảm bảo quyền lợi tốt hơn, bạn cần thường xuyên kiểm tra thông tin xem doanh nghiệp có
                        đóng BHXH theo đúng mức lương Gross đã thỏa thuận không. Nếu có sự cố xảy ra, mức đóng Bảo hiểm
                        xã
                        hội sẽ ảnh hưởng đến những khoản tiền trợ cấp mà người lao động nhận được.
                    </p>
                </div>
                <div class="text-center custom-heading">
                    <h2 class="custom-title"> Các lưu ý khi deal lương gross net</h2>
                </div>
                <div class="mt-4">
                    <p class="card-text"><strong>Lương net</strong> = <strong>Lương gross</strong> - (Bảo hiểm bắt buộc
                        + Thuế TNCN)</p>

                    <h5>Bảo hiểm bắt buộc của người lao động:</h5>
                    <ul>
                        <li>BHXH: 8% tiền lương</li>
                        <li>BHYT: 1.5% tiền lương</li>
                        <li>BHTN: 1% tiền lương</li>
                    </ul>
                    <p class="card-text">Lưu ý: Mức lương tối thiểu vùng sẽ ảnh hưởng đến mức đóng BHTN. Hãy chọn đúng
                        khu vực sinh sống của bạn.</p>

                    <h5>Thuế TNCN:</h5>
                    <p class="card-text">Thuế TNCN = (Tổng thu nhập - Khoản được miễn - Khoản giảm trừ gia cảnh) x Thuế
                        suất</p>

                    <h6>Mức thuế suất (áp dụng 2022):</h6>
                    <ul>
                        <li>Đến 5 triệu VNĐ: 5%</li>
                        <li>Từ 5 triệu VNĐ đến 10 triệu VNĐ: 10%</li>
                        <li>Từ 10 triệu VNĐ đến 18 triệu VNĐ: 15%</li>
                        <li>Từ 18 triệu VNĐ đến 32 triệu VNĐ: 20%</li>
                        <li>Từ 32 triệu VNĐ đến 52 triệu VNĐ: 25%</li>
                        <li>Từ 52 triệu VNĐ đến 80 triệu VNĐ: 30%</li>
                        <li>Trên 80 triệu VNĐ: 35%</li>
                    </ul>

                    <h5>Ví dụ tính toán:</h5>
                    <p class="card-text">Giả sử bạn nhận lương gross là 30 triệu VND/tháng và không có người phụ thuộc.
                        Khi đó:</p>

                    <p class="card-text">Đóng bảo hiểm bắt buộc: 10.5% x 30,000,000 = 3,150,000 VNĐ.</p>

                    <p class="card-text">Thuế TNCN: Giảm trừ gia cảnh cho chính bạn là 12,000,000 đồng/tháng. Không có
                        giảm trừ cho người phụ thuộc.</p>

                    <p class="card-text">Thu nhập tính thuế sẽ là: 30,000,000 - 3,150,000 - 12,000,000 = 14,850,000 VNĐ.
                    </p>

                    <p class="card-text">Thuế TNCN tính theo bậc: Tổng thuế TNCN = (5,000,000 x 5%) + (9,850,000 x 10%)
                        = 1,485,000 VNĐ.</p>

                    <p class="card-text">Lương thực nhận = 30,000,000 - 3,150,000 - 1,485,000 = 25,365,000 VNĐ.</p>
                    </p>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 custom-bg">
                <div id="salary-calculator-questions">
                    <h2 class="custom-title">Các bài viết về lương và cách tính lương</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Thêm Bootstrap JS và Popper.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

<?php
    include "footer.php";
?>