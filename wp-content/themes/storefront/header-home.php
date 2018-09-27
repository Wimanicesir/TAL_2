<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>
    <header>
    <?php do_action( 'storefront_header_cart' );?>
    <div class="col-sm-4 col-md-6 col-lg-6">
        <div class="header__left">
            <span class="header__left__logo"><a href="{{ url('/') }}">The Animation Library</a></span>
        </div>
    </div>

    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="header__right">
            <nav class="header__right__nav">
                <a href="">Shop</a>
                <a href="#">Freebies</a>
                <a href="#">Tips & Tricks</a>
                <a href="#">Contact</a>
            </nav>

        </div>
    </div>
    <div class="col-sm-2 col-md-2 col-lg-2">
        <div class="header__cart">
            </div>
    </div>
    <div class="lookhere">
    <?php do_action( 'storefront_product_search' );?>
    
    </div>
    </header>
	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' ); ?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
