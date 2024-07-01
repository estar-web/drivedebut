<?php

/**
 * 抜粋機能の有効化
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_post_type_support
 */
add_post_type_support('page', 'excerpt');


/**
 * デフォルトのスタイルやjQueryを読まない
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/wp_deregister_script
 */
function my_delete_local_files(){
  wp_deregister_style('wp-block-library');
  wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_delete_local_files');


/**
 * Google Fontの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_font(){
  //style.css 読み込み
  wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique:wght@400;500;700&display=swap', array(), '1.0.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'my_font' );


/**
 * CSSの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_styles(){
  //style.css 読み込み
  wp_enqueue_style('my', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'my_styles' );


/**
 * jQueryの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function jquery()
{
  //CDN 読み込み
  wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true);
}
add_action('wp_enqueue_scripts', 'jquery');


/**
 * JavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_scripts() {
  //script.js 読み込み
  wp_enqueue_script('my', get_template_directory_uri().'/assets/js/bundle.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}