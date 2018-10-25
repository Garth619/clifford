<section id="section_five">

<div class="sec_five_inner_wrapper">
	
	<div class="sec_five_intro">
		
		<span class="sec_five_title"><?php the_field( 'section_five_header' ); ?></span><!-- sec_five_title -->
		
		<div class="sec_five_intro_content content">
			
			<?php the_field( 'section_five_intro' ); ?>
			
		</div><!-- sec_five_intro_content -->
		
	</div><!-- sec_five_intro -->
	
	<div class="section_five_inner_content content">
		
		<?php the_field( 'section_five_content' ); ?>
		
	</div><!-- section_five_inner -->
	
	</div><!-- sec_five_inner_wrapper -->
	
	<div class="sec_five_bottom">
		
		
		<span class="sec_five_slider_title"><?php the_field( 'excellence_header' ); ?></span><!-- sec_five_slider_title -->
		
		<div id="sec_five_slider_trigger" class="sec_five_slide_wrapper">
			
			<div class="sec_five_button sec_five_left">
				
				<?php echo file_get_contents("wp-content/themes/clifford/images/icon-arrow.svg"); ?>
				
			</div><!-- sec_five_left -->
			
			<div class="sec_five_slider">
				
				<?php if(get_field('excellence_slider')): ?>
				 
					<?php while(has_sub_field('excellence_slider')): ?>
				 
						<div class="sec_five_single_slide">
							
							<?php $image = get_sub_field( 'image' ); ?>
					
							<img data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
						</div><!-- sec_five_single_slide -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- sec_five_slider -->
				
							
			<div class="sec_five_button sec_five_right">
				
				<?php echo file_get_contents("wp-content/themes/clifford/images/icon-arrow.svg"); ?>
				
			</div><!-- sec_five_right -->
			
		</div><!-- sec_five_slide_wrapper -->
		
		
	</div><!-- sec_five_bottom -->
	
</section><!-- section_five -->