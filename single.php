<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hokutodestiny
 */

get_header(); ?>
<div class="post-list-page"> 
			<div class="col-md-9 col-sm-8 col-xs-12">
			<div class="breadcumb-area"> 
				<p>You are <span>here:</span>    <a href="<?php echo home_url(); ?>"> Home</a> <a href="<?php echo km_get_blog_posts_page_url(); ?>">- News</a><?php wp_title(' '); ?></p>
			</div>
			
			<?php while(have_posts()):  the_post(); ?>
			  <div class="grid-item-list"> 
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
						<div class="col-lg-6 col-md-6 col-sm-12"> 
							
						</div> 
						<div class="col-lg-6 col-md-6 col-sm-12"> 
							<div class="comment-blog"> 
									<?php comments_popup_link(' <span> 0 </span> ',' <span> 1 </span> ','<span> % </span>',' ion-chatbubble-working',' '); ?>
							</div>
							<p>Posted by <span><?php the_author(); ?> </span> in <a href="<?php echo km_get_blog_posts_page_url(); ?>">News </a></p>
						</div>
					</div>
						<?php the_content(); ?>
						
				
					
					<div class="tags"> 
						<?php the_tags('Tags: ',' '); ?>
					</div>
					
				</div>
			  </div>
			  <?php endwhile; ?>
			  
			  <div class="fb-plugin-commnet"> 
				<?php comments_template(); ?>
			  </div>
			
			</div>
			<aside class="col-md-3 col-sm-4 col-xs-12 ">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>
</div>
	
	<?php get_footer(); ?>