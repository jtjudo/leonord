class Search {
  constructor() {
    this.showResultTitle = document.querySelector('.search-page-wrapper h3')
    this.showResultTitleSearchWord = this.showResultTitle?.querySelector('span');
    this.btnSearch = document.querySelector('.search-input-container button')
    this.inputSearch = document.querySelector('.search-input-container input')
    this.ajaxContainer = document.querySelector('.search-product__container')
    this.keyword = ''
    this.init()
  }

  init() {
    this.search()
  }

  search() {
    this.btnSearch && this.btnSearch.addEventListener('click', () => {
      startLoader('.search-product__wrapper .loader-container')
      this.showResultTitle.classList.remove('js-hidden');
      this.showResultTitleSearchWord.textContent = this.inputSearch.value
      this.keyword = this.inputSearch.value
      this.setUrlParam('keyword', this.keyword)
      this.ajax()
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
        action: 'search-page-product',
        keyword: this.keyword
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
          stopLoader('.search-product__wrapper .loader-container')
        })
    })
  }

  setUrlParam(key, value) {
    const url = new URL(window.location.href);

    url.searchParams.set(key, value);
    window.history.replaceState(null, null, url);
  }
}

new Search();