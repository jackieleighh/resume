<?php

$postID = $single['id'];
$post = get_post($postID);
$text = get_field('text', $postID);
$background_color = get_field('background_color', $postID);
$background_image = get_field('background_image', $postID);
?>

<div class="row text-block" style="background-color: <?php echo $background_color; ?>">
    <?php if($background_image): ?>
        <div class="background-image" style="background-image: url('<?php echo $background_image; ?>');"></div>
    <?php endif; ?>
    <?php echo $text; ?>
</div>