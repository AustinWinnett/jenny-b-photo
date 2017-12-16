
<?php dd_include_module(
  'banner',
  array(
    'images'  => array(
      '0'      => 'https://unsplash.it/1920/1280',
      '1'      => 'https://unsplash.it/1920/1281'
    ),
    'title'    => get_the_title()
  )
) ?>

<div class="jbp-flexible-content">
  <div class="row-wrap">
    <div class="container">
      <div class="row">
        <div class="col-full" style="text-align: center;">
          <h1 class="title-heading">Photography in Kansas City</h1>
          <h2 class="display-heading">Title Goes Here</h2>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque maxime dolore, veniam voluptas quae labore iure reprehenderit, dolor. Earum, cupiditate expedita nulla amet! Ut alias, cupiditate doloremque expedita quas maiores! Quia, ratione, consectetur. Inventore veritatis voluptates libero nemo accusantium modi nostrum, sunt et corporis ipsam unde porro debitis laboriosam?</p>
          <iframe src="https://player.vimeo.com/video/6370469" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="jbp-flexible-content">
  <div class="row-wrap">
    <div class="container">
      <div class="row">
        <div class="col-full" style="text-align: center;">
          <h1 class="title-heading">Photography in Kansas City</h1>
          <h2 class="display-heading">Title Goes Here</h2>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque maxime dolore, veniam voluptas quae labore iure reprehenderit, dolor. Earum, cupiditate expedita nulla amet! Ut alias, cupiditate doloremque expedita quas maiores! Quia, ratione, consectetur. Inventore veritatis voluptates libero nemo accusantium modi nostrum, sunt et corporis ipsam unde porro debitis laboriosam?</p>
          <?php echo do_shortcode('[ninja_form id=1]') ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php dd_include_module(
  'image-links',
  array(
    'images'  => array(
      '0'      => array(
        'image'      => 'https://unsplash.it/1920/1280',
        'text'       => 'Family',
        'link'       => '#link'
      ),
      '1'      => array(
        'image'      => 'https://unsplash.it/1920/1281',
        'text'       => 'Wedding',
        'link'       => '#link'
      ),
      '2'      => array(
        'image'      => 'https://unsplash.it/1920/1282',
        'text'       => 'Children',
        'link'       => '#link'

      ),
    ),
  )
) ?>

<?php dd_include_module(
  'alt-content',
  array(
    'image'    => 'https:/unsplash.it/1920/1280',
    'content'    => '<h1 class="title-heading">Photography in Kansas City</h1>
    <h2 class="display-heading">Title Goes Here</h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque maxime dolore, veniam voluptas quae labore iure reprehenderit, dolor. Earum, cupiditate expedita nulla amet! Ut alias, cupiditate doloremque expedita quas maiores! Quia, ratione, consectetur. Inventore veritatis voluptates libero nemo accusantium modi nostrum, sunt et corporis ipsam unde porro debitis laboriosam?</p>'
  )
) ?>

<?php dd_include_module(
  'alt-content',
  array(
    'image'    => 'https:/unsplash.it/1920/1280',
    'content'    => '<h1 class="title-heading">Photography in Kansas City</h1>
    <h2 class="display-heading">Title Goes Here</h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque maxime dolore, veniam voluptas quae labore iure reprehenderit, dolor. Earum, cupiditate expedita nulla amet! Ut alias, cupiditate doloremque expedita quas maiores! Quia, ratione, consectetur. Inventore veritatis voluptates libero nemo accusantium modi nostrum, sunt et corporis ipsam unde porro debitis laboriosam?</p>',
    'reverse'      => true
  )
) ?>

<?php dd_include_module(
  'masonry-grid',
  array(
    'title'    => '<h2 class="display-heading" style="text-align: center;">Featured Images</h2>',
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
    'button_text'    => 'View More',
    'button_link'    => '#'
  )
) ?>

<?php dd_include_module(
  'team-grid',
  array(
    'members'  => array(
      '0'      => array(
        'image'      => 'https://unsplash.it/1920/1280',
        'content'       => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum eos facilis id soluta quisquam commodi necessitatibus et. Delectus, nam alias.</p>',
        'name'       => 'Jenny Borel'
      ),
      '1'      => array(
        'image'      => 'https://unsplash.it/1920/1281',
        'content'       => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, ratione optio quod magni at tempore cumque recusandae corrupti commodi cupiditate.</p>',
        'name'       => 'Jenny Borel'
      ),
      '2'      => array(
        'image'      => 'https://unsplash.it/1920/1282',
        'content'       => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, ratione optio quod magni at tempore cumque recusandae corrupti commodi cupiditate.</p>',
        'name'       => 'Jenny Borel'
      ),

    ),
    'content'    => '<h4 class="title-heading">This is our team.</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit perferendis tempore veritatis explicabo ducimus dolore, vitae fugit. Officia, suscipit explicabo provident quidem voluptates, consectetur. Ipsum quis incidunt iure voluptatibus quisquam quibusdam eius, animi sit voluptates. Doloremque, ducimus, ipsum. Incidunt officiis aspernatur architecto mollitia ipsam libero iure ea neque distinctio ratione?</p>'
  )
) ?>

<?php dd_include_module(
  'team-boxes',
  array(
    'members'  => array(
      '0'      => array(
        'image'      => 'https://unsplash.it/1920/1280',
        'content'       => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum eos facilis id soluta quisquam commodi necessitatibus et. Delectus, nam alias.</p>',
        'name'       => 'Jenny Borel'
      ),
      '1'      => array(
        'image'      => 'https://unsplash.it/1920/1281',
        'content'       => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, ratione optio quod magni at tempore cumque recusandae corrupti commodi cupiditate.</p>',
        'name'       => 'Jenny Borel'
      ),

    ),
    'content'    => '<h4 class="display-heading">meet the team</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit perferendis tempore veritatis explicabo ducimus dolore, vitae fugit. Officia, suscipit explicabo provident quidem voluptates, consectetur. Ipsum quis incidunt iure voluptatibus quisquam quibusdam eius, animi sit voluptates. Doloremque, ducimus, ipsum. Incidunt officiis aspernatur architecto mollitia ipsam libero iure ea neque distinctio ratione?</p>'
  )
) ?>

<?php dd_include_module(
  'social-links',
  array(
    'facebook'     => '#facebook',
    'instagram'    => '#instagram',
    'twitter'      => '#twitter'
  )
) ?>

<?php dd_include_module(
  'instagram',
  array(
    'title'         => '<h4 class="display-heading">Follow us</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem ipsum iure odio magnam mollitia optio impedit culpa, accusamus reprehenderit rerum, tenetur temporibus ullam! Dignissimos, voluptatem.</p>',
    'user_id'       => '308884031',
    'client_id'     => 'deb9cb5d31b6433f8bb3c607fc72666f',
    'access_token'  => '308884031.1677ed0.3da2c406cf634a2faa5ccfe9ee7f9cc3',
    'username'      => '@lyss413',
  )
) ?>
