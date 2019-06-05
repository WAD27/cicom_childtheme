<?php
$getAllCats = wp_get_post_categories($post->ID);
$type_class = '';
$type_post = '';
$image_height = '';
$layout_value = get_theme_mod( 'universal_post_type', 'masonry' );
if ($layout_value == 'classic'):
  $type_class = 'standart-post';

  elseif ($layout_value == 'medium'):
    $type_class = 'left-image-post';

    elseif ($layout_value == 'masonry'):
      $type_class = 'universal_mas_item';

    endif;
    //custom
    if (is_category(98)):
      $cat_color = 'var(--color-clear)';
      $color = 'var(--color-dark)';
      elseif (is_category(97)):
        $cat_color = 'var(--color-gray-1)';
        $color = 'var(--color-white)';
      endif;
      ?>

      <?php if(is_single()) { ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class("card-article");?> >
          <div class="">

          <?php } else  { ?>
            <?php if( has_post_thumbnail()) { ?>
              <article class="col-12 col-sm-6 col-md-4 col-lg-4 card-article" data-catslug-post="<?php echo implode(' ', $getAllCats) ?>" id="post-<?php the_ID();?>" <?php if($type_class != 'post-set') { echo post_class("post-set $type_class"); } ?>>
                <div class="cat-card" style="background-color:<?php echo $cat_color; ?>;color:<?php echo $color; ?>">
                <?php } else  { ?>
                  <article data-catslug-post="<?php echo implode(' ', $getAllCats) ?>" id="post-<?php the_ID();?>" <?php if($type_class != 'post-set') { echo post_class("post-set no-thumbnail $type_class"); } ?>>
                    <div class="cat-card" style="background-color:<?php echo $cat_color; ?>;color:<?php echo $color; ?>">
                    <?php } ?>
                  <?php } ?>
                  <?php
                  $thumbnail_id = get_post_thumbnail_id($post->ID);
                  $image_url = wp_get_attachment_url($thumbnail_id);
                  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), '');
                  $image_height = get_theme_mod( 'universal_post_height');

                  if(is_single()) { ?>
                    <div class="post-content">
                      <?php the_content(); ?>
                      <?php $defaults = array( 'link_before' => '<span>',	'link_after'  => '</span>','before'   => '<div class="universal_pg_single" >',	'after' => '</div>',); wp_link_pages( $defaults );?>
                    </div>
                    <?php if ( has_tag() ) : ?>
                      <div class="single-tags"><a href="<?php echo get_tag_link(1); ?>"><?php the_tags(); ?></a></div>
                    <?php endif; ?>
                    <div class="social-single">
                      <?php $multicheck_value = get_theme_mod( 'universal_soc_link', array( 'facebook', 'twitter', 'pinterest', 'tumblr', 'google', 'linkedin') ); ?>
                      <?php if ( ! empty( $multicheck_value ) ) : ?>
                        <ul class="icon-links">
                          <?php foreach ( $multicheck_value as $checked_value ) : ?>
                            <?php if ($checked_value == 'facebook'): ?>
                              <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><span class="fa fa-facebook"></span></a></li>
                            <?php elseif ($checked_value == 'twitter'): ?>
                              <li><a href="https://twitter.com/home?status=Check out this great post by <?php the_author() ?> <?php the_permalink(); ?>" target="_blank"><span class="fa fa-twitter"></span></a></li>
                            <?php elseif ($checked_value == 'pinterest'): ?>
                              <li><a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php echo esc_url($image[0]) ?>&amp;description=<?php echo esc_html(get_the_title()); ?>" target="_blank"><span class="fa fa-pinterest"></span></a></li>
                            <?php elseif ($checked_value == 'tumblr'): ?>
                              <li><a href="http://www.tumblr.com/share/link?url=<?php the_permalink(); ?>" target="_blank"><span class="fa fa-tumblr"></span></a></li>
                            <?php elseif ($checked_value == 'google'): ?>
                              <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><span class="fa fa-google"></span></a></li>
                            <?php elseif ($checked_value == 'linkedin'): ?>
                              <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php echo esc_html(get_the_title()); ?>&summary=&source=" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                            <?php endif;?>
                          <?php endforeach; ?>
                        </ul>
                      <?php endif; ?>
                    </div>
                  <?php } else { ?>
                    <div class="col-12">
                      <div class="row">
                        <?php
                        //if (have_posts()): the_post();
                         ?>
                        <!-- <a href="<?php //the_permalink(); ?>" style="height:<?php //echo esc_attr($image_height) ?>;"> -->
                          <div class="col-12 imgLiquid imgLiquidFill">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="CICOM blog">
                          </div>
                        <!-- </a> -->
                      <?php// endif; ?>
                      </div>
                    </div>
                    <div class="content-block">
                      <h5 class="title">
                        <a style="color:<?php echo $color; ?>" href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo esc_html(get_the_title()); ?></a>
                      </h5>
                      <?php echo get_the_excerpt(); ?>
                      <a href="<?php the_permalink() ?>" class="btn btn-gray btn-xs" style="<?php echo $color; ?>"><?php esc_html_e('Leer más','universal-wp') ?></a>
                    </div>

                  <?php }; ?>
                  <div class="clear"></div>
                </div>
              </article>
