<?php
require_once 'header.php';

?>

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="d-flex align-items-center mb-4">
      <h3 class="mb-0 me-auto">New Job</h3>
      <div>
        <a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3">
          <i class="fas fa-envelope"></i></a>
        <a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3"><i class="fas fa-phone-alt"></i></a>
        <a href="javascript:void(0);" class="btn btn-primary btn-sm"><i class="fas fa-info"></i></a>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        <form action="add_job.php" method="post">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-xl-6 col-md-6 mb-4">
                  <label class="form-label font-w600">Tên Công Ty<span class="text-danger scale5 ms-2">*</span></label>
                  <input type="text" class="form-control solid" placeholder="Name" aria-label="name" />
                </div>
                <div class="control-group">
                  <label class="control-label">Hình ảnh công ty :</label>
                  <div class="controls" style="padding-bottom: 10px;">
                    <input type="file" name="fileUpload" id="fileUpload">
                  </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                  <label class="form-label font-w600">Chức Vụ<span class="text-danger scale5 ms-2">*</span></label>
                  <input type="text" class="form-control solid" placeholder="Name" aria-label="name" />
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                  <label class="form-label font-w600">Ngành Nghề<span class="text-danger scale5 ms-2">*</span></label>
                  <select class="nice-select default-select wide form-control solid">
                    <?php
                    foreach ($nganhngheAdmin->getAllNganhnghe() as $key => $value) {
                    ?>
                      <option value="<?php echo $value['id_nganhnghe'] ?>" selected><?php echo $value['name_nganhnghe'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                  <label class="form-label font-w600">Loại Công Việc<span class="text-danger scale5 ms-2">*</span></label>
                  <select class="nice-select default-select wide form-control solid">
                    <?php
                    foreach ($hinhthucAdmin->getAllHinhthuc() as $key => $value) {
                    ?>
                      <option value="<?php echo $value['id_hinhthuc'] ?>" selected><?php echo $value['name_hinhthuc'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                  <label class="form-label font-w600">Số vị trí tuyển dụng<span class="text-danger scale5 ms-2">*</span></label>
                  <input type="text" class="form-control solid" placeholder="Name" aria-label="name" />
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                  <label class="form-label font-w600">Kinh nghiệm<span class="text-danger scale5 ms-2">*</span></label>
                  <input type="text" class="form-control solid" placeholder="1 năm" aria-label="name" />
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                  <label class="form-label font-w600">Ngày Đăng<span class="text-danger scale5 ms-2">*</span></label>
                  <div class="input-group">
                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                    <input type="text" class="form-control solid" placeholder="02-10-2023" aria-label="name" />
                  </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                  <label class="form-label font-w600">Ngày cuối cùng nộp đơn<span class="text-danger scale5 ms-2">*</span></label>
                  <div class="input-group">
                    <div class="input-group-text">
                      <i class="far fa-clock"></i>
                    </div>
                    <input type="text" class="form-control solid" placeholder="02-10-2023" aria-label="name" />
                  </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                  <label class="form-label font-w600">Ngày gần<span class="text-danger scale5 ms-2">*</span></label>
                  <div class="input-group">
                    <div class="input-group-text">
                      <i class="far fa-clock"></i>
                    </div>
                    <input type="text" class="form-control solid" placeholder="02-10-2023" aria-label="name" />
                  </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                  <label class="form-label font-w600">Giới tính<span class="text-danger scale5 ms-2">*</span></label>
                  <input type="text" class="form-control solid" placeholder="Nam" aria-label="name" />
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                  <label class="form-label font-w600">Mức lương:<span class="text-danger scale5 ms-2">*</span></label>
                  <input type="text" class="form-control solid" placeholder="$" aria-label="name" />
                </div>
                <div class="col-xl-6 col-md-6 mb-4">
                  <label class="form-label font-w600">Địa chỉ:<span class="text-danger scale5 ms-2">*</span></label>
                  <input type="text" class="form-control solid" placeholder="" aria-label="name" />
                </div>
                <div class="col-xl-12 mb-4">
                  <label class="form-label font-w600">Mô tả công việc:<span class="text-danger scale5 ms-2">*</span></label>
                  <textarea class="form-control solid" rows="5" aria-label="With textarea"></textarea>
                </div>
                <div class="col-xl-12 mb-4">
                  <label class="form-label font-w600">Yêu cầu:<span class="text-danger scale5 ms-2">*</span></label>
                  <textarea class="form-control solid" rows="5" aria-label="With textarea"></textarea>
                </div>
                <div class="col-xl-12 mb-4">
                  <label class="form-label font-w600">Quyền lợi:<span class="text-danger scale5 ms-2">*</span></label>
                  <textarea class="form-control solid" rows="5" aria-label="With textarea"></textarea>
                </div>
              </div>
              <div>
                <label class="form-label font-w600">Ngành Nghề<span class="text-danger scale5 ms-2">*</span></label>
                <select class="nice-select default-select wide form-control solid">
                  <?php
                  foreach ($trangthaiAdmin->getAllTrangthai() as $key => $value) {
                  ?>
                    <option value="<?php echo $value['id_trangthai'] ?>" selected><?php echo $value['name_trangthai'] ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="card-footer text-end">
              <div>
                <a href="javascript:void(0);" class="btn btn-danger light me-3">Close</a>
                <button type="Submit" name="Submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </form>
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
<script src="vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script>

<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>
<script src="js/demo.js"></script>
<script src="js/styleSwitcher.js"></script>
<script>
  $(".form_datetime").datepicker({
    format: "yyyy-mm-dd"
  });
  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
</script>
</body>

</html>