<?php 

/* Template Name: Video Center */

get_header(); ?>

<div id="internal_main" class="one_col">
	
	<h1 class="one_col_title"><?php the_title();?></h1><!-- one_col_title -->
	
	<span class="title_line"></span><!-- title_line -->
	
	<div class="video_center_wrapper">
		
		
		<?php if(get_field('videos')): ?>
		 
			<?php while(has_sub_field('videos')): ?>
		 
				<div class="single_video">
			
					<a href="//www.youtube-nocookie.com/embed/<?php the_sub_field( 'youtube_video_id' ); ?>?rel=0&amp;showinfo=0;autoplay=1" data-lity >
				
					<div class="thumbnail">
				
						<img alt="youtube-nfFKJxtlXoM" src="https://img.youtube.com/vi/<?php the_sub_field( 'youtube_video_id' ); ?>/mqdefault.jpg"/>
				
						<div class="vc_overlay">
						
							<?php echo file_get_contents("wp-content/themes/clifford/images/play-button.svg"); ?>
					
						</div><!-- vc_overlay -->
				
					</div><!-- thumbnail -->
				
					<span class="vc_title"><?php the_sub_field( 'video_title' ); ?></span><!-- vc_title -->
				
				</a>
			
			</div><!-- single_video -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
				
	</div><!-- video_center_wrapper -->
		
</div><!-- internal_main -->

<?php get_footer(); ?>
