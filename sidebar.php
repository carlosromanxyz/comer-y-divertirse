<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Comer_&_Divertirse
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

					<div class="col-md-3 col-sm-4">
                        <div id="sitebar">      
                            <div class="widget">
                                <div class="add">
                                	<?php if(is_single()) : ?>
                                    	<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/post/add/add1.jpg" alt="" /></a>
                                	<?php else : ?>
                                		<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/post/add/add3.jpg" alt="" /></a>
                                	<?php endif; ?>
                                </div>
                            </div><!--/#widget-->

                            <div class="widget follow-us">
                                <h1 class="section-title title">Redes sociales</h1>
                                <ul class="list-inline social-icons">
                                    <li><a href="https://www.facebook.com/comerydivertirse"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/comerdivertirse"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://cl.linkedin.com/in/comer-divertirse-®-69b08962"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/comerydivertirse/"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div><!--/#widget-->
                            
                            <div class="widget">
                                <h1 class="section-title title">Instagram</h1>
                                <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/e5be44771620f6a1361692485d029f7c691ee1d5.html" id="lightwidget_e5be447716" name="lightwidget_e5be447716"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
                                <!-- Boton Instagram -->
                                <style>.ig-b- { display: inline-block; }
								.ig-b- img { visibility: hidden; }
								.ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
								.ig-b-v-24 { width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }
								@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
								.ig-b-v-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }</style>
								<a href="https://www.instagram.com/comerydivertirse/?ref=badge" class="ig-b- ig-b-v-24"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" /></a>
                            </div><!--/#widget-->

                            <div class="widget">
                                <h1 class="section-title title">Facebook</h1>
                                <div class="fb-page" data-href="https://www.facebook.com/comerydivertirse/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/comerydivertirse/"><a href="https://www.facebook.com/comerydivertirse/">comer &amp; divertirse</a></blockquote></div></div>
                            </div><!--/#widget-->  

                            <div class="widget">
	                            <h1 class="section-title title"><?php _e('Twitter', 'comerydivertirse'); ?></h1>
	                            <a class="twitter-timeline" href="https://twitter.com/comerdivertirse" data-widget-id="495322132956475392">Tweets por el @comerdivertirse.</a>
	                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	                        </div><!-- /.widget -->
                        </div><!--/#sitebar-->
                    </div>
