<?php
/*
Template Name: Blog Page
*/
?>


<?php get_header() ?>

<main class="container">
  <section class="row">

    <section class="col-xs-12 col-sm-8">
      <?php get_template_part('blog-loop'); ?>

      
    </section>



    <section>
      <?php get_template_part('sidebar'); ?>
    </section>






  </section>
</main>


<?php get_footer() ?>
