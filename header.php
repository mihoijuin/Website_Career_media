<?php
/**
 * Nandedemodakara functions and definitions
 *
 * @package WordPress
 * @subpackage Nandedemodakara
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- fontawesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive.css">

		<meta property="og:title" content="なんででもだから">
		<meta property="og:type" content="website">
		<meta property="og:image" content="https://mihoijuin.github.io/wp_nandedemodakara/images/Porin_icon.jpg">
		<meta property="og:site_name" content="なんででもだから">
		<meta property="og:description" content="ニートとHR業界サラリーマンが対話し、「なんで？」「でも〜」「だから〜」が飛び交う場所です">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@iju_miho">
		<meta name="twitter:title" content="なんででもだから">
		<meta name="twitter:description" content="ニートとHR業界サラリーマンが対話し、「なんで？」「でも〜」「だから〜」が飛び交う場所です">
		<meta name="twitter:image:src" content="https://mihoijuin.github.io/wp_nandedemodakara//images/Porin_icon.jpg">
		<?php wp_head(); ?>
	</head>

	<body>
		<!-- header -->
		<header id="header">
			<section class="header-logo">
				<a href="page.html">
				<img class="header-icon" src="<?php echo get_template_directory_uri(); ?>/images/Porin_icon.jpg" alt="" width="120" height="120">
				</a>
				<div class="media-title">
					<h1>
						<img class="title" src="<?php echo get_template_directory_uri(); ?>/images/nandedemodakara_title.svg" alt="">
					</h1>
					<p>
						ニートとHR業界サラリーマンが対話し<br>
						「なんで？」「でも〜」「だから〜」が飛び交う場
					</p>
				</div>
			</section>
			<nav class="header-nav">
				<?php wp_nav_menu(); ?>
			</nav>
		</header>

