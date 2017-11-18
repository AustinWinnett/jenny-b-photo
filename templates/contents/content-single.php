

<?php while (have_posts()) : the_post(); ?>
  <?php dd_include_module(
    'banner',
    array(
      'images'  => array(
        '0'      => 'https://unsplash.it/1920/1286',
      ),
      'title'    => get_the_title()
    )
  ) ?>

  <article <?php post_class(); ?>>
    <div class="container container--sm">
      <header>
        <?php get_template_part('templates/partials/entry-meta'); ?>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </footer>
      <?php comments_template('/templates/partials/comments.php'); ?>
    </div>
  </article>
<?php endwhile; ?>
