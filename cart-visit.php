/* Template Name: Cart Visit Template */
            
<?php get_header();?> 
	<div class="container">
		<div class="row single-index">
			<div class="single-content">
				<div class="gallery hidden-xs">
				<div class="stage">
				
				
<?php
if ( get_query_var('paged') ) $paged = get_query_var('paged');  
if ( get_query_var('page') ) $paged = get_query_var('page');
$query = new WP_Query( array( 'post_type' => 'cart-visit', 'posts_per_page' => 20, 'orderby'=> title, 'order' => 'ASC' ) );
if ( $query->have_posts() ) :
while ( $query->have_posts() ) : $query->the_post(); ?>	
			  <?php $image1 = get_field('cart-visit'); ?>
				  <ul class="flyer">
	<li class="flyer__page1 flyer__page--6" style="background-image: url('<?php echo $image1['url']; ?>');background-position: center top;"></li>
	<li class="flyer__page1 flyer__page--5" style="background-image: url('<?php echo $image1['url']; ?>');background-position: center bottom;"></li>		

				  </ul>
				  <?php endwhile; wp_reset_postdata();
 
else : ?>
	
	<p>There are no cats at the café at the moment :(</p>
 
<?php endif; ?>
				</div>
				</div>
				
				<div class="gallery visible-xs">
					<ul>
						<li><img src="images/catalog-front.jpg" alt=""></li>
						<li><img src="images/catalog-front.jpg" alt=""></li>
						<li><img src="images/catalog-front.jpg" alt=""></li>

					</ul>
					
				</div>
			</div>
		
			<div class="single-category-container">
				<ul class="category">
					<li class="single-category-item">
						<div class="single-category-icon">
							<img src="images/gallery-category-photography.png" alt=""  hover="samfade()">
						</div>
						<h1 class="single-category-title">PHOTOGRAPHY</h1>
					</li>
					<li class="single-category-item">
						<div class="single-category-icon">
							<img src="images/gallery-category-digital-design.png" class="shadow-radial" alt="">
						</div>
						<h1 class="single-category-title">Digital Design</h1>
					</li>
					<li class="single-category-item">
						<div class="single-category-icon">
							<img src="images/gallery-category-print-design.png" alt="">
						</div>
						<h1 class="single-category-title">Print design</h1>
					</li>
					<li class="single-category-item">
						<div class="single-category-icon">
							<img src="images/gallery-category-logo-design.png" alt="">
						</div>
						<h1 class="single-category-title">logo</h1>
					</li>
				</ul>
				
		</div>
		
	</div>
</div>

		<footer class="hidden-xs hidden-sm">
			<p><?php echo get_option('twitterid') ?></p>
			<img src="<?php bloginfo('template_url');?>/images/imSam.png" alt="Developer">
		</footer>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_url');?>/js/gallery3d.js"></script>

		
	 <?php wp_footer();?> 
	</body>
</html>