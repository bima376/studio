<?php

function load_css()
{
    wp_register_style('tailwind', 'https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4', array(), false, 'all');
    wp_enqueue_style('tailwind');
}

add_action('wp_enqueue_scripts', 'load_css');

// function load_js()
// {
//     wp_register_script('tailwind', 'https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4', array(), '4', 'all');
// }