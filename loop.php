


<!-- STARTING THE LOOP -->
<?php if (have_posts()): while (have_posts()) : the_post(); ?>


	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


		<div class="article col-xs-12 col-sm-6 col-md-6">

			<div class="article-preview-container">

				<!-- the background image conatiner-->
				<div class="post-background">

					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(array(400,400)); // Declare pixel size you need inside the array ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->

				</div>

				<!-- this is just a hack to position the next div -->
				<div class="post-image-shell"></div>

				<div class="sub-post-header-container">
					<div class="sub-post-header-shell">
						<h2 class="post-title sub-post-header"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<h5 class="post-date sub-post-date-header">
							<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
								<?php the_date(); ?> <?php the_time(); ?>
							</time>
						</h5>

						<h5><span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span></h5>

					</div>
				</div>
			</div>

		</div>


	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
