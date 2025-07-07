document.addEventListener('DOMContentLoaded', () => {

 const menuToggle = document.querySelector('.menu-toggle');
const mainNav = document.querySelector('.main-navigation');

menuToggle.addEventListener('click', () => {
  menuToggle.classList.toggle('active');      
  mainNav.classList.toggle('toggled');         

  const expanded = menuToggle.getAttribute('aria-expanded') === 'true';
  menuToggle.setAttribute('aria-expanded', String(!expanded));
});
});
