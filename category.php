<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="container">

			<!-- row -->
			<div class="row">

				<!-- THE CATEGORY TITLE -->
				<h1 class="col-xs-12 col-md-8"><?php _e( 'Category: ', 'html5blank' ); single_cat_title(); ?></h1>

				<div class="heading-stitch-divider col-xs-12 col-md-8 margin-bottom-20" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/blank_header_line.png);"></div>

				<!-- THE ARTICLES -->
				<div class="col-xs-12 col-md-8">

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>

				</div>

				<!-- SIDEBAR -->
				<?php get_sidebar(); ?>

			</div>
			<!-- /row -->

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
