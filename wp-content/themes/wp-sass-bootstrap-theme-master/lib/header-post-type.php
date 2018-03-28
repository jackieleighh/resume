<?php
// Register Custom Post Type
function header_post() {

	$labels = array(
		'name'                  => _x( 'Header Posts', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Header Post', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Headers', 'text_domain' ),
		'name_admin_bar'        => __( 'Headers', 'text_domain' ),
		'archives'              => __( 'Headers Archive', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Headers', 'text_domain' ),
		'add_new_item'          => __( 'Add Header', 'text_domain' ),
		'add_new'               => __( 'Add Header', 'text_domain' ),
		'new_item'              => __( 'New Header', 'text_domain' ),
		'edit_item'             => __( 'Edit Header', 'text_domain' ),
		'update_item'           => __( 'Update Header', 'text_domain' ),
		'view_item'             => __( 'View Header', 'text_domain' ),
		'search_items'          => __( 'Search Headers', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'headers', 'text_domain' ),
		'description'           => __( 'Header Content', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'revisions'),
		'hierarchical'          => false,
		//'taxonomies'            => array( 'category' ),
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_icon'				=> 'dashicons-book-alt',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'header', $args );

}
add_action( 'init', 'header_post', 0 );
?>