<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>
	<?php $path = get_site_url(); ?>

	<footer id="colophon" class="TAL-footer" role="contentinfo">
		<div class="row">
            <div class="col-xl-3 col-12 order-xl-1 order-12 text-xl-center">
                <h1 class="footer-logo"><a href="#">The Animation Library</a></h1>
                <span>&copy; 2019 theanimationlibrary.com</span>
                <div class="TAL-footer__social">
                    <div class="TAL-footer__social__facebook">
                        <a href="https://www.facebook.com/TheAnimationLibrary/" target="_blank"><i class="fa fa-facebook"></i></a>
                    </div>
                    <div class="TAL-footer__social__pinterest">
                        <a href="https://www.pinterest.com/theanimationlibrary/?eq=The&etslf=6668" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                    <div class="TAL-footer__social__youtube">
                        <a href="https://www.youtube.com/channel/UCtAT4SE9qxAf_Oxxg5P95Zw" target="_blank"><i class="fa fa-youtube"></i></a>
                    </div>
                    <div class="TAL-footer__social__instagram">
                        <a href="https://www.instagram.com/theanimationlibrary" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-6 order-2">
                <div class="TAL-footer__sitemap">
                    <h5>The Animation Library</h5>
                    <ul>
                        <li>Shop</li>
                        <li>Credits</li>
                        <li>Tips & Tricks</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-6 order-4">
                <div class="TAL-footer__legal">
                    <h5>Legal</h5>
                    <ul>
                        <li>Privacy Policy</li>
                        <li>Terms of use</li>
                        <li>Cookie Policy</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-6 order-6">
                <div class="TAL-footer__contact">
                    <h5>Contact</h5>
                    <a href="mailto:hello@theanimationlibrary.com">hello@theanimationlibrary.com</a>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-6 order-8">
                <div class="TAL-footer__cta">
                    <h5>The best animation tips in your inbox</h5>
                    <div class="mailchimp">
                        <form action="https://theanimationlibrary.us17.list-manage.com/subscribe/post?u=8fd62a0668d6ec2f7d17d69e4&amp;id=8b125fcec9"
                                method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">

                            <div id="mc_embed_signup_scroll">
                                <input type="email" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email" required>
                            </div>

                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>

                            <button class="TAL-footer__cta__subscribe" type="submit" value="I want it all!" name="subscribe" id="mc-embedded-subscribe" action="submit"><p>I want it all!</p></button>

                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_8fd62a0668d6ec2f7d17d69e4_8b125fcec9" tabindex="-1" value="">
                            </div>
                        </form>
                    </div>
                    
                    <div class="payment-methods">
                        <p>Accepted payment methods</p>
                        <ul>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/credit-cards/visa.svg"/></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/credit-cards/paypal.svg"/></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/credit-cards/mastercard.svg"/></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/credit-cards/maestro.svg"/></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/credit-cards/discover.svg"/></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/credit-cards/amex.svg"/></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/credit-cards/maestro.svg"/></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script>

$( document ).ready(function() {
    $('.cart-contents').html($('.cart-contents .count'));
    if ($('.post-type-archive-product').length > 0){
        $('#content').append(
            '   <div class="filler"></div>'
        )
    }
});


</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
