<?php
/**
* The contact file.
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
        <div class="contact">
            <div class="row row-no-padding">
                <div class="col-lg-6 contact__left">
                        <div class="contact__left__form">
                        <h2>Contact</h2>
                            <form action="mailto:hello@theanimationlibrary.com" method="post" enctype="text/plain">
                                <input type="text" id="surname" placeholder="Name"/>
                                <br />
                                <input type="mail" id="mail" placeholder="Mail" />
                                <br />
                                <textarea placeholder="What can we help you with?"></textarea>
                                <br/>
                                <button type="submit" class="TALbutton btn-yellow hvr-grow-shadow">Send</button>
                            </form>
                        </div>
                </div>
                <div class="col-lg-6 contact__right">
                    <div class="contact__right__image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/layout/contact.jpg"/>
                    </div>
                </div>
            </div>

        </div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();