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

		<div class="container">
			<div class="page-breadcrumbs">
				<h1 class="section-title title"><?php the_title(); ?></h1>
			</div>
			<div class="contact-us contact-page-two">
				<div class="message-box">
					<h1 class="section-title title"><?php _e('Envíenos un mensaje llenando el siguiente formulario'); ?></h1>
					<?php echo do_shortcode('[contact-form-7 id="3320" title="Contacto" html_id="comment-form"]'); ?>
				</div>
			</div><!-- contact-us -->
		</div><!--/.container-->

	<?php endwhile; endif; ?>

<?php
get_footer();
