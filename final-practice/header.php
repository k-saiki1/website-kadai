<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>SAMURAI整体院</title>
    <!-- ファビコン -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-with, initial-scale=1.0">
    <!-- リセットcss -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <!-- ページを判定してcss切り替え -->
    <?php if ( !is_home() && !is_front_page() ) : ?>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-normal.css">
    <?php endif; ?>
    <!-- cssファイル -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <!--googleフォント-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Noto+Sans+JP&family=Shippori+Mincho&display=swap" rel="stylesheet">
    <!-- slickの読み込み -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <a class="header__logo" href="/"></a>
      <div class="header__wrapper">
      <nav class="header__nav">
        <div class="header__nav-title">メニュー</div>
        <a class="header__menu font--color" href="/">ホーム</a>
        <a class="header__menu font--color" href="<?php echo home_url(); ?>/about">当院について</a>
        <a class="header__menu font--color" href="<?php echo home_url(); ?>/course">コース・料金</a>
        <a class="header__menu font--color" href="<?php echo home_url(); ?>/category/news">お知らせ</a>
        <a class="header__menu font--color" href="<?php echo home_url(); ?>/voice">お客様の声</a>
        <a class="header__menu button--deco1 contact__button" href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせ</a>
      </nav>
      </div>
      <div class="openbtn">
        <span class="openbtn__line"></span>
        <span class="openbtn__line"></span>
        <span class="openbtn__line"></span>
      </div>
      <input class="modalWindow" type="button">
    </header>
    <a class="back-btn" href="#"><span class="dli-arrow-up"></span></a>