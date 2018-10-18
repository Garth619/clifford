<?php 
	
	get_header(); ?>


<?php get_template_part( 'internal', 'banner' ); ?>


<div id="internal_main" class="two_col">
	
	<?php get_sidebar('blog'); ?>
	
	<div class="container content">
		
		<h1>Our Blog</h1>
		
		<?php get_template_part( 'loop', 'index' ); ?>
		
	</div><!-- container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
