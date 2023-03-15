<?php
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', function () {
    register_nav_menus([
        'header_menu' => 'Меню хедер',
        'footer_catalog_col_1' => 'Меню футер 1',
        'footer_catalog_col_2' => 'Меню футер 2',
    ]);
    add_theme_support(
        'custom-logo',
        array(
            'height' => 500,
            'width' => 500,
            'flex-height' => true,
        )
    );
});