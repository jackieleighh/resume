<?php

$postID = $single['id'];
$post = get_post($postID);
$title = get_field('title', $postID);
$subtitle = get_field('subtitle', $postID);
$background_image = get_field('background_image', $postID);
?>
<div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="https://pixelcog.github.io/parallax.js/img/stellar-spire-eagle-nebula-1400x900.jpg" data-natural-width="1400" data-natural-height="900"><div class="container">
<section id="<?php echo get_the_title(); ?>" class="parallax-window main-block" data-parallax="scroll" data-image-src="<?php echo $background_image; ?>">
    <div class="band-container">
        <div class="band-inner">
        	<h1><i class="fas fa-angle-left"></i><?php echo $title; ?><i class="fas fa-angle-right"></i></h1>
        	<h2><?php echo $subtitle; ?></h2>
        </div>
    </div>
</section>
</div>
</div>
