<?php
// Crée une pagination customisée pour nos articles
function dietetique_pagination(){ ?>

    <nav aria-label="Pagination articles" class="d-flex justify-content-center">
        <ul class="pagination">
        <?php 
            $pages = paginate_links(['type' => 'array']); 
            foreach($pages as $page){

                // pour chaque page d'article
                echo '<li class="page-item">';
                    echo str_replace('page-numbers','page-link',$page);
                echo '</li>';

            }
        
        ?>
        </ul>
        <!--<ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Précedent</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
        </ul>-->
    </nav>

<?php } ?>