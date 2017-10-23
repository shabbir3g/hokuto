<?php 
/*
Template Name: Home Page
*/

get_header(); 
$page_id     = get_queried_object_id();




	$page_blog = get_field('home_page_blog',$page_id );

 if($page_blog =='show'):  ?>

<div class="blog-section"> 
	<div class="grid">
		<div class="grid-sizer col-xs-3"></div>
		<div class="grid-top">
		
		
		
			<?php 
			
			
			
			$postblog = new WP_Query(array(
				'post_type'				=> 'post',
				'posts_per_page'		=> 6,
			));
			
			while($postblog->have_posts()): $postblog->the_post();?>
			<div class="grid-item">
			  <!-- add inner element for column content -->
			  <div class="grid-item-content">
				<div class="blog-top"> 
					<div class="blog-image"> 
						<a class="image-blog" href="<?php echo get_the_post_thumbnail_url(); ?>"><?php the_post_thumbnail(); ?></a>
					<div class="blog-title"> 
						<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
					</div>
					</div>
				
					<div class="meta-date"> 
						<h4><?php the_time('d'); ?></h4>
						<h6><?php the_time('m'); ?></h6>
					</div>
				</div>
				<div class="blog-details">

					<?php echo wp_trim_words(get_the_content(),15 ,false); ?>	
						
					
				</div>
				<div class="meta-comment"> 
				
			<!--	<p ><span  class="ion-chatbubble-working" ></span>  <?php // comments_number( '0', '1', '%' );  ?></p> -->
				<?php comments_popup_link('<span>0</span>','<span>1</span>','<span>%</span>',' ion-chatbubble-working',' '); ?>
					
				
					
				</div>
				
			  </div>
			</div>
			<?php endwhile; ?>
			
			
		</div>
  </div>
</div>
<?php endif; ?>


<div class="vfg-area">
<?php
		
	$homevideo =  get_field('home_video', $page_id);


 if($homevideo): ?>
 
<div class="col-md-4"> 
	<div class="video-area"> 
		<h2>Video</h2>
		<div class="embed-responsive embed-responsive-16by9">
		
		
		 <?php echo $homevideo; ?>
		</div>
	</div>
</div>
<?php endif; ?>



<?php
		
$facebookfeed =  get_field('facebook_feed_shortcode', $page_id);


 if($facebookfeed): ?>
<div class="col-md-4"> 
	<div class="facebook-area"> 
		<h2>Facebook feed</h2>
		
		<?php  echo  do_shortcode($facebookfeed); ?>
		
	</div>
</div>

<?php  
endif;

$gallery =  get_field('home_page_gallery',$page_id);

if($gallery):   ?>
<div class="col-md-4"> 
	<div class="gallery-area"> 
		<h2>Gallery</h2>
		<div class="gallery-image">
		
		<ul >
		<?php 
		
		foreach($gallery as $gall): ?>
				
				<li><a href="<?php echo $gall['url']; ?>" class="image-link"><img src="<?php echo $gall['url']; ?>" alt="" /></a></li>
				
		<?php 	endforeach; ?>
		
			
			
			</ul>
			
			<?php $gal_link = get_field('gallery_link',$page_id); ?>
			<?php if($gal_link):  ?>
			<a href="<?php echo $gal_link['url'] ?>"><?php echo $gal_link['title'] ?></a>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>



</div>

<?php 
$singleimage =  get_field('single_image_banner',$page_id);

if($singleimage):   ?>
<div class="add-area"> 
<div class="col-md-12"> 
	
	<?php $imagelink = get_field('single_image_banner_link',$page_id); ?>

	<a href="<?php echo  $imagelink['url']; ?>"><img src="<?php echo $singleimage['url']; ?>" alt="" /></a>
</div>
</div>
<?php endif; ?>

<div class="news-area">




<?php  


$newslatter =  get_field('news_latter_hideshow',$page_id);

if($newslatter == 'show'):   ?>
<div class="col-md-3 col-sm-6 col-xs-12"> 
	<div class="widget newsletter"> 
		<h2 class="widget-title">Newsletter</h2>
		<div class="widget_mc4wp_form_widget">
			<?php echo do_shortcode('[mc4wp_form id="160"]'); ?>
		</div>
		
	</div>
</div>
<?php endif; ?>


<?php  


$reqnews =  get_field('recommended_news',$page_id);

if($reqnews == 'show'):   ?>
<div class="col-md-6 col-sm-6 col-xs-12"> 
	<div class="widget rec-news"> 
		<h2 class="widget-title">Recommended news</h2>
		<div class="total-news"> 
		
		<?php 
		$recomnews = new WP_Query(array(
			'post_type'				=> 'post',
			'posts_per_page'		=> 3,
		));
		
		while($recomnews->have_posts()): $recomnews->the_post(); ?>
			<div class="single-news"> 
				<div class="col-md-6"> 
					<p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a> <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(),3,false); ?></a></p>
				</div>
				<div class="col-md-6 text-right"> 
					<p>Author: <span><?php the_author(); ?></span> <?php the_time('d.m.y') ?></p>
				</div>
			</div>
		<?php endwhile; ?>
			
			
			
			
		</div>
	</div>
</div>
<?php endif; ?>

<?php  


$renquote =  get_field('random_quote',$page_id);

if($renquote):   ?>

<div class="col-md-3 col-sm-6 col-xs-12"> 
	<div class="widget rand-q"> 
		<h2 class="widget-title">Random quote</h2>
		<div class="rand-quote"> 
		<?php   
			foreach($renquote as $quote){
				
				echo "<p><q>".$quote['quote']."</q></p>";
			}?>
			
			<?php $quote_link = get_field('quote_link',$page_id); ?>
			<?php if($quote_link):  ?>
			<p><a href="<?php echo $quote_link['url'] ?>"><?php echo $quote_link['title'] ?></a></p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>


</div>
</div>
</div>

<?php get_footer(); ?>