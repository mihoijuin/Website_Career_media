<?php
/**
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

		<!-- single -->
		<div class="single">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>

			<div class="single-content">
				<div class="single-post">
					<?php the_post_thumbnail( 'full' ); ?>
					<header>
						<h2 class="single-title"><?php the_title(); ?></h2>
						<div class="single-category"><?php the_category(); ?></div>
					</header>
					<div class="txt-content">
						<?php the_content(); ?>
					</div>
					<p class="released-date"><?php echo get_the_date(); ?></p>
					<div class="share">
						<ul>
							<li><a href=""><span class="fab fa-twitter"></span></a></li>
							<li><a href=""><span class="fab fa-facebook"></span></a></li>
						</ul>
					</div>
				</div>
			</div>

					<?php
						endwhile;
					else :
						?>

			<p>記事はまだないようだ。</p>

						<?php
						endif;
					?>

			<!-- sidebar -->
			<?php get_sidebar(); ?>

		</div>

<?php get_footer(); ?>
