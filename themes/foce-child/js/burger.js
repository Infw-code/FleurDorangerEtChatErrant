document.addEventListener('DOMContentLoaded', () => {
  const menuToggle = document.querySelector('.menu-toggle');
  const mainNav = document.querySelector('.main-navigation');

  function openMenu() {
    menuToggle.classList.add('active');
    mainNav.classList.add('toggled');
    document.body.classList.add('no-scroll'); // 👉 bloque le scroll du body
    menuToggle.setAttribute('aria-expanded', 'true');
  }

  function closeMenu() {
    menuToggle.classList.remove('active');
    mainNav.classList.remove('toggled');
    document.body.classList.remove('no-scroll'); // 👉 réactive le scroll
    menuToggle.setAttribute('aria-expanded', 'false');
  }

  // Ouvre ou ferme le menu quand on clique sur le burger
  menuToggle.addEventListener('click', () => {
    if (menuToggle.classList.contains('active')) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  // Ferme le menu quand on clique sur un lien
  mainNav.addEventListener('click', (event) => {
    if (event.target.tagName.toLowerCase() === 'a') {
      closeMenu();
    }
  });
});
