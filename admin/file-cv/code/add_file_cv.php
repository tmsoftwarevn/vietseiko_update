<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valiFile = TRUE;
    //$target_dir = "../../images/jobs-company/vietnam/";
    $fileName = $_FILES['fileUpload']['name'];
    $fileTmpName = $_FILES['fileUpload']['tmp_name'];
    $cvContent = file_get_contents($fileTmpName);

    
        echo 'check file cv: ' .$cvContent;
    
}
?>


