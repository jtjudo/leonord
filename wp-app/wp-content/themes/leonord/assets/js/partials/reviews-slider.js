new Swiper('.reviews-slider', {
  spaceBetween: 50,
  slidesPerView: "auto",
  pagination: {
    el: '.reviews-slider__wrapper .swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.reviews-slider__wrapper .swiper-button-next',
    prevEl: '.reviews-slider__wrapper .swiper-button-prev',
  },
});
