<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop'); ?>

	<?php
        /**
         * woocommerce_before_main_content hook.
         *
         * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
         * @hooked woocommerce_breadcrumb - 20
         */
        do_action('woocommerce_before_main_content');
    ?>

		<?php while (have_posts()) : the_post(); ?>

			<?php wc_get_template_part('content', 'single-product'); ?>

		<?php endwhile; // end of the loop.?>

	<?php
        /**
         * woocommerce_after_main_content hook.
         *
         * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
         */
        do_action('woocommerce_after_main_content');
    ?>

	<?php
        /**
         * woocommerce_sidebar hook.
         *
         * @hooked woocommerce_get_sidebar - 10
         */
        do_action('woocommerce_sidebar');
    ?>

	<script>
		document.addEventListener("DOMContentLoaded", function(event) { 
			var scripts = $('.single').find('script');
			var getUrl = window.location;
            var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

			$('.entry-summary').append('<img src="' + baseUrl + '/wp-content/themes/storefront/assets/images/gifs/control.gif" class="arrow" /><button class="fake-button" id="btn-des" data-toggle="collapse" data-target="#description"><h2>Description</h2></button>');	
			setTimeout(function(){	
				$('#btn-tech').append('<div id="techspecs" class="collapse">' + $('.woocommerce-variation-description').html() + '</div>');		
				}, 100);
			$('.entry-summary').append('<br><img src="{{asset('images/icons/arrow.png')}}" class="arrow" /><button id="btn-tech" class="fake-button" data-toggle="collapse" data-target="#techspecs"><h2>Tech. Specs</h2></button>');
			for (key in scripts) {
				if (scripts[key].type == 'application/ld+json') {	
					var data = scripts[key].firstChild.data;			
					var start = data.indexOf('"description"');
					var end = data.indexOf('"sku"');
					var description = data.substring(start + 15,end - 2);
					$('#btn-des').append('<div id="description" class="collapse show"><p>' + description + '</p></div>')
				}
			}	
		});
	</script>

<?php get_footer('shop');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
