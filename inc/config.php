<?php
// Setup du title
add_action('after_setup_theme', function(){

	// Support du title
	add_theme_support('title-tag');

	// Configuration des formats d'images utilisés
	add_image_size('card-header', 350, 215, true);

});

// Prise en charge des images sur les posts et du menu
add_theme_support('post-thumbnails');
add_theme_support('menus');

// Suppression de format d'images
add_action('init', function(){
	remove_image_size( 'medium' );
});