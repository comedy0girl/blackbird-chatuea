<?php

    /* Template Name: Portfolio Landing Page */
 
get_header(); ?>

<div class="site-container"><?php
    $args = array(
        'post_type' => 'Portfolio',
        'posts_per_page' => -1 );

    $the_query = new WP_Query( $args );
    
    while( $the_query->have_posts() ) : 
        $the_query->the_post($post->ID); ?>
        <a href="<?php the_permalink(); ?>">
        <div class="grid" id="port-grid">
            <div class="grid-item">
                <?php echo the_post_thumbnail('latest-port-size'); ?>
            </div>
        </div>
        </a>
    <?php endwhile; ?>


</div>

<?php get_footer(); ?>