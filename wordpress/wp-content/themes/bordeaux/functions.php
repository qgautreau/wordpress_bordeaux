<?php
    function bordeaux_enqueue_styles() {
        $parent_style = 'mh-magazine-lite-style';
        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style',
            get_stylesheet_directory_uri() . '/style.css',
            array( $parent_style ),
            wp_get_theme()->get('Version')
        );
    }
    add_action( 'wp_enqueue_scripts', 'bordeaux_enqueue_styles' );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 632, 300 );
?>
