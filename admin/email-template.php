<?php
require_once 'header.php';

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
          <div class="d-flex">
            <ol class="breadcrumb align-items-center mt-0">
              <li class="breadcrumb-item ps-0">
                <a href="javascript:void(0)">CMS</a>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Email Template</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                List
              </li>
            </ol>
            <button class="btn btn-primary w-auto dropdown-toggle ms-auto" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Actions
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li class="ps-0">
                <a class="dropdown-item" href="#">Action</a>
              </li>
              <li class="ps-0">
                <a class="dropdown-item" href="#">Another action</a>
              </li>
              <li class="ps-0">
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="filter cm-content-box box-primary">
          <div class="content-title">
            <div class="cpa">
              <i class="fa-solid fa-filter me-1"></i>Filter
            </div>
            <div class="tools">
              <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
            </div>
          </div>
          <div class="cm-content-body form excerpt">
            <div class="card-body">
              <div class="row">
                <div class="col-xl-3 col-sm-6">
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Title" />
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3 mb-sm-0">
                  <select class="form-control default-select dashboard-select-2 h-auto wide">
                    <option value="AL">Select Status</option>
                    <option value="WY">Active</option>
                    <option value="WY">Inactive</option>
                  </select>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control" placeholder="Title" />
                </div>
                <div class="col-xl-3 col-sm-6">
                  <a href="javascript:void(0);" class="btn btn-primary">Filter</a>
                  <a href="javascript:void(0);" class="btn btn-primary">Remove Filter</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <ul class="d-flex align-items-center">
            <li>
              <a href="add-email.php" class="btn btn-primary">New Email Template</a>
            </li>
          </ul>
        </div>
        <div class="filter cm-content-box box-primary">
          <div class="content-title">
            <div class="cpa">
              <i class="fa-solid fa-envelope me-1"></i> Email Template
              List
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
                      <th>Sr.No</th>
                      <th>Title</th>
                      <th>Status</th>
                      <th>Modified</th>
                      <th class="pe-4">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>User Registration</td>

                      <td>
                        <a onclick="myFunction(this)" class="btn btn-primary btn-sm content-icon status m-0"><i class="fa-solid fa-check"></i>
                        </a>
                      </td>
                      <td>03 Feb, 2024</td>
                      <td>
                        <a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon me-0">
                          <i class="fa-solid fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>User Forgot Password</td>
                      <td>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm content-icon m-0"><i class="fa-solid fa-check"></i></a>
                      </td>
                      <td>04 Feb, 2024</td>
                      <td>
                        <a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon me-0">
                          <i class="fa-solid fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>User Activation</td>
                      <td>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm content-icon m-0"><i class="fa-solid fa-check"></i></a>
                      </td>
                      <td>05 Feb, 2024</td>
                      <td>
                        <a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon me-0">
                          <i class="fa-solid fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>User Login</td>
                      <td>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm content-icon m-0"><i class="fa-solid fa-check"></i></a>
                      </td>
                      <td>06 Feb, 2024</td>
                      <td>
                        <a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon me-0">
                          <i class="fa-solid fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>User Account Locked</td>
                      <td>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm content-icon m-0"><i class="fa-solid fa-check"></i></a>
                      </td>
                      <td>07 Feb, 2024</td>
                      <td>
                        <a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon me-0">
                          <i class="fa-solid fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="d-flex align-items-center justify-content-sm-between justify-content-center flex-wrap">
                  <span>Page 1 of 4, showing 2 records out of 8 total,
                    starting on record 1, ending on 2</span>
                  <nav aria-label="Page navigation example">
                    <ul class="pagination my-2 my-md-0">
                      <li class="page-item">
                        <a class="page-link" href="javascript:void(0);"><i class="fa-solid fa-angle-left"></i></a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">2</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="javascript:void(0);"><i class="fa-solid fa-angle-right"></i></a>
                      </li>
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

</html>