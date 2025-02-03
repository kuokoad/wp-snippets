<?php

// Multiple plugins

add_action('plugins_loaded', function () {
    // Specify the user ID and the plugins to disable
    $user_id_to_disable = 42; // Replace with the user ID
    $plugins_to_disable = [
        'uipress-lite/uipress-lite.php', // Replace with the Lite plugin's file path
        'uipress-pro/uipress-pro.php',   // Replace with the Pro plugin's file path
    ];

    // Get the current user
    if (is_user_logged_in() && get_current_user_id() === $user_id_to_disable) {
        foreach ($plugins_to_disable as $plugin) {
            // Check if the plugin is active and deactivate it
            if (is_plugin_active($plugin)) {
                deactivate_plugins($plugin);
            }
        }
    }
});


// Single Plugin

add_action('plugins_loaded', function () {
    // Specify the user ID and the plugin file to disable
    $user_id_to_disable = 123; // Replace with the user ID
    $plugin_to_disable = 'plugin-folder/plugin-file.php'; // Replace with the plugin's file path

    // Get the current user
    if (is_user_logged_in() && get_current_user_id() === $user_id_to_disable) {
        // Deactivate the plugin if it's active
        if (is_plugin_active($plugin_to_disable)) {
            deactivate_plugins($plugin_to_disable);
        }
    }
});
