<?php
$data = array();
if (isset($_FILES['upload']['name'])) {
    $file_name = time() . $_FILES['upload']['name'];

    $thu_muc = '../../images/l-image-blog/';
    $file_path = $thu_muc . $file_name;

    if (move_uploaded_file($_FILES['upload']['tmp_name'], $file_path)) {
        $data['file'] = $file_name;
        $data['url'] = $file_path;
        $data['uploaded'] = 1;
    } else {
        $data['uploaded'] = 0;
        $data['error']['message'] = 'Error! File not upload 3333';
    }
}
echo json_encode($data);