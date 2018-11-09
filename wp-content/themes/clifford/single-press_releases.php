<?php get_header(); ?>


<?php get_template_part( 'internal', 'banner' ); ?>


<div id="internal_main" class="two_col">
	
	<?php get_sidebar(); ?>
	
	<div class="container content">
		
		<h1><?php the_title();?></h1>
		
		<div class="meta_data">
		
		
			<span>
				Posted On
				<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span><!-- date -->
				
			
				<?php echo get_the_category_list();?>
		
				</span>
		
		</div><!-- meta_data -->
			
		<div class="blog_content">
			
			<?php the_content();?>
			
			<?php edit_post_link( __( 'Edit'), '', '' ); ?>
	
		</div><!-- blog_content -->

		
	</div><!-- container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>





				
				
				




