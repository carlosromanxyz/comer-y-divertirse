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

		

	<?php endwhile; endif; ?>

<?php
get_footer();
