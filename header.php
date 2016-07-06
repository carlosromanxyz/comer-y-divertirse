<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Comer_&_Divertirse
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#8dc63f" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--CSS-->
    <link href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory') ?>/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory') ?>/css/magnific-popup.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory') ?>/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory') ?>/css/subscribe-better.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory') ?>/css/main.css" rel="stylesheet">
	<link id="preset" rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/presets/preset3.css">
	<link href="<?php bloginfo('template_directory') ?>/css/responsive.css" rel="stylesheet">

	<!--Google Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>
	
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Facebook -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- // Facebook -->
	
	<div id="main-wrapper" class="homepage-two">
		<div class="topbar">
			<div class="container">
				<div id="topbar-right">		
					<div id="weather"></div>
					<div class="searchNlogin">
						<ul>
							<li class="search-icon"><i class="fa fa-search"></i></li>
						</ul>
						<?php get_search_form(); ?>
					</div><!-- searchNlogin -->
				</div>
			</div>
		</div>
		<div id="navigation">
			<div class="navbar" role="banner">
				<div class="container">
					<div class="top-add">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img class="main-logo img-responsive" src="<?php bloginfo('template_directory') ?>/images/presets/preset1/logo.png" alt="<?php bloginfo('name'); ?>" width="360">
							</a>
						</div> 
						<div class="navbar-right hidden-xs">
							<!--/*
							  *
							  * Revive Adserver iFrame Tag
							  * - Generated with Revive Adserver v3.2.4
							  *
							  */-->

							<iframe id='a736edfa' name='a736edfa' src='http://banners.comerydivertirse.com/www/delivery/afr.php?zoneid=1' frameborder='0' scrolling='no' width='728' height='90'><a href='http://banners.comerydivertirse.com/www/delivery/ck.php?n=a21222f0' target='_blank'><img src='http://banners.comerydivertirse.com/www/delivery/avw.php?zoneid=1&amp;n=a21222f0' border='0' alt='' /></a></iframe>
						</div>
					</div>
				</div> 
				<div id="menubar">
					<div class="container">
						<nav id="mainmenu" class="navbar-left collapse navbar-collapse"> 
							<ul class="nav navbar-nav">                       
								<?php    
									/**
									* Displays a navigation menu
									* @param array $args Arguments
									*/
									$args = array(
										'theme_location' => 'primary',
										'menu' => '',
										'container' => '',
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
							</ul> 									
						</nav>					
					</div>
				</div><!--/#navigation--> 
			</div><!--/#navigation--> 
		</div><!--/#navigation-->

		<div class="container">
			
			<div id="breaking-news" class="hidden-xs">
				<span><?php _e('Lo último', 'comerydivertirse'); ?></span>
				<div class="breaking-news-scroll">
					<ul>
						<?php
							/**
							 * The WordPress Query class.
							 * @link http://codex.wordpress.org/Function_Reference/WP_Query
							 *
							 */
							$args = array(
								
								//Pagination Parameters
								'posts_per_page'         => 10,
								
							);
						
						$query = new WP_Query( $args ); ?>
						<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
							<li>
								<i class="fa fa-angle-double-right"></i>
								<a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
							</li>
						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
					</ul>
				</div>
			</div><!--#breaking-news-->
	