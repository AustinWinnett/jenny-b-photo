<?php

// check if the flexible content field has rows of data
if( have_rows('flex_default') ):

     // loop through the rows of data
    while ( have_rows('flex_default') ) : the_row();

      if( get_row_layout() == 'wysiwyg' ): ?>

        <div class="jbp-flexible-content">
          <div class="row-wrap">
            <div class="container">
              <div class="row">
                <div class="col-full">
                  <?php echo get_sub_field('content'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php elseif( get_row_layout() == 'banner' ): ?>

        <?php
          dd_include_module(
            'banner',
            array(
              'images'  => get_sub_field('images'),
              'title'    => get_sub_field('title'),
            )
          );
        ?>

      <?php elseif( get_row_layout() == 'alt_content' ): ?>

        <?php
          dd_include_module(
            'alt-content',
            array(
              'image'      => wp_get_attachment_image_url( get_sub_field('image')['id'], 'Full' ),
              'content'    => get_sub_field('content'),
              'reverse'    => get_sub_field('reverse')
            )
          );
        ?>

      <?php elseif( get_row_layout() == 'image_links' ): ?>

        <?php
          dd_include_module(
            'image-links',
            array(
              'images'  => get_sub_field('images'),
            )
          );
        ?>

      <?php elseif( get_row_layout() == 'masonry_grid' ): ?>

        <?php
          dd_include_module(
            'masonry-grid',
            array(
              'title'    => get_sub_field('title'),
              'images'  => get_sub_field('images'),
              'button_text'    => get_sub_field('button_text'),
              'button_link'    => get_sub_field('button_link')
            )
          );
        ?>

      <?php elseif( get_row_layout() == 'team_grid' ): ?>

        <?php
          dd_include_module(
            'team-grid',
            array(
              'members'  => get_sub_field('members'),
              'content'    => get_sub_field('content')
            )
          );
        ?>

      <?php elseif( get_row_layout() == 'team_boxes' ): ?>

        <?php
          dd_include_module(
            'team-boxes',
            array(
              'members'  => get_sub_field('members'),
              'content'    => get_sub_field('content')
            )
          );
        ?>

      <?php elseif( get_row_layout() == 'social_links' ): ?>

        <?php
          dd_include_module(
            'social-links',
            array(
              'facebook'     => get_sub_field('facebook'),
              'instagram'    => get_sub_field('instagram'),
              'twitter'      => get_sub_field('twitter')
            )
          );
        ?>

      <?php elseif( get_row_layout() == 'instagram_feed' ): ?>

        <?php
          dd_include_module(
            'instagram',
            array(
              'title'         => get_sub_field('title'),
              'user_id'       => get_sub_field('user_id'),
              'client_id'     => get_sub_field('client_id'),
              'access_token'  => get_sub_field('access_token'),
              'username'      => get_sub_field('username')
            )
          );
        ?>

      <?php elseif( get_row_layout() == 'video_popups' ): ?>

        <?php
        dd_include_module(
          'video-popups',
          array(
            'title'    => get_sub_field('title'),
            'videos'   => get_sub_field('videos'),
          )
        );
        ?>

      <?php endif;

    endwhile;

else :

    // no layouts found

endif;

?>
