<?php
/**
 * Template Name: RouteTourism Template
 */
?>

<div id="page-contents">
    <div class="news-card col-md-8 col-sm-6">
            <?php
                // The Pagination
                $pages = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                // The Query
                $posts = new WP_Query( array( 'category_name' => 'route-tourism', 'posts_per_page' => 9, 'post_type' => 'post', 'paged' => $pages ) );

                // The Loop
                if ( $posts->have_posts() ) {
                    while ( $posts->have_posts() ) {
                        $posts->the_post();
                        // The Slideshow;
                        if (has_post_thumbnail( $posts->ID )) {
                            echo '<div class="col-md-4 col-sm-12">';
                            echo '<a class="card col-sm-12" href="' . esc_url(get_permalink($posts->ID)) . '">';
                            echo '<div class="card-image">' . get_the_post_thumbnail( $posts->ID, 'large' ) . '</div>';
                            echo '<div class="card-content">';
                                echo '<div class="card-title">' . the_title() . '</div>';
                                echo '<div class="card-date">' . get_the_date() . '</div>';
                            echo '</div>';
                            echo '</a>';
                            echo '</div>';
                        }
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