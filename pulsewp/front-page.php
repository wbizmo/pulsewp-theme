<?php
if (!defined('ABSPATH')) exit;

get_header();
?>

<section class="pulse-hero">
    <div class="pulse-container pulse-hero-grid">
        <div class="pulse-hero-content">
            <p class="pulse-eyebrow-dark">Business & Agency Theme</p>
            <h1>Build a polished business website without starting from scratch.</h1>
            <p>
                PulseWP is built for agencies, consultants, studios, finance firms, service providers,
                and growing businesses that need a sharp, credible online presence.
            </p>

            <div class="pulse-hero-actions">
                <a href="#services" class="pulse-btn pulse-btn-primary">Explore Services</a>
                <a href="#process" class="pulse-btn pulse-btn-ghost">See Process</a>
            </div>
        </div>

        <div class="pulse-hero-panel">
            <div class="pulse-mini-card pulse-mini-card-main">
                <span>Active Projects</span>
                <strong>24</strong>
            </div>

            <div class="pulse-hero-card">
                <div class="pulse-card-icon">↗</div>
                <h3>Premium layouts for serious businesses.</h3>
                <p>Use clean sections, strong calls-to-action, service cards, case studies, and trust blocks.</p>
            </div>

            <div class="pulse-mini-card pulse-mini-card-bottom">
                <span>Client Score</span>
                <strong>98%</strong>
            </div>
        </div>
    </div>
</section>

<section class="pulse-section" id="services">
    <div class="pulse-container">
        <div class="pulse-section-head">
            <p class="pulse-eyebrow-dark">Services</p>
            <h2>Everything a business website needs.</h2>
            <p>Reusable sections for agencies, consultants, studios, professional firms, and modern service brands.</p>
        </div>

        <div class="pulse-service-grid">
            <article class="pulse-service-card">
                <div class="pulse-service-icon">01</div>
                <h3>Business Strategy</h3>
                <p>Present your core offers with clear service blocks, benefits, and conversion-focused messaging.</p>
            </article>

            <article class="pulse-service-card">
                <div class="pulse-service-icon">02</div>
                <h3>Brand Presence</h3>
                <p>Use refined typography, soft shadows, warm accents, and premium page layouts.</p>
            </article>

            <article class="pulse-service-card">
                <div class="pulse-service-icon">03</div>
                <h3>Lead Generation</h3>
                <p>Drive visitors toward enquiries with strong CTAs, trust sections, contact strips, and forms.</p>
            </article>
        </div>
    </div>
</section>

<section class="pulse-stats-section">
    <div class="pulse-container pulse-stats-grid">
        <div>
            <p class="pulse-eyebrow-dark">Performance</p>
            <h2>Designed to look credible from the first visit.</h2>
        </div>

        <div class="pulse-stat">
            <strong>12+</strong>
            <span>Ready sections</span>
        </div>

        <div class="pulse-stat">
            <strong>4</strong>
            <span>Menu areas</span>
        </div>

        <div class="pulse-stat">
            <strong>100%</strong>
            <span>Responsive</span>
        </div>
    </div>
</section>

<section class="pulse-section" id="process">
    <div class="pulse-container pulse-process-grid">
        <div class="pulse-section-head pulse-section-head-left">
            <p class="pulse-eyebrow-dark">Process</p>
            <h2>A clean structure for explaining how your business works.</h2>
            <p>Use this section for onboarding steps, delivery process, consultation stages, or service workflow.</p>
        </div>

        <div class="pulse-process-list">
            <div class="pulse-process-item">
                <span>01</span>
                <div>
                    <h3>Discover</h3>
                    <p>Understand the client, offer, market, goals, and the action the website should drive.</p>
                </div>
            </div>

            <div class="pulse-process-item">
                <span>02</span>
                <div>
                    <h3>Design</h3>
                    <p>Build a layout system with strong hierarchy, consistent spacing, and polished interaction states.</p>
                </div>
            </div>

            <div class="pulse-process-item">
                <span>03</span>
                <div>
                    <h3>Launch</h3>
                    <p>Publish a fast, responsive, easy-to-manage WordPress site with strong business presentation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pulse-section pulse-case-section">
    <div class="pulse-container">
        <div class="pulse-section-head">
            <p class="pulse-eyebrow-dark">Case Studies</p>
            <h2>Showcase work with premium cards.</h2>
            <p>Use these cards for projects, industries, case studies, clients, or featured business outcomes.</p>
        </div>

        <div class="pulse-case-grid">
            <article class="pulse-case-card">
                <div class="pulse-case-image"></div>
                <div>
                    <span>Consulting</span>
                    <h3>Growth advisory website</h3>
                    <p>A polished business presence for a consulting brand with service pages and lead capture.</p>
                </div>
            </article>

            <article class="pulse-case-card">
                <div class="pulse-case-image"></div>
                <div>
                    <span>Agency</span>
                    <h3>Creative studio relaunch</h3>
                    <p>Modern portfolio sections, process blocks, testimonials, and conversion-focused CTAs.</p>
                </div>
            </article>

            <article class="pulse-case-card">
                <div class="pulse-case-image"></div>
                <div>
                    <span>Finance</span>
                    <h3>Professional services site</h3>
                    <p>Trust-led design language with strong typography, refined cards, and clear information flow.</p>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="pulse-testimonial-section">
    <div class="pulse-container">
        <div class="pulse-testimonial-card">
            <p class="pulse-eyebrow-dark">Client Feedback</p>
            <blockquote>
                “PulseWP gives the kind of polished business layout that usually takes days to design from scratch.”
            </blockquote>
            <div>
                <strong>Agency Founder</strong>
                <span>Professional services client</span>
            </div>
        </div>
    </div>
</section>

<section class="pulse-final-cta" id="contact">
    <div class="pulse-container">
        <div class="pulse-final-card">
            <p class="pulse-eyebrow-dark">Start Now</p>
            <h2>Launch a stronger business website with PulseWP.</h2>
            <p>Use it as a portfolio theme, client theme, agency starter, or business website foundation.</p>
            <a href="<?php echo esc_url(get_theme_mod('pulsewp_header_cta_url', '#')); ?>" class="pulse-btn pulse-btn-primary">
                <?php echo esc_html(get_theme_mod('pulsewp_header_cta_text', 'Book a Consultation')); ?>
            </a>
        </div>
    </div>
</section>

<?php
get_footer();