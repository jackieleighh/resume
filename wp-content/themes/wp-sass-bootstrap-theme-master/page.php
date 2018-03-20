<?php get_header(); ?>

    <?php // theloop

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php 
        $section_query = new WP_Query(
          array(
            'post_type' => 'section',
            'posts_per_page' => -1,
            'meta_key' => 'order',
            'order_by' => 'meta_value',
            'order' => 'DESC'
          )
        );
        while ( $section_query-> have_posts() ) : $section_query->the_post();  ?>

          <?php include(locate_template('partials/section.php')); ?>

        <?php wp_reset_query(); endwhile; ?>

      <?php 
        $experience_query = new WP_Query(
          array(
            'post_type' => 'experience',
            'posts_per_page' => -1,
            'meta_key' => 'order',
            'order_by' => 'meta_value',
            'order' => 'DESC'
          )
        );
        while ( $experience_query-> have_posts() ) : $experience_query->the_post();  ?>

          <?php include(locate_template('partials/section.php')); ?>

        <?php wp_reset_query(); endwhile; ?>

    <?php endwhile; ?>
    <?php else: ?>

        <?php get_404_template(); ?>

    <?php endif; ?>

<?php get_footer(); ?>      