class SingleProduct {
  constructor() {
    this.init()
  }

  init() {
    this.swiperInit()
    this.removeHiddenForCharacteristic()
  }

  swiperInit() {
    const productSwiper = new Swiper(".productSwiperBottom", {
      breakpoints: {
        0: {
          spaceBetween: 20,
          slidesPerView: 2,
        },

        481: {
          spaceBetween: 20,
          slidesPerView: 3,
        },

        1441: {
          allowTouchMove: true,
          slidesPerView: 4,
        },
      },
      spaceBetween: 15,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
      allowTouchMove: false,
    });

    new Swiper(".productSwiperTop", {
      spaceBetween: 20,
      thumbs: {
        swiper: productSwiper,
      },

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }

  removeHiddenForCharacteristic() {
    const allCharacteristicBtn = document.querySelector('.data-right-all');
    const characteristics = document.querySelectorAll('.data-right-characteristic');

    allCharacteristicBtn && allCharacteristicBtn.addEventListener('click', () => {
      characteristics && characteristics.forEach((characteristic) => {
        characteristic.classList.remove('js-hidden');
      })

      allCharacteristicBtn.style.display = "none";
    })
  }
}

new SingleProduct();