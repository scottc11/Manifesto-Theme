<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="articles-background">

		<div class="article-container container">

			<div class="row">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>


						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- POST TITLE AND DETAILS 				 -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


						<div class="col-xs-12 col-md-8">

							<!-- post title -->
							<h1 class="">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							</h1>
							<!-- /post title -->

							<!-- post details -->
							<div class="">
								<span class="date">
									<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
										<?php the_date(); ?> <?php the_time(); ?>
									</time>
								</span>
								<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
							</div>

							<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
							<!-- /post details -->

						</div>




						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- STITCH DIVIDER					 				 -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


						<div class="heading-stitch-divider col-xs-12 col-md-8" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/blank_header_line.png);">
							<div class="heading-stitch-divider"></div>
						</div>




						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
						<!-- POST CONTENT 				 -->
						<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


						<div id="single" class="col-xs-12 col-md-8">

							<?php the_content(); // Dynamic Content ?>

							<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

							<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

							<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

							<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

							<?php comments_template(); ?>

						</div>





					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>


				<?php get_sidebar(); ?>


			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</section>
	<!-- /section -->
	</main>

	<?php get_footer(); ?>
