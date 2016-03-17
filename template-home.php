<?php
/**
 * Template Name: Home Template
 */
?>
<div id="page-contents-home" class="container-fluid">
    <div class="uk-slidenav-position" data-uk-slideshow="{autoplay: true, animation: 'swipe', duration: 500, autoplayInterval: 5000, pauseOnHover: false}">
        <?php
            // The Query
            $posts = new WP_Query( array( 'category_name' => 'slideshow', 'posts_per_page' => 6, 'post_type' => 'post' ) );

            // The Loop
            if ( $posts->have_posts() ) {
                echo '<ul class="uk-slideshow" height="633px">';
                while ( $posts->have_posts() ) {
                    $posts->the_post();
                    // The Slideshow;
                    if (has_post_thumbnail( $posts->ID )) {
                        echo '<li>' . get_the_post_thumbnail( $posts->ID, 'full' ) . '</li>';
                    }
                }
                echo '</ul>';
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        ?>

        <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
        <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>

        <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
            <li data-uk-slideshow-item="0"><a href="javascript:void(0)"></a></li>
            <li data-uk-slideshow-item="1"><a href="javascript:void(0)"></a></li>
            <li data-uk-slideshow-item="2"><a href="javascript:void(0)"></a></li>
            <li data-uk-slideshow-item="3"><a href="javascript:void(0)"></a></li>
            <li data-uk-slideshow-item="4"><a href="javascript:void(0)"></a></li>
            <li data-uk-slideshow-item="5"><a href="javascript:void(0)"></a></li>
        </ul>
    </div>
</div>