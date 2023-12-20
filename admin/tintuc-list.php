<?php
require_once "header.php";

require_once "models/db.php";
require_once "models/tin-tuc.php";
require_once "models/tin-tuc.php";

$totalResults = count(Tin_tuc::getAll_Blog());
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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
</head>
<style>
    .search {
        padding: 5px;
        width: 300px;
    }
</style>

<body>

    <div class="content-body">
        <div class="container" style="padding:0 50px;">
            <div class="d-flex align-items-center mb-4 flex-wrap">
                <h3 class="me-auto">Quản lý tin tức</h3>
                <div>
                    <a href="tintuc-add.php?typeAdd=blog" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Thêm tin tức mới</a>
                    
                </div>
            </div>
            <input type="text" placeholder="Từ khóa " class="search" />
            <button class="btn btn-primary">Tìm kiếm</button>
            <table id="jobsTable" class="display table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tên blog</th>
                        <th>Type công việc</th>
                        <th>Ngày đăng</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $page = 1;
                    $resultsPerPage = 10;
                    
                    if (isset($_GET['page']) == TRUE) {
                        $page = $_GET['page'];
                    }

                    $list_of_job = Tin_tuc::getAll_Blog_andCreatePagination($page, $resultsPerPage);
                    echo "<p style=\"text-align:center;font-size: 18px\"><b>Tổng cộng có $totalResults kết quả.</b></p>";
                    $total = ceil(floatval($totalResults) / floatval($resultsPerPage));
                    foreach ($list_of_job as $key => $value) {
                    ?>
                        <tr>
                            <td><?php echo $value['id_blog'] ?></td>
                            <td><?php echo $value['tieude_blog'] ?></td>
                            <td><?php echo $value['type_name'] ?></td>
                            <td><?php echo $value['created_at'] ?></td>
                            <td>
                                <div class="action-buttons d-flex justify-content-end">

                                    <a class="btn btn-success light mr-2 " href="job_nb_view.php?typeView=job-nb&id=<?php echo $value['id_blog'] ?>">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-main-icon" width="24px" height="24px" viewBox="0 0 32 32" x="0px" y="0px">
                                            <g data-name="Layer 21">
                                                <path d="M29,14.47A15,15,0,0,0,3,14.47a3.07,3.07,0,0,0,0,3.06,15,15,0,0,0,26,0A3.07,3.07,0,0,0,29,14.47ZM16,21a5,5,0,1,1,5-5A5,5,0,0,1,16,21Z" fill="#000000" fill-rule="nonzero"></path>
                                                <circle cx="16" cy="16" r="3" fill="#000000" fill-rule="nonzero"></circle>
                                            </g>
                                        </svg>
                                    </a>

                                    <a href="tintuc-update.php?typeUpdate=blog&id=<?php echo $value['id_blog'] ?>" class="btn btn-secondary light mr-2">

                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                            </g>
                                        </svg>
                                    </a>

                                    <a onclick="return confirm('Xác nhận muốn xóa công việc có Mã: <?php echo $value['id_blog']; ?>?')" href="job-vietnam/delete_blog.php?id_blog=<?php echo $value['id_blog']; ?>" class="btn btn-danger light">
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
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="d-flex align-items-center mt-5 justify-content-sm-between justify-content-center flex-wrap">
              <span>Trang <?php echo $page . '/' . $total ?></span>
              <nav aria-label="Page navigation example">
                <ul class="pagination my-2 my-md-0">
                  <?php echo Tin_tuc::paginate("tintuc-list.php?", $page, $totalResults, $resultsPerPage, 1) ?>
                </ul>
              </nav>
            </div>
        </div>
    </div>

    <script>
        $('#jobsTable').DataTable({
            "lengthChange": false,
            "searching": false,
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