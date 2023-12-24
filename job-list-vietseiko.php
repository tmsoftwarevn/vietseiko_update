<?php
include 'header.php';
require_once "models/jobs.php";


$id = 1;
if (isset($_GET['page'])) {
    //$id = $_GET['id'];
} else {
    //echo "Khong nhan duoc ID";
}

$allJob = $job_vietseiko::getAllJob();

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

    .search:hover {
        background-color: #b0c9ec;
    }
</style>
<title>Việc làm tại VietSeiko</title>
<!-- CONTENT START -->

<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image: url(images/banner/1.jpg)">
    <div class="overlay-main site-bg-white opacity-01"></div>

</div>
<div class="test">rew </div>

<div class="job-vn">
<div class="container container-f">
        <div class="title-1" style="margin-top: 20px;">Việc làm tại VietSeiko</div>
        <p class="h-des">Hàng ngàn việc làm tốt với mức lương cao, đồng nghiệp thân thiện và chế độ đãi ngộ cực tốt à nha!</p>
        <form action="#" method="get" style="display: flex; justify-content: start;margin-bottom: 0;">
            <div class="box-search-f" style="display: flex; justify-content: space-between;">
                <div class="row ">
                    <div class="col-3">
                        <select class="nganhnghe">
                            <option value="all">Tất cả ngành nghề</option>
                            <?php
                            foreach ($form_contact->getAllNganh_ung_tuyen() as $key => $value) {
                            ?>
                                <option value="<?php echo $value['id_nganhnghe'] ?>">
                                    <?php echo $value['name_nganhnghe'] ?>
                                </option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="col-3">
                        <select class="hinhthuc">
                            <option value="all">Hình thức làm việc</option>
                            <?php
                            foreach ($hinhthuc->getAllHinhThuc() as $key => $value) { ?>
                                <option value="<?php echo $value['id_hinhthuc'] ?>">
                                    <?php echo $value['name_hinhthuc'] ?>
                                </option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="col-3">
                        <select class="kinhnghiem">
                            <option value="all">Tất cả kinh nghiệm</option>
                            <?php
                            foreach ($kinh_nghiem->getAllKinhNghiem() as $key => $value) { ?>
                                <option value="<?php echo $value['id_kn'] ?>">
                                    <?php echo $value['name_kn'] ?>
                                </option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="col-3">
                        <select class="gioitinh">
                            <option value="all">Tất cả giới tính</option>
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                            <option value="3">Không yêu cầu</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="search">Tìm kiếm</button>
            </div>
        </form>

    </div>
    <div class="container">
        
        <div class="content-list">
            <p style="font-weight: 500;">Có <span style="color: red;">500 </span> việc làm đang tuyển dụng</p>
            <?php
            foreach ($allJob as $key => $value) {
            ?>
                <div class="card" id='job-vietnam'>
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
                            <a href="job-detail-vietseiko.php?id=<?php echo $value['id_job'] ?>">
                                <div class="chucvu">
                                    <?php echo $value['chucvu'] ?>
                                </div>
                            </a>

                            <?php
                            if ($value['id_cty'] == 1) {
                            ?>
                             <a href="job-detail-vietseiko.php?id=<?php echo $value['id_job'] ?>">
                                <div class="name_cty">
                                    <?php echo $value['diachi_cuthe'] ?>
                                </div>
                             </a>
                            <?php
                            } else {
                            ?>
                            <a href="job-detail-vietseiko.php?id=<?php echo $value['id_job'] ?>">
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
                            <div style="font-weight: 500;color: #636e72;font-size: 13px;">
                                <?php
                                $dateTime = new DateTime($value['updated_at']);
                                $formattedDate = $dateTime->format('d/m/Y');
                                echo 'Cập nhật: ' . $formattedDate;
                                ?>
                            </div>
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
            global $typeJob;

            if ($totalPages > 1) {
                // Previous button
                if ($currentPage > 1) {
                    $prevPage = ($currentPage > 1) ? $currentPage - 1 : 1;
                    $output .= '<li class="page-item">';
                    $output .= '<a class="page-link" href="?page=' . $prevPage . '" aria-label="Previous">';
                    $output .= '<span aria-hidden="true">&laquo;</span>';
                    $output .= '</a>';
                    $output .= '</li>';
                }

                for ($i = 1; $i <= $totalPages; $i++) {

                    if ($i == 1 || $i == $totalPages || ($i >= $currentPage - $range && $i <= $currentPage + $range)) {
                        $output .= '<li class="page-item';
                        $output .= ($i == $currentPage) ? ' active">' : '">';
                        $output .= '<a class="page-link" href="?page=' . $i . '">' . $i . '</a>';
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
                    $output .= '<a class="page-link" href="?page=' . $nextPage . '" aria-label="Next">';
                    $output .= '<span aria-hidden="true">&raquo;</span>';
                    $output .= '</a>';
                    $output .= '</li>';
                }
            }

            return $output;
        }
        $totalPages = 10; // Replace with the actual total number of pages
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        echo '<ul class="pagination justify-content-center pagination-lg" id="pagination">';
        echo generatePagination($currentPage, $totalPages);
        echo '</ul>';
        echo '<div style="margin-bottom: 90px"> </div>'
        ?>
    </div>
</div>
<?php
require_once 'footer.php';
?>