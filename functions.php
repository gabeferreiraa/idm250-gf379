<?php
/**
 * Theme Functions
 */

function theme_styles_and_scripts() {
    // Enqueue Normalize.css for CSS resets
    wp_enqueue_style(
        'idm-normalize', // Unique handle for Normalize.css
        'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', // CDN URL
        array(), // No dependencies
        '8.0.1' // Version
    );

    // Enqueue main stylesheet from the /dist/ directory with cache-busting
    wp_enqueue_style(
        'idm-main', // Unique handle for the main stylesheet
        get_template_directory_uri() . '/dist/styles/main.css', // Path to the stylesheet
        array(), // No dependencies
        filemtime(get_template_directory() . '/dist/styles/main.css') // Cache busting
    );

    // Enqueue main JavaScript file from the /dist/ directory, if available
    wp_enqueue_script(
        'idm-main-script', // Unique handle for the script
        get_template_directory_uri() . '/dist/scripts/main.js', // Path to the script
        array(), // No dependencies
        filemtime(get_template_directory() . '/dist/scripts/main.js'), // Cache busting
        true // Load in the footer
    );
}
add_action('wp_enqueue_scripts', 'theme_styles_and_scripts');

function login_page_custom_logo() {
    echo '<style>
        body.login { background-color: #f3f3f3; }
        .login h1 a { 
            background-image: url(' . get_stylesheet_directory_uri() . '/assets/images/logo.webp) !important; 
        }
    </style>';
}
add_action('login_enqueue_scripts', 'login_page_custom_logo');

function theme_setup() {
    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus([
        'primary-menu' => 'Primary Menu',
        'footer-menu'  => 'Footer Menu',
    ]);
}
add_action('after_setup_theme', 'theme_setup');

/**
 * Registers Theme Customizer settings.
 *
 * - Adds a section for theme colors.
 * - Enables custom color options for primary and secondary theme colors.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mytheme_customize_register($wp_customize) {
    // Add a section for theme colors
    $wp_customize->add_section('theme_colors', [
        'title'    => __('Theme Colors', 'mytheme'),
        'priority' => 30,
    ]);

    // Define color settings
    $colors = [
        'primary_color' => [
    'label' => __('Primary Color', 'mytheme'),
    'default' => '#F00',
],
        'secondary_color' => [
            'label'   => __('Secondary Color', 'mytheme'),
            'default' => '#0066ff',
        ],
    ];

    // Loop through the colors to add settings and controls
    foreach ($colors as $color_id => $color) {
        $wp_customize->add_setting($color_id, [
            'default'           => $color['default'],
            'sanitize_callback' => 'sanitize_hex_color',
        ]);

        $wp_customize->add_control(new WP_Customize_Color_Control(
            $wp_customize,
            $color_id,
            [
                'label'   => $color['label'],
                'section' => 'theme_colors',
                'settings'=> $color_id,
            ]
        ));
    }
}
add_action('customize_register', 'mytheme_customize_register');

function mytheme_customizer_css() {
    ?>
    <style>
        :root {
            --primary-color: <?php echo esc_attr(get_theme_mod('primary_color', '#ff6600')); ?>;
            --secondary-color: <?php echo esc_attr(get_theme_mod('secondary_color', '#0066ff')); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'mytheme_customizer_css');
?>