<?php get_header();?> 
			<div class="container">
			<div class="row index">
				<div class="index-image">
					<img src="<?php echo get_option('index-image') ?>" class="tilt-effect visible-md visible-lg" alt="">
					<img src="<?php echo get_option('index-image') ?>" class="visible-xs visible-sm" alt="">
				</div>
				<div class="index-content">
					<div id="logo" class="play visible-xs visible-sm"></div>
					<h1 class="animation"><?php echo get_option('index-title-1') ?></h1>
					<audio src="http://www.soundjay.com/mechanical/camera-shutter-click-08.mp3"></audio>
					<div id="shutter"></div>

					<h2><?php echo get_option('index-title-2') ?></h2>

					<a href="http://localhost/alireza/category/" ?><button class="work-button"><span><?php echo get_option('button-text') ?></span></button></a>
					<div id="logo" class="play hidden-sm hidden-xs"></div>
				</div>
				
				<?php get_sidebar();?> 
			</div>
		</div>
		
<?php get_footer();?> 