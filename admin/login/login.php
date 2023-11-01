<?php
//session_unset();
session_start();
require "../models/db.php";
require "../config.php";
require "../models/users.php";
$user = new User;

$passcheck =md5($_POST['password']);
//$passcheck =$_POST['password'];
//var_dump($passcheck);
if($passcheck == $user->getPassword($_POST['username']))
{
    $_SESSION['user'] = $_POST['username'];
    //var_dump($_SESSION['user']) ;
  header("location: ../dashboard.php");
}
else
{
  header("location:../index.php");
}