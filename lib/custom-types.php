<?php 

/* 
 * 
 * Custom Post Types
 *
 */

// Note that you only need the arguments and register_post_type function here. They are hooked into WordPress in functions.php.
<?php 
/**
 *
 * Services Post Type
 *
 */
// Services args
	$serv_labels = array(
		'name'                => _x( 'Services', 'Post Type General Name', 'cog_theme' ),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'cog_theme' ),
		'menu_name'           => __( 'Services', 'cog_theme' ),
		'parent_item_colon'   => __( 'Parent Service:', 'cog_theme' ),
		'all_items'           => __( 'All Services', 'cog_theme' ),
		'view_item'           => __( 'View Service', 'cog_theme' ),
		'add_new_item'        => __( 'Add New Service', 'cog_theme' ),
		'add_new'             => __( 'Add New', 'cog_theme' ),
		'edit_item'           => __( 'Edit Service', 'cog_theme' ),
		'update_item'         => __( 'Update Service', 'cog_theme' ),
		'search_items'        => __( 'Search Service', 'cog_theme' ),
		'not_found'           => __( 'Not found', 'cog_theme' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'cog_theme' ),
	);
	$serv_args = array(
		'label'               => __( 'service', 'cog_theme' ),
		'description'         => __( 'Services and solutions in offering', 'cog_theme' ),
		'labels'              => $serv_labels,
		'supports'            => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-images-alt2',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => array('slug' => 'service'),
		'capability_type'     => 'page',
	);
	register_post_type( 'cog_servoffr', $serv_args );
/**
 *
 * Case Story Post Type
 *
 */
	// Case Story Args
	$csy_labels = array(
		'name'                => _x( 'Case Stories', 'Post Type General Name', 'cog_theme' ),
		'singular_name'       => _x( 'Case Story', 'Post Type Singular Name', 'cog_theme' ),
		'menu_name'           => __( 'Case Stories', 'cog_theme' ),
		'parent_item_colon'   => __( 'Parent Story:', 'cog_theme' ),
		'all_items'           => __( 'All Stories', 'cog_theme' ),
		'view_item'           => __( 'View Story', 'cog_theme' ),
		'add_new_item'        => __( 'Add Story', 'cog_theme' ),
		'add_new'             => __( 'Add New', 'cog_theme' ),
		'edit_item'           => __( 'Edit Story', 'cog_theme' ),
		'update_item'         => __( 'Update Story', 'cog_theme' ),
		'search_items'        => __( 'Search Stories', 'cog_theme' ),
		'not_found'           => __( 'Not found', 'cog_theme' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'cog_theme' ),
	);
	$csy_rewrite = array(
		'slug'                => 'case-story',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$csy_args = array(
		'label'               => __( 'cog_cassty', 'cog_theme' ),
		'description'         => __( 'Case stories for projects, clients.', 'cog_theme' ),
		'labels'              => $csy_labels,
		'supports'            => array( 'title', ),
		'taxonomies'          => array( 'cog_cassty_type', 'category' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-index-card',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $csy_rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'cog_cassty', $study_args );
/**
 *
 * Testimonials Post Type
 *
 */
	
	// Testimonial Args
	$tml_labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'cog_theme' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'cog_theme' ),
		'menu_name'           => __( 'Testimonials', 'cog_theme' ),
		'parent_item_colon'   => __( 'Parent Testimonial:', 'cog_theme' ),
		'all_items'           => __( 'All Testimonials', 'cog_theme' ),
		'view_item'           => __( 'View Testimonial', 'cog_theme' ),
		'add_new_item'        => __( 'Add New Testimonial', 'cog_theme' ),
		'add_new'             => __( 'Add Testimonial', 'cog_theme' ),
		'edit_item'           => __( 'Edit Testimonial', 'cog_theme' ),
		'update_item'         => __( 'Update Testimonial', 'cog_theme' ),
		'search_items'        => __( 'Search Testimonial', 'cog_theme' ),
		'not_found'           => __( 'Not found', 'cog_theme' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'cog_theme' ),
	);
	$tml_args = array(
		'label'               => __( 'dfi_testimonial', 'cog_theme' ),
		'description'         => __( 'Customer testimonials.', 'cog_theme' ),
		'labels'              => $tml_labels,
		'supports'            => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-editor-quote',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'cog_tmonial', $tml_args );
/**
*
*
*/
// Args for Custom Post Type: Service Offer
$svo_labels = array(
	'name'                => _x( 'Service Offers', 'Post Type General Name', 'cogtheme' ),
	'singular_name'       => _x( 'Service Offer', 'Post Type Singular Name', 'cogtheme' ),
	'menu_name'           => __( 'Service Offers', 'cogtheme' ),
	'name_admin_bar'      => __( 'Service Offer', 'cogtheme' ),
	'parent_item_colon'   => __( 'Parent Service Offer:', 'cogtheme' ),
	'all_items'           => __( 'All Service Offers', 'cogtheme' ),
	'add_new_item'        => __( 'Add New Service Offer', 'cogtheme' ),
	'add_new'             => __( 'Add New', 'cogtheme' ),
	'new_item'            => __( 'New Service Offer', 'cogtheme' ),
	'edit_item'           => __( 'Edit Service Offer', 'cogtheme' ),
	'update_item'         => __( 'Update Service Offer', 'cogtheme' ),
	'view_item'           => __( 'View Service Offer', 'cogtheme' ),
	'search_items'        => __( 'Search Service Offer', 'cogtheme' ),
	'not_found'           => __( 'Not found', 'cogtheme' ),
	'not_found_in_trash'  => __( 'Not found in Trash', 'cogtheme' ),
);
$svo_args = array(
	'label'               => __( 'Service Offer', 'cogtheme' ),
	'description'         => __( 'Services for You', 'cogtheme' ),
	'labels'              => $svo_labels,
	'supports'            => array( 'title', 'excerpt', 'thumbnail', 'revisions', ),
	'taxonomies'          => array( 'category', 'post_tag' ),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_position'       => 5,
	'menu_icon'           => 'dashicons-star-empty',
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => true,
	'can_export'          => true,
	'has_archive'         => true,		
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'capability_type'     => 'page',
);
register_post_type( 'cog_servoffr', $svo_args );

?>