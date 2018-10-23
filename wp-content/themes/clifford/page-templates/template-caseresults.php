<?php 

/* Template Name: Case Results */

get_header(); ?>

<div id="internal_main" class="one_col">
	
	<h1 class="one_col_title"><?php the_title();?></h1><!-- one_col_title -->
	
	<span class="title_line"></span><!-- title_line -->
	
	<div class="cr_filter_wrapper">
			
			<div class="filter_inner">
				
				<span class="fitler_title">Filter by Category</span><!-- fitler_title -->
				
				<div class="input_wrapper">
					
					<div class="input_inner">
					
					<div class="input_parent">
						
						<span class="input_placeholder">Select a Practice Area</span><!-- input_placeholder -->
						
					</div><!-- input_parent -->
					
					<ul class="input_list">
						
						<?php $termspa = get_terms(array(
    'taxonomy' => 'practice_area'));
							
							if ( ! empty( $termspa ) && ! is_wp_error( $termspa ) ){
							
								foreach ( $termspa as $term ) {
							
									echo '<li>' . $term->name . '</li>';
    						}
							
						} ?>
		
						
					</ul><!-- input_list -->
					
					</div><!-- input_inner -->
					
					<span class="clear">Clear Selection</span>
					
				</div><!-- input_wrapper -->
				
			</div><!-- filter_inner -->
			
			<div class="filter_inner">
				
				<span class="fitler_title">Filter by Attorney</span><!-- fitler_title -->
				
				<div class="input_wrapper">
					
					<div class="input_inner">
					
					<div class="input_parent">
						
						<span class="input_placeholder">Select an Attorney</span><!-- input_placeholder -->
						
					</div><!-- input_parent -->
					
					<ul class="input_list">
						
						<?php $termsatt = get_terms(array(
							'taxonomy' => 'attorney'));
							
							if ( ! empty( $termsatt ) && ! is_wp_error( $termsatt ) ){
							
								foreach ( $termsatt as $term ) {
							
									echo '<li>' . $term->name . '</li>';
    						}
							
						} ?>
						
					</ul><!-- input_list -->
					
					</div><!-- input_inner -->
						
					<span class="clear">Clear Selection</span>
					
				</div><!-- input_wrapper -->
				
			</div><!-- filter_inner -->
			
		</div><!-- cr_filter_wrapper -->
		
		<a class="filter_submit">Submit</a><!-- filter_submit -->
	
	<div class="case_results_wrapper">
		
		
			<?php $mymain_query = new WP_Query( array( 'post_type' => array ( 'case_results' )) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
         
        
        <div class="single_case_result">
			
					<div class="single_cr_inner">
				
						<span class="amount"><?php the_field( 'case_results_amount' ); ?></span><!-- amount -->
						
						
						
<!--
						<?php 
		
							$terms = get_field('cr_practice_areas');
		
							if( $terms ): ?>
		
								<ul>
		
									<?php foreach( $terms as $term ): ?>
		
									<span class="cr_type"><?php echo $term->name; ?></span>
				
		
									<?php endforeach; ?>
		
								</ul>
-->
		
						<?php endif; ?>
				
						<ul class="att_list">
					
							<li>Attorney(s)</li>
							
							<?php 
		
								$termstwo = get_field('cr_attorneys');
		
								if( $termstwo ): 
		
									foreach( $termstwo as $term ): ?>
		
									<li><?php echo $term->name; ?></li>
				
									<?php endforeach; ?>
		
								<?php endif; ?>
				
						</ul><!-- att_list -->
				
					</div><!-- single_cr_inner -->
			
					<div class="single_cr_hover">
				
						<div class="cr_hover_inner">
				
							<span class="cr_date"><?php the_field( 'cr_date' ); ?></span><!-- cr_date -->
				
							<span class="cr_description"><?php the_field( 'cr_description' ); ?></span><!-- cr_description -->
				
						</div><!-- cr_hover_inner -->
				
					</div><!-- single_cr_hover -->
			
				</div><!-- single_case_result -->
        
        
        <?php endwhile; ?>
      <?php wp_reset_postdata(); // reset the query ?>

		
	</div><!-- case_results_wrapper -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
