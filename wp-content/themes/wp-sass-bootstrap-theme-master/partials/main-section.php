<?php

$postID = $single['id'];
$post = get_post($postID);
$title = get_field('title', $postID);
$subtitle = get_field('subtitle', $postID);
$background_image = get_field('background_image', $postID);
?>

<section id="<?php echo get_the_title(); ?>" class="band main-block" style="background-image: url('<?php echo $background_image; ?>');">
    <div class="band-container">
        <div class="band-inner">
        	<h1><i class="fas fa-angle-left"></i><?php echo $title; ?><i class="fas fa-angle-right"></i></h1>
        	<h2><?php echo $subtitle; ?></h2>
        </div>
    </div>
</section>

<div class="parallax-window">
  <div class="parallax-slider">
    <span style="position:absolute; top: 400px; left: 400px;">Some Text</span>
	<p>Some other Content</p>
  </div>
</div>

<div class="block">
  <img src="<?php echo $background_image; ?>" data-speed="-0.25" class="img-parallax">
  <h2>Parallax Speed -0.25</h2>
</div>