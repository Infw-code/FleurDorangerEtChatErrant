document.addEventListener('DOMContentLoaded', () => {
  const cloud1 = document.querySelector('.cloud1');
  const cloud2 = document.querySelector('.cloud2');

  window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;

    // Vérifie si un élément est visible dans la fenêtre
    const isVisible = el => {
      const rect = el.getBoundingClientRect();
      return (
        rect.top < window.innerHeight &&
        rect.bottom > 0
      );
    };

 if (cloud1 && isVisible(cloud1)) {
  const moveCloud1 = Math.min(scrollY * 0.2, 1600); // vitesse doublée, distance doublée
  cloud1.style.transform = `translateX(-${moveCloud1}px)`;
  console.log(`Cloud 1 visible: ${moveCloud1}px`);
}

if (cloud2 && isVisible(cloud2)) {
  const moveCloud2 = Math.min(scrollY * 0.16, 600); // vitesse et distance doublées
  cloud2.style.transform = `translateX(-${moveCloud2}px)`;
  console.log(`Cloud 2 visible: ${moveCloud2}px`);
}
  });
})