<?php
$current_user = wp_get_current_user();
$url = get_home_url();
?>
<div class="my-account">
    <div class="my-account__intro">
        <p>Hello  <?php echo $current_user->user_firstname ?> <br>
            From your account dashboard you can <a href="#">buy credits</a>, edit your<a href="#">profile</a>, manage
            your <a href="#">invoices</a>, and view your <a>downloads</a>
        </p>
    </div>

    <div class="my-account__buttons">
        <div class="my-account__buttons__button">
            <div class="my-account__buttons__button__image">
                <img src="<?php echo $url?>/edit-account" />
            </div>
            <div class="my-account__buttons__button__text">
                <h1>Credits</h1>
                <p>You have XX credits</p>
            </div>
        </div>
        <div class="my-account__buttons__button">
            <div class="my-account__buttons__button__image">
                <img src="" />
            </div>
            <div class="my-account__buttons__button__text">
                <h1>Profile</h1>
                <p>Change your account details</p>
            </div>
        </div>
        <div class="my-account__buttons__button">
            <div class="my-account__buttons__button__image">
                <img src="#" />
            </div>
            <div class="my-account__buttons__button__text">
                <h1>Orders</h1>
                <p>All your invoices</p>
            </div>
        </div>
        <div class="my-account__buttons__button">
            <div class="my-account__buttons__button__image">
                <img src="#" />
            </div>
            <div class="my-account__buttons__button__text">
                <h1>Downloads</h1>
                <p>You have XX Downloads</p>
            </div>
        </div>
    </div>

</div>