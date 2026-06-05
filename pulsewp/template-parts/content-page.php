<article id="post-<?php the_ID(); ?>" <?php post_class('pulse-entry'); ?>>
    <div class="pulse-entry-content">
        <?php
        the_content();

        wp_link_pages([
            'before' => '<div class="pulse-page-links">',
            'after'  => '</div>',
        ]);
        ?>
    </div>
</article>