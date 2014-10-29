<?php /** Template Name: Who Recycles */ get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<!-- ==================== PAGE HEADER ==================== -->
<div id="pageheadertext" class="pageheader">
	<div class="headerpagesub" id="headerpagesub">
		<?php the_title(); ?>
	</div>
</div><?php

	get_template_part( 'menus/menu', 'belowslider' );

?><!-- ==================== PAGE HEADER ==================== -->

<div id="pagecontent" class="container">

	<div id="breadcrumbs" class="pad5 medium s14 grey">
		<?php if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>
	</div>

<!--	<div style="padding:10px 0;">
		<div class="sidebar-menu"><?php

			// get_template_part( 'partial', 'sidebarmenu' );

		?></div> -->
		<div class="fleft" id="mobile-content">
			<div class="adj-padding bold s32 upper dred"><?php the_title(); ?></div>
			<div class="adj-padding justify medium s14" style="padding:10px 0;"><?php the_content(); ?></div>
			<div id="timeline">
				<iframe src="/wp-content/themes/mervis/includes/Light/index.html" height="550" width="780" scrolling="no">
			</div>
			<div id="mobile-timeline">
				<iframe src="/wp-content/themes/mervis/includes/Light/mobile.html" height="550" width="320" scrolling="no">
			</div>
		</div>
		<br style="clear:both" />
	</div>

</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>