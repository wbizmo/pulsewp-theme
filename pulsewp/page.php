<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <section class="pulse-page-hero">
        <div class="pulse-container">
            <p class="pulse-eyebrow-dark">Page</p>
            <h1><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="pulse-content-section">
        <div class="pulse-container pulse-entry-container">
            <?php get_template_part('template-parts/content', 'page'); ?>
        </div>
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>