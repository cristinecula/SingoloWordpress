<?php
  function wp_register_theme_menu() {
      register_nav_menu( 'primary', 'Main Navigation Menu' );
  }
  add_action( 'init', 'wp_register_theme_menu' );
?>

<?php add_theme_support('post-thumbnails '); ?>

<?php 
function project_init() {
  register_taxonomy(
    'project_type',
    'post',
    array(
      'label' => __( 'Project_type' ),
      'rewrite' => array( 'slug' => 'project_type' ),
      'capabilities' => array(
        'assign_terms' => 'edit_guides',
        'edit_terms' => 'publish_guides',

      )
    )
  );
}
add_action( 'init', 'people_init' );
?>

<?php add_action( 'init', 'create_post_type' );
add_theme_support( 'post-thumbnails' ); 
function create_post_type() {
  register_post_type( 'projects',
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Project' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt','custom-fields' )
    )
  );
  register_post_type( 'services',
    array(
      'labels' => array(
        'name' => __( 'Services' ),
        'singular_name' => __( 'Service' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'thumbnail')
    )
  );
  register_post_type( 'team',
    array(
      'labels' => array(
        'name' => __( 'Team' ),
        'singular_name' => __( 'Person' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt','custom-fields' )
    )
  );
   register_post_type( 'slides',
    array(
      'labels' => array(
        'name' => __( 'Slides' ),
        'singular_name' => __( 'Slide' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt','custom-fields' )
    )
  );
}
?>

<?php

add_action( 'init', 'create_proj_tax' );

function create_proj_tax() {
  register_taxonomy(
    'type',
    'projects',
    array(
      'label' => __( 'Type' ),
      'rewrite' => array( 'slug' => 'type' ),
      'hierarchical' => true,
    )

  );
}
?>