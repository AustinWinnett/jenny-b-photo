<header class="navbar">

  <div class="container">
    <div class="navbar__flex">
      <nav class="left-nav">
        <?php
        if (has_nav_menu('left_navigation')) :
          wp_nav_menu(['theme_location' => 'left_navigation', 'menu_class' => 'navbar-nav nav']);
        endif;
        ?>
      </nav>

      <div class="navbar-header">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoPNG.png" alt="" class="logo--header">

        <button type="button" class="navbar-toggle navbar-toggle--stand" data-nav="collapse" data-target="#primary-nav">
          <span class="navbar-toggle__box">
            <span class="navbar-toggle__inner"></span>
          </span><!-- .navbar-toggle__box -->
        </button><!-- .navbar-toggle -->
      </div>

      <nav class="right-nav">
        <?php
        if (has_nav_menu('right_navigation')) :
          wp_nav_menu(['theme_location' => 'right_navigation', 'menu_class' => 'navbar-nav nav']);
        endif;
        ?>
      </nav>
    </div>
  </div>
</header>
