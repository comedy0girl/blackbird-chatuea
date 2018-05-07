<?php

    /* Template Name: About Page */
 
get_header(); ?>

<div class="site-container">
    <div class="twelve columns content">
        <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>

            <div class="about-container">
                <div class="one-half column aboutImg">
                    <img src="<?php echo $src[0]; ?>">
                </div>

                <div class="one-half column aboutBlurb">
                     <div class="about-inner"><?php 
                        if ( have_posts() ) : 
                            while ( have_posts() ) : 
                                    the_post(); 
                                         the_content(); 
                             endwhile; else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </div>      
                </div> 
            </div>   
             
    </div>

</div>

<?php get_footer(); ?>


