<?php 
    $text = get_field('text');
    $image = get_field('image');
?>

<div class="col-sm-12 section main">
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	<div class="row inner">
		<?php echo $text; ?>
	</div>
</div>