<?php
/**
 * fundam functions and definitions.
 * @package fundam
 */

if (! function_exists('fundam_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function fundam_setup()
    {
        /**
         * Loading language file.
         */
        load_theme_textdomain('fundam', get_template_directory() . '/languages');

        /**
         * Support automatic-feed-links.
         */
        add_theme_support('automatic-feed-links');

        /**
         * Support editor-style.
         */
        add_editor_style(get_stylesheet_uri());

        /**
         * Support title-tag.
         */
        add_theme_support('title-tag');

        /**
         * Support post-thumbnails.
         */
        add_theme_support('post-thumbnails');

        /**
         * Switch default core markup for search form, comment form, and galleries
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
    }
}
add_action('after_setup_theme', 'fundam_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function fundam_content_width()
{
    $GLOBALS['content_width'] = apply_filters('fundam_content_width', 1000);
}
add_action('after_setup_theme', 'fundam_content_width', 0);

/**
 * Enqueue styles.
 */
function fundam_styles()
{
    wp_enqueue_style('fundam-style', get_theme_file_uri() . '/dist/css/style.min.css', array(), FUNDAM_VER);
}
add_action('wp_enqueue_scripts', 'fundam_styles');

/**
 * Enqueue scripts.
 */
function fundam_scripts()
{
    wp_enqueue_script('fundam-scripts', get_theme_file_uri() . '/dist/js/app.min.js', array(), FUNDAM_VER, false);
}
add_action('wp_enqueue_scripts', 'fundam_scripts');

/**
 * -------------------------------------------------------------------------
 *  Theme definitions
 * -------------------------------------------------------------------------
 */
define('FUNDAM_VER', '1.0.0');
