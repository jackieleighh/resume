<?php 
    $title = get_the_title();
    $image = get_field('image');
    $description = get_field('description');
    $link = get_field('link');
?>

<div class="col-sm-6 section half portfolio">
	<a href="<?php echo $link; ?>" target="_blank">
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<div class="row inner">
			<h2><?php echo $title; ?></h2>
			<h3><?php echo $description; ?></h3>
		</div>
	</a>
</div>
