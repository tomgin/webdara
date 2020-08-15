<?php

// サムネイル画像出す
add_theme_support('post-thumbnails');

// 自動でPタグ付くの回避
// remove_filter('the_content', 'wpautop');
// remove_filter('the_excerpt', 'wpautop');

// コンタクトフォーム7のPタグも消す
// define( 'WPCF7_AUTOP', false );

// サイドバー追加
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'サイドバー',
        'id' =>'sidebar',
        'description' => '解説',
        'before_widget' => '<div class="sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// サイドバー複数の場合
// if(function_exists('register_sidebars')) {
//     register_sidebars(3, array(
//         'name' => 'ウィジェット%d',
//         'id' => 'widget',
//         'description' => 'sidebar',
//         'before_widget' => '<div class="sidebar">',
//         'after_widget' => '</div>',
//         'before_title' => '<h3>',
//         'after_title' => '</h3>'
//     ));
// }

// フォームを設置していないページでContact Form 7のコードを読み込ませない
// サイトの読み込み速度がアップする！
add_action( 'wp_enqueue_scripts', function() {
	if(is_page('shokai')) return;
    wp_dequeue_style( 'contact-form-7' );
    wp_deregister_script( 'contact-form-7' );
    wp_deregister_script( 'google-recaptcha' );
});

// 4.4以降でタイトルを出力する
add_theme_support( 'title-tag' );

// 「-」を「|」に変更なら、上記に以下を「追記」
function wp_document_title_separator( $separator ) {
  $separator = '|';
  return $separator;
}
add_filter( 'document_title_separator', 'wp_document_title_separator' );

// サンクスページにリダイレクト
// add_action( 'wp_footer', 'add_thanks_page' );
// function add_thanks_page() {
// echo <<< EOD
// <script>
// document.addEventListener( 'wpcf7mailsent', function( event ) {
//   if ( '363' == event.detail.contactFormId ) {
//   location = 'https://webdara.info/thanks/'; 
//   }
// }, false );
// </script>
// EOD;
// }

// WordPressのフィードにアイキャッチ画像を含める
function rss_post_thumbnail($content) {
global $post;
if(has_post_thumbnail($post->ID)) {
    // ここで、コンテンツの後回しでサムネイルを取得し、
    // 結果的に頭からの抜粋で、表示されずに切れる、という寸法
    $content = $content . '<p>' . get_the_post_thumbnail($post->ID) . '</p>';
}
return $content;
}
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

?>