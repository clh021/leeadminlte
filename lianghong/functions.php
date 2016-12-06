<?php
show_admin_bar(false);//hiden admin bar in front-end themes
wp_enqueue_script( 'lianghong-script', get_stylesheet_directory_uri() . '/lianghong/console.log.php', array(), true );



//wp_enqueue_script - action used to load scripts on the front-end
//admin_enqueue_scripts – action used to load scripts in the WP admin
// function lianghong_add_inline_script() {
//     wp_add_inline_script( 'my-inline-js', 'console.log("'.$consoleStr.'");' );
// }
// add_action( 'wp_enqueue_scripts', 'lianghong_add_inline_script' );
// function myprefix_enqueue_scripts() {
//     wp_enqueue_script( 'my-script', get_stylesheet_directory_uri() . '/js/my-script.js', array(), true );
// }
// add_action( 'wp_enqueue_scripts', 'myprefix_enqueue_scripts' );
