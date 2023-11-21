<?php get_header(); ?>
<?php the_post(); ?>

<h1 class="text-center mt-5">
    <?php the_title(); ?>
    <small class="h3 text-muted">par
        <span class="text-primary"><?php the_author(); ?></span>
    </small>
</h1>
<div class="container mt-5 mb-5">
    <div class="row justify-content-center gap-3">
        <div class="col-sm-8 mb-3 mb-sm-0">
            <div class="card">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" style="height: 280px; object-fit: cover" alt="...">
                <div class="card-body">
                    <p class="card-text"><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>