  

  <div class='container-fluid' style="height:100%;">
    <div class='row' style="height:100%;">
      <div class='col-xs-12'>

        <div id="logo">
          <a href='<?php echo get_home_url(); ?>'>
            <img src="<?php the_field('site-logo','options'); ?>" >
          </a>
        </div>

        <nav id="menu" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          
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
                   'items_wrap'        => below_header_nav_wrap(),
                   'walker'            => new wp_bootstrap_navwalker()));?>           
           </ul> 
          </div>
        </nav>

      </div>    
    </div>
  </div>