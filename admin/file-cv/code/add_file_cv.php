<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $file_name =time() . $_FILES["file"]["name"];
    $file_type = $_FILES["file"]["type"];
    $fileTmpName = $_FILES["file"]["tmp_name"];
    $target_dir = "../list-file/";
   
    if ($file_name && $fileTmpName) {
        
        echo 'chekk path save: ' . $file_name;
        move_uploaded_file($fileTmpName, $target_dir . $file_name);
    }


}
