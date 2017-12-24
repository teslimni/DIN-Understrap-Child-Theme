<?php
/**
 * The template for displaying archive of dowloadables.
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
               $count = get_option('posts_per_page', 15);
               $paged = get_query_var('paged') ? get_query_var('paged') : 1;
               $offset = ($paged - 1) * $count;
               $args = array (
                   'posts_per_page' => $count,
                   'paged' => $paged,
                   'offset' => $offset,
                   'post_type' => 'download', // custom post type
                );
                    $query = new WP_Query($args);
               if ($query->have_posts()) :
                  while ($query->have_posts()) : $query->the_post(); ?>
                     <div class="col-md-3">
                         <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
                             <?php if ( get_field('downloadable') || get_field('name_of_resource') ) : ?>
                                 <img src="<?php echo the_field('image_of_resource'); ?>" alt="">
                             <div class="card-block">
                                 <header>
                                     <h4><?php echo the_field('name_of_resource'); ?></h4>
                                 </header>
                                 <button class="btn btn-danger"><a class="btn-download" href="<?php the_permalink(); ?>">Check it out</a>
                                </button>
                             </div>
                         <?php endif; ?>
                         </article>
                     </div>
                  <?php endwhile;
               previous_posts_link('Previous', $query->max_num_pages);
               next_posts_link('Next', $query->max_num_pages);
               else :
               // no posts found
               endif;
               wp_reset_postdata();
              ?>
        </div>
  </main><!-- #main -->
</div>
<!-- .container -->
  <!-- </div>#primary -->
<?php
get_footer();
