<?php
require_once "header.php";

require_once "models/db.php";
require_once "models/cty.php";
require_once "models/protypes.php";

$id = 1;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "Khong nhan duoc ID";
}

$cty = new Congty;
$type = new Protypes;
$detail_Cty = $cty::getCty_byId($id);

?>
<style>
    <?php include './scss/job/job.scss'; ?>img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    figure {
        overflow: hidden;
        background-size: contain,
    }
    ul,
    ol,
    li {
        list-style: unset;
    }
</style>
<!--**********************************
            Content body start
        ***********************************-->
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>view</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>

</style>

<body>

    <div class="content-body">
        <?php
        if (isset($_GET['typeView']) == TRUE && $_GET['typeView'] == "cty") {
        ?>

            <div class="body-view-job" style="padding: 100px;">
                <!-- detail cong viec -->
                <div class="title-job" style="text-align: center; font-weight: 600; 
                font-size: 20px; text-transform: capitalize;">
                    <?php echo 'Chi tiết mã công ty: ' . $detail_Cty['id_cty'] ?>
                </div>

                <div class="control-group">
                    <label class="control-label" style="font-weight: 600;">*Tên Công Ty :</label>
                    <div class="controls">
                        <input type="text" value="<?php echo $detail_Cty['name']; ?>" class="form-control" disabled />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" style="font-weight: 600;">*Logo Cty :</label>
                    <div style="width: 200px;">
                        <?php echo $detail_Cty['img_cty'] ?>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" style="font-weight: 600;">*Quy mô:</label>
                    <div class="controls">
                        <input type="text" value="<?php echo $detail_Cty['quymo'] ?>" class="form-control" disabled />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" style="font-weight: 600;">*Thông tin:</label>
                    <div style="border: 1px solid #ccc; background-color: #f4f4f4;padding: 20px 10px;">
                        <?php echo htmlspecialchars_decode($detail_Cty['about_cty']) ?>
                    </div>

                </div>
                <div class="control-group">
                    <label class="control-label" style="font-weight: 600;">*Địa chỉ :</label>
                    <div class="controls">
                        <input type="text" value="<?php echo $detail_Cty['address']; ?>" class="form-control" disabled />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" style="font-weight: 600;">*Type công ty :</label>

                    <div class="controls">
                        <input type="text" value="<?php echo $detail_Cty['type_name']; ?>" class="form-control" disabled />
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" style="font-weight: 600;">*Ngày cập nhật gần nhất:</label>
                    <div class="controls">
                        <input type="text" value="<?php echo $detail_Cty['updated_at']; ?>" class="form-control" disabled />
                    </div>
                </div>

            </div>

        <?php
        }

        ?>
    </div>

</body>

</html>


<!--**********************************
            Content body end
***********************************-->



<?php
require_once "footer.php";
?>