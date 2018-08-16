<?php

/* Template Name: Septa Fares */

get_header(); ?>
    
    <?php // theloop

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="container">

        <?php include(locate_template('septa-fare-calculator/index.html')); ?>

      </div>

      <?php endwhile; ?>

    <?php else: ?>

        <?php get_404_template(); ?>

    <?php endif; ?>

<?php get_footer(); ?>      