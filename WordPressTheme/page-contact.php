<?php get_header(); ?>

<div class="contact-us" id="page">
  <div class="l-inner page__inner">
    <div class="page__title">
      <span class="page__title-en page__title-en--pur">support & contact</span>
      <h2 class="page__title-jp">寄付・お問い合わせ</h2>
    </div>

    <section class="cosu-block support">
      <div class="cosu-block__inner support__inner">
        <h3 class="cosu-block__title support__title">寄付によるご支援について</h3>
        <p class="cosu-block__text support__text">
          団体の継続活動のために寄付をお願いします。
        </p>
        <div class="support__info info">
          <dl class="info__inner">
            <div class="info__items">
              <dt class="info__item">銀行名：</dt>
              <dd>ゆうちょ銀行</dd>
            </div>
            <div class="info__items">
              <dt class="info__item">支店名：</dt>
              <dd>008支店</dd>
            </div>
            <div class="info__items">
              <dt class="info__item">口座番号：</dt>
              <dd>普通 4688846</dd>
            </div>
            <div class="info__items">
              <dt class="info__item">口座名義：</dt>
              <dd>トクヒ）キョウセイシャカイヲツクルセクシュアル マイノリティ</dd>
            </div>
          </dl>
        </div>
      </div>
    </section>

    <section class="cosu-block contact">
      <div class="cosu-block__inner contact__inner">
        <h3 class="cosu-block__title contact__title">お問い合わせ</h3>
        <p class="cosu-block__text contact__text">
			各種お問い合わせにつきましては、こちらのフォームよりお願いいたします。
        </p>
		  <div class="contact-form">
         <?php echo do_shortcode('[contact-form-7 id="16" title="お問い合わせ"]'); ?>
        </div>
   
<?php get_footer(); ?>