<?php get_header(); ?>

<section class="pulse-page-hero">
    <div class="pulse-container">
        <p class="pulse-eyebrow-dark">Archive</p>
        <h1><?php the_archive_title(); ?></h1>
        <p><?php the_archive_description(); ?></p>
    </div>
</section>

<section class="pulse-content-section">
    <div class="pulse-container pulse-layout-sidebar">
        <div class="pulse-post-grid">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content'); ?>
                <?php endwhile; ?>

                <div class="pulse-pagination">
                    <?php the_posts_pagination(); ?>
                </div>
            <?php else : ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
        </div>

        <?php get_sidebar(); ?>
    </div>
</section>

<?php get_footer(); ?>