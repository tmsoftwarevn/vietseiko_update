<?php
require_once "config.php";
require_once "models/db.php";
require_once "models/job.php";
require_once "models/hinhthuc.php";
$hinhthuc = new Hinhthuc;
$hinhthuc->deleteHinhthuc_ByTypeID($_GET['id_hinhthuc']);
header("Location: hinh-thuc.php?deleteResult=$deleteResult");
