document.addEventListener('DOMContentLoaded', () => {

  const menuToggle = document.querySelector('.menu-toggle');
  const mainNav = document.querySelector('.main-navigation');

  menuToggle.addEventListener('click', () => {
    // Toggle classes existantes
    menuToggle.classList.toggle('active');      
    mainNav.classList.toggle('toggled');         
    if (menuToggle.classList.contains('active')){
      mainNav.classList.add('toggled');
    }
    else {
      mainNav.classList.remove('toggled');
    }
    // Toggle classe sur <body> pour bloquer le bouton
    /*document.body.classList.toggle('menu-open');*/

    // Mettre à jour aria-expanded
    const expanded = menuToggle.getAttribute('aria-expanded') === 'true';
    menuToggle.setAttribute('aria-expanded', String(!expanded));
  });
});
