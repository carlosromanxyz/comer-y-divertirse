<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Comer_&_Divertirse
 */

?>

        </div><!--/.container-->
    </div><!--/#main-wrapper--> 
    
    <?php // require get_template_directory() . '/inc/twitter/twitter.php'; ?>

    <!--<div id="twitter-feed">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="twitter-feeds owl-carousel owl-theme" style="display: block; opacity: 1;">
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="display: block; width: 4500px; left: 0px; transition: all 1000ms ease; transform: translate3d(0px, 0px, 0px);">
                                <div class="owl-item" style="width: 750px;">
                                    <div class="twitter-feed">
                                        <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/others/twitter.png" alt="">
                                        <h2>#comerydivertirse</h2>
                                        <p>Confusing <a href="#">#design</a> terms: what's the difference between quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#">#UX, #UI and #IA? http://buff.ly/1KdjpEi  </a> </p>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 750px;">
                                    <div class="twitter-feed">
                                        <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>images/others/twitter.png" alt="">
                                        <h2>#comerydivertirse</h2>
                                        <p>Confusing <a href="#">#design</a> terms: what's the difference between quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#">#UX, #UI and #IA? http://buff.ly/1KdjpEi  </a> </p>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 750px;">
                                    <div class="twitter-feed">
                                    <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>images/others/twitter.png" alt="">
                                    <h2>#comerydivertirse</h2>
                                    <p>Confusing <a href="#">#design</a> terms: what's the difference between quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#">#UX, #UI and #IA? http://buff.ly/1KdjpEi  </a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="widget">
                        <h1 class="section-title title">Nosotros</h1>
                        <p>Somos #Gastronautas y ponemos el condimento en internet. Retuiteamos, difundimos #gastronomía, #cultura y #diversión.</p>
                        <address>
                            <p><?php _e('Cocinamos desde', 'comerydivertirse'); ?> : Santiago de Chile</p>
                            <p><?php _e('Teléfono', 'comerydivertirse'); ?> : +56 2 29045880</p>
                            <p>Email: <a href="mailto:hola@comerydivertirse.com">hola@comerydivertirse.com</a></p>
                        </address>
                    </div>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="3593" title="Newsletter" html_id="subscribe-form"]'); ?>
            </div>
        </div>
    </div><!--/.footer-widget-->

    <footer id="footer">
        <div class="footer-menu">
            <div class="container">
                <?php    
                /**
                * Displays a navigation menu
                * @param array $args Arguments
                */
                $args = array(
                    'theme_location' => 'footer',
                    'menu' => '',
                    'container' => 'ul',
                    'container_class' => 'menu-{menu-slug}-container',
                    'container_id' => '',
                    'menu_class' => 'nav navbar-nav',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => ''
                );
            
                wp_nav_menu( $args ); ?>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container text-center">
                <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?> </a>© <?php the_date('Y'); ?>. <?php _e('Desarrollado por'); ?> <a href="http://carlosroman.xyz">Carlos Román</a></p>
            </div>
        </div>
    </footer>

    <!--/#scripts--> 
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/owl.carousel.min.js"></script> 
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/moment.min.js"></script> 
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.simpleWeather.min.js"></script> 
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.sticky-kit.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.easy-ticker.min.js"></script> 
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.subscribe-better.min.js"></script> 
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/switcher.js"></script>

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-62924505-2', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- // Google Analytics -->
    
<?php wp_footer(); ?>

</body>
</html>
