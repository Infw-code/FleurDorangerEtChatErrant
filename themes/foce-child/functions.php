<?php
add_action( 'wp_enqueue_scripts', 'fleurs_enqueue_styles_and_scripts' );
function fleurs_enqueue_styles_and_scripts() {
    // Charger le style du parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Charger le style enfant
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );

    // Google Fonts (reste pareil, c'est une URL externe)
    wp_enqueue_style('fleurs-google-fonts-quicksand', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap', false);
    wp_enqueue_style('fleurs-google-fonts-roboto-mono', 'https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap', false);

    // Swiper CSS et JS (reste pareil car CDN)
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);

    // JS custom : charger depuis le thème enfant
    wp_enqueue_script('custom-slider', get_stylesheet_directory_uri() . '/js/slider.js', ['swiper-js'], null, true);
    wp_enqueue_script('cloud', get_stylesheet_directory_uri() . '/js/cloud.js', array(), '1.0', true);
    wp_enqueue_script('menu-burger', get_stylesheet_directory_uri() . '/js/burger.js', array(), '1.0', true);
    wp_enqueue_script('foce-navigation', get_stylesheet_directory_uri() . '/js/navigation.js', array(), null, true);

    // Commentaires imbriqués
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
function foce_enqueue_burger_menu() {
	wp_enqueue_script('burger-menu', get_template_directory_uri() . '/js/burger.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'foce_enqueue_burger_menu');