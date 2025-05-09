<?php

if (isset($_FILES['file'])) {
    $file = $_FILES['file'];

    $uploadDirectory = 'uploads/';

    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    if ($file['error'] !== UPLOAD_ERR_OK) {
        echo 'Error uploading file. Error code: ' . $file['error'];
        exit;
    }

    $targetFilePath = $uploadDirectory . basename($file['name']);

    if ($file['size'] > 5 * 1024 * 1024) {
        echo 'File is too large. Maximum size is 5MB.';
        exit;
    }

    $allowedTypes = ['image/png', 'image/jpeg'];
    if (!in_array($file['type'], $allowedTypes)) {
        echo 'Invalid file type. Only PNG and JPEG files are allowed.';
        exit;
    }

    if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
        echo 'File uploaded successfully!';
    } else {
        echo 'Error moving the uploaded file.';
    }
} else {
    echo 'No file was uploaded.';
}
?>
