<?php 
    $text = get_field('text');
    $heading = get_field('heading');
    $heading_2 = get_field('heading_2');
    $image = get_field('image');
?>

<div class="main" style="background-image: url('<?php echo $image['url']; ?>')">
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
	<div class="row inner">
		<div class="inner-table">
			<div class="vertical-align">
				<div class="typewriter">
					<h1><?php echo $heading; ?></h1>
				</div>
				<h2><?php echo $heading_2; ?></h2>
			</div>
		</div>
	</div>
</div>