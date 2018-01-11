<div class="section__features">
        <div class="section__title wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
            <h2>
                Latest Articles
                <span></span>
            </h2>
        </div>
        <div class="section__features-img">
            <?php get_template_part('./template-parts/carousel'); ?>
        </div>
    </div>
    <div class="container">
        <div class="row m-t-3">
            <?php

             query_posts(
                array(
                    'posts_per_page' => 9,
                    'post_type' => 'post',
                    'ignore_sticky_posts' => 1
                )
              );
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- post -->

            <div class="col-md-4 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                <div class="card mb-3">
                    <?php if ( has_post_thumbnail() ) : ?>
                         <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                    <?php endif; ?>

                  <div class="card-body">
                    <h4 class="card-title"><?php the_title(); ?></h4>
                    <p class="card-text">
                        <?php the_content(); ?>
                        <a class="card__read-more" href="<?php the_permalink(); ?>">Read more ...</a>
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
            <?php wp_reset_query(); ?>
        </div>
        <button type="button" class="btn btn-danger btn-lg m-t-2 m-b-3 article__btn wow fadeIn" data-wow-delay="0.4s">
            <a href="#">View all articles</a>
        </button>
</div>
