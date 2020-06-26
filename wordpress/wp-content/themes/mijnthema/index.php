<?php get_header(); ?>

    <?php
      if( have_posts() ) :
        while( have_posts() ) : the_post();?>
          <h3><?php the_post(); ?></h3>
          <div><?php the_excerpt(); ?></div>



    <?php
      endwhile;
      else: ?>
      <p>Geen bericht gevonden</p>

    <?php
      endif
     ?>

     <?php get_footer(); ?>
