
<?php dd_include_module(
  'banner',
  array(
    'images'  => array(
      '0'      => 'https://unsplash.it/1920/1280',
      '1'      => 'https://unsplash.it/1920/1281'
    ),
    'title'    => 'home'
  )
) ?>

<?php dd_include_module(
  'image-links',
  array(
    'images'  => array(
      '0'      => array(
        'image'      => 'https://unsplash.it/1920/1280',
        'text'       => 'Family',
      ),
      '1'      => array(
        'image'      => 'https://unsplash.it/1920/1281',
        'text'       => 'Wedding',
      ),
      '2'      => array(
        'image'      => 'https://unsplash.it/1920/1282',
        'text'       => 'Children',
      ),
    ),
  )
) ?>

<a href="#" class="btn">Open Link</a>
