<?php
//nav wrap functions for various menus
function standard_nav_wrap() {
  // default value of 'items_wrap' is <ul id="%1$s" class="%2$s">%3$s</ul>'
  // open the <ul>, set 'menu_class' and 'menu_id' values
  ob_start(); ?>
  <ul id="%1$s" class="%2$s">%3$s 
  <?php if( have_rows('repeatable-social', 'option') ):
    // loop through the rows of data
    while ( have_rows('repeatable-social', 'option') ) : the_row();
    ?><li class="social-link">
              <a href="<?php the_sub_field('social-link');?>" target="_blank">
                    <?php if(get_sub_field('social-select')!=='BetterBusinessBureau'){ ?><i class="fa fa-<?php echo strtolower(get_sub_field('social-select'));?>" aria-hidden="true"></i><?php } else { ?>
                    <?php ?><img src="<?php get_template_directory_uri() ?>/images/bbb.png" width='15' height='15'><?php } ?>
                </a>
            </li>
            <?php
    endwhile;
  else :
    // no rows found
  endif;?>
  </ul>
  <?php 
  if(get_field('button-cta', 'option')):?>
    <?php echo do_shortcode(get_field('button-cta', 'option'));?>
  <?php endif;
    return ob_get_clean();
}

function banded_nav_wrap() {
  // default value of 'items_wrap' is <ul id="%1$s" class="%2$s">%3$s</ul>'
  // open the <ul>, set 'menu_class' and 'menu_id' values
  ob_start();
  ?><ul id="%1$s" class="%2$s">%3$s</ul><?php
  return ob_get_clean();
}

function nocta_nav_wrap() {
  // default value of 'items_wrap' is <ul id="%1$s" class="%2$s">%3$s</ul>'
  // open the <ul>, set 'menu_class' and 'menu_id' values
  ob_start(); ?>
  <ul id="%1$s" class="%2$s">%3$s 
  <?php if( have_rows('repeatable-social', 'option') ):
    // loop through the rows of data
    while ( have_rows('repeatable-social', 'option') ) : the_row();
    ?><li class="social-link">
              <a href="<?php the_sub_field('social-link');?>" target="_blank">
                    <?php if(get_sub_field('social-select')!=='BetterBusinessBureau'){ ?><i class="fa fa-<?php echo strtolower(get_sub_field('social-select'));?>" aria-hidden="true"></i><?php } else { ?>
                    <?php ?><img src="<?php get_template_directory_uri() ?>/images/bbb.png" width='15' height='15'><?php } ?>
                </a>
            </li>
            <?php
    endwhile;
  else :
    // no rows found
  endif;?>
  </ul>
  <?php
    return ob_get_clean();
}


function below_header_nav_wrap() {
  // default value of 'items_wrap' is <ul id="%1$s" class="%2$s">%3$s</ul>'
  // open the <ul>, set 'menu_class' and 'menu_id' values
  ob_start();
  ?><ul id="%1$s" class="%2$s">%3$s <?php if(get_field('button-cta', 'option')):?><li class="header-cta-button"><?php echo do_shortcode(get_field('button-cta', 'option'));?></li><?php endif;?>
  <?php if( have_rows('repeatable-social', 'option') ):
    // loop through the rows of data
    while ( have_rows('repeatable-social', 'option') ) : the_row();
    ?><li class="social-link">
              <a href="<?php the_sub_field('social-link');?>" target="_blank">
                    <?php if(get_sub_field('social-select')!=='BetterBusinessBureau'){ ?><i class="fa fa-<?php echo strtolower(get_sub_field('social-select'));?>" aria-hidden="true"></i><?php } else { ?>
                    <?php ?><img src="<?php get_template_directory_uri() ?>/images/bbb.png" width='15' height='15'><?php } ?>
                </a>
            </li>
            <?php
    endwhile;
  else :
    // no rows found
  endif;?></ul><?php
  return ob_get_clean();
}


?>