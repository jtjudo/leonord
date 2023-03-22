new Swiper('.news-slider', {
  slidesPerView: 'auto',
  spaceBetween: 43,
  pagination: {
    el: '.news-slider .swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.news-slider__wrapper .swiper-button-next',
    prevEl: '.news-slider__wrapper .swiper-button-prev',
  },
});