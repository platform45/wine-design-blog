<?php
if(function_exists('register_sidebar')){
register_sidebar(array('name' => 'sidebar'));
register_sidebar(array('name' => 'twitter-widget'));
register_sidebar(array('name' => 'about-cdn-menu-widget'));
register_sidebar(array('name' => 'about-network-menu-widget'));
}

// name of the thumbnail, width, height, crop mode
add_theme_support('post-thumbnails');
set_post_thumbnail_size(300, 300, true);
add_image_size( 'portfolio-thumbnails', 220, 220, true );
add_image_size( 'featured-posts-image', 940, 400, true );
add_image_size( 'single-post-image', 600, 300, true );

function Event_item() {
  $labels = array(
    'name'               => _x( 'Event', 'post type general name' ),
    'singular_name'      => _x( 'Event', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Event' ),
    'edit_item'          => __( 'Edit Event' ),
    'new_item'           => __( 'New Event' ),
    'all_items'          => __( 'All Events' ),
    'view_item'          => __( 'View Event' ),
    'search_items'       => __( 'Search Events' ),
    'not_found'          => __( 'No products found' ),
    'not_found_in_trash' => __( 'No products found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Events'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our products and product specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'event-item', $args );
}
add_action( 'init', 'event_item' );

function my_taxonomies_event() {
  $labels = array(
    'name'              => _x( 'Event Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Event Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Event Categories' ),
    'all_items'         => __( 'All Event Categories' ),
    'parent_item'       => __( 'Parent Event Category' ),
    'parent_item_colon' => __( 'Parent Event Category:' ),
    'edit_item'         => __( 'Edit Event Category' ),
    'update_item'       => __( 'Update Event Category' ),
    'add_new_item'      => __( 'Add New Event Category' ),
    'new_item_name'     => __( 'New Event Category' ),
    'menu_name'         => __( 'Event Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'event_category', 'event-item', $args );
}
add_action( 'init', 'my_taxonomies_product', 0 );
