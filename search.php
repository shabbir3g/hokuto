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

			
			

			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

			
			<article class="grid-item-list"> 
<div class="blog-top"> 
	<div class="blog-image"> 
	<a class="image-blog" href="<?php echo get_the_post_thumbnail_url(); ?>"><?php the_post_thumbnail(); ?></a>
	</div>
	<div class="blog-title"> 
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
	</div>
	<div class="meta-date"> 
		<h4><?php the_time('d'); ?></h4>
		<h6><?php the_time('m'); ?></h6>
	</div>
</div>
<div class="blog-details"> 
	<div class="blog-top-meta"> 
		<div class="col-lg-7 col-md-7 col-sm-12"> 
		
			<div class="entry-content"></div>
		
				<!--facebook news feed for home page -->
			<?php // echo  do_shortcode('[custom-facebook-feed]'); ?>
			<!--<ul>
				<li><a href="#"><i class="ion-social-facebook"></i> 241</a></li>
				<li><a href="#"><i class="ion-social-twitter"></i></a></li>
				<li><a href="#"><i class="ion-social-googleplus"></i> 0</a></li>
				<li><a href="#"><i class="ion-social-pinterest"></i> 241</a></li>
			</ul> -->
		</div>
		<div class="col-lg-5 col-md-5 col-sm-12 text-right"> 
			<div class="comment-blog"> 
				<?php comments_popup_link(' 0 ',' 1 ',' % ','ion-chatbubble-working',' '); ?>
			</div>
			<p><a href="<?php echo km_get_blog_posts_page_url(); ?>"><?php echo wp_title(' '); ?> </a></p>
		</div>
	</div>
	<p>
		<?php echo wp_trim_words(get_the_content(),66,'<div class="read-more"> 
		<a href="'.get_the_permalink().'">Read More</a>
	</div>'); ?>
		
	</p>
	
	
	
</div>
</article>

		<?php 	endwhile;

			else: 
			
			echo "<h2 class='not-found'>No Search Result Found</h2>";


		endif; ?>

				
			</div>
			<aside class="col-md-3 col-sm-4 col-xs-12 ">
				<?php get_sidebar(); ?>
			</aside>
			</div>
		</div>
	</div>
		 
	<?php get_footer(); ?>