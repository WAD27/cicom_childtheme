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

        <div id="banners" class="col">

          <?php
          $banners = array('nombre'=>'url');

          $banner = new WP_Query(
            array('post_type'=>'cicom-banners')//pagina 'bienvenida inicio'
          );
          ?>

          <ul id="banner-grid" class="col">

            <?php
            while ($hero->have_posts()):
              $hero->the_post();
              ?>

              <!-- banners -->
              <?php
              $ban = array(
                '/assets/img/placeholder.png',
                '/assets/img/placeholder.png',
                '/assets/img/placeholder.png',
                'assets/img/placeholder.png'
              );
              for ($i=0; $i < count($ban) ; $i++):
                ?>
                <li class="banner col col-md-6 col-lg-3 text-center">
                  <a href="#" target="_blank">
                    <div class="col imgLiquid imgLiquidNoFill">
                      <img src="<?php echo $ban[$i];?>" alt="Banner CICOM">
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
