<?php
/**
 * SecretScaling Theme Functions
 */

function secretscaling_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'secretscaling_setup' );

add_filter( 'pre_get_document_title', function() {
    return 'SecretScaling';
} );

function secretscaling_enqueue_assets() {
    $uri = get_template_directory_uri();
    $ver = '2.0';

    // Google Fonts
    wp_enqueue_style(
        'secretscaling-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@300;400;500;600&display=swap',
        array(), null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(), '6.5.1'
    );

    // Main stylesheet
    wp_enqueue_style(
        'secretscaling-style',
        $uri . '/CSS/Styles.css',
        array('secretscaling-fonts', 'font-awesome'),
        $ver
    );

    // Main script (loaded in footer — Three.js loaded dynamically inside)
    wp_enqueue_script(
        'secretscaling-script',
        $uri . '/JavaScript/Script.js',
        array(), $ver, true
    );
}
add_action( 'wp_enqueue_scripts', 'secretscaling_enqueue_assets' );
