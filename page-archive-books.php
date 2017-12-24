<?php
/**
 * Template Name: Download Archive Template.
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
                <h2><?php the_title(); ?></h2>          
           </div>
       </div>
       <hr>
       <div class="home-top row">
            <?php
            $args = array(
              'post_type' => 'book',
              'paged'     => '$paged'
            );
            $books = new WP_Query($args);
            if ( $books->have_posts() ) : while ( $books->have_posts() ) : $books->the_post(); ?>
                <div class="col-sm-4 book-card">
                    <img class="book-cover" src="<?php the_field('book_cover'); ?>" alt="<?php the_field('book_cover')[0]; ?>">
                    <h1 class="h5 m-t-1">
                       <?php the_field('download_title'); ?>
                    </h1>
                    <button class="btn btn-danger book-button">
                        <a href="<?php the_field('downloadable'); ?>"><?php the_field('call_to_action_text'); ?></a>
                    </button>
                </div>
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
