<?php

$postID = $single['id'];
$post = get_post($postID);

$text = get_field('text', $postID);
?>

<div class="row text-block">
    <?php echo $text; ?>
</div>