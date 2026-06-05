<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <section class="pulse-page-hero pulse-single-hero">
        <div class="pulse-container">
            <div class="pulse-post-meta">
                <?php pulsewp_posted_on(); ?>
                <?php pulsewp_posted_by(); ?>
            </div>
            <h1><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="pulse-content-section">
        <div class="pulse-container pulse-layout-sidebar">
            <article id="post-<?php the_ID(); ?>" <?php post_class('pulse-entry'); ?>>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="pulse-single-thumb">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="pulse-entry-content">
                    <?php the_content(); ?>
                </div>

                <div class="pulse-post-tags">
                    <?php the_tags('', '', ''); ?>
                </div>

                <?php
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
                ?>
            </article>

            <?php get_sidebar(); ?>
        </div>
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>