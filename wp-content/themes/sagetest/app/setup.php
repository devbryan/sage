<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('sage/animate.css', get_template_directory_uri().'/assets/styles/animate.css', false, null);
    wp_enqueue_style('sage/bootstrap.min', get_template_directory_uri().'/assets/styles/bootstrap.min.css', false, null);
    wp_enqueue_style('sage/flaticon.css', get_template_directory_uri().'/assets/styles/flaticon.css', false, null);
    wp_enqueue_style('sage/fontawesome.css', get_template_directory_uri().'/assets/styles/fontawesome.css', false, null);
    wp_enqueue_style('sage/green.css', get_template_directory_uri().'/assets/styles/green.css', false, null);
    wp_enqueue_style('sage/magnific-popup.css', get_template_directory_uri().'/assets/styles/magnific-popup.css', false, null);
    wp_enqueue_style('sage/owl.carousel.min.css', get_template_directory_uri().'/assets/styles/owl.carousel.min.css', false, null);
    wp_enqueue_style('sage/owl.theme.default.min.css', get_template_directory_uri().'/assets/styles/owl.theme.default.min.css', false, null);
    wp_enqueue_style('sage/responsive.css', get_template_directory_uri().'/assets/styles/responsive.css', false, null);

    
    //wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);
    wp_enqueue_script('sage/jquery-3.3.1.min.js', get_template_directory_uri().'/assets/scripts/jquery-3.3.1.min.js', array(), null, true);
    wp_enqueue_script('sage/bootstrap.js', get_template_directory_uri().'/assets/scripts/bootstrap.min.js', array(), null, true);
    wp_enqueue_script('sage/custom.js', get_template_directory_uri().'/assets/scripts/custom.js', array(), null, true);
    wp_enqueue_script('sage/fontawesome.js', get_template_directory_uri().'/assets/scripts/fontawesome.js', array(), null, true);
    wp_enqueue_script('sage/jquery.appear.js', get_template_directory_uri().'/assets/scripts/jquery.appear.js', array(), null, true);
    wp_enqueue_script('sage/jquery.magnific-popup.min.js', get_template_directory_uri().'/assets/scripts/jquery.magnific-popup.min.js', array(), null, true);
    wp_enqueue_script('sage/jquery.scrollto.js', get_template_directory_uri().'/assets/scripts/jquery.scrollto.js', array(), null, true);
    wp_enqueue_script('sage/jquery.vide.min.js', get_template_directory_uri().'/assets/scripts/jquery.vide.min.js', array(), null, true);
    wp_enqueue_script('sage/owl.carousel.min.js', get_template_directory_uri().'/assets/scripts/owl.carousel.min.js', array(), null, true);
    wp_enqueue_script('sage/wow.js', get_template_directory_uri().'/assets/scripts/wow.js', array(), null, true);
    // wp_enqueue_script('sage/main.js',get_template_directory_uri().'/assets/styles/responsive.css', array(), null, true);

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
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
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage')
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Use main stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('styles/main.css'));
    add_theme_support('custom-logo');
}, 20);

/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ];
    register_sidebar([
        'name'          => __('Primary', 'sage'),
        'id'            => 'sidebar-primary'
    ] + $config);
    register_sidebar([
        'name'          => __('Footer', 'sage'),
        'id'            => 'sidebar-footer'
    ] + $config);
});

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /**
     * Add JsonManifest to Sage container
     */
    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    /**
     * Add Blade to Sage container
     */
    sage()->singleton('sage.blade', function (Container $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view']);
    });

    /**
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
    });
});
