


<?php
$filePath = 'file-cv/list-file/1702459883Tu_Hong_Phong_CV_Intern.pdf';

// Check if the file exists before attempting to delete
if (file_exists($filePath)) {
    // Attempt to delete the file
    if (unlink($filePath)) {
        echo 'PDF file deleted successfully.';
    } else {
        echo 'Error: Unable to delete the PDF file.';
    }
} else {
    echo 'Error: The PDF file does not exist.';
}
?>