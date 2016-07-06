<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Comer_&_Divertirse
 */

get_header(); ?>

    <?php if(have_posts()) : ?>
        <?php $catcount = 0; ?>
        <div class="container">
            <div class="page-breadcrumbs">
                <h1 class="section-title"><?php the_archive_title(); ?></h1>    
            </div>
            <div class="section">
                <div class="row">
                    <div class="col-sm-9">
                        <div id="site-content" class="site-content">
                            <div class="section listing-news">
                                <?php while(have_posts()) : the_post(); ?>
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
                                <?php endwhile; ?>
                                
                                <div class="post google-add">
                                    <div class="add inner-add text-center">
                                        <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/post/google-add.png" alt="" /></a>
                                    </div><!--/.section-->
                                </div><!--/.google-add-->
                            </div>
                        </div><!--/#site-content-->
                        
                        <div class="pagination-wrapper">
                            <ul class="pagination col-xs-12">
                                <li class="col-xs-50 pull-left">
                                    <?php previous_posts_link(); ?> 
                                </li>
                                <li class="col-xs-50 pull-right">
                                    <?php next_posts_link(); ?> 
                                </li>
                            </ul>
                        </div>
                    </div><!--/.col-sm-9 -->    
                    
                    <?php get_sidebar(); ?>
                </div>              
            </div><!--/.section-->
        </div><!--/.container-->
    <?php endif; ?>

<?php
get_footer();
