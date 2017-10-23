<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hokutodestiny
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<?php wp_head(); ?>
  </head>
  <body>
    <header class="header-area"> 
		<nav class="navbar navbar-default primary-menu">
		  <div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu" aria-expanded="false">
				<span class="icon-bar"><span class="inner"></span></span>
				<span class="icon-bar"><span class="inner"></span></span>
				<span class="icon-bar"><span class="inner"></span></span>
			  </button>
			  <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"> 
			  <?php 
				$logo = get_field('logo_upload', 'options');

				if($logo): ?>
			  <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>" /></a>
			  <?php endif; ?>
						</a>
			  
			 
						
			  
			  
			  
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="navbar-collapse collapse" id="primary-menu">
			<div class="nav navbar-nav navbar-right">
			
			
			
			<div class="language-selector"> 
				<?php echo do_shortcode('[gtranslate]'); ?>
			</div>
				
			  </div>
			  <?php wp_nav_menu(array(
				'theme_location'		=> 'primary-menu',
				'menu_class'		=> 'nav navbar-nav main-menus navbar-right',
				'fallback_cb'		=> 'default_primary_menu_for_hokutodestiny',
			  )); ?>
			  
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		
		<?php $visible = get_field('secondary_menu_visibility', 'options'); 
		
		
		
		
		if($visible == 'hide'): ?>
		
		<nav class="navbar navbar-default navbar-bottom" style="display: none;">
		
		<?php endif; 
		
		if($visible == 'show'): ?>
		
		<nav class="navbar navbar-default navbar-bottom" style="display: block;">
		
		<?php endif; ?>
		
		
		
		  <div class="container">

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class=" navbar-collapse" id="secondary-menu">
			<div class="right-side-icon navbar-right"> 
				<div class="navbar-icon">
				
				<!-- ami -->
				
        <div class="form">
            <form class="form-search ngen-search-form" action="<?php echo home_url(); ?>" method="get">
                <input type="text" name="s" id="search-input" class="form-search-input" placeholder="Search for names..." dir="ltr">
               
				<a class="form-search-submit" id="search-trigger" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG/search_icon.png" alt="" /></a>
				
				<a class="person same-icon" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG/profile_icon.png" alt="" /></a>
            </form>
			
        </div>
    
				
				
					
				</div>
				  
			  </div>
			  
			   <?php wp_nav_menu(array(
				'theme_location'		=> 'secondary-menu',
				'menu_class'		=> 'nav navbar-nav',
				'fallback_cb'		=> 'default_secondary_menu_for_hokutodestiny',
			  )); ?>
			  
			 
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		
		<?php if(is_front_page()): ?>
		
		
		
		
	<?php $bg1 = get_field('home_page_banner', 'options'); 

		if($bg1): ?>
		
		<?php echo putRevSlider($bg1); ?>
		
	<?php endif; ?>
		
		<?php else:  ?>
		
		<?php $bg2 = get_field('page_banner', 'options'); 

		if($bg2): ?>

		<div class="banner-area-2" style="background-image: url(<?php echo $bg2['url']; ?>);"> 
		
		<?php endif; ?>
			
		</div>
		
		
		<?php endif; ?>
		
		
		
		
	</header>
	<div id="content" class="site-content">
		<div class="container">
			<div class="members-area"> 
				<ul class="member-menu">
				    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG/1983.png" alt="" /><h6>1983</h6></a> </li>
				    	<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG/1984.png" alt="" /><h6>1984</h6></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG/1986.png" alt="" /><h6>1986</h6></a> 
					
					
					
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a> 
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
								  </ul>
							</li>
							<li><a href="#">One more separated link</a></li>
						  </ul>
					
					
					</li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG/2001.png" alt="" /><h6>2001</h6></a> 
						 <ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a> 
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
								  </ul>
							</li>
							<li><a href="#">One more separated link</a></li>
						  </ul>
					</li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG/2003.png" alt="" /><h6>2003</h6></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG/2006.png" alt="" /><h6>2006</h6></a></li>
					<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/IMG/201x.png" alt="" /><h6>201X</h6></a></li>
				
				</ul>
			</div>
			<div class="twitter-area"> 
				<div class="row"> 
					<div class="col-md-8"> 
						<p>
						
						<?php echo do_shortcode('[custom-twitter-feeds]');  ?>
					
						
						</p>
					</div>
					<div class="col-md-4 text-right">
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
					</div>
				</div>
			</div>