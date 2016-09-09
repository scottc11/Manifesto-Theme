<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="container">

			<div class="row">
				<h1 class="col-xs-12 col-md-8"><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

				<div class="heading-stitch-divider col-xs-12 col-md-8 margin-bottom-20" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/blank_header_line.png);"></div>

				<div class="col-xs-12 col-md-8">
					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>
				</div>

				<?php get_sidebar(); ?>
			</div>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
