<?php
$asoc = 99;
$acad = 101;
$medios = 100;
$anun = 102;
?>
<!-- Asociaciones -->
<div id="socios-asoc" class="socios-cat row wrap-content">
	<div class="container">
		<div class="col-12">
			<h1><?php echo get_cat_name($asoc);?></h1>
			<p><?php echo category_description($asoc);?></p>
		</div>
		<?php
		$socio = array(
			'post_type' => 'socios-cicom',
			'cat' => $asoc,
			'post-per-page' => -1
		);
		$q = new WP_Query($socio);
		if (have_posts()): the_post();
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
	else:
		?>
		<div class="col-12">
			<h3 class="text-center"><?php esc_html_e( 'No existen Asociaciones afiliadas a CICOM' );?></h3>
		</div>
	<?php endif; ?>
</div>
</div>
<!--  -->
<!-- Academia -->
<div id="socios-acad" class="socios-cat row wrap-content">
	<div class="container">
		<div class="col-12">
			<h1><?php echo get_cat_name($acad);?></h1>
			<p><?php echo category_description($acad);?></p>
		</div>
		<?php
		$socio = array(
			'post_type' => 'socios-cicom',
			'cat' => $acad,
			'post-per-page' => -1
		);
		$q = new WP_Query($socio);
		if (have_posts()):the_post();
		?>
		<ul class="col-12 socios-list">
			<?php
			$titulo = get_the_title();
			$pic = get_the_post_thumbnail_url();
			$link = get_the_permalink();
			while ($q->have_posts()): $q->the_post();
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
	else:
		?>
		<div class="col-12">
			<h3 class="text-center"><?php esc_html_e( 'No existen Academias afiliadas a CICOM' );?></h3>
		</div>
	<?php endif; ?>
</div>
</div>
<!--  -->
<!-- Medios -->
<div id="socios-medios" class="socios-cat row wrap-content">
	<div class="container">
		<div class="col-12">
			<h1><?php echo get_cat_name($medios);?></h1>
			<p><?php echo category_description($medios);?></p>
		</div>
		<?php
		$socio = array(
			'post_type' => 'socios-cicom',
			'cat' => $medios,
			'post-per-page' => -1
		);
		$q = new WP_Query($socio);
		if (have_posts()):the_post();
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
	else:
		?>
		<div class="col-12">
			<h3 class="text-center"><?php esc_html_e( 'No existen Medios afiliadas a CICOM' );?></h3>
		</div>
	<?php endif; ?>
</div>
</div>
<!--  -->
<!-- Anunciantes -->
<div id="socios-anun" class="socios-cat row wrap-content">
	<div class="container">
		<div class="col-12">
			<h1><?php echo get_cat_name($anun);?></h1>
			<p><?php echo category_description($anun);?></p>
		</div>
		<?php
		$socio = array(
			'post_type' => 'socios-cicom',
			'cat' => $anun,
			'post-per-page' => -1
		);
		$q = new WP_Query($socio);
		if (have_posts()):the_post();
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
	else:
		?>
		<div class="col-12">
			<h3 class="text-center"><?php esc_html_e( 'No existen Anunciantes afiliadas a CICOM' );?></h3>
		</div>
	<?php endif; ?>
</div>
</div>
<!--  -->
