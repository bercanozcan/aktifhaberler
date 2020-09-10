<?php

    require_once get_template_directory() . '/nav.php';

    function ah_theme_support(){
        register_nav_menus([
            'primary' => __('Haber Kategori Menü', 'ah')
        ]);
    }

    add_action( 'init', 'ah_theme_support' );

    add_theme_support( 'post-thumbnails' );

?>