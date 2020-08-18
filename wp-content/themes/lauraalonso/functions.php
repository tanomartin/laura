<?php
define('THEME_URL', get_template_directory_uri());
define('SITE_URL', home_url());

add_action('after_setup_theme', 'theme_setup');

require_once get_template_directory() . '/resourse/class-wp-bootstrap-navwalker.php';

function theme_setup() {
    add_theme_support('post-thumbnails');
}
?>