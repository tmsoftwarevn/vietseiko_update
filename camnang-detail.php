<?php
require_once "header.php";
$id = 1;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  //echo 'id blog la:'.$id;
} else {
  echo "Khong nhan duoc ID";
}

$allBlog = $cam_nang->detail($id);
$relate_blog = $cam_nang->getRelatedBlog($allBlog[0]['type_id'], 6);

if ($allBlog[0]['type_id'] == 1) {
  $job_moinhat = $job::getLatestJob(8);
  $link = 'viec-lam-tai-viet-nam/';
  
}
if ($allBlog[0]['type_id'] == 2) {
  $job_moinhat = $job_nb::getLatestJob(8);
  $link = 'viec-lam-xkld-nhat-ban/';
}
if ($allBlog[0]['type_id'] == 3) {
  $job_moinhat = $job_kysu::getLatestJob(8);
  $link = 'viec-lam-ky-su-va-thong-dich-nhat-ban/';
}
if ($allBlog[0]['type_id'] == 4) {
  $job_moinhat = $job_vietseiko::getLatestJob(8);
  $link = 'viec-lam-tai-vietseiko/';
}
?>
<style>
  <?php include 'public/scss/custom.scss'; ?>
</style>
<title><?php echo  $allBlog[0]['tieude_blog'] ?></title>

<div class="page-content" style="transform: none">

  <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image: url(images/banner/1.jpg)">
    <div class="overlay-main site-bg-white opacity-01"></div>
    <div class="container">
      <div class="wt-bnr-inr-entry">

        <div>
          <ul class="wt-breadcrumb breadcrumb-style-2">
            <li><a href="trang-chu">Cẩm nang</a></li>
            <li>Chi tiết cẩm nang</li>
          </ul>
        </div>

        <!-- BREADCRUMB ROW END -->
      </div>
    </div>
  </div>
  <!-- INNER PAGE BANNER END -->

  <!-- OUR BLOG START -->
  <div class="section-full p-t60 p-b40 bg-white" style="transform: none">
    <div class="container" style="transform: none">
      <!-- BLOG SECTION START -->
      <div class="section-content" style="transform: none">
        <div class="row d-flex justify-content-center" style="transform: none">
          <div class="col-md-12 col-lg-8">
            <!-- BLOG START -->
            <div class="blog-detail">

              <h2 class="tieude-detail"><?php echo $allBlog[0]['tieude_blog'] ?></h2>
              <div class="date-detail">
                <?php
                $dateTime = new DateTime($allBlog[0]['created_at']);
                $formattedDate = $dateTime->format('d/m/Y');
                echo $formattedDate; ?>
              </div>
              <div class="img-blog-detail">
                <?php echo $allBlog[0]['img_blog'] ?>
              </div>

              <div style="margin-top: 20px;">
                <?php
                echo $allBlog[0]['noidung_blog'];
                ?>
              </div>


            </div>
          </div>

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
                      
                    ">
              <div style="margin-top: 20px;">

                <div class="widget recent-posts-entry">
                  <h4 class="section-head-small mb-5">Cẩm nang liên quan</h4>
                  <?php

                  foreach ($relate_blog as $key => $value) {
                  ?>
                    <div class="pr-blog">
                      <div class="img-detail-blog-new">
                        <?php echo $value['img_blog'] ?>
                      </div>
                      <div class="pr-r">
                      <a href="<?php echo 'cam-nang/' . $value['slug'] ?>-<?php echo $value['id_blog'] ?>.html">
                          <div class="name-pr">
                            <?php echo $value['tieude_blog'] ?>

                          </div>
                        </a>
                        <div class="text-pr">

                          <?php echo $value['noidung_blog'] ?>
                        </div>
                      </div>
                    </div>
                  <?php
                  }
                  ?>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- OUR BLOG END -->
  <div class="section-full p-t30 p-b90 site-bg-light-purple twm-related-jobs-carousel-wrap">
    <div class="section-head center wt-small-separator-outer">
      <div class="wt-small-separator site-text-primary">
        <!-- <div>Top Jobs</div> -->
      </div>
      <h2 class="wt-title" style="margin-bottom: 30px;">Công việc mới nhất</h2>
    </div>
    <div class="container">

      <div class="section-content">
        <div class="owl-carousel twm-related-jobs-carousel owl-btn-vertical-center owl-loaded owl-drag">
          <?php

          foreach ($job_moinhat as $key => $value) {
          ?>

            <div class="item">
              <div class="twm-jobs-grid-style2">
                <?php
                if ($value['id_cty'] == 1) {
                ?>
                  <div class="twm-media">
                    <img src="public/images/logo.png" alt="anh" style="width: 100%;height: 100%;object-fit: contain;" />
                  </div>
                <?php
                } else {
                ?>
                  <div class="twm-media">
                    <?php echo $value['img_cty'] ?>
                  </div>
                <?php
                }
                ?>
                <span class="twm-job-post-duration">
                  <?php
                  $time = $job->timeAgo($value['created_at']);
                  echo $time;
                  ?>
                </span>
                <!-- <div class="twm-jobs-category green">
                  <span class="twm-bg-sky">Mới nhất</span>
                </div> -->
                <div class="twm-mid-content">

                  <a href="<?php echo $link .  $value['slug'] .'/'.$value['id_job'] ?>" class="twm-job-title">
                  <h5 class="twm-job-title" style="margin: 10px auto;max-width: 250px; align-items: center;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    height: 39px;
                                    ">
                                        <?php echo $value['chucvu'] ?>
                                    </h5>
                  </a>
                  <span class="icon" style="background: #f4f5f5; border-radius: 4px;color: #212f3f;display: inline-block;
                          font-size: 13px;font-weight: 500;line-height: 16px;padding: 4px 8px;">
                    <?php echo $value['capbac'] ?>
                  </span>
                  <span class="icon" style="background: #f4f5f5; border-radius: 4px;color: #212f3f;display: inline-block;
                          font-size: 13px;font-weight: 500;line-height: 16px;padding: 4px 8px;">
                    <?php echo $value['diachi'] ?>
                  </span>
                </div>
                <div class="twm-right-content">
                  <div class="twm-jobs-amount">
                    <?php echo $value['mucluong'] ?>
                  </div>
                  <a href="<?php echo $link .  $value['slug'] .'/'.$value['id_job'] ?>" class="twm-jobs-browse site-text-primary">Chi tiết</a>
                </div>
              </div>
            </div>

          <?php } ?>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- CONTENT END -->

<?php
require_once "footer.php";
?>