<?php
require_once "config.php";
require_once "models/db.php";
require_once "models/user_candidate.php";
$user_candidate = new User_candidate;

if (isset($_GET['id']) == TRUE) {
    User_candidate::deleteCandidateByID($_GET['id']);
}
header("Location: users-candidate.php");
