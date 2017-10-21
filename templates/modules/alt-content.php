<?php
if ( $data['reverse'] ) {
  $module_classes .= ' jbp-alt-content--reverse';
}
?>

<div class="jbp-alt-content <?php echo $module_classes; ?> <?php echo $overlay; ?>">

  <div class="container">

    <div class="jbp-alt-content__flex">

      <div class="jbp-alt-content__image" style="background-image: url(<?php echo $data['image']; ?>)"></div>

      <div class="jbp-alt-content__content">

        <?php echo $data['content']; ?>

      </div> <!--/.jbp-alt-content__content -->

    </div> <!--/.jbp-alt-content__flex -->

  </div> <!--/.container -->

</div> <!--/.jbp-alt-content -->
