<?php
$result = query_posts( array( 'post_type' => 'fotm' ) );
                $post_id = $result[0]->ID;
                $fotm = get_post_meta($post_id);
                
                $fotm_url = $fotm['wpcf-fotm-url'][0];
                $fotm_text = $result[0]->post_content;
                $fotm_image= $fotm['wpcf-fotm-image'][0];
                
?>