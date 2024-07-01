<!DOCTYPE html>
<html lang="ja" prefix="og: https://ogp.me/ns#">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=1">
  <title>タイトル</title>
  <meta name="description" content="(ページの説明)">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no,address=no,email=no">
  <!-- ogp -->
  <meta property="og:url" content="">
  <meta property="og:title" content="">
  <meta property="og:type" content="website">
  <meta property="og:description" content="">
  <meta property="og:image" content="">
  <meta property="og:site_name" content="">
  <meta property="og:locale" content="ja_JP">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="">
  <!-- ogp -->
  <link rel="canonical" href="正規ページのURL">
  <link rel="icon" href=""><!-- ファビコン -->
  <link rel="icon" href="./icon.svg" type="image/svg+xml"><!-- モダンブラウザ用SVGアイコン -->
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png"><!-- スマホホーム画面ショートカット用アイコン -->
  <link rel="manifest" href="./manifest.webmanifest"><!-- Android用pngアイコンマニフェスト -->
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