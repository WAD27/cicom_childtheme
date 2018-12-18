<?php



$args = array('post_name' => , "socios-landing-page" );
$q = new WP_Query($args);

if ($q->have_posts()):
  while ($q->have_posts()): $q->the_post();


    echo "Esto es una pagina de socio";
  endwhile;
else:
  echo "No hay socios que mostrar";
endif;
