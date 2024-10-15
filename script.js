document.getElementById('uploadForm').addEventListener('submit', function(event) {
    // Prevent the form from submitting
    event.preventDefault();

    const fileInput = document.getElementById('imageUpload');
    // Get the first file from the input
    const file = fileInput.files[0];

    if (file) {
        const reader = new FileReader();

        // Define the onload function to update the image source
        reader.onload = function(e) {
            const latestImage = document.getElementById('latestImage');
            // Set the source of the image to the result of FileReader
            latestImage.src = e.target.result; 
        };

        // Read the file as a data URL
        reader.readAsDataURL(file);
    }
});