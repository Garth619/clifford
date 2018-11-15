<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main" class="two_col">
	
		<?php get_sidebar('bio'); ?>
		
		<div class="att_image_wrapper tablet">
		
			<?php $attorney_image = get_field( 'attorney_image' ); ?>
			
			<?php if ( $attorney_image ) : ?>

			<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
			
			<?php else:?>
			
			<img alt="Placeholder Image" src="<?php bloginfo('template_directory');?>/images/placeholder.png"/>
			
			<?php endif;?>
		
		</div><!-- att_image_wrapper -->
		
		<div class="container content">
			
			<h1><?php the_title();?></h1>
			
			<span class="sidebar_att_title tablet"><?php the_field( 'position' ); ?></span><!-- sidebar_att_title -->
			
			<?php 
				
				// gets current page's slug
				
				global $post;
				$post_slug=$post->post_name;
				
				// gets the results page's slug from its page id
				
				$resultspost_id = 54; 
				$resultspost = get_post($resultspost_id); 
				$resultsslug = $resultspost->post_name;
				
				// create the url structure to echo below
				
				$att_caseresults = get_bloginfo('url').'/'.$resultsslug.'/'.$post_slug;
				
				if(get_field('display_case_results_button')) : ?>

				<a class="att_results_button tablet" href="<?php echo $att_caseresults;?>">View <?php the_field( 'first_name' ); ?>'s Results</a>
			
				<?php endif;?>
		
			<?php the_field( 'att_bio_content' ); ?>
			
				<?php if(get_field('slidetoggle_text')): ?>
			
					<div class="att_slidetoggle">
					
						<ul class="slidetoggle_list">
			 
						<?php while(has_sub_field('slidetoggle_text')): ?>
			 
							<li class="title">
					
								<a class="" href="#"><?php the_sub_field( 'title' ); ?></a>
									
									<div class="sub_list">
										
										<?php the_sub_field( 'content_block' ); ?>
										
									</div>
									
								</li><!-- title -->
					
							<?php endwhile; ?>
				
						</ul><!-- slidetoggle_list -->
				
				</div><!-- att_slidetoggle -->
			 
			<?php endif; ?>
			
			<?php if(get_field('more_about')): ?>
			
			<div class="additional_posts">
				
				<span class="add_title">More about <?php the_field( 'first_name' ); ?></span><!-- add_title -->
				
				<div class="posts_slider_wrapper">
					
					<div class="posts_left posts_button">
						
						<?php echo file_get_contents("wp-content/themes/clifford/images/icon-arrow.svg"); ?>
						
					</div><!-- posts_button -->
					
					
					<div class="posts_slider">
						
						<?php if(get_field('more_about')): ?>
						 
							<?php while(has_sub_field('more_about')): ?>
						 
								<div class="post_single_slide">
							
									<a href="<?php the_sub_field( 'url' ); ?>" target="_blank">
								
									<div class="post_single_slide_inner">
										
										<?php $image = get_sub_field( 'image' ); ?>
		
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							
										<div class="posts_overlay">
								
											<span><?php the_sub_field( 'title' ); ?></span>
								
									</div><!-- posts_overlay -->
								
								</div><!-- post_single_slide_inner -->
							
							</a>
							 
						</div><!-- post_single_slide -->
						    
							<?php endwhile; ?>
						 
						<?php endif; ?>
						
				
					</div><!-- posts_slider -->
					
					
					<div class="posts_right posts_button">
						
						<?php echo file_get_contents("wp-content/themes/clifford/images/icon-arrow.svg"); ?>
						
					</div><!-- posts_button -->
					
					
				</div><!-- posts_slider_wrapper -->
				
			</div><!-- additional_posts -->
			
			<?php endif; ?>
		
		</div><!-- container -->
		
</div><!-- internal_main -->



					 
					 	
<?php get_footer(); ?>
