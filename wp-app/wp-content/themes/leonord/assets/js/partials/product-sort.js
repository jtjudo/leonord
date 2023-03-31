class ProductSort {
  constructor() {
    this.init()
    this.format = 'popular';
    this.termId = document.querySelector('#main').getAttribute('data-page-id');
    this.ajaxContainer = document.querySelector('.tax-subcategory__results');
  }

  init() {
    this.sortProduct()
  }

  sortProduct() {
    const buttons = document.querySelectorAll('.tax-subcategory .button-sort');

    buttons && buttons.forEach((button) => {
      button.addEventListener('click', () => {
        startLoader('.tax-subcategory__wrapper .loader-container')
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
        action: 'sort-product',
        format: this.format,
        termId: this.termId,
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
          stopLoader('.tax-subcategory__wrapper .loader-container')
        })
    })
  }
}

new ProductSort()