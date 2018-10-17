<?php
	
	/* Template Name: Contact */
	

get_header(); ?>

<div id="internal_main" class="one_col">
	
	<h1 class="one_col_title"><?php the_title();?></h1><!-- one_col_title -->
	
	<span class="title_line"></span><!-- title_line -->
	
	<div class="contact_wrapper">
		
		<div class="contact_col">
			
			<a class="contact_page_phone" href="">
				
				<span>Toll Free</span>
				<span><?php the_field( 'firm_toll_free','option'); ?></span>
				
			</a><!-- contact_page_phone -->
			
			<a class="contact_page_phone" href="">
				
				<span>Phone</span>
				<span><?php the_field( 'firm_phone','option'); ?></span>
				
			</a><!-- contact_page_phone -->
			
		</div><!-- contact_col -->
		
		<div class="contact_col">
			
			<img class="firm_img" alt="" src="<?php bloginfo('template_directory');?>/images/logo-mobile.svg"/>
			
			<span class="contact_page_address"><?php the_field( 'firm_street_address','option'); ?></span><!-- contact_page_address -->
			
			<a class="cp_get_directions" href="<?php the_field( 'firm_directions_link','option'); ?>" target="_blank">Get Directions</a><!-- cp_get_directions -->
			
		</div><!-- contact_col -->
		
		<div class="contact_col">
			
			<div class="cp_social_media">
						
						<a class="fb" href="<?php the_field( 'facebook_link','option'); ?>" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-fb.svg"); ?>
							
						</a><!-- fb -->
						
						<a class="twitter" href="<?php the_field( 'twitter_link','option'); ?>" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-t.svg"); ?>
							
						</a><!-- twitter -->
						
						<a class="youtube" href="<?php the_field( 'youtube_link','option'); ?>" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-yt.svg"); ?>
							
						</a><!-- youtube -->
						
						<a class="google" href="<?php the_field( 'google_plus_link','option'); ?>" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-g.svg"); ?>
							
						</a><!-- google -->
						
						<a class="insta" href="<?php the_field( 'instagram','option'); ?>" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-insta.svg"); ?>
							
						</a><!-- insta -->
						
						<a class="linkedin" href="<?php the_field( 'linked_in_link','option'); ?>" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-in.svg"); ?>
							
						</a><!-- linkedin -->
						
					</div><!-- cp_social_media -->
			
		</div><!-- contact_col -->
		
	</div><!-- contact_wrapper -->
	
</div><!-- internal_main -->

<div class="iframe_map">
		
		<?php the_field( 'firm_map_embed','option'); ?>

	</div><!-- iframe_map -->

<?php get_footer(); ?>
