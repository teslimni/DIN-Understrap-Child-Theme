<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dawahinstitute
 */

get_header(); ?>

<div class="container">
  <!-- <div id="primary" class="content-area"> -->
    <main id="main" class="site-main col-xs-12" role="main">
       <div class="row">
           <div class="col-xs-12 m-t-3">
               <?php if (is_post_type_archive()) : ?>
                    <h1><?php post_type_archive_title(); ?></h1>
               <?php endif; ?>
           </div>
       </div>
       <hr>
       <div class="home-top row">
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            if(have_rows('book') ) : ?>
                <?php while( have_rows('book') ) : the_row(); ?>
                    <?php if( get_row_layout() == 'book_identity' ) : ?>
                        <div class="col-sm-4 book-card">
                            <img class="book-cover" src="<?php the_sub_field('book_cover_image'); ?>" alt="Is Boko Haram?">
                            <h1 class="h5 m-t-3">
                                <a href="<?php the_permalink(); ?>" title="<?php the_sub_field('book_title'); ?>"><?php the_sub_field('book_title'); ?></a>
                            </h1>
                            <p><?php the_sub_field('book_sub_title'); ?></p>
                            <button class="btn btn-danger book-button">
                                <a href="<?php the_sub_field('download_link'); ?>">Read the Book</a>
                            </button>
                        </div>
                    <?php endif; endwhile; ?>
            <?php endif; ?>
            <?php
               previous_posts_link('Previous', $query->max_num_pages);
               next_posts_link('Next', $query->max_num_pages);
               //else :
               // no posts found
              // endif;
               //wp_reset_postdata();
              ?>
          <?php endwhile; endif; ?>
        </div>
    </main><!-- #main -->
</div>
<!-- .container -->
  <!-- </div>#primary -->
<?php
get_footer();
