<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap-child
 */

get_header(); ?>

<div class="wrapper" id="wrapper-index">
    <div id="content" class="container">
        <div class="row">
             <div class="col-sm-12">
                <?php
                if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>">
                       <?php if( has_post_thumbnail() ) {
                          echo the_post_thumbnail('full');
                        } ?>
                        <div class="post-entry">
                            <?php the_content(); ?>
                        </div>
                        <div class="row resource_meta">
                            <?php if( get_field('name_of_resource') || get_field('name_of_resource') || get_field('resource_title')  ): ?>
                                <div class="col-md-4 img-meta m-b-3">
                                    <img class="download-gift" src=" <?php echo the_field('image_of_resource'); ?>" alt="<?php echo 'image_of_resource'; ?>">
                                </div>
                                <div class="col-md-8 download-meta">
                                    <h1 class="m-t-3 text-primary"><?php echo the_field('name_of_resource'); ?></h1>
                                    <?php echo the_field('description_of_resource') ?>
                                    <button class="btn btn-danger "><a class="btn-download" href="<?php echo the_field('downloadable'); ?>">Download your copy now</a></button>
                                </div>
                            <?php endif; ?>
                        </div>
                   </article>
                        <?php wp_link_pages(); ?>
                        <?php the_tags(); ?>
                <?php endwhile; endif; ?>
                <div class="nav-box">
                    <div class="prev"><?php previous_post_link(); ?></div>
                    <div class="next"><?php next_post_link(); ?></div>
                </div>
            </div><!-- .col-sm-12-->
        </div><!-- .row -->
    </div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
