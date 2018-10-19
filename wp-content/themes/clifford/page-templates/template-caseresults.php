<?php 

/* Template Name: Case Results */

get_header(); ?>

<div id="internal_main" class="one_col">
	
	<h1 class="one_col_title"><?php the_title();?></h1><!-- one_col_title -->
	
	<span class="title_line"></span><!-- title_line -->
	
	<div class="case_results_wrapper">
		
		<div class="cr_filter_wrapper">
			
			<div class="filter_inner">
				
				<span class="fitler_title">Filter by Category</span><!-- fitler_title -->
				
				<div class="input_wrapper">
					
					<div class="input_parent">
						
						<span class="input_placeholder">Auto Accidents</span><!-- input_placeholder -->
						
					</div><!-- input_parent -->
					
				</div><!-- input_wrapper -->
				
			</div><!-- filter_inner -->
			
			<div class="filter_inner">
				
				<span class="fitler_title">Filter by Attorney</span><!-- fitler_title -->
				
				<div class="input_wrapper">
					
					<div class="input_parent">
						
						<span class="input_placeholder">Auto Accidents</span><!-- input_placeholder -->
						
					</div><!-- input_parent -->
					
				</div><!-- input_wrapper -->
				
			</div><!-- filter_inner -->
			
		</div><!-- cr_filter_wrapper -->
		
	</div><!-- case_results_wrapper -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
