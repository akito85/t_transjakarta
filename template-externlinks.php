<?php
/**
 * Template Name: Externlinks Template
 */
?>

<div id="page-contents">
    <div class="news-card col-md-8 col-sm-6">
            <?php
                // The Pagination
                $pages = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                // The Query
                $posts = new WP_Query( array( 'category_name' => 'ext-link', 'posts_per_page' => 9, 'post_type' => 'post', 'paged' => $pages ) );

                // The Loop
                if ( $posts->have_posts() ) {
                    while ( $posts->have_posts() ) {
                        $posts->the_post();
                    }
                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            ?>
    </div>
    <div class="col-md-4 col-sm-6">       
    </div>
</div>