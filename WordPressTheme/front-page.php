<?php get_header(); ?>
<div class="top_mv">
  <div class="top_text">
    私たち<br class="u-hidden-pc">「<span class="f_bold">NPO法人 共生社会を作るセクシュアル・<br class="u-hidden-pc">
    マイノリティ支援全国ネットワーク</span>」は、<br>
    セクシュアル・マイノリティへの根強い偏見を解消し、<br>
    その視点を国や地方自治体の政策に反映させるための、<br>
    当事者、支援者、専門家などで構成される全国組織です。
  </div>
</div>

<section class="schedule">
  <div class="l-inner">
    <h2 class="sec_title schedule_title"><span>suchedule</span>スケジュール予定</h2>
    <p class="schedule_discription">
      私たちの活動・イベント等のスケジュールについては以下をご確認の上、お問い合わせください。
    </p>
    <hr class="hr">
    <div class="goo-cal">
      <p>ここにGoogleカレンダーのiframeを入れる</p>
    </div>
  </div>
</section>

<section class="news-sns">
  <div class="l-inner ns_flex">
    <div class="news_block">
      <h2 class="sec_title news_title"><span>news</span>お知らせ</h2>
      <div class="news_archive">
        <!-- <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php endwhile; endif; ?> -->
        <ul class="news_lists">
          <li class="news_list"><time>2021-10-01</time>ホームページを公開しました</li>
          <li class="news_list"><time>2021-10-03</time>○○市で市民講座を行いました</li>
          <li class="news_list"><time>2021-10-01</time>ホームページを公開しました</li>
          <li class="news_list"><time>2021-10-03</time>○○市で市民講座を行いました</li>
          <li class="news_list"><time>2021-10-03</time>○○市で市民講座を行いました</li>
        </ul>
      </div>
    </div>
    <div class="sns_block">
      <ul class="sns_inner">
        <li class="sns_box sns_twitter"><a href=""><i class="fab fa-twitter"></i></a></li>
        <li class="sns_box sns_facebook"><a href=""><i class="fab fa-facebook"></i></a></li>
      </ul>
    </div>
  </div>
</section>

<?php get_footer(); ?>