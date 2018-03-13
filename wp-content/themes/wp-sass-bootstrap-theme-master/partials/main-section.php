<?php

$postID = $single['id'];
$post = get_post($postID);
$title = get_field('title', $postID);
$subtitle = get_field('subtitle', $postID);
$background_image = get_field('background_image', $postID);
?>

<div class="parallax_group">
    <div class="parallax_layer parallax_layer-4">
      <div class="layer"><img src="/wp-content/themes/wp-sass-bootstrap-theme-master/img/layer4.png" /></div>
    </div>
    <div class="parallax_layer parallax_layer-3">
      <div class="layer"><img src="/wp-content/themes/wp-sass-bootstrap-theme-master/img/layer3.png" /></div>
    </div>
    <div class="parallax_layer parallax_layer-2">
      <div class="layer"><img src="/wp-content/themes/wp-sass-bootstrap-theme-master/img/layer2.png" /></div>
    </div>
    <div class="parallax_layer parallax_layer-1">
      <div class="layer"><img src="/wp-content/themes/wp-sass-bootstrap-theme-master/img/layer1.png" /></div>
    </div>
    <div class="parallax_layer parallax_layer-0">
      <div class="layer"><img src="/wp-content/themes/wp-sass-bootstrap-theme-master/img/road.png" /></div>
    </div>
</div>

<!-- <div class="mountains">
	<img class="layer road" src="/wp-content/themes/wp-sass-bootstrap-theme-master/img/road.png" />
	<img class="layer layer-1" src="/wp-content/themes/wp-sass-bootstrap-theme-master/img/layer1.png" />
	<img class="layer layer-2" src="/wp-content/themes/wp-sass-bootstrap-theme-master/img/layer2.png" />
	<img class="layer layer-3" src="/wp-content/themes/wp-sass-bootstrap-theme-master/img/layer3.png" />
	<img class="layer layer-4" src="/wp-content/themes/wp-sass-bootstrap-theme-master/img/layer4.png" />
</div> -->
<div class="parallax_group">
	<div class="parallax_layer section-wrapper">
		<section id="<?php echo get_the_title(); ?>" class="layer block main-block" style="background-image: url('<?php echo $background_image; ?>');">
			<div class="section-inner">
				<h1><?php echo $title; ?></h1>
				<h2><?php echo $subtitle; ?></h2>
			</div>
		</section>
	</div>
</div>
