<?php
/**
 * Template Name: RouteMap Template
 */
?>
<div id="page-contents">
    <div id="wrapper" class="container-fluid">
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/page', 'header'); ?>
      <?php get_template_part('templates/content', 'page'); ?>
    <?php endwhile; ?>
        <div class="magnify col-sm-12">
            <div class="large"></div>
            <div class="imgbox">     
                <?php
                    // The Pagination
                    $pages = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                    // The Query
                    $posts = new WP_Query( array( 'category_name' => 'route-map', 'posts_per_page' => 9, 'post_type' => 'post', 'paged' => $pages ) );

                    // The Loop
                    if ( $posts->have_posts() ) {
                        while ( $posts->have_posts() ) {
                            $posts->the_post();
                            // The Slideshow;
                            if (has_post_thumbnail( $posts->ID )) {
                                //echo get_the_post_thumbnail( $posts->ID, 'full' );
                                $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $posts->ID ), 'your_thumb_handle' );
                                echo '<img id="route-map" class="img-responsive thumb" src="' . $thumbnail['0'] . '">';
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
    </div>
</div>