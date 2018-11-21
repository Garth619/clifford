<section id="section_three">
	
	<div class="sec_three_image mobile">

		<a href="//www.youtube-nocookie.com/embed/<?php the_field( 'section_three_youtube_id' ); ?>?rel=0&amp;showinfo=0;autoplay=1" data-lity >		
			
			<?php $section_three_video_image = get_field( 'section_three_video_image' ); ?>
			
			<img class="mobile" data-src="<?php echo $section_three_video_image['url']; ?>" alt="<?php echo $section_three_video_image['alt']; ?>" />	
			
				
				<div class="video_wrapper">
					
					<?php echo file_get_contents("wp-content/themes/clifford/images/play-button.svg"); ?>
					
						<div class="video_inner">
						
							<span class="line"></span><!-- line -->
						
							<div class="video_box">
							
								<img data-src="<?php bloginfo('template_directory');?>/images/logo-mark.svg"/>
							
								<span><?php the_field( 'section_three_video_description' ); ?></span>
							
							</div><!-- video_box -->
						
						</div><!-- video_inner -->
					
					</div><!-- video_wrapper -->
						
				</a>
					
			</div><!-- sec_three_image -->
	
	
	<div class="sec_three_inner">
		
		<div class="sec_three_left">
			
			<h1>Chicago Personal Injury Attorneys</h1>
			
			<div class="laptop_layout">
				
				<div class="laptop_layout_inner">
			
					<div class="accolades">
						
						<div class="accolades_desktop_image">
				
							<img class="dekstop" data-src="/wp-content/uploads/2018/11/bestlawyers-2019.png" alt="Best Lawyers"/>
					
						</div><!-- accolades_desktop_image -->
				
					<div class="accolades_content">
					
						<span class="teeup"><?php the_field( 'section_three_tee_up' ); ?> </span><!-- teeup -->
					
						<div class="accolades_laptop_layout">
							
							<img class="laptop" data-src="/wp-content/uploads/2018/11/bestlawyers-2019.png" alt="Best Lawyers"/>
						
							<div class="accolades_laptop_inner_layout">
							
								<span class="question"><?php the_field( 'section_three_question' ); ?></span><!-- question -->
					
								<span class="answer"><?php the_field( 'section_three_answer' ); ?></span><!-- answer -->
							
							</div><!-- accolades_laptop_inner_layout -->
						
						</div><!-- accolades_laptop_layout -->
					
					</div><!-- accolades_content -->
				
					</div><!-- accolades -->
			
					<div class="sec_three_content">
			
						<?php the_field( 'section_three_description' ); ?>
			
					</div><!-- sec_three_content -->
		
				</div><!-- laptop_layout_inner -->
				
				<div class="laptop_right">
		
					<div class="sec_three_image laptop">
						
						<a href="//www.youtube-nocookie.com/embed/<?php the_field( 'section_three_youtube_id' ); ?>?rel=0&amp;showinfo=0;autoplay=1" data-lity >
							
						<img data-src="<?php echo $section_three_video_image['url']; ?>" alt="<?php echo $section_three_video_image['alt']; ?>" />	
				
						<div class="video_wrapper">
					
							<?php echo file_get_contents("wp-content/themes/clifford/images/play-button.svg"); ?>
					
							<div class="video_inner">
						
								<span class="line"></span><!-- line -->
						
								<div class="video_box">
							
									<img data-src="<?php bloginfo('template_directory');?>/images/logo-mark.svg"/>
							
									<span><?php the_field( 'section_three_video_description' ); ?></span>
							
								</div><!-- video_box -->
						
							</div><!-- video_inner -->
					
						</div><!-- video_wrapper -->
						
						</a>
				
					</div><!-- sec_three_image -->
			
					</div><!-- laptop_right -->
		
				</div><!-- laptop_layout -->
			
		</div><!-- sec_three_left -->
		
		<div class="sec_three_right">
			
			<div class="sec_three_image desktop">
				
				<a href="//www.youtube-nocookie.com/embed/<?php the_field( 'section_three_youtube_id' ); ?>?rel=0&amp;showinfo=0;autoplay=1" data-lity >
					
				<img data-src="<?php echo $section_three_video_image['url']; ?>" alt="<?php echo $section_three_video_image['alt']; ?>" />
				
				<div class="video_wrapper">
					
					<?php echo file_get_contents("wp-content/themes/clifford/images/play-button.svg"); ?>
					
					<div class="video_inner">
						
						<span class="line"></span><!-- line -->
						
						<div class="video_box">
							
							<img data-src="<?php bloginfo('template_directory');?>/images/logo-mark.svg"/>
							
							<span><?php the_field( 'section_three_video_description' ); ?></span>
							
						</div><!-- video_box -->
						
					</div><!-- video_inner -->
					
				</div><!-- video_wrapper -->
				
				</a>
				
			</div><!-- sec_three_image -->
			
		</div><!-- sec_three_right -->

	</div><!-- sec_three_inner -->
	
	<span class="as_seen">As Seen On</span><!-- as_seen -->
	
	<div id="sec_three_press_trigger" class="sec_three_press">
		
		<div class="press_button press_left">
			
			<?php echo file_get_contents("wp-content/themes/clifford/images/icon-arrow.svg"); ?>
			
		</div><!-- press_button -->
		
		<div class="press_slider">
			
			<?php if(get_field('section_three_press_logos')): ?>
			 
				<?php while(has_sub_field('section_three_press_logos')): ?>
			 
					<div class="press_single_slide">
						
						<?php $image = get_sub_field( 'image' ); ?>
				
						<img data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				
					</div><!-- press_single_slide -->
			
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
						
		</div><!-- press_slider -->
		
		<div class="press_button press_right">
			
			<?php echo file_get_contents("wp-content/themes/clifford/images/icon-arrow.svg"); ?>
			
		</div><!-- press_button -->
		
	</div><!-- sec_three_press -->
	
	<div class="sec_three_bottom_content content">
		
		<?php the_field( 'section_three_content' ); ?>
		
	</div><!-- sec_three_bottom_content -->
	
</section><!-- section_three -->