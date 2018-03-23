<?php 
    $type = get_field('type');
    $direction = get_field('direction');
    $text = get_field('text');
    $has_image = get_field('has_image');
    $image_side = get_field('image_side');
    $image_position = get_field('image_position');
    $image = get_field('image');
?>

<?php if($type == 'full'): ?>
	<div class="section full">
		<?php if($has_image): ?>
			<?php if($image_side == 'left'): ?>
				<div class="col-sm-4 image left">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				</div>
				<div class="col-sm-8 text right">
					<?php echo $text; ?>
				</div>
			<?php else: ?>
				<div class="col-sm-8 text left">
					<?php echo $text; ?>
				</div>
				<div class="col-sm-4 image right">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				</div>
			<?php endif; ?>
		<?php else: ?>
			<div class="text no-image">
				<?php echo $text; ?>
			</div>
		<?php endif; ?>
	</div>
<?php else: ?>
	<div class="col-sm-6 section half matchHeight">
		<div class="inner">
			<?php if($has_image): ?>
				<?php if($image_position == 'top'): ?>
					<div class="row image top">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					</div>
					<div class="row text bottom">
						<?php echo $text; ?>
					</div>
				<?php else: ?>
					<div class="row text top">
						<?php echo $text; ?>
					</div>
					<div class="row image bottom">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					</div>
				<?php endif; ?>
			<?php else: ?>
				<div class="text no-image">
					<?php echo $text; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>