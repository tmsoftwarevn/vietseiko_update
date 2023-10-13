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
          <ol class="breadcrumb">
            <li class="breadcrumb-item ps-0">
              <a href="javascript:void(0)">CMS</a>
            </li>
            <li class="breadcrumb-item">
              <a href="javascript:void(0)">Blog Category</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              List
            </li>
          </ol>
        </div>
        <div class="row">
          <div class="col-xl-4">
            <div class="filter cm-content-box box-primary">
              <div class="content-title">
                <div class="cpa">Add Blog Category</div>
                <div class="tools">
                  <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
                </div>
              </div>
              <div class="cm-content-body form excerpt">
                <div class="card-body">
                  <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Name" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" placeholder="Slug" />
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                  </div>
                  <div>
                    <button type="button" class="btn btn-primary">
                      Save
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8">
            <div class="filter cm-content-box box-primary">
              <div class="content-title">
                <div class="cpa">Blog List</div>
                <div class="tools">
                  <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
                </div>
              </div>
              <div class="cm-content-body publish-content form excerpt">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                      <thead>
                        <tr>
                          <th scope="col">S.No</th>
                          <th scope="col">name</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Beauty</td>
                          <td>
                            <div class="">
                              <a href="javascript:void(0);">Edit</a>
                              <span>|</span>
                              <a href="javascript:void(0);">Up</a>
                              <span>|</span>
                              <a href="javascript:void(0);">down</a>
                              <span>|</span>
                              <a href="javascript:void(0);">delete</a>
                              <span>|</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Fashion</td>
                          <td>
                            <div>
                              <a href="javascript:void(0);">Edit</a>
                              <span>|</span>
                              <a href="javascript:void(0);">Up</a>
                              <span>|</span>
                              <a href="javascript:void(0);">down</a>
                              <span>|</span>
                              <a href="javascript:void(0);">delete</a>
                              <span>|</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Lifestyle</td>
                          <td>
                            <div>
                              <a href="javascript:void(0);">Edit</a>
                              <span>|</span>
                              <a href="javascript:void(0);">Up</a>
                              <span>|</span>
                              <a href="javascript:void(0);">down</a>
                              <span>|</span>
                              <a href="javascript:void(0);">delete</a>
                              <span>|</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Food</td>
                          <td>
                            <div>
                              <a href="javascript:void(0);">Edit</a>
                              <span>|</span>
                              <a href="javascript:void(0);">Up</a>
                              <span>|</span>
                              <a href="javascript:void(0);">down</a>
                              <span>|</span>
                              <a href="javascript:void(0);">delete</a>
                              <span>|</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Beauty</td>
                          <td>
                            <div>
                              <a href="javascript:void(0);">Edit</a>
                              <span>|</span>
                              <a href="javascript:void(0);">Up</a>
                              <span>|</span>
                              <a href="javascript:void(0);">down</a>
                              <span>|</span>
                              <a href="javascript:void(0);">delete</a>
                              <span>|</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>Fashion</td>
                          <td>
                            <div>
                              <a href="javascript:void(0);">Edit</a>
                              <span>|</span>
                              <a href="javascript:void(0);">Up</a>
                              <span>|</span>
                              <a href="javascript:void(0);">down</a>
                              <span>|</span>
                              <a href="javascript:void(0);">delete</a>
                              <span>|</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>Lifestyle</td>
                          <td>
                            <div>
                              <a href="javascript:void(0);">Edit</a>
                              <span>|</span>
                              <a href="javascript:void(0);">Up</a>
                              <span>|</span>
                              <a href="javascript:void(0);">down</a>
                              <span>|</span>
                              <a href="javascript:void(0);">delete</a>
                              <span>|</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>Food</td>
                          <td>
                            <div>
                              <a href="javascript:void(0);">Edit</a>
                              <span>|</span>
                              <a href="javascript:void(0);">Up</a>
                              <span>|</span>
                              <a href="javascript:void(0);">down</a>
                              <span>|</span>
                              <a href="javascript:void(0);">delete</a>
                              <span>|</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td>Lifestyle</td>
                          <td>
                            <div>
                              <a href="javascript:void(0);">Edit</a>
                              <span>|</span>
                              <a href="javascript:void(0);">Up</a>
                              <span>|</span>
                              <a href="javascript:void(0);">down</a>
                              <span>|</span>
                              <a href="javascript:void(0);">delete</a>
                              <span>|</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>Food</td>
                          <td>
                            <div>
                              <a href="javascript:void(0);">Edit</a>
                              <span>|</span>
                              <a href="javascript:void(0);">Up</a>
                              <span>|</span>
                              <a href="javascript:void(0);">down</a>
                              <span>|</span>
                              <a href="javascript:void(0);">delete</a>
                              <span>|</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>11</td>
                          <td>Fashion</td>
                          <td>
                            <div>
                              <a href="javascript:void(0);">Edit</a>
                              <span>|</span>
                              <a href="javascript:void(0);">Up</a>
                              <span>|</span>
                              <a href="javascript:void(0);">down</a>
                              <span>|</span>
                              <a href="javascript:void(0);">delete</a>
                              <span>|</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>12</td>
                          <td>Lifestyle</td>
                          <td>
                            <div>
                              <a href="javascript:void(0);">Edit</a>
                              <span>|</span>
                              <a href="javascript:void(0);">Up</a>
                              <span>|</span>
                              <a href="javascript:void(0);">down</a>
                              <span>|</span>
                              <a href="javascript:void(0);">delete</a>
                              <span>|</span>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
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