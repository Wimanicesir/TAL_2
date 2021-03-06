<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version' => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce = require 'inc/woocommerce/class-storefront-woocommerce.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0.0', '>=' ) ) {
		require 'inc/nux/class-storefront-nux-starter-content.php';
	}
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */
/**
* @return remove woocommerce support for zooming effect
*/


add_action('login_head', 'my_custom_css');
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
add_action( 'after_setup_theme', 'register_multiple_widget_areas' );
add_action( 'after_setup_theme', 'remove_woocommerce_theme_support', 20 );

// Disable zoom
function remove_woocommerce_theme_support() {
    remove_theme_support( 'wc-product-gallery-zoom' );
    //remove_theme_support( 'wc-product-gallery-lightbox' );
    //remove_theme_support( 'wc-product-gallery-slider' );
}


// Font awesome
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}

// Widgets

function register_multiple_widget_areas()
{
    register_sidebar(
        array(
        'name'          => 'Price filter',
        'id'            => 'pricefilter',
        'description'   => 'Adds a price filter'
        )
    );
}


add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
add_filter( 'login_headerurl', 'custom_login_logo_url' );
add_filter( 'login_headertitle', 'custom_login_logo_url_title' );
add_filter('login_errors', 'custom_login_error_message');

function custom_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_phone']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_city']);
    return $fields;
}

function my_custom_css()
{
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/assets/css/app.css" />';
}


function custom_login_logo_url() {
    return get_bloginfo( 'url' );
    }

    
    function custom_login_logo_url_title() {
    return 'The Animation Library';
    }


    function custom_login_error_message()
{
return 'Please enter valid login credentials.';
}
