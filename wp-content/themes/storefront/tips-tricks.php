<?php
$results = query_posts([ 
    'post_type' => 'tips-tricks',
    'orderby' => 'date',
    'order' => 'DESC']);
$lockedResults = [];
$latestResults = [];

foreach ($results as $result) {
    // Get ID + Meta data
    $post_id = $result->ID;
    $tt = get_post_meta($post_id);
    // Check if the post is locked
    if ($tt['wpcf-lock'][0] === "1") {
        $lockedResults[] = $result;
    } else {
        $latestResults[] = $result;
    }
}
$countLocked = count($lockedResults);

// Checks if there are 3 or more locked posts, if yes, show latest 3
if ($countLocked >= 3) {
    $finalResults = array_slice($lockedResults, 0, 3);
}
// Merge locked with latest posts.
else {
    $countToFill = 3 - $countLocked;
    $finalResults = array_merge($lockedResults, array_slice($latestResults, 0, $countToFill));
}
// Display the results
foreach ($finalResults as $r) {
    $post_id = $r->ID;
    $tt = get_post_meta($post_id);
    $image = $tt['wpcf-preview-image'][0];
    // $postdate = date('d/m/Y', strtotime($r->post_date_gmt));
    $content = substr(wp_strip_all_tags($r->post_content), 0, 160);
    echo '<div class="col-lg-3 col-md-10 col-sm-9 col-xs-10 center">
        <div class="welcome__tips__blogteaser">';
    if ($countLocked > 0) {
        echo '<i class="fa fa-star"></i>';
        $countLocked--;
    }
    echo '
        <h3>' . wp_strip_all_tags($r->post_title) . '</h3>
        <img src="'. $image .'" />
        <p>' . $content . '...</p>
        <div class="TALbutton btn-yellow hvr-grow-shadow">
            <a href="'. wp_strip_all_tags($r->guid) .'"><p>Read more</p></a>
        </div>
        </div>
    </div>';
}
