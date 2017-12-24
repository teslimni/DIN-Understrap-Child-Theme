<div class="col-md-12">
    <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php
        // check if the flexible content field has rows of data
        if( have_rows('services_section') ):
             // loop through the rows of data
            while ( have_rows('services_section') ) : the_row();
                if( get_row_layout() == 'services_content') : ?>
                    <div class="col-md-4 services__item m-b-3">
                        <img class="img-fluid" src="<?php the_sub_field('service_image'); ?>" alt="#">
                        <h2 class="services__item-title m-t-1"><?php the_sub_field('service_title'); ?></h2>
                        <div class="text-justify">
                            <?php the_sub_field('service_description'); ?>
                        </div>
                        <button class="btn btn-danger">
                            <a href="<?php the_sub_field('service_button_url'); ?>">
                                <?php the_sub_field('service_button_text'); ?>
                            </a>
                        </button>
                    </div>
        <?php endif; endwhile; endif; ?>
    <?php endwhile; endif; ?>
   <?php rewind_posts(); ?>
    </div>
</div>
