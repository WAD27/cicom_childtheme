<?php get_header(); ?>
    <div class="section-category container content-wrap">
        <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 no-sidebar">
                <?php get_template_part( 'framework/content/category');?>
                </div>

        </div>
    </div>
    <?php the_posts_pagination( array('prev_text' => __('&laquo;'), 'next_text'    => __('&raquo;'))) ?>
<?php get_footer(); ?>
