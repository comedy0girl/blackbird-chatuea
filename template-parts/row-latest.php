<div class="row twelve columns latest">
	<h2>Latest Work</h2>
	<div class="divider">
		<img src="<?php bloginfo('template_url') ?>/assets/img/divider.png">
	</div><?php
		$custom_loop = new WP_Query(array( 'posts_per_page' => 3, 'post_type' => 'portfolio' ));
		while ( $custom_loop->have_posts() ) : $custom_loop->the_post();  ?>

			<div class="row twelve columns latestWorkRow">
				<a href="<?php the_permalink(); ?>">
					<div class="one-half column textBox">
						<h5><?php the_title(); ?></h5>
						<?php the_content(); ?>
					</div>

					<div class="one-half column imgBox">
						<?php the_post_thumbnail(); ?>
					</div>
				</a>
			</div><?php

		endwhile; 
		wp_reset_postdata(); ?>

</div>