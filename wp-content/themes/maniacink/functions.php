<?php

// Files
function maniac_files (){
  // Font Awesome
  wp_enqueue_style('font_awesome', '//use.fontawesome.com/releases/v5.14.0/css/all.css');
  
  // Google Fonts
  wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Quicksand|Sedgwick+Ave+Display&display=swap');
  
  // Bootstrap
  wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

  if(strstr($_SERVER['SERVER_NAME'], 'maniacink2.local')){
      // Bundled Files
  wp_enqueue_script('main_scripts', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else{
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.920bf068e75aa8ef387f.js'), NULL, '1.0', true);
    wp_enqueue_script('main_scripts', get_theme_file_uri('/bundled-assets/scripts.bbf1b43fb47a8a34b271.js'), NULL, '1.0', true);
    wp_enqueue_style('our_main_style', get_theme_file_uri('bundled-assets/styles.css'));

  }




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

