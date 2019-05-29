<div class="wrap-content">
	<?php while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
		<?php $defaults = array( 'link_before' => '<span>',	'link_after'  => '</span>','before'   => '<div class="universal_pg_single" >',	'after' => '</div>',); wp_link_pages( $defaults );?>
		<?php endwhile; ?>
</div>
