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
		<div class="col-lg-6">
			<ul class="TAL-footer__links">
				<li><a href="https://www.theanimationlibrary.org/test/privacy-policy/">Privacy Policy</a></li>
				<li><a href="https://www.theanimationlibrary.org/test/terms-of-use/">Terms of use</a></li>
				<li><a href="https://www.theanimationlibrary.org/test/cookie-policy/">Cookie Policy</a></li>
				<li><a href=" <?php echo $path ?>/sitemap.html/">Sitemap</a></li>
			</ul>
		</div>
		<div class="col-lg-6">
                <!-- Begin MailChimp Signup Form -->
                <div id="mc_embed_signup" class="TAL-footer__cta">
				<h4>Subscribe to our newsletter</h4>
                    <form action="https://theanimationlibrary.us17.list-manage.com/subscribe/post?u=8fd62a0668d6ec2f7d17d69e4&amp;id=8b125fcec9"
                        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                        target="_blank" novalidate>
						<button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="TALbutton btn-yellow hvr-grow-shadow"
                            action="submit">
                            <p>Subscribe</p>
                        </button>

                        <div id="mc_embed_signup_scroll">
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email"
                                required>
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8fd62a0668d6ec2f7d17d69e4_8b125fcec9"
                                tabindex="-1" value=""></div>

                </div>
                </form>
            </div>



</div><!-- #page -->

<?php wp_footer(); ?>
<script>
    <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
$( document ).ready(function() {
    $('.cart-contents').html($('.cart-contents .count'));
});
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
