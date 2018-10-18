<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div class="meta_data">
		
		
			<span>
				Posted On
				<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span><!-- date -->
				to
			
				<?php echo get_the_category_list();?>
		
				</span>
		
		</div><!-- meta_data -->
			
		<div class="blog_content">
			
			<?php the_content();?>
			
			<?php edit_post_link( __( 'Edit'), '', '' ); ?>
	
		</div><!-- blog_content -->
	

<?php endwhile; // end of loop ?>

<?php endif; ?>