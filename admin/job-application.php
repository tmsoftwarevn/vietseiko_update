<?php
require_once 'header.php';

?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="d-flex align-items-center mb-4 flex-wrap">
      <h3 class="me-auto">Job Application</h3>
      <div>
        <a href="new-job.php" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Add New Job</a>
        <a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3">
          <i class="fas fa-envelope"></i></a>
        <a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3"><i class="fas fa-phone-alt"></i></a>
        <a href="javascript:void(0);" class="btn btn-secondary btn-sm"><i class="fas fa-info"></i></a>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <div class="table-responsive">
          <table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
            <thead>
              <tr>
                <th>No</th>
                <th>Position</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Applied On</th>
                <th>Submitted By</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td class="wspace-no">Database analyst</td>
                <td>Jordan</td>
                <td>Jordan@gmail.com</td>
                <td>1234598765</td>
                <td>24-01-2023</td>
                <td>Nicholas</td>
                <td>
                  <span class="btn btn-warning btn-sm btn-rounded">Pending</span>
                </td>
                <td class="action-btn wspace-no">
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-check text-success"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-times text-danger"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-eye"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="far fa-trash-alt text-danger"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-download text-warning"></i></a>
                  </span>
                </td>
              </tr>
              <tr>
                <td>2.</td>
                <td class="wspace-no">Network architect</td>
                <td>Asher</td>
                <td>Jordan@gmail.com</td>
                <td>1234598765</td>
                <td>24-01-2023</td>
                <td>Dominic</td>
                <td>
                  <span class="btn btn-warning btn-sm btn-rounded">Pending</span>
                </td>
                <td class="action-btn wspace-no">
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-check text-success"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-times text-danger"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-eye"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="far fa-trash-alt text-danger"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-download text-warning"></i></a>
                  </span>
                </td>
              </tr>
              <tr>
                <td>3.</td>
                <td class="wspace-no">Network architect</td>
                <td>Carter</td>
                <td>Jordan@gmail.com</td>
                <td>1234598765</td>
                <td>24-01-2023</td>
                <td>Austin</td>
                <td>
                  <span class="btn btn-info btn-sm btn-rounded">Pending</span>
                </td>
                <td class="action-btn wspace-no">
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-check text-success"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-times text-danger"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-eye"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="far fa-trash-alt text-danger"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-download text-warning"></i></a>
                  </span>
                </td>
              </tr>
              <tr>
                <td>4.</td>
                <td class="wspace-no">Systems analyst</td>
                <td>Grayson</td>
                <td>Jordan@gmail.com</td>
                <td>1234598765</td>
                <td>24-01-2023</td>
                <td>Everett</td>
                <td>
                  <span class="btn btn-danger btn-sm btn-rounded">Rejected</span>
                </td>
                <td class="action-btn wspace-no">
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-check text-success"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-times text-danger"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-eye"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="far fa-trash-alt text-danger"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-download text-warning"></i></a>
                  </span>
                </td>
              </tr>
              <tr>
                <td>5.</td>
                <td class="wspace-no">Network engineer</td>
                <td>Thomas</td>
                <td>Jordan@gmail.com</td>
                <td>1234598765</td>
                <td>24-01-2023</td>
                <td>Brooks</td>
                <td>
                  <span class="btn btn-warning btn-sm btn-rounded">Pending</span>
                </td>
                <td class="action-btn wspace-no">
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-check text-success"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-times text-danger"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-eye"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="far fa-trash-alt text-danger"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-download text-warning"></i></a>
                  </span>
                </td>
              </tr>
              <tr>
                <td>6.</td>
                <td class="wspace-no">Service desk analyst</td>
                <td>Miles</td>
                <td>Jordan@gmail.com</td>
                <td>1234598765</td>
                <td>24-01-2023</td>
                <td>Wesley</td>
                <td>
                  <span class="btn btn-primary btn-sm btn-rounded">Selected</span>
                </td>
                <td class="action-btn wspace-no">
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-check text-success"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-times text-danger"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-eye"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="far fa-trash-alt text-danger"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-download text-warning"></i></a>
                  </span>
                </td>
              </tr>
              <tr>
                <td>7.</td>
                <td>Network Engineer</td>
                <td>Adrian</td>
                <td>Jordan@gmail.com</td>
                <td>1234598765</td>
                <td>24-01-2023</td>
                <td>Kayden</td>
                <td>
                  <span class="btn btn-success btn-sm btn-rounded">Success</span>
                </td>
                <td class="action-btn wspace-no">
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-check text-success"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-times text-danger"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-eye"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="far fa-trash-alt text-danger"></i></a>
                  </span>
                  <span>
                    <a href="javascript:void(0);"><i class="fas fa-download text-warning"></i></a>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
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
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/chartjs/chart.bundle.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- Apex Chart -->
<script src="vendor/apexchart/apexchart.js"></script>

<!-- <script src="vendor/popper/popper.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

<!-- Chart piety plugin files -->
<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="js/plugins-init/datatables.init.js"></script>

<!-- Dashboard 1 -->

<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>
<script src="js/demo.js"></script>
<script src="js/styleSwitcher.js"></script>
<script>
  /*	$(document).ready(function(){
			//$('[data-toggle="tooltip"]').tooltip();
  return new bootstrap.Tooltip($('[data-toggle="tooltip"]'))
	});*/

  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
</script>
</body>

</html>