<?php

function motaphoto_setup() {
    register_nav_menus([
        'main-menu' => 'Menu principal',
        'footer-menu' => 'Menu du footer',
    ]);
}
add_action('after_setup_theme', 'motaphoto_setup');


function motaphoto_enqueue_assets() {
    $directory = get_template_directory();
    $uri = get_template_directory_uri();

    if (file_exists($directory . '/css/main.css')) {
        wp_enqueue_style(
            'motaphoto-main',
            $uri . '/css/main.css',
            [],
            filemtime($directory . '/css/main.css')
        );
    }

    if (file_exists($directory . '/js/menu.js')) {
        wp_enqueue_script(
            'motaphoto-menu',
            $uri . '/js/menu.js',
            [],
            filemtime($directory . '/js/menu.js'),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'motaphoto_enqueue_assets');