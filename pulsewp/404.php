<?php get_header(); ?>

<section class="pulse-page-hero pulse-404">
    <div class="pulse-container">
        <p class="pulse-eyebrow-dark">404</p>
        <h1>Page not found.</h1>
        <p>The page you are looking for may have moved or no longer exists.</p>
        <a class="pulse-btn pulse-btn-primary" href="<?php echo esc_url(home_url('/')); ?>">Return Home</a>
    </div>
</section>

<?php get_footer(); ?>