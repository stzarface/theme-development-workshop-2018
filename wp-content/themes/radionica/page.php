<?php
/**
 * Page
 *
 * Template for displaying all pages.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/
 * @link https://wphierarchy.com/
 *
 * @package WordPress
 */
get_header();

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();

			/**
			 * Get the order of sortable sections
			 * @var array
			 */
			$sections = get_theme_mod( 'sortable_sections', [
				'section-3',
				'section-1',
				'section-4',
				'section-2'
			] );

			foreach ( $sections as $section ) :
				get_template_part( 'template-parts/sortable/' . $section );
			endforeach;

			get_template_part( '/template-parts/entry' );

		endwhile; // have_posts()
	endif; // have_posts()

get_footer();
