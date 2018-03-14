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
      <ul id="pagepiling-menu">
        <?php 
        $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
        $menuID = $menuLocations['header_menu']; // Get the *primary* menu ID
        $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
        $i = 0;
        foreach ( $primaryNav as $navItem ) {
            echo '<li ';
            if($i == 0) echo 'class="active" ';
            echo 'data-menuanchor="'.$navItem->url.'"><a href="#'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
            $i++;
        } ?>
      </ul>
      <div id="pagepiling">
