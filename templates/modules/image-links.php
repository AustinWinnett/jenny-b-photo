<div class="jbp-image-links <?php echo $module_classes; ?>">
  <div class="container">
    <div class="jbp-image-links__flex">
      <?php if ( $data['images'] ) : ?>
        <?php foreach ( $data['images'] as $key => $image ) : ?>
          <div class="jbp-image-links__image" style="background-image: url(<?php echo $image['image']; ?>)">
            <a href="<?php echo $image['link']; ?>" class="overlay-link"></a>
            <span><?php echo $image['text']; ?></span>
          </div> <!-- /.jbp-image-links__image -->
        <?php endforeach; ?>
      <?php endif; ?>
    </div> <!-- /.jbp-image-links__flex -->
  </div> <!-- /.container -->
</div> <!-- /.jbp-image-links -->
