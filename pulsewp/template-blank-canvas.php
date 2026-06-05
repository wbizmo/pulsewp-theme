<?php
/**
 * Template Name: PulseWP Blank Canvas
 * Template Post Type: page
 *
 * A clean page-builder friendly template.
 * Removes theme header, footer, page title, and default spacing.
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class('pulse-blank-canvas'); ?>>
<?php wp_body_open(); ?>

<main id="primary" class="pulse-blank-main">
    <?php
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php wp_footer(); ?>
</body>
</html>