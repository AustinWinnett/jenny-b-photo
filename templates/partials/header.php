<header class="navbar">
  <img src="<?php echo get_template_directory_uri() . '/assets/images/LogoPNG.png'; ?>" alt="" class="logo logo--header">
  <div class="container">
    <nav class="primary-nav">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
