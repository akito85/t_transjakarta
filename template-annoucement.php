<?php
/**
 * Template Name: Annoucement Template
 */
?>
<div id="page-contents">
    <div id="wrapper">
        <?php 
            // Get The Title
            get_template_part('templates/page', 'header');
            // The Pagination
            $pages = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            // The Query
            $posts = new WP_Query( array( 'category_name' => 'annoucement', 'posts_per_page' => 9, 'post_type' => 'post', 'paged' => $pages ) );
            // The Loop
            if ( $posts->have_posts() ) {
                while ( $posts->have_posts() ) {
                    $posts->the_post();
                    // The Slideshow;
                    if (has_post_thumbnail( $posts->ID )) {
                        echo '<div class="container-fluid">';
                        echo '<div class="col-sm-5"><a href="' . esc_url(get_permalink($posts->ID)) . '" class="">' . get_the_post_thumbnail( $posts->ID, 'large' ) . '</a>';
                        echo '</div>';

                        echo '<div class="col-sm-7">';
                        echo '<h3 class="title">' . get_the_title() . '</h3>';
                        echo '<p class="text-muted"><i class="fa fa-calendar"></i>&nbsp&nbsp' . get_the_date() . '</p>';
                        echo '<p>' . the_excerpt() . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '<br/>';
                    }
                }
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        ?>
    </div>
</div>