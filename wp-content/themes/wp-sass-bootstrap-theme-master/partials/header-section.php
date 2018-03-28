<?php 
    $text = get_field('text');
    $subtext = get_field('subtext');
    $image = get_field('image');
?>

<div class="col-sm-12 section main">
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	<div class="row inner">
		<h1><?php echo $text; ?></h1>
		<?php if($subtext): ?>
			<h2><?php echo $subtext; ?></h2>
		<?php endif; ?>
	</div>
</div>