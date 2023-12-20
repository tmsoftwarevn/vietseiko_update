<?php
require_once "header.php";
$id = 0;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  echo "Khong nhan duoc ID";
}

$allBlog = $blog->detail($id);
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
            <li><a href="index.php">Tin tức</a></li>
            <li><?php echo  $allBlog[0]['tieude_blog'] ?></li>
          </ul>
        </div>

        <!-- BREADCRUMB ROW END -->
      </div>
    </div>
  </div>
  <!-- INNER PAGE BANNER END -->

  <!-- OUR BLOG START -->
  <div class="section-full p-t20 p-b40 bg-white" style="transform: none">
    <div class="container" style="transform: none">
      <!-- BLOG SECTION START -->
      <div class="section-content" style="transform: none">
        <div class="row d-flex justify-content-center" style="transform: none">
          <div class="col-lg-8 col-md-12">
            <!-- BLOG START -->
            <div class="blog-post twm-blog-post-1-outer">
              <div class="wt-post-info ">
                <div class="img-blog-detail">
                  <img src="images/blog/latest/<?php echo $allBlog[0]['img_blog'] ?>" alt="anh" />

                </div>

                <div class="wt-post-meta">
                  <ul>
                    <li class="post-date" style="padding-left: 20px; margin-top: 10px;">
                      <?php
                      $dateTime = new DateTime($allBlog[0]['created_at']);
                      $formattedDate = $dateTime->format('d/m/Y');
                      echo $formattedDate; ?>
                    </li>

                  </ul>
                </div>
                <h3 class="post-title" style="font-size: 30px;">
                  <?php echo $allBlog[0]['tieude_blog'] ?>
                </h3>
                <div style="margin-top: 20px;">
                  <?php
                  echo $allBlog[0]['noidung_blog'];
                  ?>
                </div>

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
                      left: 903px;
                    ">
              <div style="margin-top: 20px;">

                <div class="widget recent-posts-entry">
                  <h4 class="section-head-small mb-5">Tin tức liên quan</h4>
                  <?php
                  $list = $blog::getLatestBlog(4);
                  foreach ($list as $key => $value) {
                  ?>
                    <div class="pr-blog">
                      <div class="img-detail-blog-new">
                        <img src="images/blog/post-author.jpg" alt="#" />
                      </div>
                      <div class="pr-r">
                        <a href="blog-detail.php?id=<?php echo $value['id_blog']; ?>">
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
  <div class="section-full p-t120 p-b90 site-bg-light-purple twm-related-jobs-carousel-wrap">
    <div class="section-head center wt-small-separator-outer">
      <div class="wt-small-separator site-text-primary">
        <!-- <div>Top Jobs</div> -->
      </div>
      <h2 class="wt-title">Công việc mới nhất</h2>
    </div>
    <div class="container">

      <div class="section-content">
        <div class="owl-carousel twm-related-jobs-carousel owl-btn-vertical-center owl-loaded owl-drag">
          <?php
          $list_of_latestJob = Job_f::getLatestJob(8);
          foreach ($list_of_latestJob as $key => $value) {
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
                <div class="twm-jobs-category green">
                  <span class="twm-bg-sky">Mới nhất</span>
                </div>
                <div class="twm-mid-content">
                  <a href="job-detail.php?id=<?php echo $value['id_job'] ?>" class="twm-job-title">
                    <h5 class="twm-job-title" style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">
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
                  <a href="job-detail.php?id=<?php echo $value['id_job'] ?>" class="twm-jobs-browse site-text-primary">Chi tiết</a>
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