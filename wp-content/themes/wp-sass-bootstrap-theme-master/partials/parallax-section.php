<?php

$postID = $single['id'];
$post = get_post($postID);
$text = get_field('text', $postID);
$background_image = get_field('background_image', $postID);
?>

<section id="<?php echo get_the_title(); ?>" class="block main-block">
	<img src="<?php echo $background_image; ?>" data-speed=".25" class="img-parallax">
	<div class="block-inner">
		<?php echo $text; ?>
	</div>
</div>