<?php 

    include (TEMPLATEPATH . '/template-parts/_wrapper.php'); ?>
    
<header class="header" role="banner">
   <div class="row twelve columns hero-navigation"> 
        <div class="row top-inner">
             <div class="logo-bird">
                <a href="/"><img src="<?php bloginfo('template_url') ?>/assets/img/bird.png"></a>
            </div>
           
            <div class="navigation"> <?php 
                wp_nav_menu(['theme_location' => 'header-menu' ]); ?>
            </div>
           
             <div class="logo-main">
                <a href="/"><img src="<?php bloginfo('template_url') ?>/assets/img/title.png"></a>
            </div>
        </div>

    </div>
</header>

<div class="row twelve columns mobi">
    <div class="button-mobile">
    <a class="btn-open" ></a>
</div>
</div>



<div class="cell-logo">
    <a href="/"><img src="<?php bloginfo('template_url') ?>/assets/img/logo.png"></a>
</div>



<div class="overlay">
    <div class="wrap">
         <div class="logo-bird">
                <a href="/"><img src="<?php bloginfo('template_url') ?>/assets/img/bird.png"></a>
        </div>
         <div class="social-media-mobile">
             <li><a href="https://www.facebook.com/BlackbirdChateau/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/blackbirdchateau/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/BlackbirdWord"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </div>
        <ul class="wrap-nav">

             <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </ul>

    </div>
</div>