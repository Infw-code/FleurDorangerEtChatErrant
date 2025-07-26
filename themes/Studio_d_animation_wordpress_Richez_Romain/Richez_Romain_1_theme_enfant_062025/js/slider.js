document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.swiper', {
    loop: true,
    effect: "coverflow",
    slidesPerView: 4,
    spaceBetween: 20,
    autoplay: {
      delay: 2500,
    },
     coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
    speed: 1000,

  });
});