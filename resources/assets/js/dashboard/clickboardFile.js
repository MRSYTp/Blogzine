
    document.addEventListener('DOMContentLoaded', () => {
        const targetElements = document.querySelectorAll('.clickable-element');
        const notification = document.getElementById('notification');

        targetElements.forEach(targetElements => {

            targetElements.addEventListener('click', function() {

                const dataUrl = this.getAttribute('data-url');

                navigator.clipboard.writeText(dataUrl)
                    .then(() => {

                        showNotification();
                    })
                    .catch(err => {
                        console.error('خطا در کپی ادرس :', err);
                    });
            });

        });

    });


    function showNotification() {

        notification.style.display = 'block';

        setTimeout(() => {
            notification.style.display = 'none';
        }, 3000);
    }
