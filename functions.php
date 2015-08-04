<?php

function theme_styles(){

	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/application.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles');


?>