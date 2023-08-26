$(function () {
  //スクロールでヘッダーの色を変更
  //初期設定
  $('.font--color').css('color', '#FFFFFF');
  $('.header').css('background-color', 'transparent');
  // menu表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 584) {
      $('.font--color').css('color', '#468459');
      $('.header').css('background-color', '#ffffff');
    } else {
      $('.font--color').css('color', '#FFFFFF');
      $('.header').css('background-color', 'transparent');
    }
  });
});