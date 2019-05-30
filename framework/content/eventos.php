<div class="container">

  <div class="col-12">
    <!-- <div class="container"> -->

    <h3 class="col-12 text-center">Eventos de la Industria</h3>
    <?php
    $args = array('post_type' => 'eventos-cicom');
    $q = new WP_Query($args);
    while ($q->have_posts()):$q->the_post();
    ?>

    <div class="home-eventos-item col-12">
      <a href="<?php echo get_the_permalink();?>">

        <div class="col-xs-12 col-md-4 col-lg-5">

          <h4 class="col-12 text-center"><?php echo the_title(); ?></h4>
          <div class="home-eventos-item-img col-12">
            <div class="col-12 imgLiquid imgLiquidFill">
              <img src="<?php echo get_the_post_thumbnail_url();?>"  alt="CICOM" />
            </div>
          </div>
        </div>

        <!--  -->
        <div class=" col-xs-12 col-md-8 col-lg-7">

          <div class="home-eventos-item-info col-12 text-center">
            <?php echo the_field('evento_descripcion_corta'); ?>
          </div>

          <div class="col-12 text-center">
            <div class="home-eventos-item-info col-6">
              <b>Fecha:</b> <?php echo the_field('evento_fecha'); ?>
            </div>
            <div class="home-eventos-item-info col-6">
              <b>Hora:</b> <?php echo the_field('evento_hora'); ?>
            </div>
            <div class="home-eventos-item-info col-12">
              <b>Lugar:</b> <?php echo the_field('evento_nombre_lugar'); ?>
            </div>
            <h2 class="home-eventos-item-info eventos-precio col-12">
               <b>Precio:</b> $<?php echo the_field('evento_precio'); ?>
             </h2>
          </div>

        </div>

        <div class="home-eventos-item-link col-12 text-right ha">
            <small>
              Toca la tarjeta para conocer los detalles*
            </small>
        </div>

      </a>

    </div>

  <?php endwhile;?>
  <!-- </div> -->
</div>
</div>
