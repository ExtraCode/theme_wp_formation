<?php
// Ajoute une métabox
add_action('add_meta_boxes', function(){

    add_meta_box('dietetique_favorite_post','Article en favoris', function($post){ 
        
        $value = get_post_meta(get_the_ID(), 'dietetique_favoris', true); ?>
        <input type="checkbox" value="1" name="dietetique_favoris" id="dietetique_favoris" 
        <?= checked($value, "1") ?> >
        <label for="dietetique_favoris">Mettre cet article en favori</label>

    <?php }, 'post', 'side');

});

// Sauvegarder la métadonnée en BDD
add_action('save_post', function($post_id){

    if(current_user_can("edit_post", $post_id)){

        if(array_key_exists('dietetique_favoris', $_POST)){
            update_post_meta($post_id,"dietetique_favoris", 1);
        }else{
            delete_post_meta($post_id, "dietetique_favoris");
        }
    }
});