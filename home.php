<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Comer_&_Divertirse
 */

get_header(); ?>

            <div class="section">
                <div class="row">
                    <div class="site-content col-md-9">
                        <div class="row">
                            <div class="col-sm-8">
                                <div id="home-slider">
                                    
                                    <?php   /**
                                         * The WordPress Query class.
                                         * @link http://codex.wordpress.org/Function_Reference/WP_Query
                                         *
                                         */
                                        $args = array(
                                            
                                            'category_name'    => 'timeline',
                                            'posts_per_page'   => 10
                                            
                                        );
                                    
                                    $query = new WP_Query( $args ); ?>

                                    <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                                        
                                        <div class="post feature-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <?php the_post_thumbnail( 'home-slider', array('class' => 'img-responsive')); ?>
                                                </div>
                                                <div class="catagory world"><a href="#">Timeline</a></div>
                                            </div>
                                            <div class="post-content">                              
                                                <div class="entry-meta">
                                                    <ul class="list-inline">
                                                        <li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"><?php the_time( get_option( 'date_format' ) ); ?></a></li>
                                                        <?php setPostViews(get_the_ID()); ?>
                                                        <li class="views"><i class="fa fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></li>
                                                    </ul>
                                                </div>
                                                <h2 class="entry-title">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h2>
                                            </div>
                                        </div><!--/post--> 

                                    <?php endwhile; endif; ?>
                                    <?php wp_reset_query(); ?>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <?php
                                    /**
                                     * The WordPress Query class.
                                     * @link http://codex.wordpress.org/Function_Reference/WP_Query
                                     *
                                     */
                                    $args = array(
                                        
                                        'category_name'    => 'gastronoticias',
                                        'posts_per_page'   => 1
                                        
                                    );
                                
                                $query = new WP_Query( $args ); ?>

                                <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                                    <div class="post feature-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <?php the_post_thumbnail( 'home-slider-2', array('class' => 'img-responsive')); ?>
                                            </div>
                                            <div class="catagory health"><span><a href="#">Gastronoticias</a></span></div>
                                        </div>
                                        <div class="post-content">                              
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> <?php the_time( get_option( 'date_format' ) ); ?> </a></li>
                                                    <?php setPostViews(get_the_ID()); ?>
                                                    <li class="views"><i class="fa fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></li>
                                                </ul>
                                            </div>
                                            <h2 class="entry-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                        </div>
                                    </div><!--/post--> 
                                <?php endwhile; endif; ?>
                                <?php wp_reset_query(); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">

                                <?php
                                    /**
                                     * The WordPress Query class.
                                     * @link http://codex.wordpress.org/Function_Reference/WP_Query
                                     *
                                     */
                                    $args = array(
                                        
                                        'category_name'    => 'mundodulce',
                                        'posts_per_page'   => 1
                                        
                                    );
                                
                                $query = new WP_Query( $args ); ?>

                                <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                                    <div class="post feature-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <?php the_post_thumbnail( 'home-slider-3', array('class' => 'img-responsive')); ?>
                                            </div>
                                            <div class="catagory technology"><span><a href="#">Mundo dulce</a></span></div>
                                        </div>
                                        <div class="post-content">                              
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> <?php the_time( get_option( 'date_format' ) ); ?> </a></li>
                                                    <?php setPostViews(get_the_ID()); ?>
                                                    <li class="views"><i class="fa fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></li>
                                                </ul>
                                            </div>
                                            <h2 class="entry-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                        </div>
                                    </div><!--/post-->
                                <?php endwhile; endif; ?>
                                <?php wp_reset_query(); ?>
                            </div>
                            <div class="col-sm-4">

                                <?php
                                    /**
                                     * The WordPress Query class.
                                     * @link http://codex.wordpress.org/Function_Reference/WP_Query
                                     *
                                     */
                                    $args = array(
                                        
                                        'category_name'    => 'hoteles',
                                        'posts_per_page'   => 1
                                        
                                    );
                                
                                $query = new WP_Query( $args ); ?>
                                <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

                                    <div class="post feature-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <?php the_post_thumbnail( 'home-slider-3', array('class' => 'img-responsive')); ?>
                                            </div>
                                            <div class="catagory entertainment"><a href="#">Hoteles</a></div>
                                        </div>
                                        <div class="post-content">                              
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> <?php the_time( get_option( 'date_format' ) ); ?> </a></li>
                                                    <?php setPostViews(get_the_ID()); ?>
                                                    <li class="views"><i class="fa fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></li>
                                                </ul>
                                            </div>
                                            <h2 class="entry-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                        </div>
                                    </div><!--/post-->
                                <?php endwhile; endif; ?>
                                <?php wp_reset_query(); ?>
                            </div>
                            <div class="col-sm-4">
                                <?php
                                    /**
                                     * The WordPress Query class.
                                     * @link http://codex.wordpress.org/Function_Reference/WP_Query
                                     *
                                     */
                                    $args = array(
                                        
                                        'category_name'    => 'alimentos-y-sus-beneficios',
                                        'posts_per_page'   => 1
                                        
                                    );
                                
                                $query = new WP_Query( $args ); ?>
                                <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                                    <div class="post feature-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <?php the_post_thumbnail( 'home-slider-3', array('class' => 'img-responsive')); ?>
                                            </div>
                                            <div class="catagory politics"><span><a href="#">Alimentos y sus beneficios</a></span></div>
                                        </div>
                                        <div class="post-content">                              
                                            <div class="entry-meta">
                                                <ul class="list-inline">
                                                    <li class="publish-date"><i class="fa fa-clock-o"></i><a href="#"> <?php the_time( get_option( 'date_format' ) ); ?> </a></li>
                                                    <?php setPostViews(get_the_ID()); ?>
                                                    <li class="views"><i class="fa fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></li>
                                                </ul>
                                            </div>
                                            <h2 class="entry-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                        </div>
                                    </div><!--/post-->
                                <?php endwhile; endif; ?>
                                <?php wp_reset_query(); ?>
                            </div>
                        </div>
                    </div><!--/#content--> 
                    
                    <div class="col-md-3 visible-md visible-lg">
                        <div class="add featured-add">
                            <iframe id='a94bfdd4' name='a94bfdd4' src='http://banners.comerydivertirse.com/www/delivery/afr.php?zoneid=10&amp;cb=5545' frameborder='0' scrolling='no' width='262' height='588'><a href='http://banners.comerydivertirse.com/www/delivery/ck.php?n=a126f94c&amp;cb=5544' target='_blank'><img src='http://banners.comerydivertirse.com/www/delivery/avw.php?zoneid=10&amp;cb=5655&amp;n=a126f94c' border='0' alt='' /></a></iframe>
                        </div>
                    </div><!--/#add--> 
                </div>
            </div><!--/.section-->

            <div class="section add inner-add hidden-xs hidden-sm">

                <iframe id='a02ad0c8' name='a02ad0c8' src='http://banners.comerydivertirse.com/www/delivery/afr.php?zoneid=4&amp;cb=65652' frameborder='0' scrolling='no' width='1140' height='87'><a href='http://banners.comerydivertirse.com/www/delivery/ck.php?n=a3b9ea0d&amp;cb=454545' target='_blank'><img src='http://banners.comerydivertirse.com/www/delivery/avw.php?zoneid=4&amp;cb=45465&amp;n=a3b9ea0d' border='0' alt='' /></a></iframe>

            </div>

            <div class="section">               
                <div class="latest-news-wrapper">
                    <h1 class="section-title"><span>Actualidad</span></h1>    
                    <div id="latest-news">
                        <?php
                            /**
                             * The WordPress Query class.
                             * @link http://codex.wordpress.org/Function_Reference/WP_Query
                             *
                             */
                            $args = array(
                                
                                'category_name'    => 'actualidad',
                                'posts_per_page'   => 12
                                
                            );
                        
                        $query = new WP_Query( $args ); ?>

                        <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

                            <div class="post medium-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <?php the_post_thumbnail( 'home-carousel', array('class' => 'img-responsive')); ?>
                                    </div>
                                </div>
                                <div class="post-content">                              
                                    <div class="entry-meta">
                                        <ul class="list-inline">
                                            <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?php the_time( get_option( 'date_format' ) ); ?> </a></li>
                                            <?php setPostViews(get_the_ID()); ?>
                                            <li class="views"><i class="fa fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></li>
                                        </ul>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                </div>
                            </div><!--/post-->

                        <?php endwhile; endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div><!--/.latest-news-wrapper-->
            </div><!--/.section-->

            <div class="section">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <div id="site-content">
                            <div class="row">
                                <div class="col-md-8 col-sm-6">
                                    <div class="left-content">
                                        
                                        <div class="section lifestyle-section">
                                            <h1 class="section-title">La Cava</h1>
                                            <div class="row">
                                                <?php
                                                    $calugacount = 0;
                                                    /**
                                                     * The WordPress Query class.
                                                     * @link http://codex.wordpress.org/Function_Reference/WP_Query
                                                     *
                                                     */
                                                    $args = array(
                                                        
                                                        'category_name'    => 'la-cava',
                                                        'posts_per_page'   => 4
                                                        
                                                    );
                                                
                                                $query = new WP_Query( $args ); ?>
                                                <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $calugacount++; ?>
                                                
                                                    <div class="col-md-6">
                                                        <?php if($calugacount == 1 OR $calugacount == 2) : ?>
                                                            <div class="post medium-post">
                                                                <div class="entry-header">
                                                                    <div class="entry-thumbnail">
                                                                        <?php the_post_thumbnail( 'home-slider-3', array('class' => 'img-responsive')); ?>
                                                                    </div>
                                                                </div>
                                                                <div class="post-content">                              
                                                                    <div class="entry-meta">
                                                                        <ul class="list-inline">
                                                                            <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?php the_time( get_option( 'date_format' ) ); ?> </a></li>
                                                                            <?php setPostViews(get_the_ID()); ?>
                                                                            <li class="views"><i class="fa fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></li>
                                                                        </ul>
                                                                    </div>
                                                                    <h2 class="entry-title">
                                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                                    </h2>
                                                                </div>
                                                            </div><!--/post--> 
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php if($calugacount == 3 OR $calugacount == 4) : ?>
                                                            <div class="post medium-post">
                                                                <div class="entry-header">
                                                                    <div class="entry-thumbnail">
                                                                        <?php the_post_thumbnail( 'home-slider-3', array('class' => 'img-responsive')); ?>
                                                                    </div>
                                                                </div>
                                                                <div class="post-content">                              
                                                                    <div class="entry-meta">
                                                                        <ul class="list-inline">
                                                                            <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?php the_time( get_option( 'date_format' ) ); ?> </a></li>
                                                                            <?php setPostViews(get_the_ID()); ?>
                                                                            <li class="views"><i class="fa fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></li>
                                                                        </ul>
                                                                    </div>
                                                                    <h2 class="entry-title">
                                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                                    </h2>
                                                                </div>
                                                            </div><!--/post-->
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endwhile; endif; ?>
                                                <?php wp_reset_query(); ?>
                                            </div>
                                        </div><!--/.lifestyle -->
                                        
                                        <div class="section add inner-add">
                                            <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/post/add/add4.jpg" alt="" /></a>
                                        </div><!--/.section add-->
                                        
                                        <div class="section lifestyle-section">
                                            <h1 class="section-title">Restaurantes</h1>
                                            <div class="row">
                                                <?php
                                                    $calugacount2 = 0;
                                                    /**
                                                     * The WordPress Query class.
                                                     * @link http://codex.wordpress.org/Function_Reference/WP_Query
                                                     *
                                                     */
                                                    $args = array(
                                                        
                                                        'category_name'    => 'restaurantes',
                                                        'posts_per_page'   => 4
                                                        
                                                    );
                                                
                                                $query = new WP_Query( $args ); ?>
                                                <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $calugacount2++; ?>
                                                    <div class="col-md-6">
                                                        <?php if($calugacount2 == 1 OR $calugacount2 == 2) : ?>
                                                            <div class="post medium-post">
                                                                <div class="entry-header">
                                                                    <div class="entry-thumbnail">
                                                                        <?php the_post_thumbnail( 'home-slider-3', array('class' => 'img-responsive')); ?>
                                                                    </div>
                                                                </div>
                                                                <div class="post-content">                              
                                                                    <div class="entry-meta">
                                                                        <ul class="list-inline">
                                                                            <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?php the_time( get_option( 'date_format' ) ); ?> </a></li>
                                                                            <?php setPostViews(get_the_ID()); ?>
                                                                            <li class="views"><i class="fa fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></li>
                                                                        </ul>
                                                                    </div>
                                                                    <h2 class="entry-title">
                                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                                    </h2>
                                                                </div>
                                                            </div><!--/post-->
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <?php if($calugacount2 == 3 OR $calugacount2 == 4) : ?>
                                                            <div class="post medium-post">
                                                                <div class="entry-header">
                                                                    <div class="entry-thumbnail">
                                                                        <?php the_post_thumbnail( 'home-slider-3', array('class' => 'img-responsive')); ?>
                                                                    </div>
                                                                </div>
                                                                <div class="post-content">                              
                                                                    <div class="entry-meta">
                                                                        <ul class="list-inline">
                                                                            <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?php the_time( get_option( 'date_format' ) ); ?> </a></li>
                                                                            <?php setPostViews(get_the_ID()); ?>
                                                                            <li class="views"><i class="fa fa-eye"></i><?php echo getPostViews(get_the_ID()); ?></li>
                                                                        </ul>
                                                                    </div>
                                                                    <h2 class="entry-title">
                                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                                    </h2>
                                                                </div>
                                                            </div><!--/post-->
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endwhile; endif; ?>
                                                <?php wp_reset_query(); ?>
                                            </div>
                                        </div><!--/.lifestyle -->
                                        
                                    </div><!--/.left-content-->
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="middle-content">

                                        <div class="section">
                                            <div class="add inner-add">
                                                <!--/*
                                                  *
                                                  * Revive Adserver iFrame Tag
                                                  * - Generated with Revive Adserver v3.2.4
                                                  *
                                                  */-->

                                                <iframe id='aa599c9c' name='aa599c9c' src='http://banners.comerydivertirse.com/www/delivery/afr.php?zoneid=13&amp;cb=3552' frameborder='0' scrolling='no' width='262' height='293'><a href='http://banners.comerydivertirse.com/www/delivery/ck.php?n=ad8a19a0&amp;cb=5545' target='_blank'><img src='http://banners.comerydivertirse.com/www/delivery/avw.php?zoneid=13&amp;cb=6988&amp;n=ad8a19a0' border='0' alt='' /></a></iframe>
                                            </div>
                                        </div>
                                        
                                        <div class="section video-section">
                                            <h1 class="section-title title">Videos</h1>
                                            
                                            <div class="video-post-list">
                                                <ul>
                                                    <?php
                                                        /**
                                                         * The WordPress Query class.
                                                         * @link http://codex.wordpress.org/Function_Reference/WP_Query
                                                         *
                                                         */
                                                        $args = array(
                                                            
                                                            'post_type'    => 'video',
                                                            'posts_per_page'   => 8
                                                            
                                                        );
                                                    
                                                    $query = new WP_Query( $args ); ?>

                                                    <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                                                    <li>
                                                        <div class="post video-post small-post">
                                                            <div class="entry-header">
                                                                <div class="entry-thumbnail embed-responsive embed-responsive-16by9">
                                                                    <?php $video = get_post_meta( get_the_id(), 'RECIPE_META_video_id', true ); ?>
                                                                    <a href="<?php the_permalink(); ?>">
                                                                        <img src="http://img.youtube.com/vi/<?php echo $video; ?>/hqdefault.jpg" class="img-responsive">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="post-content">                              
                                                                <h2 class="entry-title">
                                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                                </h2>
                                                            </div>
                                                        </div><!--/post-->
                                                    </li>
                                                    <?php endwhile; endif; ?>
                                                    <?php wp_reset_query(); ?>
                                                </ul>
                                            </div>                                          
                                        </div> <!-- /.video-section -->

                                        <div class="section">
                                            <div class="add">
                                                <a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/post/add/add6.jpg" alt="" /></a>
                                            </div>
                                        </div><!--/#widget--> 
                                    </div><!--/.middle-content-->
                                </div>
                            </div>
                        </div><!--/#site-content-->
                    </div>
                    <!-- Sidebar -->
                    <?php get_sidebar(); ?>
                </div>              
            </div><!--/.section-->

<?php
get_footer();
