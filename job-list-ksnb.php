<?php
include 'header.php';
require_once "models/job_kysu.php";

$totalJob = 1;
$page = 1;
$resultsPerPage = 3;


if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    //echo "Khong nhan duoc ID";
}

?>

<?php
$id_gioitinh = '';
$allJob = [];
$totalJob = 1;
if (
    (isset($_GET['id_nganhnghe']) && $_GET['id_nganhnghe'] != 'all') || (isset($_GET['id_hinhthuc']) && $_GET['id_hinhthuc'] != 'all')
    || (isset($_GET['id_kinhnghiem']) && $_GET['id_kinhnghiem'] != 'all') || (isset($_GET['id_gioitinh']) && $_GET['id_gioitinh'] != 'all')

) {
    $id_nganhnghe = $_GET['id_nganhnghe'];
    $id_hinhthuc = $_GET['id_hinhthuc'];
    $id_kinhnghiem = $_GET['id_kinhnghiem'];
    $id_gioitinh = $_GET['id_gioitinh'];

    //search all, tính tổng
    $kq = $job_kysu::searchJob($id_nganhnghe, $id_hinhthuc, $id_kinhnghiem, $id_gioitinh);
    $totalPages = ceil(floatval(count($kq)) / floatval($resultsPerPage));
    // phân trang
    $search_phantrang = $job_kysu::searchJob_and_Phantrang($id_nganhnghe, $id_hinhthuc, $id_kinhnghiem, $id_gioitinh, $page, $resultsPerPage);
    $allJob = $search_phantrang;
    $totalJob = count($kq);
} else {
    $allJob = $job_kysu::getAllJob_andCreatePagination($page, $resultsPerPage);
    $totalJob = count($job_kysu::getAllJob());
    $totalPages = ceil(floatval($totalJob) / floatval($resultsPerPage));
}

?>
<style>
    <?php include 'public/scss/list-job.scss'; ?>
</style>
<style>
    form {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }

    input[type="text"] {
        padding: 10px;
        width: 300px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 10px;
    }

    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-right: 10px;
    }

    option {
        font-size: 17px;
    }

    .search {
        padding: 10px 20px;
        background-color: #1967d2;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 20px;
    }

    #icon-search {
        font-size: 16px;
        margin-left: 15px;
        padding: 8px;
        border: none;
        cursor: pointer;
    }

    .search:hover {
        background-color: #b0c9ec;
    }
</style>
<title>Việc làm kỹ sư và thông dịch tại Nhật Bản</title>
<!-- CONTENT START -->

<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image: url(images/banner/1.jpg)">
    <div class="overlay-main site-bg-white opacity-01"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <!-- BREADCRUMB ROW -->
            <div>
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="trang-chu">Trang chủ</a></li>
                    <li>Việc làm kỹ sư và thông dịch tại Nhật Bản</li>
                </ul>
            </div>

            <!-- BREADCRUMB ROW END -->
        </div>
    </div>
</div>
<div class="test"> </div>

<div>
    <div class="container-css container-bg">
        <div class="title-1" style="margin-top: 20px;">Việc làm kỹ sư và thông dịch tại Nhật Bản</div>
        <p class="h-des">Hàng ngàn việc làm tốt với mức lương cao, đồng nghiệp thân thiện và chế độ đãi ngộ cực tốt à nha!</p>
        <!--form search -->
        <div class="box-search-f" style="display: flex; justify-content: space-between;">
            <form method="get" action="">
                <input type="hidden" name="page" value="1">
                <div class="row ">
                    <div class="col-3">
                        <select name="id_nganhnghe">
                            <option value="all">Tất cả ngành nghề</option>
                            <?php
                            foreach ($form_contact->getAllNganh_ung_tuyen() as $key => $value) {
                                if ($value['id_nganhnghe'] == $id_nganhnghe) {
                                    echo ('<option selected="selected" value=' . $value['id_nganhnghe'] . '>' . $value['name_nganhnghe'] . '</option>');
                                } else {
                                    echo ('<option value=' . $value['id_nganhnghe'] . '>' . $value['name_nganhnghe'] . '</option>');
                                }
                            }

                            ?>
                        </select>
                    </div>
                    <div class="col-3">
                        <select name="id_hinhthuc">
                            <option value="all">Tất cả hình thức</option>
                            <?php
                            foreach ($hinhthuc->getAllHinhThuc() as $key => $value) {
                                if ($value['id_hinhthuc'] == $id_hinhthuc) {
                                    echo ('<option selected="selected" value=' . $value['id_hinhthuc'] . '>' . $value['name_hinhthuc'] . '</option>');
                                } else {
                                    echo ('<option value=' . $value['id_hinhthuc'] . '>' . $value['name_hinhthuc'] . '</option>');
                                }
                            } ?>

                        </select>
                    </div>
                    <div class="col-3">
                        <select name="id_kinhnghiem">
                            <option value="all">Tất cả kinh nghiệm</option>
                            <?php
                            foreach ($kinh_nghiem->getAllKinhNghiem() as $key => $value) {
                                if ($value['id_kn'] == $id_kinhnghiem) {
                                    echo ('<option selected="selected" value=' . $value['id_kn'] . '>' . $value['name_kn'] . '</option>');
                                } else {
                                    echo ('<option value=' . $value['id_kn'] . '>' . $value['name_kn'] . '</option>');
                                }
                            } ?>

                        </select>
                    </div>
                    <div class="col-3">
                        <select name="id_gioitinh">
                            <option value="all">Tất cả giới tính</option>
                            <option <?php
                                    if (1 == $id_gioitinh) echo 'selected="selected"'
                                    ?> value="1">Nam</option>
                            <option <?php
                                    if ($id_gioitinh == 2) echo 'selected="selected"'
                                    ?> value="2">Nữ</option>
                            <option <?php
                                    if ($id_gioitinh == 3) echo 'selected="selected"'
                                    ?> value="3">Không yêu cầu</option>
                        </select>
                    </div>
                </div>
                <!-- <button type="submit" class="search">Tìm kiếm</button> -->
                <button type="submit" id="icon-search"><i class="bi bi-search"></i></button>

            </form>
        </div>

    </div>
    <div class="container-css">

        <div class="content-list">
            <p style="font-weight: 500;">Có <span style="color: red;"><?php echo $totalJob ?> </span> việc làm phù hợp</p>
            <?php
            foreach ($allJob as $key => $value) {
            ?>
                <div class="card-list" id='job-vietnam'>
                    <div class="group-info">
                        <?php

                        if ($value['id_cty'] == 1) {
                        ?>
                            <div class="company-logo">
                                <img src="public/images/logo.png" />
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="company-logo">
                                <?php echo $value['img_cty'] ?>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="content">
                            <a href="<?php echo 'viec-lam-ky-su-va-thong-dich-nhat-ban/' . $value['slug'] ?>/<?php echo $value['id_job'] ?>">
                                <div class="chucvu">
                                    <?php echo $value['chucvu'] ?>
                                </div>
                            </a>

                            <?php
                            if ($value['id_cty'] == 1) {
                            ?>
                                <a href="<?php echo 'viec-lam-ky-su-va-thong-dich-nhat-ban/' . $value['slug'] ?>/<?php echo $value['id_job'] ?>">
                                    <div class="name_cty">
                                        <?php echo $value['diachi_cuthe'] ?>
                                    </div>
                                </a>
                            <?php
                            } else {
                            ?>
                                <a href="<?php echo 'viec-lam-ky-su-va-thong-dich-nhat-ban/' . $value['slug'] ?>/<?php echo $value['id_job'] ?>">
                                    <div class="name_cty">
                                        <?php echo $value['name'] ?>
                                    </div>
                                </a>
                            <?php
                            }
                            ?>

                            <div style="font-weight: 500;color: #636e72;font-size: 13px;">

                                <?php echo $value['diachi'] ?>
                            </div>
                            <!-- <div style="font-weight: 500;color: #636e72;font-size: 13px;">
                                <?php
                                $dateTime = new DateTime($value['updated_at']);
                                $formattedDate = $dateTime->format('d/m/Y');
                                echo 'Cập nhật: ' . $formattedDate;
                                ?>
                            </div> -->
                            <div style="font-weight: 500;color: #636e72;font-size: 13px;">
                                <?php
                                $ngayHienTai = new DateTime();
                                $ngayDen = new DateTime($value['ngaycuoicung']);
                                $soNgayConLai = $ngayHienTai->diff($ngayDen)->format('%a');
                                echo 'Bạn còn ' . '<span style="color: #ed1b24">' . $soNgayConLai . '</span>' . ' ngày để ứng tuyển';
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="salary">
                        <?php echo $value['mucluong'] ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <!-- page bootstrap -->
        <?php
        function generatePagination($currentPage, $totalPages)
        {
            $range = 2; // Number of pages before and after the current page to display
            $output = '';
            $d = 1;
    
            $currentUrl = strtok($_SERVER["REQUEST_URI"], '?');
            $queryString = $_SERVER["QUERY_STRING"];
            if ($totalPages > 1) {
                // Get the current URL without the query string
                $currentUrl = strtok($_SERVER["REQUEST_URI"], '?');
            
                // Get the current query parameters
                $queryString = $_SERVER["QUERY_STRING"];
            
                // Previous button
                if ($currentPage > 1) {
                    $prevPage = ($currentPage > 1) ? $currentPage - 1 : 1;
                    $output .= '<li class="page-item">';
                    $output .= '<a class="page-link" href="' . $currentUrl . '?' . getNewQueryString($queryString, 'page', $prevPage) . '" aria-label="Previous">';
                    $output .= '<span aria-hidden="true">&laquo;</span>';
                    $output .= '</a>';
                    $output .= '</li>';
                }
            
                for ($i = 1; $i <= $totalPages; $i++) {
                    $newQueryString = getNewQueryString($queryString, 'page', $i);
                    if ($i == 1 || $i == $totalPages || ($i >= $currentPage - $range && $i <= $currentPage + $range)) {
                        $output .= '<li class="page-item';
                        $output .= ($i == $currentPage) ? ' active">' : '">';
                        $output .= '<a class="page-link" href="' . $currentUrl . '?' . $newQueryString . '">' . $i . '</a>';
                        $output .= '</li>';
                    } elseif (!strpos($output, '<li class="page-item dots">...</li>') || $d < 3) {
                        if ($d > 2) {
                            continue;
                        }
            
                        $d = $d + 1;
                        $output .= '<li class="page-item dots">...</li>';
                    }
                }
            
                if ($currentPage < $totalPages) {
                    $nextPage = ($currentPage < $totalPages) ? $currentPage + 1 : $totalPages;
                    $output .= '<li class="page-item">';
                    $output .= '<a class="page-link" href="' . $currentUrl . '?' . getNewQueryString($queryString, 'page', $nextPage) . '" aria-label="Next">';
                    $output .= '<span aria-hidden="true">&raquo;</span>';
                    $output .= '</a>';
                    $output .= '</li>';
                }
            }

            return $output;
        }
        echo '<ul class="pagination justify-content-center pagination-lg" id="pagination">';
        echo generatePagination($page, $totalPages);
        echo '</ul>';
        echo '<div style="margin-bottom: 90px"> </div>'
        ?>
        <?php

        // Function to generate a new query string by replacing or adding a parameter
        function getNewQueryString($queryString, $parameter, $value)
        {
            parse_str($queryString, $params);
            $params[$parameter] = $value;
            return http_build_query($params);
        }

        ?>
    </div>
</div>
<?php
require_once 'footer.php';
?>