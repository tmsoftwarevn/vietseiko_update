<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $file_name = $_FILES["file"]["name"];
    $file_type = $_FILES["file"]["type"];
    $file_data = file_get_contents($_FILES["file"]["tmp_name"]);
   
    
   

    echo 'name: '. $fileName .'<br>';    
    echo 'type: '. $file_type .'<br>';    
    echo 'data: '. $file_data .'<br>';    
}
?>


