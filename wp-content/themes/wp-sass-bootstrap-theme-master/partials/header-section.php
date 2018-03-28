<?php 
    $text = get_field('text');
    $image = get_field('image');
?>

<div class="main" style="background-image: url('<?php echo $image['url']; ?>')">
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	<div class="row inner">
		<?php echo $text; ?>
	</div>
</div>