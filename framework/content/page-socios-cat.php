<?php
// delcara ID de la pagina
$asoc = 2304;
$acad = 2308;
$medios = 2310;
$anun = 2306;
$_cat;
$color;
// asocia con su categoria
if (is_page($asoc)):
	$_cat = 99;
	$color = 'asoc';
	elseif (is_page($acad)):
	$_cat = 101;
	$color = 'acad';
	elseif (is_page($medios)):
	$_cat = 100;
	$color = 'medios';
	elseif (is_page($anun)):
	$_cat = 102;
	$color = 'anun';
endif;
?>
<!-- Asociaciones -->
<div id="socios-<?php echo $color;?>" class="socios-cat row wrap-content">
	<div class="container">
		<div class="col-12">
			<h1>Nuestros socios en:  <?php echo get_cat_name($_cat);?></h1>
			<p><?php echo category_description($_cat);?></p>
		</div>
		<?php
		$socio = array(
			'post_type' => 'socios-cicom',
			'cat' => $_cat,
			'post-per-page' => -1
		);
		$q = new WP_Query($socio);
		if ($q->have_posts()):
			?>
			<ul class="col-12 socios-list">
				<?php
				while ($q->have_posts()): $q->the_post();
				$titulo = get_the_title();
				$pic = get_the_post_thumbnail_url();
				$link = get_the_permalink();
				?>
				<li class="socios-item col-12 col-sm-6 col-md-4 col-lg-3">
					<a href="<?php echo $link;?>">
						<div class="socios-item-logo col-12 imgLiquid imgLiquidNoFill">
							<img src="<?php echo $pic;?>" alt="Logo socio CICOM">
						</div>
						<h4><?php echo $titulo;?></h4>
					</a>
				</li>

				<?php
			endwhile;
			wp_reset_postdata();
		else:
			?>
			<div class="col-12">
				<h3 class="text-center"><?php esc_html_e( 'No existen Asociaciones afiliadas a CICOM' );?></h3>
			</div>
		<?php endif; ?>
	</div>
</div>
<!--  -->
