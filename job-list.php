<title>Tìm việc nhanh, tuyển dụng hiệu quả tại VietSeiko</title>
<?php

require_once 'header.php';
?>

<!-- CONTENT START -->
<div class="page-content" style="transform: none">
  <!-- INNER PAGE BANNER -->
  <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image: url(images/banner/1.jpg)">
    <div class="overlay-main site-bg-white opacity-01"></div>
    <div class="container">
      <div class="wt-bnr-inr-entry">
        <div class="banner-title-outer">
          <div class="banner-title-name">
            <h2 class="wt-title">The Most Exciting Jobs</h2>
          </div>
        </div>
        <!-- BREADCRUMB ROW -->

        <div>
          <ul class="wt-breadcrumb breadcrumb-style-2">
            <li><a href="index.html">Home</a></li>
            <li>Jobs List</li>
          </ul>
        </div>

        <!-- BREADCRUMB ROW END -->
      </div>
    </div>
  </div>
  <!-- INNER PAGE BANNER END -->

  <!-- OUR BLOG START -->
  <div class="section-full p-t120 p-b90 site-bg-white" style="transform: none">
    <div class="container" style="transform: none">
      <div class="row" style="transform: none">
        <div class="col-lg-4 col-md-12 rightSidebar" style="
                  position: relative;
                  overflow: visible;
                  box-sizing: border-box;
                  min-height: 1px;
                ">
          <div class="theiaStickySidebar" style="
                    padding-top: 0px;
                    padding-bottom: 1px;
                    position: static;
                    transform: none;
                    top: 0px;
                    left: 123px;
                  ">
            <div class="side-bar">
              <div class="sidebar-elements search-bx">
                <form action="job-list.php" method="get">
                  <div class="form-group mb-4">
                    <h4 class="section-head-small mb-4">Ngành Nghề</h4>
                    <div class="dropdown bootstrap-select wt-select-bar-large">
                      <select name="id_nganhnghe" id="job-list" class="wt-select-bar-large selectpicker" data-live-search="true" data-bv-field="size">
                        <?php
                        foreach ($nganhnghe->getAllNganhNghe() as $key => $value) { ?>
                          <option value="<?php echo $value['id_nganhnghe'] ?>" <?php if (isset($_GET['id_nganhnghe']) == TRUE && $_GET['id_nganhnghe'] == $value['id_nganhnghe']) {
                                                                                  echo "Selected";
                                                                                } ?>>
                            <?php echo $value['name_nganhnghe'] ?>
                          </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group mb-4">
                    <h4 class="section-head-small mb-4">Keyword</h4>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Job Title or Keyword" />
                      <button class="btn" type="button">
                        <i class="feather-search"></i>
                      </button>
                    </div>
                  </div>

                  <div class="twm-sidebar-ele-filter">
                    <h4 class="section-head-small mb-4">Hình Thức</h4>
                    <div class="dropdown bootstrap-select wt-select-bar-large">
                      <select class="wt-select-bar-large selectpicker" data-live-search="true" data-bv-field="size">
                        <?php
                        foreach ($hinhthuc->getAllHinhThuc() as $key => $value) { ?>
                          <option value="<?php echo $value['id_hinhthuc'] ?>" <?php if (isset($_GET['id_hinhthuc']) == TRUE && $_GET['id_hinhthuc'] == $value['id_hinhthuc']) {
                                                                                echo "Selected";
                                                                              } ?>>
                            <?php echo $value['name_hinhthuc'] ?>
                          </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div style="padding-bottom: 30px;">
                    <input type="submit" value="Submit" style="width: 100%;padding: 10px; border: hidden; border-radius: 10px; background: cornflowerblue; font-size: 17px; font-weight: 600;">
                  </div>
                </form>
              </div>

              <div class="widget tw-sidebar-tags-wrap">
                <h4 class="section-head-small mb-4">Tags</h4>

                <div class="tagcloud">
                  <a href="job-list.html">General</a>
                  <a href="job-list.html">Jobs </a>
                  <a href="job-list.html">Payment</a>
                  <a href="job-list.html">Application </a>
                  <a href="job-list.html">Work</a>
                  <a href="job-list.html">Recruiting</a>
                  <a href="job-list.html">Employer</a>
                  <a href="job-list.html">Income</a>
                  <a href="job-list.html">Tips</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-8 col-md-12">

          <!-- Lấy danh sách job theo ngành nghề -->

          <?php
          if (isset($_GET['id_nganhnghe']) == TRUE && isset($_GET['type_id']) == FALSE) {
            $page = 1;
            $resultsPerPage = 8;
            $totalResults = count(Job::getJob_ByNganhngheID($_GET['id_nganhnghe']));
            if (isset($_GET['page']) == TRUE) {
              $page = $_GET['page'];
            }
            $list_of_job = Job::getJob_ByNganhngheID_andCreatePagination($_GET['id_nganhnghe'], $page, $resultsPerPage);

            //Output:
            echo "<p style=\"text-align:center;\"><b>There are $totalResults results.</b></p>";
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
                        <a href="detail?id=<?php echo $value['id_job'] ?>" class="twm-job-title">
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
                        <a href="detail?id=<?php echo $value['id_job'] ?>" class="twm-jobs-browse site-text-primary">Browse Job</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- Lấy danh sách job theo protype -->
            <?php
            }
          } else if (isset($_GET['type_id']) == TRUE && isset($_GET['id_nganhnghe']) == FALSE) {
            $page = 1;
            $resultsPerPage = 8;
            $totalResults = count(Job::getJob_ByTypeID($_GET['type_id']));
            if (isset($_GET['page']) == TRUE) {
              $page = $_GET['page'];
            }
            $list_of_job = Job::getJob_ByTypeID_andCreatePagination($_GET['type_id'], $page, $resultsPerPage);

            //Output:
            echo "<p style=\"text-align:center;\"><b>There are $totalResults results.</b></p>";
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
                        <a href="detail?id=<?php echo $value['id_job'] ?>" class="twm-job-title">
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
                        <a href="detail?id=<?php echo $value['id_job'] ?>" class="twm-jobs-browse site-text-primary">Browse Job</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

              <!-- ____________________________________________________________________________________________________ -->
              <!-- Lấy danh sách sản phẩm theo protype và nganhnghe.  -->
            <?php
            }
          } else if (isset($_GET['type_id']) == TRUE && isset($_GET['id_nganhnghe']) == TRUE) {
            $page = 1;
            $resultsPerPage = 8;
            $totalResults = count(Job::getJob_ByTypeAndNN($_GET['type_id'], $_GET['id_nganhnghe']));
            if (isset($_GET['page']) == TRUE) {
              $page = $_GET['page'];
            }
            $list_of_job = Job::getJob_ByTypeAndManu_andCreatePagination($_GET['type_id'], $_GET['id_nganhnghe'], $page, $resultsPerPage);


            // Output:
            echo "<p style=\"text-align:center;\"><b>There are $totalResults results.</b></p>";
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
                        <a href="detail?id=<?php echo $value['id_job'] ?>" class="twm-job-title">
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
                        <a href="detail?id=<?php echo $value['id_job'] ?>" class="twm-jobs-browse site-text-primary">Browse Job</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

              <!-- ____________________________________________________________________________________________________ -->
              <!-- Lấy danh sách sản phẩm theo nganhnghe hinh thuc.  -->
            <?php
            }
          } else if (isset($_GET['id_nganhnghe']) == TRUE && isset($_GET['id_hinhthuc']) == TRUE) {
            $page = 1;
            $resultsPerPage = 8;
            $totalResults = count(Job::getJob_ByNNAndHinhThuc($_GET['id_nganhnghe'], $_GET['id_hinhthuc']));
            if (isset($_GET['page']) == TRUE) {
              $page = $_GET['page'];
            }
            $list_of_job = Job::getJob_ByNNAndHinhthuc_andCreatePagination($_GET['id_nganhnghe'], $_GET['id_hinhthuc'], $page, $resultsPerPage);


            // Output:
            echo "<p style=\"text-align:center;\"><b>There are $totalResults results.</b></p>";
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
                        <a href="detail?id=<?php echo $value['id_job'] ?>" class="twm-job-title">
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
                        <a href="detail?id=<?php echo $value['id_job'] ?>" class="twm-jobs-browse site-text-primary">Browse Job</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
          <?php }
          } ?>

          <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
            <nav aria-label="Page navigation example">
              <ul class="pagination my-2 my-md-0">
                <?php echo Job::paginate("viec-lam?type_id=", $page, $totalResults, $resultsPerPage, 1) ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- OUR BLOG END -->
</div>
<!-- CONTENT END -->

<?php
require_once 'footer.php';
?>