const imageGallery = document.getElementById('imageGallery');
let imageList = ['']; // Array to store the image URLs

document.getElementById('uploadForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting

    const fileInput = document.getElementById('imageUpload');
    const files = fileInput.files; // Get the list of files

    // Process each file
    Array.from(files).forEach(file => {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            imageList.unshift(e.target.result); // Add new image to the beginning of the array
            displayImage(); // Update the displayed images
        };

        reader.readAsDataURL(file); // Read the file as a data URL
    });

    // Clear the file input after upload
    fileInput.value = '';
});

// Function to display images
// Built to potentially do more than 1 image- unneeded for now
function displayImage() {
    imageGallery.innerHTML = ''; // Clear existing images

    // Limit the displayed images to the latest upload
    const recentImages = imageList.slice(0, 1);
    
    recentImages.forEach(src => {
        const img = document.createElement('img');
        img.src = src;
        img.alt = 'Uploaded Image';
        imageGallery.appendChild(img); // Add image to the gallery
    });
}
