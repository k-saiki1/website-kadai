<?php get_header();?>
    <main class="main" >
      <section class="visual">
        <img class="visual__img visual__img-contact"  alt="">
        <h2 class="visual__title-main h3" >Contact</h2>
        <h4 class="visual__title-sub h4s">ご予約・お問い合わせ</h4>
      </section>
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        { bcn_display(); }?>
      </div>
      <section class="contact contact__thanks--margin">
        <div class="contact__thanks">
          <h3 class="contact__thanks-title">お問い合わせ内容を<br class="sp-view">送信しました</h3>
          <p class="contact__thanks-text">ありがとうございます。2営業日以内にご返信いたします。</p>
          <a class="button__green3" href="<?php echo home_url(); ?>/contact">戻る</a>
        </div>
      </section>
    </main>
<?php get_footer(); ?>