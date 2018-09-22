<?php
/**
 * Single
 *
 * Template for displaying all posts.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/
 * @link https://wphierarchy.com/
 *
 * @package WordPress
 */
get_header();

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();

			the_title( '<h1 class="entry-title">', '</h1>' );
			the_content();

		endwhile; // have_posts()
	endif; // have_posts()

get_footer();
