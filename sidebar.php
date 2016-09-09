<!-- sidebar -->
<aside class="sidebar col-xs-12 col-md-4" role="complementary">

	<div>

		<h3>Look for it</h3>
		<?php get_template_part('searchform'); ?>
		<h3></h3>


		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<div class="">
			<div class="heading-stitch-divider" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/blank_header_line.png);"></div>
		</div>

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->



		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
		</div>


		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

		<div class="">
			<div class="heading-stitch-divider" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/blank_header_line.png);"></div>
		</div>


	</div>


</aside>
<!-- /sidebar -->
