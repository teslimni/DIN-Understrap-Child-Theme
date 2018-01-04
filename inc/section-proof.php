<div class="col-md-12 social__proof-img">

        <?php

        // check if the flexible content field has rows of data
        if( have_rows('social_proof') ):
             // loop through the rows of data
            while ( have_rows('social_proof') ) : the_row();
                if( get_row_layout() == 'social_proof_content' ): ?>
                    <ul class="list-inline">
                        <li class="list-inline-item h4 social__proof-text text-uppercase text-muted">
                        <?php the_sub_field('entry_text'); ?>
                        </li>
                        <?php
                        $images = get_sub_field('partners_logo');
                        if( $images ): ?>
                        <?php foreach( $images as $image ): ?>
                            <li class="list-inline-item">
                                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <?php endif; //end of get_row_layout
                endwhile; // end of while have_rows
            reset_rows();
            endif; // end of have_rows ?>
</div>
