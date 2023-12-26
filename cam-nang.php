<?php
require_once 'header.php';
?>
<style>
    <?php include 'public/scss/custom.scss';
    include 'public/scss/custom-select.scss'
    ?>
</style>
<style>
     form {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }


    select {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    option {
        font-size: 17px;
    }

    #search-input-blog {
        padding: 8px 20px;
        color: white;
        border: none;
        border-radius: 5px;
       
        margin-left: 20px;
        border: 1px solid #ccc;
    }

    #icon-search {
        font-size: 16px;
        margin-left: 15px;
        padding: 8px;
        border: none;
       
        cursor: pointer;
    }

    .job-result {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
        background-color: white;
    }
</style>
<title><?php echo 'Cẩm nang' ?></title>

<div class="page-wraper">

    <!-- CONTENT START -->
    <div class="page-content" style="transform: none">
        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image: url(images/banner/1.jpg)">
            <div class="overlay-main site-bg-white opacity-01"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <!-- BREADCRUMB ROW -->
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="index.php">Trang chủ</a></li>
                            <li>Cẩm nang</li>
                        </ul>
                    </div>

                    <!-- BREADCRUMB ROW END -->
                </div>
            </div>
        </div>

        <div class="container" style=" margin-top: 50px;">

            <form action="#" method="get" style="display: flex; justify-content: start;">
                <select class="category" id="category">
                    <option value="all">Tất cả tin tức</option>
                    <option value="1">Việc Làm Tại Việt Nam</option>
                    <option value="2">Xuất Khẩu Lao Động Tại Nhật Bản</option>
                    <option value="3">Kỹ Sư & Thông Dịch Viên tại Nhật Bản</option>
                    <option value="4">Việc làm tại VietSeiko</option>

                </select>
                <input type="text" id="search-input-blog" name="search-input-blog" placeholder="Nhập từ khóa...">
                <button type="submit" id="icon-search"><i class="bi bi-search"></i></button>
            </form>
        </div>

        <!-- INNER PAGE BANNER END -->

        <!-- OUR BLOG START -->
        <div class="section-full p-t20 p-b90 site-bg-white" style="transform: none">
            <div class="container" style="transform: none">
                <div class="row" style="transform: none">
                    <?php
                    $list_of_allBlog = Cam_nang_f::getAllBlog();
                    foreach ($list_of_allBlog as $key => $value) {
                    ?>
                        <div class="col-xs-6 col-lg-4">
                            <div class="blog-post">
                                <div class="img_blog_l">
                                    <?php echo $value['img_blog'] ?>
                                </div>
                                <div class="blog-content">
                                    <div class="date-custom">
                                        <?php
                                        $dateTime = new DateTime($value['created_at']);
                                        $formattedDate = $dateTime->format('d/m/Y');
                                        echo $formattedDate; ?>
                                    </div>
                                    <a href="cam-nang-detail.php?id=<?php echo $value['id_blog']; ?>">
                                        <div class="name_blog">
                                            <?php echo $value['tieude_blog'] ?>

                                        </div>
                                    </a>
                                    <div class="text-blog">

                                        <?php echo $value['noidung_blog'] ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- OUR BLOG END -->

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

<!-- CONTENT END -->
<?php
require_once "footer.php";
?>