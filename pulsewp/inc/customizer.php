<?php
if (!defined('ABSPATH')) {
    exit;
}

function pulsewp_customize_register($wp_customize) {
    $wp_customize->add_section('pulsewp_theme_options', [
        'title'    => __('PulseWP Options', 'pulsewp'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('pulsewp_header_cta_text', [
        'default'           => 'Book a Consultation',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('pulsewp_header_cta_text', [
        'label'   => __('Header CTA Text', 'pulsewp'),
        'section' => 'pulsewp_theme_options',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('pulsewp_header_cta_url', [
        'default'           => '#contact',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control('pulsewp_header_cta_url', [
        'label'   => __('Header CTA URL', 'pulsewp'),
        'section' => 'pulsewp_theme_options',
        'type'    => 'url',
    ]);
}
add_action('customize_register', 'pulsewp_customize_register');