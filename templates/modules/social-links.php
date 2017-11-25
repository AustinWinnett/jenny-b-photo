<div class="jbp-social-links <?php echo $module_classes; ?>">
  <div class="container">
    <div class="jbp-social-links__inner">
      <div class="jbp-social-links__title">
        <h1 class="display-heading">Get In Touch</h1>
      </div> <!--/.jbp-social-links__title -->
      <ul class="jbp-social-links__links">
        <?php if ( $data['facebook'] ) : ?>
          <li><a href="<?php echo $data['facebook'] ?>" target="_blank"><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg></a></li>
        <?php endif; ?>
        <?php if ( $data['twitter'] ) : ?>
          <li><a href="<?php echo $data['twitter'] ?>" target="_blank"><svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg></a></li>
        <?php endif; ?>
        <?php if ( $data['instagram'] ) : ?>
          <li><a href="<?php echo $data['instagram'] ?>" target="_blank"><svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg></a></li>
        <?php endif; ?>
      </ul> <!--/.jbp-social-links__links -->
    </div> <!-- /.jbp-social-links__inner -->
  </div> <!--/.container -->
</div> <!--/.jbp-social-links -->
