<?php
/**
 * Plugin Name: Custom Post Type: Project
 */
add_action('init', function () {
    register_post_type(
        'project',
        [
            'labels' => [
                'name' => __('Projects', 'textdomain'),
                'singular_name' => __('Project', 'textdomain'),
            ],
            'public'      => true,
            'has_archive' => true,
        ],
    );
});
