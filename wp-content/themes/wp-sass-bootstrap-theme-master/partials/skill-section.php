<?php 
    $image = get_field('image');
?>

<div class="col-sm-3 skill-section matchHeight">
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</div>
