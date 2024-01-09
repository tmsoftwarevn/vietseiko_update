<?php
require_once "header.php";

require_once "models/db.php";
require_once "models/hinhthuc.php";
require_once "models/nganhnghe.php";
require_once "models/kinh_nghiem.php";


$hinhthuc = new Hinhthuc;
$nganhnghe = new Nganhnghe;
$kinhnghiem = new Kinh_nghiem;
if (isset($_GET['type']) == TRUE && $_GET['type'] == "nganhnghe") {
  if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['name']) && isset($_POST['add'])) {
    $name = $_POST["name"];
    $nganhnghe::insertNganhnghe($name);
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['myInput']) && !empty($_POST['idInput']) && isset($_POST['update'])) {
    $name = $_POST["myInput"];
    $id = $_POST["idInput"];
    $nganhnghe::updateNganhnghe($id, $name);
  }
}

if (isset($_GET['type']) == TRUE && $_GET['type'] == "hinhthuc") {
  if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['name']) && isset($_POST['add'])) {
    $name = $_POST["name"];
    $hinhthuc::insertHinhthuc($name);
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['myInput']) && !empty($_POST['idInput']) && isset($_POST['update'])) {
    $name = $_POST["myInput"];
    $id = $_POST["idInput"];
    $hinhthuc::updateJobHinhthuc($id, $name);
  }
}

if (isset($_GET['type']) == TRUE && $_GET['type'] == "kinhnghiem") {
  if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['name']) && isset($_POST['add'])) {
    $name = $_POST["name"];
    $kinhnghiem::insertKinhnghiem($name);
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['myInput']) && !empty($_POST['idInput']) && isset($_POST['update'])) {
    $name = $_POST["myInput"];
    $id = $_POST["idInput"];
    $kinhnghiem::updateKinhnghiem($id, $name);
  }
}
?>

<!--**********************************
            Content body start
        ***********************************-->
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="content-body">
    
    <?php
    //nganhnghe
    if (isset($_GET['type']) == TRUE && $_GET['type'] == "nganhnghe") {
    ?>
      <div class="container-fluid">
        <div class="d-flex align-items-center mb-4 flex-wrap">
          <h3 class="me-auto">Ngành nghề</h3>
          
        </div>
        <form action="" method="post">
          <input type="text" name="name" placeholder="Thêm ngành nghề mới" style="padding: 6px; width: 300px" />
          <button type="submit" name="add" class="btn btn-primary">Thêm mới</button>
        </form>

        <!-- // update -->
        <form action="" method="post" class="mt-4">
          <input type="text" id="myInput" name="myInput" value="" style="padding: 6px; width: 300px">
          <input type="text" value="" name="idInput" id="idInput" style="display: none;" />
          <button type="submit" name="update" class="btn btn-primary">cập nhật</button>
        </form>

        <div class="row">
          <div class="col-xl-12">
            <div class="table-responsive">
              <table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
                <thead>
                  <tr>
                    <th>Stt</th>
                    <th>Tên ngành nghề</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  $list_of_job = Nganhnghe::getAllNganhnghe();
                  $totalResults = count($list_of_job);
                  echo "<p style=\"text-align:center;\"><b>Tổng cộng có $totalResults kết quả.</b></p>";

                  foreach ($list_of_job as $key => $value) {
                  ?>
                    <tr>
                      <td><?php echo $key + 1 ?></td>
                      <td><?php echo $value['name_nganhnghe'] ?></td>

                      <td>
                        <div class="action-buttons d-flex justify-content-end">

                          <a class="btn btn-secondary light mr-2" onclick="setValue('<?php echo $value['name_nganhnghe']; ?>','<?php echo $value['id_nganhnghe']; ?>')">

                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                              </g>
                            </svg>
                          </a>

                          <a onclick="return confirm('Xác nhận muốn xóa Ngành nghề có Stt: <?php echo $key + 1 ?>?')" href="job-vietnam/delete_nganhnghe.php?id_nganhnghe=<?php echo $value['id_nganhnghe']; ?>" class="btn btn-danger light">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                              </g>
                            </svg>
                          </a>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>

            </div>
          </div>
        </div>

      </div>

    <?php
    }
    //// hinh thuc
    if (isset($_GET['type']) == TRUE && $_GET['type'] == "hinhthuc") {
    ?>
      <div class="container-fluid">
        <div class="d-flex align-items-center mb-4 flex-wrap">
          <h3 class="me-auto">Quản lý hình thức</h3>

        </div>
        <form action="" method="post">
          <input type="text" name="name" placeholder="Thêm hình thức mới" style="padding: 6px; width: 300px" />
          <button type="submit" name="add" class="btn btn-primary">Thêm mới</button>
        </form>

        <!-- // update -->
        <form action="" method="post" class="mt-4">
          <input type="text" id="myInput" name="myInput" value="" style="padding: 6px; width: 300px">
          <input type="text" value="" name="idInput" id="idInput" style="display: none;" />
          <button type="submit" name="update" class="btn btn-primary">cập nhật</button>
        </form>

        <div class="row">
          <div class="col-xl-12">
            <div class="table-responsive">
              <table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
                <thead>
                  <tr>
                    <th>Stt</th>
                    <th>Tên Hình thức</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  $list_of_job = Hinhthuc::getAllHinhthuc();
                  $totalResults = count($list_of_job);
                  echo "<p style=\"text-align:center;\"><b>Tổng cộng có $totalResults kết quả.</b></p>";

                  foreach ($list_of_job as $key => $value) {
                  ?>
                    <tr>
                      <td><?php echo $key + 1 ?></td>
                      <td><?php echo $value['name_hinhthuc'] ?></td>

                      <td>
                        <div class="action-buttons d-flex justify-content-end">

                          <a class="btn btn-secondary light mr-2" onclick="setValue('<?php echo $value['name_hinhthuc']; ?>','<?php echo $value['id_hinhthuc']; ?>')">

                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                              </g>
                            </svg>
                          </a>

                          <a onclick="return confirm('Xác nhận muốn xóa Hình thức có stt: <?php echo $key + 1 ?>?')" href="job-vietnam/delete_hinhthuc.php?id_hinhthuc=<?php echo $value['id_hinhthuc']; ?>" class="btn btn-danger light">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                              </g>
                            </svg>
                          </a>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>

            </div>
          </div>
        </div>

      </div>

    <?php
    }
    // kinhnghiem
    if (isset($_GET['type']) == TRUE && $_GET['type'] == "kinhnghiem") {
      ?>
        <div class="container-fluid">
          <div class="d-flex align-items-center mb-4 flex-wrap">
            <h3 class="me-auto">Quản lý Kinh nghiệm</h3>
  
          </div>
          <form action="" method="post">
            <input type="text" name="name" placeholder="Thêm kinh nghiệm mới" style="padding: 6px; width: 300px" />
            <button type="submit" name="add" class="btn btn-primary">Thêm mới</button>
          </form>
  
          <!-- // update -->
          <form action="" method="post" class="mt-4">
            <input type="text" id="myInput" name="myInput" value="" style="padding: 6px; width: 300px">
            <input type="text" value="" name="idInput" id="idInput" style="display: none;" />
            <button type="submit" name="update" class="btn btn-primary">cập nhật</button>
          </form>
  
          <div class="row">
            <div class="col-xl-12">
              <div class="table-responsive">
                <table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
                  <thead>
                    <tr>
                      <th>Stt</th>
                      <th>Tên Kinh nghiệm</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
  
                    $list_of_job = $kinhnghiem->getAllKinhNghiem();
                    $totalResults = count($list_of_job);
                    echo "<p style=\"text-align:center;\"><b>Tổng cộng có $totalResults kết quả.</b></p>";
  
                    foreach ($list_of_job as $key => $value) {
                    ?>
                      <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $value['name_kn'] ?></td>
  
                        <td>
                          <div class="action-buttons d-flex justify-content-end">
  
                            <a class="btn btn-secondary light mr-2" onclick="setValue('<?php echo $value['name_kn']; ?>','<?php echo $value['id_kn']; ?>')">
  
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <rect x="0" y="0" width="24" height="24"></rect>
                                  <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                  <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                </g>
                              </svg>
                            </a>
  
                            <a onclick="return confirm('Xác nhận muốn xóa kinh nghiệm có stt: <?php echo $key + 1 ?>?')" href="job-vietnam/delete_kinhnghiem.php?id_kinhnghiem=<?php echo $value['id_kn']; ?>" class="btn btn-danger light">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <rect x="0" y="0" width="24" height="24"></rect>
                                  <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                                  <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                                </g>
                              </svg>
                            </a>
                          </div>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
  
              </div>
            </div>
          </div>
  
        </div>
  
      <?php
      }
    ?>


  </div>

  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }

    function setValue(name, id) {
      // Get the input element
      var inputElement = document.getElementById('myInput');
      var IdInput = document.getElementById('idInput');

      inputElement.value = name;
      IdInput.value = id;
    }
  </script>
</body>

</html>


<!--**********************************
            Content body end
***********************************-->

<?php
require_once "footer.php";
?>