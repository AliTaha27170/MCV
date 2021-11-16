const swiper = new Swiper(".swiper-container", {
  speed: 900,
  loop: true,

  // If we need pagination
  pagination: {
      el: ".swiper-pagination"
  },

  // Navigation arrows
  navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
  }
});
AOS.init({
  duration: 1200,
})


