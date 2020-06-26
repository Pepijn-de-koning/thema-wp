<?php get_header(); ?>

<div class="container">
  <main class="col-md-8">
      <?php
      if( have_posts() ) :
        while( have_posts() ) : the_post();?>
        <h3><?php the_title(); ?></h3>
        <div><?php the_excerpt(); ?></div>



        <?php
      endwhile;
    else: ?>
    <p>Geen bericht gevonden</p>

    <?php
    endif
    ?>
  </main>
</div>

<div class="container">
  <aside class="col-md-4 bg-light">
    <h3>
      Terzijde
    </h3>
  </aside>
</div>

    <?php get_footer(); ?>
