<?php
require_once 'header.php';
?>


<div class="page-wraper">

  <!-- CONTENT START -->
  <div class="page-content" style="transform: none">
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image: url(images/banner/1.jpg)">
      <div class="overlay-main site-bg-white opacity-01"></div>
      <div class="container">
        <div class="wt-bnr-inr-entry">
          <div class="banner-title-outer">
            <div class="banner-title-name">
              <h2 class="wt-title">Tin Tức</h2>
            </div>
          </div>
          <!-- BREADCRUMB ROW -->

          <div>
            <ul class="wt-breadcrumb breadcrumb-style-2">
              <li><a href="index.html">Home</a></li>
              <li>Cẩm nang nghề nghiệp</li>
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
          <div class="col-lg-8 col-md-12">
            <div class="masonry-wrap row d-flex" style="position: relative; height: 1699.97px">
              <!--Block one-->
              <div class="masonry-item col-lg-6 col-md-12 m-b30" style="position: absolute; left: 0px; top: 0px">
                <div class="blog-post twm-blog-post-2-outer">
                  <?php
                  $list_of_allBanTin = Ban_tin::getAllBan_tin();
                  foreach ($list_of_allBanTin as $post) {
                    ?>
                    <div class="wt-post-media">
                      <!-- <a href="blog-single.html"><img
                                                src="images/blog/latest/<?php echo $post['img_bantin']; ?>"
                                                alt="" /></a> -->
                      <a href="blog-single.html"><img src="images/blog/latest/bg1.jpg" alt="" /></a>
                    </div>
                    <div class="wt-post-info">
                      <div class="wt-post-meta">
                        <ul>
                          <li class="post-date">
                            <?php echo $post['ngaydang']; ?>
                          </li>
                        </ul>
                      </div>

                      <div class="wt-post-title">
                        <h4 class="post-title">
                          <a href="blog-single.html">
                            <?php echo substr($post['tieude_bantin'], 0, 50); ?>...

                          </a>
                        </h4>
                      </div>

                      <div class="wt-post-readmore">
                        <a href="blog-single.html" class="site-button-link site-text-secondry">Read
                          More</a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>

              <!--Block two-->
              <div class="masonry-item col-lg-6 col-md-12 m-b30" style="position: absolute; left: 390px; top: 0px">
                <div class="blog-post twm-blog-post-2-outer">
                  <?php
                  $list_of_allBanTin = Ban_tin::getAllBan_tin();
                  foreach ($list_of_allBanTin as $post) {
                    ?>
                    <div class="wt-post-media">
                      <a href="blog-single.html"><img src="images/blog/latest/bg2.jpg" alt="" /></a>
                    </div>
                    <div class="wt-post-info">
                      <div class="wt-post-meta">
                        <ul>
                          <li class="post-date">
                            <?php echo $post['ngaydang']; ?>
                          </li>
                        </ul>
                      </div>

                      <div class="wt-post-title">
                        <h4 class="post-title">
                          <a href="blog-single.html">
                            <?php echo substr($post['tieude_bantin'], 0, 50); ?>...

                          </a>
                        </h4>
                      </div>

                      <div class="wt-post-readmore">
                        <a href="blog-single.html" class="site-button-link site-text-secondry">Read
                          More</a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>

              <!--Block three-->
              <div class="masonry-item col-lg-6 col-md-12 m-b30" style="position: absolute; left: 0px; top: 566.656px">
                <div class="blog-post twm-blog-post-2-outer">
                  <?php
                  $list_of_allBanTin = Ban_tin::getAllBan_tin();
                  foreach ($list_of_allBanTin as $post) {
                    ?>
                    <div class="wt-post-media">
                      <a href="blog-single.html"><img src="images/blog/latest/bg4.jpg" alt="" /></a>
                    </div>
                    <div class="wt-post-info">
                      <div class="wt-post-meta">
                        <ul>
                          <li class="post-date">
                            <?php echo $post['ngaydang']; ?>
                          </li>
                        </ul>
                      </div>

                      <div class="wt-post-title">
                        <h4 class="post-title">
                          <a href="blog-single.html">
                            <?php echo substr($post['tieude_bantin'], 0, 50); ?>...

                          </a>
                        </h4>
                      </div>

                      <div class="wt-post-readmore">
                        <a href="blog-single.html" class="site-button-link site-text-secondry">Read
                          More</a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>

              <!--Block Four-->
              <div class="masonry-item col-lg-6 col-md-12 m-b30"
                style="position: absolute; left: 390px; top: 566.656px">
                <div class="blog-post twm-blog-post-2-outer">
                  <?php
                  $list_of_allBanTin = Ban_tin::getAllBan_tin();
                  foreach ($list_of_allBanTin as $post) {
                    ?>
                    <div class="wt-post-media">
                      <a href="blog-single.html"><img src="images/blog/latest/bg5.jpg" alt="" /></a>
                    </div>
                    <div class="wt-post-info">
                      <div class="wt-post-meta">
                        <ul>
                          <li class="post-date">
                            <?php echo $post['ngaydang']; ?>
                          </li>
                        </ul>
                      </div>

                      <div class="wt-post-title">
                        <h4 class="post-title">
                          <a href="blog-single.html">
                            <?php echo substr($post['tieude_bantin'], 0, 50); ?>...

                          </a>
                        </h4>
                      </div>

                      <div class="wt-post-readmore">
                        <a href="blog-single.html" class="site-button-link site-text-secondry">Read
                          More</a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>

              <!--Block Five-->
              <div class="masonry-item col-lg-6 col-md-12 m-b30" style="position: absolute; left: 0px; top: 1133.31px">
                <div class="blog-post twm-blog-post-2-outer">
                  <?php
                  $list_of_allBanTin = Ban_tin::getAllBan_tin();
                  foreach ($list_of_allBanTin as $post) {
                    ?>
                    <div class="wt-post-media">
                      <a href="blog-single.html"><img src="images/blog/latest/bg6.jpg" alt="" /></a>
                    </div>
                    <div class="wt-post-info">
                      <div class="wt-post-meta">
                        <ul>
                          <li class="post-date">
                            <?php echo $post['ngaydang']; ?>
                          </li>
                        </ul>
                      </div>

                      <div class="wt-post-title">
                        <h4 class="post-title">
                          <a href="blog-single.html">
                            <?php echo substr($post['tieude_bantin'], 0, 50); ?>...

                          </a>
                        </h4>
                      </div>

                      <div class="wt-post-readmore">
                        <a href="blog-single.html" class="site-button-link site-text-secondry">Read
                          More</a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>

              <!--Block Six-->
              <div class="masonry-item col-lg-6 col-md-12 m-b30"
                style="position: absolute; left: 390px; top: 1133.31px">
                <div class="blog-post twm-blog-post-2-outer">
                  <?php
                  $list_of_allBanTin = Ban_tin::getAllBan_tin();
                  foreach ($list_of_allBanTin as $post) {
                    ?>
                    <div class="wt-post-media">
                      <a href="blog-single.html"><img src="images/blog/latest/bg6.jpg" alt="" /></a>
                    </div>
                    <div class="wt-post-info">
                      <div class="wt-post-meta">
                        <ul>
                          <li class="post-date">
                            <?php echo $post['ngaydang']; ?>
                          </li>
                        </ul>
                      </div>

                      <div class="wt-post-title">
                        <h4 class="post-title">
                          <a href="blog-single.html">
                            <?php echo substr($post['tieude_bantin'], 0, 50); ?>...

                          </a>
                        </h4>
                      </div>

                      <div class="wt-post-readmore">
                        <a href="blog-single.html" class="site-button-link site-text-secondry">Read
                          More</a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>

            <div class="pagination-outer">
              <div class="pagination-style1">
                <ul class="clearfix">
                  <?php
                  $totalPages = 5;
                  $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
                  $paginationLimit = 3;
                  $startPage = max(1, $currentPage - $paginationLimit);
                  $endPage = min($totalPages, $currentPage + $paginationLimit);
                  if ($currentPage > 1) {
                    echo '<li class="prev"><a href="?page=' . ($currentPage - 1) . '"><span> <i class="bi bi-chevron-left"></i> </span></a></li>';
                  }
                  for ($i = $startPage; $i <= $endPage; $i++) {
                    if ($i == $currentPage) {
                      echo '<li class="active"><a href="javascript:;">' . $i . '</a></li>';
                    } else {
                      echo '<li><a href="?page=' . $i . '">' . $i . '</a></li>';
                    }
                  }
                  if ($currentPage < $totalPages) {
                    echo '<li class="next"><a href="?page=' . ($currentPage + 1) . '"><span> <i class="bi bi-chevron-right"></i> </span></a></li>';
                  }
                  ?>
                </ul>
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
                    left: 862px;
                  ">
              <div class="side-bar">
                <div class="widget search-bx">
                  <form role="search" method="post">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search" />
                      <button class="btn" type="button" id="button-addon2">
                        <i class="feather-search"></i>
                      </button>
                    </div>
                  </form>
                </div>

                <div class="widget all_services_list">
                  <h4 class="section-head-small mb-4">Categories</h4>
                  <div class="all_services m-b30">
                    <ul>
                      <li>
                        <a href="job-detail.html">Categories</a>
                        <span class="badge">08</span>
                      </li>
                      <li>
                        <a href="job-detail.html">Education</a>
                        <span class="badge">12</span>
                      </li>
                      <li>
                        <a href="job-detail.html">Information</a><span class="badge">15</span>
                      </li>
                      <li>
                        <a href="job-detail.html">Jobs</a><span class="badge">25</span>
                      </li>
                      <li>
                        <a href="job-detail.html">Learn</a><span class="badge">36</span>
                      </li>
                      <li>
                        <a href="job-detail.html">Skill</a><span class="badge">12</span>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="widget recent-posts-entry">
                  <h4 class="section-head-small mb-4">Recent Article</h4>
                  <div class="section-content">
                    <div class="widget-post-bx">
                      <div class="widget-post clearfix">
                        <?php $list_of_allBanTin = Ban_tin::getAllBan_tin();
                        foreach ($list_of_allBanTin as $post) {
                          ?>
                          <div class="wt-post-media">
                            <img src="images/blog/recent-blog/pic1.jpg" alt="" />
                          </div>
                          <div class="wt-post-info">
                            <div class="wt-post-header">
                              <span class="post-date">
                                <?php echo $post['ngaydang'] ?>
                              </span>
                              <span class="post-title">
                                <a href="blog-single.html">
                                  <?php echo substr($post['tieude_bantin'], 0, 80); ?>...
                                </a>
                              </span>
                            </div>
                          <?php } ?>
                        </div>
                      </div>

                      <div class="widget-post clearfix">
                        <?php $list_of_allBanTin = Ban_tin::getAllBan_tin();
                        foreach ($list_of_allBanTin as $post) {
                          ?>
                          <div class="wt-post-media">
                            <img src="images/blog/recent-blog/pic2.jpg" alt="" />
                          </div>
                          <div class="wt-post-info">
                            <div class="wt-post-header">
                              <span class="post-date">
                                <?php echo $post['ngaydang'] ?>
                              </span>
                              <span class="post-title">
                                <a href="blog-single.html">
                                  <?php echo substr($post['tieude_bantin'], 0, 80); ?>...
                                </a>
                              </span>
                            </div>
                          <?php } ?>
                        </div>

                        <div class="widget-post clearfix">
                          <?php $list_of_allBanTin = Ban_tin::getAllBan_tin();
                          foreach ($list_of_allBanTin as $post) {
                            ?>
                            <div class="wt-post-media">
                              <img src="images/blog/recent-blog/pic3.jpg" alt="" />
                            </div>
                            <div class="wt-post-info">
                              <div class="wt-post-header">
                                <span class="post-date">
                                  <?php echo $post['ngaydang'] ?>
                                </span>
                                <span class="post-title">
                                  <a href="blog-single.html">
                                    <?php echo substr($post['tieude_bantin'], 0, 80); ?>...
                                  </a>
                                </span>
                              </div>
                            <?php } ?>
                          </div>

                          <div class="widget-post clearfix">
                            <?php $list_of_allBanTin = Ban_tin::getAllBan_tin();
                            foreach ($list_of_allBanTin as $post) {
                              ?>
                              <div class="wt-post-media">
                                <img src="images/blog/recent-blog/pic4.jpg" alt="" />
                              </div>
                              <div class="wt-post-info">
                                <div class="wt-post-header">
                                  <span class="post-date">
                                    <?php echo $post['ngaydang'] ?>
                                  </span>
                                  <span class="post-title">
                                    <a href="blog-single.html">
                                      <?php echo substr($post['tieude_bantin'], 0, 80); ?>...
                                    </a>
                                  </span>
                                </div>
                              <?php } ?>
                            </div>

                            <div class="widget-post clearfix">
                              <?php $list_of_allBanTin = Ban_tin::getAllBan_tin();
                              foreach ($list_of_allBanTin as $post) {
                                ?>
                                <div class="wt-post-media">
                                  <img src="images/blog/recent-blog/pic5.jpg" alt="" />
                                </div>
                                <div class="wt-post-info">
                                  <div class="wt-post-header">
                                    <span class="post-date">
                                      <?php echo $post['ngaydang'] ?>
                                    </span>
                                    <span class="post-title">
                                      <a href="blog-single.html">
                                        <?php echo substr($post['tieude_bantin'], 0, 80); ?>...
                                      </a>
                                    </span>
                                  </div>
                                <?php } ?>
                              </div>
                            </div>
                          </div>
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
                </div>
              </div>
            </div>
            <!-- OUR BLOG END -->
          </div>
          <!--Model Popup Section End-->
        </div>

        <!-- JAVASCRIPT  FILES ========================================= -->
        <script src="public/js/jquery-3.6.0.min.js"></script>
        <!-- JQUERY.MIN JS -->
        <script src="public/js/popper.min.js"></script>
        <!-- POPPER.MIN JS -->
        <script src="public/js/bootstrap.min.js"></script>
        <!-- BOOTSTRAP.MIN JS -->
        <script src="public/js/magnific-popup.min.js"></script>
        <!-- MAGNIFIC-POPUP JS -->
        <script src="public/js/waypoints.min.js"></script>
        <!-- WAYPOINTS JS -->
        <script src="public/js/counterup.min.js"></script>
        <!-- COUNTERUP JS -->
        <script src="public/js/waypoints-sticky.min.js"></script>
        <!-- STICKY HEADER -->
        <script src="public/js/isotope.pkgd.min.js"></script>
        <!-- MASONRY  -->
        <script src="public/js/imagesloaded.pkgd.min.js"></script>
        <!-- MASONRY  -->
        <script src="public/js/owl.carousel.min.js"></script>
        <!-- OWL  SLIDER  -->
        <script src="public/js/theia-sticky-sidebar.js"></script>
        <!-- STICKY SIDEBAR  -->
        <script src="public/js/lc_lightbox.lite.js"></script>
        <!-- IMAGE POPUP -->
        <script src="public/js/bootstrap-select.min.js"></script>
        <!-- Form js -->
        <script src="public/js/dropzone.js"></script>
        <!-- IMAGE UPLOAD  -->
        <script src="public/js/jquery.scrollbar.js"></script>
        <!-- scroller -->
        <script src="public/js/bootstrap-datepicker.js"></script>
        <!-- scroller -->
        <script src="public/js/jquery.dataTables.min.js"></script>
        <!-- Datatable -->
        <script src="public/js/dataTables.bootstrap5.min.js"></script>
        <!-- Datatable -->
        <script src="public/js/chart.js"></script>
        <!-- Chart -->
        <script src="public/js/bootstrap-slider.min.js"></script>
        <!-- Price range slider -->
        <script src="public/js/swiper-bundle.min.js"></script>
        <!-- Swiper JS -->
        <script src="public/js/custom.js"></script>
        <!-- CUSTOM FUCTIONS  -->
        <script src="public/js/switcher.js"></script>
        <!-- SHORTCODE FUCTIONS  -->
        </body>

        </html>