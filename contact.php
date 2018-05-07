<?php

    /* Template Name: Contact Page */
 
get_header(); ?>

<div class="site-container">
    <div class="twelve columns content"><?php

    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
    ?>

        <div class="row twelve columns latest-banner" style="background: url(<?php echo $src[0]; ?> ); background-position:center center; height: 450px; -webkit-background-size: cover;
  -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
 

    </div>




        <div class="offset-by-one ten columns contact-inner">
             <?php if ( have_posts() ) : 
                while ( have_posts() ) : 
                        the_post(); 
                             the_content(); 
                 endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>

           <div class="birdy">
          <img src="<?php bloginfo('template_url') ?>/assets/img/bird.png"></a>
        </div>

        <div class="row offset-by-two eight columns contact-page-form"><?php
          include (TEMPLATEPATH . '/template-parts/contact-form.php'); ?>
        </div>    

         <div class="row twelve columns"><?php
                include (TEMPLATEPATH . '/template-parts/map.php'); ?>
        </div> 
    
    </div>
</div>

<?php get_footer(); ?>