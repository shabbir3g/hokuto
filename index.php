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
			 

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<div class="breadcumb-area"> 
				<p>You are <span>here:</span>    <a href="<?php echo home_url(); ?>"> Home</a> <a href="<?php echo km_get_blog_posts_page_url(); ?>"> <?php wp_title(' - '); ?></a></p>
			  </div>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

				<div class="post-pagination"> 
				
				<?php the_posts_pagination(array(
							'screen_reader_text' => ' ',
							'prev_text' => __( 'PREVIOUS PAGE', 'hokutodestiny' ),
							'next_text' => __( 'NEXT PAGE', 'hokutodestiny' ),
							'type'		=> 'list'
				)); ?>
						
				  </div>
				</div>
				<aside class="col-md-3 col-sm-4 col-xs-12 ">
					<?php get_sidebar(); ?>
				</aside>
			</div>
		</div>
	</div>
		 
	<?php get_footer(); ?>