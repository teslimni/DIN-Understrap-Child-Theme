<div class="row">
    <?php // check if the flexible content field has rows of data
    if( have_rows('partners_section') ):
        // loop through the rows of data
        while ( have_rows('partners_section') ) : the_row();
            if( get_row_layout() == 'partners' ): ?>
                <div class="col-md-12">
                    <div class="section__title">
                        <h2>
                            <?php the_sub_field('partners_section_title'); ?>
                    <?php the_sub_field('partners_logo'); ?>
                            <span></span>
                        </h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <?php
                    $images = get_sub_field('partners_logos');
                    if( $images ): ?>

                        <ul class="list-inline text-center">
                            <?php foreach( $images as $image ): ?>
                                <li class="list-inline-item">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <button type="button" class="btn btn-danger m-t-2 m-b-3 article__btn">
                    <a href="<?php the_sub_field('partners_section_button_url'); ?>">
                        <?php the_sub_field('partners_section_button_text'); ?>
                    </a>
         <!--        View all our partners -->
                </button>
             <?php endif;
        endwhile;
    endif; ?>
</div>
