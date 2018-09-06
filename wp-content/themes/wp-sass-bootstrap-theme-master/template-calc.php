
<?php /* Template Name: Calculator Template */ ?>

<?php get_header(); ?>

    <?php // theloop

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="container">
      
        <div id="calculator-widget"></div>
      
      </div>

    <?php endwhile; ?>

    <?php else: ?>

        <?php get_404_template(); ?>

    <?php endif; ?>

<?php get_footer(); ?>      