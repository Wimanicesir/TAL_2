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
		<div class="col-full row">
            <div class="col-md-3 text-center">
                <h1 class="footer-logo"><a href="#">The Animation Library</a></h1>
                <span>&copy; 2019 theanimationlibrary.com</span>
                <div class="">
                    <div class="social__facebook">
                        <a href="https://www.facebook.com/TheAnimationLibrary/" target="_blank"><i class="fa fa-facebook"></i></a>
                    </div>
                    <div class="social__pinterest">
                        <a href="https://www.pinterest.com/theanimationlibrary/?eq=The&etslf=6668" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                    <div class="social__youtube">
                        <a href="https://www.youtube.com/channel/UCtAT4SE9qxAf_Oxxg5P95Zw" target="_blank"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="TAL-footer__sitemap">
                    <h5>The Animation Library</h5>
                    <ul>
                        <li>Shop</li>
                        <li>Credits</li>
                        <li>Tips & Tricks</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="TAL-footer__legal">
                    <h5>Legal</h5>
                    <ul>
                        <li>Privacy Policy</li>
                        <li>Terms of use</li>
                        <li>Cookie Policy</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="TAL-footer__cta">
                    <h5>The best animation tips in your inbox</h5>
                    <form action="https://theanimationlibrary.us17.list-manage.com/subscribe/post?u=8fd62a0668d6ec2f7d17d69e4&amp;id=8b125fcec9"
                            method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                            target="_blank" novalidate>
                        <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="TALbutton btn-yellow hvr-grow-shadow"
                                action="submit">
                            <p>Subscribe</p>
                        </button>

                        <div id="mc_embed_signup_scroll">
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email" required>
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>

                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input type="text" name="b_8fd62a0668d6ec2f7d17d69e4_8b125fcec9" tabindex="-1" value="">
                        </div>
                    </form>
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
