<article id="post-<?php the_ID(); ?>" <?php post_class('pulse-post-card'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <a class="pulse-post-thumb" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large'); ?>
        </a>
    <?php endif; ?>

    <div class="pulse-post-body">
        <div class="pulse-post-meta">
            <?php pulsewp_posted_on(); ?>
            <?php pulsewp_posted_by(); ?>
        </div>

        <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <div class="pulse-post-excerpt">
            <?php the_excerpt(); ?>
        </div>

        <a class="pulse-read-more" href="<?php the_permalink(); ?>">
            Read article →
        </a>
    </div>
</article>