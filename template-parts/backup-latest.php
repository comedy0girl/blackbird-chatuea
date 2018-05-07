<?php
	 if(have_rows('latest_projects')) : ?>
		 <div class="row twelve columns latest-work">
		 	<h2>Latest Work</h2><?php
	            while(have_rows('latest_projects')) : the_row(); 
	                $projectImg = get_sub_field('project');
	                $projectTitle = get_sub_field('project_title');
	                $projectDesc = get_sub_field('project_description'); ?>

	                <div class="three columns box"> 
	                	<img src="<?php echo $projectImg; ?>">
					  <div class="overbox">
					    <div class="title overtext"><?php echo $projectTitle; ?></div>
					    <div class="tagline overtext"><?php echo $projectDesc; ?></div>
					  </div>
					</div><?php
	            endwhile; ?>
	    </div><?php
    endif;
?>