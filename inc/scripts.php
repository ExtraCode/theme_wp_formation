<?php

// Chargement des scripts css et js
add_action('wp_enqueue_scripts', function(){
    
    // BOOTSTRAP
    wp_register_style('bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css");
    wp_enqueue_style('bootstrap');

    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_enqueue_script('bootstrap');

    // FONT AWESOME
    wp_register_style('fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css");
    wp_enqueue_style('fontawesome');

    // CUSTOM CSS
    wp_register_style('all_pages_css', get_template_directory_uri() . "/css/all_pages.css");
    wp_enqueue_style('all_pages_css');


});