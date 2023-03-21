class PopularProduct {
  constructor() {
    this.init()
    this.format = 'popular'
    this.ajaxContainer = document.querySelector('.popular-product__results');
  }

  init() {
    this.swiperInit()
    this.filter()
  }

  filter() {
    const buttons = document.querySelectorAll('.popular-product-sort button')

    buttons && buttons.forEach((button) => {
      button.addEventListener('click', () => {
        startLoader('.popular-product__wrapper .loader-container')
        this.format = button.getAttribute('data-format');

        buttons.forEach((button) => {
          button.classList.remove('button-active')
        })
        button.classList.add('button-active')

        this.ajax()
      })
    })
  }

  ajax() {
    const url = '/wp-admin/admin-ajax.php';
    const promise = fetch(url, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: new URLSearchParams({
        action: 'popular-product',
        format: this.format,
      })
    })

    return promise.then((response) => {
      response.text()
        .then((resp) => {
          if (this.ajaxContainer !== null) {
            this.ajaxContainer.innerHTML = resp;
          }
          return resp
        })
        .then(() => {
          this.swiperInit()
          stopLoader('.popular-product__wrapper .loader-container')
        })
    })
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