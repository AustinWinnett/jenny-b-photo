<div class="jbp-instagram">

  <div class="container">

    <?php if ( $data['title'] ) : ?>
      <div class="instagram__content">
        <?php echo $data['title']; ?>
      </div> <!-- /.instagram__content -->
    <?php endif; ?>

    <!-- USER ID -->
    <div class="instagram__hidden" id="user_id" data-value="<?php echo $data['user_id']; ?>"></div>

    <!-- CLIENT ID -->
    <div class="instagram__hidden" id="client_id" data-value="<?php echo $data['client_id']; ?>"></div>

    <!-- URL -->
    <div class="instagram__hidden" id="instagram_url" data-value="https://www.instagram.com/<?php echo str_replace('@', '', $data['username']) ?>"></div>

    <!-- USERNAME -->
    <div class="instagram__hidden" id="instagram_username" data-value="<?php echo $data['username']; ?>"></div>

    <!-- ACCESS TOKEN -->
    <div class="instagram__hidden" id="access_token" data-value="<?php echo $data['access_token']; ?>"></div>

    <!-- WRAPPER -->
    <div class="instagram__wrapper" id="instafeed"></div>

  </div> <!-- /.container -->

</div> <!-- /.jbp-instagram -->
