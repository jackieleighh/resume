<?php 
    $image = get_field('image');
    $terms = get_terms('skill-category');
?>

<div class="col-sm-3 skill-section 
	<?php foreach($terms as $term): ?>
		<?php echo $term->slug . ' '; ?>
	<?php endforeach; ?>
">
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</div>
