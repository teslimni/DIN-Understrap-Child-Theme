<?php
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
    // check if the flexible content field has rows of data
    if( have_rows('about_section') ):
         // loop through the rows of data
        while ( have_rows('about_section') ) : the_row();

            if( get_row_layout() == 'about_section_content' ): ?>
                <h2 class="section__title">
               <?php the_sub_field('about_title'); ?>
                <span></span>
                </h2>
                <div class="section__text text-justify">
                   <?php the_sub_field('about_content'); ?>
                </div>
                <button type="button" class="btn btn-danger m-b-3">
                    <a class="text-white" href="<?php the_sub_field('about_url'); ?>">
                        <?php the_sub_field('about_button_text'); ?>
                    </a>
                </button>
                 <?php
            endif;
        endwhile;
    endif;

    ?>


<?php endwhile; ?>

<?php endif; ?>