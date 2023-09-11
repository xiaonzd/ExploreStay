<?php





// Load stylesheets
function load_stylesheets()
{


wp_register_style('mainstyle', get_template_directory_uri() . '/style.css', array(), 1, 'all');
wp_enqueue_style('mainstyle');


}
add_action('wp_enqueue_scripts', 'load_stylesheets');





// Load Script
function load_js_assets() {

    if( is_front_page()) {

        wp_register_script('stickynav', get_template_directory_uri() . '/js/stickynav.js', array(), 1, 1, 1);
        wp_enqueue_script('stickynav');

    } 
}
add_action('wp_enqueue_scripts', 'load_js_assets');





// Menu support
add_theme_support('menus');





// Register menus
register_nav_menus(

    array (

        'sticky-menu' => __('Sticky Menu', 'theme'),
        'top-menu' => 'Top Menu',

    )


);