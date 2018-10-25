<section id="section_two">
	
	<div class="sec_two_top">
		
		<span class="sec_two_top_title"><?php the_field( 'section_two_header' ); ?></span><!-- sec_two_top_title -->
		
		<a class="view_results desktop" href="<?php the_field( 'view_results_page_link' ); ?>">View All Results</a><!-- view_results -->
		
	</div><!-- sec_two_top -->
	
	
	<div class="cr_wrapper">
		
		<div class="cr_slider">
			
			
			<?php if(get_field('section_two_case_results')): ?>
			 
				<?php while(has_sub_field('section_two_case_results')): ?>
			 
					<div class="cr_single_slide">
				
						<span class="amount"><?php the_sub_field( 'amount' ); ?></span><!-- amount -->
				
						<span class="amount_type"><?php the_sub_field( 'amount_type' ); ?></span><!-- amount_type -->
				
						<span class="cr_title"><?php the_sub_field( 'title' ); ?></span><!-- cr_title -->
				
					</div><!-- cr_single_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
			
		</div><!-- cr_slider -->
		
	</div><!-- cr_wrapper -->
	
	<div class="sec_two_bottom">
	
	<a class="view_results tablet" href="<?php the_permalink(54);?>">View All Results</a><!-- mobile_view_results -->
	
	</div><!-- sec_two_bottom -->
	
	
</section><!-- section_two -->