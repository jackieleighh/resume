<?php

$postID = $single['id'];
$post = get_post($postID);
$title1 = get_field('title_1', $postID);
$image1 = get_field('image_1', $postID);
$description1 = get_field('description_1', $postID);
$title2 = get_field('title_2', $postID);
$image2 = get_field('image_2', $postID);
$description2 = get_field('description_2', $postID);
$title3 = get_field('title_3', $postID);
$image3 = get_field('image_3', $postID);
$description3 = get_field('description_3', $postID);
$title4 = get_field('title_4', $postID);
$image4 = get_field('image_4', $postID);
$description4 = get_field('description_4', $postID);
?>

<!-- <div class="section-wrapper"> -->
    <section id="<?php echo get_the_title(); ?>" class="section block column-block">
        <div class="section-inner">
            <div class="col-sm-3">
                <img src="<?php echo $image1; ?>" />
                <h1><?php echo $title1; ?></h1>
                <?php echo $description1; ?>
            </div>
            <div class="col-sm-3">
                <img src="<?php echo $image2; ?>" />
                <h1><?php echo $title2; ?></h1>
                <?php echo $description2; ?>
            </div>
            <div class="col-sm-3">
                <img src="<?php echo $image3; ?>" />
                <h1><?php echo $title3; ?></h1>
                <?php echo $description3; ?>
            </div>
            <div class="col-sm-3">
                <img src="<?php echo $image4; ?>" />
                <h1><?php echo $title4; ?></h1>
                <?php echo $description4; ?>
            </div>
        </div>
    </section>
<!-- </div> -->