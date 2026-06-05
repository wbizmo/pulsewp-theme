<?php
if (!defined('ABSPATH')) exit;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="pulse-site">

<header class="pulse-header" id="pulseHeader">
    <div class="pulse-container pulse-header-inner">

        <a class="pulse-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <span class="pulse-brand-text"><?php bloginfo('name'); ?></span>
            <?php endif; ?>
        </a>

        <nav class="pulse-nav" aria-label="<?php esc_attr_e('Primary Menu', 'pulsewp'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'fallback_cb'    => false,
                'menu_class'     => 'pulse-menu',
            ]);
            ?>
        </nav>

        <div class="pulse-header-actions">
            <a class="pulse-btn pulse-btn-primary" href="<?php echo esc_url(get_theme_mod('pulsewp_header_cta_url', '#contact')); ?>">
                <?php echo esc_html(get_theme_mod('pulsewp_header_cta_text', 'Book a Consultation')); ?>
            </a>

            <button class="pulse-mobile-toggle" id="pulseMobileToggle" aria-label="Open menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

    </div>
</header>

<div class="pulse-mobile-drawer" id="pulseMobileDrawer">
    <div class="pulse-mobile-panel">
        <div class="pulse-mobile-top">
            <span class="pulse-brand-text"><?php bloginfo('name'); ?></span>
            <button class="pulse-mobile-close" id="pulseMobileClose" aria-label="Close menu">×</button>
        </div>

        <?php
        wp_nav_menu([
            'theme_location' => 'mobile',
            'container'      => false,
            'fallback_cb'    => false,
            'menu_class'     => 'pulse-mobile-menu',
        ]);
        ?>

        <a class="pulse-btn pulse-btn-primary pulse-mobile-cta" href="<?php echo esc_url(get_theme_mod('pulsewp_header_cta_url', '#contact')); ?>">
            <?php echo esc_html(get_theme_mod('pulsewp_header_cta_text', 'Book a Consultation')); ?>
        </a>
    </div>
</div>

<main id="primary" class="pulse-main">