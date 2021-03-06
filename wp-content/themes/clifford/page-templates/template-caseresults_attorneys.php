<?php 

/* Template Name: Case Results Attorney */

get_header(); 

?>


<div id="internal_main" class="one_col" style="background: #f4f4f0;">
	
	<h1 class="one_col_title attorney_page"><?php echo $attorneyname;?>'s<br/> Case Results</h1><!-- one_col_title -->
	
	<span class="title_line"></span><!-- title_line -->
	
<!-- 	<span class="search_other">Search Other Case Results</span> --><!-- search_other -->
	
	<div class="cr_filter_wrapper">
			
			<div class="filter_inner pa_filter">
				
				<span class="fitler_title">Filter by Category</span><!-- fitler_title -->
				
				<div class="input_wrapper">
					
					<div class="input_inner">
					
					<div class="input_parent">
						
						<span class="input_placeholder">- Select -</span><!-- input_placeholder -->
						
					</div><!-- input_parent -->
					
					<ul class="input_list">
						
						
						<?php $termspa = get_terms(array(
							
							'taxonomy' => 'practice_area'));
							
							if ( ! empty( $termspa ) && ! is_wp_error( $termspa ) ){
							
								foreach ( $termspa as $term ) {
							
									echo '<li data-pa="' . $term->slug . '">' . $term->name . '</li>';
    						
    						}
							
						} ?>
		
						
					</ul><!-- input_list -->
					
					</div><!-- input_inner -->
					
					
					
				</div><!-- input_wrapper -->
				
			</div><!-- filter_inner -->
			
			<div class="filter_inner att_filter">
				
				<span class="fitler_title">Filter by Attorney</span><!-- fitler_title -->
				
				<div class="input_wrapper">
					
					<div class="input_inner">
					
					<div class="input_parent">
						
						<span class="input_placeholder">- Select -</span><!-- input_placeholder -->
						
					</div><!-- input_parent -->
					
					<ul class="input_list">
						
						<?php $termsatt = get_terms(array(
							
							'taxonomy' => 'attorney'));
							
							if ( ! empty( $termsatt ) && ! is_wp_error( $termsatt ) ){
							
								foreach ( $termsatt as $term ) {
							
									echo '<li data-att="' . $term->slug . '">' . $term->name . '</li>';
    						
    						}
							
						} ?>
						
					</ul><!-- input_list -->
					
					</div><!-- input_inner -->
						
					
					
				</div><!-- input_wrapper -->
				
			</div><!-- filter_inner -->
			
		</div><!-- cr_filter_wrapper -->
		
		<a class="filter_submit">Submit</a><!-- filter_submit -->
		
		<span class="clear">Clear Selection</span>
	
	<div class="case_results_wrapper">
		
			
			<div class='exist_message'><span>Sorry this match was not found, please try again</span></div>
			
		
			<?php 
				
				// cpt loop
				
				$mymain_query = new WP_Query( array('post_type' => 'case_results','posts_per_page' => -1) ); 
				
				while($mymain_query->have_posts()) : $mymain_query->the_post();  
				
				
					// get all practice area terms
				
					$patheterms = get_the_terms( get_the_ID(), 'practice_area' );
							
							if ( $patheterms && ! is_wp_error( $patheterms ) ) {
								
								$pa_terms = array();
								$pa_title = array();
							
								foreach ( $patheterms as $term ) {
        
								 // get practice area slugs
								 
								 $pa_terms[] = $term->slug;
								 
								 // get practice area titles
								 
								 $pa_title[] = $term->name;
    					
    					}
    					
					}  
					
					// get all attorney terms
					
					$atttheterms = get_the_terms( get_the_ID(), 'attorney' );
							
							if ( $atttheterms && ! is_wp_error( $atttheterms ) ) {
								
								$att_terms = array();
								$att_title = array();
							
								foreach ( $atttheterms as $term ) {
        
								 // get atorney slugs
								 
								 $att_terms[] = $term->slug;
								 
								 // gt attorny titles
								 
								 $att_title[] = $term->name;
    					
    					}
    					
    			}
    			
    			// merges practice areas and attorney arrays, I need them separate orginally bc the values in these loops are also being echoed as separate pa and attorney titles further below
					
					$term_merge = array_merge($pa_terms,$att_terms);
					
					
					// turns new merged array in a string with spaces in between each slug value. this is printed as classes for each case result
						
					$term_string = implode(' ', $term_merge);
					
					
					// takes pracrice area array from above and turns it into a string with span tags wrapped around each value. printed onto case result type title
					
					$pa_data = "<span class='cr_type'>" . implode('</span><span class="cr_type">', $pa_title) . "</span>";
					
					
					// takes attorney array from above and turns it into a string with li tags wrapped around each value. printed onto case result attorney list
					
					$att_data = "<li>" . implode('</li><li>', $att_title) . "</li>";
					
					
				?>
					

        <div id="single_cr" class="single_case_result <?php echo $term_string; ?>">
			
					<div class="single_cr_inner">
				
						<span class="amount"><?php the_field( 'case_results_amount' ); ?></span><!-- amount -->
						
						<?php printf($pa_data);?>

						<ul class="att_list">
					
							<li>Attorney(s)</li>
							
							<?php printf($att_data);?>
	
						</ul><!-- att_list -->
				
					</div><!-- single_cr_inner -->
			
					<div class="single_cr_hover">
				
						<div class="cr_hover_inner">
				
							<span class="cr_date"><?php the_field( 'cr_date' ); ?></span><!-- cr_date -->
							
							<?php $excerpt = wp_trim_words( get_field('cr_description' ), $num_words = 12, $more = '...' ); ?>
				
							<span class="cr_description"><?php echo $excerpt; ?></span><!-- cr_description -->
							
							<a class="cr_readmore" href="<?php the_permalink();?>">Read More</a>
				
						</div><!-- cr_hover_inner -->
				
					</div><!-- single_cr_hover -->
			
				</div><!-- single_case_result -->
        
        
        <?php endwhile; ?>
      <?php wp_reset_postdata(); // reset the query ?>

		
	</div><!-- case_results_wrapper -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
