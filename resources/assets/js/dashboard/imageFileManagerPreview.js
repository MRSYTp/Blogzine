document.addEventListener("DOMContentLoaded", () => {
    const fileInput = document.getElementById('fileInput');
    const preview = document.getElementById('preview');
    fileInput.addEventListener('change', function (event) {
        // Clear previous previews
        preview.innerHTML = '';
        const files = event.target.files; // Get all selected files
        if (files.length > 0) {
            Array.from(files).forEach(file => {
                const reader = new FileReader(); // Create a FileReader

                reader.onload = function (e) {
                    const div = document.createElement('div'); // Create a new div
                    div.classList.add('col-sm-12', 'col-md-4'); // Add classes col-md-12 and col-sm-4

                    const img = document.createElement('img'); // Create a new image element
                    img.src = e.target.result; // Set the image source to the file data
                    img.classList.add('preview-image'); // Add a class for styling

                    div.appendChild(img); // Append the image to the div
                    preview.appendChild(div); // Append the div to the preview container
                };

                reader.readAsDataURL(file); // Read the file as a Data URL
            });
        }
    });
});
