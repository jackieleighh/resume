<?php get_header(); ?>

    <?php // theloop

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php
        if (count(get_field('sections')) > 0) {
            include(locate_template('partials/starter.php'));
        }
    ?>

    <?php endwhile; ?>
    <?php else: ?>

        <?php get_404_template(); ?>

    <?php endif; ?>

<?php get_footer(); ?>      