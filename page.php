<?php get_header(); ?>

<main class="main" role="main">
    <div class="twelve columns content products-content">
        <div class="products-inner container">

            <?php while (have_posts()) : the_post(); ?>

                <article <?php post_class(); ?>>

                   <!--  <header role="heading">
                        <h3 class="post__title"><?php the_title(); ?></h3>
                    </header> -->

                    <?php the_content(); ?>

                </article>

            <?php endwhile; ?>

        </div>
    </div>  
</main>

<?php get_footer(); ?>