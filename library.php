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

        // display all files presnt in the images folder
        $dir = "images/";
        $files = glob($dir . "/*.*");

        foreach($files as $file)
            echo "<img class='image-wrapper' src='" . $file . "' alt='code'>"
        ?>
        <br>
    </div>
</body>
</html>