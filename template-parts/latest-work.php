<div class="row twelve columns latest">

	<?php if ( get_field( 'hero_image') ) { ?>


	<div class="row twelve columns latest-banner" style="background: url('<?php the_field( 'hero_image' ); ?>'); background-position:center center; height: 450px; -webkit-background-size: cover;
  -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
 
  	<div class="work-info">
  		<div class="eleven columns latestSpan"><span>Latest Work</span></div>
  	</div>
 
 	<?php } ?>


</div>