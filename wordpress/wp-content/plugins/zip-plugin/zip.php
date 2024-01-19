<?php
/*
Plugin Name: Zip Code Plugin
Description: A simple WordPress plugin that Validates zip code.
Version: 1.0
Author: Supriya Shiwakoti
*/

function zip_validation_enqueue_scripts() {
    $plugin_version = '1.0';
    
    wp_enqueue_script('inputmask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js', array('jquery'), '5.0.6', true);

    wp_enqueue_script('zip-validation-script', plugin_dir_url(__FILE__) . 'zip.js', array('jquery'), $plugin_version, true);
}

add_action('wp_enqueue_scripts', 'zip_validation_enqueue_scripts');

function zip_code_form_shortcode() {
    ob_start(); // Start output buffering
    ?>
    <form id="zip-code-form">
        <label for="zip-code">Zip Code:</label>
        <input type="text" id="zip-code" name="zip-code" required>

        <button type="button" id="submit-button">Submit</button>
    </form>
    <?php
    return ob_get_clean(); // Return the buffered content
}

add_shortcode('zip_code_form', 'zip_code_form_shortcode');
?>
