<?php get_header();?>
    <main class="main" >
      <section class="visual">
        <img class="visual__img visual__img-voice"  alt="">
        <h2 class="visual__title-main h3" ><?php echo esc_html(get_post_type_object(get_post_type())->name); ?></h2>
        <h4 class="visual__title-sub h4s">お客様の声</h4>
      </section>
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display'))
      { bcn_display(); }?>
      </div>
      <section class="voice">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
        <div class="voice__wrapper">
          <img class="voice__img2" src="<?php the_post_thumbnail_url("full"); ?>" alt="">
          <div >
            <h3 class="voice__title"><?php the_title(); ?></h3>
            <p class="voice__text"><?php the_content(); ?></p>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </section>
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
    </main>
<?php get_footer(); ?>