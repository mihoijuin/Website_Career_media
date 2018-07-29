<?php
/**
 * Nandedemodakara functions and definitions
 *
 * @package WordPress
 * @subpackage Nandedemodakara
 * @since 1.0
 */

/**
 * Nandedemodakara only works in WordPress 4.7 or later.
 */

add_theme_support( 'menus' );

add_theme_support( 'title-tag' );

/**
 * スクリプトとスタイルを正しくエンキューする
 */
function my_enqueue_style() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/responsive.css' );
	wp_enqueue_style( 'fontawsome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );
	wp_enqueue_script( 'hatena-btn', 'https://b.st-hatena.com/js/bookmark_button.js' );
	wp_enqueue_script( 'twitter-btn', 'https://platform.twitter.com/widgets.js' );
}



add_action( 'wp_enqueue_scripts', 'my_enqueue_style' );

register_sidebar(
	array(
		'id'            => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	)
);

add_theme_support( 'post-thumbnails' );

/**
 * OGPタグ出力ファンクション
 * OGPタグをheadタグ内に出力します。
 * ■出力するタグ
 * ・OGPタグ
 * ・Twitterカード
 * ・Facebook
 */
function my_meta_ogp() {
	if ( is_front_page() || is_home() || is_singular()) {
		/**
		* 初期設定
		*/
		$ogp_image    = 'https://main-nandedemodakara.ssl-lolipop.jp/wp-content/themes/Nandedemodakara/images/ogp.png';
		$twitter_site = 'iju_miho';
		// Twitterカードの種類（summary_large_image または summary を指定）.
		$twitter_card = 'summary_large_image';
		// Facebook APP ID.
		$facebook_app_id = '';

		/**
		* 各種設定
		*/
		global $post;
		$ogp_title       = '';
		$ogp_description = '';
		$ogp_url         = '';
		$html            = '';

		if ( is_singular() ) {
			// 記事＆固定ページ.
			setup_postdata( $post );
			$ogp_title       = $post->post_title;
			$ogp_description = mb_substr( get_the_excerpt(), 0, 100 );
			$ogp_url         = get_permalink();
			wp_reset_postdata();
		} elseif ( is_front_page() || is_home() ) {
			// トップページ.
			$ogp_title       = get_bloginfo( 'name' );
			$ogp_description = get_bloginfo( 'description' );
			$ogp_url         = home_url();
		}
		// og:type.
		$ogp_type = ( is_front_page() || is_home() ) ? 'website' : 'article';

		// og:image.
		if ( is_singular() && has_post_thumbnail() ) {
			$ps_thumb  = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			$ogp_image = $ps_thumb[0];
		}

		// 出力するOGPタグをまとめる.
		$html  = "\n";
		$html .= '<meta property="og:title" content="' . esc_attr( $ogp_title ) . '" />' . "\n";
		$html .= '<meta property="og:description" content="' . esc_attr( $ogp_description ) . '" />' . "\n";
		$html .= '<meta property="og:type" content="' . $ogp_type . '" />' . "\n";
		$html .= '<meta property="og:url" content="' . esc_url( $ogp_url ) . '" />' . "\n";
		$html .= '<meta property="og:image" content="' . esc_url( $ogp_image ) . '" />' . "\n";
		$html .= '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '" />' . "\n";
		$html .= '<meta name="twitter:card" content="' . $twitter_card . '" />' . "\n";
		$html .= '<meta name="twitter:site" content="' . $twitter_site . '" />' . "\n";
		$html .= '<meta property="og:locale" content="ja_JP" />' . "\n";

		if ( $facebook_app_id !== '' ) {
			$html .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
		}
		echo $html;
	}
}

/**
 * OGP設定をheadタグ内にOGPを出力する
 */
add_action( 'wp_head', 'my_meta_ogp' );
