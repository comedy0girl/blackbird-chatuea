        <footer class="twelve columns footer" role="contentinfo">
           <div class="footer-inner">

                <div class="four columns footer-contact">
                    <h6>Contact</h6>
                    <li><a class="mail-me" href="mailto:ryan@blackbirdchateau.com?Subject=Blackbird%20Chataue%20Enquiry">ryan@blackbirdchateau.com</a></li>
                    <li>West Hollywood, CA</li>
                    
                </div>
                 <div class="four columns footer-site-links">
                    <h6>Navigation</h6><?php 
                wp_nav_menu(['theme_location' => 'footer-menu' ]); ?>
                     <h6><img class="footer-bird" src="<?php bloginfo('template_url') ?>/assets/img/bird.png"></h6>
                </div>
                <div class="four columns footer-social">
                    <h6>Keep In Touch</h6>
                    <li><a href="https://www.facebook.com/BlackbirdChateau/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/blackbirdchateau/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     <li><a href="https://twitter.com/BlackbirdWord"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </div>
    
            </div>


            <p class="two twelve columns copyright">
                &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>
            </p>
      
        </footer>

        <?php wp_footer(); ?>



    </body>
</html>