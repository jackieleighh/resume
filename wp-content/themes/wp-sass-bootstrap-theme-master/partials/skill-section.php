<?php 
	global $post;
    $image = get_field('image');
    $terms = wp_get_post_terms();
    ?><div><?php var_dump($terms);
?></div>

<div class="col-sm-3 skill-section 
	<?php foreach($terms as $term): ?>
		<?php echo $term->slug . ' '; ?>
	<?php endforeach; ?>
">
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</div>
