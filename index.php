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

        <h2>Latest Image</h2>
        <?php
        $dir = "images/";
        $files = glob($dir . "/*.*");
        // The amount of files that will be displayed
        $numFilesDisplayed = 1;

        usort($files, function($a, $b){
            // Only return the most recent file
            return (filemtime($a) < filemtime($b));
        });

        $files = array_slice($files, 0, $numFilesDisplayed);

        foreach($files as $file)
            echo "<img class='image-wrapper' src='" . $file. "' alt='code'>";
        ?>

    </div>
</body>
</html>