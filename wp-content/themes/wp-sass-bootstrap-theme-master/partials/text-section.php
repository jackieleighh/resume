<?php

$postID = $single['id'];
$post = get_post($postID);
$text = get_field('text', $postID);
$background_color = get_field('background_color', $postID);
$background_image = get_field('background_image', $postID);
$type = get_field('type', $postID);
$image = get_field('image', $postID);
?>

<!-- <div class="section-wrapper"> -->
    <section id="<?php echo get_the_title(); ?>" class="section block text-block" <?php if($background_image): ?> style="background-image: url('<?php echo $background_image;?>');" <?php else: ?> style="background-color: <?php echo $background_color; ?>" <?php endif; ?>>
        <div class="section-inner">
            <?php if($type == 'no-image'): ?>
                <div class="col-sm-12">
                    <?php echo $text; ?>
                </div>
            <?php elseif($type == 'image-left'): ?>
                <div class="col-sm-4 matchHeight img-col">
                    <div class="vertical-align">
                        <div class="inner">
                            <img src="<?php echo $image; ?>"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 matchHeight">
                    <div class="vertical-align">
                        <div class="inner">
                            <?php echo $text; ?>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-sm-8 matchHeight">
                    <div class="vertical-align">
                        <div class="inner">
                            <?php echo $text; ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 matchHeight img-col">
                    <div class="vertical-align">
                        <div class="inner">
                            <img src="<?php echo $image; ?>"/>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<!-- </div> -->