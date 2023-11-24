<?php
/**
* Template Name: Two col
* Template Post Type: post, page
*
*/
?>

<?php get_header(); ?>

<div class="container">
   <div class="row">
       <div class="col-10">
           <?php the_content(); ?>
       </div>
       <div class="col-2">
           <?php echo "Quand j'ai actualisé, il était : " . date("H:i:s"); ?>
       </div>
   </div>
</div>

<?php get_footer(); ?>

