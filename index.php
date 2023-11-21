<?php get_header(); ?>

<h1 class="text-center mt-5">Des supers articles</h1>
<?php if (have_posts()): ?>

    <div class="container mt-5">
        <div class="row">
            <?php while(have_posts()):
                the_post(); ?>

                <div class="col-4">

                    <div class="card">
                        <img src="<?php the_post_thumbnail_url('card-header'); ?>" class="card-img-top" style="height: 230px">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm">Voir plus</a>
                        </div>
                    </div>

                </div>

            <?php endwhile; ?>
        </div>

        <?php dietetique_pagination(); ?>

    </div>

<?php else: ?>

    <p>Il n'y a aucun article</p>

<?php endif; ?>

<?php get_footer(); ?>