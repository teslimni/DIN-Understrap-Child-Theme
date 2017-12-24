<?php
/**
 * The template for displaying archive pages.
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
               <h1><?php wp_title(''); ?></h1>
           </div>
       </div>
       <hr>
       <div class="home-top row">
          <?php
            $args = array(
                 'posts_per_page' => 15,
                 'ignore_sticky_posts' => 1,
             );
            query_posts($args);

            if ( have_posts() ) :  $postcounter = 1; ?>
             <?php while ( have_posts() ) : the_post();?>
                <div class="col-md-4">
                   <div class=card>
                        <?php if( has_post_thumbnail() ){
                            the_post_thumbnail( 'large' );
                        }?>
                       <div class="card-block">
                            <?php the_title('<h4 class="h5 card-title post-title"><a href="' . esc_url( get_permalink() ) . ' ">', '</a></h4>'); ?>
                           <?php the_excerpt(); ?>
                        </div>
                   </div>
                </div>

               <?php if ( ($postcounter % 9)  == 0 ) : ?>

                    <div class="col-xs-12">
                       <?php get_template_part('template-parts/content', 'promo'); ?>
                    </div>

                    <?php endif;
                $postcounter++;
                endwhile; endif;
          ?>
          <?php echo paginate_links(); ?>
        </div>
  </main><!-- #main -->
</div>
<!-- .container -->
  <!-- </div>#primary -->
<?php
get_footer();
