class HeaderClass {
  constructor() {
    this.init()
  }

  init() {
    this.toggleBurgerMenu();
    this.openContacts();
  }

  toggleBurgerMenu() {
    const html = document.querySelector("html");
    const button = document.querySelector('.header__burger');
    const menu = document.querySelector('.header__wrapper-mobile-menu');

    button && button.addEventListener('click', () => {
      menu.classList.toggle('js-open');
    })
  }

  openContacts() {
    const contactsBtn = document.querySelector('.header__contact-phone');
    const contacts = document.querySelector('.header__contacts-menu');

    contactsBtn && contactsBtn.addEventListener('click', () => {
      contacts.classList.toggle('js-open');
    })
  }
}

new HeaderClass();