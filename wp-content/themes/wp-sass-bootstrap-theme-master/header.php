<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' );?>/bootstrap/img/favicon.ico">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' );?>
    </title>

    <?php wp_head(); ?>

  </head>

    <body <?php body_class(); ?>>
    
    <div class="l-site">
      <div class="l-nav">
        <nav class="nav">
          <ul>
            <li class="nav-primary"><a href="#">Home</a></li>
            <li class="nav-primary"><a href="#">Approach</a></li>
            <li class="nav-primary"><a href="#">Work</a></li>
            <li class="nav-primary"><a href="#">People</a></li>
            <li class="nav-secondary"><a href="#">Jobs</a></li>
            <li class="nav-secondary"><a href="#">Blog</a></li>
            <li class="nav-secondary"><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>
      <div class="l-page">
        <div class="menu">
          <div class="menu-hamburger"></div>
        </div>
