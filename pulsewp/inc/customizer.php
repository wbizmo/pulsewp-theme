<?php
if (!defined('ABSPATH')) {
    exit;
}

function pulsewp_sanitize_checkbox($checked) {
    return ((isset($checked) && true == $checked) ? true : false);
}

function pulsewp_customize_register($wp_customize) {
    $wp_customize->add_panel('pulsewp_panel', [
        'title'       => __('PulseWP Theme Settings', 'pulsewp'),
        'description' => __('Customize PulseWP colors, header, homepage, and footer.', 'pulsewp'),
        'priority'    => 30,
    ]);

    $wp_customize->add_section('pulsewp_colors', [
        'title' => __('Theme Colors', 'pulsewp'),
        'panel' => 'pulsewp_panel',
    ]);

    $wp_customize->add_setting('pulsewp_primary_color', [
        'default'           => '#0E2238',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pulsewp_primary_color', [
        'label'   => __('Primary Color', 'pulsewp'),
        'section' => 'pulsewp_colors',
    ]));

    $wp_customize->add_setting('pulsewp_accent_color', [
        'default'           => '#C5A572',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pulsewp_accent_color', [
        'label'   => __('Accent Color', 'pulsewp'),
        'section' => 'pulsewp_colors',
    ]));

    $wp_customize->add_section('pulsewp_header_options', [
        'title' => __('Header Options', 'pulsewp'),
        'panel' => 'pulsewp_panel',
    ]);

    $wp_customize->add_setting('pulsewp_header_cta_text', [
        'default'           => 'Book a Consultation',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('pulsewp_header_cta_text', [
        'label'   => __('Header CTA Text', 'pulsewp'),
        'section' => 'pulsewp_header_options',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('pulsewp_header_cta_url', [
        'default'           => '#contact',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control('pulsewp_header_cta_url', [
        'label'   => __('Header CTA URL', 'pulsewp'),
        'section' => 'pulsewp_header_options',
        'type'    => 'url',
    ]);

    $wp_customize->add_setting('pulsewp_sticky_header', [
        'default'           => true,
        'sanitize_callback' => 'pulsewp_sanitize_checkbox',
    ]);

    $wp_customize->add_control('pulsewp_sticky_header', [
        'label'   => __('Enable Sticky Header', 'pulsewp'),
        'section' => 'pulsewp_header_options',
        'type'    => 'checkbox',
    ]);

    $wp_customize->add_section('pulsewp_home_hero', [
        'title' => __('Homepage Hero', 'pulsewp'),
        'panel' => 'pulsewp_panel',
    ]);

    $hero_fields = [
        'pulsewp_hero_eyebrow' => ['Business & Agency Theme', 'Hero Eyebrow'],
        'pulsewp_hero_title' => ['Build a polished business website without starting from scratch.', 'Hero Title'],
        'pulsewp_hero_text' => ['PulseWP is built for agencies, consultants, studios, finance firms, service providers, and growing businesses that need a sharp, credible online presence.', 'Hero Text'],
        'pulsewp_hero_primary_text' => ['Explore Services', 'Primary Button Text'],
        'pulsewp_hero_primary_url' => ['#services', 'Primary Button URL'],
        'pulsewp_hero_secondary_text' => ['See Process', 'Secondary Button Text'],
        'pulsewp_hero_secondary_url' => ['#process', 'Secondary Button URL'],
    ];

    foreach ($hero_fields as $key => $field) {
        $wp_customize->add_setting($key, [
            'default'           => $field[0],
            'sanitize_callback' => str_contains($key, '_url') ? 'esc_url_raw' : 'sanitize_text_field',
        ]);

        $wp_customize->add_control($key, [
            'label'   => __($field[1], 'pulsewp'),
            'section' => 'pulsewp_home_hero',
            'type'    => str_contains($key, '_url') ? 'url' : 'text',
        ]);
    }

    $wp_customize->add_section('pulsewp_home_sections', [
        'title' => __('Homepage Sections', 'pulsewp'),
        'panel' => 'pulsewp_panel',
    ]);

    $section_toggles = [
        'pulsewp_show_services'     => ['Show Services Section', true],
        'pulsewp_show_stats'        => ['Show Stats Section', true],
        'pulsewp_show_process'      => ['Show Process Section', true],
        'pulsewp_show_cases'        => ['Show Case Studies Section', true],
        'pulsewp_show_testimonial'  => ['Show Testimonial Section', true],
        'pulsewp_show_final_cta'    => ['Show Final CTA Section', true],
    ];

    foreach ($section_toggles as $key => $field) {
        $wp_customize->add_setting($key, [
            'default'           => $field[1],
            'sanitize_callback' => 'pulsewp_sanitize_checkbox',
        ]);

        $wp_customize->add_control($key, [
            'label'   => __($field[0], 'pulsewp'),
            'section' => 'pulsewp_home_sections',
            'type'    => 'checkbox',
        ]);
    }

    $wp_customize->add_section('pulsewp_footer_options', [
        'title' => __('Footer Options', 'pulsewp'),
        'panel' => 'pulsewp_panel',
    ]);

    $wp_customize->add_setting('pulsewp_footer_cta_eyebrow', [
        'default'           => 'Ready to move forward?',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('pulsewp_footer_cta_eyebrow', [
        'label'   => __('Footer CTA Eyebrow', 'pulsewp'),
        'section' => 'pulsewp_footer_options',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('pulsewp_footer_cta_title', [
        'default'           => 'Build a sharper business presence.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('pulsewp_footer_cta_title', [
        'label'   => __('Footer CTA Title', 'pulsewp'),
        'section' => 'pulsewp_footer_options',
        'type'    => 'text',
    ]);

    $wp_customize->add_setting('pulsewp_footer_text', [
        'default'           => sprintf('© %s %s. All rights reserved.', date('Y'), get_bloginfo('name')),
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control('pulsewp_footer_text', [
        'label'   => __('Footer Bottom Text', 'pulsewp'),
        'section' => 'pulsewp_footer_options',
        'type'    => 'text',
    ]);
}
add_action('customize_register', 'pulsewp_customize_register');

function pulsewp_customizer_css() {
    $primary = get_theme_mod('pulsewp_primary_color', '#0E2238');
    $accent  = get_theme_mod('pulsewp_accent_color', '#C5A572');
    ?>
    <style>
        :root {
            --pulse-primary: <?php echo esc_html($primary); ?>;
            --pulse-accent: <?php echo esc_html($accent); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'pulsewp_customizer_css');