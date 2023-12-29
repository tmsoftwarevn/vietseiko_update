<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'vietseiko_';

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update query 1
$sql1 = "UPDATE job SET id_trangthai = 0 WHERE DATE(ngaycuoicung) < CURDATE() AND id_trangthai = 1";

// Execute query 1
if ($conn->query($sql1) === TRUE) {
    echo "Records updated successfully for query 1";
} else {
    echo "Error updating records for query 1: " . $conn->error;
}

// Update query 2
$sql2 = "UPDATE job SET id_trangthai = 1 WHERE DATE(ngaycuoicung) > CURDATE() AND id_trangthai = 0";

// Execute query 2
if ($conn->query($sql2) === TRUE) {
    echo "Records updated successfully for query 2";
} else {
    echo "Error updating records for query 2: " . $conn->error;
}

// Close connection
$conn->close();
?>
