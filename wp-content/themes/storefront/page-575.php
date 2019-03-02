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
        <p>You have <b><?php echo do_shortcode( '[user_credits]' );?></b> credits left</p>
    </div>

    <div class="credits__form">
    <div class="credits__form__title">
        <h2>Buy credits</h2>
    </div>
        <form class="buyCreditsForm" action="">
        
        </form>
        <button class="buyCreditsButton">Buy <span class="amountCredits">6</span> credits</button>    
    </div>
    <?php echo do_shortcode( '[buy_credits]' );?>
    </div>
</div>




<?php get_footer(); ?>

<script>
$(document).ready(function(){
    // Get all credits rows
    var rows = $('.credit-row');

    // Init globals
    var labels = [];
    var prices = [];
    var amountCredits = [];
    var amountPrices= [];
    var pricePerCredits = [];
    var buttons = [];

    // Split up rows into globals
    for (var i = 0; i < rows.length; i++){
        labels.push($(rows[i]).find('.credits')[0].innerText);
        prices.push($(rows[i]).find('.price')[0].innerText);
        buttons.push($(rows[i]).find('.buy-now-btn')[0].firstChild);
    }

    // Create form
    for (var j =0; j < labels.length; j++){
        // Get integer values
        amountCredits.push(labels[j].substr(0,labels[j].indexOf(' ')));
        amountPrices.push(prices[j].substr(1,prices[j].indexOf(',') - 1));
        pricePerCredits.push(parseFloat(amountPrices[j] / amountCredits[j]).toPrecision(3));

        // Prepare HTML
        var checkboxOption = '<input type="radio" name="credits" data-index="' + j + '" value="'+ amountCredits[j] +'">' + '<span class="credits__form__row__label">' +  labels[j] + '</span>';
        var price = '<span class="credits__form__row__price">€'+ amountPrices[j] + '</span>';
        var ppc = '<span class="credits__form__row__ppc">€'+ pricePerCredits[j] +'/credit</span>';

        // Append new row to form
        $('.buyCreditsForm').append('<div id="cr-'+ j +'" class="credits__form__row"></div>');
        var newRow = $('#cr-' + j);
        newRow.append(checkboxOption);
        newRow.append(price);
        newRow.append(ppc);
        newRow.append('<br />');

    }

    // On change buy credits form
    $('.buyCreditsForm').on('change', function(){
        var selectedCredits = document.querySelector('input[name="credits"]:checked').value;
        $('.amountCredits').html(selectedCredits);
    });

    // Buy credits button
    $('.buyCreditsButton').on('click',function(){
        var index = $('input[name="credits"]:checked').data('index');
        $(buttons[index]).click();
    });
});
</script>