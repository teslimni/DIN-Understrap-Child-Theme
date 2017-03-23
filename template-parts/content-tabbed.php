<?php global $redux_teslim; ?>

  <ul class="nav nav-tabs resource-tabs">
      <li class="nav-item text-xs-center">
          <a href="#newsletter" class="nav-link active" data-toggle="tab">
              <h5>Newsletter</h5>
          </a>
      </li>
      <li class="nav-item text-xs-center">
          <a href="#downloads" class="nav-link" data-toggle="tab">
              <h5>Downloads</h5>
          </a>
      </li>
  </ul>
  <div class="card tab-content">
      <div class="tab-pane active" id="newsletter" role="tabpanel">
           <?php if ( is_active_sidebar( 'home-bottom' ) ) : ?>

                 <?php dynamic_sidebar( 'home-bottom' ); ?>

         <?php endif; ?>
      </div><!-- #newsletter-->
          <div class="tab-pane downloads" id="downloads" role="tabpanel">
              <p>The resources below are all yours for free:
              </p>
              <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
               <?php if( get_field('download_link') || get_field('resource_image') || get_field('resource_title')  ): ?>
                <ul class="media-list">
                  <li class="media">
                    <div class="media-left adjusted-img">
                       <img src="<?php the_field('resource_image'); ?>" alt="">
                    </div>
                    <div class="media-body">
                        <h4><a href="<?php the_field('download_link'); ?>"><?php the_field('resource_title'); ?></a></h4>
                    </div>
                  </li>
                </ul>
               <?php endif ?>

              <?php endwhile; endif; ?>
          </div><!-- #downloads-->

  </div><!-- .tab-content -->




