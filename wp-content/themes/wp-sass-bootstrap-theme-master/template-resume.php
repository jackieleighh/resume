
<?php /* Template Name: Resume Template */ ?>

<?php get_header(); ?>

    <?php // theloop

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="container">
      
        <?php echo get_the_content(); ?>
      
      </div>

    <?php endwhile; ?>

    <?php else: ?>

        <?php get_404_template(); ?>

    <?php endif; ?>

<?php get_footer(); ?>      