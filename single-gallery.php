<?php dd_include_module(
  'banner',
  array(
    'images'  => array(
      '0'      => array(
        'url'  => wp_get_attachment_image_url( get_post_thumbnail_id(), 'Full' )
      ),
    ),
    'title'    => get_the_title()
  )
) ?>

<?php if ( wp_get_current_user()->ID === get_field('client_id')['ID'] || current_user_can('editor') || current_user_can('administrator') ) : ?>
  <?php dd_include_module(
    'masonry-grid',
    array(
      'images'  => get_field('client_gallery_images'),
      'button_text'    => 'Download',
      'button_link'    => get_field('client_download_link')
    )
  ) ?>
<?php else : ?>

  <div class="jbp-flexible-content">
    <div class="row-wrap">
      <div class="container">
        <div class="row">
          <div class="col-full" style="text-align: center;">
            <h2 class="title-heading">Content Restricted</h2>
            <p>This page is restricted for a certain user.</p>
            <?php wp_login_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endif; ?>
