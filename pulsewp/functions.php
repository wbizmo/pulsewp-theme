<?php
if (!defined('ABSPATH')) {
    exit;
}

define('PULSEWP_VERSION', '1.0.0');
define('PULSEWP_DIR', get_template_directory());
define('PULSEWP_URI', get_template_directory_uri());

if (!isset($content_width)) {
    $content_width = 1200;
}

function pulsewp_setup() {
    load_theme_textdomain('pulsewp', PULSEWP_DIR . '/languages');

    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('custom-spacing');
    add_theme_support('custom-line-height');
    add_theme_support('appearance-tools');
    add_theme_support('custom-units');
    add_theme_support('editor-font-sizes');

    add_editor_style('assets/css/editor.css');

    add_theme_support('editor-color-palette', [
        [
            'name'  => __('Pulse Primary', 'pulsewp'),
            'slug'  => 'pulse-primary',
            'color' => '#0E2238',
        ],
        [
            'name'  => __('Pulse Accent', 'pulsewp'),
            'slug'  => 'pulse-accent',
            'color' => '#C5A572',
        ],
        [
            'name'  => __('Pulse Soft', 'pulsewp'),
            'slug'  => 'pulse-soft',
            'color' => '#f8f6f0',
        ],
        [
            'name'  => __('White', 'pulsewp'),
            'slug'  => 'white',
            'color' => '#ffffff',
        ],
    ]);

    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    register_nav_menus([
        'primary' => __('Primary Menu', 'pulsewp'),
        'footer'  => __('Footer Menu', 'pulsewp'),
        'mobile'  => __('Mobile Menu', 'pulsewp'),
    ]);
}
add_action('after_setup_theme', 'pulsewp_setup');

function pulsewp_scripts() {
    wp_enqueue_style(
        'pulsewp-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'pulsewp-main',
        PULSEWP_URI . '/assets/css/main.css',
        [],
        PULSEWP_VERSION
    );

    wp_enqueue_script(
        'pulsewp-main',
        PULSEWP_URI . '/assets/js/main.js',
        [],
        PULSEWP_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'pulsewp_scripts');

function pulsewp_widgets_init() {
    register_sidebar([
        'name'          => __('Blog Sidebar', 'pulsewp'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets shown beside blog posts and archives.', 'pulsewp'),
        'before_widget' => '<section id="%1$s" class="pulse-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="pulse-widget-title">',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => __('Footer Column 1', 'pulsewp'),
        'id'            => 'footer-1',
        'before_widget' => '<section id="%1$s" class="pulse-footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="pulse-footer-title">',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => __('Footer Column 2', 'pulsewp'),
        'id'            => 'footer-2',
        'before_widget' => '<section id="%1$s" class="pulse-footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="pulse-footer-title">',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => __('Footer Column 3', 'pulsewp'),
        'id'            => 'footer-3',
        'before_widget' => '<section id="%1$s" class="pulse-footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="pulse-footer-title">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'pulsewp_widgets_init');

require_once PULSEWP_DIR . '/inc/customizer.php';
require_once PULSEWP_DIR . '/inc/template-tags.php';