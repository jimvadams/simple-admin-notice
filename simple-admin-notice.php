<?php
/**
 * Plugin Name: Simple Admin Notice
 * Description: A super simple plugin that displays a notice in the WordPress admin area.
 * Version: 1.3
 * Author: jim
 * GitHub Plugin URI: jimvadams/simple-admin-notice
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Hook into admin_notices to display the notice
add_action('admin_notices', 'simple_admin_notice_display');

function simple_admin_notice_display() {
    ?>
    <div class="notice notice-info is-dismissible">
        <p><strong>Hello!</strong> This is a simple admin notice from the Simple Admin Notice plugin.</p>
    </div>
    <?php
}
