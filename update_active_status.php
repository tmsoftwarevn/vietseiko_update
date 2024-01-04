<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'vietseiko_';

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_vn_1 = "UPDATE job SET id_trangthai = 0 WHERE DATE(ngaycuoicung) <= CURDATE() AND id_trangthai = 1";
if ($conn->query($sql_vn_1) === TRUE) {
    echo "Records updated successfully for query sql_vn1";
} else {
    echo "Error updating records for query sql_vn1: " . $conn->error;
}

$sql_vn_2 = "UPDATE job SET id_trangthai = 1 WHERE DATE(ngaycuoicung) > CURDATE() AND id_trangthai = 0";
if ($conn->query($sql_vn_2) === TRUE) {
    echo "Records updated successfully for query $sql_vn_2";
} else {
    echo "Error updating records for query 2: " . $conn->error;
}
// xkld
$sql_xkld_1 = "UPDATE job_xkld_nb SET id_trangthai = 0 WHERE DATE(ngaycuoicung) <= CURDATE() AND id_trangthai = 1";
if ($conn->query($sql_xkld_1) === TRUE) {
    echo "Records updated successfully for query sql_xkld1";
} else {
    echo "Error updating records for query sql_xkld1: " . $conn->error;
}

$sql_xkld_2 = "UPDATE job_xkld_nb SET id_trangthai = 1 WHERE DATE(ngaycuoicung) > CURDATE() AND id_trangthai = 0";
if ($conn->query($sql_xkld_2) === TRUE) {
    echo "Records updated successfully for query $sql_xkld_2";
} else {
    echo "Error updating records for query 2: " . $conn->error;
}
//ksnb
$sql_ksnb_1 = "UPDATE job_kysunb SET id_trangthai = 0 WHERE DATE(ngaycuoicung) <= CURDATE() AND id_trangthai = 1";
if ($conn->query($sql_ksnb_1) === TRUE) {
    echo "Records updated successfully for query sql_ksnb_1";
} else {
    echo "Error updating records for query sql_ksnb_1: " . $conn->error;
}

$sql_ksnb_2 = "UPDATE job_kysunb SET id_trangthai = 1 WHERE DATE(ngaycuoicung) > CURDATE() AND id_trangthai = 0";
if ($conn->query($sql_ksnb_2) === TRUE) {
    echo "Records updated successfully for query $sql_ksnb_2";
} else {
    echo "Error updating records for query 2: " . $conn->error;
}
//vietseiko
$sql_vsk_1 = "UPDATE job_vietseiko SET id_trangthai = 0 WHERE DATE(ngaycuoicung) <= CURDATE() AND id_trangthai = 1";
if ($conn->query($sql_vsk_1) === TRUE) {
    echo "Records updated successfully for query sql_vsk_1";
} else {
    echo "Error updating records for query sql_vsk_1: " . $conn->error;
}

$sql_vsk_2 = "UPDATE job_vietseiko SET id_trangthai = 1 WHERE DATE(ngaycuoicung) > CURDATE() AND id_trangthai = 0";
if ($conn->query($sql_vsk_2) === TRUE) {
    echo "Records updated successfully for query $sql_vsk_2";
} else {
    echo "Error updating records for query 2: " . $conn->error;
}

// Close connection
$conn->close();
?>
