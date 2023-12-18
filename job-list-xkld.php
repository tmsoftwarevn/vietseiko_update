<?php
include 'header.php';
require_once "models/jobs.php";


$id = 1;
if (isset($_GET['page'])) {
    //$id = $_GET['id'];
} else {
    //echo "Khong nhan duoc ID";
}

$allJob = $job_nb::getAllJob();

?>
<style>
    <?php include 'public/scss/list-job.scss'; ?>
</style>

<title>Việc làm XKLD tại Nhật Bản</title>
<!-- CONTENT START -->

<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image: url(images/banner/1.jpg)">
    <div class="overlay-main site-bg-white opacity-01"></div>

</div>
<div class="test">rew </div>

<div class="job-vn">
    <div class="container">
        <div class="title-1">Việc làm tại Việt Nam</div>
        <p class="h-des">Hàng ngàn việc làm tốt với mức lương cao, đồng nghiệp thân thiện và chế độ đãi ngộ cực tốt à nha!</p>

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
                            <a href="job-detail_NB.php?id=<?php echo $value['id_job'] ?>">
                                <div class="chucvu">
                                    <?php echo $value['chucvu'] ?>
                                </div>
                            </a>

                            <?php
                            if ($value['id_cty'] == 1) {
                            ?>
                                <div class="name_cty">
                                    <?php echo $value['diachi_cuthe'] ?>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="name_cty">
                                    <?php echo $value['name'] ?>
                                </div>
                            <?php
                            }
                            ?>

                            <div style="font-weight: 500;color: #636e72;font-size: 13px;">

                                <?php echo $value['diachi'] ?>
                            </div>
                            <div style="font-weight: 500;color: #636e72;font-size: 13px;">
                                <?php
                                $dateTime = new DateTime($allJob[0]['updated_at']);
                                $formattedDate = $dateTime->format('d/m/Y');
                                echo 'Cập nhật: ' . $formattedDate;
                                ?>
                            </div>
                            <div style="font-weight: 500;color: #636e72;font-size: 13px;">
                                <?php
                                $ngayHienTai = new DateTime();
                                $ngayDen = new DateTime($allJob[0]['ngaycuoicung']);
                                $soNgayConLai = $ngayHienTai->diff($ngayDen)->format('%a');
                                echo 'Bạn còn ' . $soNgayConLai . ' để ứng tuyển';
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