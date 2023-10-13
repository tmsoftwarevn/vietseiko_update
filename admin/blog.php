<?php
require_once 'header.php';

$blog = new Blog;

?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <div class="container-fluid">
    <!-- Row -->
    <div class="row">
      <div class="col-xl-12">
        <div class="page-titles">
          <ol class="breadcrumb">
            <li class="breadcrumb-item ps-0">
              <a href="javascript:void(0)">CMS</a>
            </li>
            <li class="breadcrumb-item">
              <a href="javascript:void(0)">Blog</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              List
            </li>
          </ol>
        </div>
        <div class="filter cm-content-box box-primary">
          <div class="content-title">
            <div class="cpa">
              <i class="fa-solid fa-filter me-2"></i>Filter
            </div>
            <div class="tools">
              <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
            </div>
          </div>
          <div class="cm-content-body form excerpt">
            <div class="card-body">
              <div class="row">
                <div class="col-xl-3 col-sm-6">
                  <input type="text" class="form-control mb-3 mb-xl-0" id="exampleFormControlInput1" placeholder="Title" />
                </div>
                <div class="col-xl-3 col-sm-6 mb-3 mb-xl-0">
                  <select class="default-select dashboard-select-2 wide">
                    <option selected>Select Status</option>
                    <option value="1">Published</option>
                    <option value="2">Draft</option>
                    <option value="3">Trash</option>
                    <option value="4">Private</option>
                    <option value="5">Pending</option>
                  </select>
                </div>
                <div class="col-xl-3 col-sm-6">
                  <input type="date" name="datepicker" class="form-control mb-3 mb-xl-0" />
                </div>
                <div class="col-xl-3 col-sm-6">
                  <button class="btn btn-info" title="Click here to Search" type="button">
                    <i class="fa fa-search me-1"></i>Filter
                  </button>
                  <button class="btn btn-light" title="Click here to remove filter" type="button">
                    Remove Filter
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <ul class="d-flex align-items-center flex-wrap">
            <li>
              <a href="add-blog.php" class="btn btn-primary">Add Blog</a>
            </li>
            <li>
              <a href="blog-category.php" class="btn btn-primary mx-1">Blog Category</a>
            </li>
            <li>
              <a href="blog-category.php" class="btn btn-primary mt-sm-0 mt-1">Add Blog Category</a>
            </li>
          </ul>
        </div>
        <div class="filter cm-content-box box-primary">
          <div class="content-title">
            <div class="cpa">
              <i class="fa-solid fa-file-lines me-1"></i>Blogs List
            </div>
            <div class="tools">
              <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
            </div>
          </div>
          <div class="cm-content-body form excerpt">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-condensed flip-content">
                  <thead>
                    <tr>
                      <th>S.No</th>
                      <th><a href="javascript:void(0);">Tiêu đề</a></th>
                      <th><a href="javascript:void(0);">Trạng thái</a></th>
                      <th><a href="javascript:void(0);">Ngày đăng</a></th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $page = 1;
                    $resultsPerPage = 5;
                    $totalResults = count(Blog::getAllBlog());
                    if (isset($_GET['page']) == TRUE) {
                      $page = $_GET['page'];
                    }
                    $list_of_Blog = Blog::getAllBlog_andCreatePaginatiion($page, $resultsPerPage);

                    //Output:
                    echo "<p style=\"text-align:center;\"><b>There are $totalResults results.</b></p>";
                    foreach ($list_of_Blog as $key => $value) {
                    ?>
                      <tr>
                        <td><?php echo $value['id_blog']; ?></td>
                        <td><?php echo $value['name_blog']; ?></td>
                        <td>Published</td>
                        <td><?php echo $value['ngaydang']; ?></td>
                        <td>
                          <a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
                            <i class="fa-solid fa-pen-to-square"></i>
                          </a>
                          <a href="delete_blog.php?id_blog=<?php echo $value['id_blog']; ?>" class="btn btn-danger btn-sm content-icon">
                            <i class="fa-solid fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
                  <span>Page 1 of 5, showing 2 records out of 8 total,
                    starting on record 1, ending on 2</span>
                  <nav aria-label="Page navigation example">
                    <ul class="pagination my-2 my-md-0">
                      <?php
                      echo Blog::paginate("blog.php?", $page, $totalResults, $resultsPerPage, 1);
                      ?>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--**********************************
            Content body end
        ***********************************-->

<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
  <div class="copyright">
    <p>
      Copyright © Designed &amp; Developed by
      <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2023
    </p>
  </div>
</div>
<!--**********************************
            Footer end
        ***********************************-->

<!--**********************************
           Support ticket button start
        ***********************************-->

<!--**********************************
           Support ticket button end
        ***********************************-->
</div>
<!--**********************************
        Main wrapper end
    ***********************************-->
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Job Title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Company Name<span class="text-danger scale5 ms-2">*</span></label>
            <input type="text" class="form-control solid" placeholder="Name" aria-label="name" />
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Position<span class="text-danger scale5 ms-2">*</span></label>
            <input type="text" class="form-control solid" placeholder="Name" aria-label="name" />
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Job Category<span class="text-danger scale5 ms-2">*</span></label>
            <select class="nice-select default-select wide form-control solid">
              <option selected>Choose...</option>
              <option>QA Analyst</option>
              <option>IT Manager</option>
              <option>Systems Analyst</option>
            </select>
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Job Type<span class="text-danger scale5 ms-2">*</span></label>
            <select class="nice-select default-select wide form-control solid">
              <option selected>Choose...</option>
              <option>Part-Time</option>
              <option>Full-Time</option>
              <option>Freelancer</option>
            </select>
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">No. of Vancancy<span class="text-danger scale5 ms-2">*</span></label>
            <input type="text" class="form-control solid" placeholder="Name" aria-label="name" />
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Select Experience<span class="text-danger scale5 ms-2">*</span></label>
            <select class="nice-select default-select wide form-control solid">
              <option selected>1 yr</option>
              <option>2 Yr</option>
              <option>3 Yr</option>
              <option>4 Yr</option>
            </select>
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Posted Date<span class="text-danger scale5 ms-2">*</span></label>
            <div class="input-group">
              <div class="input-group-text">
                <i class="far fa-clock"></i>
              </div>
              <input type="date" name="datepicker" class="form-control" />
            </div>
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Last Date To Apply<span class="text-danger scale5 ms-2">*</span></label>
            <div class="input-group">
              <div class="input-group-text">
                <i class="far fa-clock"></i>
              </div>
              <input type="date" name="datepicker" class="form-control" />
            </div>
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Close Date<span class="text-danger scale5 ms-2">*</span></label>
            <div class="input-group">
              <div class="input-group-text">
                <i class="far fa-clock"></i>
              </div>
              <input type="date" name="datepicker" class="form-control" />
            </div>
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Select Gender:<span class="text-danger scale5 ms-2">*</span></label>
            <select class="nice-select default-select wide form-control solid">
              <option selected>Choose...</option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Salary Form<span class="text-danger scale5 ms-2">*</span></label>
            <input type="text" class="form-control solid" placeholder="$" aria-label="name" />
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Salary To<span class="text-danger scale5 ms-2">*</span></label>
            <input type="text" class="form-control solid" placeholder="$" aria-label="name" />
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Enter City:<span class="text-danger scale5 ms-2">*</span></label>
            <input type="text" class="form-control solid" placeholder="$" aria-label="name" />
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Enter State:<span class="text-danger scale5 ms-2">*</span></label>
            <input type="text" class="form-control solid" placeholder="State" aria-label="name" />
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Enter Counter:<span class="text-danger scale5 ms-2">*</span></label>
            <input type="text" class="form-control solid" placeholder="State" aria-label="name" />
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Enter Education Level:<span class="text-danger scale5 ms-2">*</span></label>
            <input type="text" class="form-control solid" placeholder="Education Level" aria-label="name" />
          </div>
          <div class="col-xl-12 mb-4">
            <label class="form-label font-w600">Description:<span class="text-danger scale5 ms-2">*</span></label>
            <textarea class="form-control solid" rows="5" aria-label="With textarea"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">
          Close
        </button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!--**********************************
        Scripts
    ***********************************-->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<!-- Dashboard 1 -->
<script src="js/dashboard/cms.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>
<script src="js/demo.js"></script>
<script src="js/styleSwitcher.js"></script>
</body>
</php>