<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Decatur Blueprint
 */

get_header(); ?>

	<div id="primary" class="content-area sidebar-content">
		<main id="main" class="site-main" role="main"><?php

			get_template_part( 'content', 'sidebarmenu' );

			while ( have_posts() ) : the_post();

				get_template_part( 'content', 'page' );

			endwhile; // end of the loop.

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
?>