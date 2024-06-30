document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-container', {
      loop: true,
      autoplay: {
        delay: 3000, // Autoplay interval in milliseconds
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  });
  