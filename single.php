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
											<div class="entry-header">
												<div class="entry-thumbnail">
													<?php the_post_thumbnail('post', array('class' => 'img-responsive')); ?>
												</div>
											</div>
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
													<?php the_content(); ?>
													<div class="clear"></div>
													<?php // echo do_shortcode('[reaction_buttons]'); ?>
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
								<div class="fb-comments" data-href="<?php the_permalink(); ?>" width="100%" data-numposts="5"></div>
							</div>

							<div class="section">
								<h1 class="section-title"><?php _e('Te puede interesar', 'comerydivertirse'); ?></h1>
								<div class="row">

                                <?php
                                    $related_count = 0;
                                    $orig_post = $post;
                                    global $post;
                                    $tags = wp_get_post_tags($post->ID);
                                     
                                    if ($tags) {
                                    $tag_ids = array();
                                    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                                    $args=array(
                                    'tag__in' => $tag_ids,
                                    'post__not_in' => array($post->ID),
                                    'posts_per_page'=>3, // Number of related posts to display.
                                    'caller_get_posts'=>1
                                    );
                                     
                                    $my_query = new wp_query( $args );
                                 
                                    while( $my_query->have_posts() ) {
                                    $my_query->the_post(); $related_count++; ?>
    									<div class="col-sm-4">
                                            <?php if($related_count == 1 OR $related_count == 2) : ?>
        										<div class="post medium-post">
        											<div class="entry-header">
        												<div class="entry-thumbnail">
        													<?php the_post_thumbnail( 'home-slider-3', array('class' => 'img-responsive')); ?>
        												</div>
        											</div>
        											<div class="post-content">								
        												<div class="entry-meta">
        													<ul class="list-inline">
        														<li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?php the_date(); ?> </a></li>
        													</ul>
        												</div>
        												<h2 class="entry-title">
        													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        												</h2>
        											</div>
        										</div><!--/post-->
                                            <?php endif; ?>
    									</div>
    									<div class="col-sm-4">
                                            <?php if($related_count == 3 OR $related_count == 4) : ?>
        										<div class="post medium-post">
                                                    <div class="entry-header">
                                                        <div class="entry-thumbnail">
                                                            <?php the_post_thumbnail( 'home-slider-3', array('class' => 'img-responsive')); ?>
                                                        </div>
                                                    </div>
                                                    <div class="post-content">                              
                                                        <div class="entry-meta">
                                                            <ul class="list-inline">
                                                                <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?php the_date(); ?> </a></li>
                                                            </ul>
                                                        </div>
                                                        <h2 class="entry-title">
                                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </h2>
                                                    </div>
                                                </div><!--/post-->
    										<?php endif; ?>
    									</div>
    									<div class="col-sm-4">
                                            <?php if($related_count == 5 OR $related_count == 6) : ?>
        										<div class="post medium-post">
                                                    <div class="entry-header">
                                                        <div class="entry-thumbnail">
                                                            <?php the_post_thumbnail( 'home-slider-3', array('class' => 'img-responsive')); ?>
                                                        </div>
                                                    </div>
                                                    <div class="post-content">                              
                                                        <div class="entry-meta">
                                                            <ul class="list-inline">
                                                                <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?php the_date(); ?> </a></li>
                                                            </ul>
                                                        </div>
                                                        <h2 class="entry-title">
                                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </h2>
                                                    </div>
                                                </div><!--/post-->
    										<?php endif; ?>
    									</div>
                                    <? }
                                    }
                                    $post = $orig_post;
                                    wp_reset_query(); ?>
								</div>
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
