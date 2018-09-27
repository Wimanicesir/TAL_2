<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked storefront_homepage_content      - 10
			 * @hooked storefront_product_categories    - 20
			 * @hooked storefront_recent_products       - 30
			 * @hooked storefront_featured_products     - 40
			 * @hooked storefront_popular_products      - 50
			 * @hooked storefront_on_sale_products      - 60
			 * @hooked storefront_best_selling_products - 70
			 */
			do_action( 'homepage' ); ?>


			<div class="social">
        <div class="social__facebook">
            <img src="{{asset('images/icons/fb.png')}}">
        </div>
        <div class="social__youtube">
            <img src="{{asset('images/icons/yt.png')}}">
        </div>
        <div class="social__pinterest">
            <img src="{{asset('images/icons/pin.png')}}">
        </div>
        <div class="social__facebook">
            <img src="{{asset('images/icons/insta.png')}}">
        </div>
    </div>
    <div class="welcome__splash">
        <div class="welcome__splash__title">
            <h2>The Animation
                <br> library</h2>
        </div>
        <div class="welcome__splash__button">
            <button>Explore</button>
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
                        <div class="col-lg-2" class="spacer"></div>
                        <div class="col-lg-2">
                            <div class="welcome__intro__grid__description">
                                <p>EASY-TO-USE HEADCONTROL</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="welcome__intro__grid__illustration">
                                <img src="{{ asset('images/gif/annie.gif')}}">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="welcome__intro__grid__description">
                                <p>QUICKLY CHANGE COLORS</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="welcome__intro__grid__illustration">
                                <img src="{{ asset('images/gif/annie.gif')}}">
                            </div>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2" class="spacer"></div>
                        <div class="col-lg-2">
                            <div class="welcome__intro__grid__description">
                                <p>CHOOSE YOUR
                                    <br /> DESIGN</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="welcome__intro__grid__illustration">
                                <img src="{{ asset('images/gif/annie.gif')}}">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="welcome__intro__grid__description">
                                <p>NO PLUG-INS REQUIRED</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="welcome__intro_a_grid__illustration">
                                <img src="{{ asset('images/gif/annie.gif')}}">
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
                    <h2>Freebie</h2>
                    <h3>of the month</h3>
                    <img src="{{asset('images/layout/annie.png')}}">
                    <p>Meet Annie, one of our basic characters. This month the light version is Freebie of the month. So, go
                        ahead, download the AE file and start animating now</p>
                    <div class="button btn-red">
                        <p>I want this</p>
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
                    <form>
                        <input type="textbox" id="name" placeholder="Name" />
                        <label for="name"></label>
                        <input type="textbox" id="surname" placeholder="Surname" />
                        <label for="surname"></label>
                        <input type="textbox" id="email" placeholder="Email" />
                        <label for="email"></label>
                        <br />
                        <button class="button btn-yellow" action="submit">
                            <p>Send</p>
                        </button>
                    </form>
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
                <div class="welcome__tips__blogteasers">
                    <div class="row">
                        <div class="welcome__tips__blogteaser">
                            <div class="col-lg-4">
                                <img src="{{asset('images/layout/blog.jpg')}}" />
                                <h3>Animating has never been so easy</h3>
                            </div>
                        </div>

                        <div class="welcome__tips__blogteaser">
                            <div class="col-lg-4">
                                <img src="{{asset('images/layout/blog.jpg')}}" />
                                <h3>Animating has never been so easy</h3>
                            </div>
                        </div>
                        <div class="welcome__tips__blogteaser">
                            <div class="col-lg-4">
                                <img src="{{asset('images/layout/blog.jpg')}}" />
                                <h3>Animating has never been so easy</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button btn-yellow">
            <p>Show more</p>
        </div>

    </div>
    </div>
    </div>


    <div class "welcome__about"></div>









		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
