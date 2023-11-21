<?php

// Chargement des scripts css et js
add_action('wp_enqueue_scripts', function(){
    
    wp_register_style('bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css");
    wp_enqueue_style('bootstrap');

    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_enqueue_script('bootstrap');


});