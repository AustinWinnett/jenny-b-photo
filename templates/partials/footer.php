<footer class="footer">
  <div class="footer__top">
    <div class="container">
      <a href="<?php echo site_url(); ?>" class="footer__logo">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/BlushLogo.png'; ?>" alt="" class="logo logo--footer">
      </a>

      <nav class="footer-nav">
        <?php
        if (has_nav_menu('left_navigation')) :
          wp_nav_menu(['theme_location' => 'left_navigation', 'menu_class' => 'navbar-nav nav']);
        endif;
        ?>
        <?php
        if (has_nav_menu('right_navigation')) :
          wp_nav_menu(['theme_location' => 'right_navigation', 'menu_class' => 'navbar-nav nav']);
        endif;
        ?>
      </nav>
    </div> <!-- /.container -->
  </div> <!-- /.footer__top -->
  <div class="footer__bottom">
    <div class="container">
      <div class="footer__copy-credits">
        <div class="footer__copyright">
          <span>&copy; 2017 Jenny B. Photography. All right reserved.</span>
        </div> <!-- /.footer__copyright -->
        <div class="footer__credits">
          <span>Website developed by Desk Dog Development.</span>
        </div> <!-- /.footer__credits -->
      </div> <!-- /.footer__copy-credits -->
    </div> <!-- /.container -->
  </div> <!-- /.footer__bottom -->
</footer> <!-- /.footer -->
