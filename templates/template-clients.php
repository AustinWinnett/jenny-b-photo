<?php
/*
Template Name: Clients
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/contents/content', 'clients'); ?>
<?php endwhile; ?>
