<?php 

/* Template Name: Testimonials */

get_header(); ?>

<div id="internal_main" class="one_col">
	
	<h1 class="one_col_title"><?php the_title();?></h1><!-- one_col_title -->
	
	<span class="title_line"></span><!-- title_line -->
	
	<div class="testimonial_wrapper">
		
		
		<?php if(get_field('testimonials_page')): ?>
		 
			<?php while(has_sub_field('testimonials_page')): ?>
		 
				
		    <div class="single_test_wrapper">
			
					<div class="test_col">
				
						<div class="test_inner">
						
							<img src="<?php bloginfo('template_directory');?>/images/quote.jpg"/>
					
							<span class="test_quote"><?php the_sub_field( 'testimonial_quote' ); ?></span><!-- test_quote -->
					
					</div><!-- test_inner -->
				
				</div><!-- test_left -->
			
				<div class="test_col">
				
					<div class="test_inner">
					
						<?php echo file_get_contents("wp-content/themes/clifford/images/icon-stars.svg"); ?>
					
						<span class="test_description"><?php the_sub_field( 'testimonial_description' ); ?></span><!-- test_description -->
					
						<span class="test_name"><?php the_sub_field( 'name' ); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php the_sub_field( 'location' ); ?></span><!-- test_name -->
					
					</div><!-- test_inner -->
				
				</div><!-- test_right -->
			
			</div><!-- single_test_wrapper -->
			
			
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
		
	</div><!-- testimonial_wrapper -->
		
</div><!-- internal_main -->

<?php get_footer(); ?>
