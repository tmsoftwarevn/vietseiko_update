<?php
require_once "config.php";
require_once "models/db.php";
require_once "models/job.php";
require_once "models/hinhthuc.php";
require_once "models/nganhnghe.php";
$hinhthuc = new Hinhthuc;
?>
<?php
    $insertResult = -1;
    if(isset($_GET['name_hinhthuc']) == TRUE) {
        $insertResult = Hinhthuc::insertHinhthuc($_GET['name_hinhthuc']);
    }
    header("Location: hinhthuc.php?functionType=protypes&insertResult=$insertResult");
?>