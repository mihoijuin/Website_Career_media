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
		<!-- footer -->
		<footer>
			<!-- copyrightをflexの範囲外に置くためにfooter-containerでcopyright以外を囲む -->
			<div class="footer-container">
				<section class="footer-logo">
					<a href="<?php echo home_url(); ?>">
						<img class="footer-icon" src="<?php echo get_template_directory_uri(); ?>/images/Porin_icon.jpg" alt="" width="120" height="120">
					</a>
					<h1><img class="footer-title" src="<?php echo get_template_directory_uri(); ?>/images/nandedemodakara_title.svg" alt=""></h1>
					<p>
						ニートとHR業界サラリーマンが対話し<br>
						「なんで？」「でも〜」「だから〜」が飛び交う場所
					</p>
				</section>
				<div class="social">
					<ul>
						<li><a href="https://twitter.com/iju_miho" target="_blank"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#" target="_blank"><span class="fas fa-rss"></span></a></li>
					</ul>
				</div>
				<nav class="footer-nav">
					<?php wp_nav_menu(); ?>
				</nav>
			</div>
			<p class="copyright">
				<small>
					Copyright&copy; <?php echo date( 'Y' ) . get_bloginfo( 'name' ); ?> All Rights Reserved.
				</small>
			</p>
		</footer>
	<?php wp_footer(); ?>
	</body>
</html>
