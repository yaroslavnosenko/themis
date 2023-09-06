<?php

if (!function_exists('themis_theme_setup')) :
    function themis_theme_setup()
    {
        add_theme_support('wp-block-styles');
        add_editor_style('editor-style.css');
    }
endif;

add_action('after_setup_theme', 'themis_theme_setup');
