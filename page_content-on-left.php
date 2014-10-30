<?php
/**
 * Template Name: Content On Left
 *  
 * Description: Page template with content on left side
 *
 * @package Decatur Blueprint
 */

get_header(); ?>

	<div id="primary" class="content-area content-on-left">
		<main id="main" class="site-main" role="main"><?php

			while ( have_posts() ) : the_post();

				?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<div class="header-wrap">
							<div class="sidemenu-logo"><?php

								echo get_page_icon( get_the_title() );

							?></div><?php

							the_title( '<h1 class="entry-title">', '</h1>' );
						?></div><!-- .header-wrap -->
					</header><!-- .entry-header -->

					<div class="entry-content"><?php
						
						the_content();
						
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'decatur-blueprint' ),
							'after'  => '</div>',
						) );
					
					?></div><!-- .entry-content -->

					<footer class="entry-footer"><?php

						edit_post_link( __( 'Edit', 'decatur-blueprint' ), '<span class="edit-link">', '</span>' );
					
					?></footer><!-- .entry-footer -->
				</article><!-- #post-## --><?php

			endwhile; // loop

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer(); ?>