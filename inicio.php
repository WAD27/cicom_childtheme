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
          array('page_id'=>'2088')//pagina 'bienvenida inicio'
        );

        while ($hero->have_posts()):
          $hero->the_post();
          ?>
          <!-- heroscreen -->
          <div id="heroscreen_container" class="col">
            <?php echo the_content(); ?>
          </div>

        <?php endwhile;?>

        <div id="banners" class="container-fluid">

          <h1 class="col-12 text-center">CICOM se integra por:</h1>

          <ul id="banner-grid" class="row">
            <!-- banners -->
            <?php
            $args = array(
              'posts_per_page' => '4',
              'post_type' => 'cicom-banners-top'
             );
            $cpt = new WP_Query($args);
            while ($cpt->have_posts()):
              $cpt->the_post();
              ?>
                <li class="banner col col-sm-6 col-md-3 text-center">
                  <a class="col" href="<?php echo the_field('link_del_banner'); ?>" target="_blank">
                    <div class="row imgLiquid imgLiquidNoFill">
                      <img src="<?php echo the_field('imagen_banner');?>" alt="Banner CICOM">
                    </div>
                  </a>
                </li>
                <?php
            endwhile;
            ?>
          </ul>

        </div>

      </div>
      <!-- fin custom -->

      <div class="col-lg-12 col-md-12 col-sm-12 no-sidebar">
        <?php

        get_template_part( 'framework/content/page');

        ?>
      </div>
    </div>
  </div>
</section>

<?php //the_posts_pagination( array('prev_text' => __('&laquo;'), 'next_text'    => __('&raquo;'))) ?>

<?php get_footer(); ?>
