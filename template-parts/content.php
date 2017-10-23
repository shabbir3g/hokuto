<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hokutodestiny
 */

?>


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
		<div class="col-lg-6 col-md-6 col-sm-12"> 
		
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12"> 
			<div class="comment-blog"> 
				<?php comments_popup_link(' 0 ',' 1 ',' % ','ion-chatbubble-working',' '); ?>
			</div>
			<p>Posted by <span><?php the_author(); ?> </span> in <a href="<?php echo km_get_blog_posts_page_url(); ?>"><?php echo wp_title(' '); ?> </a></p>
		</div>
	</div>
	
	<?php the_excerpt(); ?>
	
	
	
</div>
</article>
