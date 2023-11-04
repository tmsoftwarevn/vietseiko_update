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

      <!-- CONTENT START -->
      <div class="page-content" style="transform: none">
        <!-- INNER PAGE BANNER -->
        <div
          class="wt-bnr-inr overlay-wraper bg-center"
          style="background-image: url(images/banner/1.jpg)"
        >
          <div class="overlay-main site-bg-white opacity-01"></div>
          <div class="container">
            <div class="wt-bnr-inr-entry">
              <!-- BREADCRUMB ROW -->

              <div>
                <ul class="wt-breadcrumb breadcrumb-style-2">
                  <li><a href="index.php">Home</a></li>
                  <li><?php echo  $allBlog[0]['name_blog'] ?></li>
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
              <div
                class="row d-flex justify-content-center"
                style="transform: none"
              >
                <div class="col-lg-8 col-md-12">
                  <!-- BLOG START -->
                  <div class="blog-post-single-outer">
                    <div class="blog-post-single bg-white">
                      <div class="wt-post-info">
                        <div class="wt-post-media m-b30" style="width: 50%;">
                          <img src="images/blog/latest/<?php echo $allBlog[0]['img_blog'] ?>" alt="" />
                        </div>

                        <div class="wt-post-title">
                          <div class="wt-post-meta-list">
                            <div class="wt-list-content post-date">
                            <?php echo $allBlog[0]['ngaydang'] ?>
                            </div>
                            <div class="wt-list-content post-author">
                              By Admin
                            </div>
                          </div>
                          <h3 class="post-title" style="font-size: 30px;">
                          <?php echo $allBlog[0]['name_blog'] ?>
                          </h3>
                        </div>

                        <div class="wt-post-discription">
                          <div class="wt-post-discription">
                            <blockquote>
                              <p>
                                <span>"</span> <?php echo $allBlog[0]['tieude_blog'] ?>
                              </p>
                              <strong>Richard Anderson</strong>
                            </blockquote>
                          </div>
                          <p><?php echo $allBlog[0]['noidung_blog'] ?></p>
                        </div>

                        <div class="twm-posts-author">
                          <div class="twm-post-author-pic">
                            <img src="images/blog/post-author.jpg" alt="#" />
                          </div>
                          <div class="twm-post-author-content">
                            <span>435 Posts Since 2018</span>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor incididunt
                              ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam,
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="post-area-tags-wrap">
                      <div class="post-social-icons-wrap">
                        <h4 class="mb-4">Share</h4>
                        <ul class="post-social-icons">
                          <li>
                            <a href="javascript:void(0);">
                              <i class="bi bi-facebook"></i
                            ></a>
                          </li>
                          <li>
                            <a href="javascript:void(0);">
                              <i class="bi bi-youtube"></i
                            ></a>
                          </li>
                          <li>
                            <a href="javascript:void(0);">
                              <i class="bi bi-linkedin"></i
                            ></a>
                          </li>
                          <li>
                            <a href="javascript:void(0);">
                              <i class="bi bi-tiktok"></i
                            ></a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    <div class="clear" id="comment-list">
                      <div class="comments-area" id="comments">
                        <h3 class="section-head-small mb-4">Comments</h3>
                        <div>
                          <!-- COMMENT LIST START -->
                          <ol class="comment-list">
                            <li class="comment">
                              <!-- COMMENT BLOCK -->
                              <div class="comment-body">
                                <div class="comment-author">
                                  <img
                                    class="avatar photo"
                                    src="images/blog/comment/pic1.jpg"
                                    alt=""
                                  />
                                  <div class="comment-meta">
                                    <a href="javascript:void(0);"
                                      >Apr 05, 2023</a
                                    >
                                  </div>
                                </div>
                                <div class="comment-info">
                                  <cite class="fn">Richard Anderson</cite>
                                  <div class="reply">
                                    <a
                                      href="javscript:;"
                                      class="comment-reply-link"
                                      >Reply</a
                                    >
                                  </div>
                                  <p>
                                    No one rejects, dislikes, or avoids pleasure
                                    itself, because pleasure, but because those
                                    who do not know how to pursue.
                                  </p>
                                </div>
                              </div>
                            </li>
                            <li class="comment">
                              <!-- COMMENT BLOCK -->
                              <div class="comment-body">
                                <div class="comment-author">
                                  <img
                                    class="avatar photo"
                                    src="images/blog/comment/pic2.jpg"
                                    alt=""
                                  />
                                  <div class="comment-meta">
                                    <a href="javascript:void(0);"
                                      >Apr 08, 2023</a
                                    >
                                  </div>
                                </div>
                                <div class="comment-info">
                                  <cite class="fn">Devid Abraham</cite>
                                  <div class="reply">
                                    <a
                                      href="javscript:;"
                                      class="comment-reply-link"
                                      >Reply</a
                                    >
                                  </div>
                                  <p>
                                    No one rejects, dislikes, or avoids pleasure
                                    itself, because pleasure, but because those
                                    who do not know how to pursue.
                                  </p>
                                </div>
                              </div>
                              <!-- SUB COMMENT BLOCK -->
                            </li>
                          </ol>
                          <!-- COMMENT LIST END -->

                          <!-- LEAVE A REPLY START -->
                          <div class="comment-respond m-t30" id="respond">
                            <h3
                              class="comment-reply-title section-head-small mb-4"
                              id="reply-title"
                            >
                              Leave a reply
                              <small>
                                <a
                                  style="display: none"
                                  href="#"
                                  id="cancel-comment-reply-link"
                                  rel="nofollow"
                                  >Cancel reply</a
                                >
                              </small>
                            </h3>

                            <form
                              class="comment-form"
                              id="commentform"
                              method="post"
                            >
                              <div class="row">
                                <div class="comment-form-author col-md-6 mb-3">
                                  <label
                                    >Your Name*
                                    <span class="required">*</span></label
                                  >
                                  <input
                                    class="form-control"
                                    type="text"
                                    value=""
                                    name="user-comment"
                                    placeholder="Your Name*"
                                    id="author"
                                  />
                                </div>

                                <div class="comment-form-email col-md-6 mb-3">
                                  <label
                                    >Your Email*
                                    <span class="required">*</span></label
                                  >
                                  <input
                                    class="form-control"
                                    type="text"
                                    value=""
                                    name="email"
                                    placeholder="Your Email*"
                                  />
                                </div>

                                <div
                                  class="comment-form-comment col-md-12 mb-4"
                                >
                                  <label>Message*</label>
                                  <textarea
                                    class="form-control"
                                    rows="8"
                                    name="comment"
                                    placeholder="Message*"
                                    id="comment"
                                  ></textarea>
                                </div>

                                <div class="form-submit">
                                  <button type="submit" class="site-button">
                                    Submit Now
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>
                          <!-- LEAVE A REPLY END -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="col-lg-4 col-md-12 rightSidebar"
                  style="
                    position: relative;
                    overflow: visible;
                    box-sizing: border-box;
                    min-height: 1px;
                  "
                >
                  <div
                    class="theiaStickySidebar"
                    style="
                      padding-top: 0px;
                      padding-bottom: 1px;
                      position: static;
                      transform: none;
                      top: 0px;
                      left: 903px;
                    "
                  >
                    <div class="side-bar">
                      <div class="widget search-bx">
                        <form role="search" method="post">
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Search"
                            />
                            <button
                              class="btn"
                              type="button"
                              id="button-addon2"
                            >
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
                              <a href="job-detail.html">Information</a
                              ><span class="badge">15</span>
                            </li>
                            <li>
                              <a href="job-detail.html">Jobs</a
                              ><span class="badge">25</span>
                            </li>
                            <li>
                              <a href="job-detail.html">Learn</a
                              ><span class="badge">36</span>
                            </li>
                            <li>
                              <a href="job-detail.html">Skill</a
                              ><span class="badge">12</span>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <div class="widget recent-posts-entry">
                        <h4 class="section-head-small mb-4">Recent Article</h4>
                        <div class="section-content">
                          <div class="widget-post-bx">
                            <div class="widget-post clearfix">
                              <div class="wt-post-media">
                                <img
                                  src="images/blog/recent-blog/pic1.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="wt-post-info">
                                <div class="wt-post-header">
                                  <span class="post-date">April 08, 2023</span>
                                  <span class="post-title">
                                    <a href="blog-single.html"
                                      >Equipment you can count on. People you
                                      can trust.</a
                                    >
                                  </span>
                                </div>
                              </div>
                            </div>

                            <div class="widget-post clearfix">
                              <div class="wt-post-media">
                                <img
                                  src="images/blog/recent-blog/pic2.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="wt-post-info">
                                <div class="wt-post-header">
                                  <span class="post-date">April 12, 2023</span>
                                  <span class="post-title">
                                    <a href="blog-single.html"
                                      >Advanced Service Functions by Air
                                      Transport</a
                                    >
                                  </span>
                                </div>
                              </div>
                            </div>

                            <div class="widget-post clearfix">
                              <div class="wt-post-media">
                                <img
                                  src="images/blog/recent-blog/pic3.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="wt-post-info">
                                <div class="wt-post-header">
                                  <span class="post-date">April 15, 2023</span>
                                  <span class="post-title">
                                    <a href="blog-single.html"
                                      >Proper arrangement for keeping the goods
                                      in the warehouse</a
                                    >
                                  </span>
                                </div>
                              </div>
                            </div>

                            <div class="widget-post clearfix">
                              <div class="wt-post-media">
                                <img
                                  src="images/blog/recent-blog/pic4.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="wt-post-info">
                                <div class="wt-post-header">
                                  <span class="post-date">April 18, 2023</span>
                                  <span class="post-title">
                                    <a href="blog-single.html"
                                      >Equipment you can count on. People you
                                      can trust.</a
                                    >
                                  </span>
                                </div>
                              </div>
                            </div>

                            <div class="widget-post clearfix">
                              <div class="wt-post-media">
                                <img
                                  src="images/blog/recent-blog/pic5.jpg"
                                  alt=""
                                />
                              </div>
                              <div class="wt-post-info">
                                <div class="wt-post-header">
                                  <span class="post-date">April 20, 2023</span>
                                  <span class="post-title">
                                    <a href="blog-single.html"
                                      >Proper arrangement for keeping the goods
                                      in the warehouse</a
                                    >
                                  </span>
                                </div>
                              </div>
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
        </div>
        <!-- OUR BLOG END -->
      </div>
      <!-- CONTENT END -->

<?php
require_once "footer.php";
?>