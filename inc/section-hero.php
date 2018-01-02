    <?php if( have_rows('hero_area') ) :
         // loop through the rows of data
            while ( have_rows('hero_area') ) : the_row();

                if( get_row_layout() == 'hero_image' ): ?>
                    <img src="<?php the_sub_field('image'); ?>">
                  <p><?php the_sub_field('hero_image_caption'); ?></p>
                 <?php
                endif;
            reset_rows();
            endwhile;
    endif; ?>
