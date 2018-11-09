<section id="section_one">
	
		<div class="sec_one_wrapper">
			
			<div class="sec_one_inner">
			
				<span class="sec_one_title"><?php the_field( 'section_one_header' ); ?></span><!-- sec_one_title -->
			
				<a class="request" href="#consultation"><?php the_field( 'request_verbiage' ); ?></a><!-- request -->
				
				<div class="selling_points_wrapper">
					
					<div class="sp_slider">
						
						<?php if(get_field('selling_points_slider')): ?>
						 
							<?php while(has_sub_field('selling_points_slider')): ?>
							
								
								<div class="sp_single_slide">
							
									<span class="sp_title"><?php the_sub_field( 'title' ); ?></span><!-- sp_title -->
							
									<span class="sp_desctiption"><?php the_sub_field( 'description' ); ?></span><!-- sp_desctiption -->
							
								</div><!-- sp_single_slide -->
						
							
							<?php endwhile; ?>
						 
						<?php endif; ?>
						
						
						
					</div><!-- sp_slider -->
					
				</div><!-- selling_points_wrapper -->
			
			</div><!-- sec_one_inner -->
			
		</div><!-- sec_one_internal -->
		
		<?php $section_one_desktop_image = get_field( 'section_one_desktop_image' );
					$section_one_desktop_image_webp = get_field( 'section_one_desktop_image_webp' );
		?>

		<img class="sec_one_bg" data-webp="<?php echo $section_one_desktop_image_webp['url']; ?>" data-jpg="<?php echo $section_one_desktop_image['url']; ?>" alt="<?php echo $section_one_desktop_image['alt']; ?>" />

		
		<?php $section_one_laptop_image = get_field( 'section_one_laptop_image' );
					$section_one_laptop_image_webp = get_field( 'section_one_laptop_image_webp' );
		?>

		<img class="laptop" data-webp="<?php echo $section_one_laptop_image_webp['url']; ?>" data-jpg="<?php echo $section_one_laptop_image['url']; ?>" alt="<?php echo $section_one_laptop_image['alt']; ?>" />

		<?php $section_one_tablet_image = get_field( 'section_one_tablet_image' );
					$section_one_tablet_image_webp = get_field( 'section_one_tablet_image_webp' );
		 ?>
		
		<img class="tablet" data-webp="<?php echo $section_one_tablet_image_webp['url']; ?>" data-jpg="<?php echo $section_one_tablet_image['url']; ?>" alt="<?php echo $section_one_tablet_image['alt']; ?>" />
		
		<?php $section_one_mobile_image = get_field( 'section_one_mobile_image' );
					$section_one_mobile_image_webp = get_field( 'section_one_mobile_image_webp' ); ?>
		
		<img class="mobile" data-webp="<?php echo $section_one_mobile_image_webp['url']; ?>" data-jpg="<?php echo $section_one_mobile_image['url']; ?>" alt="<?php echo $section_one_mobile_image['alt']; ?>" />

</section><!-- section_one -->

