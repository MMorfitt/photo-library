<?php
// Location of the images
// Will NOT create the images/ directory
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["uploadImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    if ($_FILES["uploadImage"]["error"] !== UPLOAD_ERR_OK) {
        echo "Error during file upload: " . $_FILES["uploadImage"]["error"];
        $uploadOk = 0;
    } else {
        $check = getimagesize($_FILES["uploadImage"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"];
            $uploadOk = 1;
        } else {
            echo "File is not an image";
            $uploadOk = 0;
        }
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["uploadImage"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["uploadImage"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Redirect user to index page
header("Location: index.php");
die();
?>