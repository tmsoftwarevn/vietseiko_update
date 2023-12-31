<?php
require_once "header.php";

require_once "models/db.php";

require_once "models/apply.php";
require_once "models/job_vietseiko.php";

$apply = new Apply;
$resultsPerPage = isset($_GET['per']) ? intval($_GET['per']) : 10;

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
<style>
    .results {
        margin-bottom: 20px;
    }

    label {
        margin-right: 10px;
    }
</style>

<body>

    <div class="content-body">

        <div class="container-fluid">
            <div class="d-flex align-items-center mb-4 flex-wrap">
                <h3 class="me-auto">Thông tin ứng viên công việc VietSeiko</h3>

            </div>
            <form action="#" method="get">
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
                                    <th>Mã job</th>
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>SĐT</th>
                                    <th>Năm sinh</th>
                                    <th>Mức lương</th>
                                    <th>Khu vực</th>
                                    <th>Vị trí</th>
                                    <th>Link CV</th>
                                    <th>Ngày nộp</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $page = 1;
                                //$resultsPerPage = 10;
                                $totalResults = count(Apply::getAll_cv(4));
                                if (isset($_GET['page']) == TRUE) {
                                    $page = $_GET['page'];
                                }

                                $list_of_apply = Apply::getAll_CV_andCreatePagination($page, $resultsPerPage, 4);
                                echo "<p style=\"text-align:center;\"><b>Tổng cộng có $totalResults kết quả.</b></p>";
                                $total = ceil(floatval($totalResults) / floatval($resultsPerPage));

                                foreach ($list_of_apply as $key => $value) {
                                ?>
                                    <tr>
                                        <td><?php echo $key + 1 ?></td>
                                        <td>
                                            <a href="job_vietseiko_view.php?typeView=job-vietseiko&id=<?php echo $value['id_job'] ?>">
                                            <?php
                                                $get_jobcode = Vietseiko::get_jobcode($value['id_job']);
                                                if (!empty($get_jobcode))
                                                    echo $get_jobcode['job_code'];
                                                ?>
                                            </a>
                                        </td>
                                        <td><?php echo $value['name'] ?></td>
                                        <td><?php echo $value['email'] ?></td>
                                        <td><?php echo $value['phone'] ?></td>
                                        <td><?php echo $value['nam_sinh'] ?></td>
                                        <td><?php echo $value['muc_luong'] ?></td>
                                        <td><?php echo $value['khu_vuc'] ?></td>
                                        <td><?php echo $value['vi_tri_ung_tuyen'] ?></td>
                                        <td>
                                            <a href="<?php echo './file-cv/list-file/' . $value['link_cv'] ?>" target="_blank">
                                                <?php echo $value['link_cv'] ?>
                                            </a>
                                        </td>
                                        <td><?php echo $value['created_at'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>


                        <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
                            <span>Trang <?php echo $page . '/' . $total ?></span>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination my-2 my-md-0">
                                    <?php echo Apply::paginate("cv-vietseiko-list.php?per=$resultsPerPage&", $page, $totalResults, $resultsPerPage, 1) ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script>
        $('#jobsTable').DataTable({
            //"lengthChange": false,
            //"searching": false,
            "paging": false,
            "info": false
        });

        function openPdfInNewTab(pdfPath) {
            var googleDocsUrl = 'https://docs.google.com/viewer?url=' + encodeURIComponent(pdfPath);
            window.open(googleDocsUrl, '_blank');
        }
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