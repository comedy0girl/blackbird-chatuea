<?php

    /* Template Name: Online Store */
 
get_header(); ?>
<div class="twelve columns content products-content">
 
        <div class="products-inner container"><?php
            $args = array( 'post_type' => 'products', 'posts_per_page' => -1 );
            $new_products = new WP_Query( $args ); ?> 
          

      
              
              <?php 
                if ( $new_products->have_posts() ) :
                    while ( $new_products->have_posts() ) : $new_products->the_post();?>
                      <div class="six columns products"><?php
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
                     
                        <div class="product-image" style="background: url(<?php echo $src[0]; ?> );"></div>   
                        <h2 class="green"><?php the_title();?></h2>
                        <div class="product-info">
                            <?php the_content(); ?>
                        </div>
                      </div><?php
                      wp_reset_postdata(); 
                    endwhile; ?>
                     <?php

                    else : ?>
                  <p>Sorry, there are no products currently planned. Please check back soon.</p><?php
                  endif;  ?>
             


        </div>
       
</div>

<?php get_footer(); ?>