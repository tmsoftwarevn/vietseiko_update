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

<?php 
require_once "footer.php";
?>