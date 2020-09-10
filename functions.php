<?php

    require_once get_template_directory() . '/nav.php';

    function ah_theme_support(){
        register_nav_menus([
            'primary' => __('Haber Kategori Menü')
        ]);
    }

    add_action( 'after_theme_setup', 'ah_theme_support' );

?>