<?php

    require_once get_template_directory() . '/nav.php';

    function ah_theme_support(){
        register_nav_menus([
            'primary' => __('Haber Kategori Menü', 'ah')
        ]);
    }

    add_action( 'init', 'ah_theme_support' );

    function set_excerpt_length(){
        return 20;
    }

    add_filter( 'excerpt_length', 'set_excerpt_length' );

?>