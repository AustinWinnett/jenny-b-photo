<?php dd_include_module(
  'banner',
  array(
    'images'  => array(
      '0'      => 'https://unsplash.it/1920/1285',
    ),
    'title'    => 'blog'
  )
) ?>

<div class="blog__page">

  <div class="container container--sm">

    <?php if (!have_posts()) : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
      </div>
      <?php get_search_form(); ?>
    <?php endif; ?>

    <div class="blog__posts">

      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/contents/content'); ?>
      <?php endwhile; ?>

    </div>

    <?php if ($wp_query->max_num_pages > 1) : ?>
      <nav class="post-nav">
        <ul class="pager">
          <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
          <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
        </ul>
      </nav>
    <?php endif; ?>

  </div>

</div>
