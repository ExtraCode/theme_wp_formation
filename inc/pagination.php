<?php
// Crée une pagination customisée pour nos articles
function dietetique_pagination(){ ?>

    <nav aria-label="Pagination articles" class="d-flex justify-content-center my-5">
        <ul class="pagination">
        <?php 
            $pages = paginate_links(['type' => 'array']);
            
            // s'il n'y a pas de pagination
            if($pages === null){
                return;
            }
            
            foreach($pages as $page){

                $class = 'page-item';

                // si la page en cours contient le mot "current"
                if(str_contains($page, 'current')){
                    $class.= ' active';
                }

                // pour chaque page d'article
                echo '<li class="'.$class.'">';
                    echo str_replace('page-numbers','page-link',$page);
                echo '</li>';

            }
        
        ?>
        </ul>
        
    </nav>

<?php } ?>