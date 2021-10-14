<?php
/*
 * Enabling menu support
 */
register_nav_menus(
	[
		'primary_menu'   => __( 'Primary Menu' ),
		'secondary_menu' => __( 'Secondary Menu' )
	]
);

/*
 * Custom class for sub menu items
 */

class Child_Wrap extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"dropdown\">\n";
	}

	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "$indent</ul>\n";
	}
}

/*
 * Custom Post Types
 */
//Products Post Type
function create_products_post_type() {

	register_post_type( 'products-list',
		array(
			'labels'        => [
				'name'          => __( 'Products' ),
				'singular_name' => __( 'Product' )
			],
			'public'        => true,
			'has_archive'   => true,
			'rewrite'       => [ 'slug' => 'products-list' ],
			'show_in_rest'  => true,
			'supports'      => [
				'title',
				'editor',
				'excerpt',
				'author',
				'thumbnail',
				'revisions',
				'custom-fields',
			],
			'menu_position' => 3,
			'taxonomies'    => [ 'category' ],
		)
	);
}

// Hooking up our function to theme setup
add_action( 'init', 'create_products_post_type' );


//Memories Post Type
function create_memories_post_type() {

	register_post_type( 'our-memories',
		array(
			'labels'        => [
				'name'          => __( 'Memories' ),
				'singular_name' => __( 'Memory' )
			],
			'public'        => true,
			'has_archive'   => true,
			'rewrite'       => [ 'slug' => 'our-memories' ],
			'show_in_rest'  => true,
			'supports'      => [
				'title',
				'thumbnail',
				'custom-fields',
			],
			'menu_position' => 3,
		)
	);
}

add_action( 'init', 'create_memories_post_type' );


//Vacancies Post Type
function create_vacancies_post_type() {

	register_post_type( 'our-vacancies',
		array(
			'labels'        => [
				'name'          => __( 'Vacancies' ),
				'singular_name' => __( 'Vacancy' )
			],
			'public'        => true,
			'has_archive'   => true,
			'rewrite'       => [ 'slug' => 'our-vacancies' ],
			'show_in_rest'  => true,
			'supports'      => [
				'title',
				'thumbnail',
				'custom-fields',
			],
			'menu_position' => 3,
		)
	);
}

add_action( 'init', 'create_vacancies_post_type' );

//News Post Type
function create_news_post_type() {

	register_post_type( 'our-news',
		array(
			'labels'        => [
				'name'          => __( 'News' ),
				'singular_name' => __( 'News' )
			],
			'public'        => true,
			'has_archive'   => true,
			'rewrite'       => [ 'slug' => 'our-news' ],
			'show_in_rest'  => true,
			'supports'      => [
				'title',
				'editor',
				'thumbnail',
				'custom-fields',
			],
			'menu_position' => 3,
		)
	);
}

add_action( 'init', 'create_news_post_type' );