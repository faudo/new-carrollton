
<div class='top-band'>
  <div class='container text-center'>

    <a id="logo" href="<?php bloginfo('url'); ?>/">
      <img 
      class="img-responsive" 
      src="<?php the_field('site-logo', 'option'); ?>" 
      alt="<?php echo esc_html(get_bloginfo('name'))?>" />
    </a>

    <div class="header-links">

      <?php if( have_rows('repeatable-social', 'option') ): ?>
      <ul class='social-links'>  
        <?php while ( have_rows('repeatable-social', 'option') ) : the_row(); ?>
        <li class="social-link">
          <a href="<?php the_sub_field('social-link');?>" target="_blank">
                <?php if(get_sub_field('social-select')!=='BetterBusinessBureau'){ ?><i class="fa fa-<?php echo strtolower(get_sub_field('social-select'));?>" aria-hidden="true"></i><?php } else { ?>
                <?php ?><img src="<?php get_template_directory_uri() ?>/images/bbb.png" width='15' height='15'><?php } ?>
            </a>
        </li>        
        <?php endwhile; ?>
      </ul>
      <?php endif;?>

      <?php if(get_field('button-cta', 'option')): echo do_shortcode(get_field('button-cta', 'option')); endif;?>
    </div>

  </div>
</div>

<div class='bottom-band'>
  <nav id="menu" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div>
       <ul> 
       <?php wp_nav_menu( array(
              'menu'              => 'primary',
              'theme_location'    => 'main-menu',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'menu_class'        => 'nav nav-stacked',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'items_wrap'        => banded_nav_wrap(),
              'walker'            => new wp_bootstrap_navwalker()));?>           
      </ul> 
    </div>
  </nav>
  <div class='clearfix'></div>
</div>