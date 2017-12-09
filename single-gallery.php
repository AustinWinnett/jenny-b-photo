<?php dd_include_module(
  'banner',
  array(
    'images'  => array(
      '0'      => wp_get_attachment_image_url( get_post_thumbnail_id(), 'Full' ),
    ),
    'title'    => get_the_title()
  )
) ?>

<?php if ( get_current_user_id() === 3 ) {
  echo 'You are the right user!';
} else {
  echo 'Who are you?';
} ?>

<?php dd_include_module(
  'masonry-grid',
  array(
    'images'  => array(
      '0'      => 'https://unsplash.it/1920/1280',
      '1'      => 'https://unsplash.it/1420/1280',
      '2'      => 'https://unsplash.it/1920/1280',
      '3'      => 'https://unsplash.it/1920/800',
      '4'      => 'https://unsplash.it/1920/1280',
      '5'      => 'https://unsplash.it/1000/1280',
      '6'      => 'https://unsplash.it/1920/1280',
      '7'      => 'https://unsplash.it/1420/1280',
      '8'      => 'https://unsplash.it/1920/1280',
      '9'      => 'https://unsplash.it/1920/800',
      '10'      => 'https://unsplash.it/1920/1280',
      '11'      => 'https://unsplash.it/1000/1280',
    ),
    'button_text'    => 'Download',
    'button_link'    => '#'
  )
) ?>
