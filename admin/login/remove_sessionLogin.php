<?php
session_start();
if(!isset($_SESSION['isLogin'])) {
    header('location: ./login.php');
} else{
    $permission = $_SESSION['isLogin'];
    if($permission != "User") {
        header('location: ./login.php');
    }
}

session_destroy();
header('location: ./login.php');
?>