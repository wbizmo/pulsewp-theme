<?php
/**
 * Template Name: PulseWP Full Width
 * Template Post Type: page
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

while (have_posts()) :
    the_post();
?>

<section class="pulse-content-section">
    <div class="pulse-container pulse-entry-container">
        <?php get_template_part('template-parts/content', 'page'); ?>
    </div>
</section>

<?php
endwhile;

get_footer();