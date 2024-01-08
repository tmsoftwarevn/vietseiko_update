<?php
    require "header.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>
<style>
    .group-gross-net {
        /* max-width: 600px; */
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        background-color: #f9f9f9;
    }

    .form-calculator {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .income-wrap {
        margin-bottom: 20px;
    }

    .item {
        margin-bottom: 15px;
    }

    .vnd-income-lb,
    .usd-income-lb,
    .usd-income-lb label,
    .usd-income-lb input,
    .usd-income-lb input::placeholder,
    .usd-income-lb input:focus {
        display: inline-block;
        vertical-align: middle;
    }

    .wrap-item-insurance {
        margin-bottom: 20px;
    }

    .title-bh {
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
    }

    .item-2 {
        margin-top: 10px;
    }

    .item-people,
    .item-salary-area {
        margin-bottom: 15px;
    }

    .nation-select {
        margin-bottom: 20px;
    }

    .btn-tool-change {
        background-color: #1967d2;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        margin-right: 10px;
    }

    /* Style the radio buttons and labels */
    input[type="radio"] {
        margin-right: 5px;
    }
</style>
<style>
    input[type='text'] {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
    }

    /* Style the placeholder text */
    input[type='text']::placeholder {
        color: #999;
    }

    /* Add focus effect */
    input[type='text']:focus {
        outline: none;
        border-color: #1967d2;
        box-shadow: 0 0 5px rgba(69, 79, 209, 0.5);
    }
</style>

<style>
    .custom-bg {
        padding: 10px;
        border-radius: 2px;
        box-shadow: 0px 0px 2px #007bff2e;
        margin-bottom: 5px;
    }

    .custom {
        /* background-color: #fff; */
        padding: 10px;
        /* border-radius: 2px;
        box-shadow: 0px 0px 2px #0f0f0f2e; */
        margin-bottom: 5px;
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
        /* max-width: 150px; */
        overflow: hidden;
        text-overflow: ellipsis;
        flex: 2;
        margin-right: 10px;
        font-size: 16px;
        font-family: roboto;
    }


    .form-row {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 1rem;
    }

    .form-group label {
        margin-right: 1rem;
        flex: 1;
        /* max-width: 170px; */
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

    #grossSalary::placeholder {
        font-size: 16px;
        font-family: roboto;
    }

    #insuranceSalary::placeholder {
        font-size: 16px;
        font-family: roboto;
    }

    #dependents::placeholder {
        font-size: 16px;
        font-family: roboto;
    }

    #region option {
        font-size: 16px;
        font-family: roboto;
    }

    .required {
        font-size: 16px;
        font-family: roboto;
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
        color: #ffffff;
    }

    .form-check {
        justify-content: center;
        align-items: center;
    }

    /* // col-md-4 col-sm-12 */
    h2 {
        font-size: 26px;
        font-family: roboto;
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
        font-family: roboto;
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
        font-family: roboto;
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
        font-family: roboto;
        /* Giảm kích thước font chữ */
        line-height: 1.6;
    }

    .custom-box {
        padding: 5px 15px;
        cursor: pointer;
        border: 1px solid rgb(0 123 255 / 31%);
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
        font-family: roboto;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .mt-4 ul {
        font-size: 16px;
        font-family: roboto;
        line-height: 1.6;
        margin-bottom: 15px;
        padding-left: 20px;
    }

    .mt-4 strong {
        font-weight: bold;
    }

    #exchangeRateText {
        margin-left: 20px;
        display: none;
    }



    /* // thông báo lỗi */
    /* CSS cho thông báo lỗi */
    .error-message {
        font-size: 0.875rem;
        color: red;
        margin-top: 0.25rem;
        display: block;
    }

    .is-invalid {
        border-color: red !important;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .input-error {
        border: 1px solid red;
        box-shadow: 0 0 5px rgba(255, 0, 0, 0.5);
        transition: box-shadow 0.3s ease;
    }

    button {
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .hidden {
        display: none;
    }
</style>

<body style="margin-top: 150px;">
    <div class="container">
        <div class="row">

            <div class="group-gross-net col-md-8 col-sm-12 col-xs-12 custom-bg">
                <h2 style="text-align: center;">Công cụ tính lương Gross sang Net và ngược
                    lại</h2>
                <div class="form-calculator mt-5">
                    <div class="income-wrap">
                        <div class="item">
                            <span>Thu nhập:</span>
                            <label class="vnd-income-lb">
                                <input type="text" name="income" class="income" price-income placeholder="VD: 10,000,000 (VND)" value>
                            </label>
                            <label class="usd-income-lb">
                                <input type="text" name="income_usd" class="income_usd" price-income-usd placeholder="VD: 1,000 (USD)" value>
                            </label>
                        </div>
                        <div class="item">
                            <label class="usd-income-lb">Quy đổi 1 USD =
                                <input type="text" name="ti_gia_usd" class="ti_gia_usd" price-tigia-usd placeholder="VD: 23,000 (VND)" value>
                            </label>
                        </div>
                    </div>
                    <input type="hidden" id="price_total_input" name="price-total-input">
                    <div class="wrap-item wrap-item-insurance">
                        <span class="title-bh">Mức lương đóng bảo hiểm</span>
                        <div class="item">

                            <label for="salary_radio">
                                <input type="radio" id="salary_radio" class="insurance" name="insurance" value="1" checked>
                                Lương chính thức   </label>
                            <div class="item-2">
                                <label for="other_radio">
                                    <input type="radio" id="other_radio" class="insurance" name="insurance" value="0">
                                    Khác
                                      </label>
                                <input type="text" name="insurance_price" class="insurance_price" price-outher-insurance placeholder="VD: 3,000,000 (VND)" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="wrap-item wrap-item-area">

                        <div class="group-item">
                            <div class="item item-people">
                                <span>Số người phụ thuộc:</span>
                                <input type="number" name="family_circumstances" class="family_circumstances" min="0">
                            </div>
                            <div class="item item-salary-area">
                                <span>Vùng</span>
                                <label for="area_salary_1">
                                    <input type="radio" id="area_salary_1" name="area_salary" value="4680000" checked> I
                                      </label>
                                <label for="area_salary_2">
                                    <input type="radio" id="area_salary_2" name="area_salary" value="4160000">
                                    II
                                      </label>
                                <label for="area_salary_3">
                                    <input type="radio" id="area_salary_3" name="area_salary" value="3640000">
                                    III
                                      </label>
                                <label for="area_salary_4">
                                    <input type="radio" id="area_salary_4" name="area_salary" value="3250000">
                                    IV
                                      </label>
                            </div>
                        </div>
                        <div class="nation-select">

                            <select hidden name="national-tool" id="national-tool">
                                <option value="1">Vietnamese</option>
                                <option value="2">Expat</option>
                            </select>
                        </div>
                    </div>
                    <div class="item mt-5" style="margin: 0 auto; width: fit-content;">
                        <button id="btn-gross-net" class="btn-tool-change">Gross <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.75 1L13 6L7.75 11M1 6H13H1Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Net</button>
                        <button id="btn-net-gross" class="btn-tool-change">Net <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.75 1L13 6L7.75 11M1 6H13H1Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            </svg> Gross</button>
                    </div>
                </div>

                <div class="result-salary">
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12 custom">
                <h2 class="font-weight-bold mb-4">Giải thích lương Gross & Net</h2>

                <div class="bg-light p-3 mb-4 rounded">
                    <div class="mb-3">
                        <span class="font-weight-bold text-secondary" style="font-size: 16px; font-family: roboto;">Lương
                            Gross là gì?</span>
                        <span class="ml-2 text-muted"></span>
                    </div>
                    <p class="text-muted mb-0" style="font-size: 16px; font-family: roboto;">
                        "Là tổng thu nhập ghi trên hợp đồng của người lao động, bao gồm chi phí thuế, bảo hiểm và
                        phí
                        công đoàn (nếu có).
                        Lương thực lãnh sẽ thấp hơn lương gross.
                    </p>
                </div>

                <div class="bg-light p-3 mb-4 rounded">
                    <div class="mb-3">
                        <span class="font-weight-bold text-secondary">Lương Net là gì?</span>
                    </div>
                    <p class="text-muted mb-0" style="font-size: 16px; font-family: roboto;">
                        Là số tiền lương người lao động thực lãnh sau khi đã trừ hết các khoản thuế, bảo hiểm và phí
                        công đoàn (nếu có).
                    </p>
                </div>

                <p class="text-muted" style="font-size: 13px; font-family: roboto;">
                    Cách tính kết quả dựa trên công thức và biểu thuế mới nhất của cục thuế.
                    Áp dụng mức giảm trừ gia cảnh mới nhất 11 triệu đồng/tháng
                    (theo nghị định số 954/2020/UBTVQH14)
                    và áp dụng mức lương tối thiểu vùng mới nhất có hiệu lực từ ngày 01/07/2022 (theo nghị định
                    38/2022/NĐ-CP)
                </p>
            </div>

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
                                        Lương Gross là tổng số tiền mà một người lao động nhận được trước khi trừ
                                        bất kỳ
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
                                        Đây là một vấn đề phức tạp và phụ thuộc vào nhiều yếu tố như mức lương,
                                        thuế,
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
                                        Quyết định nên deal lương Gross hay Net phụ thuộc vào nhu cầu và tình hình
                                        tài
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
                    <div class="mt-5">
                        <p class="card-text">
                            <i class="fas fa-info-circle"></i> Nhiều người lao động cho rằng khi deal lương, chọn
                            lương
                            Net sẽ có lợi hơn. Lý do vì khoản
                            lương này thể hiện đúng giá trị số tiền được nhận, không mất công quy đổi.
                        </p>
                        <p class="card-text">
                            <i class="fas fa-info-circle"></i> Trên thực tế, đổi lương Gross sang Net hay quy đổi
                            lương
                            Net sang Gross đều không ảnh hưởng
                            đến mức lương của bạn. Khi đàm phán, nhà tuyển dụng xem xét lương Gross và lương Net
                            tương
                            đương nhau.
                        </p>
                        <p class="card-text">
                            <i class="fas fa-info-circle"></i> Tuy nhiên, bảng lương Gross được hệ thống chi tiết và
                            minh
                            bạch hơn. Vì thế bạn có thể linh
                            động kiểm tra các khoản tiền bảo hiểm và thuế mà doanh nghiệp đã đóng để đảm bảo quyền
                            lợi
                            của mình.
                        </p>
                        <p class="card-text">
                            <i class="fas fa-info-circle"></i> Dựa vào ưu điểm, Việc làm Vietseiko khuyến khích bạn
                            nên
                            chọn lương Gross. Khi ký hợp đồng tại Vietseiko, bạn có thể hiểu rõ hơn về trách nhiệm
                            mỗi
                            bên trong việc đóng BHXH, BHYT, BHTN, quỹ công đoàn và thuế TNCN là bao nhiêu.
                        </p>
                    </div>
                </div>
                <br>
                <div class="text-center custom-heading">
                    <h2 class="custom-title"> Công thức tính lương gross sang net</h2>
                </div>
                <div class="mt-4">
                    <p class="card-text">
                        <i class="fas fa-check-circle"></i> Dù tính lương Gross sang Net hoặc ngược lại, bạn cần
                        chuẩn
                        bị
                        tinh thần rằng thu nhập thực nhận của bạn sẽ thấp hơn mức lương Gross khi trao đổi với HR.
                        Để
                        đảm
                        bảo quyền lợi và hạn chế mâu thuẫn không đáng có, bạn cân nhắc các lưu ý:
                    </p>
                    <p class="card-text">
                        <i class="fas fa-info-circle"></i> <Strong> Luôn cập nhật quy định mới</Strong><br>
                        Hãy luôn chủ động cập nhật các quy định của pháp luật về những BHYT, BHXH... Những hạng mục
                        này
                        luôn
                        thay đổi theo từng thời điểm. Vì thế, bạn cần chủ động nắm bắt thông tin để hạn chế tình
                        trạng
                        bị
                        doanh nghiệp trừ sai.
                    </p>
                    <p class="card-text">
                        <i class="fas fa-info-circle"></i><strong> Kiểm tra thông tin đóng Bảo hiểm xã hội thường
                            xuyên</strong><br>
                        Để có thể đảm bảo quyền lợi tốt hơn, bạn cần thường xuyên kiểm tra thông tin xem doanh
                        nghiệp có
                        đóng BHXH theo đúng mức lương Gross đã thỏa thuận không. Nếu có sự cố xảy ra, mức đóng Bảo
                        hiểm
                        xã
                        hội sẽ ảnh hưởng đến những khoản tiền trợ cấp mà người lao động nhận được.
                    </p>
                </div>
                <br>
                <div class="text-center custom-heading">
                    <h2 class="custom-title"> Các lưu ý khi deal lương gross net</h2>
                </div>
                <div class="mt-4">
                    <p class="card-text"><strong>Lương net</strong> = <strong>Lương gross</strong> - (Bảo hiểm bắt
                        buộc
                        + Thuế TNCN)</p>

                    <h5>Bảo hiểm bắt buộc của người lao động:</h5>
                    <ul>
                        <li>BHXH: 8% tiền lương</li>
                        <li>BHYT: 1.5% tiền lương</li>
                        <li>BHTN: 1% tiền lương</li>
                    </ul>
                    <p class="card-text">Lưu ý: Mức lương tối thiểu vùng sẽ ảnh hưởng đến mức đóng BHTN. Hãy chọn
                        đúng
                        khu vực sinh sống của bạn.</p>

                    <h5>Thuế TNCN:</h5>
                    <p class="card-text">Thuế TNCN = (Tổng thu nhập - Khoản được miễn - Khoản giảm trừ gia cảnh) x
                        Thuế
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
                    <p class="card-text">Giả sử bạn nhận lương gross là 30 triệu VND/tháng và không có người phụ
                        thuộc.
                        Khi đó:</p>

                    <p class="card-text">Đóng bảo hiểm bắt buộc: 10.5% x 30,000,000 = 3,150,000 VNĐ.</p>

                    <p class="card-text">Thuế TNCN: Giảm trừ gia cảnh cho chính bạn là 12,000,000 đồng/tháng. Không
                        có
                        giảm trừ cho người phụ thuộc.</p>

                    <p class="card-text">Thu nhập tính thuế sẽ là: 30,000,000 - 3,150,000 - 12,000,000 = 14,850,000
                        VNĐ.
                    </p>

                    <p class="card-text">Thuế TNCN tính theo bậc: Tổng thuế TNCN = (5,000,000 x 5%) + (9,850,000 x
                        10%)
                        = 1,485,000 VNĐ.</p>

                    <p class="card-text">Lương thực nhận = 30,000,000 - 3,150,000 - 1,485,000 = 25,365,000 VNĐ.</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>

    <script>
        jQuery(document).ready(function() {

            var percent_bhyt = 1.5;
            var percent_bhxh = 8;
            var percent_bhtn = 1;
            var price_sefl = 11000000;
            var price_dependts = 4400000;
            var base_salary = 1800000;

            var salary_area_v1 = 4680000;
            var salary_area_v2 = 4160000;
            var salary_area_v3 = 3640000;
            var salary_area_v4 = 3250000;

            var com_pay_bhxh = 17; //17.5
            var com_pay_bhtnld = 0.5;
            var com_pay_bhyt = 3;
            var com_pay_bhtn = 1;
            var com_pay_congdoan = 0.5; // 2

            jQuery("input.income").keyup(function() {
                let income = jQuery(this).val();
                income = income.replace(/,/g, '');
                jQuery(this).attr('price-income', income);
                jQuery(this).val(addCommas(income));
            });
            jQuery("input.income_usd").keyup(function() {
                let income_usd = jQuery(this).val();
                income_usd = income_usd.replace(/,/g, '');
                jQuery(this).attr('price-income-usd', income_usd);
                jQuery(this).val(addCommas(income_usd));
            });
            jQuery("input.ti_gia_usd").keyup(function() {
                let ti_gia_usd = jQuery(this).val();
                ti_gia_usd = ti_gia_usd.replace(/,/g, '');
                jQuery(this).attr('price-tigia-usd', ti_gia_usd);
                jQuery(this).val(addCommas(ti_gia_usd));
            });
            jQuery("input.insurance_price").keyup(function() {
                let insurance_price = jQuery(this).val();
                insurance_price = insurance_price.replace(/,/g, '');
                jQuery(this).attr('price-outher-insurance', insurance_price);
                jQuery(this).val(addCommas(insurance_price));
            });

            jQuery(document).on('change', '.insurance', function() {
                if (jQuery(this).val() == 1) {
                    jQuery('.insurance_price').prop('disabled', true);
                } else {
                    jQuery('.insurance_price').prop('disabled', false);
                }
            });

            jQuery(document).on('click', '#btn-gross-net, #btn-net-gross', function(e) {

                var national = jQuery('#national-tool').val();

                if (national != 1) {
                    percent_bhtn = 0;
                } else {
                    percent_bhtn = 1;
                }

                var price_other_insurance = 0;
                var class_hidden = 'hidden';
                var income_vnd;
                var tigia_usd;
                var income_insurance = 0;
                var income_usd;
                income_vnd = jQuery('.income').attr('price-income');
                income_usd = jQuery('.income_usd').attr('price-income-usd');
                tigia_usd = jQuery('.ti_gia_usd').attr('price-tigia-usd');

                var insurance_radio = jQuery('input:radio[name="insurance"]:checked').val();
                var insurance_price = jQuery('.insurance_price').attr('price-outher-insurance');
                var family_circumstances = jQuery('.family_circumstances').val();
                var salary_area = jQuery('input:radio[name="area_salary"]:checked').val();


                if (income_vnd == "") {
                    income_vnd = 0;
                }
                if (income_usd == "") {
                    income_usd = 0;
                }
                if (tigia_usd == "") {
                    tigia_usd = 23300;
                }

                var income = parseInt(income_vnd) + (parseInt(income_usd) * parseInt(tigia_usd));

                jQuery('#price_total_input').val(income);

                if (insurance_radio == 0) {
                    income_insurance = jQuery('.insurance_price').attr('price-outher-insurance');
                    class_hidden = 'block-x';
                } else {
                    income_insurance = income;
                }

                //console.log(addCommas(Math.ceil(price_total_insurance(income))));

                jQuery('.btn-tool-change').removeClass('active');
                jQuery(this).addClass('active');

                if (income_vnd == '' && income_usd == '') {
                    alert("Bạn chưa nhập số tiền");
                } else {

                    if (jQuery(this).attr('id') == 'btn-gross-net') {
                        var html_row_1 = `
                                <table class="gross-net-table table" style="margin-top: 20px;">
                                    <tbody>
                                    <tr class="rownote"> 
                                        <th>Lương gross</th>
                                        <th class="text-center">Bảo hiểm</th>
                                        <th class="text-center"> Thuế TNCN</abbr> </th>
                                        <th class="text-right">Lương Net</th>
                                    </tr>
                                    <tr>
                                        <td>` + addCommas(income) + `</td>
                                        <td class="text-center">- ` + addCommas(Math.ceil(price_total_insurance(income))) + `</td>
                                        <td class="text-center" id="tax_tncn">- 0</td>
                                        <td class="text-right" id="salary_net_top">` + addCommas(income_before_tax(income)) + `</td>
                                    </tr>
                                    </tbody>
                                </table>
                            `;

                        var detail_salary = `
                                <p class="text-primary">Diễn giải chi tiết (VNĐ)</p>
                                <table class="gross-net-table table table-detail-salary">
                                <tbody>
                                    <tr class="rownote">
                                        <th>Lương gross</th>
                                        <td class="text-right">` + addCommas(income) + `</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>Bảo hiểm xã hội (` + percent_bhxh + `%)</td>
                                        <td class="text-right">- ` + addCommas(price_insurance_social(income_insurance)) + `</td>
                                    </tr>
                                    <tr>
                                        <td>Bảo hiểm y tế (` + percent_bhyt + `%)</td>
                                        <td class="text-right">- ` + addCommas(price_insurance_health(income_insurance)) + `</td>
                                    </tr>
                                    <tr>
                                        <td>Bảo hiểm thất nghiệp (` + percent_bhtn + `%)</td>
                                        <td class="text-right">- ` + addCommas(price_unemployment_insurance(income_insurance, salary_area)) + `</td>
                                    </tr>
                                    
                                    <tr class="rownote">
                                        <th>Thu nhập trước thuế</th>
                                        <td class="text-right">` + addCommas(income_before_tax(income)) + `</td>
                                    </tr>
                                    <tr>
                                        <td>Giảm trừ gia cảnh bản thân	</td>
                                        <td class="text-right">- 11,000,000</td>
                                    </tr>
                                    <tr>
                                        <td>Giảm trừ gia cảnh người phụ thuộc </td>
                                        <td class="text-right">- ` + addCommas(price_family_dif()) + `</td>
                                    </tr>
                                    <tr class="rownote">
                                        <th>Thu nhập chịu thuế			</th>
                                        <td class="text-right">` + addCommas(income_get_tax(income, get_number_family_dif())) + `</td>
                                    </tr>
                                    <tr>
                                        <td>Thuế thu nhập cá nhân(*)</td>
                                        <td  class="text-right" id="tax_total">- 0</td>
                                    </tr>
                                    <tr class="rownote">
                                        <td><b>Lương Net		</b><br>
                                        Thu nhập trước thuế - Thuế thu nhập cá nhân		.)
                                        </td>
                                        <td  class="text-right" id="salary_net">` + addCommas(income_before_tax(income)) + `</td>
                                    </tr>
                                </tbody>
                            </table>
                            `;

                        jQuery('.result-salary').html(html_row_1 + detail_salary);

                        tax_table = tax_personal_income(income, family_circumstances);

                        jQuery('.result-salary').append(tax_table);

                        company_pay_table = table_company_pay(income, salary_area);

                        jQuery('.result-salary').append(company_pay_table);

                    } else { // is btn net -> gross

                        tax_table = tax_personal_income_by_salary_income(income, family_circumstances);

                        gross_salary = Math.floor(tax_table.gross);
                        tax_total_net = Math.floor(tax_table.tax_total);
                        income_plus_tax = income + tax_total_net;

                        if (insurance_radio == 0) {
                            income_insurance = jQuery('.insurance_price').attr('price-outher-insurance');
                            class_hidden = 'block-x';
                        } else {
                            income_insurance = gross_salary;
                        }

                        var html_row_1 = `
                                <table class="gross-net-table table" style="margin-top: 40px;">
                                    <tbody>
                                        <tr class="rownote">
                                            <th>Lương gross</th>
                                            <th class="text-center">Bảo hiểm</th>
                                            <th class="text-center">Thuế TNCN </th>
                                            <th class="text-right">Lương Net		</th>
                                        </tr>
                                        <tr>
                                            <td id="salary_gross_net">` + addCommas(gross_salary) + `</td>
                                            <td id="insurance_price_net" class="text-center">- ` + addCommas(Math.ceil(price_total_insurance(income_insurance))) + `</td>
                                            <td id="tax_tncn_net" class="text-center">- ` + addCommas(tax_total_net) + `</td>
                                            <td id="salary_net_net" class="text-right">` + addCommas(income) + `</td>
                                        </tr>
                                    </tbody>
                                </table>
                                `;

                        var detail_salary = `
                                <p class="text-primary">Diễn giải chi tiết (VND)</p>
                                <table class="gross-net-table table table-detail-salary">
                                    <tbody>
                                    <tr class="rownote">
                                        <th>Lương gross</th>
                                        <td id="detail-salary-gross" class="text-right">` + addCommas(gross_salary) + `</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Bảo hiểm xã hội (` + percent_bhxh + `%)</td>
                                        <td class="text-right" id="bhxh-net">- ` + addCommas(price_insurance_social(income_insurance)) + `</td>
                                    </tr>
                                    <tr>
                                        <td>Bảo hiểm y tế (` + percent_bhyt + `%)</td>
                                        <td class="text-right">- ` + addCommas(price_insurance_health(income_insurance)) + `</td>
                                    </tr>
                                    <tr>
                                        <td>Bảo hiểm thất nghiệp (` + percent_bhtn + `%)</td>
                                        <td class="text-right">- ` + addCommas(price_unemployment_insurance(income_insurance, salary_area)) + `</td>
                                    </tr>
                                    <tr class="rownote">
                                        <th>Thu nhập trước thuế</th>
                                        <td class="text-right">` + addCommas(income_plus_tax) + `</td>
                                    </tr>
                                    <tr>
                                        <td>Giảm trừ gia cảnh bản thân	</td>
                                        <td class="text-right">- 11,000,000</td>
                                    </tr>
                                    <tr>
                                        <td>Giảm trừ gia cảnh người phụ thuộc		</td>
                                        <td class="text-right">- ` + addCommas(price_family_dif()) + `</td>
                                    </tr>
                                    <tr class="rownote">
                                        <th>Thu nhập chịu thuế			</th>
                                        <td class="text-right">` + addCommas(net_income_get_tax(income_plus_tax, get_number_family_dif())) + `</td>
                                    </tr>
                                    <tr>
                                        <td>Thuế thu nhập cá nhân (*)</td>
                                        <td  class="text-right" id="tax_total_net">- ` + addCommas(tax_total_net) + `</td>
                                    </tr>
                                    <tr class="rownote">
                                        <td><b>Lương Net		</b><br>
                                            Thu nhập trước thuế - Thuế thu nhập cá nhân		.)
                                        </td>
                                        <td  class="text-right" id="salary_net">` + addCommas(income) + `</td>
                                    </tr>
                                    </tbody>
                                </table>
                            `;


                        jQuery('.result-salary').html(html_row_1 + detail_salary);

                        jQuery('.result-salary').append(tax_table.table_tax);

                        company_pay_table = table_company_pay(gross_salary, salary_area);

                        jQuery('.result-salary').append(company_pay_table);

                    } // endif gross to net
                }

                // jQuery('#money-1').val(addCommas(income));
                // jQuery('#money-2').val(addCommas(income_before_tax(income)));


            });


            // lay so nguoi phu thuoc
            function get_number_family_dif() {
                var number_family = jQuery('.family_circumstances').val();
                if (number_family == "") {
                    number_family = 0;
                }
                return number_family;
            }

            function price_family_dif() {
                var price_number_family = get_number_family_dif() * price_dependts;
                return price_number_family;
            }

            //thu nhập trước thuế
            function income_before_tax(price) {
                var price_before_tax = price - price_total_insurance(price);
                return price_before_tax;
            }
            // thu nhập chịu thuế
            function income_get_tax(price, family_dif = "") {
                var price_get_tax;
                if (family_dif != "" && family_dif > 0) {
                    var price_family_dif = get_number_family_dif() * price_dependts;
                } else {
                    price_family_dif = 0;
                }
                if (income_before_tax(price) > price_sefl) {
                    price_get_tax = income_before_tax(price) - price_sefl - price_family_dif;
                    if (price_get_tax < 0) {
                        price_get_tax = 0;
                    }
                } else {
                    price_get_tax = 0;
                }

                return price_get_tax;
            }
            // thu nhập chịu thuế NET
            function net_income_get_tax(price, family_dif = "") {
                var price_get_tax;
                if (family_dif != "" && family_dif > 0) {
                    var price_family_dif = get_number_family_dif() * price_dependts;
                } else {
                    price_family_dif = 0;
                }
                if (price > price_sefl) {
                    price_get_tax = price - price_sefl - price_family_dif;
                    if (price_get_tax < 0) {
                        price_get_tax = 0;
                    }
                } else {
                    price_get_tax = 0;
                }

                return price_get_tax;
            }

            // thu nhập chịu thuế ko trừ bảo hiểm
            function net_income_get_tax_no_insurance(price, family_dif = "") {
                var price_get_tax;
                if (family_dif != "" && family_dif > 0) {
                    var price_family_dif = get_number_family_dif() * price_dependts;
                } else {
                    price_family_dif = 0;
                }
                if (price > price_sefl) {
                    price_get_tax = price - price_sefl - price_family_dif;
                    if (price_get_tax < 0) {
                        price_get_tax = 0;
                    }
                } else {
                    price_get_tax = 0;
                }

                return price_get_tax;
            }

            // tổng tiền bảo hiểm
            function price_total_insurance(price) {

                let check_other_insurance = jQuery('input:radio[name="insurance"]:checked').val();
                let other_insurance_price = jQuery('.insurance_price').attr('price-outher-insurance');
                let luongvung = jQuery('input:radio[name="area_salary"]:checked').val();
                if (check_other_insurance == 0) {
                    if (other_insurance_price == "") {
                        other_insurance_price = 0;
                    }
                    price = parseInt(other_insurance_price);
                }
                let price_bhxh = price_insurance_social(price);
                let price_bhyt = price_insurance_health(price);
                let price_bhtn = price_unemployment_insurance(price, luongvung);

                var price_after = price_bhxh + price_bhyt + price_bhtn;
                //var price_after = (price - price_3bh);

                return price_after;
            }



            // bảo hiểm xã hội
            function price_insurance_social(price) {
                if (price <= (base_salary * 20)) {
                    var price_after = Math.ceil((price * percent_bhxh) / 100);
                } else {
                    price = base_salary * 20;
                    var price_after = Math.ceil((price * percent_bhxh) / 100);
                }

                return price_after;
            }
            // bảo hiểm xã hội công ty trả
            function price_insurance_social_company_pay(price) {
                if (price <= (base_salary * 20)) {
                    var price_com_pay_bhxh = Math.ceil((price * com_pay_bhxh) / 100);
                } else {
                    price = base_salary * 20;
                    var price_com_pay_bhxh = Math.ceil((price * com_pay_bhxh) / 100);
                }
                return price_com_pay_bhxh;
            }

            // bảo hiểm tai nạn lao động bệnh nghề nghiệp cty trả
            function price_insurance_tainan_laodong(price) {
                if (price <= (base_salary * 20)) {
                    var price_com_pay_bhtnld = Math.ceil((price * com_pay_bhtnld) / 100);
                } else {
                    price = base_salary * 20;
                    var price_com_pay_bhtnld = Math.ceil((price * com_pay_bhtnld) / 100);
                }

                return price_com_pay_bhtnld;
            }

            // bảo hiểm y tế
            function price_insurance_health(price) {
                if (price <= (base_salary * 20)) {
                    var price_after = Math.ceil((price * percent_bhyt) / 100);
                } else {
                    price = base_salary * 20;
                    var price_after = Math.ceil((price * percent_bhyt) / 100);
                }
                return price_after;
            }


            // bảo hiểm y tế công ty trả
            function price_insurance_health_company_pay(price) {
                if (price <= (base_salary * 20)) {
                    var price_com_pay_bhyt = Math.ceil((price * com_pay_bhyt) / 100);
                } else {
                    price = base_salary * 20;
                    var price_com_pay_bhyt = Math.ceil((price * com_pay_bhyt) / 100);
                }
                return price_com_pay_bhyt;
            }

            // bảo hiểm thất nghiệp
            function price_unemployment_insurance(price, salary_area) {
                //console.log(salary_area);

                if (price >= (salary_area * 20)) {
                    price = salary_area * 20;
                    var price_after = Math.ceil((price * percent_bhtn) / 100);
                } else {
                    var price_after = Math.ceil((price * percent_bhtn) / 100);
                }


                return price_after;
            }


            // bảo hiểm thất nghiệp công ty trả
            function price_unemployment_insurance_company_pay(price, salary_area) {
                if (price >= (salary_area * 20)) {
                    price = salary_area * 20;
                    var price_com_pay_bhtn = Math.ceil((price * com_pay_bhtn) / 100);
                } else {
                    var price_com_pay_bhtn = Math.ceil((price * com_pay_bhtn) / 100);
                }
                return price_com_pay_bhtn;
            }

            // phí công đoàn
            function price_union_dues(price) {
                if (price <= (base_salary * 20)) {
                    var price_after = Math.ceil((price * com_pay_congdoan) / 100);
                } else {
                    price = base_salary * 20;
                    var price_after = Math.ceil((price * com_pay_congdoan) / 100);
                }
                return price_after;
            }

            // net to gross from income before deduction
            function price_gross_from_income_before_deduction(price, salary_area) {
                var price_gross;
                var price_x = Math.ceil((base_salary * 20 * 9.5) / 100); // 2 831 0000
                var price_y = Math.ceil((salary_area * 20 * 1) / 100); // 936 000

                if (((price * 100) / 89.5) <= base_salary * 20) {
                    price_gross = Math.ceil((price * 100) / 89.5);

                } else if (price + (price_x + price_y) >= salary_area * 20) {
                    price_gross = price + (price_x + price_y);

                } else {
                    price_gross = ((price + price_x) * 100) / 99;

                }

                return price_gross;
            }

            function tax_personal_income(salary, family_dif = "") {
                var salary_tax = parseInt(income_get_tax(salary, family_dif));

                var table_tax = '';

                var tax_5 = 250000,
                    tax_10 = 500000,
                    tax_18 = 1200000,
                    tax_32 = 2800000,
                    tax_52 = 5000000,
                    tax_80 = 8400000,
                    tax_over = 0;

                switch (true) {
                    case salary_tax > 80000000:
                        tax_over = ((salary_tax - 80000000) * 35) / 100;
                        break;
                    case salary_tax > 52000000:
                        tax_80 = ((salary_tax - 52000000) * 30) / 100;
                        break;
                    case salary_tax > 32000000:
                        tax_52 = ((salary_tax - 32000000) * 25) / 100;
                        tax_80 = 0;
                        break;
                    case salary_tax > 18000000:
                        tax_32 = ((salary_tax - 18000000) * 20) / 100;
                        tax_80 = tax_52 = 0;
                        break;
                    case salary_tax > 10000000:
                        tax_18 = ((salary_tax - 10000000) * 15) / 100;
                        tax_80 = tax_52 = tax_32 = 0;
                        break;
                    case salary_tax > 5000000:
                        tax_10 = ((salary_tax - 5000000) * 10) / 100;
                        tax_80 = tax_52 = tax_32 = tax_18 = 0;
                        break;
                    case salary_tax <= 5000000:
                        tax_5 = (salary_tax * 5) / 100;

                        tax_80 = tax_52 = tax_32 = tax_18 = tax_10 = 0;
                }

                var tax_total = tax_80 + tax_52 + tax_32 + tax_18 + tax_10 + tax_5 + tax_over;
                var salary_net = income_before_tax(salary) - tax_total;

                jQuery('#tax_total').html('- ' + addCommas(tax_total));
                jQuery('#tax_tncn').html('- ' + addCommas(tax_total));
                if (salary_net > 0) {
                    jQuery('#salary_net').html(addCommas(salary_net));
                    jQuery('#salary_net_top').html(addCommas(salary_net));
                }

                table_tax = `
                    <p class="text-left text-highlight bold text-primary">(*) Chi tiết thuế thu nhập cá nhân (VND)</p>
                    <table class="gross-net-table table table-tax-bottom">
                        <tbody>
                            <tr class="rownote">
                                <th>Mức chịu thuế	</th>
                                <th>Thuế suất	</th>
                                <th class="text-right">Tiền nộp</th>
                            </tr>
                            <tr>
                                <td>Đến 5 triệu VNĐ	</td>
                                <td>5%</td>
                                <td class="text-right">` + addCommas(tax_5) + `</td>
                            </tr>
                            <tr>
                                <td>Trên 5 triệu VNĐ đến 10 triệu VNĐ		</td>
                                <td>10% </td>
                                <td class="text-right">` + addCommas(tax_10) + `</td>
                            </tr>
                            <tr>
                                <td>		Trên 10 triệu VNĐ đến 18 triệu VNĐ</td>
                                <td>15%</td>
                                <td class="text-right">` + addCommas(tax_18) + `</td>
                            </tr>
                            <tr>
                                <td>Trên 18 triệu VNĐ đến 32 triệu VNĐ</td>
                                <td>20%</td>
                                <td class="text-right">` + addCommas(tax_32) + `</td>
                            </tr>
                            <tr>
                                <td>Trên 32 triệu VNĐ đến 52 triệu VNĐ	</td>
                                <td>25%</td>
                                <td class="text-right">` + addCommas(tax_52) + `</td>
                            </tr>
                            <tr>
                                <td>Trên 52 triệu VNĐ đến 80 triệu VNĐ	</td>
                                <td>30%</td>
                                <td class="text-right">` + addCommas(tax_80) + `</td>
                            </tr>
                            <tr>
                                <td>Trên 80 triệu VNĐ		</td>
                                <td>35%</td>
                                <td class="text-right">` + addCommas(tax_over) + `</td>
                            </tr>
                            <tr>
                                <td>Tổng cộng</td>
                                <td>-</td>
                                <td class="text-right">` + addCommas(tax_total) + `</td>
                            </tr>
                        </tbody>
                    </table>
                    `;

                return table_tax;

            }

            // tax net -> gross
            function tax_personal_income_by_salary_income(net_salaryx, family_dif = "") {

                let net_income = net_salaryx;
                var gross;
                var net_salary = parseInt(net_income_get_tax_no_insurance(net_salaryx, family_dif));
                var salary_tax; // luong chiu thue



                switch (true) {
                    case net_salary <= 4750000:
                        salary_tax = net_salary / 0.95;
                        break;
                    case net_salary <= 9250000:
                        salary_tax = (net_salary - 250000) / 0.9;
                        break;
                    case net_salary <= 16050000:
                        salary_tax = (net_salary - 750000) / 0.85;
                        break;
                    case net_salary <= 27250000:
                        salary_tax = (net_salary - 1650000) / 0.8;
                        break;
                    case net_salary <= 42250000:
                        salary_tax = (net_salary - 3250000) / 0.75;
                        break;
                    case net_salary <= 61850000:
                        salary_tax = (net_salary - 5850000) / 0.7;
                        break;
                    case net_salary > 61850000:
                        salary_tax = (net_salary - 9850000) / 0.65;
                }

                var table_tax = '';
                var tax_5 = 250000,
                    tax_10 = 500000,
                    tax_18 = 1200000,
                    tax_32 = 2800000,
                    tax_52 = 5000000,
                    tax_80 = 8400000,
                    tax_over = 0;

                switch (true) {
                    case salary_tax > 80000000:
                        tax_over = ((salary_tax - 80000000) * 35) / 100;
                        break;
                    case salary_tax > 52000000:
                        tax_80 = ((salary_tax - 52000000) * 30) / 100;
                        break;
                    case salary_tax > 32000000:
                        tax_52 = ((salary_tax - 32000000) * 25) / 100;
                        tax_80 = 0;
                        break;
                    case salary_tax > 18000000:
                        tax_32 = ((salary_tax - 18000000) * 20) / 100;
                        tax_80 = tax_52 = 0;
                        break;
                    case salary_tax > 10000000:
                        tax_18 = ((salary_tax - 10000000) * 15) / 100;
                        tax_80 = tax_52 = tax_32 = 0;
                        break;
                    case salary_tax > 5000000:
                        tax_10 = ((salary_tax - 5000000) * 10) / 100;
                        tax_80 = tax_52 = tax_32 = tax_18 = 0;
                        break;
                    case salary_tax <= 5000000:
                        tax_5 = (salary_tax * 5) / 100;
                        tax_80 = tax_52 = tax_32 = tax_18 = tax_10 = 0;
                }

                var tax_total = tax_80 + tax_52 + tax_32 + tax_18 + tax_10 + tax_5 + tax_over;
                var salary_net = income_before_tax(net_salary);

                jQuery('#tax_total_net').html('- ' + addCommas(Math.floor(tax_total)));
                jQuery('#tax_tncn_net').html('- ' + addCommas(Math.floor(tax_total)));

                let check_other_insurance = jQuery('input:radio[name="insurance"]:checked').val();
                let other_insurance_price = jQuery('.insurance_price').attr('price-outher-insurance');
                let luongvung = jQuery('input:radio[name="area_salary"]:checked').val();

                if (salary_net > 0) {
                    if (check_other_insurance == 0) {
                        let price_bhxh = price_insurance_social(other_insurance_price);
                        let price_bhyt = price_insurance_health(other_insurance_price);
                        let price_bhtn = price_unemployment_insurance(other_insurance_price, luongvung);
                        let price_total_insurance_x = price_bhxh + price_bhyt + price_bhtn;
                        gross = net_income + tax_total + price_total_insurance_x;

                    } else {

                        var total_net_tax = net_income + tax_total;

                        if (percent_bhtn != 0) {
                            if ((total_net_tax / 0.895) < (base_salary * 20)) {
                                //gross = (total_net_tax / 89.5) * 100;
                                gross = total_net_tax / 0.895;
                            } else if ((total_net_tax + (base_salary * 20 * 0.095) + (luongvung * 20 * 0.01) >= (luongvung * 20))) {
                                gross = total_net_tax + (base_salary * 20 * 0.095) + (luongvung * 20 * 0.01)
                            } else {
                                gross = (total_net_tax + (base_salary * 20 * 0.095)) / 0.99;
                            }
                        } else {

                            if ((total_net_tax / 0.905) <= (base_salary * 20)) {
                                gross = total_net_tax / 0.905;

                            } else if (total_net_tax + (base_salary * 20 * 0.095) >= luongvung * 20) {
                                gross = total_net_tax + (base_salary * 20 * 0.095);

                            } else {
                                gross = (total_net_tax + base_salary * 20 * 0.095) / 0.99;

                            }
                        }

                        gross = Math.ceil(gross);

                        //console.log('percent_bhtn' + percent_bhtn);

                        // 					if(net_income <= (base_salary * 20)){
                        // 						gross = ((net_income + tax_total) / 89.5) * 100;
                        // 					}else{

                        // 						//net_income = base_salary * 20;
                        // 						var price_for_insurance = Math.ceil(net_income + tax_total);

                        // 						price_for_insurance = price_gross_from_income_before_deduction(price_for_insurance,luongvung);


                        // 						gross = net_income + tax_total + price_total_insurance(price_for_insurance);

                        // 						//console.log('gross - net > basesalary -' + gross + ' - '+ ' net-'+net_income + ' tax-'+tax_total + ' price-'+price_total_insurance(net_income) );
                        // 					}

                    }

                } else {
                    if (check_other_insurance == 0) {
                        let price_bhxh = price_insurance_social(other_insurance_price);
                        let price_bhyt = price_insurance_health(other_insurance_price);
                        let price_bhtn = price_unemployment_insurance(other_insurance_price, luongvung);
                        let price_total_insurance_x = price_bhxh + price_bhyt + price_bhtn;
                        gross = net_income + price_total_insurance_x;
                    } else {
                        if (net_income <= (base_salary * 20)) {
                            gross = (net_income / 89.5) * 100;
                        } else {
                            //net_income = base_salary * 20;
                            gross = net_income + tax_total + price_total_insurance(net_income);
                        }
                    }
                }

                table_tax = `
                    <p class="text-left text-highlight bold text-primary">(*) Chi tiết thuế thu nhập cá nhân (VNĐ)</p>
                    <table class="gross-net-table table">
                        <tbody>
                        <tr class="rownote">
                            <th>Mức chịu thuế</th>
                            <th>Thuế xuất</th>
                            <th class="text-right">Tiền nộp</th>
                        </tr>
                        <tr>
                            <td>Đến 5 triệu VNĐ	</td>
                            <td>5%</td>
                            <td class="text-right">` + addCommas(Math.ceil(tax_5)) + `</td>
                        </tr>
                        <tr>
                            <td>Trên 5 triệu VNĐ đến 10 triệu VNĐ		</td>
                            <td>10% </td>
                            <td class="text-right">` + addCommas(Math.floor(tax_10)) + `</td>
                        </tr>
                        <tr>
                            <td>		Trên 10 triệu VNĐ đến 18 triệu VNĐ</td>
                            <td>15%</td>
                            <td class="text-right">` + addCommas(Math.floor(tax_18)) + `</td>
                        </tr>
                        <tr>
                            <td>Trên 18 triệu VNĐ đến 32 triệu VNĐ</td>
                            <td>20%</td>
                            <td class="text-right">` + addCommas(Math.floor(tax_32)) + `</td>
                        </tr>
                        <tr>
                            <td>Trên 32 triệu VNĐ đến 52 triệu VNĐ	</td>
                            <td>25%</td>
                            <td class="text-right">` + addCommas(Math.floor(tax_52)) + `</td>
                        </tr>
                        <tr>
                            <td>Trên 52 triệu VNĐ đến 80 triệu VNĐ	</td>
                            <td>30%</td>
                            <td class="text-right">` + addCommas(Math.floor(tax_80)) + `</td>
                        </tr>
                        <tr>
                            <td>Trên 80 triệu VNĐ		</td>
                            <td>35%</td>
                            <td class="text-right">` + addCommas(Math.floor(tax_over)) + `</td>
                        </tr>
                        <tr>
                            <td>Total tax</td>
                            <td>-</td>
                            <td class="text-right">` + addCommas(Math.floor(tax_total)) + `</td>
                        </tr>
                        </tbody>
                    </table>
                `;

                return {
                    table_tax,
                    gross,
                    tax_total
                };

            }

            function table_company_pay(salary_gross, salary_area) {

                let salary_insur;
                let check_other_insurance = jQuery('input:radio[name="insurance"]:checked').val();
                let other_insurance_price = jQuery('.insurance_price').attr('price-outher-insurance');
                let luongvung = jQuery('input:radio[name="area_salary"]:checked').val();
                if (check_other_insurance == 0) {
                    salary_insur = other_insurance_price;
                } else {
                    salary_insur = salary_gross;
                }
                var total_pay = parseInt(salary_gross) + price_insurance_social_company_pay(salary_insur) + price_union_dues(salary_insur) + price_unemployment_insurance_company_pay(salary_insur, salary_area) + price_insurance_health_company_pay(salary_insur);

                var company_pay_gross = `
                    <p class="text-primary">Người sử dụng lao động trả (VNĐ)</p>
                    <table class="gross-net-table table company-pay-gross ">
                    <tbody> 
                        <tr>
                            <th>Lương GROSS	</th>
                            <td class="text-right">` + addCommas(salary_gross) + `</td>
                        </tr>
                        <tr>
                            <th>Bảo hiểm xã hội (` + com_pay_bhxh + `%)</th>
                            <td class="text-right">` + addCommas(price_insurance_social_company_pay(salary_insur)) + `</td>
                        </tr>
                        <tr>
                            <th>Bảo hiểm Tai nạn lao động - Bệnh nghề nghiệp  (` + com_pay_congdoan + `%)</th>
                            <td class="text-right">` + addCommas(price_union_dues(salary_insur)) + `</td>
                        </tr>
                        <tr>
                            <th>Bảo hiểm y tế (` + com_pay_bhyt + `%)</th>
                            <td class="text-right">` + addCommas(price_insurance_health_company_pay(salary_insur)) + `</td>
                        </tr>
                        <tr>
                            <th>Bảo hiểm thất nghiệp (` + com_pay_bhtn + `%)</th>
                            <td class="text-right">` + addCommas(price_unemployment_insurance_company_pay(salary_insur, salary_area)) + `</td>
                        </tr>
                        <tr class="rownote">
                            <th>Tổng cộng</th>
                            <td class="text-right">` + addCommas(total_pay) + `</td>
                        </tr>
                    </tbody>
                    </table>
    
                `;

                return company_pay_gross;
            }


            function addCommas(nStr) {
                nStr = Math.ceil(nStr);
                nStr += '';
                x = nStr.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }
                return x1 + x2;
            }

            function addDots(nStr) {

                nStr += '';
                x = nStr.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';
                var rgx = /(\d+)(\d{3})/;
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + '.' + '$2');
                }
                return x1 + x2;
            }


        });
    </script>
    <script>
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
</body>

</html>

<?php
    require "footer.php";
?>