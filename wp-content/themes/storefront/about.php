<?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=about' );
    // "loop" through query
    while ( $your_query->have_posts() ) : $your_query->the_post();
        the_content();
    endwhile;
    // reset post data (important!)
    wp_reset_postdata();
?>