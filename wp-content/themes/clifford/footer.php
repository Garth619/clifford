<footer id="footer_trigger">
	
	<div id="consultation" class="footer_left">
		
		<div class="form">
		
			<span class="large_header"><?php the_field( 'footer_form_header','option'); ?></span><!-- large_header -->
		
			<span class="small_header"><?php the_field( 'footer_form_sub_header','option'); ?></span><!-- small_header -->
		
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
			
			<span class="required">*Required Field</span><!-- required -->
			
		</div><!-- form -->
		
	</div><!-- footer_left -->
	
	<div id="footer_right_trigger" class="footer_right">
		
		
		<?php $footer_desktop_image = get_field( 'footer_desktop_image','option'); ?>

		<img class="footer_bg_image dekstop" data-src="<?php echo $footer_desktop_image['url']; ?>" alt="<?php echo $footer_desktop_image['alt']; ?>" />
		
		<?php $footer_tablet_image = get_field( 'footer_tablet_image','option'); ?>
		
		<img class="footer_bg_image tablet" data-src="<?php echo $footer_tablet_image['url']; ?>" alt="<?php echo $footer_tablet_image['alt']; ?>" />
		
		<?php $footer_mobile_image = get_field( 'footer_mobile_image','option'); ?>
		
		<img class="footer_bg_image mobile" data-src="<?php echo $footer_mobile_image['url']; ?>" alt="<?php echo $footer_mobile_image['alt']; ?>" />
		
		
		<div class="footer_right_inner">
		
			<img class="footer_logo" data-src="<?php bloginfo('template_directory');?>/images/footer-logo.svg"/><!-- footer_logo -->
			
			<div class="location_wrapper">
				
				<div class="address_wrapper">
					
					<span class="address"><?php the_field( 'firm_street_address','option'); ?> </span><!-- address -->
					
					<a class="get_directions" href="<?php the_field( 'firm_directions_link','option'); ?>" target="_blank">Get Directions</a><!-- get_directions -->
					
				</div><!-- address_wrapper -->
				
				<div class="phone_social_media">
					
					<div class="footer_phone">
						
						<a class="" href=""><span>Toll Free</span> <span><?php the_field( 'firm_toll_free','option'); ?></span></a>
						
						<a class="" href=""><span>Phone</span> <span><?php the_field( 'firm_phone','option'); ?></span></a>
						
					</div><!-- footer_phone -->
					
					<div class="social_media_wrapper">
						
						<a class="fb" href="<?php the_field( 'facebook_link','option'); ?>" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-fb.svg"); ?>
							
						</a><!-- fb -->
						
						<a class="twitter" href="<?php the_field( 'twitter_link','option'); ?>" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-t.svg"); ?>
							
						</a><!-- twitter -->
						
						<a class="youtube" href="<?php the_field( 'youtube_link','option'); ?>" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-yt.svg"); ?>
							
						</a><!-- youtube -->
						
<!--
						<a class="google" href="<?php the_field( 'google_plus_link','option'); ?>" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-g.svg"); ?>
							
						</a>
--><!-- google -->
						
						<a class="insta" href="<?php the_field( 'instagram','option'); ?>" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-insta.svg"); ?>
							
						</a><!-- insta -->
						
						<a class="linkedin" href="<?php the_field( 'linked_in_link','option'); ?>" target="_blank">
							
							<?php echo file_get_contents("wp-content/themes/clifford/images/social-in.svg"); ?>
							
						</a><!-- linkedin -->
						
					</div><!-- social_media_wrapper -->
					
				</div><!-- phone_social_media -->
				
			</div><!-- location_wrapper -->
		
		</div><!-- footer_right_inner -->
		
		<div class="copyright_wrapper mobile">
	
			<ul>
				<li><?php the_field( 'copyright','option'); ?></li>
				<li><?php the_field( 'all_rights_reserved','option'); ?></li>
				<?php if(get_field('disclaimer','option')) :?>
		
				<li><a class="disclaimer" href="<?php the_field( 'disclaimer','option'); ?>"> Disclaimer</a></li>
		
				<?php endif;?>
				
				<?php if(get_field('site_map_link','option')) :?>
				
				<li><a href="<?php the_field( 'site_map_link','option'); ?>">Site Map</a></li>
				
				<?php endif;?>
			</ul>
	
	<a class="ilawyer" href="//ilawyermarketing.com" target="_blank">
		
		<img data-src="<?php bloginfo('template_directory');?>/images/ilawyer-logo-white.svg"/>
		
	</a>
	
</div><!-- copyright -->
		
	</div><!-- footer_right -->
		
</footer>

<div class="copyright_wrapper desktop">
	
	<ul>
		
		<li><?php the_field( 'copyright','option'); ?> <?php the_field( 'all_rights_reserved','option'); ?></li>
		
		<?php if(get_field('disclaimer','option')) :?>
		
		<li><a class="disclaimer" href="<?php the_field( 'disclaimer','option'); ?>">Disclaimer</a></li>
		
		<?php endif;?>
		
		<?php if(get_field('site_map_link','option')) :?>
				
		<li><a href="<?php the_field( 'site_map_link','option'); ?>">Site Map</a></li>
				
		<?php endif;?>
	
	</ul>
	
	<a class="ilawyer" href="//ilawyermarketing.com" target="_blank">
		
		<img alt="iLawyer Marketing Logo" data-src="<?php bloginfo('template_directory');?>/images/ilawyer-logo.svg"/>
		
	</a>
	
</div><!-- copyright -->


<?php wp_footer();?>

<script type="text/javascript">

jQuery(document).ready(function($){


// blog sidebar view all links
 
 $('.widget_recent_entries > ul').append('<li class="view_all"><a href="<?php the_permalink(12);?>">View All Posts</a></li>');
 $('.widget_categories > ul').append('<li class="view_all"><a href="<?php the_permalink(12);?>">View All Categories</a></li>');
 $('.widget_archive > ul').append('<li class="view_all"><a href="<?php the_permalink(12);?>">View Archive</a></li>');


}); // Document Ready

</script>

</body>
</html>
