<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hokutodestiny
 
 Template Name: Left Sidebar
 
 */

 get_header(); ?>
			
		<div class="post-list-page"> 
			<aside class="col-md-3 col-sm-4 col-xs-12 ">
				<?php get_sidebar(); ?>
			</aside>
			<div class="col-md-9 col-sm-8 col-xs-12">
			 

		<?php
		if ( have_posts() ) :

			
			

			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

			
			<div class="page-content">
				
				<?php the_content(); ?>
				
			</div>

		<?php 	endwhile;

			


		endif; ?>

				
			</div>
			
			</div>
		</div>
	</div>
		 
	<?php get_footer(); ?>