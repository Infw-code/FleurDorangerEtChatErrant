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
    /* J'ai reduit le code de la function pour que cloud.id recupere les 2 cloud ,
     j'ai fait des test avec la vitesse et la position de depart pour que les nuage effectuer les 300px de translate */

function moveCloud(cloud, basePosition, speed, maxMove) {
  if (cloud && isVisible(cloud)) {
    const move = Math.min(basePosition + scrollY * speed, maxMove);
    cloud.style.transform = `translateX(-${move}px)`;
    console.log(`${cloud.id} visible: ${move}px`);
  }
}
moveCloud(cloud1, -264, 0.37, 1600);
moveCloud(cloud2, -400, 0.38, 600);
  });
})