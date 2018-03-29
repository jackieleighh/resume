<?php 
    $image = get_field('image');
?>

<div class="skill-section">
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</div>
