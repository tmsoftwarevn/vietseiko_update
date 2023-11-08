<?php
require_once  "header.php";

?>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <?php
                    if (isset($_GET['keyword']) == TRUE) {
                        echo '<h2>Search result for "' . $_GET['keyword'] . '"</h2>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Lấy danh sách job theo ngành nghề -->

    <?php
    if (isset($_GET['keyword']) ==  TRUE) {
        $page = 1;
        if (isset($_GET['page']) == TRUE) {
            $page = $_GET['page'];
        }
        $resultsPerPage = 8;
        $totalResults = count(Job::searchJob($_GET['keyword']));
        $list_of_job = Job::searchJob_andCreatePagination($_GET['keyword'], $page, $resultsPerPage);

        // Output:
        // echo "<p style=\"text-align:center;\"><b>There are $totalResults results.</b></p>";
        foreach ($list_of_job as $key => $value) {
    ?>
            <div class="twm-jobs-list-wrap">
                <ul>
                    <li>
                        <div class="twm-jobs-list-style1 mb-5">
                            <div class="twm-media">
                                <img src="images/jobs-company/pic1.jpg" alt="#" />
                            </div>
                            <div class="twm-mid-content">
                                <a href="job-detail.php?id=<?php echo $value['id_job'] ?>" class="twm-job-title">
                                    <h4>
                                        <?php echo $value['chucvu'] ?>
                                    </h4>
                                </a>
                                <p class="twm-job-address">
                                    <?php echo $value['diachi_cuthe'] ?>
                                </p>
                                <ul class="job-icon-info">
                                    <span class="icon" style="background: #f4f5f5; border-radius: 4px;color: #212f3f;display: inline-block;
                      font-size: 12px;font-weight: 500;line-height: 16px;padding: 4px 8px;">
                                        <?php echo $value['capbac'] ?>
                                    </span>
                                    <span class="icon" style="background: #f4f5f5; border-radius: 4px;color: #212f3f;display: inline-block;
                      font-size: 12px;font-weight: 500;line-height: 16px;padding: 4px 8px;">
                                        <?php echo $value['diachi'] ?>
                                    </span>
                                    <span class="icon" style="background: #f4f5f5; border-radius: 4px;color: #212f3f;display: inline-block;
                      font-size: 12px;font-weight: 500;line-height: 16px;padding: 4px 8px;">
                                        <?php echo $value['mucluong'] ?>
                                    </span>
                                </ul>
                            </div>

                            <div class="twm-right-content">
                                <div class="twm-jobs-category green">
                                    <span class="twm-bg-green">New</span>
                                </div>
                                <div class="twm-jobs-amount">
                                    <?php echo $value['mucluong'] ?> <span>/ Tháng</span>
                                </div>
                                <a href="job-detail.php?id=<?php echo $value['id_job'] ?>" class="twm-jobs-browse site-text-primary">Browse Job</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Lấy danh sách job theo protype -->
    <?php
        }
    }
    ?>
</div>

<?php
require_once  "footer.php";
?>