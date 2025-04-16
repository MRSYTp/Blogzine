document.addEventListener("DOMContentLoaded", () => {
    const fileInput = document.getElementById('fileInput');
    const preview = document.getElementById('preview');

    fileInput.addEventListener('change', function (event) {
        const file = event.target.files[0]; // Get the selected file
        if (file) {
            const reader = new FileReader(); // Create a FileReader

            reader.onload = function (e) {
                preview.src = e.target.result; // Set the image source to the file data
                preview.hidden = false; // Make the image visible
            };

            reader.readAsDataURL(file); // Read the file as a Data URL
        } else {
            preview.src = ""; // Clear the preview if no file is selected
            preview.hidden = true; // Hide the image
        }
    });

});
