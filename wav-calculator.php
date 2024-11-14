<?php
/**
 * Plugin Name: Vincent's WAV Recording Time Calculator
 * Plugin URI: https://vincentrozenberg.com/
 * Description: A calculator for determining WAV recording time based on storage capacity and audio settings.
 * Version: 1.0.0
 * Author: Vincent Rozenberg
 * Author URI: https://vincentrozenberg.com
 * License: MIT
 */

if (!defined('WPINC')) {
    die;
}

function wav_calculator_shortcode() {
    // Get the path to the HTML file
    $file_path = plugin_dir_path(__FILE__) . 'wav-calculator-mono.php';
    
    // Read the file content
    $content = file_get_contents($file_path);
    
    // Return the file content
    return $content;
}

add_shortcode('wav_calculator', 'wav_calculator_shortcode');