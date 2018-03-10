<?php

$postID = $single['id'];
$post = get_post($postID);
$text = get_field('text', $postID);
$background_color = get_field('background_color', $postID);
$background_image = get_field('background_image', $postID);
?>

<div class="section-wrapper">
    <section id="<?php echo get_the_title(); ?>" class="block text-block" style="background-color: <?php echo $background_color; ?>">
        <div class="block-inner">
            <?php echo $text; ?>
        </div>
    </section>
</div>