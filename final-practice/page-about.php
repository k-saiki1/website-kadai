<?php get_header();?>
    <main class="main" >
      <section class="visual">
        <img class="visual__img visual__img-about"  alt="">
        <h2 class="visual__title-main h3">About</h2>
        <h4 class="visual__title-sub h4s">当院について</h4>
      </section>
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        { bcn_display(); }?>
      </div>
      <section class="concept">
        <div class="background">Concept</div>  
        <img class="background-img " src="<?php echo get_template_directory_uri(); ?>/images/BGicon_Green.png" alt="">
        <div class="concept__content">
          <div class="concept__text">
            <div class="title concept__text-title">
              <img class="title__img" src="<?php echo get_template_directory_uri(); ?>/images/Head_01_Icon.png" alt="">
              <h3 class="title__main">Concept</h3>
              <h3 class="title__sub h4">特長</h3>
            </div>
            <h2 class="concept__text-message">
              日々変化する<br class="pc-view">
              カラダと心を癒す<br class="pc-view">
              パーソナル<br class="pc-view">
              トレーナーとして
            </h2>
            <div class="concept__text-main">
              <p class="concept__text-text">当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。</p>
              <p class="concept__text-text">また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。</p>
              <p class="concept__text-text">ご不安な点や疑問点などお気軽にご相談くださいませ。</p>
            </div>
          </div>
          <div class="concept__img concept__img01"></div>
        </div>   
      </section>
      <section class="concept">
        <div class="background">Flow</div>  
        <img class="background-img  background-img__flow" src="<?php echo get_template_directory_uri(); ?>/images/BGicon_Green.png" alt="">
        <div class="concept__content">
          <div class="concept__text">
            <div class="title concept__text-title">
              <img class="title__img" src="<?php echo get_template_directory_uri(); ?>/images/Head_01_Icon.png" alt="">
              <h3 class="title__main">Flow</h3>
              <h3 class="title__sub h4">施術の流れ</h3>
            </div>
            <ol class="oredered">
              <li class="oredered__item">受付</li>
              <li class="oredered__item">問診票のご記入</li>
              <li class="oredered__item">カウンセリング</li>
              <li class="oredered__item">施術</li>
              <li class="oredered__item">アフターカウンセリング</li>
            </ol>
          </div>
          <div class="concept__img concept__img02"></div>
        </div>   
      </section>
      <section class="point">
        <div class="point__content">
          <div class="center">
            <div class="deco__left"></div>
            <h3 class="h4">根本改善のポイント</h3>
            <div class="deco__right"></div>
          </div>
          <div class="center">
            <h3 class="point__center--width h4">お体の状態や生活習慣、ご要望を丁寧にお伺いします。<br class="br">
              ご自身でできるケアなども含めて施術方針をお作りします。
            </h3>
          </div>
          <div class="item__wrapper2">
            <div class="point__item">
              <img class="point__item-img" src="<?php echo get_template_directory_uri(); ?>/images/Point1.png" alt="">
              <h3 class="color--black h4">丁寧なカウンセリング</h3>
            </div>
            <div class="point__item">
              <img class="point__item-img" src="<?php echo get_template_directory_uri(); ?>/images/Point2.png" alt="">
              <h3 class="color--black h4">徹底的分析</h3>
            </div>
            <div class="point__item">
              <img class="point__item-img" src="<?php echo get_template_directory_uri(); ?>/images/Point3.png" alt="">
              <h3 class="color--black h4">施術計画のご提案</h3>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>