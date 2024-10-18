<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Library | Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <?php
        include 'view/header.php';
        ?>
        <br>


        <form id="uploadForm">
            <input type="file" id="imageUpload" accept="image/*" required>
            <button type="submit">Upload Image</button>
        </form>
        <div class="latest-image">
            <h2>Latest Uploaded Image:</h2>
            <div id="imageGallery"></div>
        </div>
    </div>
</body>
</html>