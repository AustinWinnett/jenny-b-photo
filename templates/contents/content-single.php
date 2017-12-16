

<?php while (have_posts()) : the_post(); ?>
  <?php if ( get_post_thumbnail_id() ) : ?>
    <?php dd_include_module(
      'banner',
      array(
        'images'  => array(
          '0'      => array(
            'url'  => wp_get_attachment_image_url(get_post_thumbnail_id(), 'full')
          )
        ),
        'title'    => get_the_title()
      )
    ) ?>
  <?php else : ?>
    <div class="post__header">
      <div class="container container--sm">
        <h1 class="display-heading"><?php the_title(); ?></h1>
      </div>
    </div>
  <?php endif; ?>

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

<?php if ( get_previous_post() || get_next_post() ) : ?>

  <div class="post__nav">

    <?php if ( get_previous_post() ) : ?>

      <?php
        $image = wp_get_attachment_image_url( get_post_thumbnail_id( get_previous_post()->ID ), 'medium' );
      ?>

      <div class="post__nav-link post__prev-post">

        <a href="<?php echo get_permalink(get_previous_post()->ID); ?>" class="overlay-link"></a>

        <div class="post__nav-img" style="background-image: url(<?php echo $image; ?>)">

        </div> <!-- /.post__nav-img -->

        <p class="post__nav-title"><?php echo get_previous_post()->post_title; ?></p>

      </div> <!-- /.post__nav-link -->

    <?php endif; ?>

    <?php if ( get_next_post() ) : ?>

      <?php
        $image = wp_get_attachment_image_url( get_post_thumbnail_id( get_next_post()->ID ), 'medium' );
      ?>

      <div class="post__nav-link post__next-post">

        <a href="<?php echo get_permalink(get_next_post()->ID); ?>" class="overlay-link"></a>

        <div class="post__nav-img" style="background-image: url(<?php echo $image; ?>)">

        </div> <!-- /.post__nav-img -->

        <p class="post__nav-title"><?php echo get_next_post()->post_title; ?></p>

      </div> <!-- /.post__nav-link -->

    <?php endif; ?>

  </div> <!-- /.post__nav -->

<?php endif; ?>
