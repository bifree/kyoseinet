<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <!-- <p class="p-test">aaaa</p> -->
    <div class="l-header header_inner">
      <h1 class="header_logo">
        <a href="" class="header_logo-img">
          <img class="img__layer" src="" alt="ロゴ">
        </a>
      </h1>
      <div class="header_nav u-hidden-tab_sp">
        <ul class="header_nav-inner">
          <li class="header_nav-list"><a href="" class="header_nav-list--link">団体について</a></li>
          <li class="header_nav-list"><a href="" class="header_nav-list--link">活動内容</a></li>
          <li class="header_nav-list"><a href="" class="header_nav-list--link">寄付・お問い合わせ</a></li>
        </ul>
      </div>
      <div class="header_nav-sp u-hidden-pc">
        <button class="nav-btn" type="button" aria-label="メニュー">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>