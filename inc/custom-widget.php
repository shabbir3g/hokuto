<?php 


class hokutodestiny_gallery_widget extends WP_Widget{


	public function __construct(){

			parent::__construct('hokutodestiny_gallery_widget','Random Images',array(
					'description'		=> 'Random Images sidebar'
				));

	}

	public function widget($first, $second){

		$title = $second['title'];
		$postnum = $second['postnum'];
		$cat = $second['cat'];
		
		?>
		<?php echo $first['before_widget'] ?>
			<?php echo $first['before_title'] ?><?php echo 	$title ; ?><?php echo $first['after_title'] ?>
			<div class="single-rand-image">
				<ul>
				<?php 

          	$ltpost = new WP_Query(array(
          		'post_type'				=> 'post',
          		'posts_per_page'		=> $postnum,
          		'category_name'			=> $cat,
          	));


          	while($ltpost->have_posts()): $ltpost->the_post();  ?>
			
					<li><a class="image-blog" href="<?php echo get_the_post_thumbnail_url(); ?>"><?php the_post_thumbnail(); ?></a></li>
					
			<?php endwhile; ?>
					
					
				</ul>
			</div>
			
		 <?php echo $first['after_widget'] ?>
		 
		 

	<?php 
	}


	public function form($second){ 


		$title = $second['title'];
		$postnum = $second['postnum'];
		$cat = $second['cat'];
		
		?>


		<p> 
			<label for="<?php echo $this->get_field_id('title'); ?>">Title: </label>
			<input class="widefat" type="text" value="<?php echo $title; ?>" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>">
		</p>
		
		<p> 
			<label for="<?php echo $this->get_field_id('cat'); ?>">Category: </label>
			<input placeholder="Input Your Category slug" class="widefat" type="text" value="<?php echo $cat; ?>" id="<?php echo $this->get_field_id('cat'); ?>" name="<?php echo $this->get_field_name('cat'); ?>">
		</p>


		<p><label for="<?php echo $this->get_field_id('postnum'); ?>">Number of image to show:</label>
		<input class="tiny-text" id="<?php echo $this->get_field_id('postnum'); ?>" name="<?php echo $this->get_field_name('postnum'); ?>" step="1" min="1" value="<?php echo $postnum; ?>" size="3" type="number"></p>
		
		
		<?php 


	}




}






add_action('widgets_init',function(){


	register_widget('hokutodestiny_gallery_widget');

});



