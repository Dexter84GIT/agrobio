const slider = () => {
  const hasAnySwiperRoot =
    document.querySelector(".swiper") ||
    document.querySelector("[data-swiper]") ||
    document.querySelector(".swiper-container") ||
    document.querySelector(".slider");

  if (!hasAnySwiperRoot) return;

  const Sw = window.Swiper;
  if (!Sw) return;

  try {

    const mainWrapper = document.querySelector(".cardMainSlider .swiper-wrapper");
    const thumbsWrapper = document.querySelector(".cardThumbsSlider .swiper-wrapper");

    if (mainWrapper && thumbsWrapper) {
      mainWrapper.innerHTML = "";

      thumbsWrapper.querySelectorAll(".swiper-slide").forEach((thumbSlide) => {
        const clone = thumbSlide.cloneNode(true);
        const img = clone.querySelector("img");
        if (img && img.dataset.full) img.src = img.dataset.full;
        mainWrapper.appendChild(clone);
      });

      const thumbs = new Sw(".cardThumbsSlider", {
        slidesPerView: 4,
        spaceBetween: 15,
        direction: 'vertical',
        freeMode: false,
        watchSlidesProgress: true,
        watchSlidesVisibility: true,
        loop: true,
        navigation: {
          nextEl: '.upBtn',
          prevEl: '.downBtn',
        }
      });

      new Sw(".cardMainSlider", {
        slidesPerView: 1,
        spaceBetween: 0,
        thumbs: { swiper: thumbs },
        loop: true,
      });
    }
  } catch (e) { }
  const featuresSlider = new Sw(".new-swiper", {
    slidesPerView: 3,
    spaceBetween: 15,
    loop: true,
  });
  const bannerSlider = new Sw(".banner-swiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
  });
  const newsSlider = new Sw(".news-swiper", {
    slidesPerView: 3,
    spaceBetween: 15,
    loop: true,
  });
  const advertiseSlider = new Sw(".advertise-swiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
  });
};

export default slider;
