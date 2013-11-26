<?php
register_sidebar();

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'start_post_rel_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );



add_theme_support( 'post-thumbnails' );

remove_action( 'wp_head', 'wlwmanifest_link'); 


function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  
  $first_img = '<a href=';
  $first_img .= get_permalink();
  $first_img .= ' class="thumbnail-wrapper">';
  $first_img .= '<img src="';
  $first_img .= $matches[1][0];
  $first_img .= '" alt="" />';
  $first_img .- '</a>';

  if(empty($output)) {
    $first_img = "";
  }
  return $first_img; 
}

function your_function_name() {
add_theme_support( 'menus' );
}

add_action( 'after_setup_theme', 'your_function_name' );

?>
