<?php
defined('ABSPATH') or die();

add_action('save_post', 'save_reviews', 10, 2);

function save_reviews($post_id, $post = false) {
  do_action('save_review', $post_id, $post);
}

function reviews_taxonomy_init () {
  register_post_type('review', [
    'label' => 'Review',
    'labels' => [
      'name' => __('Reviews'),
      'singular_name' => __('Review'),
      'menu_name' => __('Reviews')
    ],
    'labels' => [
			'name' => __('Reviews'),
			'singular_name' => __('Review'),
			'add_new' => __('Add new'),
			'add_new_item' => __('Add new review'),
			'edit_item' => __('Edit review'),
			'new_item' => __('New review'),
			'view_item' => __('Preview this review'),
			'search_items' => __('Search review'),
			'not_found' => __('Not found'),
			'not_found_in_trash' => __('Not found in recycle bin'),
			'parent_item_colon' => __(''),
			'menu_name' => __('Reviews'),
    ],
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-star-empty',
    'supports' => ['title', 'editor'],
    'has_archive' => true,
    'rewrite' => [
      'slug' => 'all-reviews',
      'hierarchical' => false,
      'with_front' => true
    ],
    'show_in_rest' => false
  ]);
}
add_action('init', 'reviews_taxonomy_init');
