<?php
define( 'somadev_VERSION', '0.0.1' );

// Setup do tema

function somadev_setup() {

	load_theme_textdomain( 'somadev', get_template_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'somadev_setup' );

// Este tema suporta miniaturas

add_theme_support( 'post-thumbnails' );

function somadev_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'somadev_page_menu_args' );

// Exibe o nome do site

function somadev_wp_title( $title, $sep ) {
  global $paged, $page;

  if ( is_feed() )
    return $title;

$title .= get_bloginfo( 'name' );

// Exibe a descrição no site na Home

$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
    $title = "$title $sep $site_description";

// Adiciona paginação na Home se necessário
if ( $paged >= 2 || $page >= 2 )
    $title = "$title $sep " . sprintf( __( 'Page %s', 'somadev' ), max( $paged, $page ) );

return $title;
}

add_filter( 'wp_title', 'somadev_wp_title', 10, 2 );

if (function_exists('add_image_size')) {
   add_image_size( 'slider', 1900, 420, true );
   add_image_size( 'slider-mobile', 620, 385, true );
   add_image_size( 'bg-header', 1500, 186, true );
   add_image_size( 'post', 292, 193, true );
   add_image_size( 'post-category-small', 449, 260, true );
   add_image_size( 'post-category-big', 456, 550, true );
   add_image_size( 'post-category-list', 460, 210, true );

}
// Functions
require(get_template_directory() . '/functions/functions/scripts-footer.php' );
require(get_template_directory() . '/functions/functions/widgets.php' );
require(get_template_directory() . '/functions/functions/login-style.php' );
require(get_template_directory() . '/functions/functions/media-social.php' );

require(get_template_directory() . '/functions/functions/pagination.php' );


add_action( 'init', function() {

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');

}, PHP_INT_MAX - 1 );

add_action('init', 'register_nav_menus_on_init');

function register_nav_menus_on_init() {
  register_nav_menus(array(
    'top-pages-menu' => 'Menu > Topo da página',
    'bottom-pages-menu' => 'Menu > Rodapé da página',
  ));
}

add_filter( 'pll_get_post_types', 'add_cpt_to_pll', 10, 2 );

function add_cpt_to_pll( $post_types, $is_settings ) {
    if ( $is_settings ) {
        // hides 'my_cpt' from the list of custom post types in Polylang settings
        unset( $post_types['produtos'] );
    } else {
        // enables language and translation management for 'my_cpt'
        $post_types['produtos'] = 'produtos';
    }
    return $post_types;
}

function nameCategory() {

  $categories = get_the_category();
  $separator = ', ';
  $output = '';
  if($categories){
      foreach($categories as $category) {
        $output .= '<a class="cat-item" href="'. get_category_link( $category->term_id ) . '" title="' . esc_attr( sprintf( __( "Ver todos os posts %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;}
    echo trim($output, $separator);
  }
}

function postShow() {

  $output = '';
  $output .= '<h2 class="title"><a href="'. get_the_permalink() . '" title="' . get_the_title() . '">' . get_the_title() .'</a></h2>';
  if (has_excerpt(get_the_ID())) {
    $output .= substr(get_the_excerpt(),0,80);
  }
  $output .= '<a href="' . get_the_permalink() .  '" class="link-more" title="' . get_the_title() . '">Continue lendo</a>';
  echo $output;
}

function hasThumbnail($sizeThumb='', $sizeNoThumb='') {
  $output = '';
  if (has_post_thumbnail()) {
      $output .= '<a href="'. get_the_permalink() .' title="' . get_the_title() . '">';
      $output .= '<img src="' . get_the_post_thumbnail_url(get_the_ID(), $sizeThumb) . '" alt="' . get_the_title() .'">';
    $output .= '</a>';
  } else {
      $output .= '<a href="'. get_the_permalink() .'" title="' . get_the_title() . '">';
      $output .= '<img src="'. get_template_directory_uri() .'/src/images/'.$sizeNoThumb.'.jpg" alt="' . get_the_title() .'">';
      $output .= '</a>';
  }
  echo $output;
}