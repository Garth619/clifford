	<div class="sidebar_wrapper att_sidebar">
		
		
		<div class="att_image_wrapper desktop">
		
			<?php $attorney_image = get_field( 'attorney_image' ); ?>
			
			<?php if ( $attorney_image ) : ?>

			<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
			
			<?php else:?>
			
			<img alt="Placeholder Image" src="<?php bloginfo('template_directory');?>/images/placeholder.png"/>
			
			<?php endif;?>

		
		</div><!-- att_image_wrapper -->
		
		<div class="att_sidebar_info">
			
			<span class="sidebar_att_title desktop"><?php the_field( 'position' ); ?></span><!-- sidebar_att_title -->
			
			<a class="att_results_button desktop" href="">View <?php the_field( 'first_name' ); ?>'s Results</a>
			
			<?php if(get_field('award_logos')):?>
			
			<span class="awards_title">Awards & Recognition</span><!-- awards_title -->
			
			<div class="att_bio_awards">
				
				<?php if(get_field('award_logos')): ?>
				 
					<?php while(has_sub_field('award_logos')): ?>
				 
						<div class="bio_awards_single">
					
							<?php $awards_logo = get_sub_field( 'awards_logo' ); ?>
		
							<img src="<?php echo $awards_logo['url']; ?>" alt="<?php echo $awards_logo['alt']; ?>" />
		
						</div><!-- bio_awards_single -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- att_bio_awards -->
			
			<?php endif;?>
			
			<?php if(get_field('youtube_videos')):?>
			
			<span class="att_video_title">Videos</span><!-- att_video_title -->
			
			<div class="att_video_slider">
				
				<?php if(get_field('youtube_videos')): ?>
				 
					<?php while(has_sub_field('youtube_videos')): ?>
				 
						<div class="att_video_single_slide">
					
							<div class="att_yt">
						
								<a href="//www.youtube-nocookie.com/embed/<?php the_sub_field( 'youtube_id' ); ?>?rel=0&amp;showinfo=0;autoplay=1" data-lity >
							
								<img alt="youtube-<?php the_sub_field( 'youtube_id' ); ?>" src="https://img.youtube.com/vi/<?php the_sub_field( 'youtube_id' ); ?>/mqdefault.jpg"/>
							
								<div class="att_video_overlay">
								
									<?php echo file_get_contents("wp-content/themes/clifford/images/play-button.svg"); ?>
								
								</div><!-- att_video_overlay -->
							
						</a>
						
					</div><!-- att_yt -->
					
					</div><!-- att_video_single_slide -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>

			
			</div><!-- att_video_slider -->
			
			<?php endif;?>
			
		</div><!-- att_sidebar_info -->
		
	</div><!-- sidebar_wrapper -->