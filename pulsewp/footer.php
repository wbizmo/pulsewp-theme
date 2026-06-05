<?php
if (!defined('ABSPATH')) exit;
?>

</main>

<footer class="pulse-footer">
    <div class="pulse-container">

        <div class="pulse-footer-cta">
            <div>
                <p class="pulse-eyebrow">Ready to move forward?</p>
                <h2>Build a sharper business presence.</h2>
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
            <p>&copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>

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

<button class="pulse-backtop" id="pulseBackTop" aria-label="Back to top">↑</button>

</div>

<?php wp_footer(); ?>
</body>
</html>