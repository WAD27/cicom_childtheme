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

          <div class="col-12 col-md-4">
            <div class="imgLiquidImgLiquidNoFill">
              <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
            </div>
          </div>
          <div class="col-12 col-md-8">
            <?php echo the_field('socio_informacion_general'); ?>
          </div>

        </div>
        <!--  -->
        <div id="single-asociado-links" class="col-12">
          <div class="col-12 col-md-4">
            <ul class="row">
              <li class="col-3 text-center my-auto"><a href="<?php echo the_field('facebook'); ?>"><i class="fa fa-facebook"></i></li>
              <li class="col-3 text-center my-auto"><a href="<?php echo the_field('twitter'); ?>"><i class="fa fa-twitter"></i></li>
              <li class="col-3 text-center my-auto"><a href="<?php echo the_field('linkedin'); ?>"><i class="fa fa-linkedin"></i></li>
              <li class="col-3 text-center my-auto"><a href="<?php echo the_field('instagram'); ?>"><i class="fa fa-instagram"></i></li>
            </ul>
          </div>
          <div class="col-12 col-8 text-center">
            Visita nuestro sitio  <?php echo the_field('socio_link_a_sitio'); ?>
          </div>
        </div>
        <!--  -->
        <div class="row">
          <div class="col-12 col-md-4">

          </div>
          <div class="col-12 col-md-8">
            <div id="map" class="map">

            </div>
          </div>

        </div>
      </div>
      <?php
      // endwhile;
    endif; ?>
