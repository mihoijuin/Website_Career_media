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
<?php get_header(); ?>
		<!-- main -->
		<main>
			<div class="main-wrapper">
				<img class="heading" src="<?php echo get_template_directory_uri(); ?>/images/post-title.svg" alt="">
				<div class="posts">
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
								the_post();
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
							else :
								?>

					<p>記事はまだないみたいだ。</p>

								<?php
								endif;
							?>

					<?php
					the_posts_pagination( array(
						'mid_size'           => 5,
						'prev_text'          => __( 'prev', 'nandedemodakara' ),
						'next_text'          => __( 'next', 'nandedemodakara' ),
						'screen_reader_text' => __( 'もっと見てみる？', 'nandedemodakara' ),
					) );
					?>

			</div>
			</div>
		</main>

<?php get_footer(); ?>
