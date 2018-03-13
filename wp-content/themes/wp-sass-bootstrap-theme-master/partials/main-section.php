<?php

$postID = $single['id'];
$post = get_post($postID);
$title = get_field('title', $postID);
$subtitle = get_field('subtitle', $postID);
$background_image = get_field('background_image', $postID);
?>

<div class="mountains">
	<img class="layer road" src="/img/road.png" />
	<img class="layer layer-1" src="/img/layer1.png" />
	<img class="layer layer-2" src="/img/layer2.png" />
	<img class="layer layer-3" src="/img/layer3.png" />
	<img class="layer layer-4" src="/img/layer4.png" />
</div>
<div class="section-wrapper">
	<section id="<?php echo get_the_title(); ?>" class="block main-block" style="background-image: url('<?php echo $background_image; ?>');">
		<div class="section-inner">
			<h1><?php echo $title; ?></h1>
			<h2><?php echo $subtitle; ?></h2>
		</div>
	</section>
</div>