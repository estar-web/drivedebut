<!DOCTYPE html>
<html lang="ja" prefix="og: https://ogp.me/ns#">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no,address=no,email=no">
  <?php wp_head(); ?>
</head>

<body>
  <?php if (is_front_page()) : ?>
    <header id="header" class="l-header p-header">
      <div class="p-header__inner l-inner">
        <h1 class="p-headerLogo">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="p-headerLogo__link">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="ロゴ：ドライビュデビュー" width="64" height="44" loading="lazy" decoding="async">
          </a>
        </h1>
        <nav id="navigation" class="p-header__nav">
          <ul class="l-menu">
            <li class="l-menu__btn">
              <a href="#price" class="l-menu__link" data-menu-color="price">教習料金</a>
            </li>
            <li class="l-menu__btn">
              <a href="#" class="l-menu__link" data-menu-color="reserve">予約カレンダーを見る</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
  <?php endif; ?>