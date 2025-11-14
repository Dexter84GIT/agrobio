document.addEventListener('DOMContentLoaded', () => {
    const mainSlider = () => {
        const swiper1 = new Swiper('.advertise-swiper', {
            direction: 'horizontal',
            loop: true,
            pagination: {
                el: '.advertise-pagination',
                clickable: true
            },
        });
        const swiper2 = new Swiper('.new-swiper', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 3,
            spaceBetween: 14,
            navigation: {
                nextEl: '.new-button-next',
                prevEl: '.new-button-prev',
            },
        });
        const swiper3 = new Swiper('.banner-swiper', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 1,
            navigation: {
                nextEl: '.banner-button-next',
                prevEl: '.banner-button-prev',
            },
        });
        const swiper4 = new Swiper('.systems-swiper', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 1,
            navigation: {
                nextEl: '.banner-button-next',
                prevEl: '.banner-button-prev',
            },
        });
        const swiper5 = new Swiper('.systems-swiper-second', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 1,
            navigation: {
                nextEl: '.new-button-next',
                prevEl: '.new-button-prev',
            },
        });
        const swiper6 = new Swiper('.news-swiper', {
            direction: 'horizontal',
            loop: true,
            spaceBetween: 35,
            slidesPerView: 3,
            navigation: {
                nextEl: '.news-button-next',
                prevEl: '.news-button-prev',
            },
        });
    }
    mainSlider()
})
