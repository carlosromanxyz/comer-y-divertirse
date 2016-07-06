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
	<div class="container">
        <div class="page-breadcrumbs">
            <h1 class="section-title"><?php _e('Recetas', 'comerydivertirse'); ?></h1>    
        </div>
        <div class="section">
            <div class="row">
                <div class="col-sm-9">
                    <div id="site-content" class="site-content">
                        <div class="section listing-news">
                        	<?php

							$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							/**
							 * The WordPress Query class.
							 * @link http://codex.wordpress.org/Function_Reference/WP_Query
							 *
							 */
							$args = array(
								
								
								//Type & Status Parameters
								'post_type'   => 'recipe',
								
								//Pagination Parameters
								'posts_per_page'         => 10,
								'paged'					 => $paged,
							);
						
							$query = new WP_Query( $args ); ?>
                            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                                <div class="post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <?php the_post_thumbnail( 'category', array('class' => 'img-responsive')); ?>
                                        </div>
                                    </div>
                                    <div class="post-content">                              
                                        <div class="entry-meta">
                                            <ul class="list-inline">
                                                <li class="publish-date"><a href="<?php the_permalink(); ?>"><i class="fa fa-clock-o"></i> <?php the_date(); ?> </a></li>
                                            </ul>
                                        </div>
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>
                                        <div class="entry-content">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div>
                                </div><!--/post--> 
                            <?php endwhile; endif; ?>
                        </div>
                    </div><!--/#site-content-->
                    
                    <div class="pagination-wrapper">
                        <ul class="pagination col-xs-12">
                            <li class="col-xs-50">
                                <?php previous_posts_link(); ?>
                            </li>
                            <li class="col-xs-50">
                                <?php next_posts_link(); ?> 
                            </li>
                        </ul>
                    </div>
                    <?php wp_reset_query(); ?>
                </div><!--/.col-sm-9 -->    
                
                <?php get_sidebar(); ?>
            </div>              
        </div><!--/.section-->
    </div><!--/.container-->
<?php
get_footer();
