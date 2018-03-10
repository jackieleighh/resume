<?php

$postID = $single['id'];
$post = get_post($postID);
$title = get_field('title', $postID);
$subtitle = get_field('subtitle', $postID);
$background_image = get_field('background_image', $postID);
?>
<section id="<?php echo get_the_title(); ?>" class="band" style="background-image: url('<?php echo $background_image; ?>');">
    <div class="band-container">
        <div class="band-inner main-block">
        	<h1><?php echo $title; ?></h1>
        	<h2><?php echo $subtitle; ?></h2>
        </div>
    </div>
</section>