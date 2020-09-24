<?php

// Files
function maniac_files (){
  // Font Awesome
  wp_enqueue_style('font_awesome', '//use.fontawesome.com/releases/v5.14.0/css/all.css', null, '1.0', 'all');
  // Google Fonts
  wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Quicksand|Sedgwick+Ave+Display&display=swap', null, '1.0', 'all');
  // Bootstrap
  wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', null, '1.0', 'all');

  // wp_enqueue_style('main-my-style', get_theme_file_uri('css/style.css'), null, '1.0', 'all');

  if(strstr($_SERVER['SERVER_NAME'], get_site_url())){
  //if(strstr($_SERVER['SERVER_NAME'], 'helvinrymer.com/pages/maniacink/')){
  // Bundled Files
  wp_enqueue_script('main-maniac-scripts', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else{
    wp_enqueue_style('my-style', get_theme_file_uri('/css/style.css'), null, '1.0', 'all');
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.920bf068e75aa8ef387f.js'), NULL, '1.0', true);
    wp_enqueue_script('main-scripts', get_theme_file_uri('/bundled-assets/scripts.14e74e382a9544737fb8.js'), NULL, '1.0', true);
  }

  wp_localize_script('main-maniac-scripts', 'maniacData', array(
    'root_url' => get_site_url()
  ));



  // Jquery
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.5.1.slim.min.js', NULL, '1.0', true);

  // Popper
  wp_enqueue_script('popper', '//cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', NULL, '1.0', true);
  // Bootstrap JS
  wp_enqueue_script('bootsrap', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'maniac_files');

// Features
function maniac_features(){
  register_nav_menu('footerLocationTwo', 'Footer Location Two');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('maniacMediumLandscape', 800, 460, true);
  add_image_size('maniacSmallLandscape', 400, 260, true);
  add_image_size('maniacSmallSquare', 220, 220, true);
  add_image_size('maniacHomeBlog', 350, 250, true);
  add_image_size('flexible', 9999, 9999, true);
}

add_action('after_setup_theme', 'maniac_features');


// Routes
add_action('rest_api_init', 'maniacContacRoutes');

function maniacContacRoutes(){
  register_rest_route('maniac/v1', 'manage-contact', array(
    'methods' => 'POST',
    'callback' => 'createContact'
  ));

  function createContact(){
    wp_insert_post(array(
      'post_type' => 'contact',
      'post_status' => 'publish',
      'post_title' => 'New Contact',
      'post_content' => 'Hi'
    ));
  }
}