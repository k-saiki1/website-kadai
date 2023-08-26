<?php get_header();?>
    <main class="main" >
      <section class="visual">
        <img class="visual__img visual__img-course"  alt="">
        <h2 class="visual__title-main h3">Price</h2>
        <h4 class="visual__title-sub h4s">コース・料金</h4>
      </section>
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        { bcn_display(); }?>
      </div>
      <section class="course backgroundcolor--gray">
        <div class="course__content padding2">
          <div class="center">
            <div class="deco__left"></div>
            <h3 class="h4">コース・料金</h3>
            <div class="deco__right"></div>
          </div>
          <div class="center">
            <h3 class="center--width h4">当院では保険診療、自費診療ともにご対応しております</h3>
          </div>
          <div class="item__wrapper course--margin">
            <div class="item__wrapper-box">
              <img class="course__item-img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-insurance1.png" alt="">
              <h3 class="color--darkgreen">保険診療</h3>
              <ul class="course__item-list">
                <li class="course__item-text">骨折・打撲・捻挫・脱臼</li>
                <li class="course__item-text">スポーツ診療</li>
                <li class="course__item-text">交通事故</li>
              </ul>
            </div>
            <div class="item__wrapper-box">
              <img class="course__item-img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-self1.png" alt="">
              <h3 class="color--darkgreen">自費診療</h3>
              <ul class="course__item-list">
                <li class="course__item-text">腰痛・肩こり</li>
                <li class="course__item-text">冷え性・だるさ</li>
                <li class="course__item-text">骨盤・背骨矯正</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="course2">
        <div class="course2__content">
          <div class="course2__text">
            <div class="title concept__text-title">
              <img class="title__img" src="<?php echo get_template_directory_uri(); ?>/images/Head_01_Icon.png" alt="">
              <h3 class="title__main">Insurance</h3>
              <h3 class="title__sub h4">保険診療</h3>
            </div>
            <p class="course2__paragraph">
              健康保険の適用は、慢性化していない、急性のけがのみが対象となります。<br>
              「負傷原因が急性または亜急性（急性に準ずる）の外傷性の負傷」のみです。
            </p>
            <ul class="course__item-list">
              <li class="course__item-text">骨折・打撲・捻挫・脱臼</li>
              <li class="course__item-text">スポーツ診療</li>
              <li class="course__item-text">交通事故</li>
            </ul>
          </div>
          <img class="course2__img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-insurance2.png" alt="">
        </div>   
      </section>
      <section class="course2">
        <div class="course2__content">
          <div class="course2__text">
            <div class="title concept__text-title">
              <img class="title__img" src="<?php echo get_template_directory_uri(); ?>/images/Head_01_Icon.png" alt="">
              <h3 class="title__main">Self-pay</h3>
              <h3 class="title__sub h4">自費診療</h3>
            </div>
            <p class="course2__paragraph">
              慢性的なご症状、日常生活の疲労やご年齢により生じる痛み緩和の施術は健康保険の適用がなく、全額自己負担となります。
            </p>
            <ul class="course__item-list">
              <li class="course__item-text">腰痛・肩こり</li>
              <li class="course__item-text">冷え性・だるさ</li>
              <li class="course__item-text">骨盤・背骨矯正</li>
            </ul>
            <p class="course2__paragraph2 ">初回　8,800円（税込） / 50分<br>
              2回目以降　6,600円（税込） / 30分
            </p>
          </div>
          <img class="course2__img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-self2.png" alt="">
        </div>   
      </section>
    </main>
<?php get_footer(); ?>