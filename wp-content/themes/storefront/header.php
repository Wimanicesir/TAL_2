<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/app.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'storefront_before_site' ); ?>

	<div id="page" class="hfeed site">
		<?php do_action( 'storefront_before_header' ); ?>

		<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

			<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		do_action( 'storefront_header' ); ?>
			<div id="mobile_menu" class="collapse">
				<?php
			wp_nav_menu(
				array(
					'theme_location'	=> 'primary',
					'container_class'	=> 'primary-navigation',
					)
			);
			?>
			</div>


				<div class="login">
				<div class="login__button" data-toggle="collapse" data-target="#login-form">
					<!--<i class="fa fa-user"></i>-->
					<span>Log in</span>
				</div>
				<div class="login__form">
				<form class="collapse" id="login-form">
				<h2>Log in</h2>
					<input type="text" placeholder="Username">
					<br />
					<input type="password" placeholder="Password">
					<br />
					<button action="submit">Login</button>
					<br />
					<a href="<?php echo wp_lostpassword_url( $redirect ); ?>">Forgot password?</a>
					<div class="new-account">
						<p>Don't have an account yet? <a href="<?php echo site_url('/wp-login.php?action=register&redirect_to=' . get_permalink());?>">Make one here</a></p>
					</div>
				</form>
			</div>

				</div>

			

		</header><!-- #masthead -->

		<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' ); ?>

		<div id="content" class="site-content" tabindex="-1">
			<div class="wrapper">

				<?php
		do_action( 'storefront_content_top' );