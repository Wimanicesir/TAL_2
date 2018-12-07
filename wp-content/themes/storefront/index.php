<?php
/**

		<?php if ( have_posts() ) :

			get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif; ?>



* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
* Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package storefront
*/

get_header();
$shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );

?>
</div>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="social d-none d-md-block">
            <div class="social__facebook">
                <a href="https://www.facebook.com/TheAnimationLibrary/" target="_blank"><i class="fa fa-facebook"></i></a>
            </div>
            <div class="social__youtube">
                <a href="https://www.youtube.com/channel/UCtAT4SE9qxAf_Oxxg5P95Zw" target="_blank"><i class="fa fa-youtube"></i></a>
            </div>
            <div class="social__pinterest">
                <a href="https://www.pinterest.com/theanimationlibrary/?eq=The&etslf=6668" target="_blank"><i class="fa fa-pinterest"></i></a>
            </div>
            <div class="social__linkedin">
                <a href="https://www.linkedin.com/in/theanimationlibrary-theanimationlibrary-a04aba153/" target="_blank"><i
                        class="fa fa-linkedin"></i></a>
            </div>
            <div class="social__behance">
                <a href="https://www.behance.net/theanimatiab51" target="_blank"><i class="fa fa-behance"></i></a>
            </div>
        </div>
        <div class="welcome__splash">
        <h2 class="welcome__splash__title">The Animation Library</h2>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/gif/HeaderAnimatie.gif" />
            <div class="welcome__splash__button">
                <div class="TALbutton btn-yellow btn-yellow--dark-text hvr-grow-shadow">
                    <a href="<?php echo $shop_page_url ?>">
                        <p>Explore</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="welcome__intro">
            <div class="row">
                <div class="col-lg-12">
                    <div class="welcome__intro__title">
                        <h2>Animating has never
                            <br> been so easy</h2>
                    </div>
                    <div class="welcome__intro__grid">
                        <div class="row">
                            <div class="col-lg-2 col-sm-1" class="spacer"></div>
                            <div class="col-lg-2 col-md-5 col-sm-5">
                                <div class="welcome__intro__grid__description">
                                    <span>EASY-TO-USE HEADCONTROL</span>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-5 col-sm-5">
                                <div class="welcome__intro__grid__illustration">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gifs/control.gif">
                                </div>
                            </div>
                            <div class="d-xs-block d-s-block d-md-block d-lg-none d-xl-none col-sm-1" class="spacer"></div>
                            <div class="d-xs-block d-s-block d-md-block d-lg-none d-xl-none col-sm-1" class="spacer"></div>
                            <div class="col-lg-2 col-sm-5">
                                <div class="welcome__intro__grid__description">
                                    <span>QUICKLY CHANGE COLORS</span>
                                </div>

                            </div>
                            <div class="col-lg-2 col-sm-5">
                                <div class="welcome__intro__grid__illustration">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gifs/change.gif">
                                </div>
                            </div>
                            <div class="col-lg-2 d-xs-none d-s-none d-md-none">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-sm-1" class="spacer"></div>
                            <div class="col-lg-2 col-md-5 col-sm-5">
                                <div class="welcome__intro__grid__description">
                                    <p>CHOOSE YOUR
                                        <br /> DESIGN</p>
                                </div>
                                </div>
                            <div class="col-lg-2 col-md-5 col-sm-5">
                                
                                <div class="welcome__intro__grid__illustration">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gifs/choose.gif">
                                </div>
                            </div>
                            <div class="d-xs-block d-s-block d-md-block d-lg-none d-xl-none col-sm-1" class="spacer"></div>
                            <div class="d-xs-block d-s-block d-md-block d-lg-none d-xl-none col-sm-1" class="spacer"></div>
                            <div class="col-lg-2 col-md-5 col-sm-5">
                                <div class="welcome__intro__grid__description">
                                    <p>NO PLUG-INS
                                        <br /> REQUIRED</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-5 col-sm-5">
                                <div class="welcome__intro__grid__illustration">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gifs/plugin.gif">
                                </div>
                            </div>
                            <div class="col-lg-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="welcome__promotion">
    <div class="row row-no-padding">
        <div class="col-lg-6">
            <div class="welcome__promotion__cta">
                <?php include 'fotm.php'; ?>
                <h2>Freebie</h2>
                <h3>of the month</h3>
                <img src="<?php echo $fotm_image ?>">
                <p>
                    <?php echo $fotm_text ?>
                </p>
                <div class="TALbutton btn-red hvr-grow-shadow">
                    <a href="<?php echo $fotm_url ?>">
                        <p>I want this</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="welcome__promotion__newsletter">
                <h2>A new</h2>
                <h3>freebie</h3>
                <h4>every month</h4>
                <p>Join our community and get free stuff sent straight to your inbox.
                    <br /> Sign up for the newsletter today.</p>

                <!-- Begin MailChimp Signup Form -->
                <div id="mc_embed_signup">
                    <form action="https://theanimationlibrary.us17.list-manage.com/subscribe/post?u=8fd62a0668d6ec2f7d17d69e4&amp;id=8b125fcec9"
                        method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                        target="_blank" novalidate>

                        <div class="mc-field-group">
                            <input type="text" value="" name="FNAME" class="half-line" id="mce-FNAME" placeholder="First Name">
                            <input type="text" value="" name="LNAME" class="half-line" id="mce-LNAME" placeholder="Last Name">
                        </div>
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
                        <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="TALbutton btn-yellow hvr-grow-shadow"
                            action="submit">
                            <p>Send</p>
                        </button>
                </div>
                </form>
            </div>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
            <script type='text/javascript'>
                (function ($) {
                    window.fnames = new Array();
                    window.ftypes = new Array();
                    fnames[0] = 'EMAIL';
                    ftypes[0] = 'email';
                    fnames[1] = 'FNAME';
                    ftypes[1] = 'text';
                    fnames[2] = 'LNAME';
                    ftypes[2] = 'text';
                    fnames[3] = 'BIRTHDAY';
                    ftypes[3] = 'birthday';
                    fnames[4] = 'MMERGE4';
                    ftypes[4] = 'text';
                }(jQuery));
                var $mcj = jQuery.noConflict(true);
            </script>
            <!--End mc_embed_signup-->
        </div>
    </div>
</div>
</div>
<div class="welcome__tips">
    <div class="row">
        <div class="col-lg-12">
            <div class="welcome__tips__title">
                <h2>Tips &amp; Tricks</h2>
            </div>
        </div>
        <div class="row">
            <?php include 'tips-tricks.php' ?>
        </div>
        <div class="TALbutton btn-yellow hvr-grow-shadow">
            <a href="./tips-tricks"><p>Show more</p></a>
        </div>
    </div>
</div>
</div>

</div>


</div>
</div>
</div>


<div class="welcome__about">
    <div class="row">
        <div class="col-lg-8">
            <div class="welcome__about__content">

                <h2>ABOUT</h2>
                <?php include 'about.php' ?>
            </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
            <div class="welcome__about__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/layout/about.jpg">
            </div>
        </div>

    </div>

</div>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();