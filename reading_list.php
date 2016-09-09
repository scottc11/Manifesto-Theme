<?php
/*
Template Name: Reading List
*/
?>



<?php get_header(); ?>

	<main role="main">
		<div class="container">

      <div class="row">
        <div class="heading-stitch-divider col-xs-12" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/blank_header_line.png);">
          <div class="stitch-heading">
            <img src="<?php echo get_template_directory_uri(); ?>/img/reading-list-text.png" alt="Video" />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="summary-container col-xs-12">
          <p>
            Trying to narrow down your favourite books to just nine feels like an impossible task for a book lover, let alone one who is doing their PhD in English Lit. So what you’ll find below are a selection of favourites that struck a cord with me; that described thoughts and feelings and experiences that resonated with my own; books that taught me to be more critical of myself and the world that I live in; books that taught me how to act ethically and with compassion – both towards myself and others. I hope that these books inspire you, challenge you, make you cry, make you think, and make you want to act.
          </p>
        </div>
      </div>


			<!-- 		 BOOKS  		-->
			<section class="row">

				<!-- START OF LOOP -->
				<?php

					// define the post type for the loop
					$args = array(
						'post_type' => 'fm_reading',
						'supports' => array('title','editor','custom-fields')
					);

					// Create a new WP loop query and hand it the custom post type arguments
					$loop = new WP_Query( $args );

					// for inserting a row for every 3rd book/reading post
					$counter = 0;

					if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();



				?>


				<!-- STARTING DIV ROW FOR 1ST BOOK IN ROW -->
				<?php if ($counter == 0) { ?>
					<div class="row">
				<?php } ?>


					<div class="book-container col-xs-12 col-sm-4">

						<!-- Post thumbnail -->
						<div class="book-image-container">

							<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
								<?php the_post_thumbnail(); ?>
							<?php endif; ?>

						</div>
						<!-- /post thumbnail -->

						<!-- Book Title -->
						<h2><?php the_title(); ?></h2>
						<!-- /Book Title -->

						<p>
							<?php the_content(); ?>
						</p>

					</div>

				<?php $counter++ ?>
				<!-- ENDING DIV ROW FOR 3RD BOOK IN ROW -->
				<?php if ($counter == 3) { ?>
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
