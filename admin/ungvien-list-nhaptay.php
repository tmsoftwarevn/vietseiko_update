<?php
require_once "header.php";
require_once "models/db.php";

require_once "models/ungtuyen_nhaptay.php";

$u = new Ungtuyen_nhaptay;

$resultsPerPage = isset($_GET['per']) ? intval($_GET['per']) : 10;
// set type để chuyển page, hiện ra ds nào
if (isset($_GET['type']) == TRUE) {
    $type = $_GET['type'];
}

$startDate = '';
$endDate = '';
if (isset($_GET['startDate']) == TRUE) {
    $startDate = $_GET['startDate'];
}
if (isset($_GET['endDate']) == TRUE) {
    $endDate = $_GET['endDate'];
}
// LẤY DOMAIN WEB
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$domain = $_SERVER['HTTP_HOST'];
$currentUrl = $protocol . '://' . $domain . $_SERVER['REQUEST_URI'];
$domainFromUrl = parse_url($currentUrl, PHP_URL_SCHEME) . '://' . parse_url($currentUrl, PHP_URL_HOST);


?>

<!--**********************************
            Content body start
        ***********************************-->
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery -->
    <!-- <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
    <!-- // datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <!-- excel -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>

</head>
<style>
    .dataTables_filter input {
        width: 500px;
        /* Adjust the width as needed */
    }

    .results {
        margin-bottom: 20px;
    }

    label {
        margin-right: 10px;
    }
</style>

<body>

    <div class="content-body">

        <?php
        // công việc viet nam
        if (isset($_GET['type']) == TRUE && $_GET['type'] == "vn") {
        ?>
            <div class="container-fluid">
                <div class="d-flex align-items-center mb-4 flex-wrap">
                    <h3 class="me-auto">Nhập tay công việc tại Việt Nam</h3>
                    <div>
                        <a href="ungtuyen-nhaptay-add.php?typeAdd=vn" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Thêm ứng viên mới</a>

                    </div>
                </div>
                <form action="#" method="get">
                    <label for="startDate">Từ:</label>
                    <input type="date" name="startDate" value="<?php echo $startDate ?>">

                    <label for="endDate">Đến:</label>
                    <input type="date" name="endDate" value="<?php echo $endDate ?>">
                    <br>

                    <input type="hidden" name="type" value="<?php echo $type ?>">
                    <input type="hidden" name="page" value="1">

                    <label>Số kết quả trong 1 trang</label>
                    <select style="width: 100px;" class="regular-select form-select" name="per">
                        <option <?php
                                if ($resultsPerPage == 2) echo 'selected="selected"'
                                ?> value="2">2</option>
                        <option <?php
                                if ($resultsPerPage == 10) echo 'selected="selected"'
                                ?> value="10">10</option>
                        <option <?php
                                if ($resultsPerPage == 20) echo 'selected="selected"'
                                ?> value="20">20</option>
                        <option <?php
                                if ($resultsPerPage == 50) echo 'selected="selected"'
                                ?> value="50">50</option>
                        <option <?php
                                if ($resultsPerPage == 100) echo 'selected="selected"'
                                ?> value="100">100</option>
                        <option <?php
                                if ($resultsPerPage == 200) echo 'selected="selected"'
                                ?> value="200">200</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-3">Xác nhận</button>
                </form>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="table-responsive">
                            <table id="jobsTable" class="table display table-striped mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
                                <thead>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Họ tên</th>
                                        <th>SĐT</th>
                                        <th>Khu vực hiện tại</th>

                                        <th>Email</th>
                                        <th>Năm sinh</th>
                                        <th>Mức lương mong muốn</th>
                                        <th>Vị trí ứng tuyển</th>

                                        <th>file</th>
                                        <th>Ngày thêm</th>
                                        <th>Ngày cập nhật</th>
                                        <th>Action</th>

                                        <th>FILE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $page = 1;
                                    //$resultsPerPage = 10;
                                    $totalResults = count(Ungtuyen_nhaptay::getAll_cv(1, $startDate, $endDate));
                                    if (isset($_GET['page']) == TRUE) {
                                        $page = $_GET['page'];
                                    }

                                    $list_of_apply = Ungtuyen_nhaptay::getAll_CV_andCreatePagination($page, $resultsPerPage, 1, $startDate, $endDate);
                                    echo "<p style=\"text-align:center;\"><b>Tổng cộng có $totalResults kết quả.</b></p>";
                                    $total = ceil(floatval($totalResults) / floatval($resultsPerPage));

                                    foreach ($list_of_apply as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $key + 1 ?></td>
                                            <td><?php echo $value['name'] ?></td>
                                            <td><?php echo $value['phone'] ?></td>
                                            <td><?php echo $value['khu_vuc'] ?></td>
                                            <td><?php echo $value['email'] ?></td>
                                            <td><?php echo $value['nam_sinh'] ?></td>
                                            <td><?php echo $value['muc_luong'] ?></td>
                                            <td><?php echo $value['vi_tri_ung_tuyen'] ?></td>
                                            <td>
                                                <a href="<?php echo './file-cv/nhaptay-ungtuyen/' . $value['link_cv'] ?>" target="_blank">
                                                    <?php echo $value['link_cv'] ?>
                                                </a>
                                            </td>
                                            <td><?php echo $value['created_at'] ?></td>
                                            <td><?php echo $value['updated_at'] ?></td>
                                            <td>
                                                <div class="action-buttons d-flex justify-content-end">
                                                    <a href="ungtuyen-nhaptay-update.php?typeUpdate=vn&id=<?php echo $value['id_ungtuyen'] ?>" class="btn btn-secondary light mr-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                                <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                                            </g>
                                                        </svg>
                                                    </a>

                                                    <a onclick="return confirm('Xác nhận muốn xóa ứng tuyển có stt: <?php echo $key + 1; ?>?')" href="job-vietnam/delete_ungtuyen.php?id=<?php echo $value['id_ungtuyen']; ?>" class="btn btn-danger light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>

                                            <!-- // ẩn đi -->

                                            <td><?php echo $domainFromUrl . '/admin/file-cv/nhaptay-ungtuyen/' . $value['link_cv'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                            <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
                                <span>Trang <?php echo $page . '/' . $total ?></span>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination my-2 my-md-0">
                                        <?php echo Ungtuyen_nhaptay::paginate("ungvien-list-nhaptay.php?type=vn&per=$resultsPerPage&startDate=$startDate&endDate=$endDate&", $page, $totalResults, $resultsPerPage, 1) ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <?php
        }

        // công việc xkld
        if (isset($_GET['type']) == TRUE && $_GET['type'] == "xkld") {
        ?>
            <div class="container-fluid">
                <div class="d-flex align-items-center mb-4 flex-wrap">
                    <h3 class="me-auto">Nhập tay công việc tại XKLD Nhật Bản</h3>
                    <div>
                        <a href="ungtuyen-nhaptay-add.php?typeAdd=xkld" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Thêm ứng viên mới</a>

                    </div>
                </div>
                <form action="#" method="get">
                    <input type="hidden" name="type" value="<?php echo $type ?>">
                    <input type="hidden" name="page" value="1">

                    <label>Số kết quả trong 1 trang</label>
                    <select style="width: 100px;" class="regular-select form-select" name="per">
                        <option <?php
                                if ($resultsPerPage == 2) echo 'selected="selected"'
                                ?> value="2">2</option>
                        <option <?php
                                if ($resultsPerPage == 10) echo 'selected="selected"'
                                ?> value="10">10</option>
                        <option <?php
                                if ($resultsPerPage == 20) echo 'selected="selected"'
                                ?> value="20">20</option>
                        <option <?php
                                if ($resultsPerPage == 50) echo 'selected="selected"'
                                ?> value="50">50</option>
                        <option <?php
                                if ($resultsPerPage == 100) echo 'selected="selected"'
                                ?> value="100">100</option>
                        <option <?php
                                if ($resultsPerPage == 200) echo 'selected="selected"'
                                ?> value="200">200</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-3">Xác nhận</button>
                </form>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="table-responsive">
                            <table id="jobsTable" class="table display table-striped mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
                                <thead>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Họ tên</th>
                                        <th>SĐT</th>
                                        <th>Khu vực hiện tại</th>

                                        <th>Email</th>
                                        <th>Năm sinh</th>
                                        <th>Mức lương mong muốn</th>
                                        <th>Vị trí ứng tuyển</th>

                                        <th>file</th>
                                        <th>Ngày thêm</th>
                                        <th>Ngày cập nhật</th>
                                        <th>Action</th>
                                        <!-- ẩn đi -->

                                        <th>FILE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $page = 1;
                                    //$resultsPerPage = 10;
                                    $totalResults = count(Ungtuyen_nhaptay::getAll_cv(2, $startDate, $endDate));
                                    if (isset($_GET['page']) == TRUE) {
                                        $page = $_GET['page'];
                                    }

                                    $list_of_apply = Ungtuyen_nhaptay::getAll_CV_andCreatePagination($page, $resultsPerPage, 2, $startDate, $endDate);
                                    echo "<p style=\"text-align:center;\"><b>Tổng cộng có $totalResults kết quả.</b></p>";
                                    $total = ceil(floatval($totalResults) / floatval($resultsPerPage));

                                    foreach ($list_of_apply as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $key + 1 ?></td>
                                            <td><?php echo $value['name'] ?></td>
                                            <td><?php echo $value['phone'] ?></td>
                                            <td><?php echo $value['khu_vuc'] ?></td>
                                            <td><?php echo $value['email'] ?></td>
                                            <td><?php echo $value['nam_sinh'] ?></td>
                                            <td><?php echo $value['muc_luong'] ?></td>
                                            <td><?php echo $value['vi_tri_ung_tuyen'] ?></td>
                                            <td>
                                                <a href="<?php echo './file-cv/nhaptay-ungtuyen/' . $value['link_cv'] ?>" target="_blank">
                                                    <?php echo $value['link_cv'] ?>
                                                </a>
                                            </td>
                                            <td><?php echo $value['created_at'] ?></td>
                                            <td><?php echo $value['updated_at'] ?></td>
                                            <td>
                                                <div class="action-buttons d-flex justify-content-end">
                                                    <a href="ungtuyen-nhaptay-update.php?typeUpdate=xkld&id=<?php echo $value['id_ungtuyen'] ?>" class="btn btn-secondary light mr-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                                <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                                            </g>
                                                        </svg>
                                                    </a>

                                                    <a onclick="return confirm('Xác nhận muốn xóa ứng tuyển có stt: <?php echo $key + 1; ?>?')" href="job-vietnam/delete_ungtuyen.php?id=<?php echo $value['id_ungtuyen']; ?>" class="btn btn-danger light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>

                                            <!-- // ẩn đi -->


                                            <td><?php echo $domainFromUrl . '/admin/file-cv/nhaptay-ungtuyen/' . $value['link_cv'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                            <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
                                <span>Trang <?php echo $page . '/' . $total ?></span>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination my-2 my-md-0">
                                        <?php echo Ungtuyen_nhaptay::paginate("ungvien-list-nhaptay.php?type=xkld&per=$resultsPerPage&startDate=$startDate&endDate=$endDate&", $page, $totalResults, $resultsPerPage, 1) ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <?php
        }

        // công việc kỹ sư & thông dịch
        if (isset($_GET['type']) == TRUE && $_GET['type'] == "ksnb") {
        ?>
            <div class="container-fluid">
                <div class="d-flex align-items-center mb-4 flex-wrap">
                    <h3 class="me-auto">Nhập tay công việc kỹ sư và thông dịch Nhật Bản</h3>
                    <div>
                        <a href="ungtuyen-nhaptay-add.php?typeAdd=ksnb" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Thêm ứng viên mới</a>

                    </div>
                </div>
                <form action="#" method="get">
                    <input type="hidden" name="type" value="<?php echo $type ?>">
                    <input type="hidden" name="page" value="1">

                    <label>Số kết quả trong 1 trang</label>
                    <select style="width: 100px;" class="regular-select form-select" name="per">
                        <option <?php
                                if ($resultsPerPage == 2) echo 'selected="selected"'
                                ?> value="2">2</option>
                        <option <?php
                                if ($resultsPerPage == 10) echo 'selected="selected"'
                                ?> value="10">10</option>
                        <option <?php
                                if ($resultsPerPage == 20) echo 'selected="selected"'
                                ?> value="20">20</option>
                        <option <?php
                                if ($resultsPerPage == 50) echo 'selected="selected"'
                                ?> value="50">50</option>
                        <option <?php
                                if ($resultsPerPage == 100) echo 'selected="selected"'
                                ?> value="100">100</option>
                        <option <?php
                                if ($resultsPerPage == 200) echo 'selected="selected"'
                                ?> value="200">200</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-3">Xác nhận</button>
                </form>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="table-responsive">
                            <table id="jobsTable" class="table display table-striped mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
                                <thead>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Họ tên</th>
                                        <th>SĐT</th>
                                        <th>Khu vực hiện tại</th>

                                        <th>Email</th>
                                        <th>Năm sinh</th>
                                        <th>Mức lương mong muốn</th>
                                        <th>Vị trí ứng tuyển</th>

                                        <th>file</th>
                                        <th>Ngày thêm</th>
                                        <th>Ngày cập nhật</th>
                                        <th>Action</th>
                                        <!-- ẩn đi -->

                                        <th>FILE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $page = 1;
                                    //$resultsPerPage = 10;
                                    $totalResults = count(Ungtuyen_nhaptay::getAll_cv(3, $startDate, $endDate));
                                    if (isset($_GET['page']) == TRUE) {
                                        $page = $_GET['page'];
                                    }

                                    $list_of_apply = Ungtuyen_nhaptay::getAll_CV_andCreatePagination($page, $resultsPerPage, 3, $startDate, $endDate);
                                    echo "<p style=\"text-align:center;\"><b>Tổng cộng có $totalResults kết quả.</b></p>";
                                    $total = ceil(floatval($totalResults) / floatval($resultsPerPage));

                                    foreach ($list_of_apply as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $key + 1 ?></td>
                                            <td><?php echo $value['name'] ?></td>
                                            <td><?php echo $value['phone'] ?></td>
                                            <td><?php echo $value['khu_vuc'] ?></td>
                                            <td><?php echo $value['email'] ?></td>
                                            <td><?php echo $value['nam_sinh'] ?></td>
                                            <td><?php echo $value['muc_luong'] ?></td>
                                            <td><?php echo $value['vi_tri_ung_tuyen'] ?></td>
                                            <td>
                                                <a href="<?php echo './file-cv/nhaptay-ungtuyen/' . $value['link_cv'] ?>" target="_blank">
                                                    <?php echo $value['link_cv'] ?>
                                                </a>
                                            </td>
                                            <td><?php echo $value['created_at'] ?></td>
                                            <td><?php echo $value['updated_at'] ?></td>
                                            <td>
                                                <div class="action-buttons d-flex justify-content-end">
                                                    <a href="ungtuyen-nhaptay-update.php?typeUpdate=ksnb&id=<?php echo $value['id_ungtuyen'] ?>" class="btn btn-secondary light mr-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                                <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                                            </g>
                                                        </svg>
                                                    </a>

                                                    <a onclick="return confirm('Xác nhận muốn xóa ứng tuyển có stt: <?php echo $key + 1; ?>?')" href="job-vietnam/delete_ungtuyen.php?id=<?php echo $value['id_ungtuyen']; ?>" class="btn btn-danger light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>

                                            <!-- // ẩn đi -->


                                            <td><?php echo $domainFromUrl . '/admin/file-cv/nhaptay-ungtuyen/' . $value['link_cv'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                            <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
                                <span>Trang <?php echo $page . '/' . $total ?></span>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination my-2 my-md-0">
                                        <?php echo Ungtuyen_nhaptay::paginate("ungvien-list-nhaptay.php?type=ksnb&per=$resultsPerPage&startDate=$startDate&endDate=$endDate&", $page, $totalResults, $resultsPerPage, 1) ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <?php
        }

        // công việc vietseiko
        if (isset($_GET['type']) == TRUE && $_GET['type'] == "vsk") {
        ?>
            <div class="container-fluid">
                <div class="d-flex align-items-center mb-4 flex-wrap">
                    <h3 class="me-auto">Nhập tay công việc tại Vietseiko</h3>
                    <div>
                        <a href="ungtuyen-nhaptay-add.php?typeAdd=vsk" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Thêm ứng viên mới</a>

                    </div>
                </div>
                <form action="#" method="get">
                    <input type="hidden" name="type" value="<?php echo $type ?>">
                    <input type="hidden" name="page" value="1">

                    <label>Số kết quả trong 1 trang</label>
                    <select style="width: 100px;" class="regular-select form-select" name="per">
                        <option <?php
                                if ($resultsPerPage == 2) echo 'selected="selected"'
                                ?> value="2">2</option>
                        <option <?php
                                if ($resultsPerPage == 10) echo 'selected="selected"'
                                ?> value="10">10</option>
                        <option <?php
                                if ($resultsPerPage == 20) echo 'selected="selected"'
                                ?> value="20">20</option>
                        <option <?php
                                if ($resultsPerPage == 50) echo 'selected="selected"'
                                ?> value="50">50</option>
                        <option <?php
                                if ($resultsPerPage == 100) echo 'selected="selected"'
                                ?> value="100">100</option>
                        <option <?php
                                if ($resultsPerPage == 200) echo 'selected="selected"'
                                ?> value="200">200</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-3">Xác nhận</button>
                </form>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="table-responsive">
                            <table id="jobsTable" class="table display table-striped mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
                                <thead>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Họ tên</th>
                                        <th>SĐT</th>
                                        <th>Khu vực hiện tại</th>

                                        <th>Email</th>
                                        <th>Năm sinh</th>
                                        <th>Mức lương mong muốn</th>
                                        <th>Vị trí ứng tuyển</th>

                                        <th>file</th>
                                        <th>Ngày thêm</th>
                                        <th>Ngày cập nhật</th>
                                        <th>Action</th>
                                        <!-- ẩn đi -->

                                        <th>FILE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $page = 1;
                                    //$resultsPerPage = 10;
                                    $totalResults = count(Ungtuyen_nhaptay::getAll_cv(4, $startDate, $endDate));
                                    if (isset($_GET['page']) == TRUE) {
                                        $page = $_GET['page'];
                                    }

                                    $list_of_apply = Ungtuyen_nhaptay::getAll_CV_andCreatePagination($page, $resultsPerPage, 4, $startDate, $endDate);
                                    echo "<p style=\"text-align:center;\"><b>Tổng cộng có $totalResults kết quả.</b></p>";
                                    $total = ceil(floatval($totalResults) / floatval($resultsPerPage));

                                    foreach ($list_of_apply as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $key + 1 ?></td>
                                            <td><?php echo $value['name'] ?></td>
                                            <td><?php echo $value['phone'] ?></td>
                                            <td><?php echo $value['khu_vuc'] ?></td>
                                            <td><?php echo $value['email'] ?></td>
                                            <td><?php echo $value['nam_sinh'] ?></td>
                                            <td><?php echo $value['muc_luong'] ?></td>
                                            <td><?php echo $value['vi_tri_ung_tuyen'] ?></td>
                                            <td>
                                                <a href="<?php echo './file-cv/nhaptay-ungtuyen/' . $value['link_cv'] ?>" target="_blank">
                                                    <?php echo $value['link_cv'] ?>
                                                </a>
                                            </td>
                                            <td><?php echo $value['created_at'] ?></td>
                                            <td><?php echo $value['updated_at'] ?></td>
                                            <td>
                                                <div class="action-buttons d-flex justify-content-end">
                                                    <a href="ungtuyen-nhaptay-update.php?typeUpdate=xkld&id=<?php echo $value['id_ungtuyen'] ?>" class="btn btn-secondary light mr-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                                <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                                            </g>
                                                        </svg>
                                                    </a>

                                                    <a onclick="return confirm('Xác nhận muốn xóa ứng tuyển có stt: <?php echo $key + 1; ?>?')" href="job-vietnam/delete_ungtuyen.php?id=<?php echo $value['id_ungtuyen']; ?>" class="btn btn-danger light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>
                                            <!-- // ẩn đi -->


                                            <td><?php echo $domainFromUrl . '/admin/file-cv/nhaptay-ungtuyen/' . $value['link_cv'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                            <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
                                <span>Trang <?php echo $page . '/' . $total ?></span>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination my-2 my-md-0">
                                        <?php echo Ungtuyen_nhaptay::paginate("ungvien-list-nhaptay.php?type=vsk&per=$resultsPerPage&startDate=$startDate&endDate=$endDate&", $page, $totalResults, $resultsPerPage, 1) ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <?php
        }



        ?>

    </div>

    <script>
        $('#jobsTable').DataTable({
            "paging": false,
            "info": false,
            dom: 'Bfrtip',
            buttons: [
                'excel'
            ],
            columnDefs: [{
                targets: [-1], // Indices of the columns to hide (counting from the right)
                visible: false
            }]
        });
    </script>
    <script>
        $(document).ready(function() {
            // Destroy Select2 for the element with the 'regular-select' class
            $('.regular-select').select2('destroy');
        });
    </script>
</body>

</html>


<!--**********************************
            Content body end
***********************************-->

<?php
require_once "footer.php";
?>