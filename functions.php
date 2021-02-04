<?php


function pendragon_enqueue_styles()
{
    $parent_style = 'parent-style';

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style)
    );
    wp_enqueue_script('anime-js', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js');
    wp_enqueue_script('pendragon-js', get_stylesheet_directory_uri() . '/scripts.js', array('anime-js'));
}
add_action('wp_enqueue_scripts', 'pendragon_enqueue_styles');
