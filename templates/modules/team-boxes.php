<div class="jbp-team-boxes <?php echo $module_classes; ?> <?php echo $overlay; ?>">

  <div class="container">

    <div class="jbp-team-boxes__content">

      <div class="jbp-team-boxes__content-inner">

        <?php echo $data['content']; ?>

      </div> <!-- /.jbp-team-boxes__content-inner -->

    </div> <!--/.jbp-team-boxes__content -->

    <div class="jbp-team-boxes__box">

      <div class="jbp-team-boxes__team">

        <?php foreach ( $data['members'] as $key => $member ) : ?>

          <div class="jbp-team-boxes__member">

            <div class="jbp-team-boxes__member-image" style="background-image: url(<?php echo $member['image']; ?>)"></div>

            <div class="jbp-team-boxes__member-content">

              <h3 class="display-heading"><?php echo $member['name']; ?></h3>

              <div class="jbp-team-boxes__member-content__desc">

                <?php echo $member['content']; ?>

              </div> <!-- /.jbp-team-boxes__member-content__desc -->

            </div> <!-- /.jbp-team-boxes__member-content -->

          </div> <!-- /.jbp-team-boxes__member -->

        <?php endforeach; ?>

      </div> <!-- /.jbp-team-boxes__team -->

    </div> <!--/.jbp-team-boxes__box -->

  </div> <!--/.container -->

</div> <!--/.jbp-team-boxes -->
