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
        // Define the image directory
        $dir = "images/";
        // Fetch the files
        $files = glob($dir . "/*.*");
        // The amount of files that will be displayed
        $numFilesDisplayed = 1;

        usort($files, function($a, $b){
            // Only return the most recent file
            return (filemtime($a) < filemtime($b));
        });

        // Take a slice of the files in order from newest to oldest
        // For this page it is 1 file, the most recent
        $files = array_slice($files, 0, $numFilesDisplayed);

        // Print the predefined number of files
        // In this case, just the 1 most recent
        foreach($files as $file)
            echo "<img class='latest-image' src='" . $file . "' alt='code'>";
        ?>

    </div>
</body>
</html>