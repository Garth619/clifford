<section id="section_four">
	
	<div class="sec_four_top">
		
		<span class="sec_four_title"><?php the_field( 'section_four_header' ); ?></span><!-- sec_four_title -->
		
	</div><!-- sec_four_top -->
	
	<div class="sec_four_bottom">
		
		<div id="sec_four_left_trigger" class="sec_four_left">
			
			<div class="sec_four_inner">
			
				<?php echo file_get_contents("wp-content/themes/clifford/images/quotetwo.svg"); ?>
			
				<span class="test_intro"><?php the_field( 'section_four_quote' ); ?></span><!-- test_intro -->
			
				<img data-src="<?php bloginfo('template_directory');?>/images/test-law-journal-logo.png"/>
			
			</div><!-- sec_four_inner -->
			
			
		</div><!-- sec_four_left -->
		
		<div class="sec_four_right">
			
			<div class="test_slider">
				
				<?php if(get_field('section_four_testimonial')): ?>
				 
					<?php while(has_sub_field('section_four_testimonial')): ?>
				 
						<div class="test_single_slide">
					
							<div class="test_single_slide_inner">
					
							<img data-src="<?php bloginfo('template_directory');?>/images/icon-stars-02.svg"/>
					
							<span class="test_line"></span><!-- test_line -->
					
							<span class="test_description"><?php the_sub_field( 'testimonial_description' ); ?></span><!-- test_description -->
					
							<span class="test_name"><?php the_sub_field( 'name' ); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php the_sub_field( 'social_media_reference' ); ?></span><!-- test_name -->
					
						</div><!-- test_single_slide_inner -->
					
					</div><!-- test_single_slide -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				

				
			</div><!-- test_slider -->
			
			
		</div><!-- sec_four_right -->
		
	</div><!-- sec_four_bottom -->
	
</section><!-- section_four -->