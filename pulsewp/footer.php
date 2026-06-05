<?php
if (!defined('ABSPATH')) exit;

$footer_text = get_theme_mod(
    'pulsewp_footer_text',
    sprintf('© %s %s. All rights reserved.', date('Y'), get_bloginfo('name'))
);
?>

</main>

<footer class="pulse-footer">
    <div class="pulse-container">

        <div class="pulse-footer-cta">
            <div>
                <p class="pulse-eyebrow">
                    <?php echo esc_html(get_theme_mod('pulsewp_footer_cta_eyebrow', 'Ready to move forward?')); ?>
                </p>

                <h2>
                    <?php echo esc_html(get_theme_mod('pulsewp_footer_cta_title', 'Build a sharper business presence.')); ?>
                </h2>
            </div>

            <a class="pulse-btn pulse-btn-light" href="<?php echo esc_url(get_theme_mod('pulsewp_header_cta_url', '#contact')); ?>">
                <?php echo esc_html(get_theme_mod('pulsewp_header_cta_text', 'Book a Consultation')); ?>
            </a>
        </div>

        <div class="pulse-footer-grid">
            <div class="pulse-footer-brand">
                <h3><?php bloginfo('name'); ?></h3>
                <p><?php bloginfo('description'); ?></p>
            </div>

            <div>
                <?php if (is_active_sidebar('footer-1')) dynamic_sidebar('footer-1'); ?>
            </div>

            <div>
                <?php if (is_active_sidebar('footer-2')) dynamic_sidebar('footer-2'); ?>
            </div>

            <div>
                <?php if (is_active_sidebar('footer-3')) dynamic_sidebar('footer-3'); ?>
            </div>
        </div>

        <div class="pulse-footer-bottom">
            <p><?php echo esc_html($footer_text); ?></p>

            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'container'      => false,
                'fallback_cb'    => false,
                'menu_class'     => 'pulse-footer-menu',
            ]);
            ?>
        </div>

    </div>
</footer>

<button class="pulse-backtop" id="pulseBackTop" aria-label="<?php esc_attr_e('Back to top', 'pulsewp'); ?>">↑</button>

</div>

<?php wp_footer(); ?>
</body>
</html>