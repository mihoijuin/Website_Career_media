<?php
/**
 * Template Name: author
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
				<img class="heading profheading" src="<?php echo get_template_directory_uri(); ?>/images/profile-title.svg" alt="">
				<div class="profiles">
					<section class="profile">
						<h3>ぽりん</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/images/porin-wanko.png" alt="" width="200" height="200">
						<p>
							自己紹介的なものをだいたい<br>
							3行くらいで書くのがいいかな<br>
							こんな人ですよ〜〜
						</p>
						<a href="https://twitter.com/iju_miho" target="_blank"><span class="fab fa-twitter"></span></a>
					</section>
					<section class="profile">
						<h3>けんと</h3>
						<img src="<?php echo get_template_directory_uri(); ?>/images/kento-nyanko.png" alt="" width="200" height="200">
						<p>
							自己紹介的なものをだいたい<br>
							3行くらいで書くのがいいかな<br>
							こんな人ですよ〜〜
						</p>
						<a href="https://twitter.com/kntaoki" target="_blank"><span class="fab fa-twitter"></span></a>
					</section>
				</div>
			</div>
			</main>

<?php get_footer(); ?>
