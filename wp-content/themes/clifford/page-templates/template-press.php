<?php 
	
	/* Template Name: Press */
	
	
get_header(); ?>


<?php get_template_part( 'internal', 'banner' ); ?>


<div id="internal_main" class="two_col">
	
	<?php get_sidebar(); ?>
	
	<div class="container content">
		
		<h1>Press</h1>
		
		 <div class="blog_feed">
		
		 <?php 
			 $temp = $wp_query; 
			 $wp_query = null; 
			 $wp_query = new WP_Query(); 
			 $wp_query->query('showposts=10&post_type=press_releases'.'&paged='.$paged); 

			 while ($wp_query->have_posts()) : $wp_query->the_post(); 
		?>

		<div class="blog_posts">
		
			<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		
			<div class="meta_data">
		
		
				<span>
					Posted On
					<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span><!-- date -->
		
				</span>
		
			</div><!-- meta_data -->
			
			<div class="blog_content">
			
				<?php echo wp_trim_words( get_the_content(), 65, '...' );?>
			
				<?php edit_post_link( __( 'Edit'), '', '' ); ?>
	
			</div><!-- blog_content -->
	
			<a class="view_post" href="<?php the_permalink();?>">View Post</a><!-- view_post -->

		</div><!-- blog_posts -->		
	 
		<?php endwhile; ?>

		<nav class="press_pagination">
    	<?php previous_posts_link('&laquo; Newer') ?>
			<?php next_posts_link('Older &raquo;') ?>
		</nav>

		<?php 
			$wp_query = null; 
			$wp_query = $temp;  // Reset
		?>
 
		</div><!-- blog_feed -->
		
	</div><!-- container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
