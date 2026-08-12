document.addEventListener("DOMContentLoaded", () => {
    new Swiper(".mySwiper", {
        loop: true,

        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
