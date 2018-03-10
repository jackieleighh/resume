<?php

$postID = $single['id'];
$post = get_post($postID);
$text = get_field('text', $postID);
$background_color = get_field('background_color', $postID);
$background_image = get_field('background_image', $postID);
$type = get_field('type', $postID);
$image = get_field('image', $postID);
?>

<div class="section-wrapper">
    <section id="<?php echo get_the_title(); ?>" class="block text-block" style="background-color: <?php echo $background_color; ?>">
        <div class="section-inner">
            <?php if($type == 'no_image'): ?>
                <?php echo $text; ?>
            <?php elseif($type == 'image_left'): ?>
                <div class="col-sm-4">
                    <img src="<?php echo $image; ?>"/>
                </div>
                <div class="col-sm-8">
                    <?php echo $text; ?>
                </div>
            <?php else: ?>
                <div class="col-sm-8">
                    <?php echo $text; ?>
                </div>
                <div class="col-sm-4">
                    <img src="<?php echo $image; ?>"/>
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>