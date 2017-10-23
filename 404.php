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
 */

 get_header(); ?>
			
		<div class="post-list-page"> 
			<div class="col-md-9 col-sm-8 col-xs-12">
			 

		

			
			<div class="page-content">
				
				<h2 class="error-404">404 Error | Page Not Found</h2>
				
			</div>


				
			</div>
			<aside class="col-md-3 col-sm-4 col-xs-12 ">
				<?php get_sidebar(); ?>
			</aside>
			</div>
		</div>
	</div>
		 
	<?php get_footer(); ?>