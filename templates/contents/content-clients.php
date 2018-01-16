<?php

$args = array(
  'post_type'        => 'post',
  'post_status'      => 'publish',
  'post__in'          => get_field('clients'),
  'posts_per_page'  => '-1',
  'orderby'          => 'date',
  'order'            => 'DESC',
  'category__not_in' => array(7)
);

$clients = get_posts($args);

?>

<?php dd_include_module(
  'banner',
  array(
    'images'  => get_field('banner_images'),
    'title'    => get_field('banner_title'),
  )
) ?>

<div class="clients__page">

  <div class="jbp-flexible-content">
    <div class="row-wrap">
      <div class="container">
        <div class="row">
          <div class="col-full" style="text-align: center;">
            <?php echo wpautop(get_field('main_content')); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="clients__grid">
      <?php foreach( $clients as $key => $client ) : ?>
        <?php if ( get_the_post_thumbnail_url($client->ID) ) : ?>
          <div class="clients__client" style="background-image: url(<?php echo wp_get_attachment_image_url(get_post_thumbnail_id($client->ID), 'medium_large'); ?>);">
            <a href="<?php echo get_permalink($client->ID); ?>" class="overlay-link"></a>
            <span class="title-heading"><?php echo $client->post_title; ?></span>
          </div>
        <?php else : ?>
          <div class="clients__client clients__client--no-image">
            <a href="<?php echo get_permalink($client->ID); ?>" class="overlay-link"></a>
            <span class="title-heading"><?php echo $client->post_title; ?></span>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>

</div>
