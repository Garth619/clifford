<?php 

/* Template Name: PA Directory */

get_header(); ?>


<div id="internal_main" class="one_col">
	
	<h1 class="one_col_title"><?php the_title();?></h1><!-- one_col_title -->
	
	<span class="title_line"></span><!-- title_line -->
	
	<div class="pa_directory">
		
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
		
	</div><!-- pa_directory -->
		
</div><!-- internal_main -->



<?php get_footer(); ?>
