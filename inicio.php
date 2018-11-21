<?php
/*
Template Name: Inicio CICOM MX
*/

get_header();
?>
<section class="section-small">
  <div class="container-fluid">

    <div class="row">

      <!-- Inicia custom -->
      <div id="heroscreen_cicom" class="col">
        <?php
        $hero = new WP_Query(
          array('page_id'=>'2088')
        );

        while ($hero->have_posts()):
          $hero->the_post();
          ?>
          <!-- banners -->
          <div id="" class="col">
            <?php echo the_content(); ?>
          </div>

        <?php endwhile; ?>

      </div>
      <!-- fin custom -->

      <div class="col-lg-12 col-md-12 col-sm-12 no-sidebar">
        <?php

        get_template_part( 'framework/content/page');            echo "DEBUUUGGGG";

        ?>
      </div>
    </div>
  </div>
</section>

<?php the_posts_pagination( array('prev_text' => __('&laquo;'), 'next_text'    => __('&raquo;'))) ?>

<?php get_footer(); ?>
