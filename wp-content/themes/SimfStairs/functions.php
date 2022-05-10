<?php
/**
 * SimfStairs functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SimfStairs
 */
// function attachment_cache_busting( $url ) {
//     return add_query_arg( 'v', time(), $url );
// }
// add_filter( 'wp_get_attachment_url', 'attachment_cache_busting' );
// ВЫКЛЮЧИТЬ ПЕРЕД СДАЧЕЙ ПРОЕКТА !
add_action( 'after_setup_theme', function(){
    show_admin_bar( false );
    });

add_theme_support( 'menus' );

/**
 * Enqueue scripts and styles.
 */

function liberty_scripts() {

    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/build/css/index.min.css');

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/build/js/index.min.js', array(), '1.0.0', true );

};
add_action( 'wp_enqueue_scripts', 'liberty_scripts' );


/**
 * Allow SVG files in Media Library.
 */

function extra_mime_types( $mimes ) {

    $mimes['svg'] = 'image/svg+xml';
  
    return $mimes;
  };
  add_filter( 'upload_mimes', 'extra_mime_types' );

/*
 * Add advanced setting acf
 */

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Глобальные настройки темы'),
            'menu_title'    => __('Настройки сайта'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
};