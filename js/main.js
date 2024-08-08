
 document.addEventListener('DOMContentLoaded', function() {
    const swiperConfig = document.querySelector('.swiper-config').innerText;
    const swiper = new Swiper('.init-swiper', JSON.parse(swiperConfig));
  });
