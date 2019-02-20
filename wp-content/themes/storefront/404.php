<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<div class="error-404 not-found" style="margin: 0 400px;">

				<div class="page-content">

				<video autoplay muted loop id="myVideo"  style="width: 100%;margin: 0 auto;display: block;">
                	<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/404.mp4" type="video/mp4">
            	</video>

				</div><!-- .page-content -->
			</div><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
