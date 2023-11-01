<?php
require_once "config.php";
require_once "models/db.php";
require_once "models/job.php";
require_once "models/hinhthuc.php";
require_once "models/nganhnghe.php";
$nganhnghe = new Nganhnghe;
?>
<?php
    $updateResult = -1;
    if(isset($_GET['name_nganhnghe']) == TRUE) {
        $updateResult = Nganhnghe::updateJobNganhnghe($_GET['id_nganhnghe'], $_GET['name_nganhnghe']);
    }
    header("Location: form_update.php?functionType=job_nganhnghe&id_nganhnghe=" .$_GET['id_nganhnghe'] ."&updateResult=$updateResult");
?>