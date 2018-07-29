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
 */

?>


<?php get_header(); ?>
		<!-- main -->
		<main>
			<div class="main-wrapper">
				<img class="heading" src="<?php echo get_template_directory_uri(); ?>/images/popular-title.svg" alt="">
				<!-- 人気記事 -->
				<?php
					$arg = array(
						'post_type'         => 'post',
						'limit'             => 4,
						'range'             => 'last30days',
						'order_by'          => 'views',
						'stats_views'       => 0, // view数を表示しない.
						'stats_category'    => 1,
						'stats_date'        => 1,
						'stats_date_format' => 'Y F j',
						'excerpt_length'    => 20,
						'thumbnail_width'   => 1000,
						'thumbnail_height'  => 250,
						'wpp_start'         => '<div class="popular-posts">',
						'wpp_end'           => '</div>',
						'post_html'         => '<article class="popular-post">
																			{thumb_img}
																			<header>
																				<a href="{url}"><div class="popular-category">{category}</div>
																				<a href="{url}"><h3 class="popular-title">{text_title}</h3></a>
																				</header>
																			<p class="released-date">{date}</p>
																		</article>',
					);
					wpp_get_mostpopular( $arg );
					?>


				<img class="heading" src="<?php echo get_template_directory_uri(); ?>/images/post-title.svg" alt="">
				<div class="posts">
					<?php
					$args      = array(
						'posts_per_page' => 5,
						'paged'          => $paged,
						'orderby'        => 'post_date',
						'order'          => 'DESC',
						'post_type'      => 'post',
						'post_status'    => 'publish',
					);
					$the_query = new WP_Query( $args );
					// 記事一覧のループスタート.
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) :
							$the_query->the_post();
							?>

					<article class="post">
						<header>
							<div class="post-category"><?php the_category( ',' ); ?></div>
							<a href="<?php the_permalink(); ?>">
								<h3 class="post-title"><?php the_title(); ?></h3>
							</a>
						</header>
						<div class="post-txt"><?php the_excerpt(); ?></div>
						<p class="released-date"><?php echo get_the_date(); ?></p>
					</article>

							<?php
								endwhile;
								endif;
					?>
					<div class="more-nav">
						<a href="<?php echo home_url(); ?>/posts">＞もっと見てみる</a>
					</div>
				</div>
			</div>
		</main>

<?php get_footer(); ?>
