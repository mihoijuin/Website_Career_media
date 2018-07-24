<?php
/**
 *
 * Template Name: Toppage
 *
 * Nandedemodakara functions and definitions
 *
 * @package WordPress
 * @subpackage Nandedemodakara
 * @since 1.0
 * @version 1.0
 *
 * <article class="popular-post">
 * 	<a href="single.html">
 *		<header>
 *			<h3 class="popular-title">記事タイトル</h3>
 *			<p class="popular-category">カテゴリ</p>
 *		</header>
 *		<p>記事の冒頭部分がここに来るよおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお</p>
 *		<p class="released-date">2018/07/08</p>
 *	</a>
 *</article>
 */

?>


<?php get_header(); ?>
		<!-- main -->
		<main>
			<div class="main-wrapper">
				<img class="heading" src="<?php echo get_template_directory_uri(); ?>/images/popular-title.svg" alt="">
				<!-- 人気記事 -->
				<?php
					$arg = array (
						'post_type' => 'post',
						'limit' => 3,
						'range' => 'monthry',
						'order_by' => 'views',
						'stats_views' => 0, //view数を表示しない
						'stats_category' => 1,
						'stats_date' => 1,
						'excerpt_length' => 20,
						'thumbnail_width' => 100,
						'thumbnail_height' => 100,
						'wpp_start' => '<div class="popular-posts">',
						'wpp_end' => '</div>',
						'post_html' => '<article class="popular-post">
															<a href="{url}">
																<header>
																	<h3 class="popular-title">{text_title}</h3>
																	<p class="popular-category">{category}</p>
																</header>
																<p>{summary}</p>
																<p class="released-date">{date}</p>
															</a>
														</article>',
					);
					wpp_get_mostpopular($arg);
					?>


				<img class="heading" src="<?php echo get_template_directory_uri(); ?>/images/post-title.svg" alt="">
				<div class="posts">
					<article class="post">
						<a href="single.html">
							<header>
								<h3 class="post-title">記事タイトル</h3>
								<p class="post-category">カテゴリ</p>
							</header>
							<p class="post-txt">記事の冒頭部分がここに来るよおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお</p>
							<p class="released-date">2018/07/08</p>
						</a>
					</article>
					<article class="post">
						<a href="single.html">
							<header>
								<h3 class="post-title">記事タイトル</h3>
								<p class="post-category">カテゴリ</p>
							</header>
							<p class="post-txt">記事の冒頭部分がここに来るよおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお</p>
							<p class="released-date">2018/07/08</p>
						</a>
					</article>
					<article class="post">
						<a href="single.html">
							<header>
								<h3 class="post-title">記事タイトル</h3>
								<p class="post-category">カテゴリ</p>
							</header>
							<p class="post-txt">記事の冒頭部分がここに来るよおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお</p>
							<p class="released-date">2018/07/08</p>
						</a>
					</article>
					<article class="post">
						<a href="single.html">
							<header>
								<h3 class="post-title">記事タイトル</h3>
								<p class="post-category">カテゴリ</p>
							</header>
							<p class="post-txt">記事の冒頭部分がここに来るよおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお</p>
							<p class="released-date">2018/07/08</p>
						</a>
					</article>
					<article class="post">
						<a href="single.html">
							<header>
								<h3 class="post-title">記事タイトル</h3>
								<p class="post-category">カテゴリ</p>
							</header>
							<p class="post-txt">記事の冒頭部分がここに来るよおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおおお</p>
							<p class="released-date">2018/07/08</p>
						</a>
					</article>
					<nav class="more-nav">
						<ul>
							<li><a href="index.html">More...</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</main>

<?php get_footer(); ?>
