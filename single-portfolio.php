<?php get_header(); ?>

<div class="twelve columns site-container">
    <div class="offset-by-one ten columns content">
        <div class="row project-inner">
            <div class="one-half column project-main-image"><?php 
                the_post_thumbnail(); ?>
            </div>
            <div class="one-half column content-inner">
                <h1><?php the_title(); ?></h1>
                <div class="divider">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/divider.png">
                </div>

                 <?php if ( have_posts() ) : 
                    while ( have_posts() ) : 
                            the_post(); 
                                 the_content(); 
                     endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                   
                <?php endif; ?>

            </div>
        </div>

        <div class="row portfolio-gallery"><?php
            $images = get_field('project_gallery');

           

                    $cats = get_the_category($post->ID);

                    // var_dump($cats);


                    // echo get_the_category(); 

            if( $images ): ?>
                 <div class="gallery">
                    <ul>
                        <?php foreach( $images as $image ): 
                            $content = '<li>';
                                $content .= '<a class="gallery_image" href="'. $image['url'] .'">';
                                     $content .= '<img src="'. $image['sizes']['thumbnail'] .'" alt="'. $image['alt'] .'" />';
                                $content .= '</a>';
                            $content .= '</li>';
                            if ( function_exists('slb_activate') ){
                                $content = slb_activate($content);
                                }
                                
                            echo $content;?>
                        <?php endforeach; ?>
                    </ul>
                 </div>
            <?php endif; ?>
        </div>
    </div>
</div>
           
<?php get_footer(); ?>