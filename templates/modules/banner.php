<?php
  if ( $data['image'] ) {
    $overlay = 'jbp-banner--overlay';
  } else {
    $overlay = '';
  }
?>

<div class="jbp-banner <?php echo $module_classes; ?> <?php echo $overlay; ?>">
  <div class="jpb-banner__slides">
    <?php foreach ( $data['images'] as $key => $image ) : ?>
      <div class="jpb-banner__slide" style="background-image: url(<?php echo $image; ?>)"> </div>
    <?php endforeach; ?>
  </div> <!--/.jpb-banner__slides -- >
  <div class="jpb-banner__title">
    <div class="container">
      <h1 class="display-heading"><?php echo $data['title']; ?></h1>
    </div> <!--/.jpb-banner__title -- >
  </div> <!--/.container -- >
</div> <!--/.jpb-banner -- >
