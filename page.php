<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Comer_&_Divertirse
 */

get_header(); ?>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		<div class="section">
			<div class="row">
				<div class="col-sm-9">
					<div id="site-content" class="site-content">
						<div class="row">
							<div class="col-sm-12">
								<div class="left-content">
									<div class="details-news">											
										<div class="post">
											<div class="post-content">								
												<div class="entry-meta">
													<ul class="list-inline">
														<li class="posted-by"><i class="fa fa-user"></i> <?php _e('Escrito por:', 'comerydivertirse'); ?> <a href="#"><?php the_author(); ?></a></li>
														<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?php the_date(); ?> </a></li>
													</ul>
												</div>
												<h2 class="entry-title">
													<?php the_title(); ?>
												</h2>
												<div class="entry-content">
													<?php the_content(); ?>
													<div class="clear"></div>
												</div>
											</div>
										</div><!--/post--> 
									</div><!--/.section-->
								</div><!--/.left-content-->
							</div>
						</div>
					</div><!--/#site-content-->
					<div class="row">
						<div class="col-sm-12">								
							<div class="post google-add">
								<div class="add inner-add text-center">
									<a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/post/google-add.png" alt="" /></a>
								</div><!--/.section-->
							</div><!--/.google-add-->
						</div>
					</div>
				</div><!--/.col-sm-9 -->	
				
				<?php get_sidebar(); ?>
			</div>				
		</div><!--/.section-->

	<?php endwhile; endif; ?>

<?php
get_footer();
