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
                                                    <?php $yield = get_post_meta( get_the_id(), 'RECIPE_META_yield', true ); ?>
                                                    <?php $time = get_post_meta( get_the_id(), 'RECIPE_META_prep_time', true ); ?>
                                                    <?php $cook = get_post_meta( get_the_id(), 'RECIPE_META_cook_time', true ); ?>
                                                    <?php $ready = get_post_meta( get_the_id(), 'RECIPE_META_ready_in', true ); ?>
                                                    <div class="recipe-info row">
                                                        <div class="info col-sm-3">
                                                            <span class="name">Porciones</span>
                                                            <p class="data"><?php echo $yield; ?> <?php _e('porciones', 'comerydivertirse'); ?></p>
                                                        </div>
                                                        <div class="info col-sm-3">
                                                            <span class="name">Preparación</span>
                                                            <p class="data"><?php echo $time; ?> <?php _e('minutos', 'comerydivertirse'); ?></p>
                                                        </div>
                                                        <div class="info col-sm-3">
                                                            <span class="name">Coccion</span>
                                                            <p class="data"><?php echo $cook; ?> <?php _e('minutos', 'comerydivertirse'); ?></p>
                                                        </div>
                                                        <div class="info col-sm-3">
                                                            <span class="name">Listo</span>
                                                            <p class="data"><?php echo $ready; ?> <?php _e('minutos', 'comerydivertirse'); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="col-sm-6">
                                                        <?php the_post_thumbnail('post', array('class' => 'alignleft img-responsive')); ?>
                                                    </div>
                                                    <?php the_content(); ?>
                                                    <div class="clear"></div>
                                                    <?php 

                                                    $ingredients = get_post_meta($post->ID, 'RECIPE_META_ingredients');
                                                    $ingredients_count = count($ingredients[0]);


                                                    if (empty($title)) {
                                                        $ingredients_html = '<h2>' . __('Ingredientes', 'comerydivertirse') . '</h2>';
                                                    } else {
                                                        $ingredients_html = '<h2>' . $title . '</h2>';
                                                    }

                                                    if ($ingredients_count >= 1) {
                                                        $ingredients_html .= '<ul class="ingre">';

                                                        foreach ($ingredients as $key) {
                                                            $ingredients_html .= '<li itemprop="ingredients">'.implode('</li><li itemprop="ingredients">', $key). '</li>';
                                                        }

                                                        $ingredients_html .= '</ul>';
                                                    } else {
                                                        $ingredients_html .= '<p>' . __('No se encontraron ingredientes!', 'comerydivertirse') . '</p>';
                                                    }

                                                    echo $ingredients_html; ?>

                                                    <?php 

                                                    $method = get_post_meta($post->ID, 'RECIPE_META_method_steps');
                                                    $method_count = count($method[0]);


                                                    if (empty($title)) {
                                                        $method_html = '<h2>' . __('Instrucciones', 'comerydivertirse') . '</h2>';
                                                    } else {
                                                        $method_html = '<h2>' . $title . '</h2>';
                                                    }

                                                    if ($method_count >= 1) {
                                                        $method_html .= '<ul class="method">';

                                                        foreach ($method as $key) {
                                                            $method_html .= '<li itemprop="method">'.implode('</li><li itemprop="ingredients">', $key). '</li>';
                                                        }

                                                        $method_html .= '</ul>';
                                                    } else {
                                                        $method_html .= '<p>' . __('No se encontraron instrucciones!', 'comerydivertirse') . '</p>';
                                                    }

                                                    echo $method_html; ?>
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
                        </div>
                    </div>
                </div><!--/.col-sm-9 -->    
                
                <?php get_sidebar(); ?>
            </div>              
        </div><!--/.section-->

    <?php endwhile; endif; ?>

<?php
get_footer();
