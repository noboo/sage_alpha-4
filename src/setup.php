<?php

namespace App;

use Roots\Sage\Template;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, null);
    wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);

    if (is_page('checkout')) {
        wp_enqueue_script('sage/checkout.js', asset_path('scripts/checkout.js'), ['jquery'], null, true);
    }
}, 100);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');

    /**
     * Enable plugins to manage the document title
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link http://codex.wordpress.org/Function_Reference/register_nav_menus
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'mobile_navigation' => __('mobile Navigation', 'sage')
    ]);

    /**
     * Enable post thumbnails
     * @link http://codex.wordpress.org/Post_Thumbnails
     * @link http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
     * @link http://codex.wordpress.org/Function_Reference/add_image_size
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable post formats
     * @link http://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

    /**
     * Enable HTML5 markup support
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Use main stylesheet for visual editor
     * @see assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('styles/main.css'));
});

/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s mb-3">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="h6 mb-3">',
        'after_title'   => '</h3>'
    ];
    register_sidebar([
        'name'          => __('Primary', 'sage'),
        'id'            => 'sidebar-primary'
    ] + $config);
    register_sidebar([
        'name'          => __('Secondary', 'sage'),
        'id'            => 'sidebar-secondary'
    ] + $config);
    register_sidebar([
        'name'          => __('Tertiary', 'sage'),
        'id'            => 'sidebar-thirdary'
    ] + $config);
    register_sidebar([
        'name'          => __('Fourth', 'sage'),
        'id'            => 'sidebar-fourth'
    ] + $config);
    register_sidebar([
        'name'          => __('First Footer', 'sage'),
        'id'            => 'first-footer'
    ] + $config);
});
/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s mb-3">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="h6 mb-3">',
        'after_title'   => '</h3>'
    ];
    register_sidebar([
        'name'          => __('Second Footer', 'sage'),
        'id'            => 'second-footer'
    ] + $config);
    register_sidebar([
        'name'          => __('Third Footer', 'sage'),
        'id'            => 'third-footer'
    ] + $config);
    register_sidebar([
        'name'          => __('Fourth Footer', 'sage'),
        'id'            => 'fourth-footer'
    ] + $config);
});
//background
add_custom_background();
// ショートカット
add_filter('widget_text', 'do_shortcode');
// ヘッダー
add_custom_image_header('header_style', 'admin_header_style');
