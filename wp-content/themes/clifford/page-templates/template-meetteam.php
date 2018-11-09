<?php 

/* Template Name: Attorney Directory */

get_header(); ?>


<div id="internal_main" class="one_col">
	
	<div class="att_intro">
		
		<div class="att_intro_inner">
			
			<div class="att_intro_left">
				
				<?php $post_object = get_field( 'clifford_intro' ); ?>

					<?php if ( $post_object ): ?>
					
						<?php $post = $post_object; ?>
					
						<?php setup_postdata( $post ); ?> 
					
							<?php $attorney_image = get_field( 'attorney_image' ); ?>
					
							<img class="clifford_img" src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />

			</div><!-- att_intro_left -->
			
			<div class="att_intro_right">
				
				<span class="clifford_title"><?php the_title();?></span><!-- clifford_title -->
				
				<span class="position"><?php the_field( 'position' ); ?></span><!-- position -->
				
				<img class="clifford_img tablet" src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
				
				<div class="clifford_intro content">
					
					<?php the_field( 'clifford_intro_content',79); ?>
				
				</div><!-- clifford_intro -->
				
				<a class="view_profile" href="<?php the_permalink();?>">View Profile</a>
				
			</div><!-- att_intro_right -->
			
			<?php wp_reset_postdata(); ?>
					
		<?php endif; ?>
			
		</div><!-- att_intro_inner -->
		
	</div><!-- att_intro -->
	
	<div class="meet_team_wrapper">
		
		
		<?php if(get_field('team_directory')): ?>
		 
			<?php while(has_sub_field('team_directory')): ?>
		 
				<div class="meet_team_inner">
			
					<div class="team_title_wrapper">
				
						<span class="team_title"><?php the_sub_field( 'group_title' ); ?></span><!-- team_title_wrapper -->
				
						<span class="team_title_line"></span><!-- team_title_line -->
				
					</div><!-- team_title_wrapper -->
				
				<div class="meet_team_group">
				
				
			<?php $team_member = get_sub_field( 'team_member' ); ?>
			
			<?php if ( $team_member ): ?>
				
				<?php foreach ( $team_member as $post ):  ?>
					
					<?php setup_postdata ( $post ); ?>
					
					<div class="att_single">
					
					<a href="<?php the_permalink();?>">
						
						<div class="att_inner_single">
						
							<?php $attorney_image = get_field( 'attorney_image' ); ?>
							
							<?php if ( $attorney_image ) : ?>
							
								<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
								
								<?php else:?>
								
								<img alt="Placeholder Image" src="<?php bloginfo('template_directory');?>/images/placeholder.png"/>
							
							<?php endif; ?>
							
							<div class="att_overlay"></div><!-- att_overlay -->
						
						</div><!-- att_inner_single -->
						
						<span class="att_single_title"><?php the_title();?></span><!-- att_single_title -->
						
						<span class="att_single_position"><?php the_field( 'position' ); ?></span><!-- att_single_position -->
					
					</a>
						
				</div><!-- att_single -->
				
					<?php endforeach; ?>
				
				<?php wp_reset_postdata(); ?>
		
			<?php endif; ?>
					
									
			</div><!-- meet_team_group -->
				
			</div><!-- meet_team_inner -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
				
	</div><!-- meet_team_wrapper -->
			
</div><!-- internal_main -->


<?php get_footer(); ?>
