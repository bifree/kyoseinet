<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Open+Sans&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="body__container">
    <header class="header">
      <div class="l-header header_inner">
        <h1 class="header_logo">
          <a href="<?php echo home_url('/'); ?>" class="header_logo-img">
            <img class="img__layer" src="" alt="ロゴ">
          </a>
        </h1>
        <div class="header_nav">
          <ul class="header_nav-inner">
            <li class="header_nav-list"><a href="<?php echo home_url('/'); ?>" class="header_nav-list--link">ホーム</a></li>
            <li class="header_nav-list header_nav-list--green"><a href="<?php echo home_url('/about'); ?>" class="header_nav-list--link">団体について</a></li>
            <li class="header_nav-list header_nav-list--orange"><a href="<?php echo home_url('/activity'); ?>" class="header_nav-list--link">活動内容</a></li>
            <li class="header_nav-list header_nav-list--purple"><a href="<?php echo home_url('/contact'); ?>" class="header_nav-list--link">寄付・お問い合わせ</a></li>
          </ul>
        </div>
        <div class="header_nav-sp sp-tab_display">
          <button id="js_drawer" class="nav-btn" type="button" aria-label="メニュー">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
    </header>