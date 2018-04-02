<?php 
    $image = get_field('image');
    var_dump(get_the_terms());
?>

<div class="col-sm-3 skill-section">
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</div>
