<?php
if (!defined('ABSPATH')) {
    exit;
}

function pulsewp_posted_on() {
    echo '<span class="pulse-meta-item">' . esc_html(get_the_date()) . '</span>';
}

function pulsewp_posted_by() {
    echo '<span class="pulse-meta-item">' . esc_html__('By', 'pulsewp') . ' ' . esc_html(get_the_author()) . '</span>';
}