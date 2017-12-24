<div class="col-md-12 social__proof-img p-t-2">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php
        // check if the flexible content field has rows of data
        if( have_rows('social_proof_section') ):
             // loop through the rows of data
            while ( have_rows('social_proof_section') ) : the_row();
                if( get_row_layout() == 'social_proof_content' ): ?>
                    <ul class="list-inline">

                        <li class="list-inline-item h4 social__proof-text text-uppercase text-muted">
                        <?php the_sub_field('entry_text'); ?>
                        </li>
                        <li class="list-inline-item">
                            <img src="<?php the_sub_field('partners_logo'); ?>" width="87px" height="70px">
                        </li>
                    </ul>
                <?php endif; //end of get_row_layout
                endwhile; // end of while have_rows
            endif; // end of have_rows
        endwhile; // end of while(have_posts)
    endif; // end of have_posts ?>
    <?php rewind_posts(); ?>
</div>
