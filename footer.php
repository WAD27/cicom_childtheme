<div id="banners" class="container-fluid">
<br>
  <!-- <h1 class="col-12 text-center">Banners CICOM</h1> -->

  <ul id="banner-grid" class="row">
    <!-- banners -->
    <?php
    $args = array(
      'posts_per_page' => '8',
      'post_type' => 'cicom-banners-bottom'
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
<?php get_template_part( 'framework/content/footer');?>
</div> </div>
<?php wp_footer(); ?>
</body>
</html>
