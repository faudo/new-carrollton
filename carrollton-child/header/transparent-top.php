


<div class="container">
  <div class="row flex">
    <div class="col-md-3 p-0">
        <section id="branding">
            <a id="logo" href="<?php bloginfo('url'); ?>/"><img class="img-responsive" src="<?php the_field('site-logo', 'option'); ?>" alt="<?php echo esc_html(get_bloginfo('name'))?>"></a>
        </section>
    </div>
    <div class="col-md-9 p-0 flex-col flex-top flex-right">
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
			                  'items_wrap'		    => nocta_nav_wrap(),
                      'walker'            => new wp_bootstrap_navwalker()
                      ));?>           
              </ul> 
            </div>
        </nav>
    </div>
    <div class='clearfix'></div>
      
  </div>
</div>