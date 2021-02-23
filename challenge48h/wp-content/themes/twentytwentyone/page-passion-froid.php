<?php
/*
  	Template Name : PASSION-FROID
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<?php
	/* Start the Loop */
	while ( have_posts() ) : the_post();

		// Include the single posts content template
		get_template_part( 'content-passion-froid' );

		// End of the loop.
	endwhile; 

	get_footer();
	?>
</div>