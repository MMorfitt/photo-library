<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Library | Library</title>
    <link rel="stylesheet" href="styles.css">
</head>
</head>
<body>
    <div class="container">
        <?php
        include 'view/header.php';

        // Define the image directory
        $dir = "images/";
        // Fetch the files
        $files = glob($dir . "/*.*");

        // Display all files present in the images folder
        // This is in alphabetical order of the filename
        foreach($files as $file)
            echo "<img class='image-wrapper' src='" . $file . "' alt='code'>"
        ?>
        <br>
    </div>
</body>
</html>