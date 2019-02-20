<?php
get_header(); 
$current_user = wp_get_current_user();
$url = get_home_url();
?>
<div class="my-account__nav">
<ul>
		<li><a href="<?php echo $url . '/my-account'?>">Overview</a></li>
		<li><a class="active" href="<?php echo $url . '/buy-credits'?>">Credits</a></li>
		<li><a href="<?php echo $url . '/edit-account'?>">Profile</a></li>
		<li><a href="<?php echo $url . '/my-account'?>">Orders</a></li>
		<li><a href="<?php echo $url . '/my-account'?>">Downloads</a></li>
	</ul>
	<span>Log out</span>
</div>
<div class="credits">
    <div class="credits__text">
        <h2>Credits</h2>
        <p>You have <b><?php echo do_shortcode( '[user_credits]' );?></b> credits</p>
    </div>

    <div class="credits__form">
    <div class="credits__form__title">
        <h2>Buy credits</h2>    
    </div>
    <?php echo do_shortcode( '[buy_credits]' );?>
    </div>
</div>

<?php get_footer(); ?>