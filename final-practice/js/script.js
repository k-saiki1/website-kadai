$(function () {
  //menuボタンをクリックしたら表示
  $('.openbtn,.menu__item,.modalWindow').click(function () {
    $('.openbtn').toggleClass('active');
    $(".modalWindow").toggleClass("modal");
    $('.header__nav').toggleClass("active");
  });
  // TOPへ戻る
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      $('.back-btn').css('visibility', 'visible');    
      $('.back-btn').css('opacity', 1);
    } else {
      $('.back-btn').css('visibility', 'hidden');    
      $('.back-btn').css('opacity', 0);
    }
  });
  // カルーセル設定
  $('.carousel,.carousel2').slick({
    autoplay: true,
    autoplaySpeed: 6000,
    arrows: false,
    dots: true,
    infinite: true,
    fade: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: false,
    swipe: false,
    responsive: [
      {
        breakpoint: 768, 
        settings: {
        slidesToShow: 1,
        },
      },
    ],
  });
});