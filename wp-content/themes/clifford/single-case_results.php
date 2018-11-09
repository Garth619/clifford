<?php get_header(); ?>


<?php get_template_part( 'internal', 'banner' ); ?>


<div id="internal_main" class="two_col">
	
	<?php get_sidebar(); ?>
	
	<div class="container content">
		
		<div class="single_cr_post">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		
		
			<h1><?php the_field( 'case_results_amount' ); ?></h1>
			
			<?php $patheterms = get_the_terms( get_the_ID(), 'practice_area' );
							
							if ( $patheterms && ! is_wp_error( $patheterms ) ) {
								
								$pa_terms = array();
								$pa_title = array();
							
								foreach ( $patheterms as $term ) {
        
								 // get practice area slugs
								 
								 $pa_terms[] = $term->slug;
								 
								 // get practice area names
								 
								 $pa_title[] = $term->name;
    					
    					}
    					
					} 
					
					
					$pa_data = "<span class='cr_type'>" . implode('</span><span class="cr_type">', $pa_title) . "</span>";
					
					
					// get all attorney terms
					
					$atttheterms = get_the_terms( get_the_ID(), 'attorney' );
							
							if ( $atttheterms && ! is_wp_error( $atttheterms ) ) {
								
								$att_terms = array();
								$att_title = array();
							
								foreach ( $atttheterms as $term ) {
        
								 // get atorney slugs
								 
								 $att_terms[] = $term->slug;
								 
								 // gt attorny names
								 
								 $att_title[] = $term->name;
    					
    					}
    					
    			}
    			
    			
    			$att_data = "<li>" . implode('</li><li>', $att_title) . "</li>";
					
					
					?>
					
					
					
					
					
					
					
					<?php printf($pa_data);?>
					
					<span class="single_cr_att_title">Attorneys</span><!-- single_cr_att_title -->

						<ul class="att_list">
					
							<?php printf($att_data);?>
	
						</ul><!-- att_list -->					
					
				
		
			<span class="single_cr_date"><?php the_field( 'cr_date' ); ?></span>
		
			<span class="single_cr_desc"><?php the_field( 'cr_description' ); ?></span><!-- single_cr_desc -->

		
	<?php endwhile; // end of loop ?>

<?php endif; ?>


<div class="cr_pagination">

<?php

$prev_post = get_previous_post();

if($prev_post) {
   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
   echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class=" "> <strong>&laquo; '. $prev_title . '</strong></a>' . "\n";
}

$next_post = get_next_post();

if($next_post) {
   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
   echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class=" "><strong>'. $next_title . ' &raquo;</strong></a>' . "\n";
}

?>

	</div><!-- single_cr_post -->

</div><!-- cr_pagination -->
		
	</div><!-- container -->
	
	
	
</div><!-- internal_main -->

<?php get_footer(); ?>





				
				
				




