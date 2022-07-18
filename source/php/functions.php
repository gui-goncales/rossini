<?php
function my_function_admin_bar()
{
  return false;
}
add_filter('show_admin_bar', 'my_function_admin_bar');

// Limite de caracteres
function excerpt($limit)
{
  $excerpt = explode(' ', get_the_excerpt(), $limit);

  if (count($excerpt) >= $limit) {
    array_pop($excerpt);
    $excerpt = implode(" ", $excerpt) . ' ...';
  } else {
    $excerpt = implode(" ", $excerpt);
  }

  $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
  return $excerpt;
}

add_theme_support('post-thumbnails');


/**
 * Adding ACF Options Page to Menu.
 */
if (function_exists('acf_add_options_page')) {
  // Adding
  acf_add_options_page(array(
    'page_title' => 'Configurações',
    'menu_title' => 'Configurações do Site',
    'menu_slug' => 'site_options',
    'capability' => 'edit_posts',
    'parent_slug' => '',
    'position' => 13,
    'icon_url' => 'dashicons-smiley'
  ));

  // Geral and Logos
  acf_add_options_sub_page(array(
    'page_title' => 'Configurações Gerais',
    'menu_title' => 'Geral',
    'parent_slug' => 'site_options'
  ));
}

?>