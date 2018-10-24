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
							
									echo '<li data-term="' . $term->slug . '">' . $term->name . '</li>';
    						
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
							
									echo '<li data-term="' . $term->slug . '">' . $term->name . '</li>';
    						
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
			
					
					
					<?php $patheterms = get_the_terms( get_the_ID(), 'practice_area' );
							
							if ( $patheterms && ! is_wp_error( $patheterms ) ) {
								
								$palist = array();
							
								foreach ( $patheterms as $term ) {
        
								 $draught_links[] = $term->slug;
    					
    					}
    					
    					$on_draught = implode(' ',$draught_links);
    					
					} ?>
         
        
        <div class="single_case_result" data-term="<?php printf( $on_draught ); ?>">
			
					<div class="single_cr_inner">
				
						<span class="amount"><?php the_field( 'case_results_amount' ); ?></span><!-- amount -->
						
						
<!--
						<?php $patheterms = get_the_terms( get_the_ID(), 'practice_area' );
							
							if ( $patheterms && ! is_wp_error( $patheterms ) ) {
							
								foreach ( $patheterms as $term ) {
        
								echo '<span class="cr_type">' . $term->name . "</span>";
    					
    					}
                         
							
							} ?>
-->

				
						<ul class="att_list">
					
							<li>Attorney(s)</li>
							
							<?php $atttheterms = get_the_terms( get_the_ID(), 'attorney' );
							
								if ( $atttheterms && ! is_wp_error( $atttheterms ) ) {
								
									foreach ( $atttheterms as $term ) {
        
										echo "<li>" . $term->name . "</li>";
    					
    							}
    						
							} ?>
				
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
