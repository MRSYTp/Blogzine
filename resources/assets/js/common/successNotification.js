document.addEventListener("DOMContentLoaded", () => {
    const successMsg = document.getElementById('successMsg');
    const successMsgShow = new bootstrap.Toast(successMsg);
    successMsgShow.show();
});
