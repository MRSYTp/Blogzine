document.addEventListener("DOMContentLoaded", () => {
document.querySelector(".upload-button").addEventListener("click", () => {
    // Clicks on the file input
    document.querySelector(".hidden-upload").click();
});

// Adds event listener on the hidden file input to listen for any changes
document.querySelector(".hidden-upload").addEventListener("change", (event) => {
    // Gets the file name
    document.querySelector(".upload-name").value = event.target.files[0].name;
});
});
