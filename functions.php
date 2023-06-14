<?php 
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
    wp_enqueue_style( 'nullstyle', get_template_directory_uri() . '/assets/css/nullstyle.css' );
    wp_enqueue_style( 'style-theme', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_script( 'index.js-theme', get_template_directory_uri() . '/assets/js/index.js', array(), '1.0.0', true );
}

add_theme_support('post-thumbnails');//чтобы посты поддерживаи картинки
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>