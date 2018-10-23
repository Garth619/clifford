<?php get_header(); ?>


<?php get_template_part( 'internal', 'banner' ); ?>


<div id="internal_main" class="two_col">
	
	<?php get_sidebar(); ?>
	
	<div class="container content">
		
		<h1><?php the_field( 'case_results_amount' ); ?></h1>
		
		<span><?php the_field( 'cr_date' ); ?></span><br/>
		
		
		<?php // var_dump( $cr_practice_areas_ids ); ?>
		<?php // var_dump( $cr_attorneys_ids ); ?>

		<?php 
		
		$terms = get_field('cr_practice_areas');
		
		if( $terms ): ?>
		
			<ul>
		
			<?php foreach( $terms as $term ): ?>
		
				<h2><?php echo $term->name; ?></h2>
				
		
			<?php endforeach; ?>
		
			</ul>
		
		<?php endif; ?>
		
		
		
		<?php 
		
		$termstwo = get_field('cr_attorneys');
		
		if( $termstwo ): ?>
		
			<ul>
		
			<?php foreach( $termstwo as $term ): ?>
		
				<h2><?php echo $term->name; ?></h2>
				
		
			<?php endforeach; ?>
		
			</ul>
		
		<?php endif; ?>
		
	<?php the_field( 'cr_description' ); ?>

		
	
		
	</div><!-- container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>





				
				
				




