<?php
/**
 * Plugin Name: Webzent Login Branding
 * Description: A plugin to change the WordPress login page logo and customize the login form.
 * Version: 1.0
 * Author: Shabuddin Ansari
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue custom login CSS
function webzent_login_customizations() {
    ?>
    <style type="text/css">
        h1 a {
            background-image: url('<?php echo plugin_dir_url(__FILE__); ?>images/webzent-logo.png') !important;
            background-size: contain !important;
            width: 100% !important;
            height: 100px !important;
        }
        .login form {
            box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
            border-radius: 20px;
            background: transparent !important;
        }
        body {
            background-image: url('<?php echo plugin_dir_url(__FILE__); ?>images/bg-img.png') !important;
            background-size: cover !important;
            background-position: center !important;
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'webzent_login_customizations');