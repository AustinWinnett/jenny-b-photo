<div class="clients__page">

  <div class="jbp-flexible-content">
    <div class="row-wrap">
      <div class="container">
        <div class="row">
          <div class="col-full" style="text-align: center;">
            <h1 class="display-heading">Clients</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque maxime dolore, veniam voluptas quae labore iure reprehenderit, dolor. Earum, cupiditate expedita nulla amet! Ut alias, cupiditate doloremque expedita quas maiores! Quia, ratione, consectetur. Inventore veritatis voluptates libero nemo accusantium modi nostrum, sunt et corporis ipsam unde porro debitis laboriosam?</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="clients__grid">
      <?php while (have_posts()) : the_post(); ?>
          <div class="clients__client" style="background-image: url('https://unsplash.it/500/50<?php echo $i ?>'); ?>">
            <a href="#" class="overlay-link"></a>
            <span class="title-heading"><?php the_title(); ?></span>
          </div>
      <?php endwhile; ?>
    </div>
  </div>


</div>
