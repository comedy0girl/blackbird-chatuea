<?php

    /* Template Name: Home Page */
 
get_header(); ?>
<main class="main" role="main">
<div class="site-container">
   <div class="row twelve columns hero-container"></div>
    </div>

    <div class="twelve columns content">

        <div class="offset-by-one ten columns content-inner">
  
             <?php if ( have_posts() ) : 
                while ( have_posts() ) : 
                        the_post(); 
                             the_content(); 
                 endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
           
        </div>         
    </div>
     <a href="/portfolios"><?php
        include (TEMPLATEPATH . '/template-parts/latest-work.php'); ?>
    </a>

   <div class="row twelve columns contact-and-follow">
        <div class="full-contact">
            <div class="headerSpan"><span>Contact Us</span></div><?php
            include (TEMPLATEPATH . '/template-parts/contact-form.php'); ?>
        </div>
    </div> 

</div>
</main>

<?php get_footer(); ?>