<?php get_header();?>
    <main class="main" >
      <section class="mainvisual">
        <div class="mainvisual__back">
          <div class="mainvisual__img">
            <ul class="carousel">
              <li><img class="carousel__img carousel__img01"  alt=""></li>
              <li><img class="carousel__img carousel__img02"  alt=""></li>
              <li><img class="carousel__img carousel__img03"  alt=""></li>
              <li><img class="carousel__img carousel__img04"  alt=""></li>
            </ul>
          </div>
        </div>
        <div class="mainvisual__back2">
          <div class="mainvisual__text">根本的な症状改善を</div>
          <div class="mainvisual__text mainvisual__text--position">サポートします</div>
        </div>
      </section>
      <section class="news">
        <div class="news__item-box1">
          <div class="news__item-box2">
            <h3 class="news--left-large">News</h3>
            <h4 class="news__title-sub">お知らせ</h4>
          </div>
          <div class="news__item-box3">
            <div class="news__item-box4">
              <p class="news__date news--left-middle"><?php echo get_the_date(); ?></p>
              <span class="tag--green"><?php the_category(); ?></span>
            </div>
            <a href="<?php the_permalink(); ?>">
              <p class="news--left-small"><?php the_title(); ?></p>
            </a>
          </div>
        </div>
        <a class="news__go-detail news--right" href="<?php echo home_url(); ?>/category/news">→お知らせ一覧へ</a>              
      </section>
      <section class="concept"> 
      <img class="background-img" src="<?php echo get_template_directory_uri(); ?>/images/BGicon_Green.png" alt="">
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
            <div class="center concept__button">
              <a class="button__white" href="<?php echo home_url(); ?>/about">→当院について</a>
            </div>
          </div>
          <div class="concept__img concept__img01"></div>
        </div>  
        <div class="background">Concept</div>   
      </section>
      <section class="course backgroundcolor--lightgreen ">
        <img class="head__img1" src="<?php echo get_template_directory_uri(); ?>/images/Vector-upper.png" alt="">
        <img class="head__img2" src="<?php echo get_template_directory_uri(); ?>/images/Vector-lower.png" alt="">
        <div class="background background--position">Course</div> 
        <img class="background-img" src="<?php echo get_template_directory_uri(); ?>/images/BGicon_Green.png" alt="">
        <div class="course__content">
          <div class="course__content2">
            <div class="center">
              <div class="deco__left"></div>
                <h3 class="h4">コース・料金</h3>
              <div class="deco__right"></div>
            </div>
            <div class="center">
              <h3 class="center--width h4">当院では保険診療、自費診療ともにご対応しております</h3>
            </div>
          </div>
          <div class="item__wrapper">
            <div class="item__wrapper-box">
              <div class="course__item-img course__item-img01"></div>
              <h3 class="color--darkgreen">保険診療</h3>
              <ul class="course__item-list">
                <li class="course__item-text">骨折・打撲・捻挫・脱臼</li>
                <li class="course__item-text">スポーツ診療</li>
                <li class="course__item-text">交通事故</li>
              </ul>
            </div>
            <div class="item__wrapper-box">
              <div class="course__item-img course__item-img02"></div>
              <h3 class="color--darkgreen">自費診療</h3>
              <ul class="course__item-list">
                <li class="course__item-text">腰痛・肩こり</li>
                <li class="course__item-text">冷え性・だるさ</li>
                <li class="course__item-text">骨盤・背骨矯正</li>
              </ul>
            </div>
          </div>
          <div class="center">        
            <a class="button__white backgroundcolor--lightgreen" href="<?php echo home_url(); ?>/course">→コース・料金詳細へ</a>
          </div>  
        </div>
      </section>
      <section class="voice1">
        <div class="carousel2">
          <div class="voice1__img voice1__img01"></div>
          <div class="voice1__img voice1__img02"></div>
          <div class="voice1__img voice1__img03"></div>
        </div>
        <div class="voice1__content">
          <div class="voice1__trimming"></div>
          <div class="center">
            <div class="deco__left"></div>
            <h3 class="h4">お客様の声</h3>
            <div class="deco__right"></div>
          </div>
          <div class="center">
            <h3 class="center--width h4">痛みの改善に加えて自分で予防もできるようになりました</h3>
          </div>
          <div class="voice1__main">
            <div>
              <div class="center">
                <img class="voice1__main-img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-user1.png" alt="">
              </div>
              <div class="voice1__main-text">
                <h3>S・K様　30代女性</h3>
              </div>
              <p class="voice1__main-text2">1ヵ月で腰の痛みが軽減しました。自分で自宅でできるケアも教えていただき、お任せしてよかったです。</p>
            </div>
            <div>
              <div class="center">
                <img class="voice1__main-img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-user2.png" alt="">
              </div>
              <div class="voice1__main-text">
                <h3>T・M様　40代男性</h3>
              </div>
              <p class="voice1__main-text2">マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。</p>
            </div>
            <div>
              <div class="center">
                <img class="voice1__main-img" src="<?php echo get_template_directory_uri(); ?>/images/TOP-user3.png" alt="">
              </div>
              <div class="voice1__main-text">
                <h3>S・T様　60代女性</h3>
              </div>
              <p class="voice1__main-text2">転倒して足を骨折したのをきっかけに、痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。今は毎日元気に近所を散歩できています。</p>
            </div>
          </div>          
          <div class="center">          
            <a class="button__white" href="<?php echo home_url(); ?>/voice">→お客様の声一覧へ</a>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>