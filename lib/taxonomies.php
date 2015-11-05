<?php 

/* 
 * 
 * Taxonomies
 *
 */

// Same as with Custom Types, you only need the arguments and register_taxonomy function here. They are hooked into WordPress in functions.php.

	
/**
 *
 * Case Story Type Taxonomy
 *
 */
	$csy_type_labels = array(
		'name'                       => _x( 'Story Type', 'Taxonomy General Name', 'cogtheme' ),
		'singular_name'              => _x( 'Story Type', 'Taxonomy Singular Name', 'cogtheme' ),
		'menu_name'                  => __( 'Story Types', 'cogtheme' ),
		'all_items'                  => __( 'All Types', 'cogtheme' ),
		'parent_item'                => __( 'Parent Type', 'cogtheme' ),
		'parent_item_colon'          => __( 'Parent Type:', 'cogtheme' ),
		'new_item_name'              => __( 'New Story Type', 'cogtheme' ),
		'add_new_item'               => __( 'Add New Type', 'cogtheme' ),
		'edit_item'                  => __( 'Edit Type', 'cogtheme' ),
		'update_item'                => __( 'Update Type', 'cogtheme' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'cogtheme' ),
		'search_items'               => __( 'Search Story Types', 'cogtheme' ),
		'add_or_remove_items'        => __( 'Add or remove Types', 'cogtheme' ),
		'choose_from_most_used'      => __( 'Choose from the most used Types', 'cogtheme' ),
		'not_found'                  => __( 'Not Found', 'cogtheme' ),
	);
	$csy_type_rewrite = array(
		'slug'                       => 'case-stories',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$csy_type_args = array(
		'labels'                     => $csy_type_labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $csy_type_rewrite,
	);
	register_taxonomy( 'cog_cassty_type', array( 'cog_cassty' ), $csy_type_args );

?>