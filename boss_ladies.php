<?php
/*
Template Name: Boss Ladies
*/
?>



<?php get_header(); ?>

	<main role="main">
		<div class="container">

      <div class="row">
        <div class="heading-stitch-divider col-xs-12" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/blank_header_line.png);">
          <div class="stitch-heading">
            <img src="<?php echo get_template_directory_uri(); ?>/img/boss_ladies_text.png" alt="boss ladies" />
          </div>
        </div>
      </div>


			<!-- 		 BOOKS  		-->
			<section class="row">

				<!-- START OF LOOP -->
				<?php

					// define the post type for the loop
					$args = array(
						'post_type' => 'fm_boss_lady',
						'supports' => array('title','editor', 'excerpt', 'custom-fields')
					);

					// Create a new WP loop query and hand it the custom post type arguments
					$loop = new WP_Query( $args );

					// for inserting a row for every 2nd boss lady
					$counter = 0;

					if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();



				?>


				<!-- STARTING DIV ROW FOR 1ST BOSS LADY IN ROW -->
				<?php if ($counter == 0) { ?>
					<div class="row">
				<?php } ?>


					<div class="boss-lady-container col-xs-12 col-sm-6">

						<!-- Post thumbnail -->
						<div class="boss-lady-image-container">

							<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
								<?php the_post_thumbnail(); ?>
							<?php endif; ?>

						</div>
						<!-- /post thumbnail -->

						<div class="">
							<!-- Title -->
							<h2><?php the_title(); ?></h2>

							<!-- EXCERPT -->
							<h4><?php the_excerpt(); ?></h4>

						</div>

						<p>
							<?php the_content(); ?>
						</p>

						<!-- Occupation -->
						<?php if (get_post_meta( $post->ID, 'Boss Lady @', true)) { ?>
							<div class="boss-lady-spacer">
								<p><span class="bold-text">Boss Lady @: </span><?php echo get_post_meta( $post->ID, 'Boss Lady @', true); ?></p>
							</div>
						<?php } ?>

						<!-- services -->
						<?php if (get_post_meta( $post->ID, 'Services', true)) { ?>
							<div class="boss-lady-spacer">
								<h4>Services:</h4>
								<p><?php echo get_post_meta( $post->ID, 'Services', true); ?></p>
							</div>
						<?php } ?>

						<div class="boss-lady-spacer">
							<ul class="boss-lady-info">
								<?php $info = get_post_custom($post->ID); ?>
								<?php foreach ($info as $key => $value) {
									if ( FM_filter_custom_fields($key) == false ) { ?>
										<li><span class="bold-text"><?php echo $key ?>:</span> <?php echo $value[0] ?></li>
									<?php }
								} ?>
							</ul>
						</div>


					</div>

				<?php $counter++ ?>
				<!-- ENDING DIV ROW FOR 2nd BOSS LADY IN ROW -->
				<?php if ($counter == 2) { ?>
						</div>
				<?php
						$counter = 0;
			 		}
				?>



				<!-- END OF LOOP -->
				<?php endwhile; else: ?>
					<p><?php _e( 'The Reading you are looking for could not be found.' ); ?></p>
				<?php endif; ?>

			</section>

    </div>
  </main>

<?php get_footer(); ?>
