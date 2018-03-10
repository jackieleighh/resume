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

    <header>
      <a id="cd-logo" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
      <!-- <nav id="cd-top-nav">
        <ul>
          <li><a href="#0">Tour</a></li>
          <li><a href="#0">Login</a></li>
        </ul>
      </nav> -->
      <a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
    </header>
    <main class="cd-main-content">