<?php

    /* Template Name: Checkout */
 
get_header(); ?>
<main class="main" role="main">
    <div class="twelve columns content products-content">
        <div class="products-inner container">

            <?php while (have_posts()) : the_post(); ?>

                <article <?php post_class(); ?>>

               

                    <?php the_content(); ?>

                </article>

            <?php endwhile; ?>

            <a href="">Continue Shopping</a>

        </div>
    </div>  
</main>

<?php get_footer(); ?>