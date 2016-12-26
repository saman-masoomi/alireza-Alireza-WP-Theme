<?php /* Template Name: Category Page */ ?>
<?php get_header();?> 
	<div class="container">
		<div class="row index">
		
<?php $image1 = get_field('cat-image-1'); 
 $image2 = get_field('cat-image-2'); 
 $image3 = get_field('cat-image-3'); 
 $image4 = get_field('cat-image-4'); ?>
        
			<div class="category-container">
				<ul class="category">
					<li class="category-item">
						<div class="category-icon">
							<img src="<?php echo $image1['url']; ?>" alt="<?php the_field('cat-1'); ?>">
						</div>
						<h1 class="category-title"><?php the_field('cat-1'); ?></h1>
					</li>
					<li class="category-item">
						<div class="category-icon">
							<img src="<?php echo $image2['url']; ?>" alt="<?php the_field('cat-2'); ?>">
						</div>
						<h1 class="category-title"><?php the_field('cat-2'); ?></h1>
					</li>
					<li class="category-item">
						<div class="category-icon">
							<img src="<?php echo $image3['url']; ?>" alt="<?php the_field('cat-3'); ?>">
						</div>
						<h1 class="category-title"><?php the_field('cat-3'); ?></h1>
					</li>
					<li class="category-item">
						<div class="category-icon">
							<img src="<?php echo $image4['url']; ?>" alt="<?php the_field('cat-4'); ?>">
						</div>
						<h1 class="category-title"><?php the_field('cat-4'); ?></h1>
					</li>
				</ul>	
			</div>
            <?php get_sidebar();?> 
		</div>
		
	</div>

<?php get_footer();?> 