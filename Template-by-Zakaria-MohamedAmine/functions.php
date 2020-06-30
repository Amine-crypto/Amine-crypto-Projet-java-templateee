<?php

if (! function_exists ('ESTSB_setup')):
function ESTSB_setup() {
    add_theme_support('title-tag');

}
endif;
add_action('after_setup_theme', 'ESTSB_setup');

function register_ESTSB_menus() {
     register_nav_menus(
           array(
              'primary' => __('Primary Menu'),
              'footer' => __('Footer Menu') 
           )
     );
}
add_action('init', 'register_ESTSB_menus');


/* add stylesheets*/

function ESTSB_scripts(){
    //Inserer style initial
    wp_enqueue_style('ESTSB_styles', get_stylesheet_uri());
     //Inserer style google fonts
    wp_enqueue_style('ESTSB_google_fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700');
}
add_action('wp_enqueue_scripts', 'ESTSB_scripts');
/* Register Widget Areas*/

function ESTSB_widget_init() {
    register_sidebar( array (
           'name' => __('Main Sidebar', 'ESTSB'),
           'id' => 'main-sidebar',
           'description' => __('Widgets vont apparaitre dans tous les pages en utilisant la template des deux colonnes.','ESTSB'),
           'before_widget' => '<section id="%1$s" class="widget %2$s">',
           'after_widget' =>'</section>',
           'before_title' => '<h2 class="widget-title">',
           'after_title' => '</h2>'
    ));
}
add_action('widgets_init', 'ESTSB_widget_init');

