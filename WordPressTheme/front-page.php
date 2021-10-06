<?php get_header(); ?>
<div class="top_mv">
  <div class="top_text">
    私たち<br class="sp_display">「<span class="f_bold">NPO法人 共生社会をつくる<br>
    性的マイノリティ<br class="sp_display">支援全国ネットワーク</span>」は、<br>
    性的マイノリティへの<br class="sp_display">根強い偏見を解消し、<br>
    その視点を国や地方自治体の<br class="sp_display">政策に反映させるための、<br>
    当事者、支援者、専門家などで<br class="sp_display">構成される全国組織です。
  </div>
</div>

<section class="schedule">
  <div class="l-inner">
    <h2 class="sec_title schedule_title"><span>schedule</span>スケジュール予定</h2>
    <p class="schedule_discription">
      私たちの活動・イベント等のスケジュールについては以下をご確認の上、お問い合わせください。
    </p>
    <hr class="hr">
    <div class="goo-cal">
      <iframe src="https://calendar.google.com/calendar/embed?src=hn8veath8ch18bj75r9qjq4mqk%40group.calendar.google.com&ctz=Asia%2FTokyo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
      <div class="to_contact">
        <a href="<?php echo home_url('/contact'); ?>" class="contact_btn">
          お問い合わせはこちら
          <div class="border_arrow"></div>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="news-sns">
  <div class="l-inner ns_flex">
    <div class="news_block">
      <h2 class="sec_title news_title"><span>news</span>お知らせ</h2>
      <div class="news_archive">
        <ul class="news_lists">

          <?php
            $news_query = new WP_Query(
              array(
                'post_type'      => 'post',
                'posts_per_page' => 5,
              )
            );
          ?>
          <?php if ( $news_query->have_posts() ) : ?>
            <?php while ( $news_query->have_posts() ) : ?>
              <?php $news_query->the_post(); ?>
              
              <li class="news_list">
                <time datetime="<?php the_time( 'c' ); ?>" class="news_list__date">
                <?php the_time( 'y.m.d' ); ?>
                </time><?php the_title(); ?>
              </li>

            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>

        </ul>
      </div>
    </div>
    <div class="sns_block">
      <ul class="sns_inner">
        <li class="sns_box sns_twitter"><a href="https://twitter.com/kyouseinet2012" target="_blank" rel="noopener noreferrer" class="faa-parent animated-hover"><i class="fab fa-twitter faa-pulse"></i></a></li>
        <li class="sns_box sns_facebook"><a href="https://www.facebook.com/kyouseinet/" target="_blank" rel="noopener noreferrer" class="faa-parent animated-hover"><i class="fab fa-facebook faa-pulse"></i></a></li>
      </ul>
    </div>
  </div>
</section>

<?php get_footer(); ?>