class Hero {
  constructor() {
    this.init()
  }

  init() {
    this.swiperInit()
  }

  swiperInit() {
    new Swiper(".swiper-hero", {
      slidesPerView: 1,
      spaceBetween: 17,
      slidesPerGroup: 1,
      loopFillGroupWithBlank: true,
      autoHeight: true,

      pagination: {
        el: ".swiper-pagination",
      },

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }
}

new Hero();