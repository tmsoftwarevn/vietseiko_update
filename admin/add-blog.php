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
              <a href="javascript:void(0)">Blog</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Add
            </li>
          </ol>
        </div>
        <div class="mb-3">
          <ul class="d-flex align-items-center flex-wrap">
            <li>
              <a href="add-email.php" class="btn btn-primary">Blog List</a>
            </li>
            <li>
              <a href="blog-category.php" class="btn btn-primary mx-1">Blog Category</a>
            </li>
            <li>
              <a href="blog-category.php" class="btn btn-primary me-1 mt-sm-0 mt-1">Add Blog Category</a>
            </li>
            <li>
              <a href="javascript:void(0);" class="btn btn-primary open mt-1 mt-md-0">Screen Option</a>
            </li>
          </ul>
        </div>
        <div class="main-check" style="display: none">
          <div class="row">
            <h6 class="mb-3">Show on screen</h6>
            <div class="col-xl-2 col-lg-3 col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-1" />
                <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-1">
                  Page Attributes
                </label>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-2" />
                <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-2">
                  Featured Image
                </label>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-3" />
                <label class="form-check-label mb-0" for="flexCheckDefault-3">
                  Excerpt
                </label>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-4" />
                <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-4">
                  Custom Fields
                </label>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-5" />
                <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-5">
                  Discussion
                </label>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-6" />
                <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-6">
                  Slug
                </label>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-7" />
                <label class="form-check-label mb-0" for="flexCheckDefault-7">
                  Author
                </label>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-8" />
                <label class="form-check-label mb-0" for="flexCheckDefault-8">
                  Page Type
                </label>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-9" />
                <label class="form-check-label mb-0" for="flexCheckDefault-9">
                  Seo
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Tiêu đề</label>
          <input type="text" class="form-control w-50" placeholder="Tiêu đề" />
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="filter cm-content-box box-primary">
              <div class="content-title">
                <div class="cpa">Miêu tả</div>
                <div class="tools">
                  <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
                </div>
              </div>
              <div class="cm-content-body publish-content form excerpt">
                <div class="card-body">
                  <div class="mb-3">
                    <label class="form-label">Miêu tả</label>
                    <textarea class="form-control" rows="3"></textarea>
                    <div class="form-text">
                      Excerpts are optional hand-crafted summaries of your
                      content that can be used in your theme.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card h-auto">
              <div class="card-body pt-3">
                <div class="textarea ">
                  <div id="editor"></div>
                  <script>
                    ClassicEditor
                      .create(document.querySelector('#editor'))
                      .then(editor => {
                        console.log(editor);
                      })
                      .catch(error => {
                        console.error(error);
                      });
                  </script>
                </div>
              </div>
            </div>
            <div class="filter cm-content-box box-primary">
              <div class="content-title">
                <div class="cpa">Seo</div>
                <div class="tools">
                  <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
                </div>
              </div>
              <div class="cm-content-body form excerpt">
                <div class="card-body">
                  <label class="form-label">Page Title</label>
                  <input type="text" class="form-control mb-3" placeholder="Page title" />
                  <div class="row">
                    <div class="col-xl-6 col-sm-6">
                      <label class="form-label">Keywords</label>
                      <input type="text" class="form-control mb-sm-0 mb-3" placeholder="Enter meta Keywords" />
                    </div>
                    <div class="col-xl-6 col-sm-6">
                      <label class="form-label">Descriptions</label>
                      <textarea class="form-control" placeholder="Enter meta Keywords" rows="3"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="right-sidebar-sticky">
              <div class="filter cm-content-box box-primary">
                <div class="content-title">
                  <div class="cpa">Published</div>
                  <div class="tools">
                    <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
                  </div>
                </div>
                <div class="cm-content-body publish-content form excerpt">
                  <div class="card-body pb-0">
                    <ul class="d-flex align-items-center mb-2">
                      <li>
                        <a href="javascript:void(0);"><i class="fa-solid fa-key"></i></a>
                      </li>
                      <li>
                        <a href="javascript:void(0);" class="ms-2">Status:</a>
                      </li>
                      <li>
                        <strong><a href="javascript:void(0);" class="mx-2">Published</a></strong>
                      </li>
                      <li>
                        <a href="javascript:void(0);" class="accordion accordion-primary" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne" aria-expanded="true" role="button">Edit</a>
                      </li>
                    </ul>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion-one">
                      <div class="accordion-body-text border rounded">
                        <div class="mb-2">
                          <label class="from-label w-100">Content Type</label>
                          <select class="publish-drop default-select">
                            <option selected>Select Status</option>
                            <option value="1">Published</option>
                            <option value="2">Draft</option>
                            <option value="3">Trash</option>
                            <option value="4">Private</option>
                            <option value="5">Pending</option>
                          </select>
                        </div>
                        <div>
                          <button class="btn btn-primary btn-sm me-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Ok
                          </button>
                          <button class="btn btn-danger light btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Cancel
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="d-flex align-items-center mb-2">
                      <li>
                        <a href="javascript:void(0);"><i class="fa-solid fa-eye"></i></a>
                      </li>
                      <li>
                        <a href="javascript:void(0);" class="ms-2">Status:</a>
                      </li>
                      <li>
                        <strong><a href="javascript:void(0);" class="mx-2">Public</a></strong>
                      </li>
                      <li>
                        <a href="javascript:void(0);" class="accordion accordion-primary" id="headingtwo" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-controls="collapsetwo" aria-expanded="true" role="button">Edit</a>
                      </li>
                    </ul>
                    <div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-bs-parent="#accordion-one">
                      <div class="accordion-body-text border rounded">
                        <div class="basic-form">
                          <form>
                            <div class="mb-3 mb-0">
                              <div class="radio">
                                <label class="form-check-label"><input type="radio" name="optradio" class="form-check-input" />
                                  Public</label>
                              </div>
                              <div class="radio">
                                <label class="form-check-label"><input type="radio" name="optradio" class="form-check-input" />
                                  Password Protected</label>
                              </div>
                              <div class="radio disabled">
                                <label class="form-check-label"><input type="radio" name="optradio" class="form-check-input" />
                                  Private</label>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div>
                          <button class="btn btn-primary btn-sm me-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
                            Ok
                          </button>
                          <button class="btn btn-danger light btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
                            Cancel
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="d-flex align-items-center mb-2 flex-wrap">
                      <li>
                        <a href="javascript:void(0);"><i class="fa-solid fa-calendar-days"></i></a>
                      </li>
                      <li>
                        <a href="javascript:void(0);" class="ms-2">Published</a>
                      </li>
                      <li>
                        <strong><a href="javascript:void(0);" class="mx-2">on :24-09-2023 16:22:52
                          </a></strong>
                      </li>
                      <li>
                        <a href="javascript:void(0);" class="accordion accordion-primary" id="headingthree" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-controls="collapsethree" aria-expanded="true" role="button">Edit</a>
                      </li>
                    </ul>
                    <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-bs-parent="#accordion-one">
                      <div class="accordion-body-text border rounded">
                        <div class="basic-form mb-2">
                          <input type="date" name="datepicker" class="form-control" />
                        </div>
                        <button class="btn btn-primary btn-sm me-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                          Ok
                        </button>
                        <button class="btn btn-danger light btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                          Cancel
                        </button>
                      </div>
                    </div>
                  </div>
                  <hr class="mx-2" />
                  <div class="card-footer border-0 pt-0 text-end">
                    <a href="javascript:void(0);" class="btn btn-primary btn-sm">Publish</a>
                  </div>
                </div>
              </div>
              <div class="filter cm-content-box box-primary">
                <div class="content-title">
                  <div class="cpa">Tag</div>
                  <div class="tools">
                    <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
                  </div>
                </div>
                <div class="cm-content-body form excerpt">
                  <div class="card-body">
                    <select id="multi-value-select" multiple="multiple">
                      <option selected="selected">orange</option>
                      <option>white</option>
                      <option selected="selected">purple</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="filter cm-content-box box-primary">
                <div class="content-title">
                  <div class="cpa">Ảnh nổi bật</div>
                  <div class="tools">
                    <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
                  </div>
                </div>
                <div class="cm-content-body publish-content form excerpt">
                  <div class="card-body">
                    <div class="avatar-upload d-flex align-items-center">
                      <div class="position-relative">
                        <div class="avatar-preview">
                          <div id="imagePreview" style="
                                    background-image: url(images/no-img-avatar.png);
                                  "></div>
                        </div>
                        <div class="change-btn d-flex align-items-center flex-wrap">
                          <input type="file" class="form-control d-none" id="imageUpload" accept=".png, .jpg, .jpeg" />
                          <label for="imageUpload" class="btn btn-light ms-0">Select Image</label>
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

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
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
              <input size="16" type="date" value="2012-06-15" readonly class="form-control form_datetime solid" />
            </div>
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Last Date To Apply<span class="text-danger scale5 ms-2">*</span></label>
            <div class="input-group">
              <div class="input-group-text">
                <i class="far fa-clock"></i>
              </div>
              <input size="16" type="date" value="2012-06-15" readonly class="form-control form_datetime solid" />
            </div>
          </div>
          <div class="col-xl-6 col-md-6 mb-4">
            <label class="form-label font-w600">Close Date<span class="text-danger scale5 ms-2">*</span></label>
            <div class="input-group">
              <div class="input-group-text">
                <i class="far fa-clock"></i>
              </div>
              <input size="16" type="date" value="2012-06-15" readonly class="form-control form_datetime solid" />
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
            <textarea class="form-control solid" aria-label="With textarea"></textarea>
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
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- Apex Chart -->
<script src="vendor/apexchart/apexchart.js"></script>
<script src="vendor/chartjs/chart.bundle.min.js"></script>

<!-- Chart piety plugin files -->
<script src="vendor/peity/jquery.peity.min.js"></script>

<!-- Dashboard 1 -->
<script src="js/dashboard/dashboard-1.js"></script>

<script src="vendor/owl-carousel/owl.carousel.js"></script>

<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>
<script src="js/demo.js"></script>
<script src="js/styleSwitcher.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/4.23.0-lts/standard/ckeditor.js"></script>

<script>
  CKEDITOR.replace('noidung');
</script>
<script>
  function JobickCarousel() {
    /*  testimonial one function by = owl.carousel.js */
    jQuery(".front-view-slider").owlCarousel({
      loop: false,
      margin: 30,
      nav: true,
      autoplaySpeed: 3000,
      navSpeed: 3000,
      autoWidth: true,
      paginationSpeed: 3000,
      slideSpeed: 3000,
      smartSpeed: 3000,
      autoplay: false,
      animateOut: "fadeOut",
      dots: true,
      navText: ["", ""],
      responsive: {
        0: {
          items: 1,

          margin: 10,
        },

        480: {
          items: 1,
        },

        767: {
          items: 3,
        },
        1750: {
          items: 3,
        },
      },
    });
  }

  jQuery(window).on("load", function() {
    setTimeout(function() {
      JobickCarousel();
    }, 1000);
  });
</script>

</body>

</html>