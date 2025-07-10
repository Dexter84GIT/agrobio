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
                el: '.new-navigation',
            },
        });
    }
    mainSlider()
})
