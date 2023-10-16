<?php
require_once 'header.php';

$id;
if (isset($_GET['id_nganhnghe'])) {
    $id = $_GET['id_nganhnghe'];
}
$nganhngheByID = $nganhngheAdmin->getNganhngheByID($id);
var_dump($nganhngheByID);

?>

<div class="content-body" style="min-height: 796px;">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="./nganhnghe.php">Ngành Nghề</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Ngành Nghề</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">New Ngành Nghề</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <?php
                            if (isset($_GET['functionType']) == TRUE && $_GET['functionType'] == "job_nganhnghe" && isset($_GET['id_nganhnghe']) == TRUE) {
                                $selectedNganhnghe = Nganhnghe::getBrand($_GET['id_nganhnghe']);

                            ?>
                                <!-- BEGIN NGANH NGHE FORM -->
                                <form action="update-nganhnghe.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    <div class="row align-items-center">
                                        <input type="hidden" name="id" value=<?php echo $_GET['id_nganhnghe']; ?>>
                                        <div class="col">
                                            <label class="sr-only">Name</label>
                                            <input type="text" class="form-control mb-2" placeholder="Ngành Nghề" name="name_nganhnghe" require value="<?php echo $selectedNganhnghe; ?>">
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Choose an image :</label>
                                            <div class="controls" style="padding-bottom: 10px;">
                                                <input type="file" name="fileUpload" id="fileUpload">
                                            </div>
                                        </div>
                                        <div class="col-12 controls">
                                            <button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- INSERT RESULT: -->
                                <div style="padding:30px 0;text-align:center;font-weight:bold;font-size:15px;">
                                    <?php
                                    echo "<div style=\"text-decoration:underline;\">RESULT:</div>";
                                    if (isset($_GET['updateResult']) == TRUE) {
                                        if ($_GET['updateResult'] > 0) {
                                            echo "<span style=\"color:green;\">" . "Updated successfully!" . "</span>";
                                        } else {
                                            echo "<span style=\"color:red;\">" . "Fail to update!" . "</span>";
                                        }
                                    }
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'footer.php';
?>