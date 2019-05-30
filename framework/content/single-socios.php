<?php
//select color for header background
$cat = get_the_category();
if ($cat[0]->cat_name == 'Asociaciones'):
  $color = 'asoc';
  elseif ($cat[0]->cat_name == 'Academia'):
    $color = 'acad';
    elseif ($cat[0]->cat_name == 'Medios'):
      $color = 'medios';
      elseif ($cat[0]->cat_name == 'Anunciantes'):
        $color = 'anun';
      endif;
      ?>
      <?php if ( have_posts() ): the_post(); ?>
        <?php $post = get_post($id); ?>

        <div class="socios-<?php echo $color;?> tag_line tag_line_image single">

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
      <!--  -->
      <div id="single-asociado" class="container">
        <div class="row">

          <div class="single-asociado-img col-12 col-md-4">
            <div class="imgLiquid imgLiquidNoFill">
              <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
            </div>
          </div>
          <div class="col-12 col-md-8">
            <?php echo the_field('socio_informacion_general'); ?>
          </div>

        </div>
        <!--  -->
        <div id="single-asociado-links" class="col-12 ha">
          <?php
          $soc = array('facebook','twitter','linkedin','instagram');
          ?>
          <div class="col-12 col-md-4 no-padding">
            <ul class="col-12 justify-content-center align-items-center">
              <?php
              for ($i=0; $i < count($soc); $i++):
                $on = $soc[$i];
                if ($on):
                  ?>
                  <li class="col-xs-6 col-md-4 text-center no-padding ha mx-auto">
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
          <div class="single-asociado-sitelink col-12 col-md-8">
            <div class="row">
              <div class="col-12 ha my-auto text-center">
                <a class="col-12" href="<?php echo the_field('socio_link_a_sitio'); ?>" target="_blank">
                  Visita nuestro sitio Web!
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--  -->
        <div id="single-asociados-ubicacion" class="row text-right">
          <div class="single-direccion col-12 col-md-4">
            <div class="col-12">
              <a href="tel:<?php echo the_field('socio_info_telefono_1'); ?>" target="_blank">
                Tel: <?php echo the_field('socio_info_telefono_1'); ?>
              </a>
            </div>
            <div class="col-12">
              <a href="tel:<?php echo the_field('socio_info_telefono_2'); ?>" target="_blank">
                Tel: <?php echo the_field('socio_info_telefono_2'); ?>
              </a>
            </div>
            <div class="col-12">
              <a href="mailto:<?php echo the_field('socio_info_email'); ?>" target="_blank">
                Email: <?php echo the_field('socio_info_email'); ?>
              </a>
            </div>
            <div class="col-12">
              Dirección: <?php echo the_field('socio_info_direccion'); ?>
            </div>
          </div>
          <div class="col-12 col-md-8">
            <div id="map" class="map">
              <?php echo get_field('mapa_socio'); ?>
            </div>
          </div>

        </div>
      </div>
      <?php
      // endwhile;
    endif; ?>
