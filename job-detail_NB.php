<?php
include 'header.php';
/* if (!isset($_GET['id'])) {
  header('location: index.php');
} */
$id = 0;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  echo "Khong nhan duoc ID";
}

$allJob = $job_NB->getJob_Detail($id);
$getManuTypeID = $job_NB->getTypeManuID($id);
$getNganhngheNB_Name = $nganhngheNB->getNganhngheNB_NameByID($getManuTypeID[0]['id_nganhnghe_NB']);
/* $getNN_HTID = $job->getNN_HTID($id); */
/* $getNganhNgheName = $nganhnghe->getNganhngheByID($getNN_HTID[0]['id_nganhnghe']);
$getRelatedJob = $job->getRelatedJob($getNN_HTID[0]['id_nganhnghe'], $getNN_HTID[0]['id_hinhthuc']); */
/* var_dump(Hinhthuc::getAllHinhThuc()); */
/* var_dump($allJob); */
?>

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
            <li><a href="index.php">Home</a></li>
            <li>Job Detail</li>
          </ul>
        </div>

        <!-- BREADCRUMB ROW END -->
      </div>
    </div>
  </div>
  <!-- INNER PAGE BANNER END -->

  <!-- OUR BLOG START -->
  <div class="section-full p-t120 p-b90 bg-white" style="transform: none">
    <div class="container" style="transform: none">
      <!-- BLOG SECTION START -->
      <div class="section-content" style="transform: none">
        <div class="row d-flex justify-content-center" style="transform: none">
          <div class="col-lg-8 col-md-12">
            <!-- Candidate detail START -->
            <div class="cabdidate-de-info">
              <div class="twm-job-self-wrap">
                <div class="twm-job-self-info">
                  <div class="twm-job-self-top">
                    <div class="twm-media-bg">
                      <img src="images/job-detail-bg.jpg" alt="#" />
                    </div>

                    <div class="twm-mid-content">
                      <div class="twm-media">
                        <img src="images/jobs-company/pic1.jpg" alt="#" />
                      </div>

                      <h4 class="twm-job-title" style="font-size: 25px; padding-top: 20px;">
                        <?php echo $allJob[0]['name_NB'] ?>
                      </h4>
                      <p class="twm-job-address">
                        <i class="feather-map-pin"></i><?php echo $allJob[0]['diachi'] ?>
                      </p>
                      <div class="twm-job-self-mid">
                        <div class="twm-job-self-mid-left">
                          <div class="twm-jobs-amount">
                            Mức lương:
                            <?php echo $allJob[0]['mucluong'] ?> <span>/ Tháng</span>
                          </div>
                        </div>
                        <div class="twm-job-apllication-area">
                          Hạn nộp hồ sơ:
                          <span class="twm-job-apllication-date"><?php echo $allJob[0]['ngaychot'] ?></span>
                        </div>
                      </div>

                      <div class="twm-job-self-bottom">
                        <a class="site-button" data-bs-toggle="modal" href="#apply_job_popup" role="button">
                          Ứng tuyển ngay
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <h2 class="job-detail__information-detail--title" style="
                        border-left: 6px solid #1967d2;
                        color: #212f3f;
                        font-size: 20px;
                        font-style: normal;
                        font-weight: 700;
                        letter-spacing: -0.2px;
                        line-height: 28px;
                        margin: 0;
                        padding-left: 10px;
                      ">
                Chi tiết tuyển dụng
              </h2>

              <h4 class="twm-s-title">Mô tả công việc:</h4>

              <p>
                <?php echo $allJob[0]['mota'] ?>
              </p>

              <h4 class="twm-s-title">Yêu cầu:</h4>
              <ul class="description-list-2">
                <li>
                  <?php echo $allJob[0]['yeucau'] ?>
                </li>
              </ul>

              <h4 class="twm-s-title">Quyền lợi:</h4>
              <ul class="description-list-2">
                <li>
                  <?php echo $allJob[0]['quyenloi'] ?>
                </li>
              </ul>

              <h4 class="twm-s-title">Share Profile</h4>
              <div class="twm-social-tags">
                <a href="javascript:void(0)" class="fb-clr">Facebook</a>
                <a href="javascript:void(0)" class="tw-clr">Twitter</a>
                <a href="javascript:void(0)" class="link-clr">Linkedin</a>
                <a href="javascript:void(0)" class="whats-clr">Whatsapp</a>
                <a href="javascript:void(0)" class="pinte-clr">Pinterest</a>
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
              <div class="side-bar mb-4">
                <div class="twm-s-info2-wrap mb-5">
                  <div class="twm-s-info2">
                    <h4 class="section-head-small mb-4">
                      Thông tin việc làm
                    </h4>
                    <ul class="twm-job-hilites2">
                      <li>
                        <div class="twm-s-info-inner">
                          <i class="bi bi-calendar-week"></i>
                          <span class="twm-title">Ngày đăng</span>
                          <div class="twm-s-info-discription">
                            <?php echo $allJob[0]['ngaydang'] ?>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="twm-s-info-inner">
                          <i class="bi bi-geo-alt"></i>
                          <span class="twm-title">Địa chỉ</span>
                          <div class="twm-s-info-discription">
                            <?php echo $allJob[0]['diachi'] ?>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="twm-s-info-inner">
                          <i class="bi bi-pin-map-fill"></i>
                          <span class="twm-title">Cấp bậc</span>
                          <div class="twm-s-info-discription">
                            <?php echo $getNganhngheNB_Name[0]['id_nganhnghe_NB'] ?>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="twm-s-info-inner">
                          <i class="bi bi-clock"></i>
                          <span class="twm-title">Kinh nghiệm</span>
                          <div class="twm-s-info-discription"><?php echo $allJob[0]['kinhnghiem'] ?> Năm</div>
                        </div>
                      </li>
                      <li>
                        <div class="twm-s-info-inner">

                          <i class="bi bi-gender-ambiguous"></i>
                          <span class="twm-title">Giới tính</span>
                          <div class="twm-s-info-discription">
                            <?php echo $allJob[0]['gioitinh'] ?>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="twm-s-info-inner">
                          <i class="bi bi-briefcase"></i>
                          <span class="twm-title">Số lượng tuyển</span>
                          <div class="twm-s-info-discription"><?php echo $allJob[0]['soluong'] ?> Người</div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="widget tw-sidebar-tags-wrap">
                  <h4 class="section-head-small mb-4">Job Skills</h4>

                  <div class="tagcloud">
                    <a href="javascript:void(0)">Html</a>
                    <a href="javascript:void(0)">Python</a>
                    <a href="javascript:void(0)">WordPress</a>
                    <a href="javascript:void(0)">JavaScript</a>
                    <a href="javascript:void(0)">Figma</a>
                    <a href="javascript:void(0)">Angular</a>
                    <a href="javascript:void(0)">Reactjs</a>
                    <a href="javascript:void(0)">Drupal</a>
                    <a href="javascript:void(0)">Joomla</a>
                  </div>
                </div>
              </div>
              <div class="twm-s-info3-wrap mb-5">
                <div class="twm-s-info3">
                  <div class="twm-s-info-logo-section">
                    <div class="twm-media">
                      <img src="images/jobs-company/pic1.jpg" alt="#" />
                    </div>
                    <h4 class="twm-title">
                      Senior Web Designer , Developer
                    </h4>
                  </div>
                  <ul>
                    <li>
                      <div class="twm-s-info-inner">
                        <i class="fas fa-building"></i>
                        <span class="twm-title">Company</span>
                        <div class="twm-s-info-discription">
                          Software Development
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="twm-s-info-inner">
                        <i class="fas fa-mobile-alt"></i>
                        <span class="twm-title">Phone</span>
                        <div class="twm-s-info-discription">
                          +291 560 56456
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="twm-s-info-inner">
                        <i class="fas fa-at"></i>
                        <span class="twm-title">Email</span>
                        <div class="twm-s-info-discription">
                          thewebmaxdemo@gmail.com
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="twm-s-info-inner">
                        <i class="fas fa-desktop"></i>
                        <span class="twm-title">Website</span>
                        <div class="twm-s-info-discription">
                          https://themeforest.net
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="twm-s-info-inner">
                        <i class="fas fa-map-marker-alt"></i>
                        <span class="twm-title">Address</span>
                        <div class="twm-s-info-discription">
                          1363-1385 Sunset Blvd Angeles, CA 90026 ,USA
                        </div>
                      </div>
                    </li>
                  </ul>
                  <a href="about-1.html" class="site-button">Vew Profile</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- OUR BLOG END -->
  <!-- RELATED JOBS START -->
  <div class="section-full p-t120 p-b90 site-bg-light-purple twm-related-jobs-carousel-wrap">
    <!-- TITLE START-->
    <div class="section-head center wt-small-separator-outer">
      <div class="wt-small-separator site-text-primary">
        <div>Top Jobs</div>
      </div>
      <h2 class="wt-title">Công Việc Liên Quan</h2>
    </div>
    <!-- TITLE END-->

    <div class="container">
      <div class="section-content">
        <div class="owl-carousel twm-related-jobs-carousel owl-btn-vertical-center owl-loaded owl-drag">

          <div class="owl-stage-outer">

            <div class="owl-stage" style="
                      transform: translate3d(-1568px, 0px, 0px);
                      transition: all 0s ease 0s;
                      width: 5880px;
                    ">
              <?php
              $list_of_latestJob = Job::getLatestJob(9);
              foreach ($list_of_latestJob as $key => $value) {
              ?>
                <div class="owl-item cloned" style="width: 362px; margin-right: 30px">
                  <div class="item">
                    <div class="twm-jobs-grid-style2">
                      <div class="twm-media">
                        <img src="images/jobs-company/pic4.jpg" alt="#" />
                      </div>
                      <span class="twm-job-post-duration">1 days ago</span>
                      <div class="twm-jobs-category green">
                        <span class="twm-bg-sky">New</span>
                      </div>
                      <div class="twm-mid-content">
                        <a href="job-detail.php?id=<?php echo $value['id_job'] ?>" class="twm-job-title">
                          <h4 class="twm-job-title" style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">
                            <?php echo $value['chucvu'] ?>
                          </h4>
                        </a>
                        <span class="icon" style="background: #f4f5f5; border-radius: 4px;color: #212f3f;display: inline-block;
                          font-size: 12px;font-weight: 500;line-height: 16px;padding: 4px 8px;">
                          <?php echo $value['capbac'] ?>
                        </span>
                        <span class="icon" style="background: #f4f5f5; border-radius: 4px;color: #212f3f;display: inline-block;
                          font-size: 12px;font-weight: 500;line-height: 16px;padding: 4px 8px;">
                          <?php echo $value['diachi'] ?>
                        </span>
                      </div>
                      <div class="twm-right-content">
                        <div class="twm-jobs-amount">
                          <?php echo $value['mucluong'] ?> <span>/ Tháng</span>
                        </div>
                        <a href="job-detail.php?id=<?php echo $value['id_job'] ?>" class="twm-jobs-browse site-text-primary">Browse Job</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- RELATED JOBS END -->
</div>
<!-- CONTENT END -->

<?php
require_once 'footer.php';
?>