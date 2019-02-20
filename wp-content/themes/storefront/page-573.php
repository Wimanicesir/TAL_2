<?php
$current_user = wp_get_current_user();
$url = get_home_url();
?>
<div class="my-account__nav">
<ul>
		<li class="active"><a href="<?php echo $url . '/my-account'?>">Overview</a></li>
		<li><a href="<?php echo $url . '/buy-credits'?>">Credits</a></li>
		<li><a href="<?php echo $url . '/edit-account'?>">Profile</a></li>
		<li><a href="<?php echo $url . '/my-account'?>">Orders</a></li>
		<li><a href="<?php echo $url . '/my-account'?>">Downloads</a></li>
	</ul>
	<span>Log out</span>
</div>

<div class="my-account">
	<div class="row">
		<div class="col-lg-12">
			<div class="my-account__intro">
				<p>Hello <b><?php echo $current_user->user_firstname ?></b> <br>
					From your account dashboard you can <a href="<?php echo $url . '/buy-credits'?>">buy credits</a>, edit your <a href="#">profile</a>, manage
					your <a href="#">invoices</a>, and view your <a>downloads</a>
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3">
			<div class="my-account__buttons">
				<div class="my-account__buttons__button">
					<div class="my-account__buttons__button__image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/my-account/Credits.jpg" />
					</div>
					<div class="my-account__buttons__button__text">
						<h1>Credits</h1>
						<p>You have <b><?php echo do_shortcode( '[user_credits]' );?></b> credits</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
		<a href="<?php echo $url . '/edit-account'?>">
			<div class="my-account__buttons__button">
				<div class="my-account__buttons__button__image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/my-account/Profiles.jpg" />
				</div>
				<div class="my-account__buttons__button__text">
					<h1>Profile</h1>
					<p>Change your account details</p>
				</div>
			</div>
			</a>
		</div>
		<div class="col-lg-3">
			<div class="my-account__buttons__button">
				<div class="my-account__buttons__button__image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/my-account/Orders.jpg" />
				</div>
				<div class="my-account__buttons__button__text">
					<h1>Orders</h1>
					<p>All your invoices</p>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="my-account__buttons__button">
				<div class="my-account__buttons__button__image">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/my-account/Downloads.jpg" />
				</div>
				<div class="my-account__buttons__button__text">
					<h1>Downloads</h1>
					<p>You have XX Downloads</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>




</div>