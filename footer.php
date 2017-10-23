<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hokutodestiny
 */

?>

	<footer class="footer-area"> 
		<div class="container"> 
			<div class="footer-widget"> 
				<div class="widget col-md-6 col-sm-6 col-xs-12"> 
					<div class="footer-widget-left"> 
						<div class="footer-logo"> 
						
						 <a  href="<?php echo esc_url( home_url( '/' ) ); ?>"> 
					  <?php 
						$flogo = get_field('footer_logo', 'options');

						if($flogo): ?>
					  <img src="<?php echo $flogo['url'] ?>" alt="<?php echo $flogo['alt'] ?>" />
					  <?php endif; ?>
					  
					  </a>
						
						
							
							
						</div>
						<div class="footer-ban"> 
						
						<?php $image = get_field('footer_image','options'); 
						$image1 = $image['image_1']['url'];
						$url1 = $image['url_1']['url'];
						
						$image2 = $image['image_2']['url'];
						$url2 = $image['url_2']['url'];
						
						$image3 = $image['image_3']['url'];
						$url3 = $image['url_3']['url'];
						
						$image4 = $image['image_4']['url'];
						$url4 = $image['url_4']['url'];
						
						
						
						
						
						
						
						
							if($image): ?>
							<a href="<?php echo $url1; ?>"><img src="<?php echo $image1; ?>" alt="" /></a>
							<?php endif; ?>
						 <?php	if($image): ?>
							<a href="<?php echo $url2; ?>"><img src="<?php echo $image2; ?>" alt="" /></a>
							<?php endif; ?>
						</div>
						<div class="footer-rext-left"> 
						<?php $ftext = get_field('footer_text','options'); 
						if($ftext): ?>
							<p><?php echo $ftext['footer_text_left'];  ?></p>
						<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="widget col-md-6 col-sm-6 col-xs-12"> 
					<div class="footer-widget-right"> 
						<div class="social-media"> 
						<ul>
							<?php $socialicon = get_field('social_url','options'); 
							if($socialicon): 	?>
							<?php  foreach($socialicon as $forrr): ?>
							<li><a href="<?php echo $forrr['social_url']; ?>"><i class="ion-social-<?php echo $forrr['social_icon']; ?>"></i></a></li>
							<?php endforeach; ?>
							<?php endif; ?>
						</ul>
						</div>
						<div class="footer-ban"> 
							 <?php	if($image): ?>
							<a href="<?php echo $url3; ?>"><img src="<?php echo $image3; ?>" alt="" /></a>
							<?php endif; ?>
							 <?php	if($image): ?>
							<a href="<?php echo $url4; ?>"><img src="<?php echo $image4; ?>" alt="" /></a>
							<?php endif; ?>
						</div>
						<div class="footer-rext-right"> 
							<?php if($ftext): ?>
							<p><?php echo $ftext['footer_text_right'];  ?></p>
						<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-image totop"> 
				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/foooter-img.png" alt="" /></a>
			</div>
		</div>
	</footer>
	
	<?php wp_footer(); ?>
	
  </body>
</html>