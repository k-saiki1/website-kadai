<?php get_header();?>
    <main class="main" >
      <section class="visual">
        <img class="visual__img visual__img-contact"  alt="">
        <h2 class="visual__title-main h3">contact</h2>
        <h4 class="visual__title-sub h4s">ご予約・お問い合わせ</h4>
      </section>
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        { bcn_display(); }?>
      </div>
      <section class="contact">
        <div class="contact__wrapper">
          <div>
            <h3 class="contact__title1">お電話でのご予約・お問い合わせ</h3>
            <p class="contact__text1">〒101-0022 東京都千代田区神田練塀町300番地 <br>
              住友不動産秋葉原駅前ビル 5F
            </p>
            <h3 class="contact__title2 footer--spacing"><span class="footer--font">tel: </span>03-1234-5678</h3>
            <h3 class="contact__title3">ご予約・お問い合わせ<br class="sp-view">フォーム</h3>
            <h4 class="contact__text2">※ 2営業日以内にご返信いたします。</h4>
          </div>
          <?php the_content(); ?>
        </div>
      </section>
    </main>
<?php get_footer(); ?>