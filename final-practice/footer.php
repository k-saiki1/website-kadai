    <footer class="footer">  
      <img class="boundary-upper" src="<?php echo get_template_directory_uri(); ?>/images/Vector-upper.png" alt="">
      <img class="boundary-lower" src="<?php echo get_template_directory_uri(); ?>/images/Vector-lower.png" alt="">
      <div class="footer__content">    
        <div class="center">
          <div class="deco__left"></div>
            <h3 class="h4">お気軽にご来院ください</h3>
          <div class="deco__right"></div>
        </div>
        <div class="item__wrapper footer--margin">
          <div class="footer__info">
            <h3 class="footer__info-text h4">JR「秋葉原駅」より徒歩1分</h3>
            <p class="footer__info-text">
              〒101-0022 <br>
              東京都千代田区神田練塀町300番地<br>
              住友不動産秋葉原駅前ビル5F
            </p>
            <h3 class="footer__info-text h4 footer--spacing"><span class="footer--font">tel: </span>03-1234-5678</h3>
            <table class="footer__table">
              <tr class="footer__table-head">
                <td>営業時間</td>
                <td>月</td>
                <td>火</td>
                <td>水</td>
                <td>木</td>
                <td>金</td>
                <td>土</td>
                <td>日</td>
              </tr>
              <tr class="footer__table-data1">
                <td>9:00～12:30</td>
                <td>●</td>
                <td>●</td>
                <td>−</td>
                <td>●</td>
                <td>●</td>
                <td>●</td>
                <td>●</td>
              </tr>
              <tr class="footer__table-data2">
                <td>15:30～20:00</td>
                <td>●</td>
                <td>●</td>
                <td>−</td>
                <td>●</td>
                <td>●</td>
                <td>●</td>
                <td>●</td>
              </tr>
            </table>
            <a class="button__green padding1 h5" href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせはこちらから</a>
          </div>
          <div class="map__container">
            <iframe class="footer__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.068678112406!2d139.7720776762112!3d35.69992752894594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188fee13660e23%3A0x77137876edf742ac!2z5L2P5Y-L5LiN5YuV55Sj56eL6JGJ5Y6f6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1691373372704!5m2!1sja!2sjp" width="600" height="450" style="border:0;" 
              allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
        <nav class="footer__nav">
          <div class="footer__logo">
            <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/Frame 2259.png" alt="logo"></a>
          </div>
          <div class="footer__menu-box">
            <a class="footer__nav-menu" href="/">TOP</a>
            <a class="footer__nav-menu" href="<?php echo home_url(); ?>/about">当院について</a>
            <a class="footer__nav-menu" href="<?php echo home_url(); ?>/course">コース・料金</a>
            <a class="footer__nav-menu" href="<?php echo home_url(); ?>//category/news">お知らせ</a>
            <a class="footer__nav-menu" href="<?php echo home_url(); ?>/voice">お客様の声</a>
            <a href="<?php echo home_url(); ?>/contact">ご予約・お問い合わせ</a>
          </div>
        </nav>
      </div>  
      <div class="footer__copyright">
        <span>&copy;2023 SAMURAI整体院</span>
      </div>
    </footer>
    <!-- jQueryの読み込み -->    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- slickの読み込み -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- jsの読み込み -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php if ( is_home() || is_front_page() ) : ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/script2.js"></script>
    <?php endif; ?>
    <?php wp_footer(); ?>
  </body>
</html>