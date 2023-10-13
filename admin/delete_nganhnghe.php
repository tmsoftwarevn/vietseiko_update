<?php
require_once "config.php";
require_once "models/db.php";
require_once "models/job.php";
require_once "models/nganhnghe.php";
$nganhnghe = new Nganhnghe;
$nganhnghe->deleteNganhnghe_ByTypeID($_GET['id_nganhnghe']);
header("Location: nganhnghe.php?deleteResult=$deleteResult");
