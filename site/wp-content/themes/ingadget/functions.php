<?php
// Turn on support for Wordpress menus
add_theme_support('menus');

// Turn on featured images
add_theme_support('post-thumbnails');

// Set a new custom featured image size for hero images
add_image_size('feature-hero', 600, 600);

/**
  Helpers
  =======
*/

// Run the special_nav_class function
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

/**
  Add WP current menu class to custom nav.
  This comes in handy for custom post types
*/
function special_nav_class($classes, $item) {
  // Check the page's post type
  if ("review" == get_post_type()) {
    // If the menu item matches the title we'd like to highlight,
    // pass it to WP menu function
    if ($item->title == "Reviews") {
      $classes[] = "current-menu-item";
    }
  }

  if ("feature" == get_post_type()) {
    if ($item->title == "Features") {
      $classes[] = "current-menu-item";
    }
  }

  return $classes;
}

/**
  Simple helper to determine if a page is just showing standard
  Wordpress post object content or not. Returns true if the page is
  static and false if it is in addition used to display custom posts.
*/
function is_static_page() {
  return (is_page('features') || is_page('reviews')) ? false : true;
}

/**
  Custom Post Types
  =================
  Custom post types are great for organizing large types of content
  in a Wordpress managed site.

  Learn more: http://codex.wordpress.org/Post_Types
*/

// Feature Story
// ------------------------------------
function register_feature() {
  $labels = array(
    'name' => __('Feature Story'),
    'add_new' => _x('Add New', 'feature item'),
    'singular_name' => __('Feature Story'),
    'add_new_item' => __('Add New Feature Story'),
    'edit_item' => __('Edit Feature Story'),
    'new_item' => __('New Feature Story'),
    'view_item' => __('View Feature Story')
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => false,
    'rewrite' => array('slug' => 'features'),
    'supports' => array('title', 'editor', 'thumbnail', 'comments')
  );
  register_post_type('feature', $args);
}
add_action('init', 'register_feature');


// Reviews
// ------------------------------------
function register_review() {
  $labels = array(
    'name' => __('Reviews'),
    'add_new' => _x('Add New', 'review item'),
    'singular_name' => __('Review'),
    'add_new_item' => __('Add New Review'),
    'edit_item' => __('Edit Review'),
    'new_item' => __('New Review'),
    'view_item' => __('View Review')
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => false,
    'rewrite' => array('slug' => 'reviews'),
    'supports' => array('title', 'editor', 'thumbnail', 'comments')
  );
  register_post_type('review', $args);
}
add_action('init', 'register_review');
?>