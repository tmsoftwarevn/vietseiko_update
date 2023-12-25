<?php
require_once "header.php";

require_once "models/db.php";
require_once "models/contact.php";
require_once "models/nganhnghe.php";

$contact = new Contact;
$nganhnghe = new Nganhnghe;

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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
</head>

<body>

    <div class="content-body">

        <?php
        // công việc viet nam
        if (isset($_GET['type']) == TRUE && $_GET['type'] == "vn") {
        ?>
            <div class="container-fluid">
                <div class="d-flex align-items-center mb-4 flex-wrap">
                    <h3 class="me-auto">Liên hệ công việc tại Việt Nam</h3>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="table-responsive">
                            <table id="jobsTable" class="table display table-striped mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
                                <thead>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Họ tên</th>
                                        <th>Email</th>
                                        <th>SĐT</th>
                                        <th>Mức lương</th>
                                        <th>Khu vực hiện tại</th>
                                        <th>Nơi mong muốn làm việc</th>
                                        <th>Ngành nghề</th>
                                        <th>Ngày liên hệ</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $page = 1;
                                    $resultsPerPage = 10;
                                    $totalResults = count(Contact::getAll_lh(1));
                                    if (isset($_GET['page']) == TRUE) {
                                        $page = $_GET['page'];
                                    }

                                    $list_of_apply = Contact::getAll_lh_andCreatePagination($page, $resultsPerPage, 1);
                                    echo "<p style=\"text-align:center;\"><b>Tổng cộng có $totalResults kết quả.</b></p>";
                                    $total = ceil(floatval($totalResults) / floatval($resultsPerPage));

                                    foreach ($list_of_apply as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $key + 1 ?></td>

                                            <td><?php echo $value['name'] ?></td>
                                            <td><?php echo $value['email'] ?></td>
                                            <td><?php echo $value['phone'] ?></td>

                                            <td><?php echo $value['muc_luong'] ?></td>
                                            <td><?php echo $value['khu_vuc_hien_tai'] ?></td>
                                            <td><?php echo $value['khu_vuc_mong_muon'] ?></td>
                                            <td>
                                                <?php
                                                $name = $nganhnghe::getNganhngheName($value['nganhnghe']);
                                                echo $name;
                                                ?></td>
                                            <td><?php echo $value['created_at'] ?></td>
                                            <!-- <td>
                                                <a onclick="return confirm('Xác nhận muốn xóa liên hệ có stt: <?php echo $key + 1 ?>?')" href="job-vietnam/delete_contact.php?id_contact=<?php echo $value['id_contact']; ?>" class="btn btn-danger light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </td> -->
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                            <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
                                <span>Trang <?php echo $page . '/' . $total ?></span>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination my-2 my-md-0">
                                        <?php echo Contact::paginate("contact-list.php?type=vn&", $page, $totalResults, $resultsPerPage, 1) ?>
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
                    <h3 class="me-auto">Liên hệ XKLD Nhật Bản</h3>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="table-responsive">
                            <table id="jobsTable" class="table display table-striped mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
                                <thead>
                                    <tr>
                                        <th>Stt</th>
                                        <th>Họ tên</th>
                                        <th>Email</th>
                                        <th>SĐT</th>
                                        <th>Mức lương</th>
                                        <th>Khu vực hiện tại</th>
                                        <th>Nơi mong muốn làm việc</th>
                                        <th>Ngành nghề</th>
                                        <th>Ngày liên hệ</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $page = 1;
                                    $resultsPerPage = 10;
                                    $totalResults = count(Contact::getAll_lh(2));
                                    if (isset($_GET['page']) == TRUE) {
                                        $page = $_GET['page'];
                                    }

                                    $list_of_apply = Contact::getAll_lh_andCreatePagination($page, $resultsPerPage, 2);
                                    echo "<p style=\"text-align:center;\"><b>Tổng cộng có $totalResults kết quả.</b></p>";
                                    $total = ceil(floatval($totalResults) / floatval($resultsPerPage));

                                    foreach ($list_of_apply as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $key + 1 ?></td>

                                            <td><?php echo $value['name'] ?></td>
                                            <td><?php echo $value['email'] ?></td>
                                            <td><?php echo $value['phone'] ?></td>

                                            <td><?php echo $value['muc_luong'] ?></td>
                                            <td><?php echo $value['khu_vuc_hien_tai'] ?></td>
                                            <td><?php echo $value['khu_vuc_mong_muon'] ?></td>
                                            <td>
                                                <?php
                                                $name = $nganhnghe::getNganhngheName($value['nganhnghe']);
                                                echo $name;
                                                ?></td>
                                            <td><?php echo $value['created_at'] ?></td>
                                            <!-- <td>
                                                    <a onclick="return confirm('Xác nhận muốn xóa liên hệ có stt: <?php echo $key + 1 ?>?')" href="job-vietnam/delete_contact.php?id_contact=<?php echo $value['id_contact']; ?>" class="btn btn-danger light">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </td> -->
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                            <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
                                <span>Trang <?php echo $page . '/' . $total ?></span>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination my-2 my-md-0">
                                        <?php echo Contact::paginate("contact-list.php?type=xkld&", $page, $totalResults, $resultsPerPage, 1) ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <?php
        }
        // ksnb
        if (isset($_GET['type']) == TRUE && $_GET['type'] == "ksnb") {
            ?>
                <div class="container-fluid">
                    <div class="d-flex align-items-center mb-4 flex-wrap">
                        <h3 class="me-auto">Liên hệ XKLD Nhật Bản</h3>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="table-responsive">
                                <table id="jobsTable" class="table display table-striped mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
                                    <thead>
                                        <tr>
                                            <th>Stt</th>
                                            <th>Họ tên</th>
                                            <th>Email</th>
                                            <th>SĐT</th>
                                            <th>Mức lương</th>
                                            <th>Khu vực hiện tại</th>
                                            <th>Nơi mong muốn làm việc</th>
                                            <th>Ngành nghề</th>
                                            <th>Ngày liên hệ</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $page = 1;
                                        $resultsPerPage = 10;
                                        $totalResults = count(Contact::getAll_lh(3));
                                        if (isset($_GET['page']) == TRUE) {
                                            $page = $_GET['page'];
                                        }
    
                                        $list_of_apply = Contact::getAll_lh_andCreatePagination($page, $resultsPerPage, 3);
                                        echo "<p style=\"text-align:center;\"><b>Tổng cộng có $totalResults kết quả.</b></p>";
                                        $total = ceil(floatval($totalResults) / floatval($resultsPerPage));
    
                                        foreach ($list_of_apply as $key => $value) {
                                        ?>
                                            <tr>
                                                <td><?php echo $key + 1 ?></td>
    
                                                <td><?php echo $value['name'] ?></td>
                                                <td><?php echo $value['email'] ?></td>
                                                <td><?php echo $value['phone'] ?></td>
    
                                                <td><?php echo $value['muc_luong'] ?></td>
                                                <td><?php echo $value['khu_vuc_hien_tai'] ?></td>
                                                <td><?php echo $value['khu_vuc_mong_muon'] ?></td>
                                                <td>
                                                    <?php
                                                    $name = $nganhnghe::getNganhngheName($value['nganhnghe']);
                                                    echo $name;
                                                    ?></td>
                                                <td><?php echo $value['created_at'] ?></td>
                                                <!-- <td>
                                                        <a onclick="return confirm('Xác nhận muốn xóa liên hệ có stt: <?php echo $key + 1 ?>?')" href="job-vietnam/delete_contact.php?id_contact=<?php echo $value['id_contact']; ?>" class="btn btn-danger light">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </td> -->
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
    
                                <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
                                    <span>Trang <?php echo $page . '/' . $total ?></span>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination my-2 my-md-0">
                                            <?php echo Contact::paginate("contact-list.php?type=ksnb&", $page, $totalResults, $resultsPerPage, 1) ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            <?php
            }
        // vietseiko
        if (isset($_GET['type']) == TRUE && $_GET['type'] == "vietseiko") {
            ?>
                <div class="container-fluid">
                    <div class="d-flex align-items-center mb-4 flex-wrap">
                        <h3 class="me-auto">Liên hệ XKLD Nhật Bản</h3>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="table-responsive">
                                <table id="jobsTable" class="table display table-striped mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
                                    <thead>
                                        <tr>
                                            <th>Stt</th>
                                            <th>Họ tên</th>
                                            <th>Email</th>
                                            <th>SĐT</th>
                                            <th>Mức lương</th>
                                            <th>Khu vực hiện tại</th>
                                            <th>Nơi mong muốn làm việc</th>
                                            <th>Ngành nghề</th>
                                            <th>Ngày liên hệ</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $page = 1;
                                        $resultsPerPage = 10;
                                        $totalResults = count(Contact::getAll_lh(4));
                                        if (isset($_GET['page']) == TRUE) {
                                            $page = $_GET['page'];
                                        }
    
                                        $list_of_apply = Contact::getAll_lh_andCreatePagination($page, $resultsPerPage, 4);
                                        echo "<p style=\"text-align:center;\"><b>Tổng cộng có $totalResults kết quả.</b></p>";
                                        $total = ceil(floatval($totalResults) / floatval($resultsPerPage));
    
                                        foreach ($list_of_apply as $key => $value) {
                                        ?>
                                            <tr>
                                                <td><?php echo $key + 1 ?></td>
    
                                                <td><?php echo $value['name'] ?></td>
                                                <td><?php echo $value['email'] ?></td>
                                                <td><?php echo $value['phone'] ?></td>
    
                                                <td><?php echo $value['muc_luong'] ?></td>
                                                <td><?php echo $value['khu_vuc_hien_tai'] ?></td>
                                                <td><?php echo $value['khu_vuc_mong_muon'] ?></td>
                                                <td>
                                                    <?php
                                                    $name = $nganhnghe::getNganhngheName($value['nganhnghe']);
                                                    echo $name;
                                                    ?></td>
                                                <td><?php echo $value['created_at'] ?></td>
                                                <!-- <td>
                                                        <a onclick="return confirm('Xác nhận muốn xóa liên hệ có stt: <?php echo $key + 1 ?>?')" href="job-vietnam/delete_contact.php?id_contact=<?php echo $value['id_contact']; ?>" class="btn btn-danger light">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </td> -->
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
    
                                <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
                                    <span>Trang <?php echo $page . '/' . $total ?></span>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination my-2 my-md-0">
                                            <?php echo Contact::paginate("contact-list.php?type=vietseiko&", $page, $totalResults, $resultsPerPage, 1) ?>
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
            "lengthChange": false,

            "paging": false,
            "info": false
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