<?php
  if ( $data['image'] ) {
    $overlay = 'jbp-banner--overlay';
  } else {
    $overlay = '';
  }
?>

<div class="jbp-banner <?php echo $module_classes; ?> <?php echo $overlay; ?>" style="background-image: url(<?php echo $data['image']; ?>)">
  <div class="jbp-banner__wrapper">
    <?php echo $data['content']; ?>
  </div>
</div>
