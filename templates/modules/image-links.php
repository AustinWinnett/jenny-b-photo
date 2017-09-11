<div class="jbp-image-links <?php echo $module_classes; ?>">
  <div class="container">
    <div class="jbp-image-links__flex">
      <?php if ( $data['images'] ) : ?>
        <?php foreach ( $data['images'] as $key => $image ) : ?>
          <div class="jbp-image-links__image" style="background-image: url(<?php echo $image['image']; ?>)">
            <a href="#" class="overlay-link"></a>
            <?php if ($image['text'] ) : ?>
              <div class="jbp-image-links__image-text"></div>
              <span><?php echo $image['text']; ?></span>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
