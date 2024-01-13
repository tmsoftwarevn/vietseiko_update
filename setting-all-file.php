<?php

require 'setting-language.php';

require_once 'config.php';
require "models/db.php";

require "models/hinhthuc.php";
require "models/nganhnghe.php";
require "models/protype.php";

require "models/blog.php";
require "models/cam-nang.php";
require "models/form-contact.php";

require "models/job_kysu.php";
require "models/job_vietseiko.php";
require "models/job_NB_f.php";
require "models/jobs.php";
require "models/review.php";
require "models/hinhanh-video-f.php";
require "models/search_custom.php";

require_once "admin/models/kinh_nghiem.php";
require_once "admin/models/gioi_tinh.php";
require_once "admin/models/image.php";

$search_f = new Search_f;

$hinhanh_video = new Hinhanh_Video_f;
$img_f = new Image_f;
$review = new Review_f;
$gioitinh = new Gioi_tinh;

$hinhthuc = new Hinhthuc;
$protype = new Protype;
$blog = new blog_f;

$cam_nang = new Cam_nang_f;

$form_contact = new Form_contact;

$kinh_nghiem = new Kinh_nghiem;
$job = new Job_f;
$job_nb = new Job_NB_f;
$job_kysu = new Job_kysu_f;
$job_vietseiko = new Vietseiko_f;

// fix lỗi thư mục css
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$domain = $_SERVER['HTTP_HOST'];
$currentUrl = $protocol . '://' . $domain . $_SERVER['REQUEST_URI'];
$domainFromUrl = parse_url($currentUrl, PHP_URL_SCHEME) . '://' . parse_url($currentUrl, PHP_URL_HOST);

?>