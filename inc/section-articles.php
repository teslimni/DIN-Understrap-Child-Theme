<div class="section__features">
        <div class="section__title">
            <h2>
                Latest Articles
                <span></span>
            </h2>
        </div>
        <div class="section__features-img">
            <?php get_template_part('/./template-parts/carousel'); ?>
        </div>
    </div>
    <div class="container">
        <div class="row m-t-3">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- post -->
            <div class="col-md-4">
                <div class="card mb-3">
                  <img class="card-img-top" src="<?php echo the_post_thumbnail(); ?>">
                  <div class="card-body">
                    <h4 class="card-title"><?php the_title(); ?></h4>
                    <p class="card-text">
                        <?php the_content(); ?>
                        <a href="#">Read more</a>
                    </p>
                  </div>
                </div>
            </div>
            <?php endwhile; ?>
            <!-- post navigation -->
            <?php else: ?>
            <!-- no posts found -->
            <p>No post found</p>
            <?php endif; ?>
        </div>
        <button type="button" class="btn btn-danger m-t-2 m-b-3 article__btn">
            View all our articles
        </button>
</div>
