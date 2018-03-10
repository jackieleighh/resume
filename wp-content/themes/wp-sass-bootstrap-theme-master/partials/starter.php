<?php 
	$posts = get_field('sections');

	//echo "<pre>"; var_dump($posts); echo "</pre>"; 

	$fullArr = [];
	$fullArr[] = [
		'id' => '',
		'cat_id' => '',
		'type' => ''
	];
	$hasSlide = false;

	foreach ($posts as $key => $post) {
		//echo "<pre>"; var_dump($post); echo "</pre>";
		$cats = array();
		$cats = wp_get_object_terms($post, 'section-category');

		// var_dump(get_terms('block-category'));
		$curCat = $cats[0]->slug;

		// $blockWidth = get_field('block_width', $key);

		// var_dump($blockWidth); exit;

		// var_dump();
		// echo "<pre>"; var_dump($post); echo "</pre>";
		// echo $key;
		$fullArr[$key]['id'] = $post;
		$fullArr[$key]['cat_id'] = $curCat;
		$fullArr[$key]['type'] = get_post_type($post);
	}

	foreach ($fullArr as $key => $single) {
		if ($single['cat_id'] == 'text') {
			include(locate_template('partials/text-section.php'));
		} 
	}

?>