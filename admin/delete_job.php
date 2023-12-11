<?php
require_once "config.php";
require_once "models/db.php";
require_once "models/job.php";
require_once "models/hinhthuc.php";

$job = new Job;

$deleteResult = $job->deleteJob_ByTypeID($_GET['id_job']);
header("Location: job-list.php");


?>