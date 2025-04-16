document.addEventListener("DOMContentLoaded", () => {
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        slidesOffsetAfter: 2.2,
        slidesOffsetBefore: 2.2,
        slidesPerView: 1.3,
        spaceBetween: 20,
        loop: true,
        breakpoints: {
            // when window width is >= 768px
            768: {
                slidesPerView: 2.3,
            }
        },
        // If we need pagination
        // pagination: {
        //     el: '.swiper-pagination',
        // },

        // Navigation arrows
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },

        // And if we need scrollbar
        // scrollbar: {
        //     el: '.swiper-scrollbar',
        // },
    });

    const swiper_cats = new Swiper('.swiper-cats', {
        // Optional parameters
        slidesOffsetAfter: 0,
        slidesOffsetBefore: 0,
        slidesPerView: 2.3,
        spaceBetween: 10,
        loop: true,
        breakpoints: {
            // when window width is >= 768px
            768: {
                slidesPerView: 6,
            }
        }
    });

});
