<?php
// Setup du title
add_action('after_setup_theme', function(){
	add_theme_support('title-tag');
});

// Prise en charge des images sur les posts et du menu
add_theme_support('post-thumbnails');
add_theme_support('menus');