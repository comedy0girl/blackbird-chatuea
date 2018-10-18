<?php get_header(); ?>

<div class="site-container">
      <div class="twelve columns news-content">

          <div class="nine columns content-inner-blog">
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="post-wrapper">
                    <div class="thePost">
                         <?php
                        if (! $featured = get_the_post_thumbnail()) {
                            $featured = get_the_content();
                        }
                        
                        // extract post thumbnail URL
                        preg_match('/<img.*(src)="([^"]*)"/i', $featured, $matches);
                        $thumb = $matches[2]; ?>

                        <?php if (!empty($thumb)) : ?>

                       
                          <div class="img-wrapper" style="background-image: url('<?php echo $thumb; ?>')">
                            
                            <div class="post-title-wrapper">
                              <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                              <div class="postInfo">
                                <span><?php $categories = get_the_category();
                                    if ( ! empty( $categories ) ) {
                                        echo esc_html( $categories[0]->name );   
                                    } 
                                ?></span>
                              </div>
                            </div>
                          </div>
                       
                    
                        
                        <?php echo wpse_custom_wp_trim_excerpt($get_the_excerpt, 20); ?>

                        <?php else : ?>
                             <?php echo wpse_custom_wp_trim_excerpt($get_the_excerpt, 20); ?>
                        
                        <?php endif; ?> 
                    </div>
                </div><?php
                 endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

            <div class="row twelve columns blog-navigation">
              <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
              <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
            </div>

        </div>

        <div class="three columns sidebar">
          <?php dynamic_sidebar( 'blog_sidebar' ) ?>
        </div>


      
    </div>
</div>

<?php get_footer(); ?>
