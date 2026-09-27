document.addEventListener("DOMContentLoaded", () => {
    const heroSwiper = document.querySelector(".hero-banner .hero-swiper");

    if (!heroSwiper) {
        return;
    }

    new Swiper(heroSwiper, {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 0,
        centeredSlides: false,
        loop: true,
        loopAdditionalSlides: 1,
        roundLengths: true,
        watchOverflow: true,
        observer: true,
        observeParents: true,
        resizeObserver: true,

        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
        },

        navigation: {
            nextEl: ".hero-banner .swiper-button-next",
            prevEl: ".hero-banner .swiper-button-prev",
        },

        pagination: {
            el: ".hero-banner .swiper-pagination",
            clickable: true,
        },

        on: {
            init(swiper) {
                swiper.updateSize();
                swiper.updateSlides();
            },
            resize(swiper) {
                swiper.updateSize();
                swiper.updateSlides();
            },
        },
    });
});
