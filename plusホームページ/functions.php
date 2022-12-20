<?php

function post_has_archive($args, $post_type)
{
	if ('post' == $post_type) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news';
		$args['label'] = 'お知らせ';
	}
	return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


function cpt_register_achievement()
{
	$labels = [
		"singular_name" => "achievement",
		"edit_item" => "achievement",
	];
	$args = [
		"label" => "achievement",
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => ["slug" => "achievement", "with_front" => true],
		"query_var" => true,
		"menu_position" => 5,
		"supports" => ["title", "editor", "thumbnail"],

	];
	register_post_type("achievement", $args);
}
add_action('init', 'cpt_register_achievement');
