<?php
/**
 * SecretScaling Theme Functions
 */

function secretscaling_enqueue_assets() {
    $uri = get_template_directory_uri();
    $ver = '1.0';

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

    // Main script (loaded in footer)
    wp_enqueue_script(
        'secretscaling-script',
        $uri . '/JavaScript/Script.js',
        array(), $ver, true
    );
}
add_action( 'wp_enqueue_scripts', 'secretscaling_enqueue_assets' );

function secretscaling_favicon() {
    echo '<link rel="icon" type="image/png" href="' . get_template_directory_uri() . '/Images/Logo/Favicon.png">';
}
add_action( 'wp_head', 'secretscaling_favicon', 1 );
