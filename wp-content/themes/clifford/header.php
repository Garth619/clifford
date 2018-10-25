<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />


<style>

@import url("https://use.typekit.net/skh5qas.css");
@import url('https://fonts.googleapis.com/css?family=Rozha+One');

<?php the_field( 'review_css','option'); ?>

</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

</head>

<body <?php body_class(); ?>>
	
	
	<header>
		
		
		<div class="header_left">
			
			<a href="<?php bloginfo('url');?>">
				
				<?php $desktop_logo = get_field( 'desktop_logo','option'); ?>

				<img class="logo" src="<?php echo $desktop_logo['url']; ?>" alt="<?php echo $desktop_logo['alt']; ?>" />

				<?php $mobile_logo = get_field( 'mobile_logo','option'); ?>

				<img class="logo_mobile" src="<?php echo $mobile_logo['url']; ?>" alt="<?php echo $mobile_logo['alt']; ?>" />
				
			</a>
			
		</div><!-- header_left -->
		
		
		<div class="header_right">
			
			<div class="consult_phone_wrapper">
				
				<span class="consult_title desktop"><?php the_field( 'call_now_header_verbiage','option'); ?></span><!-- consult_title -->
				
				<span class="consult_title tablet"><?php the_field( 'call_now_header_verbiage_mobile','option'); ?></span><!-- consult_title -->
				
				<a class="phone" href="tel:<?php the_field( 'firm_phone','option'); ?>"><?php the_field( 'firm_phone','option'); ?></a><!-- phone -->
				
			</div><!-- consult_phone_wrapper -->
			

			<nav>
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
			
			</nav>
			
			<div class="phone_icon">
				
				<a href="tel:<?php the_field( 'firm_phone','option'); ?>">
				
					<img src="<?php bloginfo('template_directory');?>/images/icon-phone.svg"/>
				
				</a>
				
			</div><!-- phone_icon -->
			
			<div class="mobile_menu">
				
				<div class="mobile_inner">
				
					<span class="menu_bars"></span><!-- menu_bars -->
					<span class="menu_bars"></span><!-- menu_bars -->
					<span class="menu_bars"></span><!-- menu_bars -->
				
					<span class="menu_title">Menu</span><!-- menu_title -->
				
				</div><!-- mobile_inner -->
				
				<div class="mobile_close fade">
					
					<div class="mobile_close_inner"></div><!-- mobile_close_inner -->
					
				</div><!-- mobile_close -->
				
			</div><!-- mobile_menu -->
			
			
		</div><!-- header_right -->
		
		
		
		
	</header>
				


			