<?php 
	global $post;
    $image = get_field('image');
    $terms = get_the_terms($post->ID, 'skill-category');
?>

<div class="col-sm-3 skill-section <?php foreach($terms as $term): echo $term->slug . ' '; endforeach; ?>">
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</div>
