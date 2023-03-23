new Swiper('.novelty-slider', {
  spaceBetween: 50,
  slidesPerView: "auto",
  pagination: {
    el: '.novelty-slider .swiper-pagination',
  },

  navigation: {
    nextEl: '.novelty-slider__wrapper .swiper-button-next',
    prevEl: '.novelty-slider__wrapper .swiper-button-prev',
  },
});