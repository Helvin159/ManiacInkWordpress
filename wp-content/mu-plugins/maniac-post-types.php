<?php 

// Post Types
function maniac_post_types(){
  // Portrait 
  register_post_type('portraits', array(
    'capability_type' => 'portraits',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'portraits'
    ),
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Portraits',
      'add_new_item' => 'Add New Portrait',
      'edit_item' => 'Edit Portrait',
      'all_items' => 'All Portraits',
      'singular_name' => 'Portrait',
    ),
    'menu_icon' => 'dashicons-smiley'
  ));
  
  // Cover Ups 
  register_post_type('cover-ups', array(
    'capability_type' => 'cover-ups',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'cover-ups'
    ),
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Cover-Ups',
      'add_new_item' => 'Add New Cover-Up',
      'edit_item' => 'Edit Cover-Ups',
      'all_items' => 'All Cover-Ups',
      'singular_name' => 'Cover-Up',
    ),
    'menu_icon' => 'dashicons-admin-generic'
  ));
  
  // Large Tats 
  register_post_type('large-tats', array(
    'capability_type' => 'large-tats',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'large-tats'
    ),
    'public' => true,
    'has_archive' => true,

    'labels' => array(
      'name' => 'Large Tats',
      'add_new_item' => 'Add New Large Tats',
      'edit_item' => 'Edit Large Tats',
      'all_items' => 'All Large Tats',
      'singular_name' => 'Large Tattoo',
    ),
    'menu_icon' => 'dashicons-fullscreen-alt'
  ));
  
  // Small Tats 
  register_post_type('small-tats', array(
    'capability_type' => 'small-tats',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'small-tats'
    ),
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Small Tats',
      'add_new_item' => 'Add New Small Tats',
      'edit_item' => 'Edit Small Tats',
      'all_items' => 'All Small Tats',
      'singular_name' => 'Small Tattoo',
    ),
    'menu_icon' => 'dashicons-fullscreen-exit-alt'
  ));
  
  // FAQ Posts 
  register_post_type('faq', array(
    'capability_type' => 'faq',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'public' => true,
    'has_archive' => false,
    'labels' => array(
      'name' => 'FAQ',
      'add_new_item' => 'Add New FAQ Item',
      'edit_item' => 'Edit FAQ Item',
      'all_items' => 'All FAQ Items',
      'singular_name' => 'FAQ',
    ),
    'menu_icon' => 'dashicons-media-text'
  ));
  
  // Contact Posts 
  register_post_type('contact', array(
    'capability_type' => 'contact',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'custom-fields', 'post-formats', 'thumbnail'),
    'exclude_from_search' => true,
    'rewrite' => array(
      'slug' => 'faq'
    ),
    'public' => true,
    'has_archive' => false,
    'labels' => array(
      'name' => 'Contacts',
      'add_new_item' => 'Add New Contact',
      'edit_item' => 'Edit Contact',
      'all_items' => 'All Contact',
      'singular_name' => 'Contact',
    ),
    'menu_icon' => 'dashicons-smartphone'
  ));
}

add_action('init', 'maniac_post_types');