<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="wrapper-index">

  <div id="content" class="container">

      <div class="row">
                 <div class="col-md-8">
                    <?php
                    if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
                     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>">
                        <h2 class="post-title"><?php the_title(); ?></h2>
                       <?php if( has_post_thumbnail() ) {
                          echo the_post_thumbnail('full');
                        } ?>
                         <div class="post-entry"><?php the_content(); ?></div>
                          <div class="row resource_meta">
                            <?php if( current_user_can('read') ) : ?>
                                <?php if( get_field('download_link') || get_field('resource_image') || get_field('resource_title')  ): ?>
                                  <p><?php the_field('field_name'); ?></p>

                                      <div class="col-sm-4 img-meta">
                                          <!-- <h2 class="download">Download</h2> -->
                                        <img class="download-gift" src=" <?php the_field('resource_image'); ?>" alt="">
                                      </div>
                                      <div class="col-sm-8 download-meta">
                                        <h4>Further reading</h4>
                                         <h1 class="m-t-3 text-primary"><?php echo the_field('resource_title'); ?></h1>
                                         <ul>
                                           <li>Develop confidence in tackling the arguments used by the Boko Haram Group</li>
                                           <li>Master the simple methods of answering the Boko Haram questions</li>
                                           <li>Understand why conventional education is not our problem, but our attitude</li>
                                         </ul>
                                        <button class="btn btn-danger m-l-3 "><a class="btn-download" href="<?php echo the_field('download_link'); ?>">Download your copy now</a></button>
                                      </div>
                                 <?php endif; ?>
                            <?php else : ?>
                               <?php if( get_field('download_link') || get_field('resource_image') || get_field('resource_title')  ): ?>
                                  <p><?php the_field('field_name'); ?></p>

                                      <div class="col-sm-4 img-meta">
                                          <!-- <h2 class="download">Download</h2> -->
                                        <img class="download-gift" src=" <?php the_field('resource_image'); ?>" alt="">
                                      </div>
                                      <div class="col-sm-8 download-meta">
                                        <h4>Further reading</h4>
                                         <h1 class="m-t-3 text-primary"><?php echo the_field('resource_title'); ?></h1>
                                          <?php echo the_field('resource_description'); ?>
                                         <h4>Subscribe to download your copy now</h4>
                                         <?php
                                           //$wpMail = new wpMail();
                                           //$wpMail->hardcoded(1);
                                           newsletters_hardcode(false, false, false, 1);
                                         ?>
                                      </div>
                                 <?php endif; ?>
                            <?php endif ?>
                        </div>
                         <?php wp_link_pages(); ?>
                         <?php the_tags(); ?>

                    <?php endwhile; ?>
                    <div class="nav-box">
                        <div class="prev"><?php previous_post_link(); ?></div>
                        <div class="next"><?php next_post_link(); ?></div>
                    </div>
                    <hr>
                    <?php comments_template(); ?>
                     <?php else : ?>
                        <?php get_template_part('post', 'not-found'); ?>
                     <?php endif; ?>

                       </article>
                     </div>

                   <?php get_sidebar(); ?>
                </div>
           </div><!-- #primary -->


      </div><!-- .row -->
  </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
