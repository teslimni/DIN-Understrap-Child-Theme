<?php
/*
* Template Name: Partners Page
* Template Post Type: page
 */
?>
<?php get_header(); ?>
<div class="wrapper" id="wrapper-index">

  <div id="content" class="container">

      <div class="row">
                 <div class="col-md-8">
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
        <header>
            <p>Our Partners in<?php the_title('<span><h2>', '</h2></span>') ?></p>
        </header>
        <p>We are currently compiling and updating the data of our partners in <?php the_title(); ?> . Please check again later to see our partners in <?php the_title(); ?>.</p>
    </article>
   <?php endwhile; endif; ?>

              </div><!-- #primary -->
         </div><!-- .row -->
     </div><!-- Container end -->
   </div><!-- Wrapper end -->
   <?php get_footer(); ?>
