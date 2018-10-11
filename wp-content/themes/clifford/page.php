<?php get_header(); ?>

<div class="internal_banner">
	
	<div class="inner_int_banner">
	
	<span class="banner_title">A Tradition of Success</span><!-- banner_title -->
	
	<a class="int_request" href="#consultation">
		
		<span class="int_request_title">request free consultation</span>
		
	</a><!-- int_request -->
	
	</div><!-- inner_int_banner -->
	
</div><!-- internal_header -->


<div id="internal_main" class="two_col">
	
	<?php get_sidebar(); ?>
	
	<div class="container content">
		
		<h1><?php the_title();?></h1>
		
		<?php get_template_part( 'loop', 'page' ); ?>
		
	</div><!-- container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
