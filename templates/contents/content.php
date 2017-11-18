<article <?php post_class('entry'); ?>>
  <div class="entry-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
    <a href="<?php echo get_permalink(); ?>" class="overlay-link"></a>
  </div>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
