<?php 
add_action('after_setup_theme', function() { 
    add_theme_support('post-thumbnails'); // Featured image enable karega
    
    // Corrected menu registration
    register_nav_menu('topbar-menu', __('Top Bar Menu fruitable')); 
});


// function register_topbar_menu(){
//     register_nav_menu('topbar-menu', __('Top Bar Menu '));

// }
// add_action('after_setup_theme', 'register_topbar_menu');

add_action('admin_menu', function() {
    add_menu_page(
        'Theme Settings',
        'Theme Settings',
        'manage_options',
        'theme-settings',
        'custom_theme_settings_page'
    );
});

function custom_theme_settings_page() {
    echo '<h1>Custom Theme Settings</h1>';
}

function register_main_menu() {
    register_nav_menu('main-menu', __('Main Menu fruitable', 'textdomain'));
}
add_action('after_setup_theme', 'register_main_menu');



?>