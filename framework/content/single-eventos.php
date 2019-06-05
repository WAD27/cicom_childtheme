<?php

if ( have_posts() ): the_post(); ?>

<div class="eventos-header tag_line tag_line_image single">

  <div class="tag-body">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <h2 class="tag_line_title">
            <?php the_title(); ?>
          </br>
        </h2>

      </div>
    </div>
  </div>
</div>
</div>
<!-- contenido  -->
<div id="single-asociado" class="container">
  <div class="row">

    <div class="single-asociado-img col-12 col-md-4">
      <div class="imgLiquid imgLiquidNoFill">
        <img src="<?php echo get_the_post_thumbnail_url();?>" alt=">CICOM">
      </div>
    </div>
    <div class="col-12 col-md-8">
      <div id="single-asociados-ubicacion" class="row text-center">
        <div class="single-direccion col-12">
          <h4 class="col-12">
            <b>Lugar:</b> <?php echo the_field('evento_nombre_lugar'); ?>
          </h4>
          <div class="col-6">
            <b>Fecha:</b> <?php echo the_field('evento_fecha'); ?>
          </div>
          <div class="col-6">
            <b>Hora:</b> <?php echo the_field('evento_hora'); ?>
          </div>
          <div class="col-12">
            <h3 class="col-12 eventos-precio">
              <b>Precio:</b> $<?php echo the_field('evento_precio'); ?>
            </h3>
          </div>

        </div>

      </div>
    </div>

  </div>
  <!--  -->
  <div id="single-asociado-links" class="col-12 ha">
    <?php
    $soc = array('facebook','twitter');
    ?>
    <div class="col-12 col-md-4 no-padding">
      <ul class="col-12 justify-content-center align-items-center">
        <?php
        for ($i=0; $i < count($soc); $i++):
          $on = $soc[$i];
          if ($on):
            ?>
            <li class="col-xs-6 text-center no-padding ha mx-auto">
              <a class="col-12 no-padding" href="<?php echo get_field($on); ?>" class="col-12 ha my-auto">
                <i class="fa fa-<?php echo $on; ?>"></i>
              </a>
            </li>
          <?php else: ?>
            <li class="col-6 col-md-4 text-center no-padding ha mx-auto">
              No Hay Redes sociales!
            </li>
            <?php
          endif;
        endfor;
        ?>
      </ul>
    </div>
    <div class="single-asociado-site-link col-12 col-md-8">
      <div class="row">
        <div class="col-12 ha my-auto text-center">
          <a class="col-12" href="<?php echo the_field('evento_link'); ?>" target="_blank">
            Visita el sitio Web del evento!
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--  -->

  <div class="container">
    <div class="row">
      <div class="col-12">

        <?php echo the_field('evento_descripcion'); ?>

      </div>
    </div>

  </div>
  <div id="evento-ubicacion" class="row">
    <div class="col-xs-12 col-md-6">
      <small>Poster:</small>
      <a class="col-12" href="<?php echo the_field('evento_poster'); ?>" target="_blank">

        <div class="evento-poster col-12 imgLiquid imgLiquidNoFill">

          <img src="<?php echo the_field('evento_poster'); ?>" alt="Evento CICOM"/>

        </div>

      </a>

    </div>
    <div class="col-xs-12 col-md-6">
      <small>Mapa:</small>
      <?php echo the_field('evento_mapa'); ?>

    </div>

  </div>


</div>
<?php
// endwhile;
endif; ?>
