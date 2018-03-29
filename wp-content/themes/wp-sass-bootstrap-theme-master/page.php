<?php get_header(); ?>

    <?php // theloop

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section id="main">
        <?php 
        $header_query = new WP_Query(
          array(
            'post_type' => 'header',
            'posts_per_page' => 1,
          )
        );
        while ( $header_query-> have_posts() ) : $header_query->the_post();  ?>

          <?php include(locate_template('partials/header-section.php')); ?>

        <?php wp_reset_query(); endwhile; ?>
      </section>

      <section id="about">
        <?php 
        $section_query = new WP_Query(
          array(
            'post_type' => 'section',
            'posts_per_page' => -1,
            'meta_key' => 'order',
            'order_by' => 'meta_value',
            'order' => 'ASC'
          )
        );
        $count = 0;
        while ( $section_query-> have_posts() ) : $section_query->the_post();  ?>

          <?php if($count == 0): ?>
            <div class="row">
          <?php endif; ?>

          <?php include(locate_template('partials/section.php')); ?>

          <?php if($count == 1): ?>
            </div>
            <?php $count = 0; ?>
          <?php else: 
            $count++;
            endif; 
          ?>

        <?php wp_reset_query(); endwhile; ?>
        <?php if($count == 1): ?>
          </div>
        <?php endif; ?>
      </section>

      <section id="experience">
        <div class="section-header"><h2>experience</h2></div>
        <?php 
        $experience_query = new WP_Query(
          array(
            'post_type' => 'experience',
            'posts_per_page' => -1,
            'meta_key' => 'order',
            'order_by' => 'meta_value',
            'order' => 'ASC'
          )
        );
        $count = 0;
        while ( $experience_query-> have_posts() ) : $experience_query->the_post();  ?>
          
          <?php if($count == 0): ?>
            <div class="row">
          <?php endif; ?>

          <?php include(locate_template('partials/section.php')); ?>

          <?php if($count == 1): ?>
            </div>
          <?php $count = 0; ?>
          <?php else: 
            $count++;
            endif; 
          ?>

        <?php wp_reset_query(); endwhile; ?>
        <?php if($count == 1): ?>
          </div>
        <?php endif; ?>
      </section>

      <section id="skills">
        <div class="section-header"><h2>skills</h2></div>
        <?php 
        $skill_query = new WP_Query(
          array(
            'post_type' => 'skill',
            'posts_per_page' => -1,
          )
        );
        while ( $skill_query-> have_posts() ) : $skill_query->the_post();  ?>
          <?php include(locate_template('partials/skill-section.php')); ?>
        <?php endwhile; ?>
      </section>

      <section id="portfolio">
        <div class="section-header"><h2>portfolio</h2></div>
        <?php 
        $portfolio_query = new WP_Query(
          array(
            'post_type' => 'portfolio',
            'posts_per_page' => -1,
            'meta_key' => 'order',
            'order_by' => 'meta_value',
            'order' => 'ASC'
          )
        );
        $count = 0;
        while ( $portfolio_query-> have_posts() ) : $portfolio_query->the_post();  ?>

          <?php if($count == 0): ?>
            <div class="row">
          <?php endif; ?>

          <?php include(locate_template('partials/portfolio-section.php')); ?>

          <?php if($count == 1): ?>
            </div>
          <?php $count = 0; ?>
          <?php else: 
            $count++;
            endif; 
          ?>

        <?php wp_reset_query(); endwhile; ?>

        <?php if($count == 1): ?>
          </div>
        <?php endif; ?>
      </section> 

      <?php endwhile; ?>

    <?php else: ?>

        <?php get_404_template(); ?>

    <?php endif; ?>

<?php get_footer(); ?>      