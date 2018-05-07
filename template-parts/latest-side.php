<div class="row latest">
	<h2>Latest Work</h2>

	<?php
		$custom_loop = new WP_Query(array( 'posts_per_page' => 1, 'post_type' => 'portfolio_pages' ));
		while ( $custom_loop->have_posts() ) : $custom_loop->the_post();  ?>

			<div class="twelve columns hero-latest-work">
				<div class="six columns hero-lastest-info"><?php the_content(); ?></div>
				<div class="six columns hero-latest-img">
					<?php the_post_thumbnail(); ?>
				</div>
				
			</div><?php

		endwhile; 
		wp_reset_postdata(); ?>
</div>