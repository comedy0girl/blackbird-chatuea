<div class="row twelve columns latest">

	<div class="eleven columns headerSpan"><span>Latest Work</span></div>
	<div class="eleven columns latest-inner"><?php
			$custom_loop = new WP_Query(array( 'posts_per_page' => 4, 'post_type' => 'portfolio' ));
			while ( $custom_loop->have_posts() ) : $custom_loop->the_post();  ?>
			
						<div class="three columns latest-img">
							<?php the_post_thumbnail('latest-port'); ?>
						</div>
					
				<?php

			endwhile; 
			wp_reset_postdata(); ?>
	</div>
</div>

<div class="row twelve columns link">
		<button><a href="/portfolio">More</a></button>
		
</div>