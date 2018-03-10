<?php

$postID = $single['id'];
$post = get_post($postID);
$title = get_field('title', $postID);
$subtitle = get_field('subtitle', $postID);
$background_image = get_field('background_image', $postID);
?>

<section id="<?php echo get_the_title(); ?>" class="block main-block">
	<img src="<?php echo $background_image; ?>" data-speed="-0.25" class="img-parallax">
	<div class="block-inner">
		<h1><i class="fas fa-angle-left"></i><?php echo $title; ?><i class="fas fa-angle-right"></i></h1>
		<h2><?php echo $subtitle; ?></h2>
	</div>
</div>