<div class="jbp-team-grid <?php echo $module_classes; ?> <?php echo $overlay; ?>">

  <div class="container">

    <div class="jbp-team-grid__content">

      <div class="jbp-team-grid__content-inner">

        <?php echo $data['content']; ?>

      </div> <!-- /.jbp-team-grid__content-inner -->

    </div> <!--/.jbp-team-grid__content -->

    <div class="jbp-team-grid__box">

      <div class="jbp-team-grid__team">

        <?php foreach ( $data['members'] as $key => $member ) : ?>

          <div class="jbp-team-grid__member">

            <div class="jbp-team-grid__member-image" style="background-image: url(<?php echo $member['image']; ?>)"></div>

            <div class="jbp-team-grid__member-content">

              <h3 class="display-heading"><?php echo $member['name']; ?></h3>

              <div class="jbp-team-grid__member-content__desc">

                <?php echo $member['content']; ?>

              </div> <!-- /.jbp-team-grid__member-content__desc -->

            </div> <!-- /.jbp-team-grid__member-content -->

          </div> <!-- /.jbp-team-grid__member -->

        <?php endforeach; ?>

      </div> <!-- /.jbp-team-grid__team -->

    </div> <!--/.jbp-team-grid__box -->

  </div> <!--/.container -->

</div> <!--/.jbp-team-grid -->
