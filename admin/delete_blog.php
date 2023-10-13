<?php
require_once "config.php";
require "./models/blog.php";
$blog = new Blog;

$blog->deleteBlogByID($_GET['id_blog']);
header("location: blog.php");
