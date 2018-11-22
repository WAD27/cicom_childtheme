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
          <!-- banners -->
          <div id="" class="col">
            <?php echo the_content(); ?>
          </div>

        <?php endwhile;?>

        <div id="banners" class="container-fluid">

          <?php
          $banner = new WP_Query(
            array('post_type'=>'cicom-banners')//pagina 'bienvenida inicio'
          );
          ?>

          <ul id="banner-grid" class="row">

            <?php
            $args = array('post_type' => 'cicom-banners' );
            // $args = array('category_name' => 'banner-primera-fila' );
            $cpt = new WP_Query($args);
            while ($cpt->have_posts()):
              $cpt->the_post();
              ?>
              <!-- banners -->
              <?php
              for ($i=0; $i < 4 ; $i++):
                ?>
                <li class="banner col col-md-6 col-lg-3 text-center">
                  <a class="col" href="<?php echo the_field('link_del_banner'); ?>" target="_blank">
                    <div class="row imgLiquid imgLiquidNoFill">
                      <img src="<?php echo the_field('imagen_banner');?>" alt="Banner CICOM">
                    </div>
                  </a>
                </li>

                <?php
              endfor;

            endwhile;
            ?>
          </ul>

        </div>

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
