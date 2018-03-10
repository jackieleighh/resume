<?php

$postID = $single['id'];
$post = get_post($postID);
$text = get_field('text', $postID);
$background_color = get_field('background_color', $postID);
$background_image = get_field('background_image', $postID);
?>
<section id="<?php echo get_the_title(); ?>" class="band" style="background-color: <?php echo $background_color; ?>">
    <div class="band-container">
        <div class="band-inner text-block">
            <?php if($background_image): ?>
                <div class="background-image" style="background-image: url('<?php echo $background_image; ?>');"></div>
            <?php endif; ?>
            <?php echo $text; ?>
        </div>
    </div>
</section>