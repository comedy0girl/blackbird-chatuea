<?php get_header(); ?>

<main class="main" role="main">
  <div class="site-container">
      <div class="twelve columns single-content">
          <div class="nine columns content-inner blog">
             <h3 class="post__title"><?php the_title(); ?></h3>
              <div class="postInfo">
                  <span><?php $categories = get_the_category();
                      if ( ! empty( $categories ) ) {
                          echo esc_html( $categories[0]->name );   
                      } 
                  ?></span> /
                  <span><?php the_time('F') ?> <?php the_time('j') ?> <?php the_time('Y')?></span>
                </div>
              <div class="thePost">
                   <?php if ( have_posts() ) :
                      while ( have_posts() ) :
                              the_post();
                                   the_content();
                       endwhile; else : ?>
                      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                  <?php endif; ?>
              </div>
              <div class="twelve columns social-share">
                  <?php echo wpfai_social(); ?>
              </div>
          </div>

           <div class="three columns sidebar">
            <?php dynamic_sidebar( 'blog_sidebar' ) ?>
          </div>
      </div>



  </div>
<main class="main" role="main">

<?php get_footer(); ?>
