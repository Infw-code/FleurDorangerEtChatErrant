document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.swiper', {
    loop: true,
    effect: "coverflow",
    slidesPerView: 5,
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
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