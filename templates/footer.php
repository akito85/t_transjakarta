<footer class="container-fluid">
    <div id="footer-top"></div>

    <div class="nav" id="nav-footer">
        <?php
            $args = array( "category_name" => "footer-link", 
                           "posts_per_page" => 6, 
                           "post_type" => "post" );
        
            $posts = new WP_Query( $args );

            // The Loop
            if ( $posts->have_posts() ) {
                while ( $posts->have_posts() ) {
                    $posts->the_post();
                    the_content(); 
                }
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();            

        ?>
    </div>

    <div id="footer-bottom">
        <p>Copyright © 2016 - PT. Transportasi Jakarta. All Rights Reserved.</p>
    </div>
</footer>


