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
        <!-- menu asociados -->
        <div id="hero-menu" class="container-fluid">
          <br>
          <h3 class="col-12 text-center">CICOM se integra por:</h3>

          <ul id="hero-menu-grid" class="row">

            <?php
            $socios = array('Asociaciónes','Medios','Academia','Anunciantes');
            $iconos = array('users','play','graduation-cap','microphone');
            $colores = array('--color-gray-1','--color-gray-2','--color-gray-3','--color-gray-4');
            $links = array('#','#','#','#');
            for ($i=0; $i < 4; $i++):
              ?>
              <li class="hero-menu-item col-12 col-sm-6 col-md-3 text-center" style="background-color: var(<?php echo$colores[$i]?>);">
                <a class="col-12" href="<?php echo $links[$i]; ?>" target="_blank">
                  <div class="hero-menu-item-txt col-12 ha">
                    <div class="col-12">
                      <i class="fa fa-<?php echo $iconos[$i];?>"></i>
                    </div>
                    <div class="col-12">
                      <?php echo $socios[$i]; ?>
                    </div>
                  </div>
                </a>
              </li>
              <?php
            endfor;
            ?>
          </ul>

        </div>

      </div>
      <br>
      <hr>
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

<?php get_footer('inicio'); ?>
