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
					$arg = array (
						'post_type'        => 'post',
						'limit'            => 4,
						'range'            => 'monthry',
						'order_by'         => 'views',
						'stats_views'      => 0, // view数を表示しない.
						'stats_category'   => 1,
						'stats_date'       => 1,
						'excerpt_length'   => 20,
						'thumbnail_width'  => 1000,
						'thumbnail_height' => 250,
						'wpp_start'        => '<div class="popular-posts">',
						'wpp_end'          => '</div>',
						'post_html'        => '<article class="popular-post">
																		<a href="{url}">
																			{thumb_img}
																			<header>
																				<h3 class="popular-title">{text_title}</h3>
																				<p class="popular-category">{category}</p>
																			</header>
																			<p class="released-date">{date}</p>
																		</a>
																	</article>',
					);
					wpp_get_mostpopular( $arg );
					?>


				<img class="heading" src="<?php echo get_template_directory_uri(); ?>/images/post-title.svg" alt="">
				<div class="posts">
				<?php
				$args      = array(
					'posts_per_page' => 5,
					'paged' => $paged,
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'post',
					'post_status' => 'publish'
				);
				$the_query = new WP_Query( $args );
				// 記事一覧のループスタート.
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						?>

					<article class="post">
						<a href="<?php the_permalink(); ?>">
							<header>
								<h3 class="post-title"><?php the_title(); ?></h3>
								<p class="post-category"><?php the_category( ',' ); ?></p>
							</header>
							<p class="post-txt"><?php the_excerpt(); ?></p>
							<p class="released-date"><?php echo get_the_date(); ?></p>
						</a>
					</article>

							<?php
								endwhile;
								endif;
				?>
					<div class="more-nav">
						<a href="<?php echo home_url(); ?>">More...</a>
					</div>
				</div>
			</div>
		</main>

<?php get_footer(); ?>
