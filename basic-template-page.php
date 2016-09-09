<?php
/*
Template Name: Basic Template
*/
?>




<?php get_header(); ?>

<main role="main">

  <section class="container">



    <article class="margin-top-bottom">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <!-- PLACE ALL CONTENT HERE -->

        <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-8">
            <h1><?php the_title(); ?></h1>
          </div>

          <div class="heading-stitch-divider col-xs-12 col-md-8 margin-bottom-20" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/blank_header_line.png);"></div>

          <div class="basic-template-content col-xs-12 col-md-8">

            <?php the_content(); ?>

          </div>


          <?php get_sidebar('about-me'); ?>

          <?php get_sidebar('sidebar'); ?>

        </div>




      <!-- ENDING THE LOOP -->
      <?php endwhile; else: ?>
        <p>
          <?php _e( "The Page you're looking for could not be found." ); ?>
        </p>

      <?php endif; ?>

    </article>





  </section>

</main>


<?php get_footer(); ?>
