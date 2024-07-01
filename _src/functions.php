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

/*********************
OGPタグ/Twitterカード設定を出力
*********************/
function my_meta_ogp() {
  if( is_front_page() || is_home() || is_singular() ){
    global $post;
    $ogp_title = '';
    $ogp_descr = '';
    $ogp_url = '';
    $ogp_img = '';
    $insert = '';

    if( is_singular() ) { //記事＆固定ページ
       setup_postdata($post);
       $ogp_title = $post->post_title;
       $ogp_descr = mb_substr(get_the_excerpt(), 0, 100);
       $ogp_url = get_permalink();
       wp_reset_postdata();
    } elseif ( is_front_page() || is_home() ) { //トップページ
       $ogp_title = get_bloginfo('name');
       $ogp_descr = get_bloginfo('description');
       $ogp_url = home_url();
    }

    //og:type
    $ogp_type = ( is_front_page() || is_home() ) ? 'website' : 'article';

    //og:image
    if ( is_singular() && has_post_thumbnail() ) {
       $ps_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
       $ogp_img = $ps_thumb[0];
    } else {
     $ogp_img = home_url().'/assets/images/common/ogp_default.jpg';
    }

    //出力するOGPタグをまとめる
    $insert .= '<meta property="og:title" content="'.esc_attr($ogp_title).'" />' . "\n";
    $insert .= '<meta property="og:description" content="'.esc_attr($ogp_descr).'" />' . "\n";
    $insert .= '<meta property="og:type" content="'.$ogp_type.'" />' . "\n";
    $insert .= '<meta property="og:url" content="'.esc_url($ogp_url).'" />' . "\n";
    $insert .= '<meta property="og:image" content="'.esc_url($ogp_img).'" />' . "\n";
    $insert .= '<meta property="og:site_name" content="'.esc_attr(get_bloginfo('name')).'" />' . "\n";
    $insert .= '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    //$insert .= '<meta name="twitter:site" content="@squid_jt" />' . "\n";
    $insert .= '<meta property="og:locale" content="ja_JP" />' . "\n";

    //facebookのapp_id（設定する場合）
    //$insert .= '<meta property="fb:app_id" content="ここにappIDを入力">' . "\n";
    //app_idを設定しない場合ここまで消す

    echo $insert;
  }
} //END my_meta_ogp

add_action('wp_head','my_meta_ogp');//headにOGPを出力

add_action('wp_head', 'add_wp_head');

function add_wp_head() {
  /* favicon */
  echo '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/assets/images/favicon.ico" type="image/x-icon" />' . "\n";
  /* pingback */
  if ( is_singular() && pings_open() ) {
      printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
  }
}


add_action( 'after_setup_theme', 'my_setup' );

function my_setup() {
    load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    //add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form' ) );
}


add_filter( 'document_title_separator', 'my_document_title_separator' );

function my_document_title_separator( $sep ) {
    $sep = '|';
    return $sep;
}
add_filter( 'the_title', 'my_title' );

function my_title( $title ) {
    if ( $title == '' ) {
        return '...';
    } else {
        return $title;
    }
}