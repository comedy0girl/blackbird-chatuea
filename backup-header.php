<?php 

    include (TEMPLATEPATH . '/template-parts/_wrapper.php'); ?>

<header class="row twelve columns header" role="banner">
    <div class="offset-by-two eight columns top-banner">
    	<div class="menu-wrapper">
	    	<div class="menu-left"><?php 
	        	wp_nav_menu(['theme_location' => 'header-left-menu' ]); ?>
	        </div>

	        <div class="logo-main">
	    		<img  src="<?php bloginfo('template_url') ?>/assets/img/logo.png">
	    	</div>

	    	<div class="menu-right"><?php 
	       		wp_nav_menu(['theme_location' => 'header-right-menu' ]); ?>
	       	</div>
	    </div>
    </div>
  
</header>
