document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('fileInput');
    const imagePreviewContainer = document.getElementById('imagePreviewContainer');

    fileInput.addEventListener('change', function(event) {
        // Clear any existing previews
        imagePreviewContainer.innerHTML = '';

        // Get the selected files
        const files = event.target.files;

        // Iterate over each file and display it
        for (let i = 0; i < files.length; i++) {
            const file = files[i];

            // Create a FileReader object
            const reader = new FileReader();

            // Define what happens when the file is read
            reader.onload = function(e) {
                // Create an image element
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('img-fluid', 'w-25', 'm-1'); // Add any desired classes
                img.style.maxWidth = '150px'; // Optional: Set max width for preview

                // Append the image to the preview container
                imagePreviewContainer.appendChild(img);
            };

            // Read the file as a data URL
            reader.readAsDataURL(file);
        }
    });
});
