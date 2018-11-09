<?php get_header(); ?>

<div id="internal_main" class="one_col">
	
	<div class="not_found">
		
		<h1 class="not_found_header">404</h1>
		
		<span class="not_found_small_header">Page Not Found</span><!-- not_found_small_header -->
		
		<span class="not_found_description">looks like the page you’re looking for doesn’t exist</span><!-- not_found_description -->
		
		<span class="go_back" onclick="goBack()">go back now</span><!-- go_back -->
		
	</div><!-- not_found -->
	
	
		
</div><!-- internal_main -->


<script type="text/javascript">

		function goBack() {
    	window.history.back();
		}

</script>

<?php get_footer(); ?>





	
