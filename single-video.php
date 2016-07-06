<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
														<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i><?php _e('Publicado el:', 'comerydivertirse'); ?> <?php the_date(); ?> </a></li>
														<?php setPostViews(get_the_ID()); ?>
														<li class="views"><i class="fa fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></li>
													</ul>
												</div>
												<h2 class="entry-title">
													<?php the_title(); ?>
												</h2>
												<div class="entry-content">
													<?php $video = get_post_meta( get_the_id(), 'RECIPE_META_video_id', true ); ?>
													<div class="entry-thumbnail embed-responsive embed-responsive-16by9">
														<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video; ?>" allowfullscreen></iframe>
													</div>
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
							
							<div class="comments-wrapper">
								<h1 class="section-title title">Comentarios</h1>
								<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
							</div>
						</div>
					</div>
				</div><!--/.col-sm-9 -->	
				
				<?php get_sidebar(); ?>
			</div>				
		</div><!--/.section-->

	<?php endwhile; endif; ?>

<?php
get_footer();
