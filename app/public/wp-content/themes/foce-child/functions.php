<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    //  Chargement du style personnalisé pour le theme
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css');

    // Enqueue Custom Scripts
    wp_enqueue_script('order-custom-scripts', get_theme_file_uri('/assets/js/custom-scripts.js'), array('jquery'), '1.0.0', true);

    // Assurez-vous que jQuery est chargé avant votre script personnalisé
    wp_enqueue_script('jquery');


}

// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

// Gérer le parallax
function my_theme_enqueue_scripts()
{
    // Enregistrez le fichier JavaScript personnalisé dans le thème
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), null, true);

    // Assurez-vous que jQuery est chargé avant votre script personnalisé
    wp_enqueue_script('jquery');

    // Ajoutez une variable pour le chemin de votre fichier JavaScript dans le script
    wp_localize_script(
        'custom-script',
        'theme_vars',
        array(
            'template_directory' => get_template_directory_uri()
        )
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
