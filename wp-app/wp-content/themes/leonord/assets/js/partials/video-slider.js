new Swiper('.video-slider', {
  spaceBetween: 50,
  slidesPerView: "auto",
  pagination: {
    el: '.video-slider .swiper-pagination',
  },

  navigation: {
    nextEl: '.video-slider__wrapper .swiper-button-next',
    prevEl: '.video-slider__wrapper .swiper-button-prev',
  },
});