$(function(){

  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    slidesPerColumn: 3,
    slidesPerClolumnFill: 'row',
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  
});

