<?php
/**
 * Template Name: Externlinks Template
 */
?>

<div id="page-contents">
    <div id="wrapper" class="container-fluid">
        <?php 
            // The Title
            get_template_part('templates/page', 'header');
            // The Pagination
            $pages = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            // The Query
            $posts = new WP_Query( array( 'category_name' => 'ext-link', 'posts_per_page' => 1, 'post_type' => 'post', 'paged' => $pages ) );
            // The Loop
            if ( $posts->have_posts() ) {
                while ( $posts->have_posts() ) {
                    $posts->the_post();
                    echo get_the_content();
                }
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        ?>
    </div>
</div>