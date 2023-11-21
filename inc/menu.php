<?php
// Enregistrement d'un emplacement de menu
register_nav_menu('header', 'Entête du menu');

// Ajoute une classe aux li du menu
add_filter('nav_menu_css_class', function($classes){
    $classes[] = 'nav-item';
    return $classes;
});

// Ajoute une classe aux liens du menu
add_filter('nav_menu_link_attributes', function($attrs){
    $attrs['class'] = 'nav-link';
    return $attrs;
});