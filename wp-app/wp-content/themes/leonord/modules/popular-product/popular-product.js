class PopularProduct {
  constructor() {
    this.init()
  }

  init() {
    this.swiperInit()
  }

  swiperInit() {
    new Swiper(".swiper-popular-product", {
      breakpoints: {
        376: {
          slidesPerView: 2,
          spaceBetween: 17,
          slidesPerGroup: 2,
          loopFillGroupWithBlank: true,
        },

        681: {
          slidesPerView: 3,
          spaceBetween: 17,
          slidesPerGroup: 3,
          loopFillGroupWithBlank: true,
        },

        1281: {
          slidesPerView: 4,
          spaceBetween: 42,
          slidesPerGroup: 4,
          loopFillGroupWithBlank: true,
        },

        1441: {
          slidesPerView: 5,
          spaceBetween: 42,
          slidesPerGroup: 5,
          loopFillGroupWithBlank: true,
        },
      },

      slidesPerView: 1,
      spaceBetween: 17,
      slidesPerGroup: 1,
      loopFillGroupWithBlank: true,
      autoHeight: true,

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }
}

new PopularProduct();