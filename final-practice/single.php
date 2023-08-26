<?php get_header();?>
    <main class="main" >
      <section class="visual">
        <img class="visual__img visual__img-news"  alt="">
        <h2 class="visual__title-main h3">Information</h2>
        <h4 class="visual__title-sub h4s">お知らせ</h4>
      </section>
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        { bcn_display(); }?>
      </div>
      <section class="information news-single">
        <div class="news__wrapper2">
          <div class="news__text">
            <h2 class="news__title color--darkgreen h3s"><?php the_title(); ?></h2>
            <h4 class="news__date2"><?php the_time('Y年n月j日'); ?></h4>
            <h4 class="tag--green"><?php the_category(); ?></h4>
          </div>
          <img class="news__img2" src="<?php the_post_thumbnail_url("full"); ?>" alt="">
          <div class="news-text">
            <?php the_content(); ?>
          </div>
          <div class="article-link h4s">
            <?php previous_post_link('%link', '<　前の記事へ', true); ?>
            <a href="<?php echo home_url(); ?>/category/news">　<span class="pc-view">お知らせ</span>一覧　</a>
            <?php next_post_link('%link', '次の記事へ　>', true); ?>
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