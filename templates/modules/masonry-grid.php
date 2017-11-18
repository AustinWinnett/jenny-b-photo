<div class="jbp-masonry-grid <?php echo $module_classes; ?> <?php echo $overlay; ?>">

  <div class="container">

    <?php if( $data['title'] ) : ?>

      <div class="jbp-masonry-grid__title">

        <?php echo $data['title']; ?>

      </div> <!-- .jbp-masonry-grid__title -->

    <?php endif; ?>

    <div class="jbp-masonry-grid__grid">

      <?php foreach ( $data['images'] as $key => $image ) : ?>

        <a href="<?php echo $image; ?>" class="jbp-masonry-grid__image" rel="magnific">
          <img src="<?php echo $image; ?>" alt="">
        </a>

      <?php endforeach; ?>

    </div> <!--/.jbp-masonry-grid__grid -->

    <?php if( $data['button_text'] ) : ?>

      <div class="jbp-masonry-grid__more">

        <a href="<?php echo $data['button_link']; ?>" class="btn"><?php echo $data['button_text']; ?></a>

      </div> <!--/.jbp-masonry-grid__more -->

    <?php endif; ?>

  </div> <!--/.container -->

</div> <!--/.jbp-masonry-grid -->
