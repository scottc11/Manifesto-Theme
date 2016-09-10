

<!-- STARTING THE LOOP -->
<?php
	$temp = $wp_query; $wp_query= null;
	$wp_query = new WP_Query(); $wp_query->query('showposts=9' . '&paged='.$paged);

 	if ($wp_query->have_posts()): while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="row">
			<!-- post title ... -->
			<h2 class="col-xs-12">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->

			<div class="col-xs-12">
				<!-- post details -->
				<span class="date">
					<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
						<?php the_date(); ?> <?php the_time(); ?>
					</time>
				</span>
				<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
				<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
				<!-- /post details -->
			</div>

		</div>


		<div class="post-summary row">
			<div class="post-summary-excerpt col-xs-12 col-sm-8">
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			</div>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<div class="post-summary-img col-xs-12 col-sm-4">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
					</a>
				</div>
			<?php endif; ?>
			<!-- /post thumbnail -->
		</div>

		<?php edit_post_link(); ?>

		<div class="hr-post-divider col-xs-12">
			<hr >
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
