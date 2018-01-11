<div class="jbp-video-popups <?php echo $module_classes; ?>">
  <div class="container">
    <?php if ( $data['title'] ) : ?>
      <h3 class="title-heading"><?php echo $data['title']; ?></h3>
    <?php endif; ?>
    <div class="jbp-video-popups__flex">
      <?php if ( $data['videos'] ) : ?>
        <?php foreach ( $data['videos'] as $key => $image ) : ?>
          <div class="jbp-video-popups__image" style="background-image: url(<?php echo wp_get_attachment_image_url($image['image']['id'], 'medium_large'); ?>)">
            <a href="<?php echo $image['link']; ?>" class="overlay-link" rel="magnific-video"></a>
            <svg class="icon icon-play"><use xlink:href="#icon-play"></use></svg>
            <span class="title-heading"><?php echo $image['text']; ?></span>
          </div> <!-- /.jbp-video-popups__image -->
        <?php endforeach; ?>
      <?php endif; ?>
    </div> <!-- /.jbp-video-popups__flex -->
  </div> <!-- /.container -->
</div> <!-- /.jbp-video-popups -->
