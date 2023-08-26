<?php get_header();?>
    <main class="main" >
      <section class="visual">
        <img class="visual__img visual__img-news"  alt="">
        <h2 class="visual__title-main h3" >Information</h2>
        <h4 class="visual__title-sub h4s">お知らせ</h4>
      </section>
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
      { bcn_display(); }?>
      </div>
      <section class="information">
        <div class="news__container">
          <?php if (have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
          <div class="news__wrapper">
            <a href="<?php the_permalink(); ?>">
              <img class="news__img" src="<?php the_post_thumbnail_url("full"); ?>" alt="">
              <div class="news__text">
                <h3 class="news__title color--black h4"><?php the_title(); ?></h3>
                <h4 class="news__date2"><?php the_time('Y年n月j日'); ?></h4>
                <h4 class="tag--green"><?php the_category(); ?></h4>
              </div>
            </a>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
          <div class="news__pagination">
            <!-- ページネーション -->
            <?php the_posts_pagination(//WPのプラグインなしでWP関数の機能を使ったページネッション(functions追加不要)
            array(
		        'prev_next' => false,//前へ後へは表示しない
		        'prev_text' => '<i class="fas fa-chevron-left"></i>',//数字だけ
		        'next_text' => '<i class="fas fa-chevron-right"></i>',//数字だけ
		        'type'      => 'list',//ページネーションの数字をdivかliにできるのでliに設定
	          )
            ); ?>
          </div> 
        </div>
        <div class="category__wrapper">
          <h3 class="category__title h4">カテゴリ</h3>
          <h4 class="category__item">営業日時</h4>
          <h4 class="category__item">キャンペーン</h4> 
          <h4 class="category__item">その他</h4>
        </div>
      </section> 
    </main>
<?php get_footer(); ?>