class Header {
  constructor() {
    this.init()
  }

  init() {
    this.toggleBurgerMenu();
  }

  toggleBurgerMenu() {
    const html = document.querySelector("html");
    const button = document.querySelector('.header__burger');
    const menu = document.querySelector('.header__wrapper-mobile-menu');

    button && button.addEventListener('click', () => {
      menu.classList.toggle('js-open');
      html.style.overflow = (html.style.overflow === 'hidden') ? 'unset' : 'hidden'
    })
  }
}

new Header();