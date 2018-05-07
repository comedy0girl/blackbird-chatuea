<?php get_header(); ?>


<div class="twelve columns site-container">

	<div class="twelve columns content">

        <div class="offset-by-one ten columns content-inner">
	
	<h3 class="post__title"><?php the_title(); ?></h3>
             <?php if ( have_posts() ) :
                while ( have_posts() ) :
                        the_post();
                             the_content();
                 endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

        </div>
    </div>


</div>

<?php get_footer(); ?>
