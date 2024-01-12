<?php
require_once "header.php";
require_once "models/db.php";

require_once "models/review.php";

$review = new Review;
$allReview = $review::getAll_review();

?>

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

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
</head>

<style>
  .image {
        width: 100px;
    }

    img {
        width: 100%;
    }
</style>

<body>

  <div class="content-body">

    <div class="container-fluid">
      <div class="d-flex align-items-center mb-4 flex-wrap">
        <h3 class="me-auto">Cảm nhận người lao động</h3>
        <div>
          <a href="review-add.php?typeAdd=review" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Thêm review mới</a>
        </div>
      </div>
      
      <div class="row">
        <div class="col-xl-12">
          <div class="table-responsive">
            <table id="jobsTable" class="table display table-striped mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Họ tên</th>
                  <th>Mô tả</th>
                  <th>Ngày cập nhật</th>
                  <th>ảnh</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php

                foreach ($allReview as $key => $value) {
                ?>
                  <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $value['name'] ?></td>
                    <td><?php echo $value['mota'] ?></td>
                    <td><?php echo $value['updated_at'] ?></td>
                    <td><?php echo $value['img_review'] ?></td>
                    <td>
                      <div class="action-buttons d-flex justify-content-end">
                        <a href="review-update.php?typeUpdate=review&id=<?php echo $value['id'] ?>" class="btn btn-secondary light mr-2">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24"></rect>
                              <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                              <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                            </g>
                          </svg>
                        </a>
                        <a onclick="return confirm('Xác nhận muốn xóa review có stt: <?php echo $key + 1; ?>?')" href="job-vietnam/delete-review.php?id=<?php echo $value['id']; ?>" class="btn btn-danger light">
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

  </div>
  <script>
    $('#jobsTable').DataTable({

      "paging": false,
      "info": false
    });
  </script>
  <script>
    $(document).ready(function() {
      // Destroy Select2 for the element with the 'regular-select' class
      $('.regular-select').select2('destroy');
    });
  </script>
</body>

</html>


<!--**********************************
            Content body end
***********************************-->

<?php
require_once "footer.php";
?>