<?php 

/* Template Name: About */

get_header(); ?>


<div id="internal_main" class="one_col about_wrapper">
	
	<div class="about_page_col">
	
		<h1 class="one_col_title"><?php the_title();?></h1><!-- one_col_title -->
	
		<span class="title_line"></span><!-- title_line -->
		
		<div class="about_page_content content">
			
			
			<div class="sec_three_image mobile">
				
				<a href="//www.youtube-nocookie.com/embed/<?php the_sub_field( 'ap_youtube_id' ); ?>?rel=0&amp;showinfo=0;autoplay=1" data-lity >
				
				<?php $ap_video_thumbnail = get_field( 'ap_video_thumbnail' ); ?>

				<img data-src="<?php echo $ap_video_thumbnail['url']; ?>" alt="<?php echo $ap_video_thumbnail['alt']; ?>" />
				
				<div class="video_wrapper">
					
					<?php echo file_get_contents("wp-content/themes/clifford/images/play-button.svg"); ?>
					
					<div class="video_inner">
						
						<span class="line"></span><!-- line -->
						
						<div class="video_box">
							
							<img data-src="<?php bloginfo('template_directory');?>/images/logo-mark.svg"/>
							
							<span><?php the_field( 'ap_video_description' ); ?></span>
							
						</div><!-- video_box -->
						
					</div><!-- video_inner -->
					
				</div><!-- video_wrapper -->
				
				</a>
				
			</div><!-- sec_three_image -->

			
			
			<?php the_field( 'about_left_column' ); ?>


			
		</div><!-- about_page_content -->
	
	</div><!-- about_page_col -->
	
	<div class="about_page_col">
		
		<div class="about_page_content content">
		
		<div class="sec_three_image desktop">
			
				<a href="//www.youtube-nocookie.com/embed/<?php the_field( 'ap_youtube_id' ); ?>?rel=0&amp;showinfo=0;autoplay=1" data-lity >

				<img data-src="<?php echo $ap_video_thumbnail['url']; ?>" alt="<?php echo $ap_video_thumbnail['alt']; ?>"/>
				
				<div class="video_wrapper">
					
					<?php echo file_get_contents("wp-content/themes/clifford/images/play-button.svg"); ?>
					
					<div class="video_inner">
						
						<span class="line"></span><!-- line -->
						
						<div class="video_box">
							
							<img data-src="<?php bloginfo('template_directory');?>/images/logo-mark.svg"/>
							
							<span><?php the_field( 'ap_video_description' ); ?></span>
							
						</div><!-- video_box -->
						
					</div><!-- video_inner -->
					
				</div><!-- video_wrapper -->
				
				</a>
				
			</div><!-- sec_three_image -->
		
		
		<?php the_field( 'about_right_column' ); ?>

		</div><!-- about_page_content -->
		
	</div><!-- about_page_col -->
	
	
			
</div><!-- internal_main -->


<div class="about_page_awards_wrapper">
	
	<span class="ap_awards_title"><?php the_field( 'about_awards_title' ); ?></span><!-- ap_awards_title -->
	
	<div class="about_slider_wrapper">
		
		<div class="ap_buttton_left ap_button">
			
			<?php echo file_get_contents("wp-content/themes/clifford/images/icon-arrow.svg"); ?>
			
		</div><!-- ap_buttton_left -->
		
		<div class="ap_slider">
			
			<?php if(get_field('about_awards_slider')): ?>
			 
				<?php while(has_sub_field('about_awards_slider')): ?>
			 
					<div class="ap_single_slide">
				
						<?php $awards_logos = get_sub_field( 'awards_logos' ); ?>
		
						<img src="<?php echo $awards_logos['url']; ?>" alt="<?php echo $awards_logos['alt']; ?>" />
	
					</div><!-- ap_single_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- ap_slider -->
		
		<div class="ap_buttton_right ap_button">
			
			<?php echo file_get_contents("wp-content/themes/clifford/images/icon-arrow.svg"); ?>
			
		</div><!-- ap_buttton_right -->
		
	</div><!-- about_slider_wrapper -->
	
	
</div><!-- about_page_awards_wrapper -->

<?php get_footer(); ?>
