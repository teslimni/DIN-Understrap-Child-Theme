<?php
// check if the flexible content field has rows of data
if( have_rows('latest_book_section') ):

     // loop through the rows of data
    while ( have_rows('latest_book_section') ) : the_row();

        if( get_row_layout() == 'latest_book' ): ?>

            <h2 class="section__title">
           <?php the_sub_field('book_section_title'); ?>
                <span></span>
            </h2>
            <div class="row m-b-3">
                <div class="col-md-4 offset-md-2">
                    <img class="img-fluid" src="<?php the_sub_field('latest_book_image'); ?>" alt="<?php the_sub_field('latest_book_title'); ?>">
                </div>
                <div class="col-md-4">
                    <h2><?php the_sub_field('latest_book_title'); ?></h2>
                    <p><?php the_sub_field('latest_book_description'); ?></p>
                </div>
            </div>
            <button type="button" class="btn btn-danger m-t-2 m-b-3 book__btn">
                <a href="<?php the_sub_field('latest_book_button_url'); ?>">
                <?php the_sub_field('latest_book_button_text'); ?>
                </a>
            </button>
        <?php endif;

    endwhile;
endif;
rewind_posts(); ?>
