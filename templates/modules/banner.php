<?php
  if ( $data['image'] ) {
    $overlay = 'jbp-banner--overlay';
  } else {
    $overlay = '';
  }
?>

<div class="jbp-banner <?php echo $module_classes; ?> <?php echo $overlay; ?>">
  <div class="jbp-banner__slides">
    <?php foreach ( $data['images'] as $key => $image ) : ?>
      <div class="jbp-banner__slide" style="background-image: url(<?php echo $image; ?>)"> </div>
    <?php endforeach; ?>
  </div> <!--/.jbp-banner__slides -->
  <div class="jbp-banner__title">
    <div class="container">
      <h1 class="display-heading"><?php echo $data['title']; ?></h1>
    </div> <!--/.jbp-banner__title -->
  </div> <!--/.container -->
</div> <!--/.jbp-banner -->
