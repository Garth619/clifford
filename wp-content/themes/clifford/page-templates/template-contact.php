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
				<span>(800) 899-0410</span>
				
			</a><!-- contact_page_phone -->
			
			<a class="contact_page_phone" href="">
				
				<span>Phone</span>
				<span>(312) 899-9090</span>
				
			</a><!-- contact_page_phone -->
			
		</div><!-- contact_col -->
		
		<div class="contact_col">
			
			<img class="firm_img" alt="" src="<?php bloginfo('template_directory');?>/images/logo-mobile.svg"/>
			
			<span class="contact_page_address">120 North LaSalle Street<br/> 31st Floor<br/> Chicago, IL 60602</span><!-- contact_page_address -->
			
			<a class="cp_get_directions" href="">Get Directions</a><!-- cp_get_directions -->
			
		</div><!-- contact_col -->
		
		<div class="contact_col">
			
			<div class="cp_social_media">
						
						<a class="fb" href="" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-fb.svg"); ?>
							
						</a><!-- fb -->
						
						<a class="twitter" href="" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-t.svg"); ?>
							
						</a><!-- twitter -->
						
						<a class="youtube" href="" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-yt.svg"); ?>
							
						</a><!-- youtube -->
						
						<a class="google" href="" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-g.svg"); ?>
							
						</a><!-- google -->
						
						<a class="insta" href="" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-insta.svg"); ?>
							
						</a><!-- insta -->
						
						<a class="linkedin" href="" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-in.svg"); ?>
							
						</a><!-- linkedin -->
						
					</div><!-- cp_social_media -->
			
		</div><!-- contact_col -->
		
	</div><!-- contact_wrapper -->
	
</div><!-- internal_main -->

<div class="iframe_map">
		
		<iframe src="https://snazzymaps.com/embed/106519" width="100%" height="100%" style="border:none;"></iframe>

	</div><!-- iframe_map -->

<?php get_footer(); ?>
