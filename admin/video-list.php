<?php
require_once "header.php";

require_once "models/db.php";
require_once "models/hinhanh-video.php";

$h = new Hinhanh_Video;

$resultsPerPage = isset($_GET['per']) ? intval($_GET['per']) : 10;

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['video']) && isset($_POST['add'])) {

    $video_url = $_POST['video'];
    //$video_id = getVideoId($video_url);

    $h->insert_hinhanh_video($video_url, 3);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['myInput']) && !empty($_POST['idInput']) && isset($_POST['update'])) {
    $video = $_POST["myInput"];
    $id = $_POST["idInput"];
    $h->update_hinhanh_video($id, $video);
}

function getVideoId($url)
{
    parse_str(parse_url($url, PHP_URL_QUERY), $params);
    return $params['v'];
}

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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
</head>

<body>

    <div class="content-body">

        <div class="container-fluid">
            <div class="d-flex align-items-center mb-4 flex-wrap">
                <h3 class="me-auto">Video</h3>

            </div>
            <form action="" method="post">
                <input type="text" name="video" placeholder="Thêm link youtube" style="padding: 6px; width: 500px" />
                <button type="submit" name="add" class="btn btn-primary">Thêm mới</button>
            </form>

            <!-- // update -->
            <form action="" method="post" class="mt-4">
                <input type="text" id="myInput" name="myInput" value="" style="padding: 6px; width: 500px">
                <input type="text" value="" name="idInput" id="idInput" style="display: none;" />
                <button type="submit" name="update" class="btn btn-primary">cập nhật</button>
            </form>

            <form action="#" method="get" class="mt-5">
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
                        <table id="jobsTable" class="display table table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Ngày đăng</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Video</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $page = 1;
                                //$resultsPerPage = 10;
                                $totalResults = count($h->get_hinhanh_video_ByType(3));
                                if (isset($_GET['page']) == TRUE && !empty($_GET['page'])) {
                                    $page = $_GET['page'];
                                }

                                $list = $h->getAll_hinhanh_video_andCreatePagination($page, $resultsPerPage, 3);
                                echo "<p style=\"text-align:center;\"><b>Tổng cộng có $totalResults kết quả.</b></p>";
                                $total = ceil(floatval($totalResults) / floatval($resultsPerPage));

                                foreach ($list as $index => $value) {
                                ?>
                                    <tr>
                                        <td><?php echo $index + 1 ?></td>
                                        <td><?php echo $value['created_at'] ?></td>
                                        <td><?php echo $value['updated_at'] ?></td>
                                        <td>
                                            <?php
                                            $id_video = getVideoId($value['path']);
                                            $iframe_code = '<iframe name="'.$index .'" width="250" height="150" src="https://www.youtube.com/embed/' . $id_video . '" frameborder="0" allowfullscreen></iframe>';
                                            echo $iframe_code;
                                            ?>
                                        </td>
                                        <td>
                                            <div class="action-buttons d-flex justify-content-end">
                                                <a class="btn btn-secondary light mr-2" onclick="setValue('<?php echo $value['path']; ?>','<?php echo $value['id']; ?>')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                                        </g>
                                                    </svg>
                                                </a>

                                                <a onclick="return confirm('Xác nhận muốn xóa ảnh có Stt: <?php echo $index + 1 ?>?')" href="job-vietnam/delete_hinhanh_video.php?id=<?php echo $value['id']; ?>" class="btn btn-danger light">
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
                                <?php
                                }
                                ?>

                            </tbody>
                        </table>
                        <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
                            <span>Trang <?php echo $page . '/' . $total ?></span>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination my-2 my-md-0">
                                    <?php echo $h::paginate("video-list.php?per=$resultsPerPage&", $page, $totalResults, $resultsPerPage, 1) ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        function setValue(name, id) {
            // Get the input element
            var inputElement = document.getElementById('myInput');
            var IdInput = document.getElementById('idInput');

            inputElement.value = name;
            IdInput.value = id;
        }
    </script>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
        $('#jobsTable').DataTable({

            "paging": false,
            "info": false
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