<?php 
    require_once "./config.php";
    require_once "./models/nganhnghe.php";
    $nganhnghe = new Nganhnghe;
    if(isset($_POST['id'])) {
        $nganhnghe->updateJobNganhnghe($_GET['id'], $_POST['name_nganhnghe'], $_FILES['fileUpload']['name']);
        if(isset($_FILES['fileUpload']))
        {

            $target_dir = "../images/";
            $target_file = $target_dir . basename($_FILES['fileUpload']['name']);
            move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_file);
        }
        header("location: nganhnghe.php");
    }
    else {
        echo "Không tim thấy ID!!";
    }
