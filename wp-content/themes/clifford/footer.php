<footer id="footer_trigger">
	
	<div class="footer_left">
		
		<div class="form">
		
			<span class="large_header">Tell Us About Your Case</span><!-- large_header -->
		
			<span class="small_header">Get your FREE, confidential case consultation today!</span><!-- small_header -->
		
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
			
			<span class="required">*Required Field</span><!-- required -->
			
		</div><!-- form -->
		
	</div><!-- footer_left -->
	
	<div class="footer_right">
		
		<div class="footer_right_inner">
		
			<img class="footer_logo" src="<?php bloginfo('template_directory');?>/images/footer-logo.svg"/><!-- footer_logo -->
			
			<div class="location_wrapper">
				
				<div class="address_wrapper">
					
					<span class="address">120 North LaSalle Street 31st Floor<br/> Chicago, IL 60602 </span><!-- address -->
					
					<a class="get_directions" href="" target="_blank">Get Directions</a><!-- get_directions -->
					
				</div><!-- address_wrapper -->
				
				<div class="phone_social_media">
					
					<div class="footer_phone">
						
						<a class="" href=""><span>Toll Free</span> <span>(800) 899-0410</span></a>
						
						<a class="" href=""><span>Phone</span> <span>(312) 899-9090</span></a>
						
					</div><!-- footer_phone -->
					
					<div class="social_media_wrapper">
						
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
						
					</div><!-- social_media_wrapper -->
					
				</div><!-- phone_social_media -->
				
			</div><!-- location_wrapper -->
		
		</div><!-- footer_right_inner -->
		
	</div><!-- footer_right -->
		
</footer>


<?php wp_footer();?>


</body>
</html>
