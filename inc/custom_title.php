<?php 
// Modifier l'affichage de base du titre
add_filter('document_title_parts', function( $title_parts_array ) {

    $title_parts_array['tagline'] = "Angelina Diététique";
    return $title_parts_array;
    
} );

// Change le séparateur du title
add_filter('document_title_separator', function (){
    return '|';
});