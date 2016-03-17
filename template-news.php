<?php
/**
 * Template Name: News Template
 */
?>
<div id="page-contents">
    <div id="wrapper" class="container-fluid">
        <?php get_template_part('templates/page', 'header'); ?>
        <div class="news-card col-lg-9 col-md-6 col-sm-6">
                <?php
                    // The Pagination
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                    // The Query
                    $posts = new WP_Query( array( 'category_name' => 'news', 'posts_per_page' => 4, 'post_type' => 'post', 'paged' => $paged ) );

                    // The Loop
                    if ( $posts->have_posts() ) {
                        while ( $posts->have_posts() ) {
                            $posts->the_post();
                            // The Picture;
                                echo '<div class="col-lg-6 col-md-12 col-xs-12 card-wrapper">';
                                echo '<a class="card" href="' . esc_url(get_permalink($posts->ID)) . '">';
                                if (has_post_thumbnail( $posts->ID )) {
                                    echo '<div class="card-image">' . get_the_post_thumbnail( $posts->ID, 'large' ) . '</div>';
                                } else {
                                    echo '<div class="card-image"></div>';
                                }
                                echo '<div class="card-content">';
                                    echo '<div class="card-title">' . get_the_title() . '</div>';
                                    echo '<div class="card-date">' . get_the_date() . '</div>';
                                echo '</div>';
                                echo '</a>';
                                echo '</div>';

                        }
                    } else {
                        // no posts found
                    }
                    /* Restore original Post Data */
                    // wp_reset_postdata();
                ?>

            <div class="page-numbers-position text-center">
            <?php
            $big = 999999999; // need an unlikely integer
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $posts->max_num_pages,
                'prev_next'    => false,
                'prev_text'    => __('« Sebelumnya'),
                'next_text'    => __('Selanjutnya »')
            ) );
            ?>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6" id="twitter-widget">
            <a class="twitter-timeline" 
               href="https://twitter.com/PT_TransJakarta" 
               data-widget-id="697343926840070146"
               data-chrome="noscrollbar transparent">
            </a>        
        </div>
    </div>
</div>