    <?php if( have_rows('hero_area') ) :
         // loop through the rows of data
            while ( have_rows('hero_area') ) : the_row();

                if( get_row_layout() == 'hero_image' ): ?>

                    <div class="carousel-inne">
                        <div class="carousel-item">
                            <img src="<?php the_sub_field('image'); ?>">
                             <div class="carousel-caption">
                              <h2><?php the_sub_field('hero_image_caption'); ?></h2>
                            </div>
                        </div>
                    </div>


                 <?php
                endif;
            reset_rows();
            endwhile;
    endif; ?>
