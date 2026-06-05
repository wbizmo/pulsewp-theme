<?php
if (!defined('ABSPATH')) exit;

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside class="pulse-sidebar">
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside>