<?php //Load JS / CSS Scripts

function wolf_assets() {
//Scripts
    wp_register_script( 'scripts', THEME_URI . '/assets/js/scripts.js',  array('jquery'), null, true );
    wp_register_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',  array(), null, true );
    wp_register_script( 'prism', THEME_URI . '/assets/js/prism.js',  array('jquery'), null, true );
    wp_register_script( 'mousetrap', THEME_URI . '/assets/js/mousetrap.min.js',  array('jquery'), null, true );
    wp_register_script( 'icheck', THEME_URI . '/assets/icheck/icheck.min.js',  array('jquery'), null, true );

    wp_enqueue_script( 'popper' );
    wp_enqueue_script( 'prism' );
    wp_enqueue_script( 'mousetrap' );
    wp_enqueue_script( 'icheck' );
    wp_enqueue_script( 'scripts' );
}
add_action( 'wp_enqueue_scripts', 'wolf_assets', 1);