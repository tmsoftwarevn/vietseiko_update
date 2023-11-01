<?php
require_once "config.php";
require_once "models/db.php";
require_once "models/job.php";
require_once "models/hinhthuc.php";
require_once "models/nganhnghe.php";
$nganhnghe = new Nganhnghe;
?>
<?php
    $insertResult = -1;
    if(isset($_GET['name_nganhnghe']) == TRUE) {
        $insertResult = Nganhnghe::insertNganhnghe($_GET['name_nganhnghe']);
    }
    header("Location: nganhnghe.php?functionType=manufacturers&insertResult=$insertResult");
?>