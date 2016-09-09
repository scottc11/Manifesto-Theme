
<!-- BOOL FOR IF STATEMENT -->
<?php
	$latest_post = true;
?>


<!-- STARTING THE LOOP -->
<?php query_posts('showposts=5'); ?>  <!-- LIMITING THE NUMBER OF POSTS TO BE DISPLAYED -->
<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<?php
		// IF POST IS THE FIRST/LATEST POST
		if ($latest_post == true) { ?>


		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- 			IF - LATEST ARTICLE 			      -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
				<div class="article col-xs-12 col-sm-12 col-md-8">
					<div id="latest-post" class="article-preview-container">

						<div id="latest-post-background">
							<!-- post thumbnail -->
							<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
								<a class="post-background-img" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<!-- POST THUMBNAIL GOES IN DIV BACKGROUND -->
									<div class="post-background-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
								</a>
							<?php endif; ?>
							<!-- /post thumbnail -->
						</div>

						<div id="post-header-shell">
							<div id="latest-post-header-container">
								<h1 class="post-title post-header">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
								</h1>
							</div>

							<div class="latest-post-header-container">
								<h3 class="post-date post-header">
									<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
										<?php the_date(); ?> <?php the_time(); ?>
									</time>
								</h3>
							</div>
						</div>

					</div>
				</div>
			</article>
			<!-- /article -->

		<?php debug_to_console("IF") ?>

		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<!-- 			ELSE - OLDER ARTICLES 							    -->
		<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
		<?php } if ($latest_post == false) { ?>
			<?php debug_to_console("ELSE") ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
			<div class="article col-xs-12 col-sm-6 col-md-4">

				<div class="article-preview-container">

					<!-- the background image conatiner-->
					<div class="post-background">

						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
							<a class="post-background-img" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<!-- POST THUMBNAIL GOES IN DIV BACKGROUND -->
								<div class="post-background-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
							</a>
						<?php endif; ?>
						<!-- /post thumbnail -->

					</div>

					<div class="post-image-shell">

					</div>

					<div class="sub-post-header-container">
						<div class="sub-post-header-shell">

							<h1 class="post-title sub-post-header">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							</h1>

							<h3 class="post-date sub-post-date-header">
								<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
									<?php the_date(); ?> <?php the_time(); ?>
								</time>
							</h3>
						</div>
					</div>

				</div>
				<!-- /article containter -->

			</div>



		</article>
		<!-- /article -->

	<?php } $latest_post = false; ?>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
