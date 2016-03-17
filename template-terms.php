<?php
/**
 * Template Name: Terms Template
 */
?>

<div id="page-contents">
    <div id="wrapper" class="container-fluid">
        <?php get_template_part('templates/page', 'header'); ?>
        <div class="news-card col-md-8 col-sm-6">
                <?php
                    // The Pagination
                    $pages = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                    // The Query
                    $posts = new WP_Query( array( 'category_name' => 'rules-and-terms', 'posts_per_page' => 9, 'post_type' => 'post', 'paged' => $pages ) );

                    // The Loop
                    if ( $posts->have_posts() ) {
                        while ( $posts->have_posts() ) {
                            $posts->the_post();
                            echo '<div class="card-content">';
                            echo '<div class="card-title">' . the_title() . '</div>';
                            echo '<div class="card-date">' . get_the_date() . '</div>';
                            echo '</div>';
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
</div>