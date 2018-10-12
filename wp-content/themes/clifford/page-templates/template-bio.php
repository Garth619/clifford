<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main" class="two_col">
	
		<?php get_sidebar('bio'); ?>
		
		<div class="container content">
		
			<h1><?php the_title();?></h1>
		
			<?php get_template_part( 'loop', 'page' ); ?>
		
		</div><!-- container -->
		
</div><!-- internal_main -->



					 
					 	
<?php get_footer(); ?>
